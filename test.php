<?php
require __DIR__.'/../bootstrap/autoload.php';
use App\User;

$us = new User;
$us->Id = NULL;
$us->Email = 'test2@gh.com';
$us->Password = 'passssssss';
$us->save();