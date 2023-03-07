<?php
class User {
    // parameters
    public $conn;
    public $userId;
    public $username;
    public $fullName;
    public $userPicture;
    public $pictureType;
    public $siteRole;
    public $trailsDone;


    function __construct($conn, $userInfo) {
        $this->conn = $conn;
        $this->userId = $userInfo['userId'];
        $this->username = $userInfo['username'];
        if (isset($userInfo['userPicture'])) {
            $this->userPicture = $userInfo['userPicture'];
        }
        else{
            $this->userPicture = file_get_contents("../includes/bikedefault.jpeg");
        }
        $this->fullName = $userInfo['fullName'];
        $this->siteRole = $userInfo['siteRole'];
        $this->trailsDone = $userInfo['trailsDone'];
        $this->pictureType = $userInfo['pictureType'];
    }

    function __destruct() { }


    static function getUserById($conn, $username){
        $selectUser = "SELECT * FROM users WHERE username=:username";
        $stmt = $conn->prepare($selectUser);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
   
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $user = new User($conn, $listRow);
        }

        return $user;

    }

}
