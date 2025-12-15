<?php
session_start();

if (!isset($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_todo'])) {
    $todo = trim($_POST['todo']);
    if (!empty($todo)) {
        $_SESSION['todos'][] = [
            'id' => uniqid(),
            'task' => $todo,
            'completed' => false
        ];
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $_SESSION['todos'] = array_filter($_SESSION['todos'], function($todo) use ($id) {
        return $todo['id'] != $id;
    });
    $_SESSION['todos'] = array_values($_SESSION['todos']);
    header("Location: todo_list.php");
    exit();
}

if (isset($_GET['toggle'])) {
    $id = $_GET['toggle'];
    foreach ($_SESSION['todos'] as &$todo) {
        if ($todo['id'] == $id) {
            $todo['completed'] = !$todo['completed'];
            break;
        }
    }
    header("Location: todo_list.php");
    exit();
}

if (isset($_GET['clear_all'])) {
    $_SESSION['todos'] = [];
    header("Location: todo_list.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do List</title>
</head>
<body>
    <h2>Task 4: To Do List</h2>
    
    <form method="POST" action="">
        <label>Add New Task:</label>
        <input type="text" name="todo" placeholder="Enter task..." required>
        <button type="submit" name="add_todo">Add Task</button>
    </form>
    
    <h3>Your Tasks:</h3>
    
    <?php if (empty($_SESSION['todos'])): ?>
        <p>No tasks yet. Add a task above!</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['todos'] as $todo): ?>
                <li>
                    <?php if ($todo['completed']): ?>
                        <del><?php echo htmlspecialchars($todo['task']); ?></del>
                    <?php else: ?>
                        <?php echo htmlspecialchars($todo['task']); ?>
                    <?php endif; ?>
                    
                    <a href="?toggle=<?php echo $todo['id']; ?>">
                        <?php echo $todo['completed'] ? '[Mark Incomplete]' : '[Mark Complete]'; ?>
                    </a>
                    <a href="?delete=<?php echo $todo['id']; ?>" onclick="return confirm('Delete this task?')">[Delete]</a>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <a href="?clear_all=1" onclick="return confirm('Clear all tasks?')">Clear All Tasks</a>
    <?php endif; ?>
</body>
</html>
