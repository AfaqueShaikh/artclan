jQuery(document).ready(function() 
{
    /* landing Form Validation Start */
    jQuery("#admin_login").validate({
    
        errorClass: 'text-danger',
        rules: {
           
            email: 
            {
                required: true,
                email:true
                
            },
            password: 
            {
                required: true,
                minlength:6
            }
           
        },
        messages: {
            email:{
                required: "Please enter email.",
                email: "Please enter valid email."
            },
           
            password: {
                required: "Please enter password.",
                minlength: "Please enter minimum 6 characters."
            }   
            
        },
        submitHandler: function(form) {
          
            form.submit();
        }
    });

    jQuery("#propertyForm").validate({

        errorClass: 'text-danger',
        rules: {
            purpose:
                {
                    required: true
                },
            type:
                {
                    required: true
                },
            size:
                {
                    required: true
                },
            floor_number:
                {
                    required: true
                },
            bedrooms:
                {
                    required: true
                },
            bathroom:
                {
                    required: true
                },
            price:
                {
                    required: true
                },
            address:
                {
                    required: true
                },
            contact:
                {
                    required: true
                },
            img1:
                {
                    required: true
                },
            img2:
                {
                    required: true
                },
            img3:
                {
                    required: true
                },
            img4:
                {
                    required: true
                }



        },
        messages: {

            purpose: {
                required: "Please enter purpose either selling or rental"
            },
            type: {
                required: "Please enter type"
            },
            size: {
                required: "Please enter size"
            },
            floor_number: {
                required: "Please enter number of floor"
            },
            bedrooms: {
                required: "Please enter number of bedrooms"
            },
            bathroom: {
                required: "Please enter number of bathrooms"
            },
            price: {
                required: "Please enter price"
            },
            address: {
                required: "Please enter enter address"
            },
            contact: {
                required: "Please enter contact no"
            },
            img1: {
                required: "Please enter image"
            },
            img2: {
                required: "Please enter image"
            },
            img3: {
                required: "Please enter image"
            },
            img4: {
                required: "Please enter image"
            }





        },
        submitHandler: function(form) {

            form.submit();
        }

    });
   

});

