<?php

	class Tianguis_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->producto)->order_by('idProd',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('idProd', 'desc');
				$consulta = $this->db->get('producto');

				return $consulta->result();
			}
		}

        public function get_producto($pagination, $segment) {
            $this->db->order_by('idProd', 'desc');
            $this->db->limit($pagination, $segment);
            $query = $this->db->get('producto')->result();
            return $query;
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->producto)->where_in('idProd', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('producto')->where('idProd', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->producto, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from($this->producto)->like($conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('producto'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('idProd', $id);
        	$this->db->update(('producto'), $data);
    	}

    	public function delete($id){
        	$this->db->where('idProd', $id)->delete('producto');
    	}

	}