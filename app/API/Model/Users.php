<?php

namespace LaravelAPI\API\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $primaryKey = 'uid';
    protected $fillable = ['name', 'lastname'];
}
