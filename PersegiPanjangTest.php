<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit

use phpDocumentor\Reflection\Types\This;
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "PersegiPanjang.php";

// Class untuk run Testing.
class PersegiPanjangTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        echo "Eksekusi sebelum pengujian\n";
    }


    public function testHitungKeliling()
    {
        // Kita pakai class yang mau kita test.
        $persegipanjang = new PersegiPanjang();

        // Kita masukan parameter
        $panjang = 2;
        $lebar = 2;
        $result = $persegipanjang->hitungKelilingPersegiPanjang($panjang, $lebar);
        $expected = 8;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungKelilingKosong()
    {
        // Kita pakai class yang mau kita test.
        $persegipanjang = new PersegiPanjang();

        // Kita masukan parameter
        $panjang = '';
        $lebar = '';
        $result = $persegipanjang->hitungKelilingPersegiPanjang($panjang, $lebar);
        $expected = 'Tidak boleh kosong';
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public function testHitungLuas()
    {
        // Kita pakai class yang mau kita test.
        $persegipanjang = new PersegiPanjang();

        // Kita masukan parameter
        $panjang = 2;
        $lebar = 2;
        $result = $persegipanjang->hitungLuasPersegiPanjang($panjang, $lebar);
        $expected = 4;
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }
    public function testHitungLuasKosong()
    {
        // Kita pakai class yang mau kita test.
        $persegipanjang = new PersegiPanjang();

        // Kita masukan parameter
        $panjang = '';
        $lebar = '';
        $result = $persegipanjang->hitungLuasPersegiPanjang($panjang, $lebar);
        $expected = 'Tidak boleh kosong';
        // Kita assert equal, ekspektasi nya harus 4, jika benar berarti Wordcount berfungsi dengan baik.
        $this->assertEquals($expected, $result);
    }

    public static function tearDownAfterClass(): void
    {
        echo "\nEksekusi setelah pengujian";
    }
}
