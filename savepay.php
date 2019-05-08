<?php
include 'connect.php';
if (isset($_POST['save'])){
$id = $_POST['id'];
$amount = $_POST['amount'];
$name = $_POST['name'];
$year = $_POST['year'];
$means = $_POST['means'];
// This code will save file into the database

mysql_query("insert into finance (id,amount,name,year,means) 
values('$id','$amount','$name','$year','$means')")or die(mysql_error());

      header("location:makepay.php?success=true");
        }else{
            header("location:makepay.php?failed=true");
        } 

		
		?>