<?php
require 'conectdb.php';

if (isset($_POST['blocked'])) {
    $userId = $_POST['blocked'];
    $updateQuerry = "UPDATE users SET status_id = 2 WHERE `id_user` = $userId";
    mysqli_query($conn, $updateQuerry);
    echo"<script>
    alert('Пользователь заблокирован');
    location.href='adminPanel.php'; 
  </script>";
} elseif (isset($_POST['unblocked'])) {
    $userId = $_POST['unblocked'];
    $updateQuerry = "UPDATE users SET status_id = 1 WHERE `id_user` = $userId";
    mysqli_query($conn, $updateQuerry);
    echo"<script>
         alert('Пользователь разблокирован');
         location.href='adminPanel.php'; 
       </script>";
}
?>