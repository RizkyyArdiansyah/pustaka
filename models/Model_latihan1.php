<? php
class Model_latihan1 extends CI_Model
{
/ /membuat variable untuk menampung nilai
public $nilai1, $nilai2, $hasil;

//method penjumlahan
public function jumlah($nil1 = null, $ni12 = null)
{
$this->nilai1 = $nil1;
$this->nilai2 = $ni12;
$this->hasil = $this->nilai1 + $this->nilai2;
return $this->hasil;

}
}