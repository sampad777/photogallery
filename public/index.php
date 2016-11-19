<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тест урок 5</title>
    <link type="text/css" rel="stylesheet" href="stylesheets/main.css">
</head>
<body>
<?php
    require_once ("../includes/functions.php");
    require_once ("../includes/database.php");
    require_once ("../includes/user.php");

    $record = User::find_by_id(1);

    echo $user->username;
echo "<br />";
echo $user->full_name();
    echo "<hr />";

    $user_set = User::find_all();
    while($user = $database->fetch_array($user_set)) {
        echo "User: ".$user['username']."<br>";
        echo "Name: ".$user['first_name']." ".$user['last_name']."<br /><br />";
    }

    echo "Add changes to file";
    echo "Еще одно изменение";


?>


</body>
</html>

