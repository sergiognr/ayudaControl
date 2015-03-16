<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UpsController
 *
 * @author saac
 */
class UpsController extends BaseController {

    public function listarUps() {

        $mostrar = new Ups;

        $todasUps = $mostrar->todosLosDatos();

        return View::make('listaUpsPorSucursal', compact('todasUps'));
    }

}
