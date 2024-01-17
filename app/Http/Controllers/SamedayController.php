<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Sameday\Requests\SamedayGetPickupPointsRequest;
use Sameday\Requests\SamedayGetServicesRequest;
use Sameday\Requests\SamedayPostAwbRequest;
use Sameday\Requests\SamedayGetAwbPdfRequest;

class SamedayController extends Controller
{
    private $sameday;

    public function __construct()
    {
        // Initialize Sameday Client and Sameday object
        $samedayClient = new \Sameday\SamedayClient('7ammakeyourdayTEST', 'b0QCo9$X','https://sameday-api.demo.zitec.com');
        $this->sameday = new \Sameday\Sameday($samedayClient);
    }

    public function getPickupPoints()
    {
        $pickupPoints = $this->sameday->getPickupPoints(new SamedayGetPickupPointsRequest());
        return response()->json($pickupPoints->getPickupPoints());
    }

    public function getServices()
    {
        $services = $this->sameday->getServices(new SamedayGetServicesRequest());
        return response()->json($services->getServices());
    }

    public function createAwb()
    {
        // Implement logic to handle AWB creation with the required parameters
        // ...

        // Example:
        // $awb = $this->sameday->postAwb(new SamedayPostAwbRequest(...));

        // Return the response
        // return response()->json($awb);
    }

    public function getAwbPdf($awbNumber)
    {
        // Implement logic to handle AWB PDF retrieval
        // ...

        // Example:
        // $pdf = $this->sameday->getAwbPdf(new SamedayGetAwbPdfRequest($awbNumber, ...));

        // Return the PDF or implement download logic
        // return response()->make($pdf->getPdf(), 200, [
        //     'Content-Type' => 'application/pdf',
        //     'Content-Disposition' => 'inline; filename="awb.pdf"',
        // ]);
    }
}
