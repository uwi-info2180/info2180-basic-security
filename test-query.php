<?php
$host = getenv('IP');
$db = new PDO("mysql:host=$host;dbname=c9", "ylynfatt", "");
$stmt = $db->query("select * from employee e join department d on e.department_id = d.department_id WHERE d.department_id = 4");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $row) {
?>
<?= "<pre>"; ?>
<?= var_dump($row['department']); ?>
<?= "</pre>"; ?>
<?php
}
?>
