<?php

	class Empresa_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->empresa)->order_by('AidiEmpr',$order)->limit($rows)->get()->result();
			} else{
				$consulta = $this->db->get('empresa');

				return $consulta->result();
			}
		}

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->empresa)->where_in('AidiEmpr', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('empresa')->where('AidiEmpr', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->empresa, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from($this->empresa)->like($conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('empresa'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('AidiEmpr', $id);
        	$this->db->update(('empresa'), $data);
    	}

    	public function delete($id){
        	$this->db->where('AidiEmpr', $id)->delete('empresa');
    	}

	}