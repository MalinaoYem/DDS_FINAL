<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
    protected $table = 'tbluser';
    // column sa table
    protected $fillable = [
        'username', 'password'
    ];
}

?>