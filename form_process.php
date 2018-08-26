<?php

// define variables and set to empty values
$name_error = $email_error = "";
$first_name = $last_name = $email = $message = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $name_error = "First name is required";
  } else {
    $first_name = test_input($_POST["first_name"]);
    // check if first name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
      $name_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["last_name"])) {
    $name_error = "Last name is required";
  } else {
    $last_name = test_input($_POST["last_name"]);
    // check if last name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
      $name_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
    }
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }

  if ($name_error == "" and $email_error == "") {
    $message_body = "";
    unset($_POST["submit"]);
    foreach ($_POST as $key => $value) {
    	$message_body .=  "$key: $value\n";
    }

    // ========================================================================
    // CHANGE THIS $to ADDRESS ONCE IT'S SET UP
    // ========================================================================
    $to = "HunterSexAndGenderDiversity@gmail.com";
    $from = $_POST["email"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $subject = "Contact Form Submit";
    $headers .= "From: ".$_POST["first_name"]." ".$_POST["last_name"]." <".$_POST["email"].">\r\n";
    if (mail($to, $subject, $message, $headers)){
      $success = "Message sent, thank you for contacting us!";
      $name = $email = $subject = $message = "";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>