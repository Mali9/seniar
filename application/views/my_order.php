<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ar" xml:lang="ar">
    <head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo config_item('charset');?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link href="<?= base_url() ?>css/bootstrap-responsive.min.css" rel="stylesheet">
<title><?php get_title("Home Page"); ?></title>
<link href="<?= base_url() ?>css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="<?= base_url() ?>css/style.css" type="text/css" rel="stylesheet">


                </head>
    <body style="background: #ffffff;">
<?php
$this->load->view('navbar');
?>
<div id="container" class="img"   style="min-height: 750px;max-width: 1260px;">
     <center>
            <h1 style="color: green"><?php
            if($this->session->flashdata('delete_order'))
            { 
                echo $this->session->flashdata('delete_order');
            
            }
             if($this->session->flashdata('delete_food'))
            { 
                echo $this->session->flashdata('delete_food');
            
            }
            
            ?>
                </h1>
                </center>
    <?php
    $count=0;
    if (!empty($_SESSION['order'])):
    ?>
    <center><h1 style="color: #0086b3">الطلب</h1></center>
       
    	<div class="row">
		
    
        <div class="col-md-12 col-lg-6"  style="margin-left: 250px">
            
        <div class="table-responsive">

              <center>   
                  <table id="mytable" class="table table-bordred table-striped text-center">
                  <thead class="text-center">
                   <th class="text-center">اسم الصنف</th>
                    <th class="text-center">السعر</th>
                     <th class="text-center">الكميه</th>
                       <th class="text-center">حذف</th>
                   </thead>
    <tbody>
    <?php
       
        foreach ($_SESSION['order'] as $order):
    ?>
    <tr class="text-center">
    <td><?php echo $order['food_name']?></td>
    <td><?php echo $order['food_price']?></td>
    <td><?php echo $order['quantity']?></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><a href="<?php echo base_url()."Order/delete_food/".$order['food_id']?>"><button style="background-color:#c0392b"class="btn btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></p></td>
    </tr>    
        <?php
        $count += $order['food_price'];
endforeach;
        ?>
        
        <tr>
            <td colspan="2"><a href="<?= base_url()?>Order/complete_order" ><button class="btn btn-success btn-lg" style="background-color:#2980b9">ارسال الطلب</button></a></td>
            <td colspan="2"><a href="<?= base_url()?>Order/delete_order" ><button class="btn btn-danger btn-lg" style="background-color:#e74c3c">الغاء الطلب</button></a></td>
        </tr>
         <tr>
             <td colspan="4"><h1 style="color: #27ae60">اجمالى سعر الطلب  &nbsp;&nbsp; <?php echo $count; ?></h1> </td>
        </tr>
        
    </tbody>
        
</table>
               

<div class="clearfix"></div>

            </center>    
            </div>
            
        </div>
         
	</div>
    
</div>
    
    <?php
    else:
    ?>
    <center> <h1 style="color: red">ليس لديك طلبات </h1></center>
    <?php
    endif;
    ?>
</div>
<?php
$this->load->view('footer');
?>
