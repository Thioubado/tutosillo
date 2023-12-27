@extends('template')

@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4>Contactez moi</h4>
            <div class="card-body">
                <form action="{{ route('contacts.create') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}" >
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message"  id="message" cols="10" rows="10" placeholder="Votre message">
                            {{ old('message') }}
                        </textarea>
                        @error('message')
                            {{ $message }}
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>
            </div>
        </div>
    </div>
@endsection