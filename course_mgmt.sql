-- Create the database
DROP DATABASE IF EXISTS course_management;
CREATE DATABASE course_management;
USE course_management;

CREATE TABLE students (
    studentID int NOT NULL AUTO_INCREMENT,
    fname varchar(50) NOT NULL,
    lname varchar(50) NOT NULL,
    gender varchar(10) NOT NULL,
    email varchar(50) NOT NULL UNIQUE,
    password varchar(50) NOT NULL,
    PRIMARY KEY (studentID)
);

INSERT INTO students VALUES 
(0000002, 'Robert', 'Hindi', 'male', 'rhindi@aum.edu', 'password'),
(1002, 'Kelly', 'Irvin', 'female', 'kelly@example.com', 'sesame'),
(1004, 'Kenzie', 'Quinn', 'female', 'kenzie@jobtrak.com', 'sesame'),
(1006, 'Anton', 'Mauro', 'male', 'amauro@yahoo.org', 'sesame'),
(1008, 'Kaitlyn', 'Anthoni', 'female', 'kanthoni@pge.com', 'sesame'),
(1010, 'Kendall', 'Mayte', 'female', 'kmayte@fresno.ca.gov', 'sesame'),
(1012, 'Marvin', 'Quintin', 'male', 'marvin@expedata.com', 'sesame'),
(1015, 'Gonzalo', 'Keeton', 'male', 'keeton@aum.edu', 'sesame'),
(1016, 'Derek', 'Chaddick', 'male', 'dChaddick@fresnophoto.com', 'sesame'),
(1017, 'Malia', 'Marques', 'female', 'malia@gmail.com', 'sesame'),
(1018, 'Emily', 'Evan', 'female', 'Emily@MicroCenter.com', 'sesame'),
(1019, 'Alexandro', 'Alexis', 'male', 'alal@yaleindustries.com', 'sesame'),
(1023, 'Ingrid', 'Neil', 'female', 'Ingrid@richadvertizing.com', 'sesame'),
(1026, 'Eileen', 'Lawrence', 'female', 'eLawrence@ecomm.com', 'sesame'),
(1027, 'Marjorie', 'Essence', 'female', 'messence@hotmail.com', 'sesame'),
(1029, 'Trentin', 'Camron', 'male', 'tCamron@ibm.com', 'sesame'),
(1030, 'Demetrius', 'Hunter', 'male', 'demetrius@termite.com', 'sesame'),
(1033, 'Thalia', 'Neftaly', 'female', 'tneftaly@enture.com', 'sesame'),
(1034, 'Harley', 'Myles', 'female', 'harley@cprinting.com', 'sesame'),
(1037, 'Gideon', 'Paris', 'male', 'gideon@opamp.com', 'sesame'),
(1038, 'Jayda', 'Maxwell', 'female', 'jmaxwell@ccredit.com', 'sesame'),
(1040, 'Kristofer', 'Gerald', 'male', 'kgerald@naylorpub.com', 'sesame'),
(1045, 'Priscilla', 'Smith', 'female', 'psmith@example.com', 'sesame'),
(1047, 'Brian', 'Griffin', 'male', 'bgriffin@azteklabel.com', 'sesame'),
(1049, 'Kaylea', 'Cheyenne', 'female', 'kaylea@yahoo.com', 'sesame'),
(1050, 'Kayle', 'Misael', 'female', 'misael@qualityeducation.com', 'sesame'),
(1051, 'Clarence', 'Maeve', 'male', 'cmaeve@springhouse.com', 'sesame'),
(1054, 'Jovon', 'Walker', 'male', 'jovon@ama.org', 'sesame'),
(1056, 'Nashalie', 'Angelica', 'female', 'nangelica@aba.org', 'sesame'),
(1063, 'Leroy', 'Aryn', 'male', 'laryn@gmail.com', 'sesame'),
(1065, 'Anne', 'Braydon', 'female', 'anne@gmail.com', 'sesame'),
(1066, 'Leah', 'Colton', 'female', 'lcolton@fresnobee.com', 'sesame'),
(1067, 'Cesar', 'Arodondo', 'male', 'arododo@drc.com', 'sesame'),
(1068, 'Rachael', 'Danielson', 'female', 'rdanielson@eop.com', 'sesame'),
(1070, 'Salina', 'Edgardo', 'female', 'sadgardo@rpc.com', 'sesame'),
(1071, 'Daniel', 'Bradlee', 'male', 'dbradlee@simondirect.com', 'sesame'),
(1074, 'Quentin', 'Warren', 'male', 'quentin@valprint.com', 'sesame'),
(1080, 'Jillian', 'Clifford', 'female', 'jillian@champion.com', 'sesame'),
(1081, 'Angel', 'Lloyd', 'female', 'alloyd@cw.com', 'sesame'),
(1083, 'Jeanette', 'Helena', 'female', 'jhelena@eds.com', 'sesame'),
(1086, 'Luciano', 'Destin', 'female', 'ldestin@mwp.com', 'sesame'),
(1089, 'Kyra', 'Francis', 'female', 'kyra@abbey.com', 'sesame'),
(1094, 'Lance', 'Potter', 'male', 'lpotter@bis.com', 'sesame'),
(1097, 'Jeffrey', 'Smitzen', 'male', 'jeffreys@example.com', 'sesame'),
(1098, 'Vance', 'Smith', 'male', 'vsmith@example.com', 'sesame'),
(1100, 'Thom', 'Aaronsen', 'male', 'taaronsen@dgm.com', 'sesame'),
(1112, 'Harold', 'Spivak', 'male', 'harold@propane.com', 'sesame'),
(1113, 'Rachael', 'Bluzinski', 'female', 'rachael@unocal.com', 'sesame'),
(1114, 'Reba', 'Hernandez', 'female', 'rhernandez@yesmed.com', 'sesame'),
(1116, 'Jaime', 'Ronaldsen', 'male', 'jronaldsen@zylka.com', 'sesame'),
(1117, 'Violet', 'Beauregard', 'female', 'vbeauregard@ups.com', 'sesame'),
(1118, 'Charlie', 'Bucket', 'male', 'cbucket@yahoo.com', 'sesame');

