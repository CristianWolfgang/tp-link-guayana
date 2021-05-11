<?php
	/**
	 * 
	 */
	require_once './model/connect.php';

	class Model extends Connect {
		private $db,$result;
		public function __construct()
		{

			$this->db = Parent::connection();
			$this->result = array();
		}

		public function getData($sql){
			$myResult=$this->db->query($sql,MYSQLI_USE_RESULT) or die($this->db->error);
			while($row = $myResult->fetch_assoc()){
				$this->result[]=$row;
			}
			return $this->result;
		}
	}

?>