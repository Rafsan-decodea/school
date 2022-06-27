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

<?php include '../../../header.php'?>

<style>

body .no-padding {
padding: 0;
}
.widget-area {
background-color: #fff;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
-o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
float: left;
margin-top: 30px;
padding: 25px 30px;
position: relative;
width: 100%;
}
.status-upload {
background: none repeat scroll 0 0 #f5f5f5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
float: left;
width: 100%;
}
.status-upload form {
float: left;
width: 100%;
}
.status-upload form textarea {
background: none repeat scroll 0 0 #fff;
border: medium none;
-webkit-border-radius: 4px 4px 0 0;
-moz-border-radius: 4px 4px 0 0;
-ms-border-radius: 4px 4px 0 0;
-o-border-radius: 4px 4px 0 0;
border-radius: 4px 4px 0 0;
color: #777777;
float: left;
font-family: Lato;
font-size: 14px;
height: 142px;
letter-spacing: 0.3px;
padding: 20px;
width: 100%;
resize:vertical;
outline:none;
border: 1px solid #F2F2F2;
}

.status-upload ul {
float: left;
list-style: none outside none;
margin: 0;
padding: 0 0 0 15px;
width: auto;
}
.status-upload ul > li {
float: left;
}
.status-upload ul > li > a {
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #777777;
float: left;
font-size: 14px;
height: 30px;
line-height: 30px;
margin: 10px 0 10px 10px;
text-align: center;
-webkit-transition: all 0.4s ease 0s;
-moz-transition: all 0.4s ease 0s;
-ms-transition: all 0.4s ease 0s;
-o-transition: all 0.4s ease 0s;
transition: all 0.4s ease 0s;
width: 30px;
cursor: pointer;
}
.status-upload ul > li > a:hover {
background: none repeat scroll 0 0 #606060;
color: #fff;
}
.status-upload form button {
border: medium none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-ms-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
color: #fff;
float: right;
font-family: Lato;
font-size: 14px;
letter-spacing: 0.3px;
margin-right: 9px;
margin-top: 9px;
padding: 6px 15px;
}
.dropdown > a > span.green:before {
border-left-color: #2dcb73;
}
.status-upload form button > i {
margin-right: 7px;
}

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div class="col-sm-6">
            <h1 class="m-0">Studnet Section</h1>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addstudent">
           Add new Student
        </button>
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

