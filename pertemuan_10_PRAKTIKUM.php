<?php

class Mahasiswa {
    public $nama;
    public $umur;

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }
}

// Membuat objek
$mhs = new Mahasiswa("Andi", 20);

// Serialisasi objek dan simpan ke file
$data = serialize($mhs);
file_put_contents("mahasiswa.txt", $data);

echo "Objek telah disimpan ke file.\n";
?>










<?php

// Membaca data dari file
$data = file_get_contents("mahasiswa.txt");
$mhs_baca = unserialize($data);

// Menampilkan data objek
echo "Nama: " . $mhs_baca->nama . "\n";
echo "Umur: " . $mhs_baca->umur . "\n";

?>











<?php

class Produk {
    public $nama, $harga, $stok;

    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }
}

$produk1 = new Produk("Laptop", 10000000, 5);
$produk2 = new Produk("Mouse", 150000, 20);

// Simpan array objek ke file
$produk_list = [$produk1, $produk2];
file_put_contents("produk.txt", serialize($produk_list));

// Baca dan tampilkan
$data = unserialize(file_get_contents("produk.txt"));

foreach ($data as $p) {
    echo "Nama: {$p->nama}, Harga: Rp" . number_format($p->harga, 0, ',', '.') . ", Stok: {$p->stok}\n";
}

?>
