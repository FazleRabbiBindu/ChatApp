<?php
session_start();

    // username
    if(isset($_POST['chat_send']))
    {
    $user = $_SESSION['user'];
    $message = $_POST['message'];
    
        
    //db_connection
    include 'dbconnect.php';

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
