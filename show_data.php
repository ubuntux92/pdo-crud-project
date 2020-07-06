<?php
require('global.php');

function html($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

$query = $db->query("SELECT * FROM mytbl");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($result) != '0') {
    echo '<table>';
    foreach ($result as $key=>$val) {
        ?>
        <tr>
            <td><?php echo (int)$val['id']; ?></td>
            <td><?php echo html($val['email']); ?></td>
            <td><?php echo html($val['password']); ?></td>
        </tr>
        <?php
    }
    echo '</table>';
}
?>
