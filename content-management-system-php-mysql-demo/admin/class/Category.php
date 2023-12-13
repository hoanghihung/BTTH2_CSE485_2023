<<<<<<< HEAD
<?php
class Category { 
	
	private $categoryTable = 'cms_category';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	
	
	public function totalCategory(){		
		$sqlQuery = "SELECT * FROM ".$this->categoryTable;			
		$stmt = $this->conn->prepare($sqlQuery);			
		$stmt->execute();
		$result = $stmt->get_result();
		return $result->num_rows;	
	}	
}
=======
<?php 
>>>>>>> c78d20130564f169b68f7dfb4e6ca887a8c60441
?>