<?php
Class ExampleClass{
    public $name='Ruwanthi';
    public $availability=true;
    public $age=27;
}

$example1=new ExampleClass();
echo $example1->name;
$example1->name="prasadini";
echo $example1->name;