<?php
class BankAccount {
    private $pemilik;
    private $saldo;
    
    // Konstruktor unyuk inisialisasi akun
    public function __construct($pemilik,$saldoAwal) {
        $this->pemilik = $pemilik;
        $this->saldo = $saldo;
}

// Metode untuk menambah saldo
public function deposit($jumlah) {
    if ($jumlah > 0) {
        $this->saldo += $jumlah;
        echo "Deposit berhasil! saldo saat ini : Rp". Number_format($this->saldo, 2) . "<br>";
    } else {
        echo "Jumlah deposit harus lebih dariRp 0!<br>";
    }
}

// Metode untuk menarik saldo 
public function withdraw($jumlah) {
    if ($jumlah > $this->saldo) {
        echo "Jumlah penarikan harus lebih dari Rp 0!<br>";
    } else {
        $this->saldo -= $jumlah;
        echo "Penarikan berhasil! saldo saat ini: Rp " . number_format($this->saldo, 2) . "<br>";
    }
}

// Metode untuk mendapatkan saldo saat ini
public function getsaldo() {
    return "Saldo saat ini untuk " . $this->pemilik . ": Rp " . number_format($this->saldo, 2) . "<br>";
    }
}

// Membuat objek akun bank
$akun1 = new BankAccount("Budi Santoso", 5000000);

// Menampilkan saldo awal
echo $akun1->getSaldo();

// Melakukan deposit
$akun->deposit(2000000);

// Melakukan penarikan
$akun1->withdraw(3000000);
$akun1->withdraw(5000000); // Ini akan gagal karena saldo tidak cukup

// Menampilkan saldo setelah transaksi
echo $akun1->getSaldo();

// Akses langsung ke saldo akan error karena saldo bersifat private
// echo $akun1->saldo; // ERROR : Cannot access private property
?>








<?php

class Produk {

    public $nama;

    
    public function __construct($nama) {
        $this->nama = $nama;
    }

   
    public function tampilkanProduk() {
        return "Nama Produk: $this->nama";
    }

}


$produk = new Produk("Laptop");


echo $produk->tampilkanProduk(); // Output: Nama Produk: Laptop


echo "<br>" . $produk->nama; // Output: Laptop

?>






<?php

class Kendaraan {

    protected $merk;


    public function __construct($merk) {
        $this->merk = $merk;
    }

   
    protected function getMerk() {
        return "Merk Kendaraan: $this->merk";
    }

}

class Mobil extends Kendaraan {

  
    public function tampilkanMerk() {
        return $this->getMerk(); // Bisa diakses karena kelas Mobil adalah turunan dari Kendaraan
    }

}


$mobil = new Mobil("Toyota");

// echo $mobil->getMerk(); // ERROR: Cannot access protected method
echo $mobil->tampilkanMerk(); // Output: Merk Kendaraan: Toyota

?>









<?php

class Mahasiswa {

    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Getter untuk membaca nilai
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk mengubah nilai
    public function setNama($nama) {
        $this->nama = $nama;
    }

}

$mhs = new Mahasiswa("Budi");

echo $mhs->getNama(); // Output: Budi

$mhs->setNama("Andi");

echo $mhs->getNama(); // Output: Andi












<?php

class Mahasiswa {

    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    private function tampilkanNama() {
        return "Nama Mahasiswa: " . $this->nama; 
    }

    public function aksesNama() {
        return $this->tampilkanNama(); // Bisa diakses karena masih dalam kelas yang sama
    }

}

$mhs = new Mahasiswa("Budi"); 

// echo $mhs->tampilkanNama(); // ERROR: Cannot access private method

echo $mhs->aksesNama(); // Output: Nama Mahasiswa: Budi

?>
