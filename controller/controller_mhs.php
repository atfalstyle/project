<?php 
	class Anggota 
	{
		private $db;
		function __construct($dbs) 
		{
			$this->db = $dbs;
		}

		public function tambah($nim, $nama, $jrsn) 
		{
			try 
			{
				$insert = $this->db->prepare("INSERT INTO tb_m(nim,nama,jrsn) VALUES(?,?,?)");
				$insert->bindParam(1, $nim);
				$insert->bindParam(2, $nama);
				$insert->bindParam(3, $jrsn);
				$insert->execute();
				return true;
			}
			catch(Exception $e){
				echo $e->getMessage();
				return false;
			}
		}

		public function edit($nim, $nama, $jrsn, $nim2)
		{
			try
			{
				$edit = $this->db->prepare("UPDATE tb_m SET nim = ?, nama = ?, jrsn = ? WHERE nim = ?");
				$edit->execute(array($nim, $nama, $jrsn, $nim2));
				return true;
			}
			catch(Exception $e) {
				echo $e->getMessage();
				return false;
			}
		}

		public function hapus($id)
		{
			try
			{
				$hapus = $this->db->prepare("DELETE FROM tb_m WHERE nim = :nim");
				$hapus->bindParam(':nim', $id);
				$hapus->execute();
			}
			catch(Exception $e) {
				echo $e->getMessage();
				return false;
			}
		}
	}
?>