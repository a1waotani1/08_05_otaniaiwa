<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>アップロード</title>
</head>

<body>
    <div class="header-img">
        <nav class="navtop">
            <div>
                <h1>travelist.</h1>
                <a href="profile.php"><i class="fas fa-user-circle"></i>プロフィール</a>
                <a href="upload.php"><i class="fas fa-plus-circle"></i></i>アップロード</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>ログアウト</a>
            </div>
    </div>
    <div class="content">

        <form action="upload_todo.php" method="POST">

            <div>
                todo:<input type="text" name="todo" class="todo">
            </div>
            <div>
                deadline: <input type="date" name="deadline" class="deadline">
            </div>
            <div>
                <button>Upload Todo</button>
            </div>
        </form>
    </div>
</body>

</html>