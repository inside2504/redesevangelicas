<?php

	class Material_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->material)->order_by('idMate',$order)->limit($rows)->get()->result();
			} else{
				$consulta = $this->db->get('material');

				return $consulta->result();
			}
		}

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->material)->where_in('idMate', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('material')->where('idMate', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->material, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from($this->material)->like($conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('material'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('idMate', $id);
        	$this->db->update(('material'), $data);
    	}

        public function get_image($id){
           $this->db->where('idMate', $id);
           $result = $this->db->get('material');
           header("Content-type: image/jpeg");
           echo $result['image'];
        }

    	public function delete($id){
        	$this->db->where('idMate', $id)->delete('material');
    	}

	}