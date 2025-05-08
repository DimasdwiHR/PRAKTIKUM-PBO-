<?php

function cetakNama(array $daftarNama) {
    foreach ($daftarNama as $nama) {
        echo $nama . PHP_EOL;
    }
}

cetakNama(['Ani', 'Budi', 'Cici']);

?>







<?php

class User {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
}

class UserService {
    
}

?>







<?php

class User {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
}

class UserService {
    public function greet(User $user): string {
        return "Hello, " . $user->name;
    }
}

$user = new User("Rommi");
$service = new UserService();

echo $service->greet($user);

?>









<?php

function tampil(?string $pesan) {
    echo $pesan ?? 'Tidak ada pesan';
}

tampil(null); 
?>










<?php

function bagi(int $a, int $b): float {
    return $a / $b;
}

?>







<?php

class Mahasiswa {
    public string $nama;
    public int $umur;

    public function __construct(string $nama, int $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }
}

?>







<?php

class Produk {
    public string $nama;
    public int $harga;

    public function __construct(string $nama, int $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }
}

class Keranjang {
    /**
     * @param Produk[] $daftarProduk
     */
    public function hitungTotal(array $daftarProduk): int {
        $total = 0;

        foreach ($daftarProduk as $produk) {
            $total += $produk->harga;
        }

        return $total;
    }
}

$keranjang = new Keranjang();

$total = $keranjang->hitungTotal([
    new Produk("Buku", 50000),
    new Produk("Pulpen", 10000),
]);

echo "Total: Rp $total";

?>

