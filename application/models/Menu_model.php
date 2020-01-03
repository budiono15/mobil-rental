<?php


class Menu_model extends CI_Model
{
	
	public function getSubMenu () 
	{
		$query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
		FROM `user_sub_menu` JOIN `user_menu`
		ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
		";
		return $this->db->query($query)->result_array();
	}


	public function hapusDataMenu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_menu');
		
	}


	public function hapusDataSubMenu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_sub_menu');
		
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_role');
		
	}


	public function tambah_role_aksi($data,$table)
	{
		$this->db->insert($table ,$data);
		
	}

	public function getAllData($table)
		{
			return $this->db->get($table);
		}


	public function tampil_data()
	{
		return $this->db->get('mobil');
	}


}