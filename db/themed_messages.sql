USE stringr_db;

CREATE TABLE IF NOT EXISTS themed_messages (
    msg int,
    topic int,
    FOREIGN KEY (msg) REFERENCES messages(message_id),
    FOREIGN KEY (topic) REFERENCES topics(topic_id)
) engine=InnoDB;