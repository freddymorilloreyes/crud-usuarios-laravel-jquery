@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            agregar usuario
        </button>
        <div id="tabla_usuarios">

        </div>

        <!-- Modal Add-->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('add.user') }}" id="form_add_user">
                        <div class="modal-body">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        <span role="alert">
                                            <strong class="mensaje_nombre"></strong>
                                        </span>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        <span role="alert">
                                            <strong class="mensaje_correo"></strong>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        <span role="alert">
                                            <strong class="mensaje_password"></strong>
                                        </span>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>

                                    <div class="col-md-6">
                                        <select name="country" id="country" class="country_id">
                                            <option value="">País</option>
                                            @foreach($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group row">
                                    <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>

                                    <div class="col-md-6">
                                        <select name="department" id="departments" class="department_id">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group row">
                                    <label for="municipality_id" class="col-md-4 col-form-label text-md-right">{{ __('Municipalidad') }}</label>

                                    <div class="col-md-6">
                                        <select name="municipality_id" id="municipality_id" class="municipality_id">
                                            <option value=""></option>
                                        </select>
                                    <span role="alert">
                                        <strong class="mensaje_direccion"></strong>
                                    </span>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                    <button type="submit" class="btn btn-primary" id="enviar_form">
                                        {{ __('Registrar') }}
                                    </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Edit-->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('update.user',['id'=>3]) }}" id="form_update_user">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group row">
                                <label for="name_update" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name_update" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    <span role="alert">
                                            <strong class="mensaje_nombre"></strong>
                                    </span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_update" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email_update" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    <span role="alert">
                                            <strong class="mensaje_correo"></strong>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password_update" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password_update" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <span role="alert">
                                            <strong class="mensaje_password"></strong>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="country_update" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>

                                <div class="col-md-6">
                                    <select name="country" id="country_update" class="country_id">
                                        <option value="">País</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="departments_update" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>

                                <div class="col-md-6">
                                    <select name="department" id="departments_update" class="department_id">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="municipality_id_update" class="col-md-4 col-form-label text-md-right">{{ __('Municipalidad') }}</label>

                                <div class="col-md-6">
                                    <select name="municipality_id" id="municipality_id_update" class="municipality_id">
                                        <option value=""></option>
                                    </select>
                                <span role="alert">
                                        <strong class="mensaje_direccion"></strong>
                                </span>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                            <button type="submit" class="btn btn-primary" id="enviar_form_update">
                                {{ __('Actualizar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{ asset('js/users.js') }}" defer></script>
    <script src="{{ asset('js/address.js') }}" defer></script>
@endsection
