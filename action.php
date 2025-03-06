<?php
// Initialize variables to avoid warnings
$name = $email = $message = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #4CAF50, #2E8B57);
            color: white;
            text-align: center;
        }
        .container {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.3);
            animation: fadeIn 1s ease-in-out;
        }
        h2 {
            color: #4CAF50;
        }
        .message-box {
            margin-top: 15px;
            padding: 15px;
            border-left: 5px solid #4CAF50;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🎉 Message Sent Successfully! 🎉</h2>
        <?php if (!empty($name) && !empty($email) && !empty($message)): ?>
            <p>Thank you, <strong><?php echo $name; ?></strong>! Your message has been delivered.</p>
            <div class="message-box">
                <p><strong>Email:</strong> <?php echo $email; ?></p>
                <p><strong>Message:</strong> <?php echo nl2br($message); ?></p>
            </div>
            <p>We will get back to you soon! 🚀</p>
        <?php else: ?>
            <p>❌ No message submitted! Please go back and fill out the form.</p>
        <?php endif; ?>
    </div>
</body>
</html>