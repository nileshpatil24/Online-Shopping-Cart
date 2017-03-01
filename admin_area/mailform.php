<html>
<body>
<?php
if(@$_POST['email'])
{
$email = $_POST['email'];
$email1 = $_POST['email1'];
$subject=$_POST['subject'];
$message=$_POST['message'];
mail($email1,$subject,$message,$email);
echo "Thank you for using OUR mail form ";
}
else
{
echo"<form action='mailform.php' method='POST'>
				<input type='email' name='email' placeholder='Your email id: ' autofocus/><br>
				<input type='email1' name='email1' placeholder='Receivers email id: '/><br>
				<input type='text' name='subject' placeholder='subject' /><br>
				<textarea name='message' rows='15' cols='40' placeholder='message'></textarea><br>
				<input type='submit'/>
				</form>";
}
?>
</body>
</html>