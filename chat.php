<?php
session_start();

    // username
    if(isset($_POST['chat_send']))
    {
    $user = $_SESSION['user'];
    $message = $_POST['message'];

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
        // echo "Connection Successful<br>";
    }

    $sql ="SELECT * FROM global_chat";
    $result = $conn->query($sql);
    if($result == true)
    {
        // $row = $result->fetch_assoc();
        while($row = $result->fetch_assoc())
        {
            echo 'User:'.$row['User'].'<br>';
            echo 'Text:'.$row['Message'].'<br><br>';
            
        }
    }
    else{
        echo $conn->error;
    }
    if(isset($_POST['chat_send']))
    {
        $sql2 = "INSERT INTO global_chat (User,Message) VALUES('$user','$message')";
        if($conn->query($sql2))
        {
            // echo "insertion Successful";
        }
        else
        {
            echo $conn->error;
        }
    }
}
else
{
    $user = 'No one';
    $message = "No message yet";
}

?>
<html>
<head>
</head>
<body>
    
<div class="chat-area">
<div class="chat-display">
</div>
<div class="chat-submission">
<form action="" method="post">
<input type="text" name="message" id="">
<input type="submit" name="chat_send" value="Send">
</form>
</div>
</div>

</body>
</html>