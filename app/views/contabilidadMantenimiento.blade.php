
@extends ('layout')

@section ('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
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
                <div class="form-group">
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
                <input type="submit" class="btn btn-success dropdown-toggle" value="Nueva UPS">
            </form>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <h3 class="sub-header">Contabilidad Matenimiento</h3>
            <div class="container-fluid">
              <h2>Table</h2>
                <p>The .table-bordered class adds border on all sides of the table and cells:</p>                        
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                             <th>#</th>
                            <th>Firstname</th>
                            <th>Firstname</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>Anna</td>
                            <td>Anna</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1</td>
                            <td>Anna</td>
                            <td>Debbie</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1</td>
                            <td>Anna</td>
                            <td>John</td>
                        </tr>
                    </tbody>
                </table>
            </div>

         


        </div>
    </div>

    @stop