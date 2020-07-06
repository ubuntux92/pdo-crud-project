<?php
require('global.php');

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$query = $db->prepare("INSERT INTO mytbl (email, password) VALUES (?, ?)");
$result = $query->execute(array(
    $_POST['email'],
    $_POST['password']
));

if ($result) {
    echo "<p>Penyimpanan berhasil.</p>";
    exit;
}
echo "Penyimpanan tidak berhasil.";
exit;
?>
