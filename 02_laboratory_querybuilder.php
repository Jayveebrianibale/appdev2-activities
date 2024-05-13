<!-- Task1 -->
<!-- # SQL Syntax -->
SELECT * FROM students;
$students = DB::table('students')->get();

<!-- Task2 -->'
<!-- # SQL Syntax -->
SELECT * FROM students WHERE grade = '10';
$students = DB::table('students')->where('grade', '10')->get();

<!-- Task3 -->'
<!-- # SQL Syntax -->
SELECT * FROM students WHERE age BETWEEN 15 AND 18;
$students = DB::table('students')->whereBetween('age', [15,18])->get();

<!-- Task4 -->'
<!-- # SQL Syntax -->
SELECT * FROM students WHERE city = 'Manila';
$students = DB::table('students')->where('City', 'Manila')->get();

<!-- Task5 -->'
<!-- # SQL Syntax -->
SELECT * FROM students ORDER BY age DESC; 
$students = DB::table('students')->orderBy('age', Desc)->get();

<!-- Task6 -->'
<!-- # SQL Syntax -->
SELECT students.*, teachers.name AS teacher_name 
FROM students 
LEFT JOIN teachers ON students.teacher_id = teachers.id;

$students = DB::table('students')
->select('students.*', 'teachers.name AS teacher_name')
->leftJoin('teachers', 'students.teacher_id', '=', 'teachers.id')
->get();

<!-- Task7 -->'
<!-- # SQL Syntax -->
SELECT teachers.*, COUNT(students.id) AS student_count 
FROM teachers 
LEFT JOIN students ON teachers.id = students.teacher_id 
GROUP BY teachers.id;

$teachers = DB::table('teachers')
->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
->groupBy('teachers.id')
->get();

<!-- Task8 -->'
<!-- # SQL Syntax -->
SELECT students.*, subjects.name AS subject_name 
FROM students 
INNER JOIN subjects ON students.subject_id = subjects.id;

$students = DB::table('students')
->select('students.*', 'subjects.name AS subject_name')
->join('subjects', 'students.subject_id', '=', 'subjects.id')
->get();


<!-- Task9 -->'
<!-- # SQL Syntax -->
SELECT students.*, AVG(scores.score) AS average_score 
FROM students 
LEFT JOIN scores ON students.id = scores.student_id 
GROUP BY students.id;

$students = DB::table('students')
->select('students.*', DB::raw('AVG(scores.score) AS average_score'))
->leftJoin('scores', 'students.id', '=', 'scores.student_id')
->groupBy('students.id')
->get();


<!-- Task10 -->'
<!-- # SQL Syntax -->
SELECT teachers.*, COUNT(students.id) AS student_count 
FROM teachers 
LEFT JOIN students ON teachers.id = students.teacher_id 
GROUP BY teachers.id 
ORDER BY student_count DESC 
LIMIT 5;

$teachers = DB::table('teachers')
->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
->groupBy('teachers.id')
->orderBy('student_count', 'DESC')
->limit(5)
->get();






