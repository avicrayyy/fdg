<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Fuse Design Group</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/my.css">
  <link rel="stylesheet" href="css/justifiedGallery.css" />
  <link rel="stylesheet" href="css/font.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="container-msg">
    <div class="center-msg">
      <div class="logo-m">
        <a href="#"><img class="logo-msg" src="imgs/fdg_logo_01.png"></a>
      </div>
      <div class="mailer-message header">
      <?php
        if(isset($_POST['email'])) {
         
            // EDIT THE 2 LINES BELOW AS REQUIRED
            $email_to = "dsgbdomingo@gmail.com";
            $email_subject = "Fuse Design Group Website Mailer";
         
            function died($error) {
                // your error code can go here
                echo "<p class='p-msg'>We are very sorry, but there were error(s) found with the form you submitted.";
                echo "These errors appear below.<br /><br />";
                echo $error."<br /><br />";
                echo "Please go back and fix these errors.<br /><br />";
                die();
            }
         
         
            // validation expected data exists
            if(!isset($_POST['name']) ||
                !isset($_POST['email']) ||
                !isset($_POST['message'])) {
                died('We are sorry, but there appears to be a problem with the form you submitted.');       
            }
         
             
            $name = $_POST['name']; // required
            $email_from = $_POST['email']; // required
            $message = $_POST['message']; // required
         
            $error_message = "";
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
         
          if(!preg_match($email_exp,$email_from)) {
            $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
          }
         
            $string_exp = "/^[A-Za-z .'-]+$/";
         
          if(!preg_match($string_exp,$name)) {
            $error_message .= 'The Name you entered does not appear to be valid.<br />';
          }
         
          if(strlen($message) < 2) {
            $error_message .= 'The Message you entered do not appear to be valid.<br />';
          }
         
          if(strlen($error_message) > 0) {
            died($error_message);
          }
         
            $email_message = "Form details below.\n\n";
         
             
            function clean_string($string) {
              $bad = array("content-type","bcc:","to:","cc:","href");
              return str_replace($bad,"",$string);
            }
         
             
         
            $email_message .= "Name: ".clean_string($name)."\n";
            $email_message .= "Email: ".clean_string($email_from)."\n";
            $email_message .= "Message: ".clean_string($message)."\n";
         
        // create email headers
        $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);  
        ?>
         
        <!-- include your own success html here -->
              <h1 class="h1-msg">Message sent!</h1>
              <p class="p-msg">Thank you for contacting us! We will be in touch with you very soon. <br>

      <?php  
      }
      ?>
       If not redirected after 5 seconds, <a class="a-msg" href="index.php">click here</a>.</p>
      <?php //header("refresh: 5; url='fusedesigngroup.com/website3'"); ?>
      </div>
    </div>
  </div>
</body>
</html>

