<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['submit'])) {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $hour = $_POST['hour'];
    $minute = $_POST['minute'];
    $second = $_POST['second'];
    $name = $_POST['name'];

    echo "Hi $name<br>You have choose an appointment on $hour:$minute:$second, $day/$month/$year <br><br>";
    function isLeap($year)
    {
        if ($year % 4 == 0) {
            if ($year % 100 == 0) {
                if ($year % 400 == 0) {
                    return true;
                }
                return false;
            }
            return false;
        }
        return false;
    }
    function timePrint($hour, $minute, $second)
    {
        if ($hour >= 12) {
            $hour -= 12;
            return "$hour:$minute:$second PM";
        } else {
            return "$hour:$minute:$second AM";
        }

    }
    $timeUnit = timePrint($hour, $minute, $second);

    function dayPrint($month, $year)
    {
        switch ($month) {
            case 2:
                $totalday = isLeap($year) ? 29 : 28;
                break;
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $totalday = 31;
                break;
            default:
                $totalday = 30;
                break;
        }
        return $totalday;
    }

    $numDay = dayPrint($month, $year);
    echo "More Information<br><br>In 12 hour, the time is ";
    echo "This month has $numDay day";
}
?>
    <form action="date.php" method="POST" name="form">
        <label for="name">Your name: </label>
        <input type="text" name="name"><br><br>
        <label for="day">Day: </label>
        <input type="day" name="day">
        <label for="month">Month: </label>
        <input type="number" name="month" min="1" max="12">
        <label for="year">Year: </label>
        <input type="number" name="year" min="0" max="10000"><br><br>
        <select name="hour">
            <?php
for ($i = 0; $i < 25; $i++) {
    print "<option value=$i>$i</option>";
}
?>
        </select>
        <select name="minute">
            <?php
for ($i = 0; $i < 61; $i++) {
    print "<option value=$i>$i</option>";
}
?>
        </select>
        <select name="second">
            <?php
for ($i = 0; $i < 61; $i++) {
    print "<option value=$i>$i</option>";
}
?>
        </select>
        <input type="submit" name="submit">
        <input type="reset" name="reset">
    </form>
</body>

</html>
