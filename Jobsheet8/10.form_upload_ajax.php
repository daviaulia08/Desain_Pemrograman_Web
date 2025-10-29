<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Gambar (AJAX)</title>
</head>
<body>
    <h3>Unggah beberapa gambar</h3>
    <form id="upload-form" action="12.upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" id="files" name="files[]" multiple accept=".jpg,.jpeg,.png,.gif">
        <input type="submit" value="Unggah">
    </form>

    <div id="status" style="margin-top:12px;"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="11.upload.js"></script>
</body>
</html>
