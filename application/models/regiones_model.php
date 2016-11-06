<?php

	class Regiones_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->regiones)->order_by('idRegiones',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('idRegiones', 'asc');
				$consulta = $this->db->get('regiones');

				return $consulta->result();
			}
		}

         public function getAll() {
            $this->db->order_by('regiones_idRegiones', 'desc');
            $this->db->select('*');
            $this->db->from('regiones');
            $this->db->join('localidad', 'localidad.idlocalidad = regiones.localidad_idlocalidad');
            $query = $this->db->get()->result();
            return $query;
        }

        public function getImg($idRegiones){
            return $this->db->select('logo')->from('logoigle')->where('regiones_idRegiones',$idRegiones)->get()->row()->logo;
        }

        public function subir($id,$imagen){
            $data = array(
                'regiones_idRegiones' => $id,
                'logo' => $imagen
            );
            return $this->db->insert('logoigle', $data);
        }

        public function get_regiones($pagination, $segment,$localidad) {
            $this->db->order_by('idRegiones', 'desc');
            $this->db->limit($pagination, $segment);
            $this->db->like('localidad',$localidad);
            $query = $this->db->get('regiones')->result();
            return $query;
        }

        public function get_imagen($items = null, $order = "ASC") {
            if($items){
                return $this->db->select('*')->from($this->logoigle)->order_by('idLogoIgle',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('regiones_idRegiones', 'desc');
                $query = $this->db->get('logoigle')->result();
                return $query;
            }
        }

        public function updateImg($idi,$id,$imagen){
            $this->db->where('idLogoIgle', $idi);
            $data = array(
                'idLogoIgle' => $idi,
                'regiones_idRegiones' => $id,
                'logo' => $imagen
            );
            $this->db->update(('logoigle'), $data);
        }

        public function findImg($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->fototaxi)->where_in('idLogoIgle', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('logoigle')->where('idLogoIgle', $id)->get()->row();
            }
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->regiones)->where_in('idRegiones', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('regiones')->where('idRegiones', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->regiones, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from('regiones')->like('localidad_idlocalidad',$conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('regiones'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('idRegiones', $id);
        	$this->db->update(('regiones'), $data);
    	}

    	public function delete($id){
        	$this->db->where('idRegiones', $id)->delete('regiones');
    	}

	}