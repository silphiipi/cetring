  <?php 

class Model_menu extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_menu');
	}

	public function tambah_menu($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_menu($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
