<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



    // データベースのやり取りをする重要な部分
    public function getAllUsers()
    {
        $users = User::all();
        return $users;
    }

    public function getUserById($id)
    {
        $user = User::find($id);
        return $user;
    }


    public function createUser($data)
    {
        $user = new User();
        $user->name = $data->name;
        $user->email = $data->email;
        $user->password = $data->password;
        $user->save();
        return $user;
    }

    public function updateUser($id, $data)
    {
        $user = User::find($id);
        $user->name = $data->name;
        $user->email = $data->email;
        $user->password = $data->password;
        $user->save();
        return $user;
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return $user;
    }

















}
