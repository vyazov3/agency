@extends('layouts.main')
@section('title_page')
    Форма клиентов
@endsection
@section('content')
    <div class="dasads">
        <form action="{{ route('client.store') }}" method="post">\
            @csrf
            <input type="text" name="first_name">
            <input type="text" name="last_name">
            <input type="text" name="middle_name">
            <label>Вид лица</label>
            <select name="category_id">
                @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach
            </select>
            <button type="submit">click</button>

        </form>

    </div>
@endsection