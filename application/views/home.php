<?php
$this->load->view('header');
?>
<?php foreach ($contact as $v) : ?>
    <div id="content">
        <div class="container no-padding">
            <div class="row">
                <!-- Carousel Slideshow -->
                <div id="carousel-example" class="carousel slide" data-ride="carousel" style="position: relative;bottom: 250px;height: 400px">
                    <!-- Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                        <li data-target="#carousel-example" data-slide-to="3"></li>
                        <li data-target="#carousel-example" data-slide-to="4"></li>
                        <li data-target="#carousel-example" data-slide-to="5"></li>
                    </ol>
                    <div class="clearfix"></div>
                    <!-- End Carousel Indicators -->
                    <!-- Carousel Images -->
                    <div class="carousel-inner">

                        <div class="item active"style="height: 400px;width: 1080px">
                            <img src="assets/img/active.jpg" style="height: 400px;width: 1080px">
                        </div>
                        <?php
                        foreach ($slider as $value):
                            ?>
                            <div class="item" style="height: 500px;width: 1080px">
                                <img src="<?= base_url() ?>images/<?= $value->image ?>"style="height: 400px;width: 1080px">
                            </div>
                            <?php
                        endforeach;
                        ?>

                    </div>
                    <!-- End Carousel Images -->
                    <!-- Carousel Controls -->
                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <!-- End Carousel Controls -->
                </div>
                <!-- End Carousel Slideshow -->
            </div>
        </div>

        <div class="container background-white" style="position: relative;bottom: 200px;">
            <div class="row margin-vert-30">
                <!-- Main Text -->
                <div class="col-md-12">
                    <h1 class="text-center"><?= $v->name ?></h1>
                    <h3> <p class="text-center"><?= $v->about ?></p></h3>

                </div>
                <!-- End Main Text -->
            </div>
        </div>
        <div class="container background-gray-lighter" style="position: relative;bottom: 100px;">
            <div class="row padding-vert-20">
                <div class="col-md-12 col-lg-12 text-center col-sm-12 col-xs-12">
                </div>
                <div class="col-md-12 col-lg-12 text-center col-sm-12 col-xs-12">
                    <!-- Portfolio -->
                    <ul class="portfolio-group">
                        <!-- Portfolio Item -->
                        <?php foreach ($offers as $offer): ?>
                            <a target="_blank" href="<?= base_url() ?>images/offer/<?= $offer->image ?>">
                                <li class="portfolio-item col-lg-12 text-center col-sm-12 col-md-12 col-xs-12 padding-20">

                                    <figure class="animate fadeInLeft text-center">
                                        <figcaption class="text-center animate fadeInLeft">
                                            <img alt="image1" src="<?= base_url() ?>images/offer/<?= $offer->image ?>" class="text-center col-lg-12 text-center col-sm-12 col-md-12 col-xs-12" style="margin-left: 00px;margin-bottom: 20px" width="400px" height="250px">

                                            <h1 class="text-center"><?= $offer->title ?></h1>
                                            <span><h2 style="color: white"><?= $offer->description ?></h2></span>
                                        </figcaption>
                                    </figure>

                                </li>
                            </a>
                        <?php endforeach; ?>
                        <!-- //Portfolio Item// -->

                    </ul>
                    <!-- End Portfolio -->
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>

    </div>
    <?php
endforeach;
?>
<?php
$this->load->view('footer');
?>