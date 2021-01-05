<?php

$data = [];

$fartilizers = $_POST["fartilizer_name"];
foreach ($fartilizers as $key => $ftId) {
    $data[] = [
        "fartilizer_id" => $ftId,
        "use_per_bigha" => $_POST["f_use_per_bigha"][$key],
        "use_per_hecktor" => $_POST["f_use_per_hector"][$key],
        "use_per_shotangsho" => $_POST["f_use_per_shotangsho"][$key]
    ];
}
$finalFartilizer = json_encode($data);

$name = $_GET['name'];

$query6 = "INSERT INTO crops(name,descriptins,crops_type, use_fartilizer ) values($name, $description, $crops_type, $finalFartilizer)";