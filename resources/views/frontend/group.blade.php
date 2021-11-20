@extends('layouts.app')

@section('content')


<div class="container-fluid py-2">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">{{ $group->name }}</h5>
            <h1  style="font-size: 170px">{{ $group->letter }}</h1>
        </div>
    </div>
</div>

<div style="margin: 15px">
    <div class="bg-light rounded" style="padding: 20px; margin-bottom: 30px">
        {!! $group->description !!}
    </div>
</div>



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


        @foreach($group->classifications as $classification)

            <tr style="background-color: #1d2a4de3; color: white;">
                <td colspan="7">  {{ $classification->code }} {{ $classification->name }} </td>
            </tr>

            @if($classification->additional)
                <tr>
                    <td colspan="7" style="margin: 0; padding: 10px">  {!! $classification->additional !!} </td>
                </tr>
            @endif


            @foreach($classification->medicines as $medicine)

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

            @foreach ($classification->subClassification as $subclassification)
                <tr style="background-color: #1d2a4d9f; color: white;">
                    <td colspan="7">  {{ $subclassification->code }} {{ $subclassification->name }} </td>
                </tr>

                @if($subclassification->additional)
                    <tr>
                        <td colspan="7" style="margin: 0; padding: 10px">  {!! $subclassification->additional !!} </td>
                    </tr>
                @endif

                @foreach($subclassification->medicines as $medicine)

                    <tr>
                        <td>{!! $medicine->active_principle !!}</td>
                        <td>{!! $medicine->pharmaceutical_form !!}</td>
                        <td>{!! $medicine->indications !!}</td>
                        <td>{!! $medicine->route_dosage !!}</td>
                        <td>{!! $medicine->management_rules !!}</td>
                        <td>{!! $medicine->observations !!}</td>
                        <td class="text-center dropdown" style="font-size: 30px">
                            @if(@$medicine->criterion == "START")
                                <i class="fas fa-check-circle" style="color: rgb(3, 208, 3)"></i>
                                <div class="dropdown-content">
                                    <p style="color: black; font-size: 15px;">
                                        Criterio: START <br>
                                        Este medicamento se puede aplicar sin problema.
                                    </p>
                                </div>
                            @elseif(@$medicine->criterion == "STOPP")
                                <i class="fas fa-exclamation-circle" style="color: rgb(255, 17, 0)"></i>
                                <div class="dropdown-content">
                                    <p style="color: black; font-size: 15px;">
                                        Criterio: STOPP <br>
                                        Este medicamento debe ser administrado con precaucion.
                                    </p>
                                </div>
                            @endif

                        </td>
                    </tr>


                    @if($medicine->additional)
                        <tr>
                            <td colspan="7" style="margin: 0; padding: 10px">  {!! $medicine->additional !!} </td>
                        </tr>
                    @endif

                @endforeach

            @endforeach

        @endforeach





	</tbody>
</table>


@endsection
