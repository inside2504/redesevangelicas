<?php

	class Materialkids_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "desc"){
			if($rows){
				return $this->db->select('*')->from($this->kids)->order_by('idMaterialesKids',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('idMaterialesKids', 'desc');
				$consulta = $this->db->get('materialeskids');

				return $consulta->result();
			}
		}

        public function getAll() {
            $this->db->order_by('idMaterialesKids', 'asc');
            $this->db->select('*');
            $this->db->from('materialeskids');
            $this->db->join('logomaterialkids', 'logomaterialkids.materialesKids_idMaterialesKids = materialeskids.idMaterialesKids');
            $query = $this->db->get()->result();
            return $query;
        }

        public function getAlldesc() {
            $this->db->order_by('idMaterialesKids', 'desc');
            $this->db->select('*');
            $this->db->from('materialeskids');
            $this->db->join('logomaterialkids', 'logomaterialkids.materialeskids_idMaterialesKids = materialeskids.idMaterialesKids');
            $query = $this->db->get()->result();
            return $query;
        }

        public function getDistinct() {
            $this->db->order_by('idMaterialesKids', 'asc');
            $this->db->distinct(); 
            $this->db->group_by('NombreSerie');
            $this->db->select('*');
            $this->db->from('logomaterialkids');
            $this->db->join('materialeskids', 'materialesKids.idMaterialesKids = logomaterialkids.materialesKids_idMaterialesKids');
            $query = $this->db->get()->result();
            return $query;
        }

        public function getLogo($rows = null, $order = "desc"){
            if($rows){
                return $this->db->select('*')->from($this->logoMaterialKids)->order_by('idLogoMaterialKids',$order)->limit($rows)->get()->result();
            } else{
                $this->db->order_by('idLogoMaterialKids', 'desc');
                $consulta = $this->db->get('logoMaterialKids');

                return $consulta->result();
            }
        }

        public function get_like($conditions) {
            $this->db->order_by('idMaterialesKids', 'asc');
            $this->db->select('*');
            $this->db->from('logoMaterialKids');
            $this->db->join('materialeskids', 'materialesKids.idMaterialesKids = logoMaterialKids.idLogoMaterialKids');
            $this->db->like('NombreSerie',$conditions);
            $query = $this->db->get()->result();
            return $query;
        }

        public function get_contenido($pagination, $segment) {
            $this->db->order_by('idMaterialesKids', 'desc');
            $this->db->limit($pagination, $segment);
            $this->db->select('*');
            $this->db->from('materialeskids');
            $this->db->join('logomaterialkids', 'materialeskids.idMaterialesKids = logomaterialkids.idLogoMaterialKids');
            $query = $this->db->get()->result();
            return $query;
        }

        public function subir($id,$imagen){
            $data = array(
                'materialesKids_idMaterialesKids' => $id,
                'imagen' => $imagen
            );
            return $this->db->insert('logomaterialkids', $data);
        }

        public function findImg($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->logomaterialkids)->where_in('idLogoMaterialKids', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('logomaterialkids')->where('idLogoMaterialKids', $id)->get()->row();
            }
        }

        public function findLogo($id){
            if (is_array($id)) {
                return $this->db->select('imagen')->from($this->logomaterialkids)->where_in('idLogoMaterialKids', $id)->get()->result();
            } else {
                return $this->db->select('imagen')->from('logomaterialkids')->where('idLogoMaterialKids', $id)->get()->row()->imagen;
            }
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->kids)->where_in('idMaterialesKids', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('materialeskids')->where('idMaterialesKids', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->kids, $conditions)->result();
    	}

    	public function get_like_kids($conditions){
        	return $this->db->select('*')->from($this->kids)->like($conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('materialeskids'), $array);
	        return $this->db->insert_id();
    	}

        public function createLogo($array){
            $this->db->insert(('logoMaterialKids'), $array);
            return $this->db->insert_id();
        }

    	public function update($id, array $data){
        	$this->db->where('idMaterialesKids', $id);
        	$this->db->update(('materialeskids'), $data);
    	}

        public function updateImg($idi,$id,$imagen){
            $this->db->where('idLogoMaterialKids', $idi);
            $data = array(
                'idLogoMaterialKids' => $idi,
                'materialeskids_idMaterialesKids' => $id,
                'imagen' => $imagen
            );
            $this->db->update(('logomaterialkids'), $data);
        }

        public function get_image($id){
           $this->db->where('idMaterialesKids', $id);
           $result = $this->db->get('materialeskids');
           header("Content-type: image/jpg");
           echo $result['image'];
        }

    	public function delete($id){
        	$this->db->where('idMaterialesKids', $id)->delete('materialeskids');
    	}

        public function deletetitulo($id){
            $this->db->where('idLogoMaterialKids', $id)->delete('logoMaterialkids');
        }

	}