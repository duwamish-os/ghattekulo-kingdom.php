<?php
  copy('music-data.csv', 'compress.zlib://' . 'data.gz');
  copy('movie-data.csv', 'compress.zlib://' . 'data.gz');
?>
