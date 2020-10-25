<?

function unique_multidim_array($array, $key) {


    foreach( $array as &$value ) {
         $value['email'] = explode("@", $value['email'])[1];
    }

    $temp_array = array();
    $i = 0;
    $key_array = array();
    foreach( $array as $val ) {
        if ( ! in_array( $val[$key], $key_array ) ) {
            $key_array[$i] = $val[$key];
            $temp_array[] = $val; // <--- remove the $i
        }
        $i++;
    }
    return $temp_array;
}


function render_to_csv($array,$ids){

 // ************ RENDER TO CSV *****************

$result = array(); // result array

foreach($ids as $key => $value){ // loop
    foreach ($array as $k => $val) {
        if ($array[$k]['id'] === $value) {
           $result[$key] = $array[$k];
        }
    }
}


  $fp = fopen('emails.csv', 'w');


foreach ($result as $fields) {
   fputcsv($fp, $fields);
}

fclose($fp);

}

// ************ EMail validation *****************


function validateInput($email,$checkBox){
      $erroMsgCa = '';
      $validEmail = false;
      $erroMsgCheckbox = '';
      $validCheckbox = false;
// HTML 5 is providing email check I think  no need regex, check only fo CA domain.
// Also possible to ad pattern in html form.

  if (strtolower(explode(".",$email)[1]) === 'ca') {
    $erroMsgCa = 'We are not accepting subscriptions from Colombia';
    $validEmail = true;
  }

  if(empty($checkBox)){
    $erroMsgCheckbox = 'You must accept the terms and conditions';
    $validCheckbox = true;
   }


  return array(
    'validEmail' =>  $validEmail,
      'emailMsg' =>  $erroMsgCa,
    'validCheckbox' => $validCheckbox,
    'checkMsg' =>   $erroMsgCheckbox
  );



}
