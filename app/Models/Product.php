<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Product extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['name','description','price','type','qnt','min_qnt','img_url'];

    protected $hidden = [
        'status',
        'created_at',
        'updated_at',
        'updated_by',
        'qnt',
        'min_qnt',
    ];

    protected static $logAttributes = ['name','description','price','type','qnt','min_qnt','img_url'];

    protected static $logName = 'Produtos';

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}


