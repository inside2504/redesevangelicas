<?php

	class Tianguis_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
            if($rows){
                return $this->db->select('*')->from($this->tianguis)->order_by('idProd',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('idTianguis', 'desc');
                $query = $this->db->get('tianguis')->result();
                return $query;
            }
		}

        public function getProductos() {
            $this->db->order_by('idTianguis', 'desc');
            $this->db->select('*');
            $this->db->from('tianguis');
            $query = $this->db->get()->result();
            return $query;
        }

        public function getVendedor() {
            $this->db->order_by('idvendedortianguis', 'desc');
            $this->db->select('*');
            $this->db->from('vendedortianguis');
            $query = $this->db->get()->result();
            return $query;
        }

        public function getAll() {
            $this->db->order_by('idvendedortianguis', 'desc');
            $this->db->select('*');
            $this->db->from('vendedortianguis');
            $this->db->join('tianguis', 'tianguis.idTianguis = vendedortianguis.tianguis_idTianguis');
            $query = $this->db->get()->result();
            return $query;
        }

        public function get_producto($pagination, $segment) {
            $this->db->order_by('idTianguis', 'desc');
            $this->db->limit($pagination, $segment);
            $query = $this->db->get('tianguis')->result();
            return $query;
        }

        public function getImg($idTianguis){
                return $this->db->select('imgVendedor')->from('vendedortianguis')->where('tianguis_idTianguis',$idTianguis)->get()->row()->imgVendedor;
        }

        public function subir($imagen,$nomigle,$nompas,$nomven,$nomprod,$desc,$tel,$prec,$stat){
            $data = array(
                'nombreIglesia' => $nomigle,
                'nombrePastor' => $nompas,
                'nombreVendedor' => $nomven,
                'nombreProducto' => $nomprod,
                'descripcionProducto' => $desc,
                'telefVendedor' => $tel,
                'precioProducto' => $prec,
                'imgProducto' => $imagen,
                'statusProducto' => $stat,
            );
            return $this->db->insert('tianguis', $data);
        }

        public function subirimg($id,$imagen){
            $data = array(
                'imgVendedor'           => $imagen,
                'tianguis_idTianguis'   => $id,
            );
            return $this->db->insert('vendedortianguis', $data);
        }

        public function findProd($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->tianguis)->where_in('idTianguis', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('tianguis')->where('idTianguis', $id)->get()->row();
            }
        }

    	public function get_where($conditions){
        	return $this->db->get_where($this->tianguis, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from('tianguis')->like('nombreProducto',$conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('tianguis'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('idTianguis', $id);
        	$this->db->update(('tianguis'), $data);
    	}

    	public function delete($id){
        	$this->db->where('idTianguis', $id)->delete('tianguis');
    	}

        public function eliminar($id){
            $this->db->where('idTianguis', $id)->delete('tianguis');
        }

	}