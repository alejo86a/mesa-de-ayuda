  <?php
/**
 * User: Arif Uddin
 * Date: 4/6/12
 * Time: 4:51 PM
 */

class DatabaseConnection {

    private $dbUser;
    private $dbPassword;
    private $dbName;
    private $dbHost;

    public function DatabaseConnection() {
        $this->dbUser = 'bde207ba7043d6';
        $this->dbPassword = 'ac8054e1';
        $this->dbName = 'heroku_7df0d6bf5653554';
        $this->dbHost = 'us-cdbr-east-03.cleardb.com';
    }

    public function GetDB() {
        $db = new ezSQL_mysql($this->dbUser, $this->dbPassword, $this->dbName, $this->dbHost);
        return $db;
    }
}
