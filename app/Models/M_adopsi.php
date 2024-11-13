<?php

namespace App\Models;
use CodeIgniter\Model;

class M_adopsi extends Model
{
 // public function tampil($tabel){
 // return $this->db->table($tabel)
 // ->get()
 // ->getResult();

 // }

  public function tampil($tabel) {
    return $this->db->table($tabel)
        ->get()
        ->getResult();
}

 public function getWhere($tabel,$where){
  return $this->db->table($tabel)
  ->getWhere($where)
  ->getRow();
 }
 
 public function tambah($tabel, $isi){
    return $this->db->table($tabel)
    ->insert($isi);
 }

 public function edit($tabel, $isi, $where){
    return $this->db->table($tabel)
    ->update($isi, $where);
 }

 public function hapus($tabel,$where){
   return $this->db->table($tabel)
    ->delete($where);
 }
 public function joinnelson($tabel, $tabel2, $tabel3,$tabel4, $on, $on2,$on3, $id){
 return $this->db->table($tabel)
 ->join($tabel2, $on,'left')
 ->join($tabel3, $on2,'left')
 ->join($tabel4, $on3,'left')
 ->orderby($id,'desc')
 ->get()
 ->getResult();

}

public function join($tabel, $tabel2, $on, $id){
    return $this->db->table($tabel)
    ->join($tabel2, $on,'left')
    ->orderby($id,'desc')
    ->get()
    ->getResult();

 }

 // public function join2($tabel, $tabel2, $on, $id){
 //    return $this->db->table($tabel)
 //    ->join($tabel2, $on,'left')
 //    ->orderby($id,'desc')
 //    ->getWhere()
 //    ->getResult();

 //  }

 public function join2($tabel1, $tabel2, $kolom1, $kolom2, $on, $orderby) {
    return $this->db->table($tabel1)
        ->select($tabel1, "$tabel2.nama_hewan, $tabel2.usia_hewan, $tabel2.kesehatan_hewan, $tabel2.jk_hewan")
        ->join($tabel2, "$tabel1.$kolom1 = $tabel2.$kolom2", 'left')
        ->orderBy($orderby)
        ->get()
        ->getResult();
}

public function joinjul($tabel, $tabel2, $tabel3,$tabel4, $on, $on2,$on3, $id,$where){
 return $this->db->table($tabel)
 ->join($tabel2, $on,'left')
 ->join($tabel3, $on2,'left')
 ->join($tabel4, $on3,'left')
 ->orderby($id,'desc')
 ->getWhere($where)
 ->getResult();
}
// protected $table; // Biarkan kosong, nanti akan diisi secara dinamis
//     protected $primaryKey = 'id_barang';
//     public function __construct()
//     {
//         parent::__construct();
//         $this->table = 'lelang'; // Setel nama tabel secara dinamis saat membuat objek model
//     }
//     public function insertHistory($table, $data)
// {
//     return $this->db->table($table)->insert($data);
// }

public function getwherejoin($tabel, $tabel2,$on,$id){
  return $this->db->table($tabel)
  ->join($tabel2, $on,'left')
  ->getWhere($where)
  ->getRow();

}

public function getLaporanByDate($start_date, $end_date)
{
    return $this->db->table('formuliruser')
    ->where('tgl >=', $start_date)
    ->where('tgl <=', $end_date)
    ->get()
    ->getResult();
}

public function getLaporanByDateForExcel($start_date, $end_date)
{
    $query = $this->db->table('formuliruser')
    ->where('tgl >=', $start_date)
    ->where('tgl <=', $end_date)
    ->get();

    return $query->getResultArray();
}


}