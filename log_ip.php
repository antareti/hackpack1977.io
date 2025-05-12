<?php
// Получаем IP-адрес посетителя
$ip = $_SERVER['REMOTE_ADDR'];

// Получаем текущее время
$timestamp = date("Y-m-d H:i:s");

// Открываем файл для записи
$file = fopen("ip_log.txt", "a");

// Записываем IP-адрес и время в файл
fwrite($file, "$timestamp - $ip\n");

// Закрываем файл
fclose($file);

// Отправляем подтверждение
echo "IP адрес записан";
?>
