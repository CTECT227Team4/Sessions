<?php
session_start();

$views = 0;
$browser = "";
$role = "";

if (isset($_SESSION['views'])) $views = $_SESSION['views'];
if (isset($_SESSION['browser'])) $browser = $_SESSION['browser'];
if (isset($_SESSION['role'])) $role = $_SESSION['role'];

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><title>Read Session</title></head>
 <body>
 <?php
 echo "<p>Session ID: " . session_id() . "</p>";
 echo "<p>Views: $views</p>";
 echo "<p>Browser: $browser</p>";
 echo "<p>Role: $role</p>";
 ?>
<p><a href="create_session.php">Create Session</a></p>
<p><a href="destroy_session.php">Destroy Session</a></p>
<p><a href="destroy_all_session.php">Destroy All Sessions</a></p>
</body></html>