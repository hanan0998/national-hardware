<?php
include "config.php";


function loginFunction(){
    global $conn;
    if(isset($_POST['btnSubmit'])){
        $email=$_POST["email"];
        $password=$_POST["pas"];
        
            $sql = "SELECT * FROM `usrdetailes` WHERE email = '".$email."' AND password ='".$password."' LIMIT 1";
            $query =  mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($query);
            
            if($rows>0)
            {
                $data = mysqli_fetch_assoc($query);
                    
                    $_SESSION['is_login'] = 'Yes';
                    $_SESSION['user_id'] = $data['ID'];
                    $_SESSION["Username"] = $data['name'];
                    $_SESSION["email"] = $data['email'];
                    $_SESSION["password"] = $data['password'];			
                
                    echo "<script> window.location.href=\"index.php\";</script>";
            }
            else
            {
                echo "<script>alert('Invalid Email or Password'); window.location.href =\"login.php\";</script>";
            }
    }
}


function feedbackFunction(){
    global $conn;
    if(isset($_POST['feedback'])){
	
        //Print_r($_POST);
        $message=$_POST["message"];
    
        
          $sql ="INSERT INTO `feedback`(`Name`, `email`, `Feeback`, `addedby`) VALUES ('".$_SESSION['Username']."','".$_SESSION['email']."','".$message."','".$_SESSION['user_id']."')"; 
            
            
            $query =  mysqli_query($conn, $sql);
            if($query)
            {
                echo '<script>alert("Feedback Added Successfull"); location.href="index.php";</script>';	
            }
            else 
            {
                echo '<script>alert("Whoops..!something went wrong"); location.href="feedback`.php";</script>';
            }
    
    }
}


function registerFunction(){
    global $conn;
    if(isset($_POST['register'])){

        //print_r($_POST);
        $uname=$_POST['fname'];
        $lname=$_POST['lname']; 
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $cont=$_POST['cont'];
        $addre=$_POST['addrs'];
        $passw=$_POST['pas'];
        
            
              $sql ="INSERT INTO usrdetailes(`name`, `f.name`, `email`, `gender`, `number`, `address`, `password`) VALUES ('".$uname."','".$lname."','".$email."','".$gender."','".$cont."','".$addre."','".$passw."')"; 
            
              
                
                $query =  mysqli_query($conn, $sql);
                if($query)
                {
                    echo '<script>alert("Register Successfull"); location.href="login.php";</script>';	
                }
                else 
                {
                    die("Failed");
                    echo '<script>alert("Whoops..!something went wrong"); location.href="register.php";</script>';
                }
        
        
        }
}

