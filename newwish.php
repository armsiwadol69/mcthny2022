<?php
header('Content-Type: text/html; charset=utf-8');

if (empty($_POST["name"])) {
  header('Location: index.php');
  exit(0);
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

include 'conn.php';
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

date_default_timezone_set("Asia/Bangkok");
echo date_default_timezone_get();
$Gen_id = generateRandomString($length = 10);


$order   = array("\r\n", "\n", "\r");
$replace = '<br />';

$pre_textwish = str_replace($order, $replace, $_POST["wishtext"]);
$timesub = date("Y-m-d H:i:s");
$id = mysqli_real_escape_string($conn,$Gen_id);
$name = mysqli_real_escape_string($conn,$_POST["name"]);
$wishtext = mysqli_real_escape_string($conn,$pre_textwish);
$card = mysqli_real_escape_string($conn,$_POST["card"]);
$gift = mysqli_real_escape_string($conn,$_POST["gift"]);
$tag = mysqli_real_escape_string($conn,$_POST["tag"]);
// $url = $_POST["url"];
//mysqli_real_escape_string($conn,$_POST["std4"]);
echo $timesub;
echo $id;
echo $name;
echo $wishtext;
echo $card;
echo $gift;
echo $tag;



    if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}

$sql = "INSERT INTO all_wish(id,name,textwish,card,gift,timesub,tag)
VALUES('$id','$name','$wishtext','$card','$gift','$timesub','$tag')";
$query = mysqli_query($conn,$sql);
echo "your data was submitted!";

//echo "back to home in 3 sec.";
header('Location: view.php?id='.$id);
exit(0);
?>
