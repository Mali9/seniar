<?php
foreach ($contact as $c):
    ?>
    <!-- === BEGIN FOOTER === -->

    <div id="content-bottom-border" class="container">
    </div>
    <div id="base">
        <div class="container padding-vert-30 margin-top-60">
            <div class="row">
                <section class="contact-us text-center" id="contact">


                    <div class="fields">
                        <div class="container">
                            <i class="fa fa-headphones fa-5x" ></i><br>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">

                                    <i class="fa-envelope color-primary" style="font-size: 25px"><?= $c->email ?></i><br><br>
                                    <i class="fa-phone color-primary" style="font-size: 25px;margin-top: 10px;margin-bottom: 10px"><?= $c->phone ?></i><br><br>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12" style="height: 200px;font-style: oblique"><h1 class="color-aqua"><?php get_lang('ADDRESS'); ?> : <?= $c->address ?></h1></div>
                                <!--Start Contact Form-->
                                <?php
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                                ?>

                                <form role="form" action="<?= base_url() ?>Home/mail" method="post">
                                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                    <div class="col-md-6 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="100">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="User Name" name="username" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg"  placeholder="Email" name="email" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg"  placeholder="subject" name="subject" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow bounceInRight" data-wow-duration="1s" data-wow-offset="100">
                                        <div class="form-group">

                                            <textarea name="message" class="form-control input-lg" style="color: black" placeholder="Write Your Message Here" required=""></textarea>


                                        </div>

                                        <button  type="submit" class="btn btn-primary btn-lg btn-block"><?php get_lang('SEND'); ?></button>
                                    </div>

                                </form>






                                <!--end Contact Form-->
                            </div>
                        </div>


                    </div>





                </section>
                <!-- Footer Menu -->
                <div id="footer">
                    <div class="container">
                        <div class="row">

                            <div id="copyright" class="col-md-12 col-lg-7 text-center">
                                <p class="pull-right">(c) 2017 Copyright united company for software solution (MaliMali01120354080@gmail.com)<br>(unitedcompany732@gmail.com)</p><br>01066854343/01066694963
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Footer Menu -->
                <!-- JS -->
                <script src="<?= base_url() ?>js/jquery.js"></script>
                <script src="<?= base_url() ?>js/style.js"></script>
                <script src="<?= base_url() ?>js/bootstrap.min.js"></script>
                <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>
                <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
                <script type="text/javascript" src="<?= base_url() ?>assets/js/scripts.js"></script>
                <!-- Isotope - Portfolio Sorting -->
                <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.isotope.js" type="text/javascript"></script>
                <!-- Mobile Menu - Slicknav -->
                <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.slicknav.js" type="text/javascript"></script>
                <!-- Animate on Scroll-->
                <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.visible.js" charset="utf-8"></script>
                <!-- Sticky Div -->
                <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.sticky.js" charset="utf-8"></script>
                <!-- Slimbox2-->
                <script type="text/javascript" src="<?= base_url() ?>assets/js/slimbox2.js" charset="utf-8"></script>
                <!-- Modernizr -->
                <script src="<?= base_url() ?>assets/js/modernizr.custom.js" type="text/javascript"></script>

                <!-- End JS -->
                </body>
                </html>
                <!-- === END FOOTER === -->
                <?php
            endforeach;
            ?>