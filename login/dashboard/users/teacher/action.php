<?php 


session_start();
ini_set('display_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . "/school/db/db.php";


class Post{

    public function __construct()
    {
        
    }

    public function headingUpdate()
    {
        $db = new DB();
        extract($_POST);

        if(isset($_POST['headingSend']))
        {
            $sql = "update posts set heading =   '$headingSend'";
            $db->update($sql);
          
        }

    }

    public  function historyUpdate()
    {
        $db = new DB();
        extract($_POST);

        if(isset($_POST['historySend']))
        {
            $sql = "update posts set history =   '$historySend'";
            $db->update($sql);
        }

    }
    public  function principletalkUpdate()
    {
        $db = new DB();
        extract($_POST);

        if(isset($_POST['principletalkSend']))
        {
            $sql = "update posts set  principletalk =   '$principletalkSend'";
            $db->update($sql);
        }

    }
    public  function preprincipletalkUpdate()
    {
        $db = new DB();
        extract($_POST);

        if(isset($_POST['preprincipletalk']) && isset($_FILES['upload_file']))
        {
            $filename = $_FILES['upload_file']['name'];
            $extension = pathinfo($filename,PATHINFO_EXTENSION);
            $valid_extension = array("jpg","jpeg","png","gif");

            if(in_array($extension,$valid_extension))
            {
                $new_name = rand() . "." . $extension;
                $path =  $_SERVER['DOCUMENT_ROOT'] . "/school/images/" . $new_name;
               if(move_uploaded_file($_FILES['upload_file']['tmp_name'],$path))
               {
                    $sql = "update posts set preprincipleimage = '$new_name' ";
                    $db->query($sql);
                    echo "seccess";
               }

            }
            else{

               
            }

            
            $sql = "update posts set  preprincipletalk  =   '$preprincipletalk'";
            $db->update($sql);
        }

    }
}

$post = new Post();
$post->headingUpdate();
$post->historyUpdate();
$post->principletalkUpdate();
$post->preprincipletalkUpdate();

?>