@extends('layout')

@section('content')


  <form method="POST" action='{{ route('activities.users.store', $activity->id) }}'>
    @csrf
    <label>Choisir un utilisateur</label>
    <select class="form-select" aria-label="Default select example" name="user">
      <option selected>Sélectionner un utilisateur...</option>
      @isset($users)
        @foreach ($users as $user)
          <option value="{{ $user->id }}">{{ $user->firstName }} {{  $user->lastName }}</option>
        @endforeach
      @endisset
    </select>
    <button type="submit" class="btn btn-primary">Assigner</button>
  </form>
@endsection