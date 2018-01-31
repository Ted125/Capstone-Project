<?php 
    class review{
        private $reviewId;
        private $rating;
        private $likes;
        private $title;
        private $body;
        private $dateAdded;
        private $dateUpdated;
        private $customerId;
        private $furnitureId;
        private $addedBy;
        private $updatedBy;

        const DB_TABLE = "review";
        const DB_TABLE_PK = "reviewId";
    
    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){

    }

    /***************** FUNCTIONS *****************/

    public function displayAllSellerReview(){
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $query ="SELECT 
                        reviewId,
                        rating,
                        likes,
                        title,
                        body,
                        review.dateAdded AS dateAdded,
                        review.dateUpdated AS dateUpdated,
                        review.customerId AS customerId,
                        review.furnitureId AS furnitureId,
                        sellerId,
                        name,
                        firstName,
                        middleName,
                        lastName
                        FROM  review
                        INNER JOIN furniture ON review.furnitureId = furniture.furnitureId
                        INNER JOIN customer ON review.customerId = customer.customerId
                        WHERE sellerId = ".$_SESSION['sellerId']."
                ";

            $result = mysqli_query($connection, $query);
        }else{
            echo 'no connection';
        }
        return $result;
    }

    /************ SETTERS AND GETTERS ************/
        
    public function getReviewId(){
        return $this->reviewId;
    }

    public function setReviewId($reviewId){
        $this->reviewId = $reviewId;
    }

    public function getRating(){
        return $this->rating;
    }

    public function setRating($rating){
        $this->rating = $rating;
    }

    public function getLikes(){
        return $this->likes;
    }

    public function setLikes($likes){
        $this->likes = $likes;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getBody(){
        return $this->body;
    }

    public function setBody($body){
        $this->body = $body;
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

    public function getCustomerId(){
        return $this->customerId;
    }

    public function setCustomerId($customerId){
        $this->customerId = $customerId;
    }

    public function getFurnitureId(){
        return $this->furnitureId;
    }

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
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
}
?>