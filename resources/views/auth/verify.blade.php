@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p>Falta pouco agora! precisamos apenas que você confirme seu Email</p></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            <p>Reenviamos o email para voçê com o link de validação</p>
                        </div>
                    @endif

                    <p>Antes de utilizar os recursos da aplicação por favor valide seu email por meio do link de verificação que encaminhamos para o seu email</p>
                    <p>Caso voçê não tenha recebido o email de verificação, clique no link a seguir para receber um novo email</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique Aqui</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
