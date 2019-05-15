<!----------------footer----------------->
<footer>
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="footer-nav">
                        <ul class="clearfix">
                            <li><a href="javascript:void(0);">About us</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-nav">
                        <ul class="clearfix">
                            
                            <li><a href="javascript:void(0);">How it works</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-nav">
                        <ul class="clearfix">
                            <li><a href="javascript:void(0);">Artists</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="footer-social text-center">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <?php if(!Auth::check()): ?>
                        <div class="footerBtns">
                            <a class="btn custom-btn" href="<?php echo e(url('/artist/registration')); ?>">
                                <span>REGISTER AS ARTIST</span>
                            </a>
                            <a class="btn custom-btn" href="<?php echo e(url('/recruiter/registration')); ?>">
                                <span>REGISTER AS RECRUITER</span>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">&copy; Copyright 2018 <a href="javascript:void(0)">www.artclan.com</a> All Rights Reserved.</div>
</footer>