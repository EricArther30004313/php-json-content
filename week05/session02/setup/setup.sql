use containerdb;

CREATE TABLE IF NOT EXISTS somedata (
    id VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    passwrd VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);

-- SELECT * FROM somedata;

-- truncate somedata;