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
		
		public function getCategories(){
			
			$queryResult=$this->db->query("SELECT TYPE FROM PRODUCTS GROUP BY TYPE");
			$result=array();
			while($row=$queryResult->fetch_assoc()){
				$result[]=$row["TYPE"];
			}
			$queryResult->free_result();
			return $result;
		}
		public function getProducts(){
			
			$queryResult=$this->db->query("SELECT * FROM PRODUCTS");
			$result=array();
			while($row=$queryResult->fetch_assoc()){
				$result[]=$row;
			}
			
			$queryResult->free_result();
			return $result;
		}
		public function getBrands(){
			$queryResult=$this->db->query("SELECT NAME,IMAGE FROM COMPANIES");
			$result=array();
			while($row=$queryResult->fetch_assoc()){
				$result[]=$row;
			}
			$queryResult->free_result();
			return $result;
		}
		
	public function getProduct($id){
		$myId=$this->db->real_escape_string($id);
		$stmt=$this->db->prepare("SELECT * FROM PRODUCTS WHERE ID = ?");
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$stmt->free_result();
		return $result->fetch_assoc();
	}
	}
?>