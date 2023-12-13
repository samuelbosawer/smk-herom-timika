<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Berita extends Model
{
    use HasFactory;
    protected $guarded  = ['id'];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
        // return $this->belongsTo(User::class,'user_id','id');

    }

    protected $casts = [
        'created_at' => 'datetime'
    ];
}
