<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Grafik_model extends CI_Model
{
	function hasil_survey() {
      $sql = "SELECT diagnosa , COUNT(diagnosa) as total FROM db_rekam_medis WHERE tahun = '2019' GROUP BY diagnosa ";
      return $this->db->query($sql);
  }

  function hasil_survey1() {
      $sql = "SELECT diagnosa AS hasil, COUNT(*) as total FROM db_rekam_medis WHERE tahun = '2018' GROUP BY hasil ";
      return $this->db->query($sql);
  }

  function hasil_survey2() {
      $sql = "SELECT diagnosa AS hasil, COUNT(*) as total FROM db_rekam_medis WHERE tahun = '2017' GROUP BY hasil ";
      return $this->db->query($sql);
  }
	
function kode2019(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE tahun = '2019' ");
$total = $query->num_rows();
return $total;
}

function kode2018(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE tahun = '2018' ");
$total = $query->num_rows();
return $total;
}

function kode2017(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE tahun = '2017' ");
$total = $query->num_rows();
return $total;
}
	
function Sapi(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE jenis_hewan = 'Sapi' ");
$total = $query->num_rows();
return $total;
}

function Kambing(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE jenis_hewan = 'Kambing' ");
$total = $query->num_rows();
return $total;
}

function Kec_Bunga_Raya(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Bunga Raya' ");
$total = $query->num_rows();
return $total;
}

function Kec_Dayun(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Dayun' ");
$total = $query->num_rows();
return $total;
}

function Kec_Kandis(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Kandis' ");
$total = $query->num_rows();
return $total;
}

function Kec_Kerinci_Kanan(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Kerinci Kanan' ");
$total = $query->num_rows();
return $total;
}

function Kec_Koto_Gasip(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Koto Gasip' ");
$total = $query->num_rows();
return $total;
}

function Kec_Siak(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Siak' ");
$total = $query->num_rows();
return $total;
}

function Kec_Sabak_Auh(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Sabak Auh' ");
$total = $query->num_rows();
return $total;
}

function Kec_Tualang(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Tualang' ");
$total = $query->num_rows();
return $total;
}

function Kec_Minas(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Minas' ");
$total = $query->num_rows();
return $total;
}

function Kec_Sungai_Apit(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Sungai Apit' ");
$total = $query->num_rows();
return $total;
}

function Kec_pusako(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Pusako' ");
$total = $query->num_rows();
return $total;
}

function Kec_lubuk_dalam(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Lubuk Dalam' ");
$total = $query->num_rows();
return $total;
}

function Kec_sungai_mandau(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Sungai Mandau' ");
$total = $query->num_rows();
return $total;
}

function Kec_mempura(){
$query = $this->db->query("SELECT * FROM db_hewan WHERE daerah = 'Kec.Mempura' ");
$total = $query->num_rows();
return $total;
}

function tidak_ada19(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Tidak Ada' and tahun ='2019' ");
$total = $query->num_rows();
return $total;
}

function bff_helmi19(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'BFF Helminthiasis' and tahun ='2019' ");
$total = $query->num_rows();
return $total;
}

function myasis19(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Myasis' and tahun ='2019' ");
$total = $query->num_rows();
return $total;
}

function Thelaziasis19(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Thelaziasis' and tahun ='2019' ");
$total = $query->num_rows();
return $total;
}

function Anorexia19(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Anorexia' and tahun ='2019' ");
$total = $query->num_rows();
return $total;
}

function Helminthiasis19(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Helminthiasis' and tahun ='2019' ");
$total = $query->num_rows();
return $total;
}

function Scabies19(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Scabies' and tahun ='2019' ");
$total = $query->num_rows();
return $total;
}

function ORF19(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'ORF' and tahun ='2019' ");
$total = $query->num_rows();
return $total;
}

function tidak_ada18(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Tidak Ada' and tahun ='2018' ");
$total = $query->num_rows();
return $total;
}

function bff_helmi18(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'BFF Helminthiasis' and tahun ='2018' ");
$total = $query->num_rows();
return $total;
}

function myasis18(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Myasis' and tahun ='2018' ");
$total = $query->num_rows();
return $total;
}

function Thelaziasis18(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Thelaziasis' and tahun ='2018' ");
$total = $query->num_rows();
return $total;
}

function Anorexia18(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Anorexia' and tahun ='2018' ");
$total = $query->num_rows();
return $total;
}

function Helminthiasis18(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Helminthiasis' and tahun ='2018' ");
$total = $query->num_rows();
return $total;
}

function Scabies18(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Scabies' and tahun ='2018' ");
$total = $query->num_rows();
return $total;
}

function ORF18(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'ORF' and tahun ='2018' ");
$total = $query->num_rows();
return $total;
}


function tidak_ada17(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Tidak Ada' and tahun ='2017' ");
$total = $query->num_rows();
return $total;
}

function bff_helmi17(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'BFF Helminthiasis' and tahun ='2017' ");
$total = $query->num_rows();
return $total;
}

function myasis17(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Myasis' and tahun ='2017' ");
$total = $query->num_rows();
return $total;
}

function Thelaziasis17(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Thelaziasis' and tahun ='2017' ");
$total = $query->num_rows();
return $total;
}

function Anorexia17(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Anorexia' and tahun ='2017' ");
$total = $query->num_rows();
return $total;
}

function Helminthiasis17(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Helminthiasis' and tahun ='2017' ");
$total = $query->num_rows();
return $total;
}

function Scabies17(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'Scabies' and tahun ='2017' ");
$total = $query->num_rows();
return $total;
}

function ORF17(){
$query = $this->db->query("SELECT * FROM db_rekam_medis WHERE diagnosa = 'ORF' and tahun ='2017' ");
$total = $query->num_rows();
return $total;
}


}
