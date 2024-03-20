<?php

namespace App\Http\Controllers;

use App\Models\Ref;
use Illuminate\Http\Request;

class RefController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    // SHOW IMPORT FORM
    public function create()
    {
        return view('create');
    }

    // STORE THE CSV FILE
    public function store(Request $request)
    {

        $request->validate([
            'csv' => ['file', 'mimes:csv'],
        ], [
            'csv.mimes' => 'يجب أن يكون الملف بصيغة csv',
            'csv.file' => 'يجب أن يكون الملف بصيغة csv',
        ]);

        $file = $request->file('csv');
        $fileContents = file($file->getPathname());
        $flag = 0;
        foreach ($fileContents as $row) {
            $data = str_getcsv($row);

            if ($flag != 0) {
                Ref::create([
                    'name' => $data[0],
                    'nid' => $data[1],
                ]);
            }
            $flag++;
        }
        return redirect(route('dashboard'))->with(['success' => 'تم إستيراد البيانات بنجاح']);
    }
}
