<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Multiple File Uploader</title>
</head>
<body>
  <form action="multiUploaderAction.php" method="post" enctype="multipart/form-data">
    <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
  <input type="submit" value="Upload!" />
</form>
</body>
</html>

