<?php
$first_name=$_POST['firstname'];
$middle_name=$_POST['middlename']
$last_name=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','railway');
if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(FirstName,MiddleName,LastName,Email,Password)values(?,?,?,?,?)");
    $stmt->bind_param("sssss":,$first_name,$middle_name,$last_name,$email,$password);
    $stmt->execute();
    echo " registration successfull...";
    $stmt->close();
    $conn->close();
}
?>?php
$first_name=$_POST['firstname'];
$middle_name=$_POST['middlename']
$last_name=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','railway');
if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registration(FirstName,MiddleName,LastName,Email,Password)values(?,?,?,?,?)");
    $stmt->bind_param("sssss":,$first_name,$last_name,$middle_name,$email,$password);
    $stmt->execute();
    echo " registration successfull...";
    $stmt->close();
    $conn->close();
}
?>
//Another approach (checking constraints)
//dbcon.php
<html>
    <head>
    <title>Registration page</title>
    <link rel="stylesheet"  href= "registration.css">
    </head>
    <body>
        <div class="container" >
            <div class="form">
                <form class="reg" action="registration.php" method="post">
                    <span><b>REGISTRATION</b></span>
                    FirstName:<input type="text" class="input" name="firstname" placeholder="firstName" required>
                    MiddleName:<input type="text" class="input" name="middlename"placeholder="middleName" required>
                    LastName:<input type="password" class="input" name="lastname" placeholder="Enter Password" required>
                    UserName:<input type="password" class="input" name="email" placeholder="Enter Email" required>
                    Password:<input type="password" class="input" name="psw1" placeholder="Confirm Password" required>
                    <input type="checkbox" name="check" class="checkbox"><p id="i"><b>I Agree To Register</b></p>
                    <input type="button" name="btn" class="butt" placeholder="Register" value="Register">
                </form>
            </div>
            </div>
    </body>
</Html>
//Registration.php
<?php
include 'dbcon.php';
 if(isset($_POST['submit'])){
$first_name=mysqli_real_escape_string($conn,$_POST['firstname']);
$middle_name=mysqli_real_escape_string($conn,$_POST['middlename']);
$last_name=mysqli_real_escape_string($conn,$_POST['lastname']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$confirm_password=mysqli_real_escape_string($conn,$_POST['confirm-password']);
$pass=password_hash($password,PASSWORD_BCRYPT);
$cpass=password_hash($confirm_password,PASSWORD_BCRYPT);
$emailquery="select * from registration where email='$email'";
$query=mysqli_query($conn,$emailquery);
$emailcount=mysqli_num_rows($query);
if($emailcount>0){
    echo"email already exists";
}
else{
    if($password==$confirm_password){
    $insertquery="insert into registration(FirstName,MiddleName,LastName,Email,Password,confirmPassword)values('$first_name','$middle_name','$last_name','$email','$password','$confirm_password)"
    }
    else{
        echo"password are not matching";
    }
}
?>
