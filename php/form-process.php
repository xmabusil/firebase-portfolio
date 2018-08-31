<?php

  

  // EMAIL
if (empty($_POST["form_email"])) {
  $errorMSG .= "Email is required ";
} else {
  $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["form_msg"])) {
  $errorMSG .= "Message is required ";
} else {
  $message = $_POST["message"];
}

  // Set the recipient email address.
  $recipient = "santos_94@outlook.com";
  // Set the email subject.
  $subject = "Message to magdalundberg.se from: $email";

  // Build the email content.
  $body .= "Email: $email\n\n";
  $body .= "Message: \n$message\n";

  // success
  $success = mail($recipient, $subject, $body, "From:".$email);

  // Send the email.
  if ($success) {
    // Set a 200 (okay) response code.
    http_response_code(200);
    echo "Thank You! Your message has been sent.";
  } else {
    // Set a 500 (internal server error) response code.
    http_response_code(500);
    echo "Oops! Something went wrong and we couldn’t send your message.";
  }

?>