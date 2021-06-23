@extends('layout')

@section('content')

    <div class="row">
        <h1 class="text-center">Créer un rôle</h1>
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="form-floating mb-3 col">
                <input type="text" class="form-control" name="name" placeholder="Doe" required pattern="[A-Za-z-]+">
                <label for="floatingInput">Nom *</label>
            </div>
            <button class="btn btn-primary" type="submit">Ajouter</button>
        </form>
    </div>


@endsection