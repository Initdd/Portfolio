<?php
    include "index.php";
    if (isset($_POST["submit"]))
        $file = file("data/data.txt");
        $data = fopen("data/data.txt", "a+");
        $email = $_POST["email"];
        foreach ($file as $i)
            echo $i;
        if (strpos(file_get_contents("data/data.txt"), $email) == False)
            fwrite($data, $email."\n");
        else
            ;
?>