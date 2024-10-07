<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    if (isset($_POST['submit'])) {
        // Get the selected game
        $selectedGame = $_POST['game'];

        // You can process the selected game here, such as saving it to a database
        // For simplicity, let's just echo it out
        echo "Your favorite game is: $selectedGame";
    }
}
?>