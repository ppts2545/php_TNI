<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="contact-p.php" method="post">
        <input type="text" id="name" name="name" required placeholder="Name"><br>

        <input type="email" id="email" name="email" required placeholder="E-mail"><br>

        <textarea id="message" name="message" required placeholder="Messages"></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
