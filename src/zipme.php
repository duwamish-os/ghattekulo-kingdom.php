<?php

$zip = new ZipArchive();
$filename = "data.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}

$zip->addFromString("data1.csv" . time(), "a,b,c,d");
$zip->addFromString("data2.csv" . time(), "e,f,g,h");
$zip->addFile("data3.csv","data3.csv");
echo "numfiles: " . $zip->numFiles . "\n";
echo "status:" . $zip->status . "\n";
$zip->close();
?>
