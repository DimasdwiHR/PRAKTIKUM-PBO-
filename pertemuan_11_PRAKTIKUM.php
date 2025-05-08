<?php

class Logger
{
    public function log($msg)
    {
        echo "Log: $msg\n";
    }
}

class FileManager extends Logger
{
    // Tambahkan metode khusus FileManager jika diperlukan
}

class UserManager extends Logger
{
    // Tambahkan metode khusus UserManager jika diperlukan
}










<?php

class BaseClass
{
    public function baseMethod()
    {
        echo "Base method\n";
    }
}

// Kelas logger
class Logger
{
    public function log($msg)
    {
        echo "Log: $msg\n";
    }
}

// PHP tidak mendukung pewarisan ganda, jadi kita bisa menggunakan TRAIT untuk menggabungkan perilaku
trait LoggerTrait
{
    public function log($msg)
    {
        echo "Log: $msg\n";
    }
}

// FileManager mewarisi BaseClass dan menggunakan trait Logger
class FileManager extends BaseClass
{
    use LoggerTrait;

    // Tambahkan metode lain jika diperlukan
}

// Contoh penggunaan
$fileManager = new FileManager();
$fileManager->baseMethod();  // Output: Base method
$fileManager->log("File saved.");  // Output: Log: File saved.

?>














<?php


class BaseClass
{
    public function baseMethod()
    {
        echo "Base method\n";
    }
}

// Kelas Logger (tidak digunakan langsung, bisa dihapus jika hanya menggunakan trait)
class Logger
{
    public function log($msg)
    {
        echo "Log: $msg\n";
    }
}

// Trait LoggerTrait digunakan untuk menambahkan fungsi log
trait LoggerTrait
{
    public function log($msg)
    {
        echo "Log: $msg\n";
    }
}

// FileManager mewarisi BaseClass dan menggunakan LoggerTrait
class FileManager extends BaseClass
{
    use LoggerTrait;

    public function save()
    {
        $this->log("Saving file...");
    }
}

// Pemanggilan
$file = new FileManager();

$file->baseMethod(); // Output dari BaseClass
$file->save();       // Output dari LoggerTrait

?>










trait Logger {
    public function log($msg) {
        echo "Log: $msg<br>";
    }
}

class FileManager {
    use Logger;

    public function saveFile() {
        $this->log("File saved!");
    }
}

class UserManager {
    use Logger;

    public function createUser() {
        $this->log("User created!");
    }
}










<?php

trait A {
    public function sayHello() {
        echo "Hello from A\n";
    }
}

trait B {
    public function sayHello() {
        echo "Hello from B\n";
    }
}

class MyClass {
    use A, B {
        B::sayHello insteadof A;       // Gunakan sayHello dari B
        A::sayHello as sayHelloFromA;  // Alias untuk method sayHello dari A
    }
}

$obj = new MyClass();

$obj->sayHello();         // Memanggil versi dari B
$obj->sayHelloFromA();    // Memanggil versi dari A

?>
