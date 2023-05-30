<?php
include_once ('includess/conniction.php');
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $team = $_POST['team'];
    $date = $_POST['date'];
    $result = $_POST['result'];
    $Link = $_POST['Link'];
    $stats = $_POST['stats'];
    $qurey1 = "INSERT INTO matchs (team,date,result,Link,stats) VALUES ('$team','$date','$result','$Link','$stats')";
    $result = mysqli_query($link,$qurey1);
    if($result){
        $errors=[];
        $success=true;
    }else{
        echo  $errors['general_error']=mysqli_error($link);
    }}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
    <link crossorigin='anonymous' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css' rel='stylesheet' />
    <link href='https://cdn.rawgit.com/abdelalilebbihi/techabdou/fe375e69/abdou-neo.css' rel='stylesheet' />


    <!-- PAGE TITLE HERE -->
    <title>ADD <3</title>

    

</head>

<body>


<div id="main-wrapper">

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Match</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-validation">
                            <form class="needs-validation" novalidate action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                
                                                <div class="col-lg-6">
                                                    <input name="team" type="text" class="form-control" id="validationCustom01"  placeholder="Please enter team.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter team.
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom02">date <span
                                                        class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input name="date" type="text" class="form-control" id="validationCustom02"  placeholder="Enter a date.." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a date.
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom08">result
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input  name="result" type="text" class="form-control" id="validationCustom08" placeholder="0:0" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a result .
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom08">Link
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input  name="Link" type="link" class="form-control" id="validationCustom08" placeholder="...." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a link .
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="mb-3 row">
                                                <label class="col-lg-4 col-form-label" for="validationCustom08">status
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input  name="stats" type="text" class="form-control" id="validationCustom08" placeholder="...." required>
                                                    <div class="invalid-feedback">
                                                        Please enter a status .
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            
                                            <div class="mb-3 row">
                                                <div class="col-lg-8 ms-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="submit" class="btn btn-primary"> <a href="tabel2.php">Table update</a></button>
                                                   

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>



</body>
</html>
