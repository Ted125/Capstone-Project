<?php 
require("SQL_Connect.php");
include("Database.php");
include("userDetails.php");

class furniture_image{
    private $furnitureImageId;
    private $image;
    private $furnitureId;
    private $dateAdded;
    private $dateUpdated;
    private $addedBy;
    private $updatedBy;
    private $furnitureId;

    const DB_TABLE = "furniture_image";
    const DB_TABLE_PK = "furnitureImageId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        
    }

    /***************** FUNCTIONS ****************/

    public function createFurnitureImage($furnitureId){
        if(isset($_SESSION)){
            $this->setUserType($_SESSION['userType']);
            if(strcmp($this->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setImage($_POST['image']);
                    $this->setFurnitureId($furnitureId);
                    $this->setAddedBy($_SESSION['userId']);
                    $this->setUpdatedBy($_SESSION['userId']);
                    $create = "INSERT INTO furniture_image
                    ( 
                    status
                    furnitureId
                    )
                    VALUES
                    ('".$this->getStatus()."',
                    '".$this->getFurnitureId()."',
                    '".$this->getAddedBy()."',
                    '".$this->getUpdatedBy()."'
                    )";
                    
                    $result = mysqli_query($connection, $create);   
                }
            }else{
                 echo 'only sellers can add furniture image';
            }
        }else{
            echo 'no session found';
        }
        return $result;
    }

    public function displayFurnitureImage($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = null;
        if($connection){
            //$result = NULL;
            $query ="SELECT *
            FROM  furniture_image
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

    public function deleteFurnitureImage($furnitureId){
        if(isset($_SESSION)){
            $this->setUserType($_SESSION['userType']);
            if(strcmp($this->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setFurnitureId($furnitureId);
                    $delete = "DELETE
                               FROM furniture_image
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
    
    public function getFurnitureImageId(){
        return $this->furnitureImageId;
    }

    public function setFurnitureImageId($furnitureImageId){
        $this->furnitureImageId = $furnitureImageId;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getFurnitureId(){
        return $this->furnitureId;
    }

    public function getDateAdded(){
        return $this->dateAdded;
    }

    public function setDateAdded($dateAdded){
        $this->dateAdded = $dateAdded;
    }

    public function getDateUpdated(){
        return $this->dateUpdated;
    }

    public function setDateUpdated($dateUpdated){
        $this->dateUpdated = $dateUpdated;
    }

    public function getAddedBy(){
        return $this->addedBy;
    }

    public function setAddedBy($addedBy){
        $this->addedBy = $addedBy;
    }

    public function getUpdatedBy(){
        return $this->updatedBy;
    }

    public function setUpdatedBy($updatedBy){
        $this->updatedBy = $updatedBy;
    }

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
    }

}

?>