<!DOCTYPE html>
<html>

<head>
    <title>DashBoard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="../style/dashboard.css"> -->
    <?php
    session_start();
    include("../model/m_task.php");
    if (!isset($_SESSION['username'])) {
        header('Location: ../index.php');
    }

    $toDoList = new ToDoList();
    $tasks = $toDoList->getTasks();

    ?>

    <title>To-Do List</title>
    <!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'> -->

    <!-- notif welcome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

    <!-- crud notif -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css'>

    <!-- w3s - side bar all -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- date time -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    <script src="https://kit.fontawesome.com/c0eb346a17.js" crossorigin="anonymous"></script>
    <script src="../javascript/dashboard.js"></script>

    <style>
        .w3-table td, .w3-table th, .w3-table-all td, .w3-table-all th {
    padding: 8px 8px;
    display: table-cell;
    text-align: center;
    vertical-align: top;
}


        .w3-teal,
        .w3-hover-teal:hover {
            color: #fff !important;
            background-color: #1274ED !important;
        }

        .w3-button-custom {
            background-color: #1274ED;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
          
            transition: background-color 0.3s;

        }

        .w3-button-custom:hover {
            background-color: #4992F0;
        }

        #UpdateDeleteButton {
            display: flex;
            gap: 10px;
            justify-content: center
        }

        .custom {
            width: 800px;
            margin: 0 auto;
        }

        .w3-container {
            text-align: center;
        }

        .form-addTask {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            margin: 0 auto;
        }

        label {
            font-size: 14px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #1274ED;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #4992F0;
        }

        .bottom {
            width: 100%;
            position: absolute;
            bottom: 25px;
            display: grid;
        }

        #pageMessages {
            position: fixed;
            top: 75px;
            right: 15px;
            width: 30%;
        }

        .alert {
            position: relative;
        }

        .alert .close {
            position: absolute;
            top: 5px;
            right: 5px;
            font-size: 1em;
        }

        .alert .fa {
            margin-right: .3em;
        }

        h3 {
            margin-top: 30px;
        }

        button[type="submit"]{
            width: 115px;
        }
    </style>
    <script>
        $(document).ready(function() {
            // Inisialisasi datepicker
            $("#datepicker").datepicker({
                dateFormat: "dd/mm/yy"
            });

            // Inisialisasi timepicker
            $("#timepicker").timepicker({
                timeFormat: "H:i"
            });
        });
    </script>
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
                <h1>Dashboard</h1>

            </div>
        </div>

        <div class="notification-box flex flex-col items-end justify-center fixed w-full z-50 p-3"></div>

        <div class="w3-container <?php echo (isset($_SESSION['action']) && $_SESSION['action']) == '' ? 'w3-animate-bottom' : ''; ?>">
            <h3>Create List</h3>

            <form class="form-addTask" method="POST" action="../controller/c_task.php" autocomplete="off">
                <label>List Name:</label>
                <input type="text" name="name" required><br>

                <label>Date:</label>
                <input type="text" id="datepicker" name="date" required><br>

                <label>Time:</label>
                <input type="text" id="timepicker" name="time" required>
                <br>

                <input type="submit" name="addTask" value="Create" class="w3-button w3-button-custom">
            </form>

            <h3>TO DO LIST</h3>
            <table class="w3-table-all w3-hoverable custom">
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($tasks as $task) : ?>
                    <tr>
                        <td><?= $task['isi']; ?></td>
                        <td><?= $task['tanggal']; ?></td>
                        <td><?= $task['jam']; ?></td>
                        <td id="UpdateDeleteButton">
                            <form action="v_update.php" method="POST">
                                <input type="hidden" name="id" value="<?= $task['id']; ?>">
                                <input type="hidden" name="isi" value="<?= $task['isi']; ?>">
                                <input type="hidden" name="tanggal" value="<?= $task['tanggal']; ?>">
                                <input type="hidden" name="jam" value="<?= $task['jam']; ?>">
                                <button type="submit" class="w3-button w3-button-custom"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                            </form>
                            <form action="../controller/c_task.php" method="POST">
                                <input type="hidden" name="id" value="<?= $task['id']; ?>">
                                <button type="submit" name="delete" class="w3-button w3-button-custom"><i class="fa-regular fa-trash-can"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <br>
            <div id="pageMessages"></div>

        </div>

    </div>
    <?php
    if (isset($_SESSION['helloGreet']) && $_SESSION['helloGreet'] == 'halo') {
        echo "<script>createAlert('Hello, " . $_SESSION['username'] . "','','Just a quick reminder to take a moment and create your to-do list for today.','info',false,true,'pageMessages');</script>";
        unset($_SESSION['helloGreet']);
    }
    ?>

    <!-- fill date time -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>

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
    </script>

    <?php
    if (isset($_SESSION['action'])) {
        if ($_SESSION['action'] == 'task-add') {
            echo "<script>sendNotification('success', 'A task has been added!');</script>";
        }
        if ($_SESSION['action'] == 'task-delete') {
            echo "<script>sendNotification('success', 'Task deleted!');</script>";
        }
        if ($_SESSION['action'] == 'task-update') {
            echo "<script>sendNotification('success', 'Task Updated!');</script>";
        }

        $_SESSION['action'] = '';
    }
    ?>

</body>

</html>