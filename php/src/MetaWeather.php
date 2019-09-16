<?php
    $API_DOMAIN = "https://www.metaweather.com/api/location";
    $CITY = "barcelona";
    
    $curl = curl_init();
    $url = sprintf("%s/%s/?%s", $API_DOMAIN, "search", http_build_query(array("query" => $CITY)));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = (string) curl_exec($curl);
    curl_close($curl);
    $result = json_decode($response, true);
    echo "City ID: " . $result[0]["woeid"] . "\n\n";

    $curl = curl_init();
    $url = sprintf("%s/%s/", $API_DOMAIN, $result[0]["woeid"]);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = (string) curl_exec($curl);
    curl_close($curl);
    $result = json_decode($response, true);
    $consolidated_weather = $result["consolidated_weather"];
    for ($i = 0; $i < count($consolidated_weather); ++$i) {
        $applicable_date = $consolidated_weather[$i]['applicable_date'];
        $weather_state_name = $consolidated_weather[$i]['weather_state_name'];
        echo $applicable_date . " -> " . $weather_state_name . "\n";
    }
?>