<?php
session_start();
if (!isset($_SESSION["notes"])) {
    $_SESSION["notes"] = array();
}
if (isset($_POST["note"]))
{   if($_POST["note"]!="")
    $_SESSION["notes"][] = $_POST["note"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Notes</title>
</head>

<body>
<form action="" method="post">
    <div class="container p-3 mb-2 bg-light text-dark">
        <div class="row">
            <div class="col-8">
                <div class="row"></div>
                <ul><?php
                    foreach ($_SESSION["notes"] as $element) { ?>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text"><?= $element ?></p>
                            </div>
                        </div>
                        <br>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-4">
                <label for="note">Note :</label>
                <input class="form-control" type="text" name="note" id="note"/>
                <br/>
                <br/>
                <input class="btn btn-primary" name="submit" type="submit" value="Add Note">
            </div>
        </div>
    </div>
</form>
</body>
<?php
$_POST['note']="";

?>
</html>