
CREATE TABLE user (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone INTEGER NOT NULL,
    created_at DATETIME
);


CREATE TABLE address (
   id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
   city VARCHAR(255) NOT NULL,
   street TEXT DEFAULT NULL,
   created_at DATETIME
);


CREATE TABLE product (
  id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT DEFAULT NULL,
  brochure VARCHAR(255) DEFAULT NULL,
  created_at DATETIME
);