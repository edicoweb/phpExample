<?php
$courses = array(
    [
        'title' => 'mathematics',
        'completed' => true,
    ], 
    [
        'title' => 'communication',
        'completed' => false,
    ],
    [
        'title' => 'physical',
        'completed' => true,
    ],
    [
        'title' => 'programming',
        'completed' => false,
    ]
);

$coursesCompleted = array_filter($courses, function($course){
    return $course['completed'];
});

echo "COMPLETED \n";    
foreach ($coursesCompleted as $courseCompleted) {
    echo $courseCompleted['title'] . "\n";
}

$coursesIncompleted = array_filter($courses, function($course){
    return !$course['completed'];
});

echo "\nINCOMPLETED \n";
foreach ($coursesIncompleted as $courseIncompleted){
    echo $courseIncompleted['title'] . "\n";
}

// echo "COMPLETED \n";    
// foreach ($courses as $course) {
//     if ($course['completed']) {
//         echo $course['title'] . ( $course['completed'] ? '+' : '-') . "\n";
//     }
// }

// echo "INCOMPLETED \n";
// foreach ($courses as $course) {
//     if (!$course['completed']) {
//         echo $course['title'] . ($course['completed'] ? '+' : '-') . "\n";
//     }
// }
?>