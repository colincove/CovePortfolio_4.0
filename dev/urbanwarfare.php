<?php 
    $title = 'Urban Warfare';
    $subTitle = 'Side Scrolling Action';
    $videoSrc = 'content/urbanwarfare/urbanwarfare.mp4';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
      <?php require "head.php"; ?>
    </head>
    <body>
        <?php require "nav.php"; ?>
        <?php require "header.php"; ?>
        <section class="main-section">
            <div class="layout-1">
                <div class="section1">
                    <header>
                        <h1>Collaborators</h1>
                    </header>
                    <p>Working alongside a level designer we developed the game centered around level destruction and interesting weaponry. Alongside the ActionScript 3.0 that the game was built on I developed a PHP backend which communicated to the game through encrypted JSON formatted webservices. The server stored screen captures of gameplay, leaderboards, and user progress data.</p>
                    
                </div>
                <div class="img-container img-major img1"><a class="fancybox" rel="draft"  href="content/urbanwarfare/urbanwar-01.jpg"><div class="img urban-01"></div></a></div>
            </div>
            <div class="layout-1">
                <div class="section1">
                    <header>
                        <h1>Maximum Destruction</h1>
                    </header>
                    <p>Each level gets progressively more hectic challenging the player to be more efficient at destroying everything on the screen. The on rails nature of the screen movement means the gameplay never slows down and players alternate between clearing buildings and targeting enemies for maximum points. </p>
                </div>
                <div class="img-container img-major img1"><a class="fancybox" rel="futweb"  href="content/urbanwarfare/urbanwar-02.jpg"><div class="img urban-02"></div></a></div>
            </div>
            <div class="layout-1">
                <div class="section1">
                    <header>
                        <h1>Upgrades & Customization</h1>
                    </header>
                    <p>In total there are 9 weapons that the player can collect throughout the game. Each level a new loadout was chosen and weapons were improved which gave the fun and variety to the massive destruction dealt throughout the experience.  </p>
                </div>
                <div class="img-container img-major img1"><a class="fancybox" rel="compapp"   href="content/urbanwarfare/urbanwar-03.jpg"><div class="img urban-03"></div></a></div>
            </div>
        </section>
            <?php require "footer.php"; ?>
    </body>
</html>