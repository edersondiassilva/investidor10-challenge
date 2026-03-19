@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-3">Nova notícia</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('news.store') }}" method="POST">
                @csrf
                @include('news.form')

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('news.index') }}" class="btn btn-outline-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
