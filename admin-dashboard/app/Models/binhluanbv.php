<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuanBV extends Model
{
    use HasFactory;

    protected $table = 'binhluanbv'; 
    protected $primaryKey = 'id'; 
    public $timestamps = false; 

    protected $fillable = [
        'noidung',
        'anhien',
        'ngaytao',
        'id_khachhang',
        'id_baiviet'
    ];

    // Liên kết với bảng Bài viết
    public function baiviet()
    {
        return $this->belongsTo(BaiViet::class, 'id_baiviet', 'id');
    }

    // Liên kết với bảng Khách hàng
    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class, 'id_khachhang', 'id');
    }
}
