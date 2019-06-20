
<?php
$this->load->view('header');
?>
<?php
$this->load->view('navbar');
?>
<center>
    <h3 style="color: #000088">
        <?php
        echo validation_errors();
        if (!empty($error)) {
            echo $error;
        }
        ?>
    </h3>
    <h1 style="color: #3498db">
        <?php
        if ($this->session->flashdata('register')) {
            echo $this->session->flashdata('register');
        }
        ?>
    </h1>
    <?php
    $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
    );
    ?>
    <form class="login text-center" id="form" action="<?php echo base_url(); ?>Login/reg" method="post" enctype="multipart/form-data">
        <h4 class="text-center">تسجيل مطعم جديد </h4>
        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

        <input type="email" class="form-control" name="email" placeholder="ايميل" autocomplete="off" required="" value="<?php
    if (!empty($email))
        echo $email;
    ?>">
        <input type="password" class="form-control" name="password" placeholder="باسورد" autocomplete="off" required="" value="<?php
        if (!empty($password))
            echo $password;
        ?>">
        <input type="text" class="form-control" name="rest_name" placeholder="اسم المطعم" autocomplete="off" required="" value="<?php
               if (!empty($restaurant_name))
                   echo $restaurant_name;
               ?>">
        <input type="text" class="form-control" name="telephone" placeholder="رقم التليفون" autocomplete="off" required="" value="<?php
        if (!empty($phone))
            echo $phone;
               ?>">
        <input type="text" class="form-control" name="address" placeholder="العنوان" autocomplete="off" required="" value="<?php
               if (!empty($address))
                   echo $address;
               ?>">
        <input type="file" name="pic" accept="image/*" class="form-control btn"style="background-color:#95a5a6">

        <input type="submit" class="btn btn-danger" value="login" name="submit">

    </form>
</center>



<?php
$this->load->view('footer');
?>