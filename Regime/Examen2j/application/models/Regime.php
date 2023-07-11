<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Regime extends CI_Model {

    public function insertRegime($idObjectif,$num,$duree,$pourcentagev,$pourcentagel,$pourcentagep,$prix){
        $sql = "INSERT INTO `regime`(`idObjectif`,`num`,`duree`,`pourcentageV`, `pourcentageL`,`pourcentageP`,`prix`) VALUES(0,%s,%s,%s,%s,%s,%s)";
        $sql = sprintf($sql,$idObjectif,$num,$duree,$pourcentagev,$pourcentagel,$pourcentagep,$prix);
        $query = $this->db->query($sql);
    }
    
    
        public function getAllRegime() {
            $query = $this->db->get('regime');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return array(); // Retourne un tableau vide si aucun résultat n'est trouvé
            }
        }

        public function updateRegime($idRegime, $data) {
            $this->db->where('idRegime', $idRegime);
            $this->db->update('regime', $data);
            return $this->db->affected_rows();
        }

        public function deleteRegime($idRegime) {
            $this->db->where('idRegime', $idRegime);
            $this->db->delete('regime');
            return $this->db->affected_rows();
        }
    
    
}
