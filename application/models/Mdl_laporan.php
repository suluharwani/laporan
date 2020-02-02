<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_laporan extends CI_Model {
  function laporan_kasir_lim($lim){
    $this->db->select('pegawai.nama as pelapor, laporan_kasir.id as id, laporan_kasir.id_user_kasir as id_user_kasir, laporan_kasir.kas_masuk as kas_masuk, laporan_kasir.selisih as selisih,laporan_kasir.pendapatan_kasir as pendapatan_kasir, laporan_kasir.total_pengeluaran as total_pengeluaran, laporan_kasir.total_setor as total_setor, laporan_kasir.setor_ratusan as setor_ratusan, laporan_kasir.setor_puluhan as setor_puluhan, laporan_kasir.setor_koin as setor_koin, laporan_kasir.tanggal_laporan as tanggal_laporan');
    $this->db->from('laporan_kasir');
    $this->db->join('pegawai', 'laporan_kasir.id_karyawan = pegawai.pegawai_id', 'left');
    $this->db->order_by('laporan_kasir.id', 'desc');
    $this->db->limit($lim);
    $data = $this->db->get();
    return $data;
  }
  function last_date_kasir(){
    $this->db->select('tanggal_laporan');
    $this->db->from('laporan_kasir');
    $this->db->order_by('tanggal_laporan', 'desc');
    $this->db->limit(1);
    $query = $this->db->get();
    $data = $query->row();
    if (!empty($data)) {
      return $data->tanggal_laporan;
    }else{
      return 'belum ada tanggal laporan';
    }

  }
  function laporan_last_date_kasir(){
    $tgl = $this->last_date_kasir();
    $this->db->select('laporan_kasir.id_user_kasir as id_user_kasir, laporan_kasir.kas_masuk as kas_masuk, laporan_kasir.selisih as selisih,laporan_kasir.pendapatan_kasir as pendapatan_kasir, laporan_kasir.total_pengeluaran as total_pengeluaran, laporan_kasir.total_setor as total_setor, laporan_kasir.setor_ratusan as setor_ratusan, laporan_kasir.setor_puluhan as setor_puluhan, laporan_kasir.setor_koin as setor_koin, laporan_kasir.tanggal_laporan as tanggal_laporan');
    $this->db->from('laporan_kasir');
    $this->db->where('tanggal_laporan', $tgl);
    $data = $this->db->get();
    return $data;
  }
}
/* End of file ${TM_FILENAME:mdl_laporan.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Mdl_laporan/:application/models/mdl_laporan.php} */
