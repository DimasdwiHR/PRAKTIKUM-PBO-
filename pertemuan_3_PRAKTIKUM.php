<?php
class Kendaraan {
    public $merk;
    public $tahun;

    public function __construct($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function info() {
        return "Merk: $this->merk, Tahun: $this->tahun";
    }
}

// Child class mewarisi dari Parent class
class Mobil extends Kendaraan {
    public $jumlahPintu;

    public function __construct($merk, $tahun, $jumlahPintu) {
        parent::__construct($merk, $tahun); // Memanggil constructor parent class
        $this->jumlahPintu = $jumlahPintu;
    }

    public function infoMobil() {
        return parent::info() . ", Jumlah Pintu: $this->jumlahPintu";
    }
}

$mobil = new Mobil("Toyota", 2022, 4);
echo $mobil->infoMobil();
?>




<?php

class Hewan {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function bersuara() {
        return "Hewan ini bersuara";
    }
}

class Kucing extends Hewan {
    public function bersuara() {
        return "Meong!";
    }
}

$kucing = new Kucing("Kitty");
echo $kucing->bersuara(); // Output: Meong!

?>



<?php

class Orang {
    public function sapa() {
        return "Halo, saya manusia.";
    }
}

class Guru extends Orang {
    public function sapa() {
        return "Halo, saya seorang guru.";
    }
}

$guru = new Guru();
echo $guru->sapa(); // Output: Halo, saya seorang guru.

?>




<?php

class Matematika {
    public function __call($name, $arguments) {
        if ($name == 'tambah') {
            switch (count($arguments)) {
                case 2:
                    return $arguments[0] + $arguments[1];
                case 3:
                    return $arguments[0] + $arguments[1] + $arguments[2];
                default:
                    return "Jumlah parameter tidak didukung";
            }
        }
        return "Metode tidak ditemukan";
    }
}

$hitung = new Matematika();

echo $hitung->tambah(3, 4) . "<br>"; // Output: 7
echo $hitung->tambah(2, 3, 5); // Output: 10

?>
