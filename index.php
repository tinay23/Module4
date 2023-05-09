<!DOCTYPE html>
<html>
    <head>
        <title>Module 4</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <!-- calendar -->
        <div class="container">
            <h1>Calendar</h1>
            <hr>
            <table class="table1">

            </table>
        </div>
        
        <?php
        // example function that accepts a holiday name and returns the date
function getHolidayDate($holidayName) {
    $holidays = array(
        "April Fools Day" => "April 1, 2023",
        "Easter" => "April 9, 2023",
        "Earth Day" => "April 22, 2023",
        "Cinco de Mayo" => "May 5, 2023"
    );

    if (array_key_exists($holidayName, $holidays)) {
        return $holidays[$holidayName];
    } else {
        return "Holiday not found.";
    }
}

// named constant
define("ENTRY", "Holiday Calendar");
echo ENTRY;

            // three variables of different data types
            $stringVariable = "Yanit Vasquez";
            $integerVariable = 23;
            $floatVariable = 3.14;

            // named constant
            define("ENTRY", "Holiday Calendar");
            echo ENTRY;

            // multi-dimensional array
            $holidays = array(
                array("April Fools Day", "April 1, 2023"),
                array("Easter", "April 9, 2023"),
                array("Earth Day", "April 22, 2023"),
                array("Cinco de Mayo", "May 5, 2023")
            );

            $date = 2; // for testing purposes only

            // if else statement!!!! 
            if (array_key_exists($date, $holidays)) {
                echo "Today is " . $holidays[$date][0] . "!";
            } else {
                echo "Today is not a holiday.";
            }

            // while loop 
            $holidaysCount = 1;
            while ($holidaysCount < 35) {
                echo "yes holidays is less than 35<br>";
                $holidaysCount++;
            }

            // for loop 
            for ($start = 0; $start < 10; $start++) {
                echo "We're still rolling<br>";
            }
        ?>
    </body>
</html>
