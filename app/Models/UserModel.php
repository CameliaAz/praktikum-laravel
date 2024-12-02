<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\LevelModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; //mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; //mendefinisikan primary key dari tabel yang digunakan

    // protected $fillable = ['user_id','level_id', 'username', 'nama', 'password'];

    // public function level(): BelongsTo
    // {
    //     return $this->belongsTo(LevelModel::class, 'level_id');
    // }
}
