<? include("header.inc.php");
    if(@$_POST['name']){
        $to = "tatkopp@aol.com"; 
        $subject = 'MAIL FROM SITE: ' . $_POST['subject'];
        $message = 'FROM: ' . $_POST['email'] . "
        " . $_POST['message'];
        $headers = 'From: webmaster@flyingcarpetrugrestoration.com' . "\r\n" .
        'Reply-To: ' . $_POST['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
        $message = "Thank you - your message has been sent.";
    } 
?>
<? if(@$message){ ?><div class="em"><? print($message); ?></div><? } ?>
<div class="contentbg">
      <div class="content">
        <iframe class="embedvideo" src="http://player.vimeo.com/video/110161327?color=ff9933" width="650" height="371" style="margin-top: 20px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <div style="margin-top: 15px"></div>
        <p>To contact, please email <a href="mailto:tatkopp@gmail.com?Subject=Carpet%20Restoration%20Inquiry" target="_top"class="em">tatkopp@gmail.com</a>, call <span class="em">(510) 654-3250</span>, or fill out the form below.</p>
        <p>Also check us out on  <span id="yelp-biz-badge-plain-Am5cr7pKhvygRf8HCUYu5A"><a href="http://www.yelp.com/biz/carpet-restoration-antique-and-handmade-tatjana-kopp-oakland">Check out Carpet Restoration, Antique and Handmade,Tatjana Kopp on Yelp</a></span><script type="text/javascript">(function(d, t) {var g = d.createElement(t);var s = d.getElementsByTagName(t)[0];g.id = "yelp-biz-badge-script-plain-Am5cr7pKhvygRf8HCUYu5A";g.src = "//dyn.yelpcdn.com/biz_badge_js/en_US/plain/Am5cr7pKhvygRf8HCUYu5A.js";s.parentNode.insertBefore(g, s);}(document, 'script'));</script></p>
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
<script> document.getElementById("three").className += " activePageLink"; </script>
</body>
</html>
