<?php

class AddIncome
{
    public $income;

    function __construct($income)
    {
        $this->income = $income;
        $this->addIncomeToFile();
    }

    public function addIncomeToFile()
    {
        $filePath = 'data.txt';
        if (file_exists($filePath)) {
            if (file_put_contents($filePath, "hello world")) {
                echo " Taka income added successfully ";
            } else {
                echo "Error writing to file";
            }
        } else {
            echo "File not found";
        }
    }
}

// Usage example:
$newIncome = new AddIncome("1000\n");
