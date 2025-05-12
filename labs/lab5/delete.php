<?php

$mysqli = new mysqli("localhost", "root", "", "notebook");
if ($mysqli->connect_errno) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $result = $mysqli->query("SELECT id, surname, name FROM contacts WHERE id = $delete_id");

    if ($result && $record = $result->fetch_assoc()) {
        $mysqli->query("DELETE FROM contacts WHERE id = $delete_id");

        echo "<div class='message success'>Запись с фамилией {$record['surname']} {$record['name']} удалена</div>";
    } else {
        echo "<div class='message error'>Запись с таким ID не найдена.</div>";
    }
}
?>

<?php if (isset($message)): ?>
    <div class="message <?php echo ($message === "Запись $surname удалена") ? 'success' : 'error'; ?>">
        <?php echo $message; ?>
    </div>
<?php endif; ?>

<div class="record-list">
    <ul>
        <?php
        $sql = "SELECT * FROM `contacts`";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $selectedClass = (isset($record) && $record['id'] == $row['id']) ? 'selected' : '';
                echo "<li class='record-item $selectedClass'>
                        <a href='?page=delete&delete_id={$row['id']}'>
                            <span class='surname'>{$row['surname']}</span> 
                            <span class='name'>{$row['name']}</span>
                        </a>
                    </li>";
            }
        }
        ?>
    </ul>
</div>
