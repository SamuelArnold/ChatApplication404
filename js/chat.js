// Created by Sam Arnold on 3/10/18
var canvas;
var canvasContext;
var socket = io();

var chat = new Array("Saab", "Volvo", "BMW","","","","");

function testResults (form) {
    var TestVar = form.inputbox.value;
    alert ("You typed: " + TestVar);
	moveArray(TestVar);
}


var socket = io('ec2-18-216-64-197.us-east-2.compute.amazonaws.com:8080');
socket.on('connect', function () {
socket.send('hi');




socket.on('message', function (msg) {
      // my msg
    });
  });
		
		