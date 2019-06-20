<?php $this->load->view('header'); ?>
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white text-center">
                    <div class="row margin-vert-30 text-center">
                        <div class="col-md-12 col-lg-12 text-center">
                            <h2 class="margin-vert-20 col-lg-12 text-center"><?php get_lang('ABO'); ?></h2>
                            <div class="row margin-bottom-30 col-lg-12 text-center">
                                <div class="col-md-4 animate col-lg-12 fadeInLeft text-center">
                                    <?php foreach ($contact as $value): ?>
                                    <h1><p><?= $value->about?></p></h1>
                                    <?php endforeach; ?>
                                </div>
                           
                          
                            </div>
                            <hr class="margin-vert-40">
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
          <?php $this->load->view('footer'); ?>
