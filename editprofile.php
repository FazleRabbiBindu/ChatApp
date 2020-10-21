<?php
function insert_data($UserName,$Work,$About,$University,$Addres,$Stat,$Birthday)
{

    $server_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $db_name = 'class_1';

    $conn = new mysqli($server_name,$user_name,$password,$db_name);
    if($conn->connect_error)
    {
        echo "Connection Failed".$conn->connect_error."<br>";
    }
    else
    {
        echo "Connection Successful<br>";
    }

$sql ="INSERT INTO User_Profile (UserName,Work,About,University,Addres,Stat,Birthday)
     VALUES ('$UserName','$Work','$About','$University','$Addres','$Stat','$Birthday')";
    $result = $conn->query($sql);
    if($result == true)
    {
        echo "Update successful<br>";
    }
    else{
        echo "Connection Failed".$conn->connect_error."<br>";
    }
    
}
if(isset($_POST['update_prof']))
{
    $server_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $db_name = 'class_1';

    $conn = new mysqli($server_name,$user_name,$password,$db_name);
    if($conn->connect_error)
    {
        echo "Connection Failed".$conn->connect_error."<br>";
    }
    else
    {
        echo "Connection Successful<br>";
    }

    $sql ="SELECT * FROM User_Profile ";
    $result = $conn->query($sql);
    if($result == true)
    {
        insert_data($_POST['name'],$_POST['prof'],$_POST['about'],$_POST['uni'],$_POST['add'],$_POST['stat'],$_POST['dob']);
    }
    else{
        $sql ="CREATE TABLE User_Profile (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            UserName VARCHAR(30) NOT NULL,
            Work VARCHAR(30) NOT NULL,
            About VARCHAR(50),
            University VARCHAR(30) NOT NULL,
            Addres VARCHAR(30) NOT NULL,
            Stat VARCHAR(50),
            Birthday VARCHAR(30) NOT NULL
            )";
        $result = $conn->query($sql);
        if($result == true)
        {
            insert_data($_POST['name'],$_POST['prof'],$_POST['about'],$_POST['uni'],$_POST['add'],$_POST['stat'],$_POST['dob']);
        }
        else
        {
            echo "Connection Failed".$conn->error."<br>";
        }
    }

}


?>
















<form action="" method="post">
    <div>
        <label for="">Profile Picture</label>
        <input type="file" name="pp">
    </div>
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Work</label>
        <input type="text" name="prof">
    </div>
    <div>
        <label for="">About</label>
        <input type="text" name="about">
    </div>
    <div>
        <label for="">Address</label>
        <input type="text" name="add">
    </div>
    <div>
        <label for="">Univesity</label>
        <input type="text" name="uni">
    </div>
    <div>
        <label for="">Status</label>
        <input type="text" name="stat">
    </div>
    <div>
        <label for="">Birthday</label>
        <input type="date" name="dob">
    </div>
    <div>
        <label for="">Submit</label>
        <input type="submit" name="update_prof">
    </div>
    
</form>