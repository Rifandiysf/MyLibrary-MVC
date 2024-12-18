<?php
$number = 1;

if(!defined('SECURE_ACCESS')) {
    die('direct access not permitted');
}
if(isset($_SESSION['id login']) == false) {
    header('location: /login');
}
?>



<?php include('templates/footer.php') ?>
