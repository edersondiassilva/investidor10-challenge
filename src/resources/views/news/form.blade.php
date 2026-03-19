<div class="mb-3">
    <label for="category_id" class="form-label">Categoria</label>
    <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
        <option value="">Selecione</option>
        @foreach($categories as $categoryOption)
            <option value="{{ $categoryOption->id }}" @selected(old('category_id', $news->category_id ?? '') == $categoryOption->id)>
                {{ $categoryOption->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="title" class="form-label">Título</label>
    <input
        type="text"
        name="title"
        id="title"
        class="form-control @error('title') is-invalid @enderror"
        value="{{ old('title', $news->title ?? '') }}"
    >
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="content" class="form-label">Conteúdo</label>
    <textarea
        name="content"
        id="content"
        rows="6"
        class="form-control @error('content') is-invalid @enderror"
    >{{ old('content', $news->content ?? '') }}</textarea>
    @error('content')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="published_at" class="form-label">Data de publicação</label>
    <input
        type="datetime-local"
        name="published_at"
        id="published_at"
        class="form-control @error('published_at') is-invalid @enderror"
        value="{{ old('published_at', isset($news->published_at) ? $news->published_at->format('Y-m-d\TH:i') : '') }}"
    >
    @error('published_at')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
