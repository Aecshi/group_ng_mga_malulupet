<?php
// Start session to store messages temporarily
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!isset($_SESSION['messages'])) {
        $_SESSION['messages'] = [];
    }

    $_SESSION['messages'][] = [
        'name' => $name,
        'message' => $message,
        'time' => date("Y-m-d H:i:s")
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini Guestbook</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .entry { border-bottom: 1px solid #ccc; padding: 10px 0; }
    </style>
</head>
<body>
    <h1>Guestbook</h1>

    <form method="POST">
        <input type="text" name="name" placeholder="Your name" required><br><br>
        <textarea name="message" placeholder="Your message" required></textarea><br><br>
        <button type="submit">Post Message</button>
    </form>

    <hr>

    <h2>Messages:</h2>
    <?php
    if (!empty($_SESSION['messages'])) {
        foreach (array_reverse($_SESSION['messages']) as $entry) {
            echo "<div class='entry'>";
            echo "<strong>" . $entry['name'] . "</strong> at " . $entry['time'] . "<br>";
            echo nl2br($entry['message']);
            echo "</div>";
        }
    } else {
        echo "<p>No messages yet.</p>";
    }
    ?>
</body>
</html>
