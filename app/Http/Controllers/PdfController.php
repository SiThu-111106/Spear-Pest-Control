<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function __invoke(Customer $customer)
    {
        return Pdf::loadView('pdf', ['record' => $customer])
            ->download($customer->number. '.pdf');
    }
}
