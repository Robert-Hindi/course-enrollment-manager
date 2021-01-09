<?php

function add_student_registration($student_id, $course_code) {
    global $db;
    $query = 'INSERT INTO student_registrations VALUES
            (:studentID, :courseCode)';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $student_id);
    $statement->bindValue(':courseCode', $course_code);
    $statement->execute();
    $statement->closeCursor();
}

function withdraw_student_registration($student_id ,$course_code) {
    global $db;
    $query = 'DELETE FROM student_registrations
              WHERE studentID = :student_id 
              AND courseCode = :course_code';
    $statement = $db->prepare($query);
    $statement->bindValue(':student_id', $student_id);
    $statement->bindValue(':course_code', $course_code);
    $statement->execute();
    $statement->closeCursor();
}

function add_instructor_registration($instructor_id, $course_code) {
    global $db;
    $query = 'INSERT INTO instructor_registrations VALUES
            (:instructorID, :courseCode)';
    $statement = $db->prepare($query);
    $statement->bindValue(':instructorID', $instructor_id);
    $statement->bindValue(':courseCode', $course_code);
    $statement->execute();
    $statement->closeCursor();
}


