<?php
    // Three variables of different data types
    $userName = "Yanit Vasquez"; // String variable
    $userAge = 23; // Integer variable
    $piValue = 3.14; // Float variable

    // Named constant
    define("HEADER_TEXT", "Holiday Calendar"); 
    echo HEADER_TEXT; // Display the constant

    // One-dimensional array
    $greetings = array("Hello", "World", "in", "PHP");
    
    // Iterate over the one-dimensional array
    for ($index = 0; $index < sizeof($greetings); $index++) {
        echo $greetings[$index]; // Accessing array elements
    }

    // Multi-dimensional array
    $holidays = array(
        array("April Fools Day", "April 1, 2023"),
        array("Easter", "April 9, 2023"),
        array("Earth Day", "April 22, 2023"),
        array("Cinco de Mayo", "May 5, 2023")
    );

    $testDate = "April Fools Day"; // for testing purposes only

    // If else statement
    if (getHolidayDate($testDate) != "Holiday not found.") {
        echo "Today is " . getHolidayDate($testDate) . "!";
    } else {
        echo "Today is not a holiday.";
    }

    // While loop 
    $holidaysCounter = 1;
    while ($holidaysCounter < 35) {
        echo "Yes, holidays is less than 35.<br>";
        $holidaysCounter++;
    }

    // For loop 
    for ($iteration = 0; $iteration < 10; $iteration++) {
        echo "We're still rolling<br>";
    }

    // Function that accepts a holiday name and returns the date
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

    // Iterating over multi-dimensional array
    for ($outerIndex = 0; $outerIndex < sizeof($holidays); $outerIndex++) {
        for ($innerIndex = 0; $innerIndex < sizeof($holidays[$outerIndex]); $innerIndex++) {
            echo $holidays[$outerIndex][$innerIndex] . " "; // Accessing elements of multi-dimensional array
        }
        echo "<br>";
    }
?>