<!-- Modal For adding Student  -->
<div class="modal fade" id="addstudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

  <form id="studentaddsubmitform">
   <div class="form-group">
      <label for="exampleInputEmail1">Name </label>
      <input type="text" class="form-control" name="studentname" id="studentname" aria-describedby="emailHelp" Name placeholder="Fristname">
      <small id="emailHelp" class="form-text text-muted">Enter Frist name </small>
   </div>
   <div class="form-group">
   <label for="exampleInputEmail1">Select Gender </label>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="studentgender" value="1" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault1">
          Male
        </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" required type="radio" name="studentgender" value="2" id="flexRadioDefault2" >
          <label class="form-check-label" for="flexRadioDefault2">
            Female
          </label>
      </div>
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Class</label>
      <input type="number" class="form-control" name="studentclass" id="studentclass" aria-describedby="emailHelp" Name placeholder="Enter Class">
      <small id="emailHelp" class="form-text text-muted">Enter CLass </small>
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Father Name</label>
      <input type="text" class="form-control" name="studentfathername" id="studentfathername" aria-describedby="emailHelp" Name placeholder="Father name">
      <small id="emailHelp" class="form-text text-muted">Enter Your Last Name</small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Mother Name</label>
      <input type="text" class="form-control" name="studentmothername" id="studentmothername" aria-describedby="emailHelp" Name placeholder="Mother name">
      <small id="emailHelp" class="form-text text-muted">Enter Your Last Name</small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Location</label>
      <input type="text" class="form-control" name="studentlocation" id="studentlocation" aria-describedby="emailHelp" Name placeholder="location">
      <small id="emailHelp" class="form-text text-muted">Enter Location </small>
   </div>
   <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="studentpassword" class="form-control" id="studentpassword" placeholder="Password">
   </div>
   <div class="form-group">
      <label for="exampleInputPassword1">Mobile</label>
      <input type="text" name="studentmobile" class="form-control" id="studentmobile" placeholder="mobilenumber">
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Image </label>
      <input id="student_upload_file" type="file" accept="image/*" onchange="loadFile1(event)" name="studentimage" />
      <small id="emailHelp" class="form-text text-muted">Enter Image </small>
      <img id="studentoutput2" height="200" width="200" class="" src="#" alt="your image" />
      <script>
  var loadFile1 = function(event) {
    
    var output = document.getElementById('studentoutput2');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<!-- Show Image Using Javascript  -->
   </div>

   <input type="submit" class="btn btn-success" name="submit" value="Add Student" />
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End  -->

<!-- Script StudentAdding Start -->

<script>

         $(document).ready(function(){
                     $("#studentaddsubmitform").on("submit",function(e){

                        e.preventDefault();

                        var formData = new FormData(this);

                        $.ajax({

                           url : "../action.php",
                           type: "POST",
                           data : formData,
                           contentType: false,
                           processData: false,
                           success:function(data)
                           {
                        //  alert(data);
                             toastr.success(" Adding Student Success ");
                             setTimeout(function () {

                             $.get("/school/login/dashboard/users/admin/stu/seestudent.php", function(data) {
                               $("#updateData").html(data);
                             });
                             }, 1000); // Update With out page Load




                           }
                        })


                     })
                  })


</script>
<!-- Script Teacher Adding Stop -->

<?php

    $sql = "select * from school_users where uid = 2";
    $result = $db->query($sql);

    ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">serial</th>
      <th scope="col">image</th>
      <th scope="col">Roll</th>
      <th scope="col">class</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Father Name </th>
      <th scope="col">Mother Name </th>
      <th scope="col">phone </th>
      <th scope="col">location</th>
      <th scope="col">Entry Date </th>
      <th scope="col">Action </th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row = $result->fetch_assoc()) {?>
    <tr>
     <th scope="row"><?php echo $number += 1 ?></th>
     <td><img src="<?php echo "/school/images/" . $row['profileimage'] ?>" height="50" width="50" class="rounded-circle"/></td>
      <td><?php echo $row["sturoll"]; ?></td>
      <td><?php echo $row["stuclass"]; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php if ($row['gender'] == 1) {echo "Male";} else {echo "Female";}?></td>
      <td><?php echo $row["fathername"]; ?></td>
      <td><?php echo $row["mothername"]; ?></td>
      <td><?php echo $row["phone"]; ?></td>
      <td><?php echo $row["location"]; ?></td>
      <td><?php echo $row["entrydate"]; ?></td>
      <td><button class="badge btn-danger" onclick="confromDelete(<?php echo $row["id"] ?>);" >Delete</button> </td>
      <td><button class="badge btn-primary" data-toggle="modal" data-target="#editstudent" onclick="FetchData(<?php echo $row["id"] ?>);" >Edit</button> </td>
    </tr>
    <?php }?>
  </tbody>
</table>

<script>
  function confromDelete(profileid)
 {

  var result = confirm("Are You Want to Delete Student  "+profileid+" ?");
  if(result)
  {
    Delete(profileid)
  }
  else
  {
    toastr.warning("Not Delete Student ");
  }

 }

 function Delete(profileid)
  {

    $.ajax({
        url : "../action.php",
        type : 'post',
        data : {
              studentprofileidSend:profileid,
          },

      success: function (data,status)
      {


          toastr.info("Please reload The Page For See Effect");
          toastr.success("Delete Teacher  Successfully ");
          setTimeout(function () {

             $.get("/school/login/dashboard/users/admin/stu/seestudent.php", function(data) {
               $("#updateData").html(data);
             });
             }, 1000);



      }


   });

  }


</script>


