<?php 
    $title = "Round World";
    $subTitle = 'Game jam title';
    $videoSrc = 'content/roundworld/RoundWorld.mp4';
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
                    <p>Working with a team of five during the Vancouver Global Game Jam we created the side scrolling XNA game Round World. My role on the team was lead programmer in charge of developing the XNA groundwork for the rest of the team. </p>
                    
                </div>
            </div>
            <div class="layout-1">
                <div class="section1">
                    <header>
                        <h1>Watch your step</h1>
                    </header>
                    <p>Working off of the concept of the ouroboros the player moves to the right and the game world will loop every 30 seconds or so. Stepping along the ground will cause it to break away along with a mechanic to add new ground causing small changes to appear with each rotation. Strategies involve players being deliberate in where they step and creating blocks in a way that will be most useful to them next rotation.  </p>
                </div>
                <div class="img-container img-major img1"><a class="fancybox" rel="futweb"  href="content/roundworld/roundworld-01.jpg"><div class="img roundworld-01"></div></a></div>
            </div>
        </section>
            <?php require "footer.php"; ?>
    </body>
</html>