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
    public function addpemesanan()
    {
        $id_pengunjung = $this->input->post('id_pengunjung');
        $this->db->select('saldo');
        $this->db->from('tb_saldo');
        $this->db->where('id_user', $id_pengunjung);
        $query = $this->db->get();
        $saldo = $query->row()->saldo;
        $total = $this->input->post('total')*1000;
        $saldo_akhir = $saldo-(int)$total;
        if ($saldo_akhir < 0) {
            return;
        }else{
            $topup_saldo = array(
                'saldo' => $saldo_akhir,
            );
            $this->db->where('id_user', $id_pengunjung);
            $this->db->update('tb_saldo', $topup_saldo);
            date_default_timezone_set('Asia/Singapore');
            $tgl = date("Y-m-d");
            $waktu = date("H:i:s");
            $data = array(
                'id_pemesanan' => $this->input->post('id_pemesanan'),
                'id_pengunjung' => $this->input->post('id_pengunjung'),
                'total' => $this->input->post('total'),
                'jumlah' => $this->input->post('jumlah'),
                'tanggal' => $tgl,
                'waktu' => $waktu,
                'status' => 'Selesai',
            );
            $this->db->insert('tb_pemesanan', $data);
            $id_pemesanan = $this->db->insert_id();
            foreach ($this->cart->contents() as $key) {
                $data = array(
                    'id_pemesanan'	=> $id_pemesanan,
                    'menu'			=> $key['name'],
                    'jumlah'		=> $key['qty'],
                    'harga'			=> $key['price'],
                );
                $result = $this->db->insert('tb_detailpesanan', $data);
            }
            return $result;
        }
    }
    public function cetakstruk()
    {
        $id_stand = $_SESSION['id_stand'];
        date_default_timezone_set('Asia/Singapore');
        $tgl = date("Y-m-d");
        $this->db->select('*');
        $query = $this->db->get_where('tb_stand', array('id_stand'=>$id_stand));
        $namastand=$query->result();
        foreach ($namastand as $data){
            $nama=$data->nama_stand;

        }
        $this->load->library('cetak_pdf');
        $pdf = new FPDF('L','mm',array(100,100));
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,5,$nama,0,1,'C');
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,10,$tgl,0,1,'C');
        $pdf->SetLineWidth(1);
        $pdf->Line(0,30,190,30);
        $pdf->SetLineWidth(0);
        $pdf->Line(0,31,190,31);

        $this->db->select('*');
        $query=$this->db->get_where('tb_detailpesanan', array('id_pemesanan'=>$this->input->post('id_pengunjung')));
        $pesanan = $query->result();
        $total=0;
        //disini ya
        foreach ($this->cart->contents() as $key) {
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(40,25,$key['name']);
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(10,25,$key['qty'],'C');
            $totalharga=$key['price']*$key['qty'];
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(5,25,'*','C');
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(15,25,$key['price'],'C');
            $pdf->SetFont('Arial','B',10);
            $pdf->Cell(-1,25,$totalharga,'C');
            $total+=$totalharga;
        }

        $pdf->SetLineWidth(0);
        $pdf->Line(80,44,95,44);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(50,45,$total,0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(125,-45,'Total :',0,1,'C');

        $filename = "STRUCK.pdf";
        $result=$pdf->Output($filename, 'D');
        return $result;
    }
}


/* End of file M_pengunjung_model.php and path \application\models\M_pengunjung_model.php */
