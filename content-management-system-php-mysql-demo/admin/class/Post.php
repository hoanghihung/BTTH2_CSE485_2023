<?php
class Post {	
   
	private $postTable = 'cms_posts';
	private $categoryTable = 'cms_category';
	private $userTable = 'cms_user';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	
	
	public function totalPost(){		
		$sqlQuery = "SELECT * FROM ".$this->postTable;			
		$stmt = $this->conn->prepare($sqlQuery);			
		$stmt->execute();
		$result = $stmt->get_result();
		return $result->num_rows;	
	}	
}
?>