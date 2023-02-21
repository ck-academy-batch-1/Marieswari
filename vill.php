<?php

$villages = array(
	"select" => array(
		"select the district"
	),
	"karur" => array(
		"Aravakurichi",
		"Kadavur",
		"Karur",
		"Krishnarayapruam",
		"KaKulithalairur",
		"Manmangalam",
		"Pugalur",
	),
	"nagapattinam" => array(
		"Kilvelur",
		"Thirukuvalai",
		"Vedaranyam",
		"Nagapattinam",
	)
);



$district = $_POST["district"];

if (!array_key_exists($district, $villages)) {
	echo json_encode(array());
	exit;
}

echo json_encode($villages[$district]);
?>
