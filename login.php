<?php 

include "dbcon.php";

if(isset($_POST['login']))
{   
    $username=$_POST['username'];
    $password=$_POST['pass'];
    
    $username=mysqli_real_escape_string($con,$username);
    $password=mysqli_real_escape_string($con,$password);
    
    $query="SELECT * FROM admin WHERE username='{$username}'";
    $select_user_query=mysqli_query($con,$query);
    
    if(!$select_user_query)
    {
        die("query failed!".mysqli_error($connection));
    }
    
    while($row=mysqli_fetch_array($select_user_query))
    {
        $db_id=$row['id'];
        $db_username=$row['username'];
        $db_password=$row['password'];
        $db_type=$row['type'];
    }
    
    if($username !== $db_username && $password !== $db_password)
    {
        header("Location:login/index.php");
    }
    else if($username == $db_username && $password == $db_password)
    {
        if($db_type=='admin')
        {
            header("Location:admin/admindash.php");
        }
        else if($db_type=='hr')
        {
            header("Location:hr/displayhr.php");
        }
        
    }
    
}

?>