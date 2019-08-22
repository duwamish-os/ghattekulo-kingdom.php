<?php

function cache_http_client($method = "GET"){
    $http = curl_init();
    curl_setopt($http, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($http, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($http, CURLOPT_HTTPHEADER, array(
        'api-secret: test' 
    ));
    return $http;
}

$http = cache_http_client();
curl_setopt($http, CURLOPT_URL, "https://jsonplaceholder.typicode.com/users");

$result = curl_exec($http);
$httpcode = curl_getinfo($http, CURLINFO_HTTP_CODE);
curl_close($http);

echo $httpcode . "\n";
$r = json_decode($result);
echo "users: ". $r[0]->id;
?>
