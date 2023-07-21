Site da aplicação

{{-- usuarios logado --}}

@auth
    <h1>usuario autenticado</h1>
    <p>{{ Auth::user()->id }}</p>
    <p>{{ Auth::user()->name }}</p>
    <p>{{ Auth::user()->email }}</p>
@endauth

{{-- /usuários visitantes --}}
@guest
    olá visitante
@endguest