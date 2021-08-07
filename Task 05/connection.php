<?php

 $server = "localhost";
 $username = "root";
 $password = "";
 $dbname = "test";

 $con = mysqli_connect($server, $username, $password,$dbname); 

if(isset($_POST['submit']))
{

  if(!empty($_POST['pname']) && !empty($_POST['bprice']) && !empty($_POST['sprice']))
  {
      $pname =$_POST['pname'] ;
      $bprice =$_POST['bprice'] ;
      $sprice =$_POST['sprice'] ;

    $query = "insert into addproduct(pname, bprice, sprice) values ('$pname', '$bprice', '$sprice')";

  }
  else
  {
    echo "Enter valid information";
  }
}
   
?>