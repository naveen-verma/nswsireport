<?php
namespace App\Http\Controllers;

use App\Reports;
use Excel;
use Illuminate\Http\Request;

class ReportsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function downloadData($type)
    {
        $data = Reports::get()->toArray();
        return Excel::create('excel_data', function ($excel) use ($data) {
            $excel->sheet('mySheet', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importData(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path)->get();
        if ($data->count()) {
            foreach ($data as $key => $value) {
                $arr[] = [
                    'customer_name' => $value->customer_name,
                    'top_40_customers' => $value->top_40_customers,
                    'country' => $value->country
                ];
            }
            if (! empty($arr)) {
                Data::insert($arr);
            }
        }
        return back()->with('success', 'Insert Record successfully.');
    }
}
