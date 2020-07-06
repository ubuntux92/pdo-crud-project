<?php
require('global.php');
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$query = $db->prepare("UPDATE mytbl SET email = ?, password = ? WHERE id = ? LIMIT 1");
$result = $query->execute(array(
    $_POST['email'],
    $_POST['password'],
    (int)$_POST['id']
));

if ($result) {
    echo "<p>Penyimpanan berhasil.</p>";
    exit;
}
echo "Penyimpanan tidak berhasil.";
exit;
?>
