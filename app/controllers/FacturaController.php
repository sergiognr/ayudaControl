<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacturaController
 *
 * @author saac
 */
class FacturaController extends BaseController {

    public function listarFacturas() {

        $mostrar = new Factura;

        $todo = $mostrar->todosLosDatos();

        return View::make('controlDeFacturas', compact('todo'));
    }

    public function nuevaFactura() {

        $datos = Input::all();
        $CAC = $datos['sucursal'];
        $CPC = $datos['pc'] * 66000;
        $CCERTIFICADORA = $datos['certificadora'] * 66000;
        $CIMPMATRICIAL = $datos['impmatricial'] * 66000;
        $CIMPHP = $datos['imphp'] * 66000;
        $CUPS = $datos['ups'] * 550000;
        $FECHA = $datos['fechainstalacion'];

        $total = $CPC + $CCERTIFICADORA + $CIMPMATRICIAL + $CIMPHP + $CUPS;

        $nuevo = new Factura;

        $nuevo->agregarFactura($CAC, $CPC, $CCERTIFICADORA, $CIMPMATRICIAL, $CIMPHP, $CUPS, $FECHA
                , $total, $datos['pc'], $datos['certificadora'], $datos['impmatricial'], $datos['imphp'], $datos['ups']
                , $datos['fechainstalacion']);

        return Redirect::back();
    }

    public function ordenar() {
        
        $datos = Input::all();
        
        $mostrar = new Factura;

        if ($datos['criterio'] == 'Fecha') {
            
            
            
            $todo = $mostrar->ordenarPorFecha();
            
            return View::make('controlDeFacturas', compact('todo'));
            
        } else {
            
            $todo = $mostrar->ordenarPorSucursales();
            
            return View::make('controlDeFacturas', compact('todo'));
            
        }
    }

}
