<? 

	include("header.inc.php");
	if(@$_POST['name']){
		$to = "tatkopp@aol.com";
		$subject = 'MAIL FROM SITE: ' . $_POST['subject'];
		$message = 'FROM: ' . $_POST['email'] . "
		" . $_POST['message'];
		$headers = 'From: webmaster@flyingcarpetrugrestoration.com' . "\r\n" .
  		'Reply-To: ' . $_POST['email'] . "\r\n" .
    	'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
		$message = "Your message has been sent.";
	} 
	
?>

<div class="contentbg">
	<div class="content">
    	<? if(@$message){ ?><div class="message"><? print($message); ?></div><? } ?>
    	<p>To contact us, please fill out the following form, or call <b>(510) 654-3250</b>.</p>
    	<table>
        <form method="post" action="contact.php">
        	<tr>
            	<td>Your Name</td>
                <td><input name="name" id="name" type="text" /></td>
            </tr>
            <tr>
            	<td>Your Email</td>
                <td><input name="email" id="email" type="text" /></td>
            </tr>
            <tr>
            	<td>Subject</td>
                <td><input name="subject" id="subject" type="text" /></td>
            </tr>
            <tr>
            	<td valign="top">Message</td>
                <td><textarea rows="6" cols="25" name="message" id="message"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input name="btnSend" id="btnSend" type="submit" value="Send" /></td>
            </tr>
            
        </form>
        </table>
    </div>
</div>
</body>
</html>
