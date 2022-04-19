USE stringr_db

CREATE TABLE IF NOT EXISTS topics {
    topic_id int PRIMARY KEY AUTO_INCREMENT,
    value varchar(20)
}engine=InnoDB;