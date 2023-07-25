@extends('template')

@section('content')

    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Instructions</h4>
      <p>Introduce the word and press save to store the new word</p>
      <p class="mb-0">Thanks.</p>
    </div>
    <form action="" method="POST">

        @csrf

        <div class="form-group">
            <label for="">Word</label>
            <input type="text" class="form-control" name="word" id="" aria-describedby="helpId" placeholder="">
        </div>
        
        <button class="btn btn-success">Save</button>
    </form>

@endsection