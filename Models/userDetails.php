<?php 

require("SQL_Connect.php");
include("Database.php");

class user_details{
    private $userId;
    private $username;
    private $password;
    private $userType;
    private $userStatus;
    private $gender;
    private $email;
    private $mobileNumber;
    private $dateAdded;
    private $dateUpdated;
    private $addedBy;
    private $updatedBy;
    private $image;
    private $address;

    const DB_TABLE = "user_table";
    const DB_TABLE_PK = "userId";


    /***************** CONSTRUCTOR ****************/

    public function __construct(){

    }

    /***************** FUNCTIONS ****************/
    public function debug($field, $newData){
        $create = "UPDATE user_details
                SET 
                ".$field." = '".$newData."'
                WHERE 
                user_details.userId = ".$_SESSION['userId']."";
        echo $create;

        /*sample code here*/
    }

    public function createUser($userType){
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $this->setUsername($_POST['registerUsername']);
            $this->setPassword($_POST['registerPassword']);
            $this->setUserType($userType);
            $this->setGender($_POST['registerGender']);
            $this->setEmail($_POST['registerEmail']);
            $this->setMobileNumber($_POST['registerPhone']);
            $this->setAddress("Sample Address");
            // if(isset($_SESSION)){
            //     $this->setAddedBy($_SESSION['userId']);
            // }else{
            //     $this->setAddedBy("NULL");
            // }
            //$this->setImage($_POST['image']);  i dont know if i should put an image sa creation.
            $create = "INSERT INTO user_details
            ( 
            username,
            password, 
            userType, 
            userStatus,
            gender,
            email, 
            mobileNumber,
            addedBy,
            address
            )
            VALUES
            ('".$this->getUsername()."','".$this->getPassword()."','".$this->getUserType()."','".$this->getUserStatus()."','
            ".$this->getGender()."','".$this->getEmail()."','".$this->getMobileNumber()."','".$this->getAddedBy()."','".$this->getAddress()."')";

            $result = mysqli_query($connection, $create);

            // $select = "SELECT * 
            // FROM  user_details 
            // WHERE userName='".$this->getUsername()."'";//there must be other way
            // $qry = mysqli_query($connection, $select);
            // $row = mysqli_fetch_array($qry);
            // $this->setUserId($row[0]);

            $this->setUserId($connection->insert_id);
            mysqli_close($connection);
            echo "<h1> after result in userDetails.php ".$this->getUserId()."</h1>";
            return $this->getUserId();
        }
    }

