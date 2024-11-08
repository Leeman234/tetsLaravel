@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="form-container">
        <form action="/theme" method="POST">
            @csrf
            <label for="theme-select">Выбор темы</label>
            <select name="theme" id="theme-select">
                <option value="classic" {{ $theme == 'classic' ? 'selected' : '' }}>Classic</option>
                <option value="cuba" {{ $theme == 'cuba' ? 'selected' : '' }}>Cuba</option>
            </select>
            <button type="submit" class="btn btn-theme">Сохранить</button>
        </form>
    </div>
@endsection