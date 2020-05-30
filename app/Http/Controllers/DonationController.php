<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class DonationController extends Controller
{
    public function donate() {

        $donations = Donation::orderBy('id', 'desc')->get();

        return view('pages.donate',[

            'donations' => $donations
        ]);
    }

    public function getMakePayment(Request $r) {

        $price = number_format((float)$r->price, 2, '.', '');

        $payment = Mollie::api()->payments()->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => $price, // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'Donation to app',
            'webhookUrl' => 'http://ea34910ed1fb.ngrok.io/api/webhooks/mollie',
            'redirectUrl' => route('paymentSuccess'),
            ]);

            $donation = new Donation();
            $donation->name = $r->name;
            $donation->price = $price;
            $donation->email = $r->email;
            $donation->description = $r->message;
            $donation->active = $r->active;
            $donation->payment_id = $payment->id;
            $donation->payment_status = 'Pending';
            $donation->save();

            // redirect customer to Mollie checkout page
            return redirect($payment->getCheckoutUrl(), 303);
        }

        public function getSuccess(Request $r) {

            return redirect('donate');

        }

}
