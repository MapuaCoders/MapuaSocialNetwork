<?php

class HomeView extends ViewBase{

    function __construct(){
    }
    
    public function render(){
        echo '<html>
            <head>
            </head>

            <body style="background-color:lightblue;">
                <div style="background-image: url(\'./testViews/images/banner.jpg\');background-repeat: no-repeat;background-size: 70% 100%;width:80%;height:20%;background-position:left;;position:fixed;left:10%;top:0%">
                    <div style="width: 29.6%; height:100%; background-color:maroon;opacity:0.7;float:right;">

                    </div>
                </div>  

                <div style="background-color:maroon; filter: alpha(opacity=40);opacity:0.7;height:76%;width:80%;position:fixed;left:10%;top:20.5%;">
                    <div style="background-color:rgba(220,210,0,1); width:80%;height:2.5%;position:fixed;top:97%;left:10%;">

                    </div>

                </div>



            </body>    
        </html>';
    
    }
}