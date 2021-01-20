<?php
    $errors = "";
    
    $db = mysqli_connect('localhost','root','','AmoungUsInspiredTodoList');

    if (isset($_POST['submit'])){
        $task = $_POST['task'];
        if (empty($task)){
            $errors = "Must fill in the task";
        }
        else
        mysqli_query($db,"INSERT INTO tasks (task) VALUES ('$task')");
        header('location: AmoungUsInspiredTodoList.php');
    }

    if (isset($_GET['delTask'])){
        $id = $_GET['delTask'];
        mysqli_query($db, "DELETE FROM tasks WHERE id=$id");
        header('location: AmoungUsInspiredTodoList.php');
    }

    $task = mysqli_query($db,"SELECT * FROM tasks");
?>
<html>
<head>
    <title> Objectives for Today </title>
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
</head>
<body>
    
    <div class="heading">
        <h2> Todo List application using PHP and MySQL</h2>
    </div>
    
    <form method="POST" action="AmoungUsInspiredTodoList.php">
    <?php if(isset($errors)) { ?>
        <p><?php echo $errors; ?> </p>
    <?php } ?>
        <input type="text" name="task" class="task_input">
        <button type="submit" class="task_btn" name="submit">Add Task</button>
    </form>
    <table>
        <thead>
        <tr>
        <th>N</th>
        <th>Task</th>
        <th>Action</th>
        </tr>
      </thead>
       	<tbody>
           <?php $i = 1; while ($row = mysqli_fetch_array($task)) { ?>
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td class="task"><?php echo $row['task']; ?></td>
            <td class="delete">
            <a href="AmoungUsInspiredTodoList.php?delTask=<?php echo $row['id'];?>">x</a>
            </td>
            </tr>
            <?php $i++; } ?>
    </table>
</body>
</html>