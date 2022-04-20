USE stringr_db;

CREATE TABLE IF NOT EXISTS messages (
    message_id int PRIMARY KEY AUTO_INCREMENT,
    user varchar(15),
    msg mediumtext,
    post_date datetime,
    FOREIGN KEY (user) REFERENCES users(username)
) engine=InnoDB;