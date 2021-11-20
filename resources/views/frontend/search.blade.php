@extends('layouts.app')

@section('content')

<table class="container_table">
	<thead>
		<tr>
			<th><h1>Principio Activo</h1></th>
			<th><h1>Forma Farmaceutica</h1></th>
			<th><h1>Indicaciones</h1></th>
			<th><h1>Via y Posologia</h1></th>
			<th><h1>Normas de Administracion</h1></th>
			<th><h1>Observaciones</h1></th>
			<th><h1>Criterio</h1></th>
		</tr>
	</thead>
	<tbody>

        @if( @sizeof($medicines) != '0') {{-- Revisa si existe algun medicamento --}}

            @foreach($medicines as $medicine)

                <tr>
                    <td>{!! $medicine->active_principle !!}</td>
                    <td>{!! $medicine->pharmaceutical_form !!}</td>
                    <td>{!! $medicine->indications !!}</td>
                    <td>{!! $medicine->route_dosage !!}</td>
                    <td>{!! $medicine->management_rules !!}</td>
                    <td>{!! $medicine->observations !!}</td>

                    <td class="text-center" style="font-size: 30px">
                        @if(@$medicine->criterion == "START")
                        <i class="fas fa-check-circle" style="color: rgb(3, 208, 3)"></i>
                        @elseif(@$medicine->criterion == "STOPP")
                            <i class="fas fa-exclamation-circle" style="color: rgb(255, 17, 0)"></i>
                        @endif
                    </td>

                </tr>

                @if($medicine->additional)
                    <tr>
                        <td colspan="7" style="margin: 0; padding: 10px">  {!! $medicine->additional !!} </td>
                    </tr>
                @endif

            @endforeach

        @else

        <tr>
            <td colspan="7" class="text-center"> No hay medicamentos o tratamientos que coincidan con la busqueda </td>
        </tr>

        @endif

	</tbody>
</table>




@endsection
