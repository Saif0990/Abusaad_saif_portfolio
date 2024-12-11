<!DOCTYPE html>
<html lang="en">
    <?php
    
    require_once('includes/connect.php');

    $query = 'SELECT projects.id AS project, images, title FROM projects, media WHERE projects.id = media.project_id';

    $results = mysqli_query($connect, $query);
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <a href="#" class="logo"><img src="images/logo.svg" alt=""></a>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </nav>
    
    <section id="home" class="hero">
        <div class="hero-content">
            <div class="hero-text">

                <h1>I'm <span class="neon-text">Saif Abu Saad</span></h1>
                <h1 id="neon">Designer & Developer.</h1>
                <p>Specializing in freelance interaction design and creative development based in Ontario, Canada. I work collaboratively with brands and agencies worldwide. Designing and developing websites and applications with a focus on interactive, minimal and visual experience.</p>
            </div>
            <div class="profile-picture profile-picture1">
                <!-- <canvas class="canvasOne" width="900" height="520" ></canvas> -->
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="Profile Picture" />
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="skills-content">
            <div class="skill-group"id="skill-group">
                <h3>Design Skills</h3>
                <ul>
                    <li>Figma</li>
                    <li>Adobe Illustrator</li>
                    <li>Adobe Photoshop</li>
                </ul>
            </div>
            <div class="skill-group" id="skill-group">
                <h3>Front End</h3>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>Vue.js</li>
                    <li>Three.js</li>
                    <li>GitHub</li>
                </ul>
            </div>
            <div class="skill-group"id="skill-group">
                <h3>Back End</h3>
                <ul>
                    <li>SQL</li>
                    <li>Node.js</li>
                    <li>PHP</li>
                </ul>
            </div>
            <div class="skill-group">
                <h3>Motion Design</h3>
                <ul>
                    <li>Blender</li>
                    <li>Cinema 4D</li>
                    <li>Adobe After Effects</li>
                    <li>X particles</li>
                </ul>
            </div>
        </div>
    </section>
    <div class="profile-picture profile-picture2">
        <canvas class="canvasOne" width="900" height="520" ></canvas>
    </div>
    

    <section id="projects" class="projects">
        <h2>Projects</h2>
        <div class="project-gallery">
            <?php 
            while($row = mysqli_fetch_array($results)) {

            echo '
            <div class="project-card">
               <a href="case-study.php?id='.$row['project'].'" id="tag"> <div class="project-image"><img src="images/'.$row['images'].'.png" alt="Zima">
                    <div class="project-overlay">
                        <h3>'.$row['title'].'</h3>
                    </div>
                </div></a>
            </div>';
            }
            ?>
        </div>
    </section>

    <section id="video" class="video-section">
        <div class="video-container">
            <video controls>
                <source src="images/abusaad_saif_demo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>
    <section id="contact" class="contact">
        
        <div class="contact-content">
            <div class="social-links">
                <h3 id="Follow">Follow</h3>
                <a href="#">Instagram</a>
                <a href="#">YouTube</a>
                <a href="#">LinkedIn</a>
                <a href="#">Twitter</a>
                <a href="#">GitHub</a>
            </div>
            <div class="contact-info">
                <h3 id="contact-txt"> Contact us</h3>
                <a href="mailto:Saif@gmail.com">Saifabusaad@gmail.com</a>
            </div>
            <div class="subscribe">
                <h3 id="subscribe">Subscribe</h3>
                <form id="subscribeForm">
                    <input type="email" placeholder="Email" required>
                    <button type="submit">Submit</button>
                </form>
                
            </div>
            <div class="project-logo">
                <img src="images/Asset 8.svg" alt="Logo" />
            </div>
        </div>
    </section>

    <div id="thankYouPopup" class="popup">
        <div class="popup-content">
            <span class="close-popup">&times;</span>
            <h2>THANK YOU</h2>
            <p>we'll get in touch<br>with you soon</p>
        </div>
    </div>
</body>



<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js'></script><script  src="./script.js"></script>
<script src="js/scroll-animations.js"></script>
<script src="js/3d.js"></script>
<script src="js/main.js"></script>

</html>