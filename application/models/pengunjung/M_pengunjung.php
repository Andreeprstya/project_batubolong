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
        $harga = $this->input->post('harga');
        $total = $jmlh*$harga;
        $saldo_akhir = $saldo-$total;
        if ($saldo_akhir < 0) {
            return;
        }else{
            $topup_saldo = array(
                'saldo' => $saldo_akhir,
            );
            $this->db->where('id_user', $id);
            $this->db->update('tb_saldo', $topup_saldo);
            for ($i=0; $i < $jmlh; $i++) {
                $pendapatan = array(
                    'sumber' => 'Tiket',
                    'tanggal' => $this->input->post('tanggal'),
                    'waktu' => $this->input->post('jam'),
                    'pendapatan' => $harga,
                  );
                $this->db->insert('tb_pendapatan', $pendapatan);

                $insert = array(
                    'tanggal' => $this->input->post('tanggal'),
                    'waktu' => $this->input->post('jam'),
                    'tiket' => 'test',
                    'status' => 'Invalid',
                );
                $result = $this->db->insert('tb_tiket', $insert);
            }
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
    public function getstand_menu($id)
    {
        $this->db->select('*');
        $result = $this->db->get_where('tb_menu', array('id_stand' => $id));
        return $result;
    }
    public function getdetailstand($id)
    {
        $this->db->select('*');
        $result = $this->db->get_where('tb_stand', array('id_stand' => $id));
        return $result;
    }
    public function addcart($id)
    {
        $this->db->where('id_menu', $id);
		$menu = $this->db->get('tb_menu')->result_array();
		$data = array(
			'id'		=> $menu[0]['id_menu'],
			'qty'		=> 1,
			'price'		=> $menu[0]['harga'],
			'name'		=> $menu[0]['nama_menu']
		);
		$result=$this->cart->insert($data);
        return $result;
    }
}


/* End of file M_pengunjung_model.php and path \application\models\M_pengunjung_model.php */
