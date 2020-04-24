<?php

    // Create Database credential variables
    $user = "a3002777_user1";
    $password = "Toiohomai1234";
    $db = "a3002777_assignment";

    // Create php db connection object
    $connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));

    // Get all data from the table and save in a variable for use on our page application
    $result = $connection->query("select * from data1") or die ($connection->error);

    // Check if form has been filled out by checking POST value, then insert form contents into database.
    if(isset($_POST['item_no']))
    {
        // save all $_POST values from form into separate variables
        $item_no = $_POST['item_no'];
        $object_class = $_POST['object_class'];
        $object_image = $_POST['object_image'];
        $description = $_POST['description'];
        $subject_procedure = $_POST['subject_procedure'];
        $reference = $_POST['reference'];
        $extra_1 = $_POST['extra_1'];
        $extra_2 = $_POST['extra_2'];
        $extra_3 = $_POST['extra_3'];
        $extra_4 = $_POST['extra_4'];
        $extra_5 = $_POST['extra_5'];


        $subject_procedure = str_replace("'", " ", $subject_procedure);
        $description = str_replace("'", " ", $description);
        $reference = str_replace("'", " ", $reference);
        $extra_1 = str_replace("'", " ", $extra_1);
        $extra_2 = str_replace("'", " ", $extra_2);
        $extra_3 = str_replace("'", " ", $extra_3);
        $extra_4 = str_replace("'", " ", $extra_4);
        $extra_5 = str_replace("'", " ", $extra_5);

        // create insert command
        $sql = "insert into data1(item_no, object_class, object_image, description, subject_procedure, reference, extra_1, extra_2, extra_3, extra_4, extra_5) values('$item_no', '$object_class', '$object_image', '$description', '$subject_procedure', '$reference', '$extra_1', '$extra_2', '$extra_3', '$extra_4', '$extra_5')"; 

        if ($connection->query($sql) === TRUE)
        {
            echo "<h1>Record created successfully</h1>
                  <p><a href='index.php' class='btn btn-primary'>Back to Homepage</a></p>"; 
        } 
        else 
        {   
            echo "<h1>Error creating record: {$connection->error}</h1>
                  <p><a href='insert.php' class='btn btn-warning'>Back to form</a></p>";
        }
    } 
?>