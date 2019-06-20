<?php
$this->load->view('header');
?>

<div style="position: relative;bottom: 350px;color: #ffffff;width: 100%;" class="row">
    
<center><h1 style="color: white"><?php
    if(!empty($this->session->flashdata('delete')))
    {
        echo $this->session->flashdata('delete');
    }
    ?></h1>
</center>
    <center><h1>صور السلايدر</h1></center>

    <?php
    foreach ($all_images as $value):
        ?> 
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 r text-center" style="margin-bottom: 10px">
            <a target="_blank" href="<?= base_url() ?>images/<?= $value->image ?>">
                <img src="<?= base_url() ?>images/<?= $value->image ?>" class="img img-circle" style="width: 220px;height: 220px;display: none;" id="img"><br><br
            </a>
            <a href="<?= base_url() ?>Admin/delete_image/<?= $value->id ?>"><button class="btn btn-danger"> حذف</button></a>

        </div>
        <?php
    endforeach;
    ?>


</div>
<?php $this->load->view('footer'); ?>



