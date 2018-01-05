<?php 
require("SQL_Connect.php");
include("Database.php");
include("userDetails.php");

class furniture_specification{
    private $specId;
    private $specification;
    private $furnitureId;

    const DB_TABLE = "furniture_specification";
    const DB_TABLE_PK = "specId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        
    }

    /***************** FUNCTIONS ****************/

    public function createFurnitureSpecification($furnitureId){
        if(isset($_SESSION)){
            $this->setUserType($_SESSION['userType']);
            if(strcmp($this->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    //$furniture = new furniture();
                    $this->setSpecification($_POST['specification']);
                    $this->setFurnitureId($furnitureId);
                    $create = "INSERT INTO furniture_specification
                    ( 
                    status
                    furnitureId
                    )
                    VALUES
                    ('".$this->getSpecification()."',
                    '".$this->getFurnitureId()."',
                    )";
                    
                    $result = mysqli_query($connection, $create);   
                }
            }else{
                 echo 'only sellers can add furniture specifications';
            }
        }else{
            echo 'no session found';
        }
        return $result;
    }

    public function displayFurnitureSpecification($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = null;
        if($connection){
            //$result = NULL;
            $query ="SELECT *
            FROM  furniture_specification
            WHERE furnitureId = '".$this->getFurnitureId()."'
            ";
            $result = mysqli_query($connection, $query);
                  
            //$row = mysqli_fetch_array($result);
            mysqli_close($connection);
            //$row = $result->fetch_assoc();
        } else {
            echo "Connection Error";
        }        
        return $result;
    }

    public function deleteFurnitureSpecification($furnitureId){
        if(isset($_SESSION)){
            $this->setUserType($_SESSION['userType']);
            if(strcmp($this->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setFurnitureId($furnitureId);
                    $delete = "DELETE
                               FROM furniture_specification
                               WHERE furnitureId = '".$this->getFurnitureId()."'
                              ";
                    $result = mysqli_query($mysqli, $delete);
                }else{
                    echo 'no connection';
                }
            }else{
                echo 'only sellers can delete their own furniture';
            }
        }else{
            echo 'no session';
        }
        return $result;
    }

    /************ SETTERS AND GETTERS ************/
    
    public function getSpecId(){
        return $this->specId;
    }

    public function setUserId($specId){
        $this->specId = $specId;
    }

    public function getSpecification(){
        return $this->specification;
    }

    public function setSpecification($specification){
        $this->specification = $specification;
    }

    public function getFurnitureId(){
        return $this->furnitureId;
    }

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
    }

}

?>