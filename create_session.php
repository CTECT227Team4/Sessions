<?php
/* Change in the source file test */
session_start();
 
if (!isset($_SESSION['views'])) $_SESSION['views'] = 0;
if (!isset($_SESSION['browser'])) $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
if (!isset($_SESSION['role'])) $_SESSION['role'] = 'admin';

$_SESSION['views']++;
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><title>Create Session</title></head>
 <body>
 <?php
 echo "<p>Session ID: " . session_id() . "</p>";
 echo '<p>Views: ' . $_SESSION['views'] . '</p>';
 echo '<p>Browser: ' . $_SESSION['browser'] . '</p>';
 echo '<p>Role: ' . $_SESSION['role'] . '</p>';
 ?>
<p><a href="read_session.php">Read Session</a></p>
<p><a href="destroy_session.php">Destroy Session</a></p>
<p><a href="destroy_all_session.php">Destroy All Sessions</a></p>
</body></html>