<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucBaiViet extends Model
{
    use HasFactory;

    protected $table = 'danhmucbaiviet';
    protected $fillable = ['tendm', 'mota', 'hinh', 'thutu', 'anhien'];

    public function baiViet()
    {
        return $this->hasMany(BaiViet::class, 'id_danhmuc');
    }
}
