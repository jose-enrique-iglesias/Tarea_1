<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTarea1 extends Controller
{
    public function vistaEjercicio1(){
        return view('Ejercicio_1');
    }
    public function vistaEjercicio2(){
        return view('Ejercicio_2');
    }
    public function numeroMayor(Request $request){
        $numero_1 = $request->post('numero_1');
        $numero_2 = $request->post('numero_2');
        $numero_3 = $request->post('numero_3');
        if($numero_1 > $numero_2 && $numero_1 > $numero_3){
            $resultado = $numero_1;
        }
        else
        if($numero_2 > $numero_1 && $numero_2 > $numero_3){
            $resultado = $numero_2;
        }
        else
        if($numero_3 > $numero_1 && $numero_3> $numero_2){
            $resultado = $numero_3;
        }
        echo json_encode(array('0'=> $resultado));
    }

    public function numeroCadena(Request $request){
        $valor = $request->post('numero');
        switch($valor){
            case 0: $cadena = 'Cero';break;
            case 1: $cadena = 'Uno';break;
            case 2: $cadena = 'Dos';break;
            case 3: $cadena = 'Tres';break;
            case 4: $cadena = 'Cuatro';break;
            case 5: $cadena = 'Cinco';break;
            case 6: $cadena = 'Seis';break;
            case 7: $cadena = 'Siete';break;
            case 8: $cadena = 'Ocho';break;
            case 9: $cadena = 'Nueve';break;
            default: $cadena = "No existe esa opción";
        }
        echo json_encode(array('0'=> $cadena));
    }
}
