<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'icon',
        'url',
        'slug',
        'order_no',
        'is_active',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_menu');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('order_no');
    }
}
