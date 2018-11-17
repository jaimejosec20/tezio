<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FTP</title>
</head>

<body>

<p id="f1_upload_process">Loading...<br/><img src="loader.gif" /></p>
<p id="result"></p>
<form action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
    File: <input name="myfile" type="file" />
          <input type="submit" name="submitBtn" value="Upload" />
</form>
 
<iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
</body>
</html>


