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
    $option = readline(prompt: "Enter your option : ");
};
echo optionlist();




if ($option == 1) {
    echo "--------------------------------------------";
    $addIncome = readline(prompt: "Enter your income : ");
    echo optionlist();
    echo $addIncome;
    new addincome($addIncome);
}
if ($option == 2) {
    echo "--------------------------------------------";
    $addexpense = readline(prompt: "Enter your enxpense : ");
    echo optionlist();
    echo $addexpense;
    new addincome($addIncome);
}
if ($option == 6) {
    $categories = new categories("Income", "Expense");
} elseif ($option == 8) {
    echo "Are you want to exit yes/no?";
} elseif ($option == 3) {
    $option = readline(prompt: "Enter your option : ");
    echo $addIncome;
}
