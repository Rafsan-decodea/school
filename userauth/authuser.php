<?php


session_start();
   // ini_set('display_errors', 1);
 include ($_SERVER['DOCUMENT_ROOT']."/school/db/db.php");

 if (isset($_POST["submit"]))
 {
  $db = new DB();
  $sql = "SELECT * FROM school_users WHERE email = '".$_POST["email"]."'";
  $result = $db->query($sql);

  $row =  mysqli_fetch_array($result);
  
  if($_POST["password"]==$row["password"])
   {
      $_SESSION["id"] = $row["id"];
      $_SESSION["uid"] = $row["uid"];
      $_SESSION["email"]= $row["email"];
      $_SESSION["name"] = $row["name"];
   
   }
   else{

      header("location:/school/index.php?message=Invalide Username Password");
   
       
   }

   if (isset($_SESSION["id"]))// if complete User Authentication
   {
      header("location:/school/login/dashboard/index.php");
   //    unset($_SESSION["id"]);
   //   unset($_SESSION["uid"]);
   }
   else 
   {
      header("location:/shop/index.php?message=Invalide Username Password");
   }
 }
 else
 {
   header("location:/shop/index.php?message=Fill Up From Properly");
 }
  ?>