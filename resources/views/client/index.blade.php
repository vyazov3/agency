@extends('layouts.main')
@section('title_page')
    Форма клиентов
@endsection
@section('content')
    <div class="create">
        <a href="{{ route('client.create') }}">Создать клиента</a>
    </div>
    @foreach ($clients as $item)
        <a class="client" href="{{ route('client.show', $item->id)}}">{{ $item->id }} . {{ $item->first_name }}--------{{$item->last_name}}</div>
        <hr>
    @endforeach

@endsection