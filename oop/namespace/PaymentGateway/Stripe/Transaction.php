<?php

declare(strict_types=1);

/* when define a function, constant or a class without a namespace definition, 
by default they will be put in a global space 
(like this example the Transaction class is put in a global space)*/
class Transaction
{
    public function __construct()
    {
    }
}