<!-- Modal For Edit Student   -->
<div class="modal fade" id="editstudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

  <form id="studentupdateform">
    <input type="hidden" id="updatestudentid" name="updatestudentid">
   <div class="form-group">
      <label for="exampleInputEmail1">Name </label>
      <input type="text" class="form-control" name="updatestudentname" id="updatestudentname" aria-describedby="emailHelp" Name placeholder="Fristname">
      <small id="emailHelp" class="form-text text-muted">Enter Frist name </small>
   </div>
   <div class="form-group">
   <label for="exampleInputEmail1">Select Gender </label>
      <div class="form-check">
        <input class="form-check-input" required type="radio" name="updatestudentgender" value="1" id="male" checked>
        <label class="form-check-label" for="flexRadioDefault1">
          Male
        </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" required type="radio" name="updatestudentgender" value="2" id="female" >
          <label class="form-check-label" for="flexRadioDefault2">
            Female
          </label>
      </div>
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Class</label>
      <input type="number" class="form-control" name="updatestudentclass" id="updatestudentclass" aria-describedby="emailHelp" Name placeholder="Enter Class">
      <small id="emailHelp" class="form-text text-muted">Enter CLass </small>
   </div>
   <div class="form-group">
      <label for="exampleInputEmail1">Father Name</label>
      <input type="text" class="form-control" name="updatestudentfathername" id="updatestudentfathername" aria-describedby="emailHelp" Name placeholder="Father name">
      <small id="emailHelp" class="form-text text-muted">Enter Your Last Name</small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Mother Name</label>
      <input type="text" class="form-control" name="updatestudentmothername" id="updatestudentmothername" aria-describedby="emailHelp" Name placeholder="Mother name">
      <small id="emailHelp" class="form-text text-muted">Enter Your Last Name</small>
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Location</label>
      <input type="text" class="form-control" name="updatestudentlocation" id="updatestudentlocation" aria-describedby="emailHelp" Name placeholder="location">
      <small id="emailHelp" class="form-text text-muted">Enter Location </small>
   </div>
   <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="updatestudentpassword" class="form-control" id="updatestudentpassword" placeholder="Password">
   </div>
   <div class="form-group">
      <label for="exampleInputPassword1">Mobile</label>
      <input type="text" name="updatestudentmobile" class="form-control" id="updatestudentmobile" placeholder="mobilenumber">
   </div>

   <div class="form-group">
      <label for="exampleInputEmail1">Image </label>
      <input id="updatestudentuploadfile" type="file" accept="image/*" onchange="loadFile(event)" name="updatestudentuploadfile" />
      <small id="emailHelp" class="form-text text-muted">Enter Image </small>
      <img id="updatestudentoutput" height="200" width="200" class="" src="#" alt="your image" />
      <script>
  var loadFile = function(event) {
    var output = document.getElementById('updatestudentoutput');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<!-- Show Image Using Javascript  -->
   </div>

   <input type="submit" class="btn btn-success" name="submit" value="Update Student " />
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal End  -->

<!-- Fetch Teacher Data Script  -->
<script>

     function FetchData(profileid)
     {

      $.ajax({

            url : "../action.php",
            type: "POST",
            data : {
              studentsendProfileid: profileid,
            },
            success:function(data)
            {

              var studentfetchuserid  = JSON.parse(data);
              $("#updatestudentid").val(studentfetchuserid.id);
              $("#updatestudentname").val(studentfetchuserid.name);
              if(studentfetchuserid.gender ==1 ){$("#male").prop("checked", true);}else{$("#female").prop("checked", true);}
              $("#updatestudentclass").val(studentfetchuserid.stuclass);
              $("#updatestudentfathername").val(studentfetchuserid.fathername);
              $("#updatestudentmothername").val(studentfetchuserid.mothername);
              $("#updatestudentlocation").val(studentfetchuserid.location);
              $("#updatestudentpassword").val(studentfetchuserid.password);
              $("#updatestudentmobile").val(studentfetchuserid.phone);
             // $("#updatestudentuploadfile").val(studentfetchuserid.profileimage);
              $("#updatestudentoutput").attr("src","/school/images/"+studentfetchuserid.profileimage);
            }
        });
     }

</script>

<!-- Teacher Update Script  -->
<script>

         $(document).ready(function(){
                     $("#studentupdateform").on("submit",function(e){

                        e.preventDefault();

                        var formData = new FormData(this);

                        $.ajax({

                           url : "../action.php",
                           type: "POST",
                           data : formData,
                           contentType: false,
                           processData: false,
                           success:function(data)
                           {
                            // alert(data);
                             toastr.success("Update Data Success ");
                             setTimeout(function () {

                              $.get("/school/login/dashboard/users/admin/stu/seestudent.php", function(data) {
                                $("#updateData").html(data);
                              });
                              }, 1000);


                           }
                        })


                     })
                  })


</script>
<!-- Teacher Update End  -->

</section>

<?php include '../../../fotter.php'?>

<?php }?>