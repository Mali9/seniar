<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ar" xml:lang="ar">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=<?php echo config_item('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href="<?= base_url() ?>css/bootstrap-responsive.min.css" rel="stylesheet">
                <title><?php get_title("Home Page"); ?></title>
                <link href="<?= base_url() ?>css/bootstrap.min.css" type="text/css" rel="stylesheet">
                    <link href="<?= base_url() ?>css/style.css" type="text/css" rel="stylesheet">


                        </head>
                        <body style="background: #ffffff;">
                            <?php
                            $this->load->view('navbar');
                            ?>
                            <div id="container" class="img"   style="min-height: 750px;max-width: 1260px;">

                                <center>
                                    <h2 style="color: #0099FF">
                                    </h2>
                                    <div class="row main">
                                        <div class="main-login main-center">
                                            <h4>                                        من فضلك اكمل البيانات الشخصيه لاتمام الطلب
                                            </h4>
                                            <form class="" method="post" action="#">

                                                <div class="form-group">
                                                    <label for="name" class="cols-sm-2 control-label">الاسم</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="name" id="name"  placeholder="ادخل الاسم" required=""/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email" class="cols-sm-2 control-label">رقم الموبيل</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="email" id="email"  placeholder="ادخل رقم الموبيل" required=""/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="username" class="cols-sm-2 control-label">العنوان</label>
                                                    <div class="cols-sm-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" name="username" id="username"  placeholder="ادخل العنوان" required=""/>
                                                        </div>
                                                    </div>
                                                </div>

                                                

                                             

                                                <div class="form-group ">
                                                    <input type="submit" value= "اتمام الطلب"  class="btn btn-primary btn-lg btn-danger">
                                                </div>

                                            </form>
                                        </div>
                                    </div>


                                </center>




                            </div>
                            <?php
                            $this->load->view('footer');
                            ?>
