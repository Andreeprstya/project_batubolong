<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class M_pengunjung extends CI_Model 
{

    #SALDO
    public function getsaldo()
    {
        $user = $_SESSION['username'];
        $this->db->select('*');
        $result = $this->db->get_where('tb_saldo', array('username' => $user));
        return $result;
    }                        
    
    #TIKET
    public function beli_tiket()
    {
        $id = $_SESSION['id'];
        $this->db->select('saldo');
        $this->db->from('tb_saldo');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        $saldo = $query->row()->saldo;
        $jmlh = $this->input->post('jumlah');
        $total = $jmlh*10000;
        $saldo_akhir = $saldo-$total;
        if ($saldo_akhir < 0) {
            
        }else{
            $topup_saldo = array(
                'saldo' => $saldo_akhir,
            );
            $this->db->where('id_user', $id);
            $result = $this->db->update('tb_saldo', $topup_saldo);
            for ($i=0; $i < $jmlh; $i++) { 
                $insert = array(
                    'tanggal' => $this->input->post('tanggal'),
                    'waktu' => $this->input->post('jam'),
                    'tiket' => 'test',
                    'status' => 'Invalid',
                );
                $result = $this->db->insert('tb_tiket', $insert);
                $this->load->library('cetak_pdf');
                $pdf = new FPDF('L','mm',array(50,150));
                $pdf->AddPage();
                $pdf->SetFont('Arial','B',16);
                $pdf->Cell(0,7,'DAFTAR BARANG',0,1,'C');
                $pdf->Cell(10,7,'',0,1);
            }
            $pdf->Output('./db/hasil.pdf', 'F');
            return $result;
        }
    }

    public function cetaktiket()
    {
        $this->load->library('cetak_pdf');
        $pdf = new FPDF('L','mm',array(50,150));
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DAFTAR BARANG',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $filename = "Tiket.pdf";
        $pdf->Output($filename, 'D');
    }

    #STAND
    public function getstand()
    {
        $this->db->select('*');
        $result = $this->db->get_where('tb_stand');
        return $result;
    }
}


/* End of file M_pengunjung_model.php and path \application\models\M_pengunjung_model.php */
