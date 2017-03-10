<?php namespace App;

// calling ORM model creation, it auto creates a db table based on the plural of the class name. creating a fillable var makes it's contents open to mass assignment.
use Illuminate\Database\Eloquent\Model;

class ApplicationSetting extends Model {

    protected $fillable = [];

}