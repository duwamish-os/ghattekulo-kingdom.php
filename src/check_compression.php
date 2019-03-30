<?php

//phpinfo();

function gzuncompress_crc32($data) {
     $f = tempnam('/tmp', 'gz_fix');
     file_put_contents($f, "\x1f\x8b\x08\x00\x00\x00\x00\x00" . $data);
     return file_get_contents('compress.zlib://' . $f);
}

function get_zip_type($content) {
        if (mb_strpos($content , "\x1f" . "\x8b" . "\x08") === 0) {
            return "encode";
        }
        
	try {
         if (gzuncompress($content) !== false) {
            return "compress";
         }
	} catch (Exception $e) {
	    echo $e->getMessage();
            return false;
	}
	
	return false;
}

$is_c = get_zip_type("hello");

echo "=======";
echo $is_c;
echo "=======";

//
$compressed = gzencode('upd', 9);
echo "\r\ngnu-zip: ". $compressed. "\r\n";

$zlib_compressed = gzcompress('upd', 9);
echo "zlib: ". $zlib_compressed. "\r\n";
echo "zlib uncompress: ". gzuncompress($zlib_compressed). "\r\n";

echo gzuncompress("{hello}");

echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~";
echo get_zip_type($compressed);
?>
