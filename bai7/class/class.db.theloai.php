<?php
include 'class.db.php'
class DB_TheLoai extends DB{
	function __contruct{
		parent::__construct();
	}
	public function get_theloai($id=-1){
		$query= "SELECT * FROM theloai";
		if($id != -1) $query .= "WHERE idTL=$id";
		$result = $this->db_query($query);
		$theloai = array();
		$i = 0;
		while($row = $this->dba_fetch($result)){
			$theloai[$i++]=$row;
		}
		return $theloai;
	}
	public funtion them_theloai($name, $sort=0, $show=1){
		$query ="INSERT INTO theloai(TenTL, ThuTu, AnHien)
		Values('$name','$sort','$show')";
		$result = $this->db_query($query);
		return $result;
	}
	public function sua_theloai($id, $name, $sort, $show)
	{
		$query = "UPDATE theloai SET TenTL='name', ThuTu='$sort', AnHien='$show' WHERE idTL=$id";
		$result = $this->db_query($query);
		return $result;
	}
	public function xoa_theloai($id)
	{
		$query = "DELETE FROM theloai WHERE idTL=$id";
		$result = $this->db_query($query);
		return $result;
	}
}