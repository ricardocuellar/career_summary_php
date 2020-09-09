<?php


require_once 'app/Models/Printable.php'; 
require 'app/Models/job.php';
require 'app/Models/Project.php';   
require 'lib1/Project.php';

use App\Models\{Job,Project,Printable};
//use App\Models\Project;

//Instancia de tipo Job
$job1 = new Job('PHP Developer','Desarrollador con especialidad en Wordpress y Laravel');
$job1->months = 23;

$job2 = new Job('Javascript Developer', 'Desarrollador con especialidad en React y Vanilla');
$job2->months = 14;

$job3 = new Job('Python','Desarrollador con especialidad en Flask y Django');
$job3->months = 14;

$project1 = new Project('Project 1', 'Este fue un proyecto personal');  

$projectLib = new Lib1\Project();

$jobs = [
    $job1,
    $job2,
    $job3
];

$projects = [
    $project1
];



//Especificar el tipo de dato que esperamos podemos poner clase o interfaz
function print_element(Printable $job){
    if($job->visible){
        echo '<li class="work-position">';
        echo '<h5>'. $job->getTitle() .'</h5>';
        echo '<p>Experience: '.$job->getDurationAsString().'</p>';
        echo '<p>'.  $job->getDescription() .'</p>';
        echo '<strong>Achievements:</strong>';
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '</ul>';
        echo '</li>';
    } //End if
}

