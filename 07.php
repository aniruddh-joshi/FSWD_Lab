<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page Views Counter</title>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin-top: 100px;
    }
    .container {
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: inline-block;
    }
    h2 {
        color: #333;
    }
    .count {
        font-size: 24px;
        margin-top: 20px;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Welcome to Page Views Counter</h2>
    <?php
    session_start(); // Start the session

    if(isset($_SESSION['page_views'])) {
        $_SESSION['page_views']++; // Increment page views count if session variable exists
    } else {
        $_SESSION['page_views'] = 1; // Initialize page views count if session variable doesn't exist
    }

    // Display the page views count
    echo "<div class='count'>Page views: " . $_SESSION['page_views'] . "</div>";
    ?>
</div>

</body>
</html>
