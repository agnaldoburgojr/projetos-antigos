<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Cima Saúde - Atendimento</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?=base_url('assets/img/favicons/favicon.png')?>">

        <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicons/favicon-16x16.png')?>" sizes="16x16">
        <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicons/favicon-32x32.png')?>" sizes="32x32">
        <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicons/favicon-96x96.png')?>" sizes="96x96">
        <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicons/favicon-160x160.png')?>" sizes="160x160">
        <link rel="icon" type="image/png" href="<?=base_url('assets/img/favicons/favicon-192x192.png')?>" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('assets/img/favicons/apple-touch-icon-57x57.png')?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url('assets/img/favicons/apple-touch-icon-60x60.png')?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('assets/img/favicons/apple-touch-icon-72x72.png')?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/img/favicons/apple-touch-icon-76x76.png')?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('assets/img/favicons/apple-touch-icon-114x114.png')?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/img/favicons/apple-touch-icon-120x120.png')?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('assets/img/favicons/apple-touch-icon-144x144.png')?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('assets/img/favicons/apple-touch-icon-152x152.png')?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/img/favicons/apple-touch-icon-180x180.png')?>">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
         <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" id="css-main" href="<?=base_url('assets/css/oneui.css')?>">

         <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Login Content -->
        <div class="content overflow-hidden">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <!-- Login Block -->
                    <div class="block block-themed animated fadeIn" style="margin-top:50px;">
                        <div class="block-header" style="background: #00518b">
                            
                            <h3 class="block-title">Login</h3>
                        </div>
                        <div class="block-content block-content-full block-content-narrow">
                            <!-- Login Title -->
                            
                            <img src="<?=base_url('assets/img/cima/logo-cima.jpg')?>" style="margin-left: 20px; margin-top: 10px; margin-bottom: 10px;">
                            <!-- END Login Title -->

                            <!-- Login Form -->
                            <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-login form-horizontal push-30-t push-50" action="<?=base_url('atendimento/login');?>" method="post">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="text" name="email">
                                            <label for="email">Usuário</label>
                                            <div class="help-block text-right animated fadeInDown" style="color: #d26a5c"><?=form_error('email');?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                            <input class="form-control" type="password" 
                                            name="senha">
                                            <label for="senha">Senha</label>
                                            <div class="help-block text-right animated fadeInDown" style="color: #d26a5c"><?=form_error('senha')?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button class="btn btn-block btn-primary" style='float: right; background: #00518b' type="submit">Entrar <i class="si si-login pull-right"></i></button>
                                    </div>
                                </div>
                                <?php 
                                    if($error_database){?>
                                        <div class="help-block text-center animated fadeInDown" style="color: #d26a5c"><?=$error_database?></div>
                                <?php }?>
                            </form>
                            <!-- END Login Form -->
                        </div>
                    </div>
                    <!-- END Login Block -->
                </div>
            </div>
        </div>
        <!-- END Login Content -->

        <!-- Login Footer -->
        <!--<div class="push-10-t text-center animated fadeInUp">
            <small class="text-muted font-w600"><span>2017</span> &copy; Developed by ITTOW</small>
        </div>-->
        <!-- END Login Footer -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="<?=base_url('assets/js/core/jquery.min.js')?>"></script>
        <script src="<?=base_url('assets/js/core/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('assets/js/core/jquery.slimscroll.min.js')?>"></script>
        <script src="<?=base_url('assets/js/core/jquery.scrollLock.min.js')?>"></script>
        <script src="<?=base_url('assets/js/core/jquery.appear.min.js')?>"></script>
        <script src="<?=base_url('assets/js/core/jquery.countTo.min.js')?>"></script>
        <script src="<?=base_url('assets/js/core/jquery.placeholder.min.js')?>"></script>
        <script src="<?=base_url('assets/js/core/js.cookie.min.js')?>"></script>
        <script src="<?=base_url('assets/js/app.js')?>"></script>

        <!-- Page JS Plugins -->
        <script src="<?=base_url('assets/js/plugins/jquery-validation/jquery.validate.min.js')?>"></script>

        <!-- Page JS Code -->
        <script src="<?=base_url('assets/js/pages/base_pages_login.js')?>"></script>
    </body>
</html>