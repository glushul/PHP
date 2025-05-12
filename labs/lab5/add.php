<?php
function addRecord($mysqli) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'] ?? '';
        $surname = $_POST['surname'] ?? '';
        $patronymic = $_POST['patronymic'] ?? '';
        $birthdate = $_POST['birthdate'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';
        $comment = $_POST['commentary'] ?? '';

        if ($name && $surname && $patronymic && $birthdate && $email && $phone && $address) {
            $stmt = $mysqli->prepare("INSERT INTO `contacts` (name, surname, patronymic, birthdate, email, phone, address, commentary) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            
            if ($stmt === false) {
                return ['message' => "Ошибка при подготовке запроса: " . $mysqli->error, 'color' => 'red'];
            }

            $stmt->bind_param("ssssssss", $name, $surname, $patronymic, $birthdate, $email, $phone, $address, $comment);

            if ($stmt->execute()) {
                return ['message' => "Запись добавлена", 'color' => 'green'];
            } else {
                return ['message' => "Ошибка: запись не добавлена", 'color' => 'red'];
            }
            $stmt->close();
        } else {
            return ['message' => "Ошибка: все обязательные поля должны быть заполнены", 'color' => 'red'];
        }
    }
    return null;
}

$result = addRecord($mysqli);
?>

<div class="form-container">

    <form action="index.php?page=add" method="POST">
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="surname">Фамилия:</label>
            <input type="text" id="surname" name="surname" required>
        </div>
        <div class="form-group">
            <label for="patronymic">Отчество:</label>
            <input type="text" id="patronymic" name="patronymic" required>
        </div>
        <div class="form-group">
            <label for="birthdate">Дата рождения:</label>
            <input type="date" id="birthdate" name="birthdate" required>
        </div>
        <div class="form-group">
            <label for="email">Электронная почта:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Телефон:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="address">Адрес:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="commentary">Комментарий:</label>
            <textarea id="commentary" name="commentary"></textarea>
        </div>
        <button type="submit">Добавить запись</button>
    </form>

    <?php if ($result): ?>
        <p style="color: <?= $result['color']; ?>"><?= $result['message']; ?></p>
    <?php endif; ?>
</div>
