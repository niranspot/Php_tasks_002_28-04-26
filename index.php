<?php

//Load all files
include "vitals.php";
include "validate.php";
include "rules.php";
include "scanner.php";



// Loop through all patients
foreach ($patientVitals as $patient) {

    // Pick the correct rule based on vital type
    if ($patient["vital_type"] === "Temperature") {
        $result = validateVital($patient, "checkTemperature");

    } elseif ($patient["vital_type"] === "Pulse") {
        $result = validateVital($patient, "checkPulse");

    } elseif ($patient["vital_type"] === "BP") {
        $result = validateVital($patient, "checkBloodPressure");

    } else {
        continue; 
    }

   
    echo "Patient : " . $result["patient_name"] . "<br>";
    echo "Vital   : " . $result["vital_type"]   . "<br>";
    echo "Value   : " . $result["value"]         . "<br>";
    echo "Status  : " . $result["status"]        . "<br>";
    echo "Message : " . $result["message"]       . "<br>";
    echo "-----------------------------------<br>";
}

    // Project Files section using scanFolder()
echo "Project Files:<br>";

scanFolder(".");


?>