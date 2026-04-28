<?php

function checkTemperature($vital) {
    $value = $vital["value"];

    if ($value > 100) {
        $vital["status"]  = "HIGH";
        $vital["message"] = "Fever detected. Temperature is too high.";
    } elseif ($value < 97) {
        $vital["status"]  = "LOW";
        $vital["message"] = "Temperature is too low.";
    } else {
        $vital["status"]  = "NORMAL";
        $vital["message"] = "Temperature is normal.";
    }

    return $vital;
}

function checkPulse($vital) {
    $value = $vital["value"];

    if ($value > 100) {
        $vital["status"]  = "HIGH";
        $vital["message"] = "Pulse high. ";
    } elseif ($value < 60) {
        $vital["status"]  = "LOW";
        $vital["message"] = "Pulse low.";
    } else {
        $vital["status"]  = "NORMAL";
        $vital["message"] = "Pulse is normal.";
    }

    return $vital;
}

function checkBloodPressure($vital) {
    // value is "120/80" — split into systolic and diastolic
    $parts     = explode("/", $vital["value"]);
    $systolic  = (int) $parts[0];   // 120
    $diastolic = (int) $parts[1];   // 80

    if ($systolic > 140 || $diastolic > 90) {
        $vital["status"]  = "HIGH";
        $vital["message"] = "High BP detected. Hypertension risk.";
    } elseif ($systolic < 90 || $diastolic < 60) {
        $vital["status"]  = "LOW";
        $vital["message"] = "Low BP detected. Hypotension risk.";
    } else {
        $vital["status"]  = "NORMAL";
        $vital["message"] = "Blood pressure is normal.";
    }

    return $vital;
}

?>