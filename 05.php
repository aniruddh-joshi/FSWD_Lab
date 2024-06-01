<?php
// Set the cookie name
$cookie_name = "last_visit";

// Check if the cookie exists
if(isset($_COOKIE[$cookie_name])) {
    // Retrieve the last visit time from the cookie
    $last_visit = $_COOKIE[$cookie_name];
    echo "Last visited on: " . $last_visit;
} else {
    echo "This is your first visit!";
}

// Set the cookie with the current date-time
$current_time = date("Y-m-d H:i:s");
setcookie($cookie_name, $current_time, time() + (86400 * 30), "/"); // Cookie expires in 30 days
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Visit Tracker</title>
</head>
<body>
    <h1>Welcome to the Last Visit Tracker</h1>
    <?php
    if(isset($last_visit)) {
        echo "<p>Your last visit was on: " . $last_visit . "</p>";
    } else {
        echo "<p>It looks like this is your first time here.</p>";
    }
    ?>
    
</body>
</html>
