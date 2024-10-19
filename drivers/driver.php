<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply as Driver</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="driver.css">
</head>
<body>
    <div class="form-container">
        
        <!-- Driver icon added here -->
        <div class="icon-container">
            <img src="drivericon.jpg" alt="Driver Icon">
        </div>

        <h1>Apply as Driver</h1>

        <form action="submit.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter your address" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="18" max="100" placeholder="Enter your age" required>

            <label for="availability">Availability:</label>
            <input type="text" id="availability" name="availability" placeholder="Enter your availability (e.g., Full-time, Part-time)" required>

            <label>
                <input type="checkbox" id="vaccinated" name="vaccinated" value="yes"> 
                I am vaccinated
            </label>

            <button type="submit">Apply</button>
        </form>
    </div>
</body>
</html>
