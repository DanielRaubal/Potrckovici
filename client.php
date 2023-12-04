<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSocket Chat</title>
</head>
<body>

<h1>WebSocket Chat</h1>
<input type="text" id="messageInput" placeholder="Type your message">
<button onclick="sendMessage()">Send</button>
<div id="chat"></div>

<script>
    var socket = new WebSocket("ws://localhost:8080");

    socket.onopen = function (event) {
        console.log("WebSocket connection opened:", event);
    };

    socket.onmessage = function (event) {
        var chatDiv = document.getElementById("chat");
        var message = document.createElement("p");
        message.innerHTML = event.data;
        chatDiv.appendChild(message);
    };

    socket.onclose = function (event) {
        console.log("WebSocket connection closed:", event);
    };

    function sendMessage() {
        var input = document.getElementById("messageInput");
        var message = input.value;
        socket.send(message);
        input.value = "";
    }
</script>

</body>
</html>
