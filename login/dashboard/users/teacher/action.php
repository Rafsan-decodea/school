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
}

$post = new Post();
$post->headingUpdate();

?>