<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Client;
use App\Models\Review;
use App\Models\Bill;
use App\Models\Worker;
use App\Models\Company;
use PDF;

class PdfController extends Controller
{
    /**
     * Return Users data to users view
     *
     * @return void
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Export content to PDF with View
     *
     * @return void
     */
    public function productPdf()
    {
        $users = User::all();

       view()->share('PDF.productPdf.blade.php',$users);

        $pdf = PDF::loadView('PDF.productPdf', ['products' => Product::all()]);

        return $pdf->download('product_table.pdf');
    }

    public function clientPdf()
    {
        $users = User::all();

       view()->share('PDF.clientPdf.blade.php',$users);

        $pdf = PDF::loadView('PDF.clientPdf', ['clients' => Client::all()]);

        return $pdf->download('client_table.pdf');
    }

    public function workerPdf()
    {
        $users = User::all();

       view()->share('PDF.workerPdf.blade.php',$users);

        $pdf = PDF::loadView('PDF.workerPdf', ['workers' => Worker::all()]);

        return $pdf->download('worker_table.pdf');
    }

    public function billPdf()
    {
        $users = User::all();

       view()->share('PDF.billPdf.blade.php',$users);

        $pdf = PDF::loadView('PDF.billPdf', ['bills' => Bill::all()]);

        return $pdf->download('bill_table.pdf');
    }

    public function reviewPdf()
    {
        $users = User::all();

       view()->share('PDF.reviewPdf.blade.php',$users);

        $pdf = PDF::loadView('PDF.reviewPdf', ['reviews' => Review::all()]);

        return $pdf->download('review_table.pdf');
    }

    public function companyPdf()
    {
        $users = User::all();

       view()->share('PDF.companyPdf.blade.php',$users);

        $pdf = PDF::loadView('PDF.companyPdf', ['companies' => Company::all()]);

        return $pdf->download('company_table.pdf');
    }

    public static function factura(Request $req)
    {
        $pdf = PDF::loadView('PDF.factura', ['products'=>$req]);

        return $pdf->download('factura.pdf');
    }

}
