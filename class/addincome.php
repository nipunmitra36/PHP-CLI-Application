<?php

class addincome
{
    public $income;
    function __construct($income)
    {
        if (file_exists("data.txt")) {
            file_put_contents('data.txt', $income);
            echo " Taka income added successfully ";
        } else {
            echo "File not found";
        }
    }
}
