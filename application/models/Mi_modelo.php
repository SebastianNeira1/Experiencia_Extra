<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mi_modelo extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    
    public function obtener(){
        $query=$this->db->get("transformers");
        return $query->result();

    }
    public function obtenerporid($mineral_energon){
       $this->db->where('Mineral_Energon', $mineral_energon);
        $query = $this->db->get('transformers');
        return $query->result();
    }
    /**
    public function editar($raza,$nombre,$mineral_energon,$lider){
        $data=array(
            'Raza'=>$raza,
            'Nombre'=>$nombre,
            'Mineral Energon'=>$mineral_energon,
            'Lider'=>$lider
            );
    $this->db->where('Raza', $raza);
    return $this->db->update('transformers',$data);
    }
    **/
}