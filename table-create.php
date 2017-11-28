<?php
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager;

Manager::schema()->dropIfExists('people');

Manager::schema()->create('people', function ($t) {
  $t->increments('id');
  $t->string('name');
  $t->string('email');
  $t->timestamps();
});