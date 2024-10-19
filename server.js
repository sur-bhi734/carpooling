const express = require('express');
const bodyParser = require('body-parser');
const twilio = require('twilio');
const path = require('path');

const app = express();
const PORT = process.env.PORT || 3000;

// Twilio credentials
const accountSid = 'ACf9438b394fca52d0fa0da35c2f881b10'; // Your Account SID from www.twilio.com/console
const authToken = '65f2634aff63e0779e282a9c88e34701'; // Your Auth Token from www.twilio.com/console
const twilioPhoneNumber = '+14253995134'; // Your Twilio phone number

// Middleware
app.use(bodyParser.json());
app.use(express.static('public')); // Serve static files from the public directory

// Serve panic.html
app.get('/bot.html', (req, res) => {
    res.sendFile(path.join(__dirname,'bot.html'));
});

// Endpoint to send SMS
app.post('/send-sms', (req, res) => {
    const { to, message } = req.body;

    const client = twilio(accountSid, authToken);

    client.messages.create({
        body: message,
        from: twilioPhoneNumber,
        to: to
    })
    .then(message => {
        console.log('Message sent:', message.sid);
        res.status(200).send('Message sent successfully.');
    })
    .catch(err => {
        console.error('Error sending message:', err);
        res.status(500).send('Failed to send message.');
    });
});

app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});