<?php 

class About {
    public function index($nama = 'Sandhika', $pekerjaan = 'Dosen')
    {
      echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
      echo 'About/page';
    }
}