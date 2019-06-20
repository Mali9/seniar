<?php
if(!empty($rest_info)):
    foreach ($rest_info as $rest): 
?> 

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
        
        
        <div style="background-color: #ffffff;width: 30%;min-height: 150px; float: right">
            <img src="<?=$rest->image?>" class="img-thumbnail" width="350px">
            <div style="margin-right: 20px">
                <h6 style="color: #2ecc71;font-size: 30px">مطعم <?=$rest->restaurant_name?></h6> 
  
                <h4 style="color: #2ecc71">العنوان:  <?=$rest->address?></h4> 
                <h4 style="color: #2ecc71">تليفون:  <?=$rest->phone?></h4> 
        </div>
            </div>
                <center><h1>
            <?php
            if($this->session->flashdata('rest exist'))
            { 
                echo $this->session->flashdata('rest exist');
            
            }
            
            ?>
                        
            </h1></center>
        <div style="position: absolute;left: 25px;width: 70%;background-color: #ffffff;min-height: 350px;direction: ltr">
            <h1>قائمه الطعام</h1>
            <center>
            <h1 style="color: green"><?php
            if($this->session->flashdata('add_food'))
            { 
                echo $this->session->flashdata('add_food');
            
            }
            
            ?>
                </h1>
                </center>
            <div class="btn-group btn-lg btn-group-lg" role="group" aria-label="Basic example" id="food">
               
                <?php
                $i=0;
                if(!empty($cats['name'])):
                foreach ($cats['name'] as $cat):
                    
                ?>
                
                <button type="button" class="btn btn-secondary b" onclick="get_food(<?= $rest->id?>,<?= $cats['id'][$i]?>)" id="b" cat_id="<?= $cats['id'][$i]?>" rest_id="<?= $rest->id?>"><?= $cat?></button>
  <?php
  $i++;
endforeach;
  ?>

</div>
            <h3 style="color: #000099;margin-left: 150px">لاضافه الصنف الى الطلب اضغط على رقم الصنف</h3>
            <div>
                <?php
                $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
                    );
                ?>
                
                <form action="<?= base_url()?>Restaurant/add_to_order" method="post" id="form1">
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <input type="hidden" name="rest_id" value="<?= $rest->id?>" />
                    <h3 style="display: inline;margin-left: 250px">اختر الكميه</h3>
                    <input min="1" max="100" value="1" type="number" name="q" class="form-control" style="width: 100px;margin-left: 250px">
                <ul class="list-group" style="width: 50%" id="">
                    <li class="list-group-item justify-content-between" style="background-color: #000;color: white;margin-top: 10px">
                        <span class="" style="font-size: 20px;background-color: #8c8b8a;border-radius: 10px; margin-left: 100px">رقم الصنف </span>
                        <span class="" style="font-size: 20px;background-color: #8c8b8a;border-radius: 10px;padding: 5px 5px 5px"> الصنف</span>
                

                        <span class="badge badge-default badge-pill" style="font-size: 20px"> السعر</span>
                    </li>
                    <div id="menu">
                        
                    </div>
  
 
               </ul>
                    </form>
                </div>

        </div>


<?php
endif;
endforeach;

endif;
?>
        
<?php
$this->load->view('footer');
?>
        <script>

       function get_food(x, y) {
            var url="<?php echo base_url();?>";
            
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
             myObj = JSON.parse(this.responseText);
             var str="";
            var rest_id= document.getElementById("b").getAttribute("rest_id");
            //var q= document.getElementById("q").value;
            
            //document.getElementById("food").innerHTML = myObj[0].id+""+myObj[0].id2;
            //alert(myObj[2].id[0]);
                for(var j=0;j<myObj[2].id.length;j++){
              
            str+="<li class='list-group-item l '>"+myObj[0].food[j]+ " &nbsp;&nbsp;  "+"<span class='badge badge-default badge-pill' style='font-size: 20px'> "+ myObj[1].price[j]+" </span>"+'<input type="submit" style="width:100px;margin-left:20px" name="submit" value="'+myObj[2].id[j]+'" class="btn btn-success"'+"</li>";
                  
            }
           
              document.getElementById("menu").innerHTML =str;
              //console.log(myObj[0].food[1]);
           
        }
    };
    xmlhttp.open("GET", "<?php echo base_url() ?>Restaurant/ajax/"+x+"/"+y, true);
    xmlhttp.send();
} 
        
        </script>
   
