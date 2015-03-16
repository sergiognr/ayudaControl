
@extends ('layout')

@section ('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

            <div class="alert alert-success" role="alert">
                <a href="#" class="alert-link"> Ingresar Asistencia: </a>
            </div>
            <form role="form">

                <div class="form-group">
                    <label for="email"> Ticket </label>
                    <input type="text" class="form-control">

                </div>
                <div class="form-group">
                    <label for="email"> Comercio </label>
                    <input type="text" class="form-control" id="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email"> Inconveniente </label>
                    <select class="form-control">
                        
                        <option> Activacion de JAVA </option>
                        <option> Configuracion de impresora </option>
                        <option> Reinstalacion de impresora </option>
                        <option> Descarga de JAVA y reinstalacion de navegador </option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="email"> Navegador </label>
                    <select class="form-control">
                        
                        <option> Firefox Mozilla </option>
                        <option> Google Chrome </option>
                        <option> Internet Explorer </option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="email"> Comentario </label>
                    <textarea class="form-control" rows="8"></textarea>
                </div>
                
                <div class="checkbox">
                    <label><input type="checkbox"> Nuevo CNB</label>
                
                </div>
                <input type="submit" class="btn btn-success dropdown-toggle" value="Nueva asistencia">
            </form>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <h3 class="sub-header">CNB</h3> 
            
                
            <h4>12/03/2014 Lunes</h4>
            <p> table-hover class enables a hover state on table rows within a tbody:</p>                              
            <table style="display: none;" id="div2" class="table table-hover">
                <thead>
                    <tr>
                        <th>Ticket</th>
                        <th>Comercio</th>
                        <th>Problema</th>
                        <th>Comentario</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>1</td>
                        <td>Anna</td>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>1</td>
                        <td>Anna</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Anna</td>
                        <td>1</td>
                        <td>Anna</td>
                    </tr>
                </tbody>
            </table>


        </div>
    </div>
</div>
@stop