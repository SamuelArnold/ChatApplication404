// Created by Sam Arnold on 3/10/18
var canvas;
var canvasContext;
var socket = io();

var chat = new Array("Saab", "Volvo", "BMW","","","","");

function testResults (form) {
    var TestVar = form.inputbox.value;
    alert ("You typed: " + TestVar);
	moveArray(TestVar);
	alert(chat[0]);
	alert(chat[1]);
}

function moveArray(inputt) {
	
    chat[4] =chat[5];
	chat[3] =chat[4];
	chat[2] =chat[3];
	chat[1] =chat[2];
	chat[0] = input;
}


window.onload = function(){
		
}
