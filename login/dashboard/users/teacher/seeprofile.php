<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/school/db/db.php";
$db = new DB();
// This is dashboard

if (!isset($_SESSION["id"])) {
    header("location:/school/index.php");

}

if ($_SESSION["uid"] == 0) {

    ?>


<?php include '../../header.php'?>

<section class="content">
asdas
</section>

<?php include '../../fotter.php'?>

<?php }?>