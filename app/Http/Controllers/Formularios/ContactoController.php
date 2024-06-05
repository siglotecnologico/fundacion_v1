<?php

namespace App\Http\Controllers\Formularios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
class ContactoController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'option' => 'required|string',
            'message' => 'required|string',
            'terms' => 'accepted',
        ]);


        // Enviar el correo electrónico
        Mail::raw("Nombre: {$validatedData['name']}\nEmail: {$validatedData['email']}\nOpción: {$validatedData['option']}\nMensaje: {$validatedData['message']}", function($message) use ($validatedData) {
            $message->to('info@siglotecnologico.com')
                    ->subject('Nueva consulta de contacto');
        });

        // Enviar una respuesta al cliente
        return redirect()->back()->with('success', 'Tu información fue enviada con éxito. Nos pondremos en contacto contigo muy pronto.');

    }

    public function contactoinfo(Request $request)
    {
             // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'option' => 'required|string',
            'message' => 'required|string',
            'terms' => 'accepted'
        ]);

        // Construir el contenido del correo
        $emailContent = "Nombre: {$validatedData['name']}\n";
        $emailContent .= "Email: {$validatedData['email']}\n";
        $emailContent .= "Teléfono: " . ($validatedData['phone'] ?? 'No proporcionado') . "\n";
        $emailContent .= "Empresa: " . ($validatedData['company'] ?? 'No proporcionado') . "\n";
        $emailContent .= "Motivo: {$validatedData['option']}\n";
        $emailContent .= "Mensaje: {$validatedData['message']}";

        // Enviar correo a info@siglotecnologico.com
        Mail::raw($emailContent, function($message) use ($validatedData) {
            $message->to('info@siglotecnologico.com')
                    ->subject('Nueva consulta de contacto');
        });
        // Enviar una respuesta al cliente
        return redirect()->back()->with('success', 'Tu información fue enviada con éxito. Nos pondremos en contacto contigo muy pronto.');

    }

    public function suscripcion(Request $request)
    {
        // Validar el correo electrónico
        $validatedData = $request->validate([
            'email' => 'required|email|max:255'
        ]);

            // Enviar el correo electrónico
        Mail::send('emails.subscription', [], function($message) use ($validatedData) {
            $message->to($validatedData['email'])
                    ->subject('Gracias por suscribirte a nuestro boletín');
        });

        // Enviar notificación a la organización
        Mail::raw("Nuevo suscriptor al boletín:\nEmail: {$validatedData['email']}", function($message) use ($validatedData) {
            $message->to('info@fundaciondiosesbuenofielyjusto.org')
                    ->subject('Nueva suscripción al boletín');
        });
        if ($request->ajax()) {
            return response()->json(['message' => 'Te has suscrito con éxito. Pronto recibirás nuestras actualizaciones.'], 200);
        }

        // Redireccionar con mensaje de éxito
        return redirect()->back()->with('success', 'Te has suscrito con éxito. Pronto recibirás nuestras actualizaciones.');
    }
}
