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
    $result = $conn->query($sql);
    if($result == TRUE)
    {
        $row = $result->fetch_assoc();
        if($row != NULL)
        {
            print_r($row);
        }
        else{
            echo "ID not found <br>";
            //data insert
            //POST[],USER NAME PASSWOR
            $pass = $_POST['u_pass'];
            // INSERT INTTO TABLE (COL1,COL2) VALUES ('10','ABC')
            $sql= "INSERT INTO user_info (UserName,Pass_word) VALUES ('$user','$pass')";
            if($conn->query($sql))
            {
                echo "Data upload successful<br>";
            }
            else{
                echo "Erro in query".$conn->error;
            }
        }
        echo "Table search Successfully<br>";
    }
    else{
        echo "SQL error <br>". $conn->error;
        
    }



}

?>

<html>
<body>
    
    <form action="" method="post">
    <input type="email" name="u_name" placeholder="user name" required><br>
    <input type="password" name="u_pass" placeholder="Password" required>
    <input type="submit" name="signup" value="Sign up">
    </form>
</body>

</html>