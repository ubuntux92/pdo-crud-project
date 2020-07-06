<?php
require('global.php');
$query = $db->prepare("DELETE FROM mytbl WHERE id = ? LIMIT 1");
$result = $query->execute(array(
    (int)$_POST['id']
));
?>
