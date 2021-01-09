<?php

function student_login($email, $password){
    global $db;
    $query = 'SELECT StudentLogin(:email, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $isLoggedIn = $statement->fetchColumn();
    $statement->closeCursor();
    return $isLoggedIn;
}

function add_student( $first_name, $last_name, 
        $gender, $email, $password) {
    global $db;
    $query = 'INSERT INTO students
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

function get_student($email) {
    global $db;
    $query = 'SELECT * FROM students WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $student = $statement->fetch();
    $statement->closeCursor();
    return $student;
}

function update_student($studentid, $first_name, $last_name,
        $gender, $email, $password) {
    global $db;
    $query = 'UPDATE students
              SET fname = :fname, lname = :lname, 
                 gender = :gender, email = :email, password = :password
              WHERE studentID = :studentID';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $studentid);
    $statement->bindValue(':fname', $first_name);
    $statement->bindValue(':lname', $last_name);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

function add_student_birthday ($student_id, $birthday){
    global $db;
    $query = 'INSERT INTO student_birthdays
                ( studentID, birthday )
              VALUES
                (:studentID, :birthday)';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $student_id);
    $statement->bindValue(':birthday', $birthday);
    $statement->execute();
    $statement->closeCursor();
}

function get_birthday($student_id){
    global $db;
    
    $query = 'SELECT * FROM student_birthdays WHERE studentID = :studentID';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $student_id);
    $statement->execute();
    $bday = $statement->fetch();
    $statement->closeCursor();
    return $bday;
}

