@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Email</div>

                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Destinatario</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Destinatario">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput">Asunto</label>
                            <input type="email" class="form-control" id="exampleFormControlInput" placeholder="Asunto">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mensaje</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
