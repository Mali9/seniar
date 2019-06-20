<?php
$this->load->view('header');
?>


<!-- ===   BEGIN CONTENT === -->
<?php foreach ($contact as $value): ?>
<?php foreach ($contact_en as $value_en): ?>
    <div id="content">
        <center><h1 style="color: white">

                <?php
                if ($this->session->flashdata('update')) {
                    echo $this->session->flashdata('update');
                }
                
                ?>
                <?php  if ($this->session->flashdata('upload')) {
                    echo $this->session->flashdata('upload');
                } ?>
                <?php  if ($this->session->flashdata('offer')) {
                    echo $this->session->flashdata('offer');
                } ?>
            </h1></center>
        <div class="container background-white">
            <div class="row margin-vert-30">
                <!-- Main Column -->
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <!-- Main Content -->
                    <div class="headline">
                        <h2>بيانات الشركه العربي</h2>
                    </div>
                    <br>
                    <!-- Contact Form -->
                    <?php
                    $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                    );
                    ?>

                    <form method="post" action="<?= base_url() ?>Admin/u">
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                        <label>الاسم</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" value="<?= $value->name ?>" name="name">
                            </div>
                        </div>
                        <label>الايميل
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text"  value="<?= $value->email ?>" name="email">
                            </div>
                        </div>
                        <label>التليفون
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text"  value="<?= $value->phone ?>" name="phone">
                            </div>
                        </div>
                        <label>العنوان
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <textarea rows="8" class="form-control" name="address"><?= $value->address ?></textarea>
                            </div>
                        </div>
                        <label>facebook
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text"  value="<?= $value->fb ?>" name="fb">
                            </div>
                        </div>
                        <label>instgram
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text"  value="<?= $value->insta ?>" name="insta">
                            </div>
                        </div>
                        <label>وصف الشركه</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <textarea rows="8" class="form-control" name="about"><?= $value->about ?></textarea>
                            </div>
                        </div>
                        <p>
                            <button type="submit" class="btn btn-primary">تحديث</button>
                        </p>
                    </form>
                    <!-- End Contact Form -->
                    <!-- End Main Content -->
                         <div class="col-md-6  col-sm-6 col-lg-12">
                    <!-- Main Content -->
                    <div class="headline">
                        <h2>بيانات الشركه الاجنبي</h2>
                    </div>
                    <br>
                    <!-- Contact Form -->
                    <?php
                    $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                    );
                    ?>

                    <form method="post" action="<?= base_url() ?>Admin/u_en">
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                        <label>الاسم</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text" value="<?= $value_en->name ?>" name="name">
                            </div>
                        </div>
                        <label>الايميل
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text"  value="<?= $value_en->email ?>" name="email">
                            </div>
                        </div>
                        <label>التليفون
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text"  value="<?= $value_en->phone ?>" name="phone">
                            </div>
                        </div>
                        <label>العنوان
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <textarea rows="8" class="form-control" name="address"><?= $value_en->address ?></textarea>
                            </div>
                        </div>
                        <label>facebook
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text"  value="<?= $value_en->fb ?>" name="fb">
                            </div>
                        </div>
                        <label>instgram
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text"  value="<?= $value_en->insta ?>" name="insta">
                            </div>
                        </div>
                        <label>وصف الشركه</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <textarea rows="8" class="form-control" name="about"><?= $value_en->about ?></textarea>
                            </div>
                        </div>
                        <p>
                            <button type="submit" class="btn btn-primary">تحديث</button>
                        </p>
                    </form>
                    <!-- End Contact Form -->
                    <!-- End Main Content -->
                </div>
                </div>
                <!-- End Main Column -->
                <!-- Side Column -->

                <div class="col-md-6 col-lg-6 col-sm-6">
                    <!-- Recent Posts -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                            <form action="<?= base_url() ?>Admin/image" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                                <h3 class="panel-title">اضافه صوره الى صور الرحلات</h3>
                              
                                <input type="file" name="pic">
                                <input type="submit" name="upload" value="رفع" class="btn btn-primary btn-lg"  style="margin-top: 10px;">
                            </form>
                            <hr>
                            <div class="panel-heading">
                                <h3 class="panel-title"><a href="<?= base_url()?>Admin/delete_all" style="color: #0000BB"><button class="btn btn-danger btn-lg">تعديل جميع الصور</button></a></h3>
                        </div>
                        <hr>    
                        </div>
                        
                        <div class="panel-body">
                           <form action="<?= base_url() ?>Admin/offer" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                                <h3 class="panel-title">اضافه اعلان جديد</h3>
                                  <label>عنوان الاعلان
                            <span class="color-red">*</span>
                        </label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-6 col-md-offset-0">
                                <input class="form-control" type="text"  name="title">
                            </div>
                        </div>
                        <label>وصف الاعلان</label>
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-md-offset-0">
                                <textarea rows="8" class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <label>صوره الاعلان</label>
                        <input type="file" name="pic" class="form-control">
                        <input type="submit" name="upload" value="رفع" class="btn btn-primary btn-lg" style="margin-top: 10px;">
                            </form>

                        </div>
                    </div>
                    <!-- End recent Posts -->
                    <!-- About -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3 class="panel-title">اضافه صوره الى السلايدر</h3>
                        </div>
                        <div class="panel-body">
                  <form action="<?= base_url() ?>Admin/slider" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                                
                              
                                <input type="file" name="pic">
                                <input type="submit" name="upload" value="رفع" class="btn btn-primary btn-lg"  style="margin-top: 10px;">
                            </form>
                           
                        </div>
                        <hr>
                         <div class="panel-heading">
                             <h3 class="panel-title"><a href="<?= base_url()?>Admin/delete" style="color: #0000BB"><button class="btn btn-success btn-lg">تعديل صور السلايدر</button></a></h3>
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
    <?php endforeach; ?>
<?php
$this->load->view('footer');
?>
