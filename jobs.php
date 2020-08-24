<?php
$jobs = [
    [
        'title' => 'PHP Developer',
        'description' => 'Desarrollador con especialidad en Wordpress y Laravel',
        'visible' =>  true,
        'months' => 18
    ],
    [
        'title' => 'Python Dev',
        'description' => 'Desarrollador de Python con experiencia en Backend y Scraping',
        'visible' =>  true,
        'months' => 3
    ],
    [
        'title' => 'Javascript Dev',
        'description' => 'Desarrollador en JS con especialidad en Vanilla y React',
        'visible' =>  true,
        'months' => 10
    ],
    [
        'title' => 'Node Dev',
        'description' => 'Desarrollador en JS con especialidad en Vanilla y React',
        'visible' =>  false,
        'months' => 2
    ],
    [
        'title' => 'Devops',
        'description' => 'Desarrollador en JS con especialidad en Vanilla y React',
        'visible' =>  true,
        'months' => 5
    ],
    [
        'title' => 'Linux',
        'description' => 'Desarrollador en JS con especialidad en Vanilla y React',
        'visible' =>  false,
        'months' => 10
    ]
];


function getDuration($months){
    $years = floor($months / 12);
    $months_left = $months%2;
    if($years == 0){
        return "$months months";
    }else if($months_left == 0){
        return "$years years";
    }else{
        return "$years years, $months_left months";
    }
}

function print_josb($value){
    if($value['visible']){
        echo '<li class="work-position">';
        echo '<h5>'. $value['title'].'</h5>';
        echo '<p>Experience: '.getDuration($value['months']).'</p>';
        echo '<p>'.  $value['description'].'</p>';
        echo '<strong>Achievements:</strong>';
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '</ul>';
        echo '</li>';
    } //End if
}
