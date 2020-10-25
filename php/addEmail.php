<?php
require_once 'include/config.php';
require_once 'include/db_connect.php';


 header('Content-Type: application/json');

class MainFormFromReact {
    private $email;


    function decoder(){
      $content = trim(file_get_contents("php://input"));
       return $decoded = json_decode($content, true);


    }


    function __construct() {
        $data =  $this-> decoder();

        $this->email = $data['email'];


    }

  public function getValues() {
      return  get_object_vars($this);
    }
}



$db = new Db($config['db']['server'], $config['db']['username'],  $config['db']['password'], $config['db']['dbname']);

$addNewEmail = new MainFormFromReact();


$recivedData =  $addNewEmail->getValues();



$db->postData($recivedData);
