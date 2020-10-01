<?php
if(isset($_POST['signup']))
{
    //grab username password data from database
    //if username : already account exist : login
    
    //else insert data into database
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

    //Creating a database table
    // $sql = " CREATE TABLE User_info (
    //     SL INT(6) AUTO_INCREMENT PRIMARY KEY,
    //     Pass_word VARCHAR(20) ,
    //     UserName VARCHAR (10)
    // )";

    //select username and password from table user info
    $user = $_POST['u_name'];
    $sql= "SELECT Pass_word,UserName FROM user_info WHERE UserName='$user'";
    $result = $conn->query("$sql");
    $row = $result->fetch_assoc();
    print_r($row);
    if($result == TRUE)
    {
        echo "Table search Successfully<br>";
    }
    else{
        
        echo "Table Failed to create <br>". $conn->error;
    }



}

?>

<html>
<body>
    
    <form action="" method="post">
    <input type="text" name="u_name" placeholder="user name"><br>
    <input type="password" name="u_pass" placeholder="Password">
    <input type="submit" name="signup" value="Sign up">
    </form>
</body>

</html>