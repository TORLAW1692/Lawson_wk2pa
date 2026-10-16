<html>

<head>
    <title>Tory Lawson Wk 2 Performance Assessment</title>
</head>

<body>

<form method="POST">
    <h3>Enter your name:
        <input type="text" name="name">
    </h3>

    <h3>Enter your birthdate:
        <input type="text" name="birthdate">
    </h3>

    <h3>Enter your favorite color:
        <input type="text" name="favorite_color">
    </h3>

    <h3>Enter your favorite place to visit:
        <input type="text" name="favorite_place">
    </h3>

    <h3>Enter your nickname:
        <input type="text" name="nickname">
    </h3>

    <input type="submit" value="Submit Values">
</form>

<?php

// Declare variables for submitted form values
$name = '';
$birthdate = '';
$favorite_color = '';
$favorite_place = '';
$nickname = '';

// Retrieve submitted values if they exist
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['birthdate'])) {
    $birthdate = $_POST['birthdate'];
}

if (isset($_POST['favorite_color'])) {
    $favorite_color = $_POST['favorite_color'];
}

if (isset($_POST['favorite_place'])) {
    $favorite_place = $_POST['favorite_place'];
}

if (isset($_POST['nickname'])) {
    $nickname = $_POST['nickname'];
}

// Display either the submitted value or a missing-value message
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (strlen($name) > 0) {
        echo "<h3>The name you entered is: $name</h3>";
    } else {
        echo "<h3>You didn't enter a name!</h3>";
    }

    if (strlen($birthdate) > 0) {
        echo "<h3>The birthdate you gave is: $birthdate</h3>";
    } else {
        echo "<h3>You didn't enter a birthdate!</h3>";
    }

    if (strlen($favorite_color) > 0) {
        echo "<h3>You said your favorite color is: $favorite_color</h3>";
    } else {
        echo "<h3>You didn't enter a favorite color!</h3>";
    }

    if (strlen($favorite_place) > 0) {
        echo "<h3>You said your favorite place is: $favorite_place</h3>";
    } else {
        echo "<h3>You didn't enter a favorite place!</h3>";
    }

    if (strlen($nickname) > 0) {
        echo "<h3>You said your nickname is: $nickname</h3>";
    } else {
        echo "<h3>You didn't enter a nickname!</h3>";
    }
}

?>

</body>

</html>