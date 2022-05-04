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
<div class="col-sm-6">
            <h1 class="m-0">Make Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
<div class="parent-container d-flex">
    <div class="container border border-primary">
        <div class="row">
            <div class="col">
               sdf
            </div>
        </div>
    </div>
<div class="mx-auto" style="width: 100px;">
  <!-- Space  -->
</div>
    <div class="container border border-primary">
        <div class="row">
            <div class="col">
                Container Right
            </div>
        </div>
    </div>
    
</div>

</section>

<?php include '../../fotter.php'?>

<?php }?>