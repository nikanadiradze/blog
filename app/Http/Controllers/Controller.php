<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}


// If the submit button has been pressed
if (isset($_POST['submit'])) {
    // Check number values
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        // Calculate total
        if ($_POST['operation'] == 'plus') {
            $total = $_POST['number1'] + $_POST['number2'];
        }
        if ($_POST['operation'] == 'minus') {
            $total = $_POST['number1'] - $_POST['number2'];
        }
        if ($_POST['operation'] == 'times') {
            $total = $_POST['number1'] * $_POST['number2'];
        }
        if ($_POST['operation'] == 'divided by') {
            $total = $_POST['number1'] / $_POST['number2'];
        }

        // Print total to the browser
        echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";

    } else {

        // Print error message to the browser
        echo 'Numeric values are required';

    }
}



