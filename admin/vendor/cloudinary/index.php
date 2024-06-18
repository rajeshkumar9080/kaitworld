<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Choose image to upload:</label>
        <input type="file" name="image" id="image">
        <button type="submit">Upload Image</button>
    </form>
</body>
</html>
