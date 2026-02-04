<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize inputs
    $Name = htmlspecialchars(trim($_POST["Name"]));
    $Email = htmlspecialchars(trim($_POST["Email"]));
    $Massage = htmlspecialchars(trim($_POST["Massage"]));

    // Optional: Save to file (or database)
    $feedback = "Name: $Name\nEmail: $Email\nMessage: $Massage\n---\n";
    file_put_contents("feedback.txt", $feedback, FILE_APPEND);

    // Show confirmation
    echo "<h2>Thank you for your feedback!</h2>";
    echo "<p><strong>Name:</strong> $Name</p>";
    echo "<p><strong>Email:</strong> $Email</p>";
    echo "<p><strong>Message:</strong><br>$Massage</p>";
} else {
    echo "Invalid request.";
}
?>
