@extends('layouts.app')

@section('template_title')
    Personals
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personals') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('personal.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre</th>
									<th >Apellido</th>
									<th >Edad</th>
									<th >Fecha Nacimiento</th>
									<th >Ci</th>
									<th >Sexo</th>
									<th >Email</th>
									<th >Contacto Enmergencia</th>
									<th >Cargos Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personals as $personal)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $personal->nombre }}</td>
										<td >{{ $personal->apellido }}</td>
										<td >{{ $personal->edad }}</td>
										<td >{{ $personal->fecha_nacimiento }}</td>
										<td >{{ $personal->CI }}</td>
										<td >{{ $personal->sexo }}</td>
										<td >{{ $personal->email }}</td>
										<td >{{ $personal->contacto_enmergencia }}</td>
										<td >{{ $personal->cargos_id }}</td>

                                            <td>
                                                <form action="{{ route('personals.destroy', $personal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personals.show', $personal->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personals.edit', $personal->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $personals->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
