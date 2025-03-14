<?php
if (isset($_POST['calculate'])) {
    $birth_date = $_POST['birth_date'];
    $cur_date = new DateTime();
    $birth_datetime = new DateTime($birth_date);
    $age = $cur_date->diff($birth_datetime)->format("%y years, %m months, and %d days");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="form_container">
        <form action="" method="post">
            <h3>Calculate your age here</h3><br>
            <input type="date" name="birth_date" id=""><br>
            <button type="submit" value="Calculate" name="calculate">Calculate</button>
            <?php if (isset($age)) {
                echo " <br> you are $age";
                if ($age < 18) {
                    echo "<br> Lucky you! you are still young";
                } elseif ($age >= 18 and $age <= 40) {
                    echo "<br> You are in your prime age. Don't stop champ";
                } elseif ($age >= 40 and $age <= 60) {
                    echo "<br>You are barely there";
                } elseif ($age >= 60) {
                    echo "<br>You should be dead by now good sir";
                }
                // this is for education
            } ?>
        </form>
</body>
</div>

</html>