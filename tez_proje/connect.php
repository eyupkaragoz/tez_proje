<?php
$mysqlsunucu = "localhost";
$mysqlveritabani = "ustamcom";
$mysqlkullanici = "root";
$mysqlsifre = "";
try {
    $db = new PDO(dsn: "mysql:host=$mysqlsunucu;dbname=$mysqlveritabani;charset=utf8", username: $mysqlkullanici, password: $mysqlsifre);
    $db->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $e->getMessage();
}


?>