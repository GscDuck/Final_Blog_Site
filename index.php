<?php $meta_description = "Hello there, I'm Gursehaj, and I'd like to welcome you to Off-Grid Coding. This platform is a reflection of my journey from a non-computer background to the fascinating world of programming and coding.";
$meta_keywords = "Coding, learning, off grid coding blog, blog, about off grid coding, technology, PHP, HTML, CSS, JavsScript, Server, Networking, installation guide, programming, developer tools";
$site_name = "OffGridCoding";
$id_name = "@OffGridCoding";
$og_title = "Access beginner-friendly and in-depth articles, tutorials, and guides
          on various programming languages and development tools";
$current_page_url = "https://blog.offgridcoding.com/about";
$og_image_url = "https://blog.offgridcoding.com/assets/logo-no-background.png";
$autor_about_page_url = "https://blog.offgridcoding.com/pages/about" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Off Grid Coding</title>
    <!-- Style-Sheets Link Here -->
    <link rel="stylesheet" href="index_stylesheet.css">
    <?php require "./pages/stylesheets/index-hf-style.php"; ?>
    <!-- Meta Tag links here -->
    <?php require "./assets/tag_assets/meta-tags.php"; ?>
    <!-- Adding Favicon -->
    <link rel="shortcut icon" href="./assets/brand_assets/4.png" type="image/x-icon" />
</head>

<body>
    <!-- Header link here -->
    <?php require "./pages/header/header.php"; ?>

    <!-- Main Section Start Here -->
    <section id="main-section">
        <div class="hero-section-text">
            <div class="hero-text">
                <h2>A Platform by learner for learner.</h2>
                <h3>this paltform helps other biginner in tech industry to learn virity of topics...</h3>
            </div>
            <a href="#" class="hero-read-blog">Read Blog</a>
            <a href="./pages/support-us.php"><img src="./assets/brand_assets/blue-donation-68.png" width="30px" height="30px" alt="$">Support Us</a>
        </div>
    </section>

    <!-- About Section Start Here -->
    <section id="about-section">
        <h2>About Us</h2>
        <div class="about-section-div">
            <p>I'm Gursehaj. I come from a non-computer background, but I have always been inspired by how computers work and how someone built services like Gmail, Amazon, PayPal, Facebook, and AWS. Now, I have decided to learn programming not for a job but to apply that knowledge to enhance my life by building services for myself. "Off-Grid Coding" is a platform where I share my learning journey with others who want to learn programming, from web development to software development. It is a journal of my learning journey and the creations that come from it.</p>
            <a href="./pages/about-us.php">Read more</a>
        </div>
    </section>

    <!-- Another Support section-->
    <section id="platform-section">
        <h2>Platforms</h2>
        <div class="platform-div">
            <div class="platform-sub-div">
                <h3>Blog</h3>
                <p>We write blog posts on variety of topics related to system administration and programming. </p>
                <a href="https://blog.offgridcoding.com">Read Blog</a>
            </div>
            <div class="platform-sub-div">
                <h3>Twitter</h3>
                <p>Follow us on Twitter platform to interct with us.</p>
                <a href="https://www.twitter.com/offgridcoding"><img src="./assets/brand_assets/twitter-50.png" width="30px" height="30px" alt="X">Follow</a>
            </div>
        </div>
    </section>
    <!-- Support us section -->
    <section id="support-section">
        <h2>Support us</h2>
        <div class="support-sub-section">
            <p>If you like my content and want to financaily support me. Now you can do it with different meathods. <br>
                <i><q>thanks for showing interest</q>- Gurshej</i>
            </p>
            <a href="./pages/support-us.php"><img src="./assets/brand_assets/get-cash-50.png" width="30px" height="30px" alt="$">Support us</a>
        </div>
    </section>
    <!-- Footer link here -->
    <?php require "./pages/footer/footer.php" ?>
</body>

</html>