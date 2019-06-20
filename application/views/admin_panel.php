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
    
    <center><h1 style="color: #0086b3">لوحه التحكم</h1>
        <h1 style="color: gold">
            <?php
         
           if($this->session->flashdata('delete_rest'))
           {
               echo $this->session->flashdata('delete_rest');
           }
           if($this->session->flashdata('approve'))
           {
               echo $this->session->flashdata('approve');
           }
            
            ?>
        </h1>
    
    </center>
       
    	<div class="row">
		
    
        <div class="col-md-12 col-lg-6"  style="margin-left: 250px">
            
        <div class="table-responsive">

              <center>   
                  <table id="mytable" class="table table-bordred table-striped text-center">
                  <thead class="text-center">
                   <th class="text-center">email</th>
                   <th class="text-center">name</th>
                    
                       <th class="text-center">حذف</th>
                       <th class="text-center">موافقه</th>
                   </thead>
    <tbody>
  <?php
  foreach ($rests as $rest):
  ?>
    <tr class="text-center">
        <td><?= $rest->email?></td>
       <td><?= $rest->restaurant_name?></td>
       <td><p data-placement="top" data-toggle="tooltip" title="Delete"><a href="<?php echo base_url()?>Admin/delete/<?= $rest->id?>"><button style="background-color:#c0392b"class="btn btn-danger" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></p></td>
       <?php
       if($rest->approved == 0):
       ?>
    
       <td><p data-placement="top" data-toggle="tooltip" title="approve"><a href="<?php echo base_url()?>Admin/approve/<?= $rest->id?>"><button style="background-color:green;color: white"class="btn" ><span class="glyphicon glyphicon-ok"></span></button></a></p></td>
   <?php
   else:
   ?>
       <td style="color: green;font-size: 20px"> مشترك  </td>
    <?php
   endif;
   ?>
    </tr>   
        <?php
  endforeach;
        ?>
 
      
         
        
    </tbody>
        
</table>
               

<div class="clearfix"></div>

            </center>    
            </div>
            
        </div>
         
	</div>
    
</div>
<?php
$this->load->view('footer');
?>
