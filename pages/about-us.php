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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About - Off Grid Coding</title>

    <!-- Meta Tags File links Here -->
    <?php require "../assets/tag_assets/meta-tags.php";
    ?>

    <!-- Stylesheet  -->
    <link rel="stylesheet" href="./stylesheets/about-us.css" />
    <!-- Header & Footer Stylesheet -->
    <?php require "./stylesheets/pages-hf-style.php"; ?>

    <!-- Adding Favicon -->
    <link rel="shortcut icon" href="../assets/brand_assets/4.png" type="image/x-icon" />
</head>

<body>
    <!-- Header link here -->
    <?php require  "../pages/header/other-pages-header.php";
    ?>
    <!---------------------About Section Starts Here -------------->
    <section id="about-section-id">
        <h1>ABOUT</h1>
        <div class="about-section">
            <h2>About Me</h2>
            <?php echo "<p>" . $meta_description . "</p>" ?>

            <h2>Who I Am</h2>
            <p>
                I'm just an ordinary individual who has always been captivated by the
                incredible possibilities that technology and coding offer. Despite not
                having a background in computer science, I've been in constant awe of
                services like Gmail, Amazon, PayPal, Facebook, and AWS. The question
                of how these tech giants were built and how they function has been a
                constant source of inspiration for me.
            </p>
            <h2>My Mission</h2>
            <p>
                My mission is straightforward yet deeply profound: I want to empower
                people who, like me, want to learn programming not for a job but to
                implement that knowledge in their everyday lives. For me, coding is a
                tool for transformation, and everyone can leverage its power to build
                solutions, automate tasks, and make life more efficient and exciting.
                My personal motto is "Learn to code, not for fame but for change."
            </p>
            <h2>What You'll Find Here</h2>
            <p>
                At Off-Grid Coding, you'll find a range of resources, insights, and a
                wealth of information on programming, web development, and software
                development. I firmly believe that learning to code isn't just about
                acquiring a skill; it's about unlocking a new mindset and a world of
                possibilities. Here's what my platform offers:
            </p>
            <h3>Educational Content:</h3>
            <p>
                Access beginner-friendly and in-depth articles, tutorials, and guides
                on various programming languages and development tools.
            </p>
            <h3>My Learning Journey:</h3>
            <p>
                Follow my personal journey of learning and creating with code. Learn
                from my experiences, challenges, and triumphs.
            </p>
            <h3>Community:</h3>
            <p>
                Join a community of like-minded individuals who are on their coding
                journey. Share your progress, seek assistance, and connect with fellow
                learners.
            </p>
            <h2>Join Me on This Adventure</h2>
            <p>
                Off-Grid Coding isn't just a website; it's a community of learners,
                creators, and tech enthusiasts. Whether you're a complete beginner or
                an experienced developer, you're invited to join me on this adventure
                of self-improvement through code.
            </p>
            <br />
            <p>
                I'm genuinely excited to have you as part of our community, and I'm
                looking forward to being a valuable resource on your coding journey.
                So, let's embark on this quest together and learn, create, and grow.
            </p>
            <br />
            <p>
                Thank you for choosing Off-Grid Coding. Let's code for change, one
                step at a time!
            </p>
        </div>
    </section>
    <!---------------------About Section Ends Here -------------->

    <!-- Footer link here -->
    <?php require "../pages/footer/other-pages-footer.php";
    ?>
</body>

</html>