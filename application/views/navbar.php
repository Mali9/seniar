<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>/Home" style="color: white">الصفحه الرئيسيه</a>
        </div>

        <div class="collapse navbar-collapse" id="app-nav">
            <ul class="nav navbar-nav">


                <?php
                if (empty($this->session->userdata('name'))):
                    ?>
                    <li><a href="<?php echo base_url(); ?>Login/register">تسجيل مطعم جديد</a></li>
                    <li><a id="f" href="<?php echo base_url(); ?>Login">تسجيل الدخول</a></li>
                    <li><a href="<?php echo base_url(); ?>Admin"> الادمن</a></li>
                <?php endif; ?>
                <li><a href="<?php echo base_url(); ?>Order"> متابعه طلبي</a></li>
                
                <li  style="margin-left: 150px;margin-top: 10px">
                    <?php
                    $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                    );
                    ?>
                    <form action="<?php echo base_url(); ?>Home/search" method="post">
                        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                        <input type="search" name="search" class="form-control" placeholder="search">
                        </li>
                        <li  style="margin-left: 5px;margin-top: 10px">
                            <button class="btn btn-default" style="background-color: #ecf0f1;" type="submit">search</button>
                    </form>

                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php
                if (!empty($this->session->userdata('name'))):
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php echo $this->session->userdata('name'); ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                            if($this->session->userdata('type') == 'admin'):
                            ?>
                            <li><a href="<?php echo base_url(); ?>Admin/cPanel">لوحه التحكم</a></li>
                            <?php
                        else:
                            ?>
                            <li><a href="<?php echo base_url(); ?>Restaurant/cPanel">لوحه التحكم</a></li>
                        <?php
                        endif;
                        ?>
                        <li><a href="<?php echo base_url(); ?>Login/logout">تسجيل الخروج</a></li>

                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
