@extends ('layout')

@section ('content')

<div class="container-fluid">

    <div class="row">


        <div class="col-sm-3 col-md-2 sidebar">
            <div class="alert alert-success" role="alert">
                <a href="#" class="alert-link"> Ingresar Factura: </a>
            </div>

            {{ Form::open(array('route' => 'agregarFactura', 'method' => 'POST'), array('role' => 'form')) }}

            <div class="form-group">

                {{ Form::label('sucursal', 'Sucursal') }}
                {{ Form::selectRange('sucursal', 1, 90, 1, ['class' => 'form-control']) }}

            </div>

            <div class="form-group">

                {{ Form::label('pc', 'Cant. PC') }}
                {{ Form::number('pc', 'pc',['class' => 'form-control']); }}

            </div>

            <div class="form-group">

                {{ Form::label('certificadora', 'Cant. Certificadora') }}
                {{ Form::number('certificadora', 'certificadora',['class' => 'form-control']); }}

            </div>

            <div class="form-group">

                {{ Form::label('impmatricial', 'Impresora Matricial') }}
                {{ Form::number('impmatricial', 'impmatricial',['class' => 'form-control']); }}

            </div>

            <div class="form-group">

                {{ Form::label('imphp', 'Impresora HP') }}
                {{ Form::number('imphp', 'imphp',['class' => 'form-control']); }}

            </div>

            <div class="form-group">

                {{ Form::label('ups', 'UPS') }}
                {{ Form::number('ups', 'ups',['class' => 'form-control']); }}

            </div>

            <div class="form-group">

                {{ Form::label('fechainstalacion', 'Fecha instalacion y mantenimiento') }}

                {{ Form::macro('fecha', function()
                {
                return '<input type="date" class= "form-control" name="fechainstalacion" >';
                })}}

                {{ Form::fecha() }}

            </div>

            {{ Form::submit('Nueva Factura', ['class' => 'btn btn-success dropdown-toggle']) }}




            {{ Form::close() }}

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <h3 class="sub-header">Facturas  

                <div style="float:right;font-size:14px;" class="form-group">

                    {{ Form::open(array('route' => 'ordenar', 'method' => 'post'), array('role' => 'form')) }}
                    <label for="email"> Ordenar por: </label>
                    {{ Form::macro('myField', function(){    
                       return " <select name = 'criterio' onchange = 'this.form.submit()' >
                        <option selected='selected'>Ordenar por..</option>
                        <option>Sucursales</option>
                        <option>Fecha</option>
                    </select>  ";})}}


                    {{Form::myField()}}



                    {{ Form::close() }}
                </div>   </h3>  

            <div style="display: none;" id="div2" class="row">


                @foreach($todo as $tod)

                <div class="col-sm-4">
                    <div class="panel panel-default" >
                        <!-- Default panel contents -->
                        <div class="panel-heading">CAC {{ $tod->cac }} <span style="float: right;" >  {{ $tod->fecha }} </span></div>

                        <!-- List group -->
                        <ul class="list-group">


                            <li class="list-group-item"> PC de Escritorio : {{ $tod->pc }} <small style="color: #444;float: right;" >  {{ $tod->costoPc }} gs </small> </li>
                            <li class="list-group-item"> Certificadoras : {{ $tod->certificadora }} <small style="color: #444;float: right;" >  {{ $tod->costoCertificadora }} gs </small> </li>
                            <li class="list-group-item"> Impresora Matricial : {{ $tod->impMatricial }} <small style="color: #444;float: right;" >  {{ $tod->costoImpMatricial }} gs </small> </li>
                            <li class="list-group-item"> Impresora HP : {{ $tod->impHp }} <small style="color: #444;float: right;" >  {{ $tod->costoImpHp }} gs </small> </li>
                            <li class="list-group-item"> UPS : {{ $tod->ups }} <small style="color: #444;float: right;" >  {{ $tod->costoUps }} gs </small> </li>
                            <li class="list-group-item"> Total : <span style="float: right;" class="label label-primary" >{{ $tod->total }} gs </span> </li>
                        </ul>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
@stop