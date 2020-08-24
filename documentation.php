<?php 
    $size = count($jobs);
    for($idx=0; $idx < $size ; $idx++){
?>
        <li class="work-position">
        <h5><?php echo $jobs[$idx]['title'];?></h5>
        <p><?php echo $jobs[$idx]['description']?></p>
        <strong>Achievements:</strong>
        <ul>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
        </ul>
        </li>
<?php
    }
?>


<?php
    foreach($jobs as $key => $value){
?>
        <li class="work-position">
        <h5><?php echo $value['title'];?></h5>
        <p><?php echo $value['description']?></p>
        <strong>Achievements:</strong>
        <ul>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
        </ul>
        </li>
<?php
    }
?>




<?php
    foreach($jobs as $key => $value){
        if($value['visible']){
?>
        <li class="work-position">
        <h5><?php echo $value['title'];?></h5>
        <p><?php echo $value['description']?></p>
        <strong>Achievements:</strong>
        <ul>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
            <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
        </ul>
        </li>
<?php
        } //End if
    } //Enf foreach
?>