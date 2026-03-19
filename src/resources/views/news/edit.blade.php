@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-3">Editar notícia</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('news.update', $news) }}" method="POST">
                @csrf
                @method('PUT')
                @include('news.form')

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    <a href="{{ route('news.index') }}" class="btn btn-outline-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
