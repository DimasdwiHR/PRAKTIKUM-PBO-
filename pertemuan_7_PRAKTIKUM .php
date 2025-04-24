<?php

// Interface: untuk mencetak laporan
interface Laporan
{
    public function cetakLaporan();
}

// Abstract Class: Pelanggan
abstract class Pelanggan implements Laporan
{
    protected $id;
    protected $nama;
    protected $jumlah_kwh;

    public function __construct($id, $nama)
    {
        $this->id = $id;
        $this->nama = $nama;
    }

    // Method Chaining
    public function setJumlahKwh($jumlah_kwh)
    {
        $this->jumlah_kwh = $jumlah_kwh;
        return $this;
    }

    public function getNama()
    {
        return $this->nama;
    }

    // Abstraksi
    abstract public function hitungTagihan();
}

// Subclass 1: PelangganRumahTangga
class PelangganRumahTangga extends Pelanggan
{
    private $tarif_per_kwh = 1500;

    public function hitungTagihan()
   {
     return $this->jumlah_kwh * $this->tarif_per_kwh;
   }
   
   
   public function cetakLaporan()
    {
        echo "Pelanggan Rumah Tangga: {$this->nama}, Tagihan: Rp " . number_format($this->hitungTagihan(), 0, ',', '.') . "<br>";
    }
}

// Subclass: PelangganBisnis
class PelangganBisnis extends Pelanggan
{
    private $tarif_per_kwh = 2500;
    private $biaya_admin = 60000;

    public function hitungTagihan()
    {
        return ($this->jumlah_kwh * $this->tarif_per_kwh) + $this->biaya_admin;
    }

    public function cetakLaporan()
    {
        echo "Pelanggan Bisnis: {$this->nama}, Tagihan: Rp " . number_format($this->hitungTagihan(), 0, ',', '.') . "<br>";
    }

    // Method Overloading (simulasi) dengan parameter opsional
    public function cetakDetail($showAdmin = false)
    {
        echo "Nama: {$this->nama}, Tagihan: Rp " . number_format($this->hitungTagihan(), 0, ',', '.');

        if ($showAdmin) {
            echo " (termasuk biaya admin Rp " . number_format($this->biaya_admin, 0, ',', '.') . ")";
        }

        echo "<br>";
    }
}

// Polimorfisme / Dynamic Binding
function prosesLaporanTagihan(Pelanggan $pelanggan)
{
  
  $pelanggan->cetakLaporan(); // Dynamic binding
}


// ---------------------
// Testing program
// ---------------------

$pelanggan1 = new PelangganRumahTangga("P001", "Rina");
$pelanggan2 = new PelangganBisnis("P002", "Toko ABC");

// Method chaining
$pelanggan1->setJumlahKwh(100);
$pelanggan2->setJumlahKwh(200);

// Polimorfisme
prosesLaporanTagihan($pelanggan1);
prosesLaporanTagihan($pelanggan2);

// Simulasi overloading
$pelanggan2->cetakDetail(true);