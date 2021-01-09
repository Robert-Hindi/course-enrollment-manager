<?php

function get_courses() {
    global $db;
    $query = 'SELECT * FROM courses';
    $statement = $db->prepare($query);
    $statement->execute();
    $courses = $statement->fetchAll();
    $statement->closeCursor();
    return $courses;
}

function get_courses_by_courseID($courseID) {
    global $db;
    $query = 'SELECT * FROM courses
              WHERE courseCode = :courseID';
    $statement = $db->prepare($query);
    $statement->bindValue(':courseID', $courseID);
    $statement->execute();
    $courses = $statement->fetchAll();
    $statement->closeCursor();
    return $courses;
}

function get_courses_by_name($name) {
    global $db;
    $query = 'SELECT * FROM courses
              WHERE name = :name';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $courses = $statement->fetchAll();
    $statement->closeCursor();
    return $courses;
}

function get_courses_by_semester($semester) {
    global $db;
    $query = 'SELECT * FROM courses
              WHERE semester = :semester';
    $statement = $db->prepare($query);
    $statement->bindValue(':semester', $semester);
    $statement->execute();
    $courses = $statement->fetchAll();
    $statement->closeCursor();
    return $courses;
}

function get_students_by_course($course_code) {
    global $db;
    $query = 'SELECT * 
              FROM courses
                INNER JOIN student_registrations ON courses.courseCode = student_registrations.courseCode
                INNER JOIN students ON student_registrations.studentID = students.studentID
              WHERE courses.courseCode = :courseCode';
    $statement = $db->prepare($query);
    $statement->bindValue(':courseCode', $course_code);
    $statement->execute();
    $students = $statement->fetchALL();
    $statement->closeCursor();
    return $students;
}

function get_courses_by_student($email) {
    global $db;
    $query = 'SELECT courses.courseCode, courses.name 
              FROM courses
                INNER JOIN student_registrations ON courses.courseCode = student_registrations.courseCode
                INNER JOIN students ON student_registrations.studentID = students.studentID
              WHERE students.email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $courses = $statement->fetchAll();
    $statement->closeCursor();
    return $courses;
}

function get_courses_by_instructor($email) {
    global $db;
    $query = 'SELECT * 
              FROM courses
                INNER JOIN instructor_registrations ON courses.courseCode = instructor_registrations.courseCode
                INNER JOIN instructors ON instructor_registrations.instructorID = instructors.instructorID
              WHERE instructors.email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $courses = $statement->fetchAll();
    $statement->closeCursor();
    return $courses;
}

function search_courses_by_instructor() {
    global $db;
    $query = 'SELECT *
              FROM courses
                INNER JOIN instructor_registrations ON courses.courseCode = instructor_registrations.courseCode
                INNER JOIN instructors ON instructor_registrations.instructorID = instructors.instructorID';
    $statement = $db->prepare($query);
    $statement->execute();
    $courses = $statement->fetchAll();
    $statement->closeCursor();
    return $courses;
}
