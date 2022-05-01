<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES['myfile'];
    $fileName = $file['name'];
    $from = $file['tmp_name'];
    $to = __DIR__ . '/upload/' . $fileName;

    move_uploaded_file($from, $to);
    $message = 'Uploaded success.';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <?php if(isset($message)): ?>
        <?php echo $message; ?>
    <?php endif; ?>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <button type="submit">Upload</button>
    </form>
</body>
</html>