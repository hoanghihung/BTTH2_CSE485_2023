<<<<<<< HEAD
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
=======
<?php 
>>>>>>> c78d20130564f169b68f7dfb4e6ca887a8c60441
?>