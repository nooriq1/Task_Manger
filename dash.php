<?php
// Check if the visitor count cookie exists
if(isset($_COOKIE['visitor_count'])) {
    // If it exists, increment the count by 1
    $visitor_count = $_COOKIE['visitor_count'] + 1;
    // Update the cookie with the new count
    setcookie('visitor_count', $visitor_count, time() + (86400 * 30)); // Cookie valid for 30 days
} else {
    // If the cookie doesn't exist, set the count to 1
    $visitor_count = 1;
    // Create a new cookie with the initial count
    setcookie('visitor_count', $visitor_count, time() + (86400 * 30)); // Cookie valid for 30 days
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Counter</title>
</head>
<body>
    <h1>Welcome to our website!</h1>
    <p>You are visitor number <?php echo $visitor_count; ?></p>
</body>
</html>