<!DOCTYPE html>
<meta charset="utf-8">
<title>A page that sends and processes POST requests</title>

<?php
/*
1. Determine whether the client requested this page with required
    parameters (check $_POST variable). Use functions isset and empty.
2. If so, display a simple greeting in which you use the values of
    these parameters. If not, display the form.
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    if (!empty($name) && !empty($lastname)) {
        echo "Hello ". $name . " " . $lastname . ", the time is " . date("h:i", time());
    }else{
?>
<p>This form will send out a HTTP POST request with two parameters:</p>
<ul>
    <li><pre>first_name</pre> representing the value in the first input field, and</li>
    <li><pre>last_name</pre> representing the value in the second input field.</li>
</ul>
<form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
    <p><label for="first_name">First name:</label>
    <input type="text" name="first_name" id="first_name" /></p>
    <p><label for="last_name">Last name:</label>
    <input type="text" name="last_name" id="last_name" /></p>
    <p><button type="submit">Send request</button></p>
</form>

<?php
    }
}



?>