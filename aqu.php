<?php
session_start();

if(isset($_GET['fid']) && 
   $_GET['fid'] == 'true') 
{
    $type = "id";
}

if(isset($_GET['fip']) && 
   $_GET['fip'] == 'true') 
{
    $type = "ip";
}

if(isset($_GET['fcc']) && 
   $_GET['fcc'] == 'true') 
{
    $type = "countrycode";
}

$arr = array('type' => $type);
$jsonarr = json_encode($arr);
$query = $_GET['fcont']; 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://smekker.go.ro/mekapi/ip/find/$query",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS =>$jsonarr,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$curlres = curl_exec($curl);

curl_close($curl);
$_SESSION['curlres'] = $curlres;

echo $_SESSION['curlres'];

header("Location: ../");
?>