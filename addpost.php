<?php
if (!empty($_POST["title"]) && !empty($_POST["text"]) && !empty($_POST["category_id"]) && !empty($_POST["status_id"]) && !empty($_POST["id_post"]) && !empty($_POST["id_user"])) {
      
    require_once "conectdb.php";
  
    $namepost = $conn->real_escape_string($_POST["title"]);
    $text = $conn->real_escape_string($_POST["text"]);
    $category_id = $conn->real_escape_string($_POST["category_id"]);
    $status_id = $conn->real_escape_string($_POST["status_id"]);
    $id_post = $conn->real_escape_string($_POST["id_post"]);
    $id_user = $conn->real_escape_string($_POST["id_user"]);

    $newproduct = mysqli_query($conn, "INSERT INTO post(title, text, category_id, statusnews_id, id_post, id_user) VALUES ('$namepost', '$text', '$category_id', '$status_id', '$id_post', '$id_user')");
    
    if ($newproduct) {
        echo "<script>
        alert(\"Успешно добавлен пост!\");
        location.href='adminProduct.php';
        </script>";
    } else {
        echo "<script>
        alert(\"Ошибка при добавлении поста: " . $conn->error . "\");
        location.href='adminProduct.php';
        </script>";
    }
} else {
    echo "<script>
    alert(\"Пожалуйста, заполните все поля.\");
    location.href='adminProduct.php';
    </script>";
}
?>