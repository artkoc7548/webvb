
 CREATE TABLE ab_uzytkownicy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL

 );

 CREATE TABLE ab_maszyny (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idUzytkownika VARCHAR(50) NOT NULL,
    nazwaMaszyny VARCHAR(100) UNIQUE NOT NULL,
  
 )
