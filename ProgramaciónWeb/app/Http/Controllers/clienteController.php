<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

//BD
use Illuminate\Support\Facades\DB;
//timestamp
use Carbon\Carbon;

//validador
use App\Http\Requests\validadorRegistro;

//CONTRASEÑA
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;
//PDF
use Barryvdh\DomPDF\Facade\Pdf;

//Excel
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ClientesExport;

//Email verificacion
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;




class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ConsultarClientes = DB::table('clientes')->get();
        return view('clientesConsulta', compact('ConsultarClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorRegistro $request)
    {
        // Registrar al usuario
        $clienteId = DB::table('clientes')->insertGetId([
            'nombre' => $request->input('txtnombre'),
            'correo' => $request->input('txtemail'),
            'telefono' => $request->input('txttelefono'),
            'password' => Hash::make($request->input('txtpassword')),
            'password_confirmation' => Hash::make($request->input('txtpassword_confirmation')),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    
        // Generar el enlace de verificación
        $verificationUrl = route('verify.email', ['id' => $clienteId, 'hash' => sha1($request->input('txtemail'))]);
    
        // Enviar el correo de verificación
        Mail::to($request->input('txtemail'))->send(new VerifyEmail($verificationUrl));
    
        session()->flash('exito', 'Se guardó el usuario y se envió el correo de verificación.');
        return to_route('rutainicio');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();
        return view('clienteUpdate', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('clientes')
        ->where('id', $id)
        ->update([
            'nombre' => $request->input('txtnombre'),
            'correo' => $request->input('txtemail'),
            'telefono' => $request->input('txttelefono'),
            'password' => hash::make($request->input('txtpassword')),
            'password_confirmation' => hash::make($request->input('txtpassword_confirmation')),
            'updated_at' => Carbon::now()
 
        ]);
        $usuario = $request->input('txtnombre');

        session()->flash('exito', 'Se actualizo el usuario' .$usuario);
        return to_route('rutaclientes');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id', $id)->delete();
        session()->flash('exito','Se elimino el usuario' .$id);
        return to_route('rutaclientes');
    }



//credenciales login 

    public function enviarLogin(Request $request)
    {
        $request->validate([
            'txtemail' => 'required|email',
            'txtpassword' => 'required',
        ]);
        
        $user = DB::table('clientes')->where('correo', $request->txtemail)->first();
        
        if ($user && Hash::check($request->txtpassword, $user->password)) {
            // Verificar si el correo está verificado
            if ($user->email_verified_at === null) {
                return back()->withErrors(['txtemail' => 'Por favor verifica tu correo electrónico.'])->withInput();
            }
            
            // Guardar usuario en sesión
            session(['user' => $user]);
        
            // Verificar el rol y redirigir según corresponda
            if ($user->role === 'admin') {
                return redirect()->route('rutaclientes')->with('success', 'Bienvenido Administrador.');
            } else {
                return redirect()->route('rutainicio')->with('success', 'Inicio de sesión exitoso.');
            }
        }
        
        return back()->withErrors(['txtemail' => 'Correo o contraseña incorrectos.'])->withInput();
    }


//logout

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('rutalogin')->with('success', 'Sesión cerrada exitosamente.');
    }


//PDFS
    public function exportClientesPDF()
    {
    $clientes = DB::table('clientes')->get(); // Cambia a tu modelo si usas Eloquent

    $pdf = Pdf::loadView('reportes.clientesPDF', compact('clientes'));
    return $pdf->download('reporte_clientes.pdf');
    }

//Excels
    public function exportClientesExcel()
    {
    return Excel::download(new ClientesExport, 'clientes.xlsx');
    }

//verifyEmail
public function verifyEmail($id, $hash)
{
    $cliente = DB::table('clientes')->where('id', $id)->first();
    if (!$cliente || sha1($cliente->correo) !== $hash) {
        return redirect()->route('rutaregistro')->withErrors(['error' => 'El enlace de verificación no es válido.']);
    }
    // Marcar el correo como verificado
    DB::table('clientes')->where('id', $id)->update(['email_verified_at' => Carbon::now()]);
    return redirect()->route('rutainicio')->with('success', 'Correo verificado exitosamente. Ahora puedes iniciar sesión.');
}

}




