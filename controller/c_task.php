<?php
include('../model/m_task.php');


if (isset($_POST['addTask'])) {
  $name = $_POST['name'];
  $date = $_POST['date'];
  $time = $_POST['time'];

  $toDoList = new ToDoList();
  $toDoList->addTask($name, $date, $time);

  session_start();
  $_SESSION['action'] = 'task-add';

  header('Location: ../view/v_dashboard.php');
  exit;
}

if (isset($_POST['delete'])) {
  $id = $_POST['id'];

  $toDoList = new ToDoList();
  $toDoList->deleteTask($id);

  session_start();
  $_SESSION['action'] = 'task-delete';

  header('Location: ../view/v_dashboard.php');
  exit;
}


if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $date = $_POST['date'];
  $time = $_POST['time'];

  $toDoList = new ToDoList();
  $toDoList->updateTask($id, $name, $date, $time);

  session_start();
  $_SESSION['action'] = 'task-update';


  header('Location: ../view/v_dashboard.php');
  exit;
}
