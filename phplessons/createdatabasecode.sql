-- How to create a table and insert it
CREATE TABLE 
	users( user_id int(11) AUTO_INCREMENT PRIMARY KEY not NULL, 
	user_first varchar(256) not NULL, 
	user_last varchar(256) not NULL, 
	user_email varchar(256) not NULL, 
	user_uid varchar(256) not NULL, 
	user_pwd varchar(256) not NULL 
);
INSERT INTO users( user_first, user_last, user_email, user_uid, user_pwd)
VALUES ('Mythical','Xenon','mythxenon12@gmail.com',"Member","test123");