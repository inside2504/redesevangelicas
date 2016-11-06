<?php

	class Bolsa_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
            if($rows){
                return $this->db->select('*')->from($this->producto)->order_by('idbolsaTrab',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('idbolsaTrab', 'desc');
                $query = $this->db->get('bolsatrabajo')->result();
                return $query;
            }
		}

        public function getLocalidad($rows = null, $order = "ASC"){
            if($rows){
                return $this->db->select('*')->from($this->localidad)->order_by('idlocalidad',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('idlocalidad', 'asc');
                $query = $this->db->get('Localidad')->result();
                return $query;
            }
        }

        public function getBolsa($items = null, $order = "DESC") {
            if($items){
                return $this->db->select('*')->from($this->bolsa)->order_by('idbolsaTrab',$order)->limit($rows)->get()->result();
            } else{
                $this->db->order_by('idbolsaTrab', 'desc');
                $consulta = $this->db->get('bolsatrabajo');

                return $consulta->result();
            }
        }

        public function getAll() {
            $this->db->select('*');
            $this->db->from('bolsatrabajo');
            $query = $this->db->get()->result();
            return $query;
        }

        public function get_all($pagination, $segment) {
            $this->db->order_by('idbolsaTrab', 'desc');
            $this->db->limit($pagination, $segment);
            $this->db->select('*');
            $this->db->from('bolsatrabajo');
            $this->db->like('localidad');
            $query = $this->db->get()->result();
            return $query;
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->bolsa)->where_in('idbolsaTrab', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('bolsatrabajo')->where('idbolsaTrab', $id)->get()->row();
        	}
    	}

        public function findWhere($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->imgprod)->where_in('idbolsaTrab', $id)->get()->result();
            } else {
                $this->db->select('*');
                $this->db->from('bolsatrabajo');
                $this->db->where(array('idbolsaTrab' => $id));
                $query = $this->db->get()->row();
                return $query;
            }
        }

    	public function get_where($conditions){
        	return $this->db->get_where($this->producto, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from('bolsatrabajo')->like('localidad',$conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('bolsatrabajo'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('idbolsaTrab', $id);
        	$this->db->update(('bolsatrabajo'), $data);
    	}

    	public function delete($id){
        	$this->db->where('idbolsaTrab', $id)->delete('bolsatrabajo');
    	}

	}