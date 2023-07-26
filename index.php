<?php
require 'autoload.php';

if (!empty($_POST['message'])){
    $text = $_POST['message'];
    $coder = new Coder($text);
    $coder->encode();
}
?>
<form method="post">
    <label>
        Введите фразу: <br>
        <textarea name="message"></textarea><br>
    </label>
    <input type="submit">
</form>
