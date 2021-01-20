<html>
<head>
    <title> Objectives for Today </title>
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
</head>
<body>
    //Header
    <div class="heading">
        <h2> Todo List application using PHP and MySQL</h2>
    </div>
    //Form
    <form method="POST" action="ToDoList.php">
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
          <tr>
             <td>1</td>
             <td class="task">Task holder</td>
             <td class="delete">
             	<a href="#">x</a>
             </td>
          </tr>
        </tbody>
    </table>
</body>
</html>