CREATE TABLE student_birthdays (
    studentID int NOT NULL,
    birthday date NOT NULL,
    PRIMARY KEY (studentID)
);

INSERT INTO student_birthdays VALUES
(00000002, '1989-10-09'),
(1002, '2020-10-14'),
(1004, '2020-10-14'),
(1006, '2020-10-14'),
(1008, '2020-10-14'),
(1010, '2020-10-14'),
(1012, '2020-10-14'),
(1015, '2020-10-14'),
(1016, '2020-10-14'),
(1017, '2020-10-14'),
(1018, '2020-10-14'),
(1019, '2020-10-14'),
(1023, '2020-10-14'),
(1026, '2020-10-14'),
(1027, '2020-10-14'),
(1029, '2020-10-14'),
(1030, '2020-10-14'),
(1033, '2020-10-14'),
(1034, '2020-10-14'),
(1037, '2020-10-14'),
(1038, '2020-10-14'),
(1040, '2020-10-14'),
(1045, '2020-10-14'),
(1047, '2020-10-14'),
(1049, '2020-10-14'),
(1050, '2020-10-14'),
(1051, '2020-10-14'),
(1054, '2020-10-14'),
(1056, '2020-10-14'),
(1063, '2020-10-14'),
(1065, '2020-10-14'),
(1066, '2020-10-14'),
(1067, '2020-10-14'),
(1068, '2020-10-14'),
(1070, '2020-10-14'),
(1071, '2020-10-14'),
(1074, '2020-10-14'),
(1080, '2020-10-14'),
(1081, '2020-10-14'),
(1083, '2020-10-14'),
(1086, '2020-10-14'),
(1089, '2020-10-14'),
(1094, '2020-10-14'),
(1097, '2020-10-14'),
(1098, '2020-10-14'),
(1100, '2020-10-14'),
(1112, '2020-10-14'),
(1113, '2020-10-14'),
(1114, '2020-10-14'),
(1116, '2020-10-14'),
(1117, '2020-10-14'),
(1118, '2020-10-14');

