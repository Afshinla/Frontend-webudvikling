<?php
    $task_uid=time().'.txt';
    $data = $_POST['a'] . ',' . $_POST['b'] . ',' . $_POST['c'];
    $file = fopen('tasks/'.$task_uid, 'w+'); //Open your .txt file
    ftruncate($file, 0); //Clear the file to 0bit
    fwrite($file , $data); //Now lets write it in there
    fclose($file ); //Finally close our .txt
    die(header("Location: ".$_SERVER["HTTP_REFERER"]));
?>