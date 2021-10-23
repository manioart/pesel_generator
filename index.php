<?php
define('__ROOT__', dirname(__FILE__));
require_once(__ROOT__ . '\classes\PeselGenerator.php');
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Generator PESEL</title>
    <meta name="description" content="Generator numeru pesel na potrzeby rekrutacji">
    <meta name="author" content="Mariusz Świerczek">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
    <div class="ui container center aligned">
        <h1 class="ui header pt-20">Generator numeru PESEL</h1>
        <form method="POST">
            <p>Podaj datę urodzenia:</p>
            <div class="ui input">
                <input type="date" name="dateofbirth">
            </div>
            <div class="inline fields pt-20">
                <label for="sex">Podaj płeć:</label>
                <div class="field pt-20">
                    <div class="ui radio checkbox">
                        <input type="radio" name="sex" value="man">
                        <label>Mężczyzna</label>
                    </div>
                </div>
                <div class="field pt-10">
                    <div class="ui radio checkbox">
                        <input type="radio" name="sex" value="woman">
                        <label>Kobieta</label>
                    </div>
                </div>
            </div>
            <button class="ui button mt-10" type="submit">Generuj</button>
        </form>
        <h1 class="ui header pt-20"><?php echo (isset($_POST['dateofbirth']) && isset($_POST['sex'])) ? PeselGenerator::generatePeselNumber($_POST['dateofbirth'],$_POST['sex']) : 'Podaj niezbędne dane'; ?></h1>
    </div>

</body>
</html>