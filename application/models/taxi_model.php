<?php

	class Taxi_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->taxi)->order_by('AidiTaxi',$order)->limit($rows)->get()->result();
			} else{
				$consulta = $this->db->get('taxi');

				return $consulta->result();
			}
		}

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->taxi)->where_in('AidiTaxi', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('taxi')->where('AidiTaxi', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->taxi, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from($this->taxi)->like($conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('taxi'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('AidiTaxi', $id);
        	$this->db->update(('taxi'), $data);
    	}

        public function get_image($id){
           $this->db->where('AidiTaxi', $id);
           $result = $this->db->get('taxi');
           header("Content-type: image/jpeg");
           echo $result['image'];
        }

    	public function delete($id){
        	$this->db->where('AidiTaxi', $id)->delete('taxi');
    	}

	}