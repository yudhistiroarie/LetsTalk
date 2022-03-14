<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class PO
 * @package App\Models
 * @version June 20, 2021, 10:02 am UTC
 *
 * @property string $PurchaseOrderCode
 * @property string $PurchaseOrderDate
 * @property string $PurchaseOrderSPKNo
 * @property string $PurchaseOrderSPKDate
 * @property string $PurchaseOrderVehicleName
 * @property string $PurchaseOrderVehicleType
 * @property number $PurchaseOrderPrice
 * @property number $PurchaseOrderTaxPrice
 * @property number $PurchaseOrderTotalPrice
 * @property string $PurchaseOrderNotes
 * @property boolean $IsActive
 */
class PO extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory, SoftDeletes;
    
    public $table = 'purchaseorder';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    protected $primaryKey = 'PurchaseOrderId';
    
    public $fillable = [
        'PurchaseOrderCode',
        'PurchaseOrderDate',
        'PurchaseOrderSPKNo',
        'PurchaseOrderSPKDate',
        // 'PurchaseOrderVehicleName',
        // 'PurchaseOrderVehicleType',
        'PurchaseOrderPrice',
        'PurchaseOrderTaxPrice',
        'PurchaseOrderTotalPrice',
        'PurchaseOrderNotes',
        'IsActive',
        "created_by",
        "updated_by",
        "deleted_by",
    ];
    
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'PurchaseOrderDate' => 'date',
        'PurchaseOrderSPKDate' => 'date',
    ];
    
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'PurchaseOrderCode' => 'required|string|max:100',
        'PurchaseOrderDate' => 'required',
        'PurchaseOrderSPKNo' => 'required|string|max:100',
        'PurchaseOrderSPKDate' => 'required',
        // 'PurchaseOrderVehicleType' => 'nullable|string|max:100',
        // 'PurchaseOrderVehicleName' => 'required|string|max:100',
        'PurchaseOrderPrice' => ["required", "regex:/[0-9,]/"],
        'PurchaseOrderTaxPrice' => ["required", "regex:/[0-9,]/"],
        'PurchaseOrderTotalPrice' => ["required", "regex:/[0-9,]/"],
        'PurchaseOrderNotes' => 'nullable|string|max:250',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'IsActive' => 'nullable|boolean'
    ];
    
    /**
     * Attributes name
     *
     * @var array
     */
    public static $attrib = [
        "PurchaseOrderCode" => "Kode Pembelian",
        "PurchaseOrderDate" => "Tanggal Pembelian",
        "PurchaseOrderSPKNo" => "Nomor SPK",
        "PurchaseOrderSPKDate" => "Tanggal SPK",
        // "PurchaseOrderVehicleType" => "Tipe Kendaraan",
        // "PurchaseOrderVehicleName" => "Nama Kendaraan",
        "PurchaseOrderPrice" => "Harga Pembelian",
        "PurchaseOrderTaxPrice" => "Pajak Pembelian",
        "PurchaseOrderNotes" => "Catatan Pembelian",
    ];
}
