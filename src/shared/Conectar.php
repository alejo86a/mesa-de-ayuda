<?php

class Conectar{
    private $host;
    private $db;
    private $user;
    private $password;
         

    public function __construct(){
        $this->host     = 'us-cdbr-east-03.cleardb.com';
        $this->db       = 'heroku_7df0d6bf5653554';
        $this->user     = 'bde207ba7043d6';
        $this->password = 'ac8054e1';
    }

    function connect(){
    
        try{
            
            // Create connection
						$conn = new mysqli('us-cdbr-east-03.cleardb.com', 'bde207ba7043d6', 'ac8054e1', 'heroku_7df0d6bf5653554');
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}
    
            return $conn;

        }catch(PDOException $e){
//             echo ('Error connection: ' . $e->getMessage());
            
//             print_r('Error connection: ' . $e->getMessage());
					?>
					<script>
						alert('Hay problemas con la conexión..');

					</script>
					<?php
						}   
    }
}
?>
