
@extends ('layout')

@section ('content')

<div class="container-fluid">

    <div class="row">


        <div class="col-sm-3 col-md-2 sidebar">
            <div class="alert alert-success" role="alert">
                <a href="#" class="alert-link"> Ingresar UPS: </a>
            </div>
            <form role="form">
                <div class="form-group">
                    <label for="email"> CAC </label>
                    <select class="form-control">

                        <?php
                        $i = 1;

                        while ($i < 100) {

                            echo " <option>$i</option>";

                            $i++;
                        }
                        ?>


                    </select>
                </div>
                <div class="form-group">
                    <label for="email"> CAC Origen </label>
                    <select class="form-control">

                        <?php
                        $i = 1;

                        while ($i < 100) {
                            
                            

                            echo " <option>$i</option>";

                            $i++;
                        }
                        ?>


                    </select>
                </div>
                <div class="form-group" >
                    <label for="email"> Marca - Modelo </label>
                    <input type="text" class="form-control" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="pwd">Fecha instalacion y mantenimiento</label>
                    <input type="date" class="form-control" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email"> Serial - Potencia </label>
                    <input type="text" class="form-control" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email"> Costo de asistencia </label>
                    <input type="number " class="form-control" id="email" placeholder="">
                </div>

                <div class="checkbox">
                    <label><input type="checkbox"> UPS Nueva</label>
                    <label><input type="checkbox"> Reparada</label>
                </div>
                <input type="submit" class="btn btn-success dropdown-toggle" value="Nueva UPS">
            </form>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <h3 class="sub-header">Listado de UPS</h3>
            <div  style="display: none;" id="div2" class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>CAC Origen</th>
                            <th>CAC Destino</th>
                            <th>Modelo y Marca</th>
                            <th>Potencia y Serial</th>
                            <th>Fecha de Instalacion</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
   
                    @foreach($todasUps as $ups)
                    <tr>
                    <td> {{ $ups->cacOrigen }} </td>
                    <td> {{ $ups->cacDestino }} </td>
                    <td> {{ $ups->modeloYmarca }} </td>
                    <td> {{ $ups->potenciaYserial }} </td>
                    <td> {{ $ups->fechaDeInstalacion }} </td>
                    </tr>
                    
                    @endforeach
                     </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>
@stop