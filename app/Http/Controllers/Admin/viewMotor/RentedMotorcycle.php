<?php

namespace App\Http\Controllers\Admin\viewMotor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Loan;

class RentedMotorcycle extends Controller
{
    public function index()
    {
        return view('admin.create-motor.rented', [
            'title' => 'rented-motorcycle',
            'loan' => Loan::paginate(12),
            // 'loan' => Loan::latest()->filter(request(['search']))->paginate(12)
        ]);
    }

    public function destroy(Loan $loan)
    {
        if ($loan->image) {
            Storage::delete($loan->image);
        }
        Loan::destroy($loan->id);
        return redirect('/admin/motors/rented')->with('delete', 'Delete data success!');
    }
}

