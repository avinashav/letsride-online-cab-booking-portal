<?php
            
            $x=$_POST['username1'];
            $y=$_POST['password1'];
            $servername="localhost";
            $username="root";
            $password="";
            $db="test1";

                //Personal Information
            $email=$_POST['email'];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $mob = $_POST['mob'];


//If Username Field is Empty
if($x==NULL)
{
 
      echo "<script type='text/javascript'>alert(' Username cannot be empty......TRY AGAIN');
                    window.location='register.html';</script>";
    exit;
    
    //header("Location:register.html");
}


//If Password field is empty
if($y==NULL)
{
 
      echo "<script type='text/javascript'>alert(' password cannot be empty......TRY AGAIN');
                    window.location='register.html';</script>";
    exit;
    
    //header("Location:register.html");
}

//Checking Personal Details
if($email==NULL || $fname ==NULL || $mob ==NULL)
{
 
      echo "<script type='text/javascript'>alert(' Fill All Details Please ..!');
                    window.location='register.html';</script>";
    exit;
    
    //header("Location:register.html");
}


  //Varifying password length
  $len=strlen($y);
  if($len<6 || $len>15)         
    {
        echo "<script type='text/javascript'>alert(' password size incorrect......TRY AGAIN');
                    window.location='register.html';</script>";
        exit;
    }


    
    //connect to database
    $link= new mysqli($servername,$username,$password,$db) or die("CANNOT CONNECT");

    //Insert into accounts table
    $pre="INSERT INTO accounts (uname,pass) VALUES ('$x','$y')";
  
    //insert into userdetails table
    if($lname==NULL)
    {
        $lname=" ";
    }
    $touserdetails="INSERT INTO userdetails VALUES ('$x','$fname', '$lname' , '$mob', '$email')";


  if(mail("$email1" ,"Welcome to Letsride","thank you for registering with lets ride"))
    {
         echo 'mailsent';
    }

    $res=mysqli_query($link,"$pre");        //adds to accounts

    $res2=mysqli_query($link,"$touserdetails");        //adds to userdetails
    
    print "Succesfully Registered";

    header("Location:secured.html");

?>
