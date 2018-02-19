CREATE DATABASE IF NOT EXISTS mydatabase;
USE mydatabase;
DROP TABLE IF EXISTS `calls`;
CREATE TABLE calls
(
    AccountID INT NOT NULL AUTO_INCREMENT,
    Account INT DEFAULT NULL,
    Phonenumber INT DEFAULT NULL,
    DialledNumber INT DEFAULT NULL,
    Destination varchar(100) DEFAULT NULL,
    DateofCall date DEFAULT NULL,
    TimeofCall time DEFAULT NULL,
    UsageType varchar(100) DEFAULT NULL,
    UsageSub varchar(100) DEFAULT NULL,
    TransmissionType varchar(100) DEFAULT NULL,
    Duration time DEFAULT NULL,
    UplinkBytes INT DEFAULT NULL,
    DownlinkBytes INT DEFAULT NULL,
    TotalDataVolume INT DEFAULT NULL,
    Cost float DEFAULT NULL ,
    BundleType varchar(100) DEFAULT NULL,
    RoamedCategory varchar(100) DEFAULT NULL,
    CountryofOrigin varchar(100) DEFAULT NULL,
    Network varchar(100) DEFAULT NULL,
    UsageDirection varchar(100) DEFAULT NULL,
    BillSeq INT DEFAULT NULL,
    InvoiceNumber INT DEFAULT NULL,
    PRIMARY KEY (AccountID)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;
