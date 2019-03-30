<?php

$to_file = '/tmp/archived_data.tar';

try {
    $archive = new PharData($to_file);

    $archive->addFile('music-data.csv', 'music.csv');
    $archive->addFile('movie-data.csv', 'movie.csv');

    $archive->compress(Phar::GZ);

    unset($archive);
    unlink($to_file);
} catch (Exception $e) {
    echo "Exception : " . $e;
}

?>
