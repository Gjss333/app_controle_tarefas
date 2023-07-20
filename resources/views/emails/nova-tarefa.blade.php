<x-mail::message>
{{ $tarefa }}

Data Limite de conclusão {{ $data_limite_conclusao }}

<x-mail::button :url="$url" color="sucess">
Clique aqui para ver a tarefa
</x-mail::button>

Atenciosamente,<br>
{{ config('app.name') }}
</x-mail::message>
