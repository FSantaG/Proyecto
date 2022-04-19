USE stringr_db

CREATE TABLE IF NOT EXISTS users {
    username varchar(15) PRIMARY KEY,
    email varchar(50) UNIQUE,
    pass varchar(30),
    role int(1) FOREIGN KEY REFERENCES roles(role_id)
}engine=InnoDB;