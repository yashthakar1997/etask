const express = require('express');
const request = require('request');


const app = express();


app.get('/', (req,res) => {
    request('https://api.sunrise-sunset.org/json?lat=36.7201600&lng=-4.4203400&formatted=0', function (error, response, body) {
        console.log('error:', error); // Print the error if one occurred
        console.log('statusCode:', response && response.statusCode); // Print the response status code if a response was received
        console.log('body:', body); // Print the HTML for the Google homepage.
        res.send(body);
    });

});


app.listen(3000, console.log('server is started'));