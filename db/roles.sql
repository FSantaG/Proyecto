USE stringr_db;

CREATE TABLE roles (
    role_id int(1) NOT NULL PRIMARY KEY,
    value varchar(15)
)ENGINE = INNODB;

INSERT INTO roles(role_id, value) VALUES (1, "admin");
INSERT INTO roles(role_id, value) VALUES (2, "moderator");
INSERT INTO roles(role_id, value) VALUES (3, "standard");