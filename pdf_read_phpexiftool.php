<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use PHPExiftool\Reader;
use PHPExiftool\Driver\Value\ValueInterface;

$logger = new Logger('exiftool');
$reader = Reader::create($logger);

$reader
  ->in(array('pdfs'))
  ->followSymLinks();

foreach ($reader as $data) {
    echo "found file " . $data->getFile() . PHP_EOL;

    foreach ($data as $metadata) {
        echo sprintf("\t--> Field %s has value(s) %s" . PHP_EOL, $metadata->getTag(), $metadata->getValue()->asString());
        echo '<br />';
    }
    echo '<hr />';
    echo '<br />';
}
