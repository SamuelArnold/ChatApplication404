
//Load Web App JavaScript Dependencies/Plugins
define([
    "backbone",
    'socketio',
    "bootstrap"
], function( $, io ) {
	  console.log("required plugins loaded");
					//var io 			 = require("socket.io-client");
					var io 			 = require("socket.io");
					var fs 			 = require("fs");  		
					var socket = io.connect('http://ec2-18-216-64-197.us-east-2.compute.amazonaws.com:8080');
					var $messageForm = $('#messageForm');
					var $message     = $('#message');
					var $chat 		 = $('#chat');
							
					  console.log("required plugins loaded 1");
					// <!--send  -->
					$messageForm.submit(function(e){
						e.preventDefault();
						socket.emit('send message', 'User: ' + $message.val());
						$message.val('');
					});
					// <!--recieve -->
					socket.on('new message', function(data){
						$chat.append('<div class= "well">'+ data.msg+ '</div>' );
					});
					
					socket.on('numOnline', function(data){
						$chat.append('<div class= "well">'+'System: Current Number Of Users: ' + data.msg+ '</div>' );
					});
				 console.log("required plugins loaded3");

				
					//fs.readFile("/Test.jpg", "base64", funtion(err, data){  
						//if(err) {
						//	return console.log( err );
						//};
					//	socket.emit('img', data);
					//});
      //Ready to write Backbone Models and Socket.io communication protocol in here :)
});