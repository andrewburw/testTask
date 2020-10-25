<?php
require_once 'include/config.php';
require_once 'include/db_connect.php';
require_once 'include/separate_functions.php';
class addEmail {
    private $byString;
    private $byDomain;
    private $byDate;

    function __construct() {
        $this->byString = isset($_POST['searchstring']) ? $_POST['searchstring'] : null;
        $this->byDomain = isset($_POST['bydomains']) ? $_POST['bydomains'] : 'null';
        $this->byDate = isset($_POST['bydate']) ? $_POST['bydate'] : null;
    }
    function getData(){

      return array('string'=>   $this->byString , 'domain' => $this->byDomain , 'date'=>  $this->byDate);

    }

}
// ############### DB INIT ########################

$db = new Db($config['db']['server'], $config['db']['username'],  $config['db']['password'], $config['db']['dbname']);
$Form = new addEmail();
$dataFromForm = $Form-> getData();


  $showArrayresult = $db->showData($dataFromForm);
  $sortedOption = unique_multidim_array($showArrayresult,'email');// separate_functions.php



// ############### DELETE EMAILS ########################
if(isset($_POST['checkToDelete'])){
       $deleteByID = $_POST['deleteIs'];


      !empty($deleteByID) ? $db-> deleteData($deleteByID): '';

   }

// ############### CSV EMAILS ########################
   if(isset($_POST['checkToCsv'])){
          $saveByID = $_POST['deleteIs'];
      !empty($saveByID) ?    render_to_csv($showArrayresult,  $saveByID) : ''; // separate_functions.php

      }


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <style>
 table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
 }
 th, td {
   padding: 5px;
   text-align: left;
 }
 </style>
   <body>

     <h1>Emails Table</h1>
     <p>Please select options and press button Search and sort.</p>



 <form  action="showEmail.php" method="post" style=" display:inline;">
   <label for="fname">Search:</label>
     <input type="text" id="fname" name="searchstring">
        <label for="domains">Sort by Domains:</label>
          <select id="domains" name="bydomains" >
                    <option value='null'>-- SELECT --</option>"
                  <?

                  foreach ($sortedOption as $row)
                   echo  "<option value=".  $row['email'] . ">".  $row['email'] ."</option>";
                    ?>
          </select>

          <label for="bydate">Sort by Date:</label>
          <select id="bydate"  name="bydate" >
              <option value='desc'>Desc </option>
              <option value='asc'>Asc </option>
          </select>
           <input type="submit" value="Search and sort" style="background-color:#b2c1d3">
</form>
<br />
<br />
        <input type="submit" form="forCheckbox" value="Delete selected" name="checkToDelete" style="background-color:#b2c1d3">
<br />
<br />
        <input type="submit" form="forCheckbox" value="Save CSV" name="checkToCsv" style="background-color:#b2c1d3">
  <br />
  <br />
 <form id="forCheckbox" method="post"  action="showEmail.php">
  <table>
     <tr>
       <td>ID</td>
       <td>Email</td>
       <td>Select</td>

     </tr>

     <? foreach ($showArrayresult as $row)
      echo  "<tr><td>" . $row['id'] ."</td><td>" . $row['email'] ."</td><td><input type='checkbox'  value=" . $row['id'] . " name='deleteIs[]'  /></td></tr>  ";
       ?>


   </table>
</form>
   </body>
   </html>
