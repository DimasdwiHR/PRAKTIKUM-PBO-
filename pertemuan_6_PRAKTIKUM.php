<?php

class Mobil {
    private $kecepatan = 0;
    private $bahanBakar = 100;

   
    public function tambahKecepatan($nilai) {
        $this->kecepatan += $nilai; 
        echo "Kecepatan bertambah menjadi ($this->kecepatan) km/jam.<br>";
    }


    public function kurangiKecepatan($nilai) {
        $this->kecepatan -= $nilai; 
        echo "Kecepatan berkurang menjadi ($this->kecepatan) km/jam.<br>";
    }

    
    public function isiBahanBakar($nilai) {
        $this->bahanBakar += $nilai; 
        if ($this->bahanBakar > 100) {
            $this->bahanBakar = 100; 
        }
        echo "Bahan bakar bertambah menjadi ($this->bahanBakar)%.<br>";
    }
}

// Penggunaan tanpa method chaining
$mobil = new Mobil(); 
$mobil->tambahKecepatan(20); 
$mobil->kurangiKecepatan(5); 
$mobil->isiBahanBakar(10); 

?>









<?php

class Mobil {

    private $kecepatan = 0; 
    private $bahanBakar = 100; 
    
    public function tambahKecepatan($nilai) {
        $this->kecepatan += $nilai; 
        echo "Kecepatan bertambah menjadi ($this->kecepatan) km/jam.<br>";
        return $this; 
    }

  
    public function kurangiKecepatan($nilai) {
        $this->kecepatan -= $nilai; 
        echo "Kecepatan berkurang menjadi ($this->kecepatan) km/jam.<br>";
        return $this; 
    }

   
    public function isiBahanBakar($nilai) {
        $this->bahanBakar += $nilai; 
        echo "Bahan bakar bertambah menjadi ($this->bahanBakar)%.<br>";
        return $this; 
    }

}

// Penggunaan method chaining
$mobil = new Mobil(); 
$mobil->tambahKecepatan(20) 
      ->kurangiKecepatan(5)
      ->isiBahanBakar(10);  
      
?>






<?php

class User {

    private $nama; 
    private $email;
    private $role;  

   
    public function setNama($nama) {
        $this->nama = $nama;
        return $this;
    }

    
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

   
    public function setRole($role) {
        $this->role = $role;
        return $this; 
    }

   
    public function tampilkanInfo() {
        echo "Nama: {$this->nama}, Email: {$this->email}, Role: {$this->role}<br>";
        return $this; 
    }

}

// Penggunaan method chaining
$user = new User(); 
$user->setNama("Rommi")
     ->setEmail("rommi@example.com")
     ->setRole("Admin")
     ->tampilkanInfo(); 

?>
