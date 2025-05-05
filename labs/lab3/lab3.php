<?php
// Задание 1
function transformEverySecondWord(array &$words) {
    for ($i = 1; $i < count($words); $i += 2) {
        $words[$i] = strtoupper($words[$i]);
    }
}

$result = '';
$userText = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userText = $_POST['user_text'] ?? '';
    $words = preg_split('/\s+/', trim($userText));

    transformEverySecondWord($words);

    $result = implode(' ', $words);
}


// Задание 2
$file = 'test.txt';
$text = '12345';

file_put_contents($file, $text);


// Задание 4
$files = ['1.txt', '2.txt', '3.txt'];
$result = '';
foreach ($files as $file) {
    file_put_contents($file, file_get_contents($file) . '!');
}


// Задание 8
$source = 'test.txt';
$destination = 'copy.txt';

if (file_exists($source)) {
    copy($source, $destination);
}


// Задание 11
$source = 'test.txt';
echo filesize($source) . '<br>';


// Задание 15
$files = ['1.txt', '2.txt', '3.txt'];
for($i = 0; $i < count($files); $i++) {
    echo $i + 1 . ' - ' . (file_exists($files[$i]) ? 'есть ' : 'нет ');
}


// Задание 21
$XVI = "Иван Васильевич";
$XVIII = "Пётр Алексеевич";
$XIX = "Николай Павлович";

$century = $_GET['century'] ?? '';

if ($century && isset($$century)) {
    $ruler = $$century;
    echo '<br>' . "В $century веке царствовал $ruler.";
} else {
    echo '<br>' . "Век не найден или введён неверно.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Жесткая ссылка</title>
</head>
<body>
    <h2>Введите текст:</h2>
    <form method="post">
        <textarea name="user_text" rows="5" cols="40"><?= htmlspecialchars($userText) ?></textarea><br><br>
        <input type="submit" value="Преобразовать">
    </form>

    <?php if ($result): ?>
        <h3>Результат:</h3>
        <p><?= htmlspecialchars($result) ?></p>
    <?php endif; ?>
</body>
</html>
