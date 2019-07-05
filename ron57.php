<?php

$mysqli = new mysqli('localhost', 'root', '', 'cy');

// var_dump($mysqli);

$mysqli->set_charset('utf-8');

// $sql = 'INSERT INTO cust (cname, tel, birthday) VALUE ("Bryan", "123", "1999-01-02")';
// $sql .= ', ("cy1", "321", "1999-09-09")';
// $sql .= ', ("cy2", "456", "1999-12-09")';

$cname = 'Kevin';
$tel = '0912-123456';
$birthday = '1999-03-04';

$sql = 'INSERT INTO cust (cname, tel, birthday) VALUE (?, ?, ?)';

// $sql = 'update cust set cname="TOny" where id = 3';

// $sql = 'delete from cust where id=2';

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('sss', $cname, $tel, $birthday);
$stmt->execute();
echo $stmt->affected_rows;


echo $mysqli->error;