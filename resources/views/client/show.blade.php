@extends('layouts.main')
@section('title_page')
    Форма клиентов
@endsection
@section('content')
        <div class="client">{{ $client->id }}.  {{ $client->first_name }}</div>
        <div class="client">{{ $client->last_name }}</div>
        <div class="edit">
            <a href="{{ route('client.edit', $client->id)}}">Редактировать</a>
        </div>
        <form action="{{ route('client.delete', $client->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete">
        </form>
        <a href="{{ route('client.index')}}">Назад</a>
        
        <hr>
@endsection