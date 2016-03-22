<?php

	class Tianguis_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
            if($rows){
                return $this->db->select('*')->from($this->producto)->order_by('idProd',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('idProd', 'desc');
                $query = $this->db->get('producto')->result();
                return $query;
            }
		}

        public function getLib($items = null, $order = "DESC") {
            if($items){
                return $this->db->select('*')->from($this->libreria)->order_by('idLibreria',$order)->limit($rows)->get()->result();
            } else{
                $this->db->order_by('idLibreria', 'desc');
                $consulta = $this->db->get('libreria');

                return $consulta->result();
            }
        }

        public function getAll() {
            $this->db->order_by('idProd', 'desc');
            $this->db->select('*');
            $this->db->from('producto');
            $this->db->join('libreria', 'libreria.idLibreria = producto.libreria_idLibreria');
            $query = $this->db->get()->result();
            return $query;
        }

        public function get_producto($pagination, $segment) {
            $this->db->order_by('idProd', 'desc');
            $this->db->limit($pagination, $segment);
            $query = $this->db->get('producto')->result();
            return $query;
        }

        public function get_all($pagination, $segment) {
            $this->db->order_by('idProd', 'desc');
            $this->db->limit($pagination, $segment);
            $this->db->select('*');
            $this->db->from('producto');
            $this->db->join('libreria', 'libreria.idLibreria = producto.libreria_idLibreria');
            $query = $this->db->get()->result();
            return $query;
        }

        public function subir($id,$imagen,$nom,$aut,$desc,$prec){
            $data = array(
                'nombProd' => $nom,
                'autoProd' => $aut,
                'descrProd' => $desc,
                'precProd' => $prec,
                'imgProd' => $imagen,
                'libreria_idLibreria' => $id,
            );
            return $this->db->insert('producto', $data);
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->libreria)->where_in('idLibreria', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('libreria')->where('idLibreria', $id)->get()->row();
        	}
    	}

        public function findProd($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->imgprod)->where_in('idProd', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('producto')->where('idProd', $id)->get()->row();
            }
        }

        public function findAll($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->imgprod)->where_in('idProd', $id)->get()->result();
            } else {
                $this->db->select('*');
                $this->db->from('producto');
                $this->db->join('libreria', 'libreria.idLibreria = producto.libreria_idLibreria');
                $this->db->where(array('idProd' => $id));
                $query = $this->db->get()->row();
                return $query;
            }
        }

    	public function get_where($conditions){
        	return $this->db->get_where($this->producto, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from('producto')->like('nombProd',$conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('libreria'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('idLibreria', $id);
        	$this->db->update(('libreria'), $data);
    	}

    	public function delete($id){
        	$this->db->where('idLibreria', $id)->delete('libreria');
    	}

        public function eliminar($id){
            $this->db->where('idProd', $id)->delete('producto');
        }

	}