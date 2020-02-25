<?php
header('Access-Control-Allow-Origin: *');


$uid = $_GET['uid'];
// var_dump($uid);
$sub_id = $_GET['subid'];
$client = 'gentingbet';
// var_dump($sub_id);
// echo $uid;
// echo $sub_id;
//
if(!empty($sub_id)) :
// var_dump('ok');
  $servername = 'localhost';
  $dbname = 'admin_attr';
  $username = '_usr_ttth_attr';
  $password = 'l4!Tdx73)$L2!@NB';

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO mc_attribution (uid, sub_id, client, date_created)
      VALUES ('$uid', '$sub_id', '$client', NOW())";

      var_dump($sql);
      // use exec() because no results are returned
      $conn->exec($sql);

      $result = true;

      // echo "New record created successfully";
      }
  catch(PDOException $e)
      {
      echo $sql . "<br>" . $e->getMessage();
      }


// if ($result) {
//
// $endpoint_url = "http://clients.tomorrowtth.com/latest-betting-sites?".$sub_id;
// // $endpoint_url = "http://sspx-router.adnxs.net/sspx?id=1144532&sspdata=".$sub_id;
// var_dump($endpoint_url);
// // echo "success!" . $endpoint_url;
//
// }

endif;
// $subId =  parse_url($endpoint_url, PHP_URL_QUERY);
// var_dump($subId);
// $sub_id_redirect = parse_url($endpoint_url, PHP_URL_QUERY);
// $redirect_url = 'https://ads2.williamhill.com/redirect.aspx?bid=1487417159&lpid=1487413840&pid=191292537&redirectURL=https%3A%2F%2Fstatic.williamhill.com%2Fsport%2Fbetting%2Fw40%2F';
// $new_redirect = str_replace("&redirectURL", "&subid=" . $sub_id . "&redirectURL",$redirect_url);
// // var_dump($new_redirect);
// header("Location: $new_redirect");
?>
