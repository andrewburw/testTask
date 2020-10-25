<?php




class Db  {
    protected $connection;
    protected $query;

   public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = '', $charset = 'utf8') {
     $this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
     if ($this->connection->connect_error) {
       $this->error('Failed to connect to MySQL - ' . $this->connection->connect_error);
      exit();
    }

   }

   public  $sqlErrors = array( // error handler response
     1062 => 'Duplicate value!'
   );

   public function postData($formData){

     $imploded_form = implode("','",$formData);

     $sqlQuery = "INSERT INTO mail_list (email,data) VALUES ('$imploded_form',  CURRENT_TIMESTAMP);";


      if ($this->connection->query($sqlQuery) === TRUE) {

         echo  json_encode( array("error" => false));

      } else {

          echo   json_encode( array("error" => true,"error" => $this->connection-> error));



      }

          $this->connection->close();

  }

  public function postDataPHP($formData){

      $sqlQuery = "INSERT INTO mail_list (email,data) VALUES ('$formData',  CURRENT_TIMESTAMP);";


     if ($this->connection->query($sqlQuery) === TRUE) {

        return true;

     } else {

        return false;



     }

         $this->connection->close();

 }
  public function showData($data){
     // -----  SHOW PRODUCTS ------


    $orderBy = $data['date']  === 'asc' ? 'ORDER BY data  ASC' : 'ORDER BY data  DESC';

    $subString = '';
       if(strlen($data['string'])  !== 0 && $data['domain']  === 'null' ){

            $subString =  "WHERE `email` LIKE  '$data[string]' ";

       } else if (strlen($data['string'])  !== 0 && $data['domain']  !== 'null'  ){

            $subString =  "WHERE `email` LIKE  '$data[string]'";

       }else if (strlen($data['string'])  === 0 && $data['domain']  !== 'null'  ){

            $subString =  "WHERE `email` LIKE   '%@$data[domain]'";

       }else if (strlen($data['string'])  === 0 && $data['domain']  === 'null'  ){
            $subString =  '';

       }



         $sqlQuery = "SELECT * FROM mail_list   $subString  $orderBy;";

  //  SELECT * FROM mytable WHERE column1 LIKE '%word1%'
      //ORDER BY column1, column2, ... ASC|DESC;

//   echo $sqlQuery;
    $result = $this->connection->query($sqlQuery);



     if ( $result) {
       $resultArr = array();



      while ($row = $result -> fetch_assoc()) {
          $resultArr[] = $row;
      }

        return $resultArr;


     } else {

        $errorN = mysqli_errno( $this->connection);
            if (array_key_exists( $errorN , $this->sqlErrors )) {
             echo  json_encode( array("status" => 'error',"error" => $this->sqlErrors[$errorN] ));

           } else {
             echo   json_encode( array("status" => 'error',"error" => $this->connection-> error ));


         }
     }



         $this->connection->close();

 }

   public function deleteData($data){
    // -----  DELETE EMAILS ------
        $ids =   implode(",",$data);

      $sqlQuery = "DELETE from `mail_list` WHERE `id` IN ($ids);";

      if ($this->connection->query($sqlQuery) === TRUE) {

          header("Refresh:0"); // refresh page

      } else {

         $errorN = mysqli_errno( $this->connection);
             if (array_key_exists( $errorN , $this->sqlErrors )) {

              echo  json_encode( array("status" => 'error',"error" => $this->sqlErrors[$errorN] ));

            } else {
              echo   json_encode( array("status" => 'error',"error" => $this->connection-> error ));

          }
      }

          $this->connection->close();


   }

}
