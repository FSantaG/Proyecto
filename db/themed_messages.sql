USE stringr_db

CREATE TABLE IF NOT EXISTS themed_messages {
    msg int FOREIGN KEY REFERENCES messages(message_id),
    topic int FOREIGN KEY REFERENCES topics(topic_id)
}engine=InnoDB;