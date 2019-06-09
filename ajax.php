<?php

require_once 'json_utils.php';





$file_path = 'data.json';
$is_valid = true;
$response = array(
    'errorCode' => 0,
    'message' => 'Input data is missing',
    'data' => array(),
);


if (!empty($_GET['list-students']) ) {
    $response['message'] = 'Got data successfully';
    $response['data'] = format_students_data(get_json_data($file_path));
}


if ($_POST ) {

    $id = $_POST['id'];
    $students = get_json_data($file_path);
    if (student_id_exists($id, $students)) {
        $is_valid = false;
        $response['message'] = 'Student ID already exists!';
        $response['errorCode'] = 1;
    }

    if ($is_valid) {
        $full_name = $_POST['fullName'];
        $exams = $_POST['exam'];
        $grades = $_POST['grade'];

        $subjects= array();
        foreach ($exams as $index => $exam ) {
            $subjects[$index] = array(
                'exam' => $exam,
                'grade' => $grades[$index]
            );
        }

        $response['data'] = array(
            'fullName' => $full_name,
            'id' => $id,
            'subjects' => $subjects
        );
        $response['message'] = 'Student was added successfully';
        add_new_data_to_json_file($response['data'], $file_path);

        
    }
}

header('Content-Type: application/json');      
echo json_encode($response, JSON_PRETTY_PRINT);
exit;

function student_id_exists($id, $students) {
    // Exit early in case ID is not valid.
    if (empty($id)) {
        return true;
    }

    $found_id = false;
    foreach ($students as $student) {
        if ($student->id == $id) {
            $found_id = true;
            break;
        }
    }
    return $found_id;
}

function format_students_data($students) {
    
    $data = array();
    foreach ($students as $student) {
        foreach ($student->subjects as $subject) {
            $data[] = array(
                'id' => htmlentities($student->id),
                'fullName' => htmlentities($student->fullName),
                'exam' => htmlentities($subject->exam),
                'grade' => htmlentities($subject->grade)
            );
        }

    }
    return $data;
}


?>                                                                   
