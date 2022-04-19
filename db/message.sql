USE stringr_db

CREATE TABLE IF NOT EXISTS messages {
    message_id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(15) FOREIGN KEY REFERENCES users(username),
    msg varchar,
    post_date datetime
}engine=InnoDB;