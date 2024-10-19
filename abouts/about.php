<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Carpooling Website</title>
    <link rel="stylesheet" href="about.css">
</head>
<body>
    <div class="about-section">
        <img src="carpooling-image.jpg" alt="Carpooling" class="car-image"> <!-- Add your image here -->
        <h1>About Carpool Connect</h1>
        <p class="about-description">
            Carpool Connect is a platform designed to connect drivers and passengers,
            allowing users to share rides, save money, and reduce their carbon footprint.
            <span id="more">With a user-friendly interface and community-driven approach, 
            we aim to make commuting more efficient and environmentally friendly.  
            Our service connects commuters with similar routes, allowing them to share rides and reduce traffic 
            congestion. By carpooling, you're not only saving money but also contributing to a greener environment.
            Our mission is to provide a reliable, safe, and enjoyable experience for all our users,
            to divide the travel expenses equally between all the occupants of the vehicle (driver or passenger). 
            The driver does not try to earn money, but to share with several people the cost of a trip he/she would 
            do anyway.</span>
        </span>
        </span>
        </p>
        <button id="read-more-btn">Read More</button>
    </div>
    
    <script>
        document.getElementById("read-more-btn").onclick = function() {
            const aboutDescription = document.querySelector('.about-description');
            const moreText = document.getElementById("more");
            
            // Toggle text visibility
            if (moreText.style.display === "none") {
                moreText.style.display = "inline"; // Show more text
                aboutDescription.style.maxHeight = "none"; // Allow full height
                this.textContent = "Read Less"; // Change button text
            } else {
                moreText.style.display = "none"; // Hide more text
                aboutDescription.style.maxHeight = "100px"; // Reset height
                this.textContent = "Read More"; // Change button text back
            }
        }

        
    </script>
</body>
</html>