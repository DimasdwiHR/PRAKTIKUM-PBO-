<?php

interface Kendaraan {
    public function bergerak();
}

class Mobil implements Kendaraan {
    public function bergerak() {
        echo "Mobil bergerak di jalan raya.";
    }
}

class Pesawat implements Kendaraan {
    public function bergerak() {
        echo "Pesawat terbang di udara.";
    }
}

$mobil = new Mobil();
$mobil->bergerak(); // Output: Mobil bergerak di jalan raya.

echo "<br>";

$pesawat = new Pesawat();
$pesawat->bergerak(); // Output: Pesawat terbang di udara.

?>



<?php

abstract class Hewan {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function bersuara();
}

class Kucing extends Hewan {
    public function bersuara() {
        return "Meong!";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        return "Guk!";
    }
}

$kucing = new Kucing("Kitty");
echo $kucing->bersuara(); // Output: Meong!

echo "<br>";

$anjing = new Anjing("Buddy");
echo $anjing->bersuara(); // Output: Guk!

?>







<?php

interface Transportasi {
    public function bergerak();
}

abstract class Kendaraan implements Transportasi {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function bergerak();
}

class Mobil extends Kendaraan {
    public function bergerak() {
        echo "$this->nama bergerak di jalan raya.";
    }
}

class Pesawat extends Kendaraan {
    public function bergerak() {
        echo "$this->nama terbang di udara.";
    }
}

$mobil = new Mobil("Toyota"); // Corrected: using = to assign the object
$mobil->bergerak(); // Output: Toyota bergerak di jalan raya.

echo "<br>";

$pesawat = new Pesawat("Boeing 737"); // Corrected: using = to assign the object
$pesawat->bergerak(); // Output: Boeing 737 terbang di udara.
?>








<?php

// Interface Peralatan Elektronik
interface PeralatanElektronik {
    public function nyalakan();
    public function matikan();
}

// Class Televisi yang mengimplementasikan interface PeralatanElektronik
class Televisi implements PeralatanElektronik {
    private $merk;

    public function __construct($merk) {
        $this->merk = $merk;
    }

    public function nyalakan() {
        echo "Televisi $this->merk dinyalakan.<br>";
    }

    public function matikan() {
        echo "Televisi $this->merk dimatikan.<br>";
    }
}

// Class Kulkas yang mengimplementasikan interface PeralatanElektronik
class Kulkas implements PeralatanElektronik {
    private $merk;

    public function __construct($merk) {
        $this->merk = $merk;
    }

    public function nyalakan() {
        echo "Kulkas $this->merk dinyalakan.<br>";
    }

    public function matikan() {
        echo "Kulkas $this->merk dimatikan.<br>";
    }
}

// Pengujian
$tv = new Televisi("Samsung");
$tv->nyalakan(); // Output: Televisi Samsung dinyalakan.
$tv->matikan(); // Output: Televisi Samsung dimatikan.

echo "<br>";

$kulkas = new Kulkas("LG");
$kulkas->nyalakan(); // Output: Kulkas LG dinyalakan.
$kulkas->matikan(); // Output: Kulkas LG dimatikan.

?>






<?php

// Abstract class Pegawai
abstract class Pegawai {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function tampilkanGaji();
}

// Subclass Manager yang mengimplementasikan method tampilkanGaji()
class Manager extends Pegawai {
    private $gaji;

    public function __construct($nama, $gaji) {
        parent::__construct($nama);
        $this->gaji = $gaji;
    }

    public function tampilkanGaji() {
        echo "Manager $this->nama memiliki gaji: $this->gaji.<br>";
    }
}

// Subclass Programmer yang mengimplementasikan method tampilkanGaji()
class Programmer extends Pegawai {
    private $gaji;

    public function __construct($nama, $gaji) {
        parent::__construct($nama);
        $this->gaji = $gaji;
    }

    public function tampilkanGaji() {
        echo "Programmer $this->nama memiliki gaji: $this->gaji.<br>";
    }
}

// Pengujian
$manager = new Manager("John", 15000000);
$manager->tampilkanGaji(); // Output: Manager John memiliki gaji: 15000000.

$programmer = new Programmer("Jane", 10000000);
$programmer->tampilkanGaji(); // Output: Programmer Jane memiliki gaji: 10000000.

?>
