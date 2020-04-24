<!doctype html>
<html lang="en">
    
    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>SCP - Subject Files</title>

    </head>

    <body class="container" style="background-color: #d5f4e6">

        <?php include 'connection.php'; ?>

        <nav class="navbar navbar-default" role="navigation">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
                <b>SCP LANDING PAGE</b>
             </a>
        </nav>
            
            
        </div>

        <!-- menu row -->
        <div class="row">
            <div  class="col">
                <ul class="nav">

                    <?php foreach($result as $menu_item): ?>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?subject='<?php echo $menu_item['item_no']; ?>'">
                        <?php echo $menu_item['item_no']; ?>
                        </a>
                    </li>

                    <?php endforeach; ?>

                    <li class="nav-item">
                        <a class="nav-link" href="insert.php">
                        Add New Data
                        </a>
                    </li>
                </ul>

                <hr width="100%">
            </div>
        </div>

        
        <!-- display record in div below -->
        <div class = "row">
            <div class = "col">

                <?php
                    // check if the subject get value exists    
                    if(isset($_GET['subject']))
                    {   
                        //remove single quotes from subject get value
                            
                        $item_number = trim($_GET['subject'], "'");

                        //run sql command to select record based on get value
                            
                        $record = $connection->query("select * from data1 where item_no = '$item_number'") or die ($connection->error);

                        //convert $record into an array for us to echo out on screen

                        $row = $record->fetch_assoc();

                        //create variables that hold data from db fields
                            
                        $item_no = $row['item_no'];
                        $object_class = $row['object_class'];
                        $object_image = $row['object_image'];
                        $subject_procedure = $row['subject_procedure'];
                        $description = $row['description'];
                        $reference = $row['reference'];
                        $extra_1 = $row['extra_1'];
                        $extra_2 = $row['extra_2'];
                        $extra_3 = $row['extra_3'];
                        $extra_4 = $row['extra_4'];
                        $extra_5 = $row['extra_5'];

                     

                        //strip out \n and replace linebreaks
                            
                        $subject_procedure = str_replace('/n', '<br><br>', $subject_procedure);
                        $description = str_replace('/n', '<br><br>', $description);
                        $reference = str_replace('/n', '<br><br>', $reference);
                        $extra_1 = str_replace('/n', '<br><br>', $extra_1);
                        $extra_2 = str_replace('/n', '<br><br>', $extra_2);
                        $extra_3 = str_replace('/n', '<br><br>', $extra_3);
                        $extra_4 = str_replace('/n', '<br><br>', $extra_4);
                        $extra_5 = str_replace('/n', '<br><br>', $extra_5);


                        // if subject does not have an image
                        if($reference == NULL)
                        {
                            if($object_image == NULL)
                            {
                                echo "<h2>Item_# {$item_no}</h2><br>
                                <h4>Object class:- {$object_class}</h4>
                                <h4>Procedures:</h4>
                                <p>{$subject_procedure}</p>
                                <h4>Description:</h4>
                                <p>{$description}</p>
                                <p>{$extra_1}</p>
                                <p>{$extra_2}</p>
                                <p>{$extra_3}</p>
                                <p>{$extra_4}</p>
                                <p>{$extra_5}</p>";
                            }
                            else
                            {
                                echo "<h2>Item_# {$item_no}</h2><br>
                                <h4>Object class:- {$object_class}</h4>
                                <p> <img src='images/{$object_image}' class='img-fluid rounded mx-auto d-block img-responsive'> </p>
                                <h4>Procedures:</h4>
                                <p>{$subject_procedure}</p>
                                <h4>Description:</h4>
                                <p>{$description}</p>
                                <p>{$extra_1}</p>
                                <p>{$extra_2}</p>
                                <p>{$extra_3}</p>
                                <p>{$extra_4}</p>
                                <p>{$extra_5}</p>";
                            }
                        }
                        else
                        {
                            if($object_image == NULL)
                            {
                                echo "<h2>Item_# {$item_no}</h2><br>
                                <h4>Object class:- {$object_class}</h4>
                                <h4>Procedures:</h4>
                                <p>{$subject_procedure}</p>
                                <h4>Description:</h4>
                                <p>{$description}</p>
                                <h4>Reference:</h4>
                                <p>{$reference}</p>
                                <p>{$extra_1}</p>
                                <p>{$extra_2}</p>
                                <p>{$extra_3}</p>
                                <p>{$extra_4}</p>
                                <p>{$extra_5}</p>";
                            }
                            else
                            {
                                echo "<h2>Item_# {$item_no}</h2><br>
                                <h4>Object class:- {$object_class}</h4>
                                <p> <img src='images/{$object_image}' class='img-fluid rounded mx-auto d-block img-responsive'> </p>
                                <h4>Procedures:</h4>
                                <p>{$subject_procedure}</p>
                                <h4>Description:</h4>
                                <p>{$description}</p>
                                <h4>Reference:</h4>
                                <p>{$reference}</p>
                                <p>{$extra_1}</p>
                                <p>{$extra_2}</p>
                                <p>{$extra_3}</p>
                                <p>{$extra_4}</p>
                                <p>{$extra_5}</p>";
                            }
                        }
                    }
                    else
                    {
                        echo "<h1 class='text-center'>SCP SUBJECT DATABASE</h1>
                              <p class='text-center'>Welcome Agent, use the links above to view subject files or enter new subject data</p>
                              <p><img src='images/homepage.jpg' class='img-fluid rounded mx-auto d-block'></p>";
                    }
                ?>
            </div>
        </div>

        <hr width="100%">

        <footer class="footer mt-auto">
            <div class="container py-3 bg-dark rounded">
                <span class="text-white">© 2020 Copyright: Comp.6210 Assignment 1 </span>
            </div>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>