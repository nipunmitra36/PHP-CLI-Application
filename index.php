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
        "6" => "Add Category",
        "7" => "View Category",
        "8" => "Delete Category",
        "9" => "Exit"
    ];
    foreach ($optionlist as $key => $option) {
        echo $key . ". " . "$option";
    }
};
echo optionlist();



// User Input
$option = readline(prompt: "Enter your option : ");
if ($option == 1) {
    echo "--------------------------------------------";
    $addIncome = readline(prompt: "Enter your income : ");
    echo optionlist();
    echo $addIncome;
    new addincome($addIncome);
}
if ($option == 6) {
    $categories = new categories("Income", "Expense");
}