<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */
session_start();
include('connect.php');
if (isset($_POST['save'])){
$aa = $_POST['id'];
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['username'];
$d = $_POST['password'];

// query

mysql_query("insert into table_admin (id,name,email,username,password) 
values('$aa','$a','$b','$c','$d')")or die(mysql_error());

      header("location:sign-in.php?success=true");
        }else{
            header("location:sign-in.php?failed=true");
        } 

		
		?>