<?php

namespace App\Modules\Module\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Module\Models\Module;
use Illuminate\Http\Request;
use Auth;
use Mail;
use Validator;
use DataTables;
use \Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModuleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function listModule()
    {
        return view('Module::list');
    }

    public function data()
    {
        $modules = array_map('basename', File::directories(base_path().'/app/Modules'));
        $data = [];
        
        foreach ($modules as $module)
        {
            $data[]['name'] = $module;
        }
        return Datatables::of($data)
            //    ->addColumn('answer', function($module) {
            //        return '<textarea>'.$module->answer.'</textarea>';
            //    })
            // ->rawColumns(['answer'])
            ->make(true);
    }

    public function create(Request $request)
    {
        $modules = array_map('basename', File::directories(base_path().'/app/Modules'));
        
        if($request->method()=="GET")
        {
            return view('Module::create',['modules'=>$modules]);
        }
        else
        {
            //remove all special symbol and space and number from module name
            //make module name in snake case
            $module_name = preg_replace('/[^a-zA-Z]+/','',ucwords($request->module));
            $copied_module = $request->model_copy == '' ? 'Module/ModuleFiles' : $request->model_copy;
            
            //get all module name from Module folder
            $exsisting_modules = array_map('basename', File::directories(base_path().'/app/Modules'));
            
            foreach ($exsisting_modules as $exsisting_module)
            {
                if($exsisting_module == $module_name)
                {
                    return redirect('admin/module/create')->with('error','Module Already Exist!');
                }
            }
            
            //create folder structure of module
            $folder = mkdir(base_path().'/app/Modules/'.$module_name);
            if($folder)
            {
                $controller_folder = mkdir(base_path().'/app/Modules/'.$module_name.'/Controllers');
                if($controller_folder)
                {
                    $model_folder = mkdir(base_path().'/app/Modules/'.$module_name.'/Models');
                    $view_folder = mkdir(base_path().'/app/Modules/'.$module_name.'/Views');
                    $route = file_get_contents(base_path().'/app/Modules/Faq/routes.php');
                }
                
                
                //create route file
                $new = is_file(base_path().'/app/Modules/'.$copied_module.'/routes.php');
                if($new)
                {
                    $new = file_get_contents(base_path().'/app/Modules/'.$copied_module.'/routes.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/routes.php', str_replace(strtolower($copied_module), strtolower($module_name), $new));
                    $new = file_get_contents(base_path().'/app/Modules/'.$module_name.'/routes.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/routes.php', str_replace('Faq', $module_name, $new));
                }
                
                
                //create controller file
                $new = is_file(base_path().'/app/Modules/'.$copied_module.'/Controllers/'.$copied_module.'Controller.php');
                if($new)
                {
                    $new = file_get_contents(base_path().'/app/Modules/'.$copied_module.'/Controllers/'.$copied_module.'Controller.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/Controllers/'.$module_name.'Controller.php', str_replace(strtolower($copied_module), strtolower($module_name), $new));
                    $new = file_get_contents(base_path().'/app/Modules/'.$module_name.'/Controllers/'.$module_name.'Controller.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/Controllers/'.$module_name.'Controller.php', str_replace('Faq', $module_name, $new));
                }
                
                
                //create model file
                $new = is_file(base_path().'/app/Modules/'.$copied_module.'/Models/'.$copied_module.'.php');
                if($new)
                {
                    $new = file_get_contents(base_path().'/app/Modules/'.$copied_module.'/Models/'.$copied_module.'.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/Models/'.$module_name.'.php', str_replace(strtolower($copied_module), strtolower($module_name), $new));
                    $new = file_get_contents(base_path().'/app/Modules/'.$module_name.'/Models/'.$module_name.'.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/Models/'.$module_name.'.php', str_replace('Faq', $module_name, $new));
                }
                
                //create create blade view files
                $new = is_file(base_path().'/app/Modules/'.$copied_module.'/Views/create.blade.php');
                if($new)
                {
                    $new = file_get_contents(base_path().'/app/Modules/'.$copied_module.'/Views/create.blade.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/Views/create.blade.php', str_replace(strtolower($copied_module), strtolower($module_name), $new));
                    $new = file_get_contents(base_path().'/app/Modules/'.$module_name.'/Views/create.blade.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/Views/create.blade.php', str_replace('Faq', preg_replace('/(\w+)([A-Z])/U', '\\1 \\2', $module_name), $new));
                }
                
                //create list blade view files
                $new = is_file(base_path().'/app/Modules/'.$copied_module.'/Views/list.blade.php');
                if($new)
                {
                    $new = file_get_contents(base_path().'/app/Modules/'.$copied_module.'/Views/list.blade.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/Views/list.blade.php', str_replace(strtolower($copied_module), strtolower($module_name), $new));
                    $new = file_get_contents(base_path().'/app/Modules/'.$module_name.'/Views/list.blade.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/Views/list.blade.php', str_replace('Faq', preg_replace('/(\w+)([A-Z])/U', '\\1 \\2', $module_name), $new));
                }
                
                //create update blade view files
                $new = is_file(base_path().'/app/Modules/'.$copied_module.'/Views/update.blade.php');
                if($new)
                {
                    $new = file_get_contents(base_path().'/app/Modules/'.$copied_module.'/Views/update.blade.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/Views/update.blade.php', str_replace(strtolower($copied_module), strtolower($module_name), $new));
                    $new = file_get_contents(base_path().'/app/Modules/'.$module_name.'/Views/create.blade.php');
                    file_put_contents(base_path().'/app/Modules/'.$module_name.'/Views/update.blade.php', str_replace('Faq', preg_replace('/(\w+)([A-Z])/U', '\\1 \\2', $module_name), $new));
                }
                
                $this->createDatabaseTable($module_name);
                
                return redirect('admin/module/list')->with('success','Module Added Successfully!');
            }
        }
    }

    public function delete($module_name)
    {
        unlink(base_path().'/app/Modules/'.$module_name.'/routes.php');
        unlink(base_path().'/app/Modules/'.$module_name.'/Controllers/'.$module_name.'Controller.php');
        unlink(base_path().'/app/Modules/'.$module_name.'/Models/'.$module_name.'.php');
        unlink(base_path().'/app/Modules/'.$module_name.'/Views/create.blade.php');
        unlink(base_path().'/app/Modules/'.$module_name.'/Views/list.blade.php');
        unlink(base_path().'/app/Modules/'.$module_name.'/Views/update.blade.php');
        
        rmdir(base_path().'/app/Modules/'.$module_name.'/Controllers');
        rmdir(base_path().'/app/Modules/'.$module_name.'/Views');
        rmdir(base_path().'/app/Modules/'.$module_name.'/Models');
        
        rmdir(base_path().'/app/Modules/'.$module_name);
        
        $this->removeDatabaseTable($module_name);
        return redirect('admin/module/list')->with('success','Module Delete Successfully!');
    }
    
    public function createDatabaseTable($table_name)
    {
        $table_name = strtolower(preg_replace('/\B([A-Z])/', '_$1', $table_name));
        Schema::create($table_name.'s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }
    
    public function removeDatabaseTable($table_name)
    {
        $table_name = strtolower(preg_replace('/\B([A-Z])/', '_$1', $table_name));
        Schema::dropIfExists($table_name.'s');
    }
    
    public function generateSeed()
    {
        $all_database_table = \Illuminate\Support\Facades\DB::select('SHOW TABLES');
        $database_name = 'Tables_in_'.env('DB_DATABASE');
        $table_name = [];
        foreach ($all_database_table as $index => $table)
        {
            $table_name[] = str_replace(env('DB_DATABASE').'_', '', $table->$database_name);
        }
        
        $seed_data = [];
        foreach($table_name as $table)
        {
            $data[] = \Illuminate\Support\Facades\DB::table($table)->get();
            
            foreach($data as $d)
            {
                if(count($d) > 0)
                {
                    foreach($d as $index=>$row)
                    {
                        foreach($row as $index=>$col)
                        {
                            if(!in_array($index, ['id','created_at','updated_at']))
                            $seed_data[$table][$index][] = $col;
                        }
                    }
                }
            }
        }
        dd($seed_data);
        $new = file_get_contents(base_path().'/app/Modules/Module/ModulFiles/seed-file.php');
        dd(str_replace('//seed-data', implode(',', $seed_data), $new));
        dd(file_put_contents($database_name, $data));
        dd($seed_data);
        
        dd($seed_data);
    }
}
