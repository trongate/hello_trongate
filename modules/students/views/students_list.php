<h1><?= $headline ?></h1>
<ul>
<?php
foreach($students as $student) {
    echo '<li>'.$student['first_name'].' '.$student['last_name'].'</li>';
}
?>
</ul>
