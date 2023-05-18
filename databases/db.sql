Create DATABASE notes;
USE notes;
CREATE TABLE notes (
    noteId int(255) NOT NULL AUTO_INCREMENT,
    title varchar(255) NOT NULL,
    toDo varchar(255) NOT NULL,
    priorityLevel varchar(255) NOT NULL,
    PRIMARY KEY(noteId)
);
