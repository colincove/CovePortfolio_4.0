<?php 
    $title = 'Proto Profundum';
    $subTitle = '3rd Person Horror Game';
    $videoSrc = 'content/protoprofundum/Protoprofundum.mp4';
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
                    <p>Collaborators to the project contributed art and audio that is integral to achieving the horror elements targeted by the team. My own role involved organizing the production and design of the product along with engineering of the Unity and Wwise integrations. </p>
                </div>
                <div class="img-container img-major img1"><a class="fancybox" rel="draft"  href="content/protoprofundum/profundum_04.jpg"><div class="img profundum_04"></div></a></div>
            </div>
			<div class="layout-4">
				
                <div class="section1">
                    <header>
                        <h1>Stealth Survival</h1>
                    </header>
                    <p>Illuminated by an unidentified digestive substance the player is tasked with avoiding the large creatures that scavenge for human remains. Taking advantage of the creatures limited vision and slow movement players can strategize how to move through a challenge before engaging. Levels are designed to create tense moments that may require the player to think on their feet and move quickly under stress. </p>
                </div>
				<div class="ghostImg"><a class="fancybox" rel="futweb"  href="content/protoprofundum/profundum_02.jpg"><?php require "fade.php"; ?><div class="img profundum_02"></div></a></div>
            </div>
			<div class="layout-4 alt"><a class="fancybox" rel="futweb"  href="content/protoprofundum/profundum_03.jpg">
				 <div class="ghostImg">
					<?php require "fade.php"; ?><div class="img profundum_03"></div></div>
                <div class="section1">
                    <header>
                        <h1>The Abyssal Zone</h1>
                    </header>
                    <p>Inspired by the Kryll in Gears of War and the Dark Aether of Metroid Prime Echoes, players attempt to survive crossing long distances with limited light to guide their way. Acting as a repose from the more stressful stealth sections these areas expand on the nature of the world by subtly suggesting a much larger environment teeming with movement.  </p>
                </div>
                </a>
            </div>
            <div class="layout-1">
                <div class="section1">
                    <header>
                        <h1>A Hostile Environment</h1>
                    </header>
                    <p>Players begin the game in a dark environment modelled after the concept of a whale fall found in the abyssal zones of the deep sea. Creatures found in the environment constitute themselves from the human remains that are scattered about. Developed in Unity the game features full audio with the use of Wwise middleware and art created to develop the look and feel of the creatures. </p>
                </div>
                <div class="img-container img-major img1"><a class="fancybox" rel="futweb"   href="content/protoprofundum/profundum_06.jpg"><div class="img profundum_06"></div></a></div>
            </div>
            
            
        </section>
            <?php require "footer.php"; ?>
    </body>
</html>