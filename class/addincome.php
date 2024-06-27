<?php

class addincome
{
    public $income;
    function __construct($income)
    {
        if (file_exists("data.txt")) {
            file_put_contents('data.txt', $income);
        } else {
            echo "File not found";
        }
    }
}