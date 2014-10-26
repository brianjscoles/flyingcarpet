<? 

    include("header.inc.php");
    if(@$_POST['name']){
        $to = "brianscoles@gmail.com";  //for testing only!  should actually point to tatkopp@aol.com
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
    <? if(@$message){ ?><div class="message"><? print($message); ?></div><? } ?>
    


    <div class="contentbg">
         <div class="content">
        <p>To contact, please email <a href="mailto:tatkopp@gmail.com?Subject=Carpet%20Restoration%20Inquiry" target="_top"class="em">tatkopp@gmail.com</a>, call <span class="em">(510) 654-3250</span>, or fill out the form below.</p>
        <p>Also check us out on <a class="em" style="font-size: 16px;" href="http://www.yelp.com/biz/carpet-restoration-antique-and-handmade-tatjana-kopp-oakland" target="_blank">Yelp!</a></p>
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
                <td><textarea rows="10" cols="60" name="message" id="message"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input name="btnSend" id="btnSend" type="submit" value="Send" /></td>
            </tr>
            
        </form>
        </table>
    </div>
</div>
<script> document.getElementById("three").style.color = "#95CBE8"; </script>
</body>


<!-- PHP section - needs to be replaced! 

<? 

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
      
-->

</html>
