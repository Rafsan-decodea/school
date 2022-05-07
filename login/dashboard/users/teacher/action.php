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

        if(isset($_POST['preprincipletalkSend']) && isset($_FILES['sendImage']))
        {
            $img_name = $_FILES['sendImage'];
            echo $img_name;
            
            $sql = "update posts set  preprincipletalk  =   '$preprincipletalkSend'";
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