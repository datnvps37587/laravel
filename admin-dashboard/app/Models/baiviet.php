<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;

    protected $table = 'baiviet';
    protected $fillable = ['tieude', 'noidung', 'hinh', 'anhien', 'id_danhmuc'];

    public function danhMuc()
    {
        return $this->belongsTo(DanhMucBaiViet::class, 'id_danhmuc');
    }
}
