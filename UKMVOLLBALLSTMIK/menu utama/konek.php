<?php
class databases {
	public $host   = 'localhost';
	public $name   = 'root';
	public $pass   = '';
	Public $dbname = 'db_ukmvoli';
	public $mysqli;

	//fungsi menguji koneksi database
		function __construct(){
		$this->mysqli = new mysqli($this->host, $this->name, $this->pass, $this->dbname);
		if ($this->mysqli->connect_errno){
			echo "databse not found";
			exit;
			}
		}

    public function get_show_gallery(){
		$data_gallery = "SELECT DISTINCT category_gallery FROM tbl_gallery ORDER BY id_gallery DESC";
		$hasil_gallery = $this->mysqli->query($data_gallery);
		while($row_gallery=mysqli_fetch_array($hasil_gallery)){
			$result_gallery[] = $row_gallery;
		}
		return $result_gallery;
		}

		public function get_show_gallery_detail(){
		$data_gallery = "SELECT * FROM tbl_gallery ORDER BY id_gallery DESC";
		$hasil_gallery = $this->mysqli->query($data_gallery);
		while($row_gallery=mysqli_fetch_array($hasil_gallery)){
			$result_gallery[] = $row_gallery;
		}
		return $result_gallery;
		}
    }
?>