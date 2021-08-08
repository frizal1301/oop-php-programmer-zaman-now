<?php

// Untuk membuat object bisa diiterasi kita dapat menggunakan iterator tetapi pembuatan iterator secara manual sangatlah ribet
// Di PHP terdapat fitur generator yang bisa kita gunakan u/ membuat iterator secara otomatis hanya dengan keyword yield

function getGenap($max) : Iterator {
    for($i = 1; $i <= $max; $i++) {
        if($i % 2 == 0) {
            yield $i;
        }
    }
}

foreach(getGenap(100) as $value) {
    echo "Genap $value" . PHP_EOL;
}

function getGanjil($max) : Iterator {
    $data = array();

    for($i = 1; $i <= $max; $i++) {
        if($i % 2 == 1) {
            $data[] = $i;
        }
    }

    return new ArrayIterator($data);
}

foreach(getGanjil(100) as $value) {
    echo "Ganjil $value" . PHP_EOL;
}

function pangkat($nilai, $pangkat) {
    $value = 1;
    for($i = 1; $i <= $pangkat; $i++) {
        // 3 * 3 * 3 * 3
        $value *= $nilai;
    }
    return $value;
}

echo pangkat(3, 2);
