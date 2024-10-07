<!DOCTYPE html>
<html>

<head>
  <title>Uploading...</title>
  <meta charset="utf-8" />
</head>

<body>
  <h1>Uploading file...</h1>
  <?php
  $udir = "images/";
  $size_bytes = 1048576;
  $types = array('image/gif', 'image/png', 'image/jpg', 'image/jpeg');

  if (!is_dir($udir))
    die("Директория <strong>($udir)</strong> не е достъпна!");
  if (is_uploaded_file($_FILES['uf']['tmp_name'])) {
    $error = $_FILES['uf']['error'];
    if ($error > 0) {
      echo ("<h3>Проблем: </h3>");
      switch ($error) {
        case 1:
          echo 'File exceeded upload_max_filesize';
          break;
        case 2:
          echo 'File exceeded max_file_size';
          break;
        case 3:
          echo 'File only partially uploaded';
          break;
        case 4:
          echo 'No file uploaded';
          break;
      }
      exit();
    }

    $name = $_FILES['uf']['name'];
    echo ("<h2>NAME: " . $name . "</h2>");
    $size = $_FILES['uf']['size'];
    echo ("<h2>SIZE: " . $size . "</h2>");
    $type = $_FILES['uf']['type'];
    echo ("<h2>TYPE: " . $type . "</h2>");

    if ($size > $size_bytes) {
      echo ("<h3>Файлът е твърде голям!</h3>");
      exit();
    }

    if (!in_array($type, $types)) {
      die("<h3>Нямате право да качвате такъв тип файлове</h3>");
    }

    if (file_exists($udir . $name)) {
      echo ("<h3>Файл с такова име вече съществува!</h3>");
      exit();
    }

    if (move_uploaded_file($_FILES['uf']['tmp_name'], $udir . $name)) {
      echo ("Файла (<a href=\"$udir$name\">$name</a>) е качен успешно!");
    } else {
      echo ("<h3>Има проблем с качването на файла!</h3>");
      exit();
    }

  }
  ?>
</body>

</html>