<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Carpooling Website</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="contact-container">
        <h1>Contact Us</h1>
        <p>If you have any questions, feel free to reach out to us. We're here to help!</p>

        <div class="contact-form">
            <form action="submit_contact.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Your Message" required></textarea>

                <a href="contact_submit.html" class="button">Submit</a>

            </form>
        </div>

        <div class="contact-info">
            <h2>Our Contact Information</h2>
            <p><i class="fas fa-envelope"></i> Email: <a href="mailto:support@carpooling.com">support@carpooling.com</a></p>
            <p><i class="fas fa-phone"></i> Phone: +123 456 7890</p>
            <p><i class="fas fa-map-marker-alt"></i> Address: 123 Carpooling St, EcoCity, World</p>

            <div class="social-media">
                <h3>Follow Us</h3>
                <a href="https://twitter.com/yourcompany" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="https://instagram.com/yourcompany" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="mailto:support@carpooling.com"><i class="fas fa-envelope"></i> Email</a>
            </div>
        </div>
    </div>
</body>
</html>
