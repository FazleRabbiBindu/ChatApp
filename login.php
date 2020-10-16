<?php
session_start();
if(isset($_POST['signup']))
{
    //db_connection
    include 'dbconnect.php';
    
    //select username and password from table user info
    $user = $_POST['u_name'];
    $sql= "SELECT Pass_word,UserName FROM user_info WHERE UserName='$user'";
    $result = $conn->query($sql);
    if($result == TRUE)
    {
        $row = $result->fetch_assoc();
        if($row != NULL)
        {
            if($row['Pass_word'] === $_POST['u_pass'])
            {
                print_r($row);
                echo 'pass'.$row['Pass_word'].'<br>';
                echo 'user name'.$row['UserName'];
                $_SESSION['user'] = $_POST['u_name'];
                $_SESSION['password'] = $_POST['u_pass'];
                header('location:chat.php');
            }
            else
            {
                echo 'Wrong info<br>';
            }
            // include 'chat.php';
        }
        else
        {
            echo "Id not matched<br>";
        }
    }
    else{
        echo "SQL error <br>". $conn->error;
        
    }



}

?>

<html>
<body>
    
    <form action="" method="post">
    <input type="text" name="u_name" placeholder="user name" required><br>
    <input type="password" name="u_pass" placeholder="Password" required>
    <input type="submit" name="signup" value="Sign up">
    </form>
</body>

</html>
