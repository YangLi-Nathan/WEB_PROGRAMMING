<?php

// date validation
function isValidDate($date)
{
    $matches = array();
    $pattern = '/^([0-9]{1,2})\\/([0-9]{1,2})\\/([0-9]{4})$/';
    if (!preg_match($pattern, $date, $matches)) return false;
    if (!checkdate($matches[2], $matches[1], $matches[3])) return false;
    return true;
}

// age validation
function fIsValidRange($input, $min, $max)
{
    // trim empty spaces from beginning and end
    $input = trim($input);
    if (is_numeric($input)) {
        $IsValid = (($input) >= $min && ($input) <= $max);
        return $IsValid;
    } else
        return false;
}

// zip code validation 
function fIsValidZipcode($input)
{
    $input = trim($input);
    if (is_numeric($input)) {
        if (strlen($input) == 5)
            return true;
        else
            return false;
    } else {
        return false;
    }
}

function fIisValidEmail($email)
{
    //validate using php filter function. Returns true or false.
    $email = trim($email);
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        return false;
    else
        return true;
}