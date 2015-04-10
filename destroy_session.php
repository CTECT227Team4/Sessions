<?php
session_start();
unset($_SESSION['views']);
unset($_SESSION['browser']);
unset($_SESSION['role']);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><title>Destroy Session</title></head>
 <body> 
 <p>All session variables unset.</p>
<p><a href="create_session.php">Create Session</a></p>
<p><a href="read_session.php">Read Session</a></p>
<p><a href="destroy_all_session.php">Destroy All Sessions</a></p>
</body></html>