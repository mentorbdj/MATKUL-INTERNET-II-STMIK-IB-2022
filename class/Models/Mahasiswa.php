<?php

class Mahasiswa 
{
    public $nama;
    public $nim;
    public $alamat;

    public function __construct($nama = null, $nim = null, $alamat = null)
    {
        $this->nama   = $nama;
        $this->nim    = $nim;
        $this->alamat = $alamat;
    }

    public function getNamaMahasiswa()
    {
        return ucwords($this->nama);
    }

    public function setNamaMahasiswa($nama)
    {
        return $this->nama = $nama;
    }

    public function getNimMahasiswa()
    {
        return strtoupper($this->nim);
    }

    public function setNimMahasiswa($nim)
    {
        return $this->nim = $nim;
    }

    public function getAlamatMahasiswa()
    {
        return $this->alamat;
    }

    public function setAlamatMahasiswa($alamat)
    {
        return $this->alamat = $alamat;
    }
}
