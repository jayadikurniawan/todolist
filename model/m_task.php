<?php


class ToDoList
{
    private $mysqli;

    public function __construct()
    {
        require('koneksi.php');
        $this->mysqli = $mysqli;
    }

    public function addTask($isi, $date, $time)
    {
        session_start();
        $dateObj = DateTime::createFromFormat('d/m/Y', $date);
        $formattedDate = $dateObj->format('Y/m/d');
        $formattedTime = date("H:i", strtotime($time));
        $username = $_SESSION['username'];
        // Retrieve the largest existing ID from the 'task' table
        $query = "SELECT MAX(id) AS max_id FROM task";
        $result = $this->mysqli->query($query);
        $row = $result->fetch_assoc();
        $nextId = $row['max_id'] + 1;

        // Insert the new task with the incremented ID
        $query = "INSERT INTO task (username, id, tanggal, jam, isi) VALUES ('$username', $nextId, '$formattedDate', '$formattedTime', '$isi')";

        $result = $this->mysqli->query($query);

        return $result;
    }


    public function getTasks()
    {
        $username = $_SESSION['username'];
        $query = "SELECT * FROM task WHERE username='$username'";
        $result = $this->mysqli->query($query);

        $tasks = array();
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }

        return $tasks;
    }

    public function updateTask($id, $name, $date, $time)
{
    $dateObj = DateTime::createFromFormat('d/m/Y', $date);
    if ($dateObj) {
        $formattedDate = $dateObj->format('Y/m/d');
        $formattedTime = date("H:i", strtotime($time));

        $query = "UPDATE task SET isi='$name', tanggal='$formattedDate', jam='$formattedTime' WHERE id='$id'";
        $result = $this->mysqli->query($query);

        return $result;
    } else {
        // Handle the case when the date format is invalid
        return false;
    }
}


    public function deleteTask($id)
    {
        $query = "DELETE FROM task WHERE id='$id'";
        $result = $this->mysqli->query($query);

        return $result;
    }
}