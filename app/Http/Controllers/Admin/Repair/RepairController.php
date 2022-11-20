<?php

namespace App\Http\Controllers\Admin\Repair;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function order()
    {
        return view('admin.reports.order');
    }
    
    public function orderData(Request $request)
    {
        $parameter = [
            'tuNgay' => $request->tuNgay,
            'denNgay' => $request->denNgay
        ];
        // dd($parameter);
        $data = DB::select('
            SELECT dh.dh_thoiGianDatHang as thoiGian
                , SUM(ctdh.ctdh_soLuong * ctdh.ctdh_donGia) as tongThanhTien
            FROM cusc_donhang dh
            JOIN cusc_chitietdonhang ctdh ON dh.dh_ma = ctdh.dh_ma
            WHERE dh.dh_thoiGianDatHang BETWEEN :tuNgay AND :denNgay
            GROUP BY dh.dh_thoiGianDatHang
        ', $parameter);
        
        return response()->json(array(
            'code'  => 200,
            'data' => $data,
        ));
    }
}
