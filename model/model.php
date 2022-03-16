<?php
	/**
	 * 
	 */
	require_once './model/connect.php';

	class Model extends Connect {
		private $db,$rootPath;
		public function __construct()
		{

			$this->db = Parent::connection();
			$this->rootPath="{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["HTTP_HOST"]}/tp-link-guayana";
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
		public function getProductsByCategory($category){
			$categorySanitized = $this->db->real_escape_string($category);
			$stmt=$this->db->prepare("SELECT id,name,type,company,price,stock,photo,new,promo FROM PRODUCTS WHERE TYPE=?");
			$stmt->bind_param("s",$categorySanitized);
			$stmt->execute();
			$result=$stmt->get_result();
			$stmt->free_result();
			$myResult = [];
			while($row=$result->fetch_assoc()){
				$myResult[]=$row;
			}
			return $myResult;
		}
		public function getPromoProducts(){
			$queryResult=$this->db->query("SELECT id,name,type,company,price,stock,photo,new,promo FROM PRODUCTS WHERE PROMO");
			$result=[];
			while($row=$queryResult->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
		}public function getNewProducts(){
			$queryResult=$this->db->query("SELECT id,name,type,company,price,stock,photo,new,promo FROM PRODUCTS WHERE NEW");
			$result=[];
			while($row=$queryResult->fetch_assoc()){
				$result[]=$row;
			}
			return $result;
		}
		public function getProductsByCompany($company){
			
			$myId=$this->db->real_escape_string($company);
			$stmt=$this->db->prepare("SELECT id,name,type,company,price,stock,photo,new,promo FROM PRODUCTS WHERE COMPANY = ?");
			$stmt->bind_param("s",$company);
			$stmt->execute();
			$result=$stmt->get_result();
			$stmt->free_result();
			$myResult=[];
			while($row=$result->fetch_assoc()){
				$myResult[]=$row;
			}
			return $myResult;
		}
		public function getProducts(){
			
			$queryResult=$this->db->query("SELECT id,name,type,company,price,stock,photo,new,promo FROM PRODUCTS");
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
		$stmt->bind_param("i",$myId);
		$stmt->execute();
		$result=$stmt->get_result();
		$stmt->free_result();
		return $result->fetch_assoc();
	}
	public function searchProduct($keyword){
		$keywordSanitized = $this->db->real_escape_string("%".$keyword."%");
		$stmt=$this->db->prepare("SELECT id,name,type,company,price,stock,photo,new,promo FROM PRODUCTS WHERE KEYWORDS LIKE ?");
		$stmt->bind_param("s",$keywordSanitized);
		$stmt->execute();
		$result=$stmt->get_result();
		$stmt->free_result();
		$myResult=[];
		while($row=$result->fetch_assoc()){
			$myResult=$row;
		}
		return $myResult;		
	}
	public function getRootPath(){
		return $this->rootPath;
	}
}
?>