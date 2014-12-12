<html>
    <head>
        <style>
            #wrap {
                width: 550px;
                margin: 0 auto;
            }
            ul li{
                /**This adjusts the layout of the second page*/
                float: left;
                padding: 40px;
                background-color: lightcyan;
                margin: 10px;
                border: 2px dotted blue;
            }
            
            /** use this class to break line in the list  */
            ul li.break {
                clear: left;
            }
        </style>
    </head>
    <body>
        <div id='wrap'>
        <!--This displays the moods the user can choose from-->
        <h1>You have selected <?php echo $_GET['music']; ?></h1>
        <h2>I want to feel...</h2>
        <?php $baseUrl = "play.php?music=".$_GET['music']; ?>
        <ul>
            <li><a href="<?php echo $baseUrl ?>&mood=Happy">Happy</a></li>
            <li><a href="<?php echo $baseUrl ?>&mood=Chill">Chill</a></li>
            <li><a href="<?php echo $baseUrl ?>&mood=Adventurous">Adventurous</a></li>
            <li class="break"><a href="<?php echo $baseUrl ?>&mood=Sad">Sad</a></li>
             <!--This makes sure the moods Angry and Reckless do not show when the user selects
             Indie music. Indie music is not angry or reckless in any way so no songs would
             fit those tags-->
             <?php if ($_GET['music'] != 'Indie') : ?>
            <li><a href="<?php echo $baseUrl ?>&mood=Angry">Angry</a></li>
            <li><a href="<?php echo $baseUrl ?>&mood=Reckless">Reckless</a></li>
            <?php endif; ?>
            <li class="break"><a href="<?php echo $baseUrl ?>&mood=Passionate">Passionate</a></li>
            <li><a href=<?php echo $baseUrl ?>&mood=Unstoppable>Unstoppable</a></li>
            <li><a href=<?php echo $baseUrl ?>&mood=LikeDancing>Like Dancing</a></li>
        </ul>
        </div>
    </body>
</html>