CREATE TABLE instructors (
    instructorID int NOT NULL AUTO_INCREMENT,
    fname varchar(50) NOT NULL,
    lname varchar(50) NOT NULL,
    gender varchar(10) NOT NULL,    
    email varchar(50) NOT NULL UNIQUE,
    password varchar(50) NOT NULL,
    PRIMARY KEY (instructorID)
);

INSERT INTO instructors VALUES 
(00000002, 'Kelvin', 'Gao', 'male', 'zgao1@aum.edu', 'password'),
(11, 'Alison', 'Diaz', 'female', 'alison@sportspro.com', 'sesame'), 
(12, 'Jason', 'Lee', 'male', 'jason@sportspro.com', 'sesame'),
(13, 'Andrew', 'Wilson', 'male', 'awilson@sportspro.com', 'sesame'), 
(14, 'Gunter', 'Wendt', 'male', 'gunter@sportspro.com', 'sesame'), 
(15, 'Gina', 'Fiori', 'female', 'gfiori@sportspro.com', 'sesame');

CREATE TABLE instructor_birthdays (
    instructorID int NOT NULL,
    birthday date NOT NULL,
    PRIMARY KEY (instructorID)
);

INSERT INTO instructor_birthdays VALUES
(00000002, '2020-10-14'),
(11, '2020-10-14'), 
(12, '2020-10-14'),
(13, '2020-10-14'), 
(14, '2020-10-14'), 
(15, '2020-10-14');


CREATE TABLE courses (
    courseCode varchar(8) NOT NULL,
    name varchar(100) NOT NULL,
    semester varchar(10) NOT NULL,
    classroom varchar(10) NOT NULL,
    meetingTime time(3) NOT NULL,
    PRIMARY KEY (courseCode)
); 

INSERT INTO courses VALUES
('CSCI4971', 'Back End Development', 'fall', 'GH210', '10:50:00'),
('CSCI1000', 'Survey of Computer Applications', 'fall', 'GH205', '9:05:00'),
('CSCI1110', 'Introduction to Computer Science', 'fall', 'GH205', '9:05:00'),
('CSCI1210', 'Introduction to Computing for Engineers and Scientists', 'fall', 'GH205', '9:05:00'),
('CSCI2000', 'Structured Programming I', 'fall', 'GH205', '9:05:00'),
('CSCI3000', 'Structured Programming II', 'fall', 'GH205', '9:05:00'),
('CSCI3100', 'Unix and C', 'fall', 'GH205', '9:05:00'),
('CSCI3200', 'Parallel Programming', 'fall', 'GH205', '9:05:00'),
('CSCI3300', 'Introduction to Computer Architecture', 'fall', 'GH205', '9:05:00'),
('CSCI3600', 'Fundamental Algorithm Design and Analysis', 'fall', 'GH205', '9:05:00'),
('CSCI3650', 'Ethics in Computer Science', 'fall', 'GH205', '9:05:00'),
('CSCI4100', 'Software Components', 'fall', 'GH205', '9:05:00'),
('CSCI4200', 'Theory of Formal Languages', 'fall', 'GH205', '9:05:00'),
('CSCI4300', 'Introduction to Operating Systems', 'fall', 'GH205', '9:05:00'),
('CSCI4350', 'Network Systems', 'fall', 'GH205', '9:05:00'),
('CSCI4400', 'Distributed Computing', 'fall', 'GH205', '9:05:00'),
('CSCI4450', 'Data Intensive Computing', 'fall', 'GH205', '9:05:00'),
('CSCI4500', 'Mobile Computing', 'fall', 'GH205', '9:05:00'),
('CSCI4550', 'Computer Graphics', 'fall', 'GH205', '9:05:00'),
('CSCI4924', 'Computer Science Internship', 'fall', 'GH205', '9:05:00'),
('CSCI4950', 'Senior Seminar in Computer Science', 'fall', 'GH205', '9:05:00'),
('CSCI4970', 'Special Topics in Computer Science', 'fall', 'GH205', '9:05:00');

