_____CREATE TABLE___

CREATE TABLE `lms`.`category` ( `cid` INT(255) NOT NULL AUTO_INCREMENT , `category_name` VARCHAR(255) NOT NULL , `creationDate` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  PRIMARY KEY (`cid`))


CREATE TABLE `lms`. `subcategory` ( `sid` INT(255) NOT NULL AUTO_INCREMENT , `cid` INT(255) NOT NULL , `subcategory_name` VARCHAR(255) NOT NULL , `creationDate` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sid`), FOREIGN KEY(`cid`) REFERENCES `category`(`cid`)) 

CREATE TABLE `lms`.`oweraccount` (`accounttype` VARCHAR(50) NOT NULL,`CompanyName` VARCHAR(50) NULL ,`name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `contactNo` INT(255) NOT NULL , `Office Address` TEXT NULL,`user_name` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`user_name`))

CREATE TABLE `lms`. `location` ( `lid` INT(255) NOT NULL AUTO_INCREMENT , `l_CITY` VARCHAR(255) NOT NULL , PRIMARY KEY (`lid`))

CREATE TABLE `lms`. `insertproperty` ( `pid` INT(255) NOT NULL AUTO_INCREMENT ,`cid` INT(255) NOT NULL,`sid` INT(255) NOT NULL, `lid` INT(255) NOT NULL ,`user_name` VARCHAR(255) NOT NULL,`p_NAME` VARCHAR(255) NOT NULL , `p_SUMMARY` LONGTEXT NOT NULL , `p_FEATURES` LONGTEXT NOT NULL , `p_DESCRIPTION` LONGTEXT NOT NULL ,  `P_IMAGE` VARCHAR(255) NOT NULL , `ptype` VARCHAR(10) NOT NULL ,`creationDate` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,PRIMARY KEY (`pid`) , FOREIGN KEY(`lid`) REFERENCES `location`(`lid`),FOREIGN KEY(`cid`) REFERENCES `category`(`cid`),FOREIGN KEY(`sid`) REFERENCES `subcategory`(`sid`),FOREIGN KEY(`user_name`) REFERENCES `oweraccount`( `user_name`) ) 




CREATE TABLE `lms`.`contact` ( `pid` INT(255) NOT NULL , `user_name` VARCHAR(255) NOT NULL , `cname` VARCHAR(255) NOT NULL , `cContactNo` VARCHAR(255) NOT NULL , `cemail` VARCHAR(255) NOT NULL , `massage` LONGTEXT NOT NULL , PRIMARY KEY (`cemail`),FOREIGN KEY( `user_name`) REFERENCES `oweraccount`( `user_name`) ,FOREIGN KEY( `pid`) REFERENCES `insertproperty`( `pid`) )

_________INSERT_____

INSERT INTO category(category_name)
	 VALUES ('Residential'),('Commercial'),('Land/Plot')
     
     
INSERT INTO subcategory(cid,subcategory_name)
	 VALUES (1,'Apartment/Flat'),(1,'Independent House'),(1,'Duplex Home'),(1,'Studio Apartment'),
             (2,'Office Space'),(2,'Idustrial pace'),(2,'Show Room'),
             (3,'Rsidential Plot'),(3,'Commercial Plot'),(3,'Agriculture Plot')
             
INSERT INTO location( l_CITY) VALUES ('Dhaka'),('Chittagong'),('Rajshahi'),('Mymensingh'),('Khulna'),('Sylhet'),('Barisal'),('Rangpur'),('Comilla'),('Narayanganj'),('Gazipur')
             
