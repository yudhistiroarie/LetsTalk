<?php

namespace App\DataTables;

use DB;
use DataTables;
use App\Models\PO;
use Yajra\DataTables\Services\DataTable;

class PODataTable extends DataTable
{
    protected $exportClass = ExportHandler::class;
    
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return dataTables($query)
            ->editColumn("PurchaseOrderDate", function($request) {
                return $request->PurchaseOrderDate->format("d-m-Y");
            })
            ->editColumn("PurchaseOrderPrice", function($request) {
                return "Rp" . number_format($request->PurchaseOrderPrice, 0, ".", ",");
            })
            ->editColumn("IsActive", function($request) {
                return $request->IsActive ? "Ya" : "Tidak";
            })
            ->addColumn('action', 'p_o_s.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PO $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PO $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => "<'row'<'col-md-3'B><'col-md-6 text-center'r><'col-md-3'f>><'row'<'col-md-12't>><'row'<'col-md-6'i><'col-md-6'p>>",
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'excel', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'PurchaseOrderCode' => [ 'title' => 'Kode Pembelian' ],
            'PurchaseOrderDate' => [ 'title' => 'Tanggal Pembelian' ],
            'PurchaseOrderSPKNo' => [ 'title' => 'SPK Pembelian' ],
            'PurchaseOrderPrice' => [ 'title' => 'Harga Pembelian' ],
            "IsActive" => ["title" => "Aktif"],
        ];
    }
    
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'EYK_Pembelian_Kendaraan_' . date("Ymd_His");
    }
    
    /**
     * Override export to excel function
     */
    protected function buildExcelFile()
    {
        $query = PO::
            leftJoin("Users as a", "a.id", "=", "PurchaseOrder.created_by")
            ->leftJoin("Users as b", "b.id", "=", "PurchaseOrder.updated_by")
            ->select(
                "PurchaseOrderId as ID",
                "PurchaseOrderCode as Kode PO",
                DB::raw("date_format(PurchaseOrderDate, '%Y-%m-%d %H:%i:%s') as 'Tanggal PO'"),
                "PurchaseOrderSPKNo as Nomor SPK",
                "PurchaseOrderSPKDate as Tanggal SPK",
                "PurchaseOrderPrice as Nilai PO",
                "PurchaseOrderTaxPrice as Pajak PO",
                "PurchaseOrderTotalPrice as Total Nilai PO",
                "PurchaseOrderNotes as Catatan",
                
                DB::raw("'Aktif' as 'Status'"),
                "a.name as Pembuat",
                DB::raw("date_format(PurchaseOrder.created_at, '%Y-%m-%d %H:%i:%s') as 'Tanggal Buat'"),
                "b.name as Pengubah",
                DB::raw("case when b.name is null then '' else date_format(PurchaseOrder.updated_at, '%Y-%m-%d %H:%i:%s') end as 'Tanggal Ubah'")
            )
            ->orderBy("PurchaseOrderId");
        $query = $this->applyScopes($query);
        
        $dataTable = DataTables::eloquent($query);
        $dataTable->skipPaging();
        $data_query = $dataTable->getFilteredQuery();
        
        return new $this->exportClass($data_query);
    }
}
