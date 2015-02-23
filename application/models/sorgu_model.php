<?php


class sorgu_model extends CI_Model{

    public function kisiekle($degerler){

            $deger = array(
                "ad"     => $degerler[0],
                "soyad"  => $degerler[1],
                "tel"    => $degerler[2],
                "eposta" => $degerler[3],
                "adres"  => $degerler[4],
            );

            $ekle = $this->db->insert("kisiler",$deger);
        if($ekle){
            return true;
        }else
            return false;
    }

}