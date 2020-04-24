<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Add New Data</title>
    </head>
    <body class="container" style="background-color: #d5f4e6">
        <!-- Data entry -->
        <div class="row">
            <div class="col">

                <h1 style="text-align:center">ENTER NEW SCP SUBJECT DATA</h1>

                <form name="insert" method="POST" action="connection.php" class="form-group">
                    <label><h6>Subject Number</h6></label>
                    <br>
                    <input type="text" name="item_no" class="form-control" placeholder="Data Number" required>
                    <br>
                    <label><h6>Object Class</h6></label>
                    <br>
                    <input type="text" name="object_class" class="form-control" placeholder="Object Class Name" required>
                    <br>
                    <label><h6>Object Image Path (if available)</h6></label>
                    <br>
                    <input type="text" name="object_image" class="form-control">
                    <br>
                    <label><h6>Procedure</h6></label>
                    <br>
                    <textarea class="form-control" rows="10" name="subject_procedure" placeholder="Separate paragraphs with /n and if you want to bold a particular word then write <b>word</b>" required></textarea>
                    <br>
                    <label><h6>Description</h6></label>
                    <br>
                    <textarea class="form-control" rows="10" name="description" placeholder="Separate paragraphs with /n and if you want to bold a particular word then write <b>word</b>" required></textarea>
                    <br>
                    <label><h6>Reference</h6></label>
                    <br>
                    <textarea class="form-control" rows="10" name="reference" placeholder="Separate paragraphs with /n and if you want to bold a particular word then write <b>word</b>"></textarea>
                    <br>
                    <label><h6>Extra_1</h6></label>
                    <br>
                    <textarea class="form-control" rows="5" name="extra_1" placeholder="Separate paragraphs with /n and if you want to bold a particular word then write <b>word</b>"></textarea>
                    <br>
                    <label><h6>Extra_2</h6></label>
                    <br>
                    <textarea class="form-control" rows="5" name="extra_2" placeholder="Separate paragraphs with /n and if you want to bold a particular word then write <b>word</b>"></textarea>
                    <br>
                    <label><h6>Extra_3</h6></label>
                    <br>
                    <textarea class="form-control" rows="5" name="extra_3" placeholder="Separate paragraphs with /n and if you want to bold a particular word then write <b>word</b>"></textarea>
                    <br>
                    <label><h6>Extra_4</h6></label>
                    <br>
                    <textarea class="form-control" rows="5" name="extra_4" placeholder="Separate paragraphs with /n and if you want to bold a particular word then write <b>word</b>"></textarea>
                    <br>
                    <label><h6>Extra_5</h6></label>
                    <br>
                    <textarea class="form-control" rows="5" name="extra_5" placeholder="Separate paragraphs with /n and if you want to bold a particular word then write <b>word</b>"></textarea>
                    <br>
                    <div style="text-align:center">
                        <input type="submit" class="btn btn-primary active" name="submit" value="Submit"> 
                    </div>
                </form>
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