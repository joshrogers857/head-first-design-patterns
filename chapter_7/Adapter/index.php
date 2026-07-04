<?php

namespace Adapter;

require_once 'MallardDuck.php';
require_once 'WildTurkey.php';
require_once 'TurkeyAdapter.php';
require_once 'DuckAdapter.php';

$duck = new MallardDuck();
$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);
$duckAdapter = new DuckAdapter($duck);

printf("The Turkey says...\n");
testTurkey($turkey);

printf("\nThe Duck says...\n");
testDuck($duck);

printf("\nThe DuckAdapter says...\n");
testTurkey($duckAdapter);

printf("\nThe TurkeyAdapter says...\n");
testDuck($turkeyAdapter);

function testDuck(Duck $duck): void
{
    $duck->quack();
    $duck->fly();
}

function testTurkey(Turkey $turkey): void
{
    $turkey->gobble();
    $turkey->fly();
}