<?php

namespace LaravelAPI\API\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $primaryKey = 'uid';
    protected $table = 'clrapi_users';
    protected $fillable = ['name', 'lastname'];
}
