
<?php
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number'];

    //database connection 
    $conn=new mysqli('localhost','root','','registrartion_form');
    //check the connection
    if($conn->connect_error){
        die('Connection falied:'.$conn->connect_error);

    }
    else{
        $stmt=$conn->prepare("INSERT INTO registration(firstname,lastname,gender,email,password,number)
        values(?,?,?,?,?,?)");
        $stmt->bind_param("sssssi",$firstname,$lastname,$gender,$email,$password,$number);
        $stmt->execute();
        echo "registration successfull....";
        $stmt->close();//close the statement
        $conn->close();//close the connection
    }
?>