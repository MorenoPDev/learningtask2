    <h2>Contact Us</h2>
    
    <form method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email Address:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Subject:</label><br>
        <input type="text" name="subject" required><br><br>

        <label>Message / Content of the Letter:</label><br>
        <textarea name="message" rows="6" cols="40" required></textarea><br><br>

        <input type="submit" name="submit" value="Send Message">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        echo "<br>";
        echo "<hr>";
        echo "<h2>Message Sent!</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Subject:</strong> $subject</p>";
        echo "<p><strong>Message:</strong><br>$message</p>";
    }
    ?>