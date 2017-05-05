<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <title>JavaScript Play</title>
    </head>
    <body id="body">
        <h1>Mouse over any of these to change the background color</h1>
        <div onmouseover="changeColor('White')">
            White
        </div>
        <div onmouseover="changeColor('Black')">
            Black
        </div>
        <div onmouseover="changeColor('Red')">
            Red
        </div>
        <div onmouseover="changeColor('Orange')">
            Orange
        </div>
        <div onmouseover="changeColor('Yellow')">
            Yellow
        </div>
        <div onmouseover="changeColor('Green')">
            Green
        </div>
        <div onmouseover="changeColor('Blue')">
            Blue
        </div>
        <div onmouseover="changeColor('Purple')">
            Purple
        </div>
        <h1 onclick="clickGreenScreen()">Click this header while the screen is green to get a surprise!</h1>
        <div id="surpriseDiv">
            Surprise!
        </div>
        <script>
            var backgroundColor = "White";
            function changeColor(color) {
                document.getElementById('body').style.backgroundColor=color;
                backgroundColor = color;
            }
            function clickGreenScreen() {
                if (backgroundColor == "Green") {
                    document.getElementById('surpriseDiv').style.display = 'block';
                }
            }
        </script>
    </body>
</html>