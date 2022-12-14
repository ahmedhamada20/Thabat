<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const ORDERCOMPTITED = 0;
    const ORDERSUCCESS = 1;
    const ORDERERROR = 2;
    const ORDERASSGIN = 3;
    const ORDERREFUND = 4;

    protected $fillable = [
        'user_id',
        'total',
        'quantity',
        'status',
        'code',
    ];

    public function status()
    {
        switch ($this->status) {
            case 0:
                $result = '<span class="badge badge-primary">طلب جديد</span>';
                break;
            case 1:
                $result = '<span class="badge badge-success">طلب مكتمل</span>';
                break;
            case 2:
                $result = '<span class="badge badge-danger">طلب مرفوض</span>';
                break;
            case 3:
                $result = '<span class="badge badge-warning">تم تعين الطلب</span>';
                break;
            case 4:
                $result = '<span class="badge badge-info">تم استرجاع الطلب</span>';
                break;
        }

        return $result;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id');
    }

    public function assgin()
    {
        return $this->hasOne(AssginOrder::class, 'order_id');
    }
}
