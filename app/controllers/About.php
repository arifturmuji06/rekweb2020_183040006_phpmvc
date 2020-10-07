<?php 

Class About {
	public function index($nama = 'Arif', $pekerjaan = 'Mahasiswa')
	{
		echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
	}
	public function page()
	{
		echo 'About/page';
	}
}