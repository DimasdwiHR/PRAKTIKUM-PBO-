<?php
class Kalkulator {
    
    public function tambah(int a,int b) {
        return a + b;
    }

    public function tambahTiga(int a, int b, int c) {
        return a + b + c;
    }
}
?>




<?php

class Kendaraan {
    public function bergerak() {
        return "Kendaraan bergerak";
    }
}

class Mobil extends Kendaraan {
    public function bergerak() {
        return "Mobil berjalan di jalan raya";
    }
}

class Pesawat extends Kendaraan {
    public function bergerak() {
        return "Pesawat terbang di udara";
    }
}

// Implementasi polimorfisme
$kendaraan1 = new Mobil();
$kendaraan2 = new Pesawat();

echo $kendaraan1->bergerak(); // Output: Mobil berjalan di jalan raya
echo "<br>";
echo $kendaraan2->bergerak(); // Output: Pesawat terbang di udara

?>





<?php

class Hewan {
    public function bersuara() {
        echo "Hewan bersuara\n";
    }
}

class Kucing extends Hewan {
    public function bersuara() {
        echo "Meow!\n";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        echo "Guk guk!\n";
    }
}

$hewan1 = new Hewan();
$hewan2 = new Kucing();
$hewan3 = new Anjing();

$hewan1->bersuara(); // Output: Hewan bersuara
$hewan2->bersuara(); // Output: Meow!
$hewan3->bersuara(); // Output: Guk guk!

?>






<?php

interface Hewan {
    public function bersuara();
}

class Kucing implements Hewan {
    public function bersuara() {
        return "Meong";
    }
}

class Anjing implements Hewan {
    public function bersuara() {
        return "Guk guk";
    }
}

// Implementasi polimorfisme dengan interface
$hewan1 = new Kucing();
$hewan2 = new Anjing();

echo $hewan1->bersuara(); // Output: Meong
echo "<br>";
echo $hewan2->bersuara(); // Output: Guk guk

?>






<?php

class Pegawai {
    public function getGaji() {
        return "Gaji pegawai umum";
    }
}

class Manager extends Pegawai {
    public function getGaji() {
        return "Gaji manager lebih besar";
    }
}

class Programmer extends Pegawai {
    public function getGaji() {
        return "Gaji programmer tergantung pengalaman";
    }
}

// Dynamic Binding
function cetakGaji(Pegawai $pegawai) {
    echo $pegawai->getGaji() . "<br>";
}

$pegawai1 = new Manager();
$pegawai2 = new Programmer();

cetakGaji($pegawai1); // Output: Gaji manager lebih besar
cetakGaji($pegawai2); // Output: Gaji programmer tergantung pengalaman

?>
