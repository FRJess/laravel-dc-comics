@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>Add a new comic</h1>

    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title*</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
          value="{{ old('title') }}" placeholder="Add title">
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Image*</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb"
          value="{{ old('thumb') }}" placeholder="Add image URL">
        @error('thumb')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control @error('series') is-invalid      @enderror" name="series"
          id="series" value="{{ old('series') }}" placeholder="Add series">
        @error('series')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
          value="{{ old('type') }}" placeholder="Add type">
        @error('type')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price*</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price"
          value="{{ old('price') }}" placeholder="Add price">
        @error('price')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Release date*</label>
        <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
          id="sale_date" value="{{ old('sale_date') }}" placeholder="Add date">
        @error('sale_date')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
          value="{{ old('description') }}" rows="3"></textarea>
        @error('description')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary mb-5">Add</button>

    </form>
  </div>
@endsection
