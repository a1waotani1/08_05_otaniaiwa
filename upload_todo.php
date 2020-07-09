<?php
session_start();
include('functions.php');
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}


$todo = $_POST['todo'];
$deadline = $_POST['deadline'];

$pdo = connect_to_db();

$sql = 'INSERT INTO todolist(id, todo, deadline, created_at, updated_at) VALUES(NULL, :todo, :deadline, sysdate(), sysdate())';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':todo', $todo, PDO::PARAM_STR);
$stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
    header("Location:upload.php");
    exit();
}
