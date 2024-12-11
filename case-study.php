<!DOCTYPE html>
<html lang="en">
<?php
    
    require_once('includes/connect.php');

    $query = 'SELECT projects.id AS project, title, description, images, images_casestudy FROM projects, media WHERE projects.id = media.project_id AND projects.id ='.$_GET['id'];

    $results = mysqli_query($connect, $query);

    $row = mysqli_fetch_assoc($results);
   
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projects Page</title>

    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-content-2">
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="alienis.php?redirect=projects" id="tag">Projects</a>
                <a href="alienis.php?redirect=contact">Contact</a>
            </div>
        </div>
    </nav>
    <section class="project-detail">
        <div class="project-banner">
            <img src="images/<?php echo $row['images_casestudy']?>.png" alt="Project Banner" />
        </div>
        <div class="project-info">
            <div class="project-description">
                <h1><?php echo $row['title']?></h1>
                <p><?php echo $row['description']?>.</p>
            </div>
            <div class="project-logo1">  
                <img src="images/Asset 8.svg" alt="Logo" />
            </div>

            <a href="zima.html" class="next-button">
                Next <span class="arrow">&rarr;</span>
            </a>
        </div>
    </section>
</body>

<script src="js/main.js"></script>
</html>