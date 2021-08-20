<?php 
/*
 Author: Chizota, Victor Chizota
 Date: 20 Aug, 2021 6:29pm
 Interview Take Home Test
*/


if(isset($argc)) {
    for($i=1; $i < $argc; $i++ ) {
        process_filename($argv[$i]);
    }
}

function process_filename($filename) {

    if(!file_exists($filename)) {
        print("No result for $filename. # Unable to open file.\n");
        return;
    }

    $file_handler = fopen($filename, 'r');

    $sum = 0;

    while(!feof($file_handler)) {
        $line = fgets($file_handler);
        $exploded_str = explode(' ', $line . ' ');
        foreach ($exploded_str as $str) 
        {
            if(is_numeric($str))
            {
                print($str. "\n");
                $sum = $sum + (float) $str;
            }
        }
    }

    fclose($file_handler);

    print("\n$filename - $sum");
}

echo("\n\n");