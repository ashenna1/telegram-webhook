<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$token = "8046992104:AAEDEQ9iEN5iULa5zwXw8_gl3lv8CzoLmZU";
$chat_id = "https://t.me/gozaresh_ashenna";

$text = "📩 پیام جدید:\n\n👤 نام: $name\n📞 تلفن: $phone\n📝 توضیحات: $message";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text));
?>
