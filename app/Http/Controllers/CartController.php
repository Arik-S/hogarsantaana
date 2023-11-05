<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

        session()->flash('success', 'Donación agregada al carrito correctamente!');

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

        session()->flash('success', 'El carrito de donaciones se actualizó correctamente!');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Carrito de donaciones eliminado correctamente!');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Todo el carrito de donaciones se ha eliminado correctamente!');

        return redirect()->route('cart.list');
    }

    public function storeCart(Request $request)
    {
        $user = Auth::user(); // Obtiene el usuario autenticado
        $user_id = $user->id; // Obtiene el ID del usuario autenticado
        $user_name = $user->name;
        // Define las reglas de validación
        $rules = [
            'delivery_method' => 'required|in:1,2',
            'phone_number' => 'required|numeric|digits_between:1,10',
        ];

        // Define los mensajes de error personalizados
        $messages = [
            'delivery_method.required' => 'Por favor, elija un método de entrega.',
            'delivery_method.in' => 'El método de entrega seleccionado no es válido.',
            'phone_number.required' => 'Por favor, cargue un número de teléfono.',
            'phone_number.numeric' => 'El número de teléfono debe ser numérico.',
            'phone_number.digits_between' => 'El número de teléfono debe tener entre 1 y 10 dígitos.',
        ];
        
         // Valida los datos del formulario
        $validator = Validator::make($request->all(), $rules, $messages);

        // Si la validación falla, redirecciona de vuelta con los errores
        if ($validator->fails()) {
            session()->flash('fail', $messages);
            return redirect()->route('cart.list')->withErrors($validator)->withInput();
        }
        // Obtiene los elementos del carrito
        $cartItems = \Cart::getContent();
    
        // Itera a través de los elementos del carrito y guárdalos como donaciones
        foreach ($cartItems as $cartItem) {
            Donation::create([
                'user_id' => $user_id,
                'user_name' => $user_name,
                'product_id' => $cartItem->id, // Asegúrate de tener el campo correcto
                'product_name' => $cartItem->name, // Asegúrate de tener el campo correcto
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
