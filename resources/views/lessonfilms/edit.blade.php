@extends('lessonfilms.template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un film</p>
        </header>
        <div class="field">
            <label class="label">Catégories</label>
            
        </div>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('films.update', $film->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field is-grouped is-horizontal">
                        <label class="label">Catégories</label>

                        <div class="select is-multiple">
                            <select name="cats[]" multiple>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ in_array($category->id, old('cats') ?: $film->categories->pluck('id')->all()) ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <label class="label field-label">Acteurs</label>
                        <div class="select is-multiple">
                            <select name="acts[]" multiple>
                                @foreach($actors as $actor)
                                    <option value="{{ $actor->id }}" {{ in_array($actor->id, old('acts') ?: $film->actors->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $actor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Titre</label>
                        <div class="control">
                            <input class="input @error('title') is-danger @enderror" type="text" name="title" value="{{ old('title', $film->title) }}" placeholder="Titre du film">
                        </div>
                        @error('title')
                            <p class="help is danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Année de diffusion</label>
                        <div class="control">
                            <input class="input" type="number" name="year" value="{{ old('year', $film->year) }}" min="1950" max="{{ date('Y') }}">
                        </div>
                        @error('year')
                            <p class="help is danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea name="description" class="textarea" placeholder="Description du film">{{ old('description', $film->description) }}</textarea>
                        </div>
                        @error('description')
                            <p class="help is-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection