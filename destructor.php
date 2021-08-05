<?php

// destructor adalah function yang dijalankan setelah object dihapus dari memory
// tidak boleh menambahkan parameter argument
// digunakan untuk menutup koneksi database atau menutp proses menulis file

class Orang {
    public string $nama;
    public string $alamat;

    public function __construct($name, $address)
    {
        $this->nama = $name;
        $this->alamat = $address;
    }

    public function __destruct()
    {
        echo "Object dengan nama {$this->nama} dihapus dari memory" . PHP_EOL;
    }
}

$obj1 = new Orang('Ical', 'Bone');

echo 'Program selesai' . PHP_EOL;