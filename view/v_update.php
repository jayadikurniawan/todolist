<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="../style/update.css">
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan Anda */
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

    <form method="POST" action="../controller/c_task.php" autocomplete="off">
        <input type="hidden" name="id" value="<?= $_POST['id']; ?>">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?= $_POST['isi']; ?>" required><br>

        <label>Date:</label><br>
        <input type="text" id="datepicker" name="date" value="<?= date("d/m/Y", strtotime($_POST['tanggal'])); ?>" required><br>

        <label>Hour:</label><br>
        <input type="text" id="timepicker" name="time" value="<?= $_POST['jam']; ?>" required><br>

        <input type="submit" name="update" value="Update">
    </form>

</body>

</html>