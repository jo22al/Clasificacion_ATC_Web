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
		</tr>
	</thead>
	<tbody>


        @if($medicines)

            @foreach($medicines as $medicines)

                <tr>
                    <td>{!! $medicines->active_principle !!}</td>
                    <td>{!! $medicines->pharmaceutical_form !!}</td>
                    <td>{!! $medicines->indications !!}</td>
                    <td>{!! $medicines->route_dosage !!}</td>
                    <td>{!! $medicines->management_rules !!}</td>
                    <td>{!! $medicines->observations !!}</td>
                </tr>

                @if($medicines->additional)
                    <tr>
                        <td colspan="6" style="margin: 0; padding: 10px">  {!! $medicines->additional !!} </td>
                    </tr>
                @endif

            @endforeach

        @else

            <tr>
                <td> no hay :( </td>
            </tr>

        @endif





	</tbody>
</table>




@endsection
