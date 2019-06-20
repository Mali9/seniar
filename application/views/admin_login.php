<?php
$this->load->view('header');
?>
<div style="position: relative;">
<center>
    <h1 style="color: white"><?php
    if(!empty($this->session->flashdata('logged_in')))
    {
        echo $this->session->flashdata('logged_in');
    }
    ?></h1>
    <h1 style="color: #3498db">
        <?php get_lang('LOGIN'); ?>
    </h1>
        <?php
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        ?>
    
    <form  action="<?php echo base_url(); ?>Admin/login" method="post">
        
        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

        <h3 style="color: white;margin-top: 10px"><?php get_lang('EMAIL'); ?></h3><input type="text" class="form-control"  style="margin-top: 20px;width: 300px;" name="email" placeholder="<?php get_lang('EMAIL'); ?>" autocomplete="off" required="">
        <h3 style="color: white;margin-top: 10px"><?php get_lang('PASSWORD'); ?></h3><input type="password" class="form-control" style="margin-top: 20px;width: 300px;" name="password" placeholder="<?php get_lang('PASSWORD'); ?>" autocomplete="off" required="">
        <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 10px" value="login" name="submit">

    </form>
</center>
</div>
<?php $this->load->view('footer'); ?>


