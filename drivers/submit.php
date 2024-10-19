<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Driver Application</title>
    <link rel="stylesheet" href="submit.css"> <!-- Link to CSS file -->
</head>
<body>
    <div class="form-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $name = $_POST['name'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $availability = $_POST['availability'];
            $vaccinated = isset($_POST['vaccinated']) ? 'Yes' : 'No';

            // Display the submitted application details
            echo "<h1>Application Submitted</h1>";
            echo "<p>Name: " . htmlspecialchars($name) . "</p>";
            echo "<p>Address: " . htmlspecialchars($address) . "</p>";
            echo "<p>Gender: " . htmlspecialchars($gender) . "</p>";
            echo "<p>Age: " . htmlspecialchars($age) . "</p>";
            echo "<p>Availability: " . htmlspecialchars($availability) . "</p>";
            echo "<p>Vaccinated: " . htmlspecialchars($vaccinated) . "</p>";

            // Application status
            echo "<h2>Application Status</h2>";
            echo "<p>Your application is currently under review.</p>";
            echo "<p><strong>Next Steps:</strong></p>";
            echo "<ul>";
            echo "<li>Verification of your details will be conducted.</li>";
            echo "<li>You will be notified via email once your application status is updated.</li>";
            echo "<li>If approved, you will receive further instructions on the next steps to complete your onboarding.</li>";
            echo "</ul>";
        } else {
            echo "<h1>Error</h1>";
            echo "<p>No application submitted. Please go back and fill out the form.</p>";
        }
        ?>
    </div>
</body>
</html>
