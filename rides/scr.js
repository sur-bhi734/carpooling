let carpoolData = [];

// Function to load carpool data from a CSV file
async function loadCarpoolData() {
    const response = await fetch('carpool_data.csv'); // URL of your CSV file
    const text = await response.text();
    const rows = text.split('\n').slice(1); // Skip header row

    carpoolData = rows.map(row => {
        const [id, name, start_location, destination, available_seats, contact] = row.split(',');
        return {
            id: parseInt(id, 10),
            name,
            start_location,
            destination,
            contact,
            available_seats: parseInt(available_seats, 10)
            
        };
    });
}

// Function to find carpools based on the route
function findCarpoolRoutes(startLocation, destination) {
    return carpoolData.filter(entry => 
        entry.start_location.toLowerCase() === startLocation.toLowerCase() && 
        entry.destination.toLowerCase() === destination.toLowerCase()
    );
}

// Event listener for finding routes
document.getElementById('findRoutesForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const startLocation = document.getElementById('find_start_location').value;
    const destination = document.getElementById('find_destination').value;
    const matchingRoutes = findCarpoolRoutes(startLocation, destination);

    // Clear the previous results
    const resultsTable = document.getElementById('resultsTable');
    resultsTable.innerHTML = `
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Starting Location</th>
            <th>Destination</th>
            <th>Contact</th>
            <th>Available Seats</th>
        </tr>
    `;

    // Populate the results table
    matchingRoutes.forEach(route => {
        const row = resultsTable.insertRow();
        row.insertCell(0).innerText = route.id;
        row.insertCell(1).innerText = route.name;
        row.insertCell(2).innerText = route.start_location;
        row.insertCell(3).innerText = route.destination;
        row.insertCell(4).innerText = route.contact;
        row.insertCell(5).innerText = route.available_seats;
    });

    if (matchingRoutes.length === 0) {
        alert('No carpools found for this route.');
    }
});

// Load carpool data on page load
window.onload = loadCarpoolData;