<form method="post">
    <input required type="text" id="country" name="country" placeholder="Введите вашу страну">
    <input type="submit">
</form>

<?php
session_start();
if (isset($_POST['country'])) {
    $_SESSION['country'] = $_POST['country'];
}
?>
