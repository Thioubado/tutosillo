@extends('lessonfilms.template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'un film</p>
        </header>


        

        <div class="card-content">
            <div class="content">
                <form action="{{ route('films.store') }}" method="POST">
                    @csrf
                    <div class="field is-grouped is-horizontal">
                        <label class="label">Catégories</label>

                        <div class="select is-multiple">
                            <select name="cats[]" multiple>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ in_array($category->id, old('cats') ?: []) ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <label class="label">Acteurs</label>
                        <div class="select is-multiple">
                            <select name="acts[]" multiple>
                                @foreach($actors as $actor)
                                    <option value="{{ $actor->id }}" {{ in_array($actor->id, old('acts') ?: []) ? 'selected' : '' }}>{{ $actor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="field">
                            <label class="label">Titre</label>
                            <div class="control">
                                <input class="input @error('title') is-danger @enderror" type="text" name="title" value="{{ old('title') }}" placeholder="Titre du film">
                            </div>
                            @error('title')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label class="label">Année de diffusion</label>
                            <div class="control">
                                <input class="input"  type="number" name="year" value="{{ old('year') }}" min="1950" max="{{ date('Y') }}">
                            </div>
                            @error('year')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label class="label">Description</label>
                            <div class="control">
                                <textarea class="textarea" name="description" placeholder="Description du film">{{ old('description') }}</textarea>
                            </div>
                            @error('description')
                                <p class="help is-danger">{{ $message }}</p>
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