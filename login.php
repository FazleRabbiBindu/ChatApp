<?php
session_start();
if(isset($_POST['signup']))
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
<head>
<title>
Log In
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="container">
    
    <header>
    hello

    </header>
    
    <main>
    <form action="" method="post">
    <input type="text" name="u_name" placeholder="user name" required><br>
    <input type="password" name="u_pass" placeholder="Password" required>
    <input type="submit" name="signup" value="Sign up">
    </form>
    </main>

    <footer>
    </footer>







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>