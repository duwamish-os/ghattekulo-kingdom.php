<?php

require '/???/metal-kingdom.php/vendor/autoload.php';

use Aws\DynamoDb\DynamoDbClient;

$client = new DynamoDbClient([
    //'profile' => 'aws-work',
    'region'  => 'us-east-1',
    'version' => 'latest',
    'credentials' => [
        'key' => '???',
        'secret' => '???',
    ],
]);

$result = $client->describeTable(array(
    'TableName' => 'gigs'
));

echo $result;

?>

