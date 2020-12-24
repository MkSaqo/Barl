<?php
$url = "https://img6.eadaily.com/r650x400/o/56c/86a43fd350915916e674fb21a9f8f.jpeg";
function test_input($data){
  $data = str_replace(['/', "\\", "`", "'", '"'], "", $data);
  $data = htmlspecialchars($data);
  return $data;
}
$conn = [];
$db = mysqli_connect("localhost", 'root', 'Root.1234', "Filmer");

if (isset($_POST['q'])) {
  $sql = 'SELECT `name` FROM `kinoner` WHERE `name` LIKE "%' . $_POST['q'] . '%" LIMIT 5;';
  $q = mysqli_query($db, $sql);
  while ($a = mysqli_fetch_assoc($q)) {
    $conn[] = $a['name'];
  }
  echo json_encode($conn);
} elseif (isset($_POST['removeId'])) {
  $sql = "DELETE FROM `barl` WHERE `id` = " . $_POST['removeId'] . ";";
  if (mysqli_query($db, $sql)) {
    echo "removed";
  }
} elseif (isset($_POST["dataAdd"]) || isset($_POST["editData"])) {

  if (isset($_FILES['zakrDoc']['name'])) {

    if ($_FILES['zakrDoc']['name'] != "") {
      $zakrDoc = "../files/" . $_FILES['zakrDoc']['name'];
      move_uploaded_file($_FILES['zakrDoc']['tmp_name'], $zakrDoc);
    }
    if ($_FILES['zakrDoc']['name'] == "") $zakrDoc = $_POST['zakrDoc1'];

  } else $zakrDoc = $url;
  if (isset($_FILES['dogFile']['name'])) {
    if ($_FILES['dogFile']['name'] != "") {
      $dogFile = "../files/" . $_FILES['dogFile']['name'];
      move_uploaded_file($_FILES['dogFile']['tmp_name'], $dogFile);
    }
    if ($_FILES['dogFile']['name'] == "") $dogFile = $_POST['dogFile1'];
  } else $dogFile = $url;
  if (isset($_FILES['schotFile']['name']) ) {
    if ($_FILES['schotFile']['name'] != "") {
      $schotFile = "../files/" . $_FILES['schotFile']['name'];
      move_uploaded_file($_FILES['schotFile']['tmp_name'], $schotFile);
    }
    if ($_FILES['schotFile']['name'] == "") $schotFile = $_POST['schotFile1'];
  } else $schotFile = $url;


  $nomer = isset($_POST['nomer']) ? test_input($_POST['nomer']) : "1";
  $stati = isset($_POST['stati']) ? test_input($_POST['stati']) : "1";
  $categorii = isset($_POST['categorii']) ? test_input($_POST['categorii']) : "1";
  $datepicker = isset($_POST['datepicker']) ? test_input($_POST['datepicker']) : "0";
  $customRadio = isset($_POST['customRadio']) ? test_input($_POST['customRadio']) : "0";
  $proshuOpl = isset($_POST['proshuOpl']) ? test_input($_POST['proshuOpl']) : "0";
  $summu = isset($_POST['summu']) ? test_input($_POST['summu']) : "0";
  $sUchNDS = isset($_POST['sUchNDS']) ? test_input($_POST['sUchNDS']) : "0";
  $cont1Sel = isset($_POST['cont1Sel']) ? test_input($_POST['cont1Sel']) : "0";
  $nazvPlat = isset($_POST['nazvPlat']) ? test_input($_POST['nazvPlat']) : "0";
  $avansRad = isset($_POST['avansRad']) ? test_input($_POST['avansRad']) : "0";
  $tokos = isset($_POST['tokos']) ? test_input($_POST['tokos']) : "0";
  $kodStati = isset($_POST['kodStati']) ? test_input($_POST['kodStati']) : "0";
  $inn = isset($_POST['inn']) ? test_input($_POST['inn']) : "0";
  $statPlat = isset($_POST['statPlat']) ? test_input($_POST['statPlat']) : "0";
  $pc = isset($_POST['pc']) ? test_input($_POST['pc']) : "0";
  $oktmo = isset($_POST['oktmo']) ? test_input($_POST['oktmo']) : "0";
  $korSchot = isset($_POST['korSchot']) ? test_input($_POST['korSchot']) : "0";
  $kbk = isset($_POST['kbk']) ? test_input($_POST['kbk']) : "0";
  $bank = isset($_POST['bank']) ? test_input($_POST['bank']) : "0";
  $bic = isset($_POST['bic']) ? test_input($_POST['bic']) : "0";
  $bic1 = isset($_POST['bic1']) ? test_input($_POST['bic1']) : "0";
  $bic2 = isset($_POST['bic2']) ? test_input($_POST['bic2']) : "0";
  $poOsnPlat = isset($_POST['poOsnPlat']) ? test_input($_POST['poOsnPlat']) : "0";
  $ufc = isset($_POST['ufc']) ? test_input($_POST['ufc']) : "off";
  $PokTipPlat = isset($_POST['PokTipPlat']) ? test_input($_POST['PokTipPlat']) : "0";
  $datepicker1 = isset($_POST['datepicker1']) ? test_input($_POST['datepicker1']) : "0";
  $datepicker2 = isset($_POST['datepicker2']) ? test_input($_POST['datepicker2']) : "0";
  $etap = isset($_POST['etap']) ? test_input($_POST['etap']) : "0";
  if (isset($_POST["dataAdd"])) {
    $sql = "INSERT INTO `barl`
        (`nomer`, `datepicker`, `customRadio`,
         `proshuOpl`, `summu`, `sUchNDS`, `cont1Sel`,
          `nazvPlat`, `avansRad`, `tokos`, `kodStati`,
           `inn`, `statPlat`, `pc`, `oktmo`, `korSchot`,
            `kbk`, `bank`, `bic`, `poOsnPlat`, `ufc`,
             `PokTipPlat`, `bic1`, `datepicker1`, `etap`,
              `dogFile`, `datepicker2`, `schotFile`, `zakrDoc`,`bic2`,`stati`,`categorii`)
               VALUES
               ('$nomer','$datepicker','$customRadio','$proshuOpl',
               '$summu','$sUchNDS','$cont1Sel','$nazvPlat','$avansRad',
               '$tokos','$kodStati','$inn','$statPlat','$pc','$oktmo',
               '$korSchot','$kbk','$bank','$bic','$poOsnPlat','$ufc',
               '$PokTipPlat','$bic1','$datepicker1','$etap','$dogFile',
               '$datepicker2','$schotFile','$zakrDoc','$bic2','$stati','$categorii');";
  } elseif (isset($_POST["editData"])) {
    $sql = "UPDATE
    `barl`
  SET
    `nomer` = '$nomer',`datepicker` = '$datepicker',
    `customRadio` = '$customRadio',`proshuOpl` = '$proshuOpl',
    `summu` = '$summu',`sUchNDS` = '$sUchNDS',
    `cont1Sel` = '$cont1Sel',`nazvPlat` = '$nazvPlat',
    `avansRad` = '$avansRad',`tokos` = '$tokos',
    `kodStati` = '$kodStati',`inn` = '$inn',
    `statPlat` = '$statPlat',`pc` = '$pc',
    `oktmo` = '$oktmo',`korSchot` = '$korSchot',
    `kbk` = '$kbk',`bank` = '$bank',
    `bic` = '$bic',`poOsnPlat` = '$poOsnPlat',
    `ufc` = '$ufc',`PokTipPlat` = '$PokTipPlat',
    `bic1` = '$bic1',`datepicker1` = '$datepicker1',
    `etap` = '$etap',`dogFile` = '$dogFile',
    `datepicker2` = '$datepicker2',`schotFile` = '$schotFile',
    `zakrDoc` = '$zakrDoc',
    `bic2` = '$bic2',
    `stati` = '$stati',
    `categorii` = '$categorii'
  WHERE
    `id` = $_POST[id];";
  }
  if (mysqli_query($db, $sql)) {
    header("Location: index.php");
  } else {
    header("location: 404.php");
  }
}
