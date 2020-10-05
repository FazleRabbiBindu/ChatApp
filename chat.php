<?php

if(isset($_POST['chat_send']))
{
    // username
    
    $message = $_POST['message'];
}
else
{
    $message = "No message yet";
}

?>
<html>
<head>
</head>
<body>
    
<div class="chat-area">
<div class="chat-display">
<?php echo $message; ?>
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