<?php

// Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi(perulangan) ke semua properties yang terdapat di object tersebut
// hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object
// secara default, hanya property yang public yang bisa diakses

class Family implements IteratorAggregate {
    public string $namaAyah = "Mahasiswa";
    public string $namaIbu = "Cahaya Bulan";
    protected string $anakPertama = "Fahru Rizal";
    private string $anakKedua = "Nurul Fajril Ilmah";

    // function dibawah ini function abstract dari interface
    public function getIterator()
    {
        $array = [
            "Ayah" => $this->namaAyah,
            "Ibu" => $this->namaIbu,
            "Anak Pertama" => $this->anakPertama,
            "Anak Kedua" => $this->anakKedua
        ];     
        return new ArrayIterator($array);        
    }
}

// kita dapat menampilkan nilai dari property dengan menggunakan iterasi
// tetapi kita hanya dapat mengakses property yang memiliki visibility public
// Karena iterasi foreach kita lakukan secara otomatis kita juga dapat melakukannya secara manual
// Dengan menggunakan Iterator
// Iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat iterator secara manual cukup ribet
// Opsi lain yang dapat kita gunakan adalah ArrayIterator iterator ini menggunakan data array sebagai data iterasinya
// Kita bisa menggunakan interface IteratorAggregate
// Dengan menggunakan cara ini kita dapat mengakses property yang berkunci private dan protected
$data = new Family();
foreach($data as $property => $value){
    echo "$property : $value" . PHP_EOL;
}