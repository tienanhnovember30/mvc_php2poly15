<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = 'products';

    protected $fillable = ['name','image','price','short_desc','detail','cate_id' ,'star','views'];
    public function category(){
        return $this->beLongsTo(Category::class, 'cate_id');
    }
    public function galleries(){
        return $this->hasMany(ProductGallery::class, 'product_id');
    }
}

?>