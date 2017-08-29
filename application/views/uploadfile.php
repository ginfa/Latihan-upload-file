<!DOCTYPE html>              
<html>
<head>
	<title>Upload CI</title>
</head>
<body>
	<?php echo form_open_multipart('First/uploadFile') ?>
		<input type="file" name="filename">
		<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>