    public function updateUser($field, $newData){
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $create = "UPDATE user_details
                SET 
                ".$field." = '".$newData."'
                WHERE 
                user_details.userId = ".$_SESSION['userId']."";
            $result = mysqli_query($connection, $create);
            
            if(mysqli_affected_rows($connection) > 0){
                mysqli_close($connection);
                return true;
            } else {
                mysqli_close($connection);
                return false;
            }
        }
    }

    public function createAdmin(){
        if(isset($_SESSION) && getUserType($_SESSION['userType']) == 'admin'){
            $this->setUserStatus('active');
            $this->setUserType('admin');
            $this->createUser();
        }else{
            echo 'only admins can create an admin';
        }
    }

    public function activateUser(){
        if(isset($_SESSION) && $this->getUserType($_SESSION['userType']) == 'admin'){
            $this->setUserId($_POST['userId']);
            $update = "UPDATE user_details
            SET userStatus = 'active' 
            WHERE userId = '".$this->getUserId()."'
            ";
            $result = mysqli_query($mysqli, $update);
        }else{
            echo 'only admins can activate a user';
        }            
    }

    public function deactiveUser(){
        if(isset($_SESSION) && $this->getUserType($_SESSION['userType']) == 'admin'){
            setUserId($_POST['userId']);
            $update = "UPDATE user_details
            SET userStatus = 'inactive' 
            WHERE userId = '".getUserId()."'
            ";
            $result = mysqli_query($mysqli, $update);
        }else{
            echo 'only admins can deactivate a user';
        }
    }

    public function deleteUser(){
        if(isset($_SESSION) && $this->getUserType($_SESSION['userType']) == 'admin'){
            setUserId($_POST['userId']);
            $db = "user_details";
            $id = NULL;
            if($this->getUserType($_POST['userType'] == 'customer')){
                $db = "customer";
            }else if($this->getUserType($_POST['userType'])){
                $db = "seller";
            }	
            if($db != "user_details"){
                $select = "SELECT * 
                FROM  '".$db."' x, user_details y
                WHERE x.userId = 'y.".$this->getUserId()."'";
                $qry = mysqli_query($mysqli, $select);
                $row = mysqli_fetch_array($qry);
                $id = $row[0];

                $delete1 = "DELETE
                FROM '".$db." ' x, user_details y
                WHERE userID = 'x.".$id."' && y.userStatus = 'Not_Activated' 
                ";

                $result1 = mysqli_query($mysqli, $delete1);
                if(mysqli_num_rows($result1) == 1){
                    alert("Delete: Succesful");
                }else{
                    alert("Delete: Fail");
                }
            }
            $delete2 = "DELETE
            FROM user_table
            WHERE userID = '".$this->getUserId()."' && userStatus = 'Not_Activated' 
            ";

            $result2 = mysqli_query($mysqli, $delete2);
            if(mysqli_num_rows($result2) == 1){
                '<script>alert("Delete: Succesful");</script>';
            }else{
                '<script>alert("Delete: Fail");</script>';
            }
        }else{
            echo 'only admins can deactivate a user';
        }


        return result;
    }

    public function Login($sessionEmail, $sessionPassword){
        $connection = $this->Connect();
        if($connection){
          //If possible please replace query name  with sql name, plox
          $query = "SELECT user_details.userId AS userId, username, email, userType, gender, mobileNumber, dateAdded, address, firstName, middleName, lastName, birthdate 
          FROM user_details INNER JOIN customer ON customer.userId = user_details.userId 
          WHERE email = '".$sessionEmail."' AND  password = '".$sessionPassword."'";
          //echo $this->DB_TABLE.$sessionEmail.$sessionPassword;
          echo "||".$query;
          $rowcount = 0;
          if($result = mysqli_query($connection, $query)){
            //return number of result
            $rowcount=mysqli_num_rows($result);
            echo "ROWCOUNT=".$rowcount;
          } else {
            echo "Connection Error";
          }
          mysqli_close($connection);
          if($rowcount == 1){
            // header('Location: ' . "www.google.com");
            // echo "<h1>LOGGED IN!</h1>";
            //return the data from the Query
            $row = $result->fetch_assoc();
            return $row;
          }else{
            return null;
          }
        }
      }

    public function readAdmin(){
        $query ="SELECT
        userId,
        username,
        userType,
        `status`,
        gender,
        email,
        mobileNumber,
        `image`,
        `address`
        FROM  user_details
        WHERE userId = '".$this->getUserId()."'
        ";

        $row = mysqli_query($mysqli, $query);
        if(mysqli_num_rows($row) == 1){        
            $result = mysqli_fetch_array($row);
            return result;
        }else{
            return NULL;
        }
    }

    /***************** SETTERS AND GETTERS ****************/

    public function getUserId(){
        return $this->user_id;
    }

    public function setUserId($userId){
        $this->userId = $userId;
    }

    public function getUsername(){
        return $this->username; 
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getUserType(){
        return $this->userType;
    }

    public function setUserType($userType){
        $this->userType = $userType;
    }

    public function getUserStatus(){
        return $this->userStatus;
    }

    public function setUserStatus($userStatus){
        $this->userStatus = $userStatus;
    }

    public function getGender(){
        return $this->gender;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getMobileNumber(){
        return $this->mobileNumber;
    }

    public function setMobileNumber($mobileNumber){
        $this->mobileNumber = $mobileNumber;
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

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setAddress($address){
        $this->address = $address;
    }
}
?>