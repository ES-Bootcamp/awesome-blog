<?php
require "connection.php"; 
session_start();
$sql="select user_id,password,role from users where user_l_name='".$_POST['user_l_name']."'";
$result = $con->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        if($_POST['password']==$row['password']){
            $_SESSION['login']=true;
            $_SESSION['user_id']=$row['user_id'];
            if((int)$row['role']){
                $_SESSION['role']=true;
            }
            else{
                $_SESSION['role']=false;
            }
            header('Location: http://'.$_SERVER['HTTP_HOST'].'/blog');
            exit();
        }
        else{
            $_SESSION['error']=true;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
    
}