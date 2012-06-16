CREATE TABLE `contacts` (
  `ID_Contact` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telephone` varchar(15),
  `Address` TEXT,
  `Situation` varchar(15) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`ID_Contact`)
)

insert into contacts 
(Name, Email, Telephone, Address) 
	values 
('Hugo', "caarlos@hasd.com", "3124454", "Conocido");
