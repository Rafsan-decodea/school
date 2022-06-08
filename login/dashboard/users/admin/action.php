<?php

session_start();
ini_set('display_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . "/school/db/db.php";

class Post
{

    public function __construct()
    {

    }

    public function headingUpdate()
    {
        $db = new DB();
        extract($_POST);

        if (isset($_POST['headingSend'])) {
            $sql = "update posts set heading =   '$headingSend'";
            $db->update($sql);

        }

    }

    public function historyUpdate()
    {
        $db = new DB();
        extract($_POST);

        if (isset($_POST['historySend'])) {
            $sql = "update posts set history =   '$historySend'";
            $db->update($sql);
        }

    }
    public function principletalkUpdate()
    {
        $db = new DB();
        extract($_POST);

        if (isset($_POST['principletalk']) && isset($_FILES['upload_file1'])) {
            $filename = $_FILES['upload_file1']['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $valid_extension = array("jpg", "jpeg", "png", "gif");

            if (in_array($extension, $valid_extension)) {
                $new_name = rand() . "." . $extension;
                $path = $_SERVER['DOCUMENT_ROOT'] . "/school/images/" . $new_name;
                if (move_uploaded_file($_FILES['upload_file1']['tmp_name'], $path)) {
                    $sql1 = "select preprincipleimage	 from posts ";
                    $result = $db->query($sql1);
                    $image = mysqli_fetch_array($result);
                    unlink($_SERVER['DOCUMENT_ROOT'] . "/school/images/" . $image['preprincipleimage']);
                    $sql = "update posts set principleimage = '$new_name' ";
                    $db->query($sql);
                    echo "seccess";
                }

            } else {

            }

            $sql = "update posts set  principletalk =   '$principletalk'";
            $db->update($sql);
        }

    }
    public function preprincipletalkUpdate()
    {
        $db = new DB();
        extract($_POST);

        if (isset($_POST['preprincipletalk']) && isset($_FILES['upload_file'])) {
            $filename = $_FILES['upload_file']['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $valid_extension = array("jpg", "jpeg", "png", "gif");

            if (in_array($extension, $valid_extension)) {
                $new_name = rand() . "." . $extension;
                $path = $_SERVER['DOCUMENT_ROOT'] . "/school/images/" . $new_name;
                if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $path)) {
                    $sql1 = "select preprincipleimage	 from posts ";
                    $result = $db->query($sql1);
                    $image = mysqli_fetch_array($result);
                    unlink($_SERVER['DOCUMENT_ROOT'] . "/school/images/" . $image['preprincipleimage']); // That is for Delete Previous File
                    $sql = "update posts set preprincipleimage = '$new_name' ";
                    $db->query($sql);
                    echo "seccess";
                }

            } else {

            }

            $sql = "update posts set  preprincipletalk  =   '$preprincipletalk'";
            $db->update($sql);
        }

    }

    public function addNotice()
    {
        $db = new DB();
        extract($_POST);

        if (isset($_POST['noticeSend'])) {
            if (empty($noticeSend)) {
                //echo "data is Emplty " . $noticeSend;
            } else {
                $sql = "INSERT INTO `notice_board` (`id`, `notice`) VALUES (NULL,'$noticeSend' )";
                $db->insert($sql);
            }

        }

    }

    public function deleteNotice()
    {
        $db = new DB();
        extract($_POST);

        if (isset($_POST['noticeidSend'])) {
            $sql = "delete from notice_board WHERE id = $noticeidSend ";
            $db->query($sql);
        }
    }

}

$post = new Post();
$post->headingUpdate();
$post->historyUpdate();
$post->principletalkUpdate();
$post->preprincipletalkUpdate();
$post->addNotice();
$post->deleteNotice();
?>


<?php

class Teacher
{

    public function __construct()
    {

    }

    public function Addteacher()
    {
        $db = new DB();
        extract($_POST);
        if(isset($_POST['teacheremail']) && isset($_POST['teacherpassword']))
        {
            $filename = $_FILES['teacherimage']['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $valid_extension = array("jpg", "jpeg", "png", "gif");

            if (in_array($extension, $valid_extension)) {
                $profileimagename = rand() . "." . $extension;
                $path = $_SERVER['DOCUMENT_ROOT'] . "/school/images/" . $profileimagename;
                if (move_uploaded_file($_FILES['teacherimage']['tmp_name'], $path)) {
                    // $sql1 = "select profileimage  from school_users";
                    // $result = $db->query($sql1);
                    // $image = mysqli_fetch_array($result);
                    // if($image)
                    // {
                    //     unlink($_SERVER['DOCUMENT_ROOT'] . "/school/images/" . $image['profileimage']); // That is for Delete Previous File
                    // }
                    $name = $_POST['teachername'];
                    $mothername = $_POST['teachermothername'];
                    $fathername = $_POST['teacherfathername'];
                    $mobile = $_POST['teachermobile'];
                    $location = $_POST['teacherlocation'];
                    $sellary = $_POST['teachersellary'];
                    $sql = "insert into school_users(uid,email,password,name,profileimage,fathername,mothername,phone,location,sellary) value (1,'$teacheremail','$teacherpassword','$name','$profileimagename','$fathername','$mothername','$mobile','$location','$sellary') ";
                    $db->query($sql);
                    echo "seccess";
                }

            } else {

            }
        }

    }

  public function fetchTeacherData()
  {
    $db = new DB();
    extract($_POST);
   
    if(isset($_POST['sendProfileid']))
    {
        $sql = "select * from school_users where id = $sendProfileid";
        $data = $db->query($sql);
        $response = array();
        while ($row = mysqli_fetch_assoc($data)) {
            $response = $row;
        }

        echo json_encode($response);
    }
 
  }


   public function updateTeacher()
   {
       $db = new DB();
       extract($_POST);


   }


    public function deleteTeacher()
    {
        $db = new DB();
        extract($_POST);
       
        if(isset($_POST['profileidSend']))
        {
            $sql1 = "select profileimage from school_users where id = $profileidSend";
            $result1 = $db->query($sql1);
            $deleteimage = mysqli_fetch_array($result1);
            unlink($_SERVER['DOCUMENT_ROOT'] . "/school/images/" . $deleteimage['profileimage']);

            $sql = "DELETE FROM `school_users` WHERE `school_users`.`id` = $profileidSend";
            $db->query($sql);

        }
    }

}

$teacher = new Teacher();
$teacher->Addteacher();
$teacher->deleteTeacher();
$teacher->updateTeacher();
$teacher->fetchTeacherData();

?>