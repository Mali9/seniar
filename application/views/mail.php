<?php
$this->load->view('header');
?>
<div style="position: relative;">
<center>
 <?php
if($s == 1)
{
	echo "<h1 style='color:#2ecc71'>Your message send successfuly!</h1>";
}
else
{
	echo "<h1 style='color:red'>".show_error($this->email->print_debugger())."</h1>";
}
 ?> 
</center>
</div>
<?php $this->load->view('footer'); ?>







