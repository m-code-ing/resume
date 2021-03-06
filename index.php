<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayank Ashok</title>
    <link rel="stylesheet" href="./Libraries/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="fun.css">
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
    <!-- Firebase Messaging CDN -->
    <script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-messaging.js"></script>
    <!-- For an optimal experience using Cloud Messaging, also add the Firebase SDK for Analytics. -->
    <!-- <script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-analytics.js"></script> -->
</head>

<body class="mt-5">
    <main class="col-12 mx-auto">
        <!-- STARTS -- Hero Section -->
        <section id="section_hero">
            <div id="div_hero" class="col-12 col-md-12 m-0 p-0 text-center">
                <!-- <div class="col-12 col-md-6 m-0 p-0 text-center"> -->
                <h5 id="name_text" class=""><span>mayank</span> ashok</h5>
                <p class="">&lt; Front End Web Developer /&gt;</p>
                <!-- <h5 class="text-center">Converting Coffee into Code!</h5> -->
                <!-- </div> -->
            </div>
        </section>
        <!-- STARTS -- Hero Section -->

        <!-- STARTS Self intro section -->
        <section id="section_content"
            class="col-12 col-md-8 d-flex flex-column flex-md-row m-0 mt-4 mx-auto my-4 border-dark border-bottom border-top rounded">

            <!-- SELF INTRO IMAGE DIV -->
            <div class="col-12 col-md-4 m-0 p-0 pt-5 py-md-2 d-flex flex-column justify-content-center">
                <div id="div2_profile_img" class="m-0 p-0 mx-auto">
                    <img id="own_image2" src="./Assets/Images/own_image.JPG" alt="">
                </div>
                <p class="text-center"><strong> A little about me : </strong> </p>
            </div>

            <!-- SELF INTRO CONTENT DIV -->
            <!-- <div class="col-12 col-md-8 m-0 mx-auto d-flex"> -->
            <div class="col-12 col-md-8 m-0 p-0 mx-auto row justify-content-center">
                <p class="my-2 p-0">I am an enthusiast web developer with a very keen interest in developing
                    web applications.</p>
                <p class="my-2 p-0">Interested to join a team of developers where I can be a contributing
                    memeber as well as advance my career as a web developer.</p>
                <div class="col-12 row m-0 p-0">
                    <p class="col-12 m-0 p-0">I am proficient with basics (HTML/CSS, JavaScript, jQuery, BootStrap) as
                        well as Frameworks/Libraries such as Reactjs (with Redux, Redux thunk), Angular, Node js +
                        Express js and Databases such as MySQL and MongoDB. I have good knowledge of Front-end as well
                        as Back-end and able to delivery production ready projects.</p>
                </div>
            </div>
            <!-- </div> -->
        </section>
        <!-- ENDS Self intro section -->


        <!-- STARTS Tool Kit Section -->
        <section id="tools" class="col-12 col-md-8 mt-4 px-2 mx-auto justify-content-center">

            <!-- Toolkit Title -->
            <div class="col-12 m-0 p-0 pb-2 text-center">
                <h1 class="col-8 col-md-4 m-0 p-0 mx-auto p-2 border-top border-bottom border-dark">My Tool Kit</h1>
            </div>

            <!--Starts here -  Front End Tool Kit Description -->
            <div id="front_end_wrapper"
                class="col-10 m-0 p-0 my-5 mx-auto d-flex flex-column flex-rounded wrap border bg-light">

                <!-- SHERLOCK DIV -->
                <div class="sherlock-wrapper">
                    <div class="sherlock">
                        <div class="sherlock_eyes"></div>
                        <div class="sherlock_eyes"></div>
                    </div>
                </div>

                <h3 class="col-12 m-0 p-0 mx-auto py-2 bg-dark text-center text-white border rounded">Front End Tools
                </h3>

                <!-- HTML, CSS, JS, jQuery -->
                <div id="" class="div_tool_kit_images m-0 p-0 d-flex flex-row flex-wrap">
                    <div class="col-3 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/html_img.png" class="d-block toolkit_logos" alt="">
                        <p>HTML</p>
                    </div>
                    <div class="col-3 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/css_img.png" class="d-block toolkit_logos" alt="">
                        <p>CSS</p>
                    </div>
                    <div class="col-3 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/javascript_img.png" class="d-block toolkit_logos" alt="">
                        <p>JavaScript</p>
                    </div>
                    <div class="col-3 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/jquery_img.png" class="d-block toolkit_logos" alt="">
                        <p>jQuery</p>
                    </div>
                </div>

                <!-- BootStrap, Reach, Angular -->
                <div id="" class="div_tool_kit_images col-12 m-0 p-0 d-flex flex-wrap justify-content-center border">
                    <div class="col-3 d-flex flex-column m-0 p-2 align-items-center justify-content-center">
                        <div class="col-" style="overflow: hidden;">
                            <img src="./Assets/Images/bootstrap.logo.png" class="rounded d-block toolkit_logos" alt="">
                        </div>
                        <p>Bootstrap</p>
                    </div>
                    <div class="col-3 d-flex flex-column align-items-center justify-content-center">
                        <img src="./Assets/Images/react_logo.png" class="mx-auto d-block toolkit_logos" alt="">
                        <p>React</p>
                    </div>
                    <div class="col-3 d-flex flex-column align-items-center justify-content-center">
                        <img src="./Assets/Images/angular_logo.png" class="mx-auto d-block toolkit_logos" alt="">
                        <p>Angular</p>
                    </div>
                </div>
            </div>
            <!--Ends here -  Front End Tool Kit Description -->

            <!--Starts here -  Back End Tool Kit Description -->
            <div id="back_end_wrapper" class="col-10 m-0 p-0 my-5 mx-auto d-flex flex-column border rounded bg-light">
                <h3 class="col-12 m-0 p-0 mx-auto py-2 bg-dark text-center text-white border rounded">Back End Tools
                </h3>

                <div id=""
                    class="div_tool_kit_images col-12 m-0 p-0 d-flex flex-row align-items-center justify-content-around">
                    <div class="col- m-0 p-2 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/nodejs.png" class="d-block toolkit_logos" alt="">
                        <p>NodeJs</p>
                    </div>
                    <div class="col- m-0 p-2 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/expressjs_logo.png" class="d-block toolkit_logos" alt="">
                        <p>Express Js</p>
                    </div>
                    <div class="col- m-0 p-2 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/mongodb_logo.png" class="d-block toolkit_logos" alt="">
                        <p>Mongo DB</p>
                    </div>
                </div>
                <div id=""
                    class="div_tool_kit_images col-12 m-0 p-0 d-flex flex-row align-items-center justify-content-around">
                    <div class="col- m-0 p-2 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/php_logo.png" class="d-block toolkit_logos" alt="">
                        <p>PHP</p>
                    </div>
                    <div class="col- m-0 p-2 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/mySQL_logo.png" class="d-block toolkit_logos" alt="">
                        <p>MySQL</p>
                    </div>
                </div>
            </div>
            <!--Ends here -  Back End Tool Kit Description -->

            <!--Starts here -  Version Control Tool Kit Description -->
            <div id="back_end_wrapper" class="col-10 m-0 p-0 my-5 mx-auto d-flex flex-column border rounded bg-light">
                <h3 class="col-12 m-0 p-0 mx-auto py-2 bg-dark text-center text-white border rounded">Version Control
                </h3>

                <div id=""
                    class="div_tool_kit_images col-12 m-0 p-0 d-flex flex-row align-items-center justify-content-around">
                    <div class="col- m-0 p-2 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/git_logo.png" class="d-block toolkit_logos" alt="">
                        <p>Git</p>
                    </div>
                    <div class="col- m-0 p-2 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/github_logo.png" class="d-block toolkit_logos" alt="">
                        <p>GitHub</p>
                    </div>
                </div>
            </div>
            <!--Ends here -  Version Contorl Tool Kit Description -->

            <!-- Starts here - CMS section -->
            <div id="back_end_wrapper" class="col-10 m-0 p-0 my-5 mx-auto d-flex flex-column border rounded bg-light">
                <h3 class="col-12 m-0 p-0 mx-auto py-2 bg-dark text-center text-white border rounded">CMS</h3>

                <div id=""
                    class="div_tool_kit_images col-12 m-0 p-0 d-flex flex-row align-items-center justify-content-around">
                    <div class="col- m-0 p-2 d-flex flex-column align-items-center justify-content-center border">
                        <img src="./Assets/Images/wordpress_logo.jpg" class="d-block toolkit_logos" alt="">
                        <p>WordPress</p>
                    </div>
                </div>
            </div>
            <!-- Ends here - CMS section -->

            <!--Starts here -  Data Structures Description -->
            <div id="back_end_wrapper" class="col-10 m-0 p-0 my-5 mx-auto d-flex flex-column border rounded bg-light">
                <h3 class="col-12 m-0 p-0 mx-auto py-2 bg-dark text-center text-white border rounded">Data Structures
                </h3>
                <div class="col-12">
                    <ul class="row m-0 p-0">
                        <li class="m-2 p-2 border-bottom border-right rounded">Arrays</li>
                        <li class="m-2 p-2 border-bottom border-right rounded">Link Lists</li>
                        <li class="m-2 p-2 border-bottom border-right rounded">Doubly Linked List</li>
                        <li class="m-2 p-2 border-bottom border-right rounded">Binary Search Tree</li>
                        <li class="m-2 p-2 border-bottom border-right rounded">Hash Tables</li>
                        <li class="m-2 p-2 border-bottom border-right rounded">Graphs</li>
                    </ul>
                </div>
            </div>
            <!--Ends here -  Data Structures Description -->

        </section>
        <!-- ENDS Tool Kit Section -->

        <div class="spacer"></div>

        <section id="contact_form" class="col-10 col-md-8 mx-auto my-4 p-4 border border-dark">
            <div class="col- d-flex flex-row justify-content-center align-items-center bg-dark">
                <h3 class="m-2 p-2 text-white text-center">Get in touch</h3>
                <img src="./Assets/Images/coffee_vector.png" height="50px" alt="">
            </div>

            <?php 
                if ($_SESSION['mailConfirmation']) {
                    echo "<script>alert('Thank you for your Message. I will get back to you soon!');</script>";
                    $_SESSION['mailConfirmation'] = false;
                }
            ?>
            <form id="contact_me_form" class="col-10 my-4 p-4 mx-auto border border-dark rounded bg-light"
                name="contact_me_form" action="./mail.php" method="POST">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input value="" type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"
                        placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input value="" type="email" name="email" class="form-control" id="email"
                        aria-describedby="emailHelp" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="Message">Message</label>
                    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" id="btn_contact_form" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </main>
</body>
<script src="./Libraries/jquery-3.4.1.js"></script>
<script src="./Libraries/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<script src="./app3.js"></script>
<script src="./firebase_config.js"></script>
<script src="./firebase-messaging-sw.js"></script>
<script>
    // Handle incoming messages. Called when:
    // - a message is received while the app has focus
    // - the user clicks on an app notification created by a service worker
    //   `messaging.onBackgroundMessage` handler.
    messaging.onMessage((payload) => {
        console.log('Message received. ', payload);
        // ...
    });
</script>

</html>