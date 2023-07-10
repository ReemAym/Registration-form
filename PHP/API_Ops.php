<?php
$q = $_REQUEST["q"];
$m =$_REQUEST["w"];
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=$m&day=$q",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
        "X-RapidAPI-Key: 59eda76616mshd4465ff2df7257fp1050acjsnb4d61d24f1be"
    ],
]);

$response = curl_exec($curl);
$actors=explode(",", $response);
$err = curl_error($curl);
curl_close($curl);
$curl1 = curl_init();


echo '[';
foreach ($actors as $act) {
    $id = substr($act, 7, -2);

    curl_setopt_array($curl1, [
        CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=$id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
            "X-RapidAPI-Key: 59eda76616mshd4465ff2df7257fp1050acjsnb4d61d24f1be"
        ],
    ]);
    $response1 = curl_exec($curl1);
    $start = '"name":';
    $end = ',"birthDate"';

    $start_pos = strpos($response1, $start);
    $end_pos = strpos($response1, $end);
    $substring = substr($response1, $start_pos + 8, $end_pos - $start_pos - 9);
    if ($substring != "")
        echo $substring . " ,<br>";
}
echo ']';
curl_close($curl1);