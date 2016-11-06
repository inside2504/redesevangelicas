<?php

	class Localidad_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
            if($rows){
                return $this->db->select('*')->from($this->producto)->order_by('idlocalidad',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('idlocalidad', 'desc');
                $query = $this->db->get('localidad')->result();
                return $query;
            }
		}

        public function getBolsa($items = null, $order = "DESC") {
            if($items){
                return $this->db->select('*')->from($this->bolsa)->order_by('idlocalidad',$order)->limit($rows)->get()->result();
            } else{
                $this->db->order_by('idlocalidad', 'desc');
                $consulta = $this->db->get('localidad');

                return $consulta->result();
            }
        }

        public function getAll() {
            $this->db->select('*');
            $this->db->from('localidad');
            $query = $this->db->get()->result();
            return $query;
        }

        public function get_all($pagination, $segment) {
            $this->db->order_by('idlocalidad', 'desc');
            $this->db->limit($pagination, $segment);
            $this->db->select('*');
            $this->db->from('localidad');
            $query = $this->db->get()->result();
            return $query;
        }

        public function getLocalidad() {
            $this->db->order_by('idlocalidad', 'asc');
            $this->db->select('*');
            $this->db->from('localidad');
            $query = $this->db->get()->result();
            return $query;
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->bolsa)->where_in('idlocalidad', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('localidad')->where('idlocalidad', $id)->get()->row();
        	}
    	}

        public function findWhere($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->imgprod)->where_in('idlocalidad', $id)->get()->result();
            } else {
                $this->db->select('*');
                $this->db->from('localidad');
                $this->db->where(array('idlocalidad' => $id));
                $query = $this->db->get()->row();
                return $query;
            }
        }

    	public function get_where($conditions){
        	return $this->db->get_where($this->producto, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from('localidad')->like('nombreLocalidad',$conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('localidad'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('idlocalidad', $id);
        	$this->db->update(('localidad'), $data);
    	}

    	public function delete($id){
        	$this->db->where('idlocalidad', $id)->delete('localidad');
    	}
	}