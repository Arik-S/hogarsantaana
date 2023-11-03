<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartList()
    {

        $cartItems = \Cart::getContent();
        //dd($cartItems);
        return view('cart', compact('cartItems'));
    }

    public function showDonationPage()
    {
        $cartItems = \Cart::getContent();
        return view('donation', compact('cartItems'));
    }



    public function addToCart(Request $request)
    {

        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => 'required',
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);

        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }


    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'El carrito de artículos se actualizó correctamente!');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Carrito de artículos eliminado correctamente!');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Todo el carrito de artículos se ha eliminado correctamente!');

        return redirect()->route('cart.list');
    }

    public function storeCart(Request $request)
    {
        $user = Auth::user(); // Obtiene el usuario autenticado
        $user_id = $user->id; // Obtiene el ID del usuario autenticado
    
        // Obtiene los elementos del carrito
        $cartItems = \Cart::getContent();
    
        // Itera a través de los elementos del carrito y guárdalos como donaciones
        foreach ($cartItems as $cartItem) {
            Donation::create([
                'user_id' => $user_id,
                'product_id' => $cartItem->id, // Asegúrate de tener el campo correcto
                'name' => $cartItem->name, // Asegúrate de tener el campo correcto
                'quantity' => $cartItem->quantity,
                'delivery_method' => $request->input('delivery_method'), // Captura el método de entrega del formulario
                'phone_number' => $request->input('phone_number'), // Captura el método de entrega del formulario
            ]);
        }
    
        // Limpia el carrito después de guardar las donaciones
        \Cart::clear();
    
        return redirect()->route('cart.finish');
    }
    
}
