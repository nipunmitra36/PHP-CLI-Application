<?php

require "autoload.php";
// Option

function optionlist()
{
    $optionlist = [
        "1" => "Add Income",
        "2" => "Add Expense",
        "3" => "View Income",
        "4" => "View Expense",
        "5" => "View Balance",
        "7" => "View Category",
        "8" => "Exit"
    ];
    foreach ($optionlist as $key => $option) {
        echo $key . ". " . "$option \n";
    }
    // User Input

};
echo optionlist();
$option = readline(prompt: "Enter your option : ");
if ($option == 1) {
    echo "--------------------------------------------";
    $addIncome = readline(prompt: "Enter your income : ");
    echo optionlist();
    $filepath = "data.txt";
    if (file_exists($filepath)) {
        file_put_contents($filepath, $addIncome);
        echo " Taka income added successfully ";
    } else {
        echo "File not found";
    }
}
