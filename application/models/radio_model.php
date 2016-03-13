<?php

	class Radio_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->radio)->order_by('idMate',$order)->limit($rows)->get()->result();
			} else{
				$consulta = $this->db->get('radio');

				return $consulta->result();
			}
		}

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->radio)->where_in('idMate', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('radio')->where('idMate', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->radio, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from($this->radio)->like($conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('radio'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('idMate', $id);
        	$this->db->update(('radio'), $data);
    	}

        public function get_image($id){
           $this->db->where('idMate', $id);
           $result = $this->db->get('radio');
           header("Content-type: image/jpeg");
           echo $result['image'];
        }

    	public function delete($id){
        	$this->db->where('idMate', $id)->delete('radio');
    	}

	}