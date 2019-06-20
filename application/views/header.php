<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<?php
foreach ($contact as $c):
    ?>
    <html lang="en">
        <!--<![endif]-->
        <head>
            <!-- Title -->
            <title><?php get_lang('NAME'); ?></title>
            <link rel="icon" href="<?= base_url()?>images/logo.jpg" />
            <!-- Meta -->
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <meta name="description" content="">
            <meta name="author" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
            <!-- Favicon -->
            <link href="favicon.ico" rel="shortcut icon">
            <!-- Bootstrap Core CSS -->
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
            <!-- Template CSS -->
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet">
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/nexus.css" rel="stylesheet">
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css" rel="stylesheet">
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet">
            <!-- Google Fonts-->
            <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
            <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
            <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700" rel="stylesheet">
            <style>
                .d {

                    position: absolute;
                    height: 30px;

                }

                .d h1 {
                    font-size: 4.3em;
                    letter-spacing: -4px;
                    font-weight: 700;
                    color: #7e2ea0;
                    text-align: center;
                }

                .cssanimation, .cssanimation span {
                    animation-duration: 1s;
                    animation-fill-mode: both;
                }

                .cssanimation span { display: inline-block }

                .lightning { animation-name: lightning }
                @keyframes lightning {
                    from, 50%, to { opacity: 1 }
                    25%, 75% { opacity: 0 }
                }
            </style>
        </head>
        <body>
            <div id="body-bg">
                <ul class="social-icons pull-right hidden-xs">

                    <li class="">
                        <button title="instgram" class="fa fa-instagram btn" onclick='window.location.href = "<?= $c->insta ?>"' style="background-color: #e74c3c"></button>
                    </li>
                    <li class="social-facebook">
                        <a href="<?= $c->fb ?>" target="_blank" title="Facebook"></a>
                    </li>


                </ul>

                <div id="pre-header" class="container" style="height:340px">


                </div>
                <div id="header">
                    <div class="container">
                        <div class="row">

                            <!-- Logo -->
                            <div class="logo">
                                <!-- <div class="d">
                                     
                                     <h1 class="cssanimation lightning sequence" style="position: relative;left: 690px; font-style: italic;color: #c0392b">شركه سنيار الخليج</h1>
                                     
                                     <h1 class="cssanimation lightning sequence" style="font-style: italic;position: relative;right: 120px;bottom: 80px;color: #c0392b;direction: rtl">شركه سنيار الخليج</h1>
                            
                                     </div>-->
                                <a href="<?= base_url() ?>Home" title="">
                                    <img src="<?= base_url() ?>assets/img/logo.jpg" style="position: relative;bottom: 25px; height: 100px" alt="Logo" />
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                    </div>
                </div>
                <!-- Top Menu -->
                <div id="hornav" class="container no-padding">
                    <div class="row">
                        <div class="col-md-12 no-padding">
                            <div class="text-center visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <span class="fa-home"><a style="color: white" href="<?= base_url() ?>Home"><?php $this->load->helper('functions');
    get_lang('HOME'); ?></a></span>

                                    <li>
                                    <li>
                                        <span class="fa-photo"><a style="color: white" href="<?= base_url() ?>Home/all_images"><?php get_lang('GALLERY'); ?></a></span>

                                    <li>
                                   
                                    <li>
                                        <span class="fa-book"><a style="color: white" href="<?= base_url() ?>Home/about"><?php get_lang('ABOUT'); ?></a></span>
    
                                    <li>
                                        <a href="<?= base_url() ?>Home/contact" class="fa-comment"><?php get_lang('CONTACT'); ?></a>
                                    </li>
    <?php if ($this->session->userdata('lang') == 'en'): ?>
                                        <li>
                                            <span class="fa-user"><a style="color: white"href="<?= base_url() ?>Admin/ar_lang">عربي</a></span>

                                        </li>

    <?php else: ?> 
                                        <li>
                                            <span class="fa-user"><a style="color: white"href="<?= base_url() ?>Admin/en_lang">english</a></span>

                                        </li>
    <?php endif; ?>
                        <?php if ($this->session->userdata('logged_in') == TRUE): ?>
                                        <li>
                                            <span class="fa-user"><a style="color: white"href="<?= base_url() ?>Admin/logout"><?php get_lang('LOGOUT'); ?></a></span>

                                        </li>

    <?php endif; ?>
      <li>
                                        <a style="color: white" href="<?= base_url() ?>Admin/cPanel"><span class="fa-cog"></span></a>

                                    <li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top Menu -->
                <div id="post_header" class="container" style="height:340px">
                </div>
                <div id="content-top-border" class="container">
                </div>
                <!-- === END HEADER === -->
                <?php
            endforeach;
            ?>