
<?php
$this->load->view('header');
?>
<?php
$this->load->view('navbar');
?>
<center>
    <h1 style="color: #3498db">
        <?php
        echo validation_errors();
        if ($this->session->flashdata('logged_in')) {
            echo $this->session->flashdata('logged_in');
        }
        ?>
        <?php
        if ($this->session->flashdata('register')) {
            echo $this->session->flashdata('register');
        }
        ?>
        <?php
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        ?>
    </h1>
    <form class="login text-center" id="form" action="<?php echo base_url(); ?>Login/log" method="post">
        <h4 class="text-center">تسجيل الدخول </h4>
        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

        <input type="email" class="form-control" name="email" placeholder="email" autocomplete="off" required="">
        <input type="password" class="form-control" name="password" placeholder="password" autocomplete="off" required="">
        <input type="submit" class="btn btn-primary" value="login" name="submit">

    </form>
</center>



<?php
$this->load->view('footer');
?>