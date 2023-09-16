<?php
include_once(".\config\config.php");

if(isset($_POST['user_email']) && isset($_POST['user_name']))
{
  $email=$_POST['user_email'];
  $name=$_POST['user_name'];
  $insert=mysql_query("insert into subscribers values('','$name','$email')");
  
  $id=mysql_insert_id($insert);

  $select=mysql_query("select name, subid from subscribers where name='$name' and subid='$id'");
  
  if($row=mysql_fetch_array($select))
  {
	  $name=$row['name'];
  ?>
      <div class="comment_div"> 
	    <p class="name">Posted By:<?php echo $name;?></p>
	  </div>
  <?php
  }
exit;
}

?>