<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    // User::getUsers(NULL,NULL);       
    // User::getUsers();


    // public function getUsers(Type $name = NULL, Type $id = NULL)
    // {

    //     if($name){
    //         return $this::get("return by name");

    //     }elseif( $id){
    //         return $this::get("return by id");

    //     }else{
    //         return $this::get("getall user");

    //     }
    //     # code...
    //     return NULL;

    // } 

    // public function getUsers()
    // {

       
    //         return $this::get("getall user");

        
    //     # code...

    // } 

    // public function getUserById(Type $var = null)
    // {
    //     return $this::whe

    // }
}
