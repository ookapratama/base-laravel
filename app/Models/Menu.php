<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\LogsActivity;

class Menu extends Model
{
    use LogsActivity;
    protected $fillable = [
        'parent_id',
        'name',
        'icon',
        'path',
        'slug',
        'order_no',
        'is_active',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_menu')->withPivot('can_create', 'can_read', 'can_update', 'can_delete');
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
