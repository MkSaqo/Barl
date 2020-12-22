<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
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

    // if(empty)
} elseif (isset($_POST["dataAdd"])) {
    $nomer = isset($_POST['nomer']) ? test_input($_POST['nomer']) : ".";
    $datepicker = isset($_POST['datepicker']) ? test_input($_POST['datepicker']) : ".";
    $customRadio = isset($_POST['customRadio']) ? test_input($_POST['customRadio']) : ".";
    $proshuOpl = isset($_POST['proshuOpl']) ? test_input($_POST['proshuOpl']) : ".";
    $summu = isset($_POST['summu']) ? test_input($_POST['summu']) : ".";
    $sUchNDS = isset($_POST['sUchNDS']) ? test_input($_POST['sUchNDS']) : ".";
    $cont1Sel = isset($_POST['cont1Sel']) ? test_input($_POST['cont1Sel']) : ".";
    $nazvPlat = isset($_POST['nazvPlat']) ? test_input($_POST['nazvPlat']) : ".";
    $avansRad = isset($_POST['avansRad']) ? test_input($_POST['avansRad']) : ".";
    $tokos = isset($_POST['tokos']) ? test_input($_POST['tokos']) : ".";
    $kodStati = isset($_POST['kodStati']) ? test_input($_POST['kodStati']) : ".";
    $inn = isset($_POST['inn']) ? test_input($_POST['inn']) : ".";
    $statPlat = isset($_POST['statPlat']) ? test_input($_POST['statPlat']) : ".";
    $pc = isset($_POST['pc']) ? test_input($_POST['pc']) : ".";
    $oktmo = isset($_POST['oktmo']) ? test_input($_POST['oktmo']) : ".";
    $korSchot = isset($_POST['korSchot']) ? test_input($_POST['korSchot']) : ".";
    $kbk = isset($_POST['kbk']) ? test_input($_POST['kbk']) : ".";
    $bank = isset($_POST['bank']) ? test_input($_POST['bank']) : ".";
    $bic = isset($_POST['bic']) ? test_input($_POST['bic']) : ".";
    $poOsnPlat = isset($_POST['poOsnPlat']) ? test_input($_POST['poOsnPlat']) : ".";
    $ufc = isset($_POST['ufc']) ? test_input($_POST['ufc']) : ".";
    $PokTipPlat = isset($_POST['PokTipPlat']) ? test_input($_POST['PokTipPlat']) : ".";
    $bic1 = isset($_POST['bic1']) ? test_input($_POST['bic1']) : ".";
    $datepicker1 = isset($_POST['datepicker1']) ? test_input($_POST['datepicker1']) : ".";
    $etap = isset($_POST['etap']) ? test_input($_POST['etap']) : ".";
    $dogFile = isset($_POST['dogFile']) ? test_input($_POST['dogFile']) : ".";
    $datepicker2 = isset($_POST['datepicker2']) ? test_input($_POST['datepicker2']) : ".";
    $schotFile = isset($_POST['schotFile']) ? test_input($_POST['schotFile']) : ".";
    $zakrDoc = isset($_POST['zakrDoc']) ? test_input($_POST['zakrDoc']) : ".";
    $sql = "INSERT INTO `barl`
        (`nomer`, `datepicker`, `customRadio`,
         `proshuOpl`, `summu`, `sUchNDS`, `cont1Sel`,
          `nazvPlat`, `avansRad`, `tokos`, `kodStati`,
           `inn`, `statPlat`, `pc`, `oktmo`, `korSchot`,
            `kbk`, `bank`, `bic`, `poOsnPlat`, `ufc`,
             `PokTipPlat`, `bic1`, `datepicker1`, `etap`,
              `dogFile`, `datepicker2`, `schotFile`, `zakrDoc`)
               VALUES
               ('$nomer','$datepicker','$customRadio','$proshuOpl',
               '$summu','$sUchNDS','$cont1Sel','$nazvPlat','$avansRad',
               '$tokos','$kodStati','$inn','$statPlat','$pc','$oktmo',
               '$korSchot','$kbk','$bank','$bic','$poOsnPlat','$ufc',
               '$PokTipPlat','$bic1','$datepicker1','$etap','$dogFile',
               '$datepicker2','$schotFile','$zakrDoc');";
    
    if(mysqli_query($db, $sql)){
        // echo "true";
        header("Location: index.php");
    }
    else{
        header("location: 404.php");

    }
}
// print_r($sql);


// echo json_encode($conn);
