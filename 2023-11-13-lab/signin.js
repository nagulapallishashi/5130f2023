function submitLoginForm() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Implement AJAX call to back-end to verify email and password
    // If successful, call the function to handle 2FA
}

function resetLoginForm() {
    document.getElementById('login-form').reset();
}

function handle2FA() {
    // Display the 2FA form
    document.getElementById('twoFactorAuth').style.display = 'block';
    
    // Get user's location using GeoNames or another geolocation API
    // Send location data to back-end to send a 2FA code to the user
}

function submit2FAForm() {
    const code = document.getElementById('code').value;

    // Implement AJAX call to back-end to verify the 2FA code
}

// Example of how you might use the GeoNames API in JavaScript
function getUserLocation() {
    // Note: GeoNames does not provide a method for IP to location or similar services suitable for 2FA.
    // You would typically use a different service for IP-based geolocation.
    // The following is a placeholder to demonstrate the concept.
    const username = 'Shashi2812';
    const apiURL = `http://api.geonames.org/findNearbyPostalCodesJSON?lat=LATITUDE&lng=LONGITUDE&username=${username}`;

    fetch(apiURL)
        .then(response => response.json())
        .then(data => {
            // Process the location data
            console.log(data);
        })
        .catch(error => console.error('Error fetching GeoNames data:', error));
}
