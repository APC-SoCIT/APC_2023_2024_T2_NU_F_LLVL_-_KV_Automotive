<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleHistory;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function vehicleReport(VehicleHistory $record)
    {
        $pdf = PDF::loadView('Vehicle_pdf', compact('record')); // Assuming 'vehicle_pdf' is your Blade view for Vehicle
        return $pdf->stream(); // renders the PDF in the browser
    }



}
