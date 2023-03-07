<?php
class Trail {
    // parameters
    public $conn;
    public $trailId;
    public $trailName;
    public $trailDescription;
    public $trailLocation;
    public $trailCity;
    public $trailIcons;

    function __construct($conn, $trailInfo) {
        $this->conn = $conn;
        $this->trailId = $trailInfo['trailId'];
        $this->trailName = $trailInfo['trailName'];
        $this->trailDescription = $trailInfo['trailDescription'];
        $this->trailLocation = $trailInfo['trailLocation'];
        $this->trailCity = $trailInfo['trailCity'];
        $this->trailIcons = $trailInfo['trailIcons'];
    }

    function __destruct() { }

    static function getTrailsFromDb($conn, $city) {
        $selectTrails = "SELECT * FROM trails WHERE trailCity=:city";
        $stmt = $conn->prepare($selectTrails);
        $stmt->bindParam(':city', $city, PDO::PARAM_STR);
        $stmt->execute();
       
        $trailList = array();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $trail = new Trail($conn, $listRow);
            $trailList[] = $trail;
        }
    
        return $trailList;
    }

    static function getTrailsById($conn, $trailId){
        $selectTrails = "SELECT * FROM trails WHERE trailId=:trailId";
        $stmt = $conn->prepare($selectTrails);
        $stmt->bindParam(':trailId', $trailId, PDO::PARAM_INT);
        $stmt->execute();
   
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listRow) {
            $trail = new Trail($conn, $listRow);
        }

        return $trail;

    }

}
