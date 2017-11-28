<?php
use Illuminate\Database\Eloquent\Model;
class Person extends Model {
  protected $table = 'people';
  protected $guarded = [];
  public function setNameAttribute ($value) {
    $this->name = 'Sarwar';
  }
}