<?php class Mobil
{
    public $merk = '';
    public $tipe = '';
    
    public function maju () {
        echo 'Brooooommmmm...<br>';
    }
}
//membuat dan mengatur property object 1
$mobil1= new Mobil();
$mobil1->merk = 'Lamborghini';
$mobil1->tipe = 'Aventador';

//mencetak dan menjalankan method maju() object 1
echo $mobil1->merk . " " . $mobil1->tipe . " " . $mobil1->maju()."<br>";

//membuat dan mengatur property object 2
$mobil2= new Mobil();
$mobil2->merk = 'Nissan';
$mobil2->tipe = 'Skyline';

//mencetak dan menjalankan method maju() object 2
echo $mobil2->merk . " " . $mobil2->tipe . " " . $mobil2->maju();
?>
