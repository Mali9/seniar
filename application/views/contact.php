<?php

$this->load->view('header');
?>


            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Column -->
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <!-- Main Content -->
                            <div class="headline">
                                <h2>Contact Form</h2>
                            </div>
                            <br>
                            <!-- Contact Form -->
                             <?php
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                                ?>
                            <form action="<?= base_url() ?>Home/mail" method="post">
                                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                <label>Name</label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-6 col-md-offset-0">
                                        <input class="form-control" type="text" name="username" required="">
                                    </div>
                                </div>
                                <label>Email
                                    <span class="color-red">*</span>
                                </label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-6 col-md-offset-0">
                                        <input class="form-control" type="text" name="email" required="">
                                    </div>
                                </div>
                                <label>Message</label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-8 col-md-offset-0">
                                        <textarea rows="8" class="form-control" name="message" required=""></textarea>
                                    </div>
                                </div>
                                <p>
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </p>
                            </form>
                            <!-- End Contact Form -->
                            <!-- End Main Content -->
                        </div>
                        <!-- End Main Column -->
                        <!-- Side Column -->
                        <?php foreach ($contact as $value): ?>
                        <div class="col-md-6 col-lg-6 col-sm-6">
                            <!-- Recent Posts -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Contact Info</h3>
                                </div>
                                <div class="panel-body">
                                    <p><?php get_lang('ADDRESS'); ?> : <?=$value->address ?></p>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="fa-phone color-primary"></i> <?=$value->phone ?></li>
                                        <li>
                                            <i class="fa-envelope color-primary"></i> <?=$value->email?></li>
                                        <a href="<?=$value->insta?>"><i class="fa-instagram color-primary"></i> </a></li>
                                     <a href="<?=$value->fb?>"><i class="fa-facebook color-primary"></i></a></li>
                                        
                                        <li>
                                            
                                    </ul>
                                   
                                </div>
                            </div>
                            <!-- End recent Posts -->
                            <!-- About -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php get_lang('NAME'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <?= $value->about?>
                                </div>
                            </div>
                            <!-- End About -->
                        </div>
                        <!-- End Side Column -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
         
    <?php endforeach; ?>
   <?php
   $this->load->view('footer');
   ?>
