<?php
$this->load->view('header');
?>
<?php
$this->load->view('navbar');
?>
<div id="container" class="img"   style="min-height: 750px;max-width: 1260px;">

    <?php
    if (!empty($search)):
        foreach ($search as $value):
            ?>

            <div class="col-lg-3 col-md-4 col-sm-6 text-center"   id="i">
                <a href="<?= base_url() ?>Restaurant/view_rest/<?php echo $value->id; ?>"><img src="<?php echo $value->image; ?>" class="img-circle" id="img"></a><br>
                <button type="button" class="btn btn-info rest_btn" onclick='window.location="<?= base_url() ?>Restaurant/profile/<?php echo $value->id; ?>"'><?php echo $value->restaurant_name; ?></button>

            </div>
        <?php endforeach; ?>
    <?php
    elseif(!empty($no_result)):
        echo '<center><h1>no search founded</h></center>';
    ?>
    <?php endif; ?>
</div>








<?php
$this->load->view('footer');
?>
