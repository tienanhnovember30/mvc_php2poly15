<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model{
    protected $table = 'categories';
    protected $fillable = ['cate_name','cate_avatar','type_detail','show_menu'];
    protected $attributes = [
        'show_menu' => 0
    ];
    public function products(){
        return $this->hasMany(Product::class, 'cate_id');
    }
}

?>