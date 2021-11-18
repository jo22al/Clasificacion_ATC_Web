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
			<th><h1>Norma de Administracion</h1></th>
			<th><h1>Observaciones</h1></th>
		</tr>
	</thead>
	<tbody>


        @foreach($group->classifications as $classification)

            <tr style="background-color: #1d2a4de3; color: white;">
                <td colspan="6">  {{ $classification->code }} {{ $classification->name }} </td>
            </tr>

            @if($classification->additional)
                <tr>
                    <td colspan="6" style="margin: 0; padding: 10px">  {!! $classification->additional !!} </td>
                </tr>
            @endif


            @foreach($classification->medicines as $medicines)

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

            @foreach ($classification->subClassification as $subclassification)
                <tr style="background-color: #1d2a4d9f; color: white;">
                    <td colspan="6">  {{ $subclassification->code }} {{ $subclassification->name }} </td>
                </tr>

                @if($subclassification->additional)
                    <tr>
                        <td colspan="6" style="margin: 0; padding: 10px">  {!! $subclassification->additional !!} </td>
                    </tr>
                @endif

                @foreach($subclassification->medicines as $medicines)

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

            @endforeach

        @endforeach





	</tbody>
</table>


@endsection
