<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mollie\Laravel\Facades\Mollie;

class WebhookController extends Controller
{

    public function handle(Request $request) {

        if(! $request->has('id') ) {
          return ;
        } // <-- don't forget this check

        $payment = Mollie::api()->payments()->get($request->id);

        if($payment->isPaid()) {
          $donate = Donation::where('payment_id', $request->id)->firstOrFail();
          $donate->payment_status = "Paid";
          $donate->save();
        }
      }
}
