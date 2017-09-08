<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//Include the student class file
include('Student.php');

//Initialize our array of students
$students = array();

//Create our first student
$first = new Student();
//Provide first and last names
$first->surname = "Doe";
$first->first_name = "John";
//Add any email(s) the student may have
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
//Provide all the grades for this student
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
//Add this first student to our student array
$students['j123'] = $first;

//Create our second student
$second = new Student();
//Provide first and last names
$second->surname = "Einstein";
$second->first_name = "Albert";
//Add any email(s) the student may have
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
//Provide all the grades for this student
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
//Add this second student to our student array
$students['a456'] = $second;

//Create our third student
$third = new Student();
//Provide first and last names
$third->surname = "Paul";
$third->first_name = "McCarlie";
//Add any email(s) the student may have
$third->add_email('home','mccarliep@gmail.com');
$third->add_email('school','pmccarlie@my.bcit.ca');
//Provide all the grades for this student
$third->add_grade(100);
//Add this third student to our student array
$students['a00850379'] = $third;

//Loop through each student in the array...
foreach($students as $student)
    //...and display the information as a string
    echo $student->toString();
        ?>
    </body>
</html>
