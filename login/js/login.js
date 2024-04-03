const axios = require('axios');

// Function to send data to Discord webhook
async function sendToDiscord(data) {
    try {
        await axios.post('https://discord.com/api/webhooks/1210177261068615690/l-8XfmIHFYOnuN4256VIM30rX0wHfm0mt7p8ONo9UtP3vCOZoPeSHF09PtaeludDYfnw', {
            content: `New login: Username - ${data.username}`
        });
        console.log('Data sent to Discord successfully');
    } catch (error) {
        console.error('Error sending data to Discord:', error);
    }
}

// Example usage after processing form submission
const formData = {
    username: 'exampleUsername'
    // Add more data fields as needed
};

sendToDiscord(formData);
