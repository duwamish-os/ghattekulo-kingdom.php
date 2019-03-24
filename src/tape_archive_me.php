<?php

try {
    $archive = new PharData('archived_data.tar');

    $archive->addFile('music-data.csv');
    $archive->addFile('movie-data.csv');

    $archive->compress(Phar::GZ);

    unset($archive);
    unlink('archived_data.tar');
} catch (Exception $e) {
    echo "Exception : " . $e;
}

?>
