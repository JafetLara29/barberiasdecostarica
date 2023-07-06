<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Subscription;

class SubscriptionController extends Controller
{
    public function showSubscriptionForm()
    {
        return view('subscription.form');
    }

    public function createSubscription(Request $request)
    {
        try {
            Stripe::setApiKey(config('services.stripe.secret'));

            // Create a new customer in Stripe
            $customer = \Stripe\Customer::create([
                'email' => $request->email,
                'name' => $request->name,
                'source' => $request->stripeToken,
            ]);

            // Guardar $customer->id en tu base de datos junto con otros datos del usuario

            // Create a subscription for the customer
            $subscription = Subscription::create([
                'customer' => $customer->id,
                'items' => [
                    [
                        'price' => 'price_123456', // Reemplaza con tu ID de precio real
                    ],
                ],
            ]);

            // Manejar la creación exitosa de la suscripción

            // PARA RICH Aqui es donde tienes que redirigir a la vista que jafet te solicito, es un ejemplo
            return redirect()->route('apertura_cuenta')->with('subscription_status', 'success');
        } catch (\Exception $e) {
            // Manejar el error en la creación de la suscripción

            return redirect()->back()->with('subscription_status', 'error');
        }
    }
}
