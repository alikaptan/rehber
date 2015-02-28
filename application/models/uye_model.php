<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.02.2015
 * Time: 12:14
 */
class uye_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->database();    //database bağlantısı yapıyoruz.
    }

    public function adminGiris($data){
        $query = $this->db->where("id",1);
        if($query)
            return true;
            return false;
     }

    public function uyeler(){
        $sorgu = $this->db->get("uyeler");
        return $sorgu->result();
    }

   public  function kullanici_ekle($degerler){
        $deger = array(
            "ad" => $degerler[0],
            "sifre" => $degerler[1]
        );

        $ekle = $this->db->insert("uyeler",$deger);

        if($ekle){
             return true;
        }else{
            return false;
        }
    }

    public function listele(){
            $this->db->select("*");
            $this->db->from("kisiler");
            $query = $this->db->get();           //pizza tablosundaki bütün verileri çekiyoruz.
            return $query->result_array();       //sonucu return ediyoruz.
    }







}