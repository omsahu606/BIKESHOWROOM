<?php
echo "<h2>All Feedback</h2>";
if (file_exists("feedback.txt")) {
    echo nl2br(file_get_contents("feedback.txt"));
} else {
    echo "No feedback yet.";
}
?>
