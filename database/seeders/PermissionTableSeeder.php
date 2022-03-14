<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // master data
                // tipe kendaraan
                'tipe kendaraan-list',
                'tipe kendaraan-create',
                'tipe kendaraan-edit',
                'tipe kendaraan-delete',
                
                // merek kendaraan
                'merek kendaraan-list',
                'merek kendaraan-create',
                'merek kendaraan-edit',
                'merek kendaraan-delete',
                
                // model kendaraan
                'model kendaraan-list',
                'model kendaraan-create',
                'model kendaraan-edit',
                'model kendaraan-delete',
                
                // dealer
                'dealer-list',
                'dealer-create',
                'dealer-edit',
                'dealer-delete',
                
                // pembelian kendaraan
                'pembelian kendaraan-list',
                'pembelian kendaraan-create',
                'pembelian kendaraan-edit',
                'pembelian kendaraan-delete',
                
                // parameter maintenance
                'parameter maintenance-list',
                'parameter maintenance-create',
                'parameter maintenance-edit',
                'parameter maintenance-delete',
                
                // perusahaan service
                'perusahaan service-list',
                'perusahaan service-create',
                'perusahaan service-edit',
                'perusahaan service-delete',
                
                // parameter asuransi
                'parameter asuransi-list',
                'parameter asuransi-create',
                'parameter asuransi-edit',
                'parameter asuransi-delete',
                
            // data
                // data kendaraan
                'data kendaraan-list',
                'data kendaraan-create',
                'data kendaraan-edit',
                'data kendaraan-delete',
                
                // detail kendaraan
                'data detail kendaraan-list',
                'data detail kendaraan-create',
                'data detail kendaraan-edit',
                'data detail kendaraan-delete',
                
                // perawatan kendaraan
                'data perawatan kendaraan-list',
                'data perawatan kendaraan-create',
                'data perawatan kendaraan-edit',
                'data perawatan kendaraan-delete',
                
                // asuransi kendaraan
                'data asuransi kendaraan-list',
                'data asuransi kendaraan-create',
                'data asuransi kendaraan-edit',
                'data asuransi kendaraan-delete',
                
                // pelanggan
                'data pelanggan-list',
                'data pelanggan-create',
                'data pelanggan-edit',
                'data pelanggan-delete',
                
            // data transaksi
                // penyewaan
                'penyewaan-list',
                'penyewaan-create',
                'penyewaan-edit',
                'penyewaan-delete',
                
                // penggantian
                'penggantian-list',
                'penggantian-create',
                'penggantian-edit',
                'penggantian-delete',
                
                // pembelian
                'pembelian-list',
                'pembelian-create',
                'pembelian-edit',
                'pembelian-delete',
                
                // perpanjangan
                'perpanjangan-list',
                'perpanjangan-create',
                'perpanjangan-edit',
                'perpanjangan-delete',
                
            // tagihan
                // tagihan penyewaan
                'tagihan penyewaan-list',
                'tagihan penyewaan-create',
                'tagihan penyewaan-edit',
                'tagihan penyewaan-delete',
                
                // tagihan asuransi
                'tagihan asuransi-list',
                'tagihan asuransi-create',
                'tagihan asuransi-edit',
                'tagihan asuransi-delete',
                
                // tagihan admin
                'tagihan admin-list',
                'tagihan admin-create',
                'tagihan admin-edit',
                'tagihan admin-delete',
                
                // tagihan perpanjangan
                'tagihan perpanjangan-list',
                'tagihan perpanjangan-create',
                'tagihan perpanjangan-edit',
                'tagihan perpanjangan-delete',
                
            // approve
            "approve-create",
            "approve-delete",
            "approve-edit",
            "approve-list",
                
            // utilitas
                // user
                'user-list',
                'user-create',
                'user-edit',
                'user-delete',
                
                // role
                'role-list',
                'role-create',
                'role-edit',
                'role-delete',
                
                // audit
                'audit-list',
        ];
        
        foreach($permissions as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        }
    }
}
