<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {


	public function index()
	{
		$this->load->view('ana_view');
		$this->load->database();
	}

	function girisKontrol(){

		if($_POST){

			$kadi = $this->input->post('kadi');
			$sifre = $this->input->post('sifre');

			if(!$kadi && !$sifre){
				echo "lütfen bilgileri giriniz";
			}else{

				echo "Hoşgeldin <strong>".$kadi."</strong>, <br> giris onaylandı yönlendiriliyorsunuz...";


				if($kadi == "vural" && $sifre == 12){
					/*admin sayfası*/
					$this->load->view("admin_view");


				}else{
					/*kullanıcı sayfası*/
					$this->load->model("uye_model");
					$deger["data"] = $this->uye_model->uyeler();

					$this->load->view("kul_view",$deger["data"]);

				}


		}
	}
	}
	public function yeniKayit(){
		$this->load->view("yenikayit_view");
		if($_POST){
			$kadi1   = $this->input->post('kuladi');
			$sifre = $this->input->post('pass1');
			$sifre1 = $this->input->post('pass2');

			if(!$kadi1 || !$sifre || !$sifre1) {
				?>
				<script type="text/javascript">alert("boş alan bırakmayın");</script>
			<?php
			}else{

					if($sifre1 == $sifre){
						$degerler = array(
							$kadi1,
							$sifre
						);
						$this->load->database();
						$this->load->model("uye_model");
						$sorgu = $this->uye_model->kullanici_ekle($degerler);
						if($sorgu){
							echo "tebrikler basariyla kayit oldunuz";
							header('location:  http://localhost:8090/rehber/index.php/anasayfa');
						}else{
							echo "kayit işlemi gerçekleşmedi";
						}
					}else{
						?>
						<script type="text/javascript">alert("lütfen sifrelerden her ikisini aynı girin");</script>
					<?php
					}
				}
			}
		}

	public function uyeGoster(){
		$this->load->model('uye_model');

		$data["liste"] = $this->uye_model->listele();

		$this->load->view('admin_view',$data);
	}

	public function kisiEkle(){


		if($_POST){

			$ad 	= $this->input->post("ad");
			$soyad  = $this->input->post("soyad");
			$tel 	= $this->input->post("tel");
			$eposta = $this->input->post("eposta");
			$adres  = $this->input->post("adres");

			if(!$ad || !$soyad || !$tel || !$eposta || !$adres ){
				echo "tum alanları doldurun";
			}else{
				$degerler = array(
					$ad,$soyad,$tel,$eposta,$adres
				);
				$this->load->model("sorgu_model");
				$sorgu = $this->sorgu_model->kisiekle($degerler);
				if($sorgu){
					echo "basarili ekleme";
				}else{
					echo "basarisiz ekleme";
				}
			}
		}else{
			echo "post işlemi gercekleşmedi";
		}
	}

}
