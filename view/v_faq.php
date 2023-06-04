<!DOCTYPE html>
<html>

<head>
    <title>Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
    <script src='https://code.jquery.com/jquery-2.1.0.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../style/faq.css">
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: ../index.php');
    }

    ?>
    <script src="https://kit.fontawesome.com/c0eb346a17.js" crossorigin="anonymous"></script>


</head>


<body>

    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
        <a href="v_dashboard.php" class="w3-bar-item w3-button" style="padding-left: 20%;"><i class="fa-solid fa-list-check" style="margin-right: 10px;"></i> Task</a>
        <a href="v_profile.php" class="w3-bar-item w3-button" style="padding-left: 20%;"><i class="fa-solid fa-user" style="margin-right: 10px;"></i> Profile</a>
        <div class="bottom">
            <a href="v_faq.php" class="w3-bar-item w3-button" style="padding-left: 20%;"><i class="fa-regular fa-circle-question" style="margin-right: 10px;"></i> FAQ</a>
            <a href="../controller/c_logout.php" class="w3-bar-item w3-button" style="padding-left: 20%;"><i class="fa-solid fa-arrow-right-from-bracket" style="margin-right: 10px;"></i>Log Out</a>
        </div>
    </div>

    <div id="main">

        <div class="w3-teal" style="display: flex;">
            <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1>Frequently Ask Question</h1>

            </div>
        </div>

        <div class="w3-animate-bottom">

            <section class="faq-section">
                <div class="container">
                    <div class="row">
                        <!-- ***** FAQ Start ***** -->
                        <div class="col-md-6 offset-md-3">

                            <div class="faq-title text-center pb-3">
                                <h2>FAQ</h2>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-3">
                            <div class="faq" id="accordion">
                                <div class="card">
                                    <div class="card-header" id="faqHeading-1">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                                <span class="badge">1</span>What is a to-do list website?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>A to-do list website is an online platform that allows users to create and manage tasks or items they need to accomplish. It provides a convenient way to organize, prioritize, and track progress on various tasks, ensuring that important activities are not forgotten or overlooked.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-2">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                                <span class="badge">2</span> How can I delete my account?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>To delete your account, follow these steps:</p>
                                            <ol>
                                                <li>Go to the Profile Menu.</li>
                                                <li>Click on the "Delete Account" button.</li>
                                                <li>Confirm the account deletion when prompted.</li>
                                            </ol>
                                            <p>By following these steps, your account will be permanently deleted.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-3">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                                <span class="badge">3</span> How can I add a task to my to-do list?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>To add a task to your to-do list, follow these steps:</p>
                                            <ol>
                                                <li>Go to the Dashboard Menu.</li>
                                                <li>In the form, fill in the text field with the task details.</li>
                                                <li>Click on the "Create" button to add the task to your list.</li>
                                            </ol>
                                            <p>By following these steps, your task will be added to your to-do list.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-4">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                                <span class="badge">4</span> How can I update a task in my to-do list?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>To update a task in your to-do list, follow these steps:</p>
                                            <ol>
                                                <li>In the Dashboard Menu, locate the task you want to update from the task list.</li>
                                                <li>Select the task and click on the "Update" button.</li>
                                                <li>In the form that appears, make the necessary changes to the task details.</li>
                                                <li>Click on the "Save" button to update the task.</li>
                                            </ol>
                                            <p>By following these steps, the selected task will be updated with the new information.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-5">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                                <span class="badge">5</span> How can I delete a task from my to-do list?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>To delete a task from your to-do list, follow these steps:</p>
                                            <ol>
                                                <li>In the Dashboard Menu, locate the task you want to delete from the task list.</li>
                                                <li>Select the task and click on the "Delete" button.</li>
                                            </ol>
                                            <p>By following these steps, the selected task will be permanently removed from your to-do list.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-6">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                                <span class="badge">6</span> How can I update my profile information?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>To update your profile information, follow these steps:</p>
                                            <ol>
                                                <li>Go to the Profile Menu.</li>
                                                <li>Fill in the desired data you want to change in the corresponding fields (except the username).</li>
                                                <li>Click on the "Save" button to update your profile information.</li>
                                            </ol>
                                            <p>By following these steps, your profile information will be updated with the new data.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <br>

        <div class="faq-title text-center pb-3">
            <h2>Give us feedback</h2>
        </div>

        <div class="w3-row">
            <form class="form-feedback" action="https://formspree.io/f/mdovvbbo" method="POST" autocomplete="off">
                <label for="Email">Email:</label>
                <input type="email" name="email"><br>

                <label for="Message">Message:</label>
                <textarea name="message"></textarea><br><br>

                <input class="w3-button save-btn" type="submit" value="Send Feedback">


            </form>
        </div>




    </div>



    <script>
        function w3_open() {
            document.getElementById("main").style.marginLeft = "15%";
            document.getElementById("mySidebar").style.width = "15%";
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("openNav").style.display = 'block';
        }

        function w3_close() {
            document.getElementById("main").style.marginLeft = "0%";
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("openNav").style.display = "inline-block";
        }

        function getFileName() {
            var fileInput = document.getElementById("fileInput");
            var fileName = fileInput.files[0].name;
            console.log(fileName);
        }
    </script>











</body>

</html>