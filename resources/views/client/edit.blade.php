@extends('layouts.main')
@section('title_page')
    Форма клиентов
@endsection
@section('content')
    <div class="dasads">
        <form action="{{ route('client.update', $client->id) }}" method="post">            
            @csrf
            @method('patch')
            <input type="text" name="first_name" value="{{ $client->first_name }}">
            <input type="text" name="last_name" value="{{ $client->last_name }}">
            <input type="text" name="middle_name" value="{{ $client->middle_name }}">
            <select name="category_id">
                @foreach ($categories as $item)
                <option value="{{ $item->id }}"
                {{ $client->category_id === $item->id ? 'selected' : ''}}
                >{{ $item->title }}</option>
                @endforeach
            </select>
            <button type="submit">update</button>
        </form>
    </div>
@endsection