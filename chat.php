<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Chat</title>
    </head>

    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
        <div id="messages">

        </div>

        <div id="sendForm">
     
	        <label for="message">Message :</label>
            <input type="text" name="message" id="message" /><br />

            <button id="sendButton" type="button" onclick="sendMessage()">Envoyer</button>
		</div>

        <script type="text/javascript">
            var url = new URL(window.location.href);
            var receiver = url.searchParams.get("receiver")

            function sendMessage()
            {
                var formData = new FormData();
                formData.append("receiver", receiver);
                formData.append("message", document.getElementById("message").value);

                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "sendMessage.php", true);
                xhttp.send(formData);
            }

            function refreshMessages()
            {
                var formData = new FormData();
                formData.append("receiver", receiver);

                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "getMessages.php", true);
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("messages").innerHTML = this.responseText;
                    }
                };
                xhttp.send(formData);
            }

            setInterval(refreshMessages, 1000);

        </script>
    </body>
</html>

