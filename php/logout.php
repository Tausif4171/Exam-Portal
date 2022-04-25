<?php 
session_start();
include 'faculty.php';
$f=	new Faculty();
$f->logout();
?>

<?php 
// session_start();
// include 'faculty.php';
// include 'student.php';
// $f=	new Faculty();
// $g=	new Student();
// $f->logout();
// $g->logout();
?>