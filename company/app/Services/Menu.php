<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
    protected $table="menus";
    public function categorys()
    {
        return $this->hasMany('App\Category','menuid');
    }
}
