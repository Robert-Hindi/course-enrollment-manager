<?php

function instructor_login($email, $password){
    global $db;
    $query = 'SELECT InstructorLogin(:email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $isLoggedIn = $statement->fetchColumn();
    $statement->closeCursor();
    return $isLoggedIn;
}

function add_instructor( $first_name, $last_name, 
        $gender, $email, $password) {
    global $db;
    $query = 'INSERT INTO instructors
                 ( fname, lname
                 ,gender, email, password)
              VALUES
                 (:fname, :lname, 
                 :gender, :email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':fname', $first_name);
    $statement->bindValue(':lname', $last_name);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

function get_instructors(){
    global $db;
    $query = 'SELECT * FROM instructors';
    $statement = $db->prepare($query);
    $statement->execute();
    $instructors = $statement->fetchAll();
    $statement->closeCursor();
    return $instructors;
}

function get_instructor($email) {
    global $db;
    $query = 'SELECT * FROM instructors WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $instructor = $statement->fetch();
    $statement->closeCursor();
    return $instructor;
}

function update_instructor($instructor_id, $first_name, $last_name,
        $gender, $email, $password) {
    global $db;
    $query = 'UPDATE instructors
              SET fname = :fname, lname = :lname, 
                 gender = :gender, email = :email, password = :password
              WHERE instructorID = :instructorID';
    $statement = $db->prepare($query);
    $statement->bindValue(':instructorID', $instructor_id);
    $statement->bindValue(':fname', $first_name);
    $statement->bindValue(':lname', $last_name);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

function add_instructor_birthday ($instructor_id, $birthday){
    global $db;
    $query = 'INSERT INTO instructor_birthdays
                ( instructorID, birthday )
              VALUES
                (:instructorID, :birthday)';
    $statement = $db->prepare($query);
    $statement->bindValue(':instructorID', $instructor_id);
    $statement->bindValue(':birthday', $birthday);
    $statement->execute();
    $statement->closeCursor();
}

function get_grade($student_id,$course_code){
    global $db;
    $query = 'SELECT * FROM grades
              WHERE studentID = :studentID AND courseCode = :courseCode';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $student_id);
    $statement->bindValue(':courseCode', $course_code);
    $statement->execute();
    $grade = $statement->fetch();
    $statement->closeCursor();
    return $grade;
}

function add_grade($student_id, $courseCode, $grade){
    global $db;
    $query = 'INSERT INTO grades
                ( studentID, courseCode, grade )
              VALUES
                (:studentID, :courseCode, :grade )';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $student_id);
    $statement->bindValue(':courseCode', $courseCode);
    $statement->bindValue(':grade', $grade);
    $statement->execute();
    $statement->closeCursor();
}

function get_birthday($instructor_id){
    global $db;
    
    $query = 'SELECT * FROM instructor_birthdays WHERE instructorID = :instructorID';
    $statement = $db->prepare($query);
    $statement->bindValue(':instructorID', $instructor_id);
    $statement->execute();
    $bday = $statement->fetch();
    $statement->closeCursor();
    return $bday;
}

