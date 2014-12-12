<html>
    <head>
        <style>
            #wrap {
                width: 550px;
                margin: 0 auto;
            }
            ul li{
                /**sets up the layout of the page */
                float: left;
                padding: 40px;
                background-color: lightcyan;
                margin: 10px;
                -webkit-border-radius: 100px;
                -moz-border-radius: 15px;
                border-radius: 15px dotted blue;
                border:dotted 2px blue;
            }
            
            /** use this class to break line in the list */
            ul li.break {
                clear: left;
            }
        </style>
    </head>
    <body>
        <div id='wrap'>
            <center><h1><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2014/12/01/flamingtext_com_1417405181_106733668.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></a></h1></center>
        <ul>
            <!--This displays the genre options for the user to choose-->         
            <center><h2>Select a Genre</h2></center>
            <li><a href="mood.php?music=EDM">EDM</a></li>
            <li><a href="mood.php?music=PunkRock">Punk/Rock</a></li>   
            <li><a href="mood.php?music=ClassicRock">Classic Rock</a></li>
            <li class="break"><a href="mood.php?music=Country">Country</a></li>
            <li><a href=mood.php?music=Indie>Indie</a></li>
            <li class="break"><a href="mood.php?music=Disney">Disney</a></li>
            <li><a href="mood.php?music=Pop">Pop</a></li>  
            <li><a href="mood.php?music=HipHop">Hip Hop & R&B</a></li>
         
        </ul>
        </div>
    </body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
