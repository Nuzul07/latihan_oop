<?php

class smartphone
{
	public $warna;
	private $merk;
	protected $jenis;

	function _construct(){
		$this->warna = "";
		$this->merk = "";
		$this->jenis = "";
	}

	public function getWarna(){
		return $this->warna;
	}

	public function getMerk(){
		return $this->merk;
	}

	public function getJenis(){
		return $this->jenis;
	}

	public function setWarna($warna){
		$this->warna = $warna;
	}

	public function setMerk($merk){
		$this->merk = $merk;
	}

	public function setJenis($jenis){
		$this->jenis = $jenis;
	}

	function __destruct(){

	}
}

class handphone extends smartphone{

	public function set_spesifikasi($merk,$warna)
	{
		$this->setMerk($merk);
		$this->jenis = 'handphone';
		$this->warna = $warna;
	}

	public function summary()
	{
		return "ini smartphone dengan tipe ".$this->jenis." merknya ".$this->getMerk()." berwarna ".$this->warna;
	}
}

class tablet extends smartphone{

	public function set_spesifikasi($merk,$warna)
	{
		$this->setMerk($merk);
		$this->jenis = 'tablet';
		$this->warna = $warna;
	}

	public function summary()
	{
		return "ini smartphone dengan tipe ".$this->jenis." merknya ".$this->getMerk()." berwarna ".$this->warna;
	}
}

$smartphone_handphone = new handphone();
$smartphone_handphone->set_spesifikasi('VIVO','Gold');
echo $smartphone_handphone->summary();

echo "<br>";
$smartphone_tablet = new tablet();
$smartphone_tablet->set_spesifikasi('SAMSUNG','Black');
echo $smartphone_tablet->summary();