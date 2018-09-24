<?php
session_start()
	if (isset($_POST['submit'])) {

		$file_name = $_FILES['foto']['file_name'];
		$temp_name = $FILES ['foto']['temp_name'];
		$file_move_success = move_uploaded_file($temp_name, 'terkirim/' $file_name);
		if ($file_move_success) {
			$file = $_POST['HOBBY'];
			$_SESSION
		}
	
}
	}