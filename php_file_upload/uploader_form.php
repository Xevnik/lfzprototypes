<!doctype html>
<html>
<head>
</head>
<body>
	<form enctype="multipart/form-data" id="file_upload" method="post" action="file_handler.php">
		<input type="file" name="upload_file" id="fileToUpload"><br>
		<input type="text" name="description" id="fileDescription" placeholder="File Description"><br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>