<?php
$row = 1;
if (($handle = fopen("csv/address.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
//            echo $data[$c] ."\n";
// . "<br />\n";
            // if ($data[$c] === 'Ontario'){
                echo $data[$c] . "<br />\n";
            
        }
    }
    fclose($handle);
}



