<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mhome extends CI_Model {
  function getresults() {
    $this->db->select('id_skolah, th_ajaran');
    $this->db->from('tb_peserta_didik');
    $this->db->group_by('th_ajaran');
    $query = $this->db->get();
    return $query->result();
  }

  function cari($thn,$bntkdidik)  {
    //$this->db->trans_strict(FALSE);
    //$this->db->trans_begin();
    //wilayah
    /*$this->db->select('kecamatan');
    $this->db->from('tb_identitas_sekolah');
    $this->db->where('bentuk_pndidikan',$bntkdidik);
    $this->db->where('th_ajaran',$thn);
    $this->db->group_by('kecamatan');
    //total bentukpendidikan*/
    $this->db->select('kecamatan AS wil, COUNT("bentuk_pndidikan") AS pen, sum(status_sekolah="negeri") AS negeri, sum(status_sekolah="swasta") AS swasta');
    $this->db->from('tb_identitas_sekolah');
    $this->db->where('bentuk_pndidikan',$bntkdidik);
    $this->db->where('th_ajaran',$thn);
    $this->db->group_by('kecamatan');
    $query = $this->db->get();
    //$query = $this->db->query(' SELECT kecamatan AS wil, COUNT(bentuk_pndidikan) AS totpen, sum(status_sekolah="negeri") AS negeri, sum(status_sekolah="swasta") AS swasta FROM tb_identitas_sekolah
    //WHERE bentuk_pndidikan="'.$bntkdidik.'" AND th_ajaran="'.$bntkdidik.'" GROUP BY kecamatan');
    return $query->result();
    //$this->db->trans_complete();
    /*if ($this->db->trans_status() === FALSE) {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
        return FALSE;
        } else {
            //if everything went right, delete the data from the database
            $this->db->trans_commit();
            return TRUE;
        }*/
      }

  function kbb($thn, $bntkdidik) {
    $this->db->select('th_ajaran as tahun,bentuk_pndidikan AS bnt, COUNT(bentuk_pndidikan) AS totpenkbb, sum(status_sekolah="negeri") AS totnegeri, sum(status_sekolah="swasta") AS totswasta');
    $this->db->from('tb_identitas_sekolah');
    $this->db->where('bentuk_pndidikan',$bntkdidik);
    $this->db->where('th_ajaran',$thn);
    $query = $this->db->get();
    //$query = $this->db->query('SELECT bentuk_pndidikan AS bnt, COUNT(bentuk_pndidikan) AS totpenkbb FROM tb_identitas_sekolah
    //WHERE bentuk_pndidikan="'.$bntkdidik.'" AND th_ajaran="'.$bntkdidik.'" ');
    return $query->result();
  }
  function totpdidikagama($thn, $bntkdidik)  {
    $this->db->select('tb_identitas_sekolah.bentuk_pndidikan, COUNT(jenis_kelamin) as totkelamin, SUM(jenis_kelamin="L") AS totlaki_laki, SUM(jenis_kelamin="p") AS totprempuan, COUNT(agama) AS totagama,
                      SUM(agama="islam") AS totislm, SUM(agama="kristen") AS totkristen, SUM(agama="keriste katolik") AS totkatolik, SUM(agama="hindu") AS tothindu,
                      SUM(agama="budha") AS totbudha, SUM(agama="kong hu chu") AS totkonghuchu');
    $this->db->from('tb_peserta_didik');
    $this->db->join('tb_identitas_sekolah', 'tb_peserta_didik.id_skolah = tb_identitas_sekolah.id_skolah');
    $this->db->where('bentuk_pndidikan',$bntkdidik);
    $this->db->where('tb_identitas_sekolah.th_ajaran',$thn);
    $query = $this->db->get();
    return $query->result();
  }
  function pdidikagama($thn,$bntkdidik) {
    $this->db->select('tb_identitas_sekolah.kecamatan, COUNT(jenis_kelamin) as jmkelamin, SUM(jenis_kelamin="L") AS laki_laki, SUM(jenis_kelamin="p") AS prempuan, COUNT(agama) AS jmagama,
                      SUM(agama="islam") AS islm, SUM(agama="kristen") AS kristen, SUM(agama="keriste katolik") AS katolik, SUM(agama="hindu") AS hindu,
                      SUM(agama="budha") AS budha, SUM(agama="kong hu chu") AS konghuchu');
    $this->db->from('tb_peserta_didik');
    $this->db->join('tb_identitas_sekolah', 'tb_peserta_didik.id_skolah = tb_identitas_sekolah.id_skolah');
    $this->db->where('bentuk_pndidikan',$bntkdidik);
    $this->db->where('tb_identitas_sekolah.th_ajaran',$thn);
    $this->db->group_by('kecamatan');
    $query = $this->db->get();
    return $query->result();
  }
  function totstpegawai($thn,$bntkdidik) {
    $this->db->select('SUM(setatus_pegawai="cpns") AS totCPNS, SUM(setatus_pegawai="pns") AS totPNS, SUM(setatus_pegawai="pns depag") AS totPNSDep, SUM(setatus_pegawai="pns diperbantukan") AS totPNSDip,
                      SUM(setatus_pegawai="gty/pty") AS totGTY, SUM(setatus_pegawai="guru honor sekolah") AS totguru_honorer, SUM(setatus_pegawai="tenaga honor sekolah") AS tottenaga_honorer,
                      COUNT(setatus_pegawai) AS totpeg');
    $this->db->from('ptkn');
    $this->db->join('tb_identitas_sekolah', 'ptkn.id_skolah = tb_identitas_sekolah.id_skolah');
    $this->db->where('tb_identitas_sekolah.bentuk_pndidikan',$bntkdidik);
    $this->db->where('tb_identitas_sekolah.th_ajaran',$thn);
    $query = $this->db->get();
    return $query->result();
  }
  function stpegawai($thn,$bntkdidik) {
    $this->db->select('tb_identitas_sekolah.kecamatan AS kec, SUM(setatus_pegawai="cpns") AS CPNS, SUM(setatus_pegawai="pns") AS PNS, SUM(setatus_pegawai="pns depag") AS PNSDep,
                      SUM(setatus_pegawai="pns diperbantukan") AS PNSDip, SUM(setatus_pegawai="gty/pty") AS GTY, SUM(setatus_pegawai="guru honor sekolah") AS guru_honorer,
                      SUM(setatus_pegawai="tenaga honor sekolah") AS tenaga_honorer, COUNT(setatus_pegawai) AS peg');
    $this->db->from('ptkn');
    $this->db->join('tb_identitas_sekolah', 'ptkn.id_skolah = tb_identitas_sekolah.id_skolah');
    $this->db->where('tb_identitas_sekolah.bentuk_pndidikan',$bntkdidik);
    $this->db->where('tb_identitas_sekolah.th_ajaran',$thn);
    $this->db->group_by('tb_identitas_sekolah.kecamatan');
    $query = $this->db->get();
    return $query->result();
  }
  function totjnsptk($thn,$bntkdidik) {
    $this->db->select('SUM(jenis_ptk="guru bk") AS totgbk, SUM(jenis_ptk="guru kelas") AS totgkls, SUM(jenis_ptk="guru mapel") AS totgmapel, SUM(jenis_ptk="penjaga sekolah") AS totpenjaga,
                      SUM(jenis_ptk="pesuruh/office boy") AS totob, SUM(jenis_ptk="tenaga administrasi sekolah") AS tottas, SUM(jenis_ptk="tenaga perpustakaan") AS totperpus,
                      COUNT(jenis_ptk) AS totptk');
    $this->db->from('ptkn');
    $this->db->join('tb_identitas_sekolah', 'ptkn.id_skolah = tb_identitas_sekolah.id_skolah');
    $this->db->where('tb_identitas_sekolah.bentuk_pndidikan',$bntkdidik);
    $this->db->where('tb_identitas_sekolah.th_ajaran',$thn);
    $query = $this->db->get();
    return $query->result();
  }
  function jnsptk($thn,$bntkdidik) {
    $this->db->select('tb_identitas_sekolah.kecamatan AS kecptk, SUM(jenis_ptk="guru bk") AS gbk, SUM(jenis_ptk="guru kelas") AS gkls, SUM(jenis_ptk="guru mapel") AS gmapel, SUM(jenis_ptk="penjaga sekolah") AS penjaga,
                      SUM(jenis_ptk="pesuruh/office boy") AS ob, SUM(jenis_ptk="tenaga administrasi sekolah") AS tas, SUM(jenis_ptk="tenaga perpustakaan") AS perpus,
                      COUNT(jenis_ptk) AS ptk');
    $this->db->from('ptkn');
    $this->db->join('tb_identitas_sekolah', 'ptkn.id_skolah = tb_identitas_sekolah.id_skolah');
    $this->db->where('tb_identitas_sekolah.bentuk_pndidikan',$bntkdidik);
    $this->db->where('tb_identitas_sekolah.th_ajaran',$thn);
    $this->db->group_by('tb_identitas_sekolah.kecamatan');
    $query = $this->db->get();
    return $query->result();
  }
}
?>
