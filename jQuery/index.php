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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".navBarButtons").on({
                    mouseover: function(){
                        $(this).css("background-color", "lightgray");
                        $(".dropDownMenu").show();
                    },
                    mouseout: function(){
                        $(this).css("background-color", "green");
                        $(".dropDownMenu").hide();
                    }
                });
                
                $(".menuLinks").on({
                    mouseover: function(){
                        $(this).css("background-color", "gray");
                    },
                    mouseout: function(){
                        $(this).css("background-color", "lightgray");
                    }
                });
            });
        </script>
        <title></title>
    </head>
    <body>
        <div id="navBar">
            <div class="navBarButtons">
                <span class="navBarText">Projects</span>
                <div class="dropDownMenu">
                    <a href="HelloWorld/index.php">
                        <div class="menuLinks">
                            <span class="navBarText">Hello World</span>
                        </div>
                    </a>
                    <a href="FancyHelloWorld/index.php">
                        <div class="menuLinks">
                            <span class="navBarText">Innovative Hello, World!</span>
                        </div>
                    </a>
                    <a href="PlayWithCSS/index.php">
                        <div class="menuLinks">
                            <span class="navBarText">Play with CSS</span>
                        </div>
                    </a>
                    <a href="SmithsonianJourneys/index.php">
                        <div class="menuLinks">
                            <span class="navBarText">Mimic a Print Advertisement</span>
                        </div>
                    </a>
                    <a href="PHP1/index.php">
                        <div class="menuLinks">
                            <span class="navBarText">PHP 1</span>
                        </div>
                    </a>
                    <a href="JavaScriptPlay/index.php">
                        <div class="menuLinks">
                            <span class="navBarText">JavaScript Play</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>