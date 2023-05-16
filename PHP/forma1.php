<?php
$valA = $_POST['valA'];
$valB = $_POST['valB'];
$data = array();
    $data['lasuma'] = $valA + $valB;
    $data['laresta'] = $valA - $valB;
    $data['lamultiplicacion'] = $valA * $valB;
    $data['ladivision'] = $valA / $valB;
    echo json_encode($data);
?>
