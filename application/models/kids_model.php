<?php

	class Kids_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "desc"){
			if($rows){
				return $this->db->select('*')->from($this->kids)->order_by('AidiKids',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('AidiKids', 'desc');
				$consulta = $this->db->get('kids');

				return $consulta->result();
			}
		}

        public function getAlltitulo() {
            $this->db->order_by('AidiKids', 'desc');
            $this->db->select('*');
            $this->db->from('tituloserie');
            $this->db->join('kids', 'kids.tituloserie_idTituloSerie = tituloserie.idTituloSerie');
            $query = $this->db->get()->result();
            return $query;
        }

        public function getAlldesc() {
            $this->db->order_by('AidiKids', 'desc');
            $this->db->select('*');
            $this->db->from('tituloserie');
            $this->db->join('kids', 'kids.tituloserie_idTituloSerie = tituloserie.idTituloSerie');
            $query = $this->db->get()->result();
            return $query;
        }

        public function getDistinct() {
            $this->db->order_by('AidiKids', 'asc');
            $this->db->distinct();
            $this->db->group_by('NombreSerie');
            $this->db->select('*');
            $this->db->from('tituloserie');
            $this->db->join('kids', 'kids.tituloserie_idTituloSerie = tituloserie.idTituloSerie');
            $query = $this->db->get()->result();
            return $query;
        }

        public function gettitulo($rows = null, $order = "desc"){
            if($rows){
                return $this->db->select('*')->from($this->tituloserie)->order_by('idTituloSerie',$order)->limit($rows)->get()->result();
            } else{
                $this->db->order_by('idTituloSerie', 'desc');
                $consulta = $this->db->get('tituloserie');

                return $consulta->result();
            }
        }

        public function get_like($conditions) {
            $this->db->order_by('AidiKids', 'asc');
            $this->db->select('*');
            $this->db->from('tituloserie');
            $this->db->join('kids', 'kids.tituloserie_idTituloSerie = tituloserie.idTituloSerie');
            $this->db->like('NombreSerie',$conditions);
            $query = $this->db->get()->result();
            return $query;
        }

        public function get_contenido($pagination, $segment) {
            $this->db->order_by('AidiKids', 'desc');
            $this->db->limit($pagination, $segment);
            $this->db->select('*');
            $this->db->from('tituloserie');
            $this->db->join('kids', 'kids.tituloserie_idTituloSerie = tituloserie.idTituloSerie');
            $query = $this->db->get()->result();
            return $query;
        }

        public function get_music() {
            $this->db->order_by('idMusiKids', 'desc');
            $this->db->select('*');
            $this->db->from('musikids');
            $query = $this->db->get()->result();
            return $query;
        }

        public function getAllMusic($pagination, $segment) {
            $this->db->order_by('idMusiKids', 'desc');
            $this->db->limit($pagination, $segment);
            $this->db->select('*');
            $this->db->from('musikids');
            $query = $this->db->get()->result();
            return $query;
        }

        public function getDistinctMusic() {
            $this->db->order_by('idMusiKids', 'desc');
            $this->db->distinct();
            $this->db->group_by('autorMusic');
            $this->db->select('*');
            $this->db->from('musikids');
            $query = $this->db->get()->result();
            return $query;
        }

        public function get_likeMusic($conditions) {
            $this->db->order_by('idMusiKids', 'asc');
            $this->db->select('*');
            $this->db->from('musikids');
            $this->db->like('autorMusic',$conditions);
            $query = $this->db->get()->result();
            return $query;
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->kids)->where_in('AidiKids', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('kids')->where('AidiKids', $id)->get()->row();
        	}
    	}

        public function findtit($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->tituloserie)->where_in('idTituloSerie', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('tituloserie')->where('idTituloSerie', $id)->get()->row();
            }
        }

        public function findMus($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->musikids)->where_in('idMusiKids', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('musikids')->where('idMusiKids', $id)->get()->row();
            }
        }

    	public function get_where($conditions){
        	return $this->db->get_where($this->kids, $conditions)->result();
    	}

		public function create($array){
	        $this->db->insert(('kids'), $array);
	        return $this->db->insert_id();
    	}

        public function createtitulo($array){
            $this->db->insert(('tituloserie'), $array);
            return $this->db->insert_id();
        }

        public function createMusic($array){
            $this->db->insert(('musikids'), $array);
            return $this->db->insert_id();
        }

    	public function update($id, array $data){
        	$this->db->where('AidiKids', $id);
        	$this->db->update(('kids'), $data);
    	}

        public function updatetitulo($id, array $data){
            $this->db->where('idTituloSerie', $id);
            $this->db->update(('tituloserie'), $data);
        }

        public function updateMusic($id, array $data){
            $this->db->where('idMusiKids', $id);
            $this->db->update(('musikids'), $data);
        }

        public function get_image($id){
           $this->db->where('AidiKids', $id);
           $result = $this->db->get('kids');
           header("Content-type: image/jpg");
           echo $result['image'];
        }

    	public function delete($id){
        	$this->db->where('AidiKids', $id)->delete('kids');
    	}

        public function deletetitulo($id){
            $this->db->where('idTituloSerie', $id)->delete('tituloserie');
        }

        public function deleteMusic($id){
            $this->db->where('idMusiKids', $id)->delete('musikids');
        }

	}