<?php

class Factura extends \Eloquent {

    protected $fillable = array('cac', 'fecha', 'costoPc','pc','certificadora',
                                'costoCertificadora','impMatricial','costoImpMatricial',
                               'impHp','costoImpHp',  'ups','costoUps','total');

    function todosLosDatos() {

        $facturas = Factura::orderBy('created_at', 'desc')->get();
        
        
        return $facturas;
    }
    
    

    function agregarFactura($CAC, $CPC, $CCERTIFICADORA, $CIMPMATRICIAL, $CIMPHP, $CUPS, $FECHA,
    $total,$pc,$certificadora,$impMatricial,$impHp,$ups) {

        $input = array(
              
            'cac' => $CAC,
            'fecha' => $FECHA,
            'pc' => $pc,
            'costoPc' => $CPC,
            'certificadora' => $certificadora,
            'costoCertificadora' => $CCERTIFICADORA,
            'impMatricial' => $impMatricial,
            'costoImpMatricial' => $CIMPMATRICIAL,
            'impHp' => $impHp,
            'costoImpHp' => $CIMPHP,
            'ups' => $ups,
            'costoUps' => $CUPS,
            'total' => $total
        );

        Factura::create($input);
        
        
    }
    
    function ordenarPorFecha() {
        
        $ordenarPorFecha = Factura::orderBy('total', 'desc')->get();
        
        
        return $ordenarPorFecha;
        
    }
    
      function ordenarPorSucursales() {
        
        $ordenarPorCac = Factura::orderBy('cac', 'desc')->get();
        
        
        return $ordenarPorCac;
        
    }

}
