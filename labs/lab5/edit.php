<?php

$mysqli = new mysqli("localhost", "root", "", "notebook");
if ($mysqli->connect_errno) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}

function getRecords($mysqli) {
    $query = "SELECT id, name, surname FROM contacts ORDER BY surname, name";
    return $mysqli->query($query);
}

if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $result = $mysqli->query("SELECT * FROM contacts WHERE id = $edit_id");
    $record = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $name = $mysqli->real_escape_string($_POST['name']);
    $surname = $mysqli->real_escape_string($_POST['surname']);
    $patronymic = $mysqli->real_escape_string($_POST['patronymic']);
    $birthdate = $_POST['birthdate'];
    $email = $mysqli->real_escape_string($_POST['email']);
    $phone = $mysqli->real_escape_string($_POST['phone']);
    $address = $mysqli->real_escape_string($_POST['address']);
    $commentary = $mysqli->real_escape_string($_POST['commentary']);

    $updateQuery = "UPDATE contacts SET name = '$name', surname = '$surname', patronymic = '$patronymic', 
                    birthdate = '$birthdate', email = '$email', phone = '$phone', address = '$address', 
                    commentary = '$commentary' WHERE id = $edit_id";

    if ($mysqli->query($updateQuery)) {
        header("Location: index.php?page=edit&edit_id=$edit_id");
        exit();
    } else {
        echo "<p style='color: red;'>Ошибка при обновлении записи.</p>";
    }
}
?>

<div class="record-list">
    <ul>
        <?php
        $sql = "SELECT * FROM `contacts`";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $selectedClass = (isset($record) && $record['id'] == $row['id']) ? 'selected' : '';
                echo "<li class='$selectedClass'><a href='?page=edit&edit_id={$row['id']}'>{$row['surname']} {$row['name']}</a></li>";
            }
        }
        ?>
    </ul>
</div>

<?php if (isset($record)): ?>
    <form action="edit.php?edit_id=<?php echo $record['id']; ?>" method="POST">
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($record['name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="surname">Фамилия:</label>
            <input type="text" id="surname" name="surname" value="<?php echo htmlspecialchars($record['surname']); ?>" required>
        </div>
        <div class="form-group">
            <label for="patronymic">Отчество:</label>
            <input type="text" id="patronymic" name="patronymic" value="<?php echo htmlspecialchars($record['patronymic']); ?>" required>
        </div>
        <div class="form-group">
            <label for="birthdate">Дата рождения:</label>
            <input type="date" id="birthdate" name="birthdate" value="<?php echo htmlspecialchars($record['birthdate']); ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($record['email']); ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Телефон:</label>
            <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($record['phone']); ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Адрес:</label>
            <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($record['address']); ?>" required>
        </div>
        <div class="form-group">
            <label for="commentary">Комментарий:</label>
            <textarea id="commentary" name="commentary"><?php echo htmlspecialchars($record['commentary']); ?></textarea>
        </div>
        <button type="submit">Сохранить изменения</button>
    </form>
<?php endif; ?>