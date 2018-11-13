<?php

session_start();
if(isset($_POST['raz'])){
 session_destroy();
 header('location:PHP-SESSION.php');
 die;


}
if (isset($_SESSION['visitor'])){
    $_SESSION['visitor']++;
}else {
    $_SESSION['visitor']=0;
}

?>

<html>
<head></head>
<body>
<form  method="post" enctype="multipart/form-data" name="formu">
<h1 style="text-align: center"> HI ! WE JUST CONTING VISITORS NUMBER</h1>
<br>
<input type="submit"   value="back to Zero" name="raz" >
 <div><?php
     echo $_SESSION['visitor'];?> </div>
</form>

</body>


</html>
