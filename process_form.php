<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $language = $_POST["language"];
    $about = $_POST["about"];

    $to = "methodpostser@gmail.com";
    $subject = "New Registration";
    $message = "Name: $name\nEmail: $email\nAge: $age\nLanguage: $language\nAbout: $about";

    mail($to, $subject, $message);
}
?>
