DROP DATABASE IF EXISTS finalProjectDelaneyDayoan;
CREATE DATABASE finalProjectDelaneyDayoan;
use finalProjectDelaneyDayoan;

DROP TABLE IF EXISTS roles;
CREATE TABLE roles (
    roleId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    roleName VARCHAR(255)
);

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    userId INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username VARCHAR(255),
    userPassword VARCHAR(255),
    fullName VARCHAR(255),
    siteRole INT,
    FOREIGN KEY (siteRole) REFERENCES roles(roleId) ON DELETE CASCADE,
    trailsDone VARCHAR(255) DEFAULT "",
    userPicture MEDIUMBLOB,
    pictureType VARCHAR(255)
);

DROP TABLE IF EXISTS trails;
CREATE TABLE trails (
    trailId INT PRIMARY KEY,
    trailName VARCHAR(255),
    trailDescription VARCHAR(5000),
    trailLocation VARCHAR(255),
    trailCity VARCHAR(255),
    trailIcons VARCHAR(255)
);

INSERT INTO roles (roleName)
VALUES
("admin"),
("maintainer"),
("user");

INSERT INTO trails (trailName, trailId, trailDescription, trailLocation, trailCity, trailIcons)
VALUES
("Sought Bike Trail", 0, "For this trail there is no designated parking. The northeast entrance of the trail has a gas station near it, that may be willing to let you park there.", "Sought Bike Trail, New London, OH 44851", "Akron", ""),
("Berlin Lake Trail", 1, "There are two entrances to this trail, one north of the trail and one south of the trail", "US-224, Deerfield, OH 44411", "Akron", '<i class="fa-solid fa-square-parking"></i> <i class="fa-solid fa-wheelchair"></i>'),
("Centennial Lake Link Trail", 2, "Is connected to the Ohio & Erie Canal Townpath Trail", "Centennial Lake Link Trail, Cleveland, OH 44113", "Cleveland", ""),
("Cleveland Lakefront Bikeway", 3, "This trail has no praking, there are neighboorhoods on either end of the trail. This would make a good trail to travel safely to and from each neighborhood.", "Lakefront Bikeway, Cleveland, OH", "Cleveland", ""),
("Slippery Elm Trail", 4, "This trail has three areas that you can access the path from.", "1486 Portage Rd, Portage, OH 43451", "Toledo", '<i class="fa-solid fa-square-parking"></i> <i class="fa-solid fa-wheelchair"></i> <i class="fa-solid fa-restroom"></i>'),
("University Parks Trail", 5, "This trail goes through the University of Toledo", "University Parks Trail, Ohio", "Toledo", '<i class="fa-solid fa-square-parking"></i> <i class="fa-solid fa-wheelchair"></i> <i class="fa-solid fa-restroom"></i> <i class="fa-solid fa-faucet-drip"></i>'),
("Wolf Creek Trail", 6, "This trail has multiple spots where you can park", "5000 Diamond Mill Rd, Dayton, OH 45426", "Dayton", '<i class="fa-solid fa-square-parking"></i> <i class="fa-solid fa-wheelchair"></i> <i class="fa-solid fa-restroom"></i>'),
("Mad River Trtail", 7, "This trail goes through the heart of Dayton", "Mad River Trail, Dayton, OH 45404", "Dayton", '<i class="fa-solid fa-square-parking"></i> <i class="fa-solid fa-wheelchair"></i> <i class="fa-solid fa-restroom"></i> <i class="fa-solid fa-faucet-drip"></i>'),
("Mill Creek Greenway", 8, "This trail runs along Mill Creek and runs behind some businesses", "Mill Creek Greenway Trail, Cincinnati, OH", "Cincinatti", ""),
("Lunken Field Trail", 9, "This trail goes past the Cincinatti Airport", "Wilmer Ave, Cincinnati, OH 45226", "Cincinatti", '<i class="fa-solid fa-square-parking"></i> <i class="fa-solid fa-wheelchair"></i> <i class="fa-solid fa-restroom"></i>'),
("Olentangy Trail", 10, "This trail goes through Ohio State's campus and is easily accessible", "600 W Wilson Bridge Rd, Worthington, OH 43085", "Columbus", '<i class="fa-solid fa-square-parking"></i> <i class="fa-solid fa-wheelchair"></i> <i class="fa-solid fa-restroom"></i> <i class="fa-solid fa-faucet-drip"></i>'),
("Heritage Rail Trail", 11, "This trail goes along a railroad", "4151 Winterringer St, Hilliard, OH 43026", "Columbus", '<i class="fa-solid fa-square-parking"></i> <i class="fa-solid fa-wheelchair"></i> <i class="fa-solid fa-restroom"></i> <i class="fa-solid fa-faucet-drip"></i>');


select* from roles;
select * from users;
select users.username, roles.roleName from users INNER JOIN roles ON roles.roleId = users.siteRole;