CREATE TABLE student_registrations (
    studentID int NOT NULL,
    courseCode varchar(10) NOT NULL,
    PRIMARY KEY (studentID, courseCode)
);

INSERT INTO student_registrations VALUES 
(00000002, 'CSCI4970'),
(1002,'CSCI4970'),
(1002,'CSCI4950'),
(1002,'CSCI4971'),
(1002,'CSCI4924'),
(1004,'CSCI4970'),
(1004,'CSCI4950'),
(1004,'CSCI4971'),
(1004,'CSCI4924'),
(1006,'CSCI4970'),
(1006,'CSCI4950'),
(1006,'CSCI4971'),
(1006,'CSCI4924'),
(1008,'CSCI4970'),
(1008,'CSCI4950'),
(1008,'CSCI4971'),
(1008,'CSCI4924'),
(1010,'CSCI4970'),
(1010,'CSCI4950'),
(1010,'CSCI4971'),
(1010,'CSCI4924'),
(1012,'CSCI4970'),
(1012,'CSCI4950'),
(1012,'CSCI4971'),
(1012,'CSCI4924');

CREATE TABLE instructor_registrations (
    instructorID int NOT NULL,
    courseCode varchar(10) NOT NULL,
    PRIMARY KEY (instructorID, courseCode)
);

INSERT INTO instructor_registrations VALUES 
(00000002,'CSCI4970'),
(00000002,'CSCI4950'),
(00000002,'CSCI4971'),
(00000002,'CSCI4924'),
(11, 'CSCI1110'), 
(11, 'CSCI1210'), 
(11, 'CSCI2000'), 
(11, 'CSCI3000'), 
(12, 'CSCI3100'),
(12, 'CSCI3200'),
(12, 'CSCI3300'),
(12, 'CSCI3600'),
(13, 'CSCI4100'),
(13, 'CSCI4200'),
(13, 'CSCI4300'),
(13, 'CSCI4350'), 
(14, 'CSCI4400'),
(14, 'CSCI4450'), 
(14, 'CSCI4500'),
(15, 'CSCI4550'),
(15, 'CSCI4924'),
(15, 'CSCI4950');


CREATE TABLE grades (
    studentID int NOT NULL,
    courseCode varchar(8) NOT NULL,
    grade varchar(1) NOT NULL,
    PRIMARY KEY (studentID, courseCode)
);

-- Stored Functions
DELIMITER ||
CREATE FUNCTION StudentLogin(email VARCHAR(50), password VARCHAR(50))
    RETURNS TINYINT(1)
    NOT DETERMINISTIC
    READS SQL DATA
BEGIN
    RETURN EXISTS (SELECT * FROM students WHERE students.email = email
                    AND students.password = password);
END;
||
CREATE FUNCTION InstructorLogin(email VARCHAR(50), password VARCHAR(50))
    RETURNS TINYINT(1)
    NOT DETERMINISTIC
    READS SQL DATA
BEGIN
    RETURN EXISTS (SELECT * FROM instructors WHERE instructors.email = email
                    AND instructors.password = password);
END;
||
DELIMITER ;

-- Create a user named cm_user
DROP USER IF EXISTS cm_user@localhost;
CREATE USER cm_user@localhost IDENTIFIED BY 'pa55word';
GRANT ALL PRIVILEGES ON *.* TO cm_user@localhost WITH GRANT OPTION;