@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>Edit {{ $comic->title }}</h1>

    @include('partials.form-delete', ['comic' => $comic])

    <form action="{{ route('comics.update', $comic) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
          value="{{ old('title', $comic->title) }}" placeholder="Add title">
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Image</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb"
          value="{{ old('thumb', $comic->thumb) }}"placeholder="Add image URL">
        @error('thumb')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control @error('series') is-invalid      @enderror" name="series"
          id="series" value="{{ old('series', $comic->series) }}"placeholder="Add series">
        @error('series')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>


      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
          value="{{ old('type', $comic->type) }}"placeholder="Add type">
        @error('series')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price"
          value="{{ old('price', $comic->price) }}"placeholder="Add price">
        @error('series')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Release date</label>
        <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
          id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" placeholder="Add date">
        @error('series')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
          rows="3">{{ old('description', $comic->description) }}</textarea>
        @error('series')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary mb-5">Confirm</button>

    </form>
  </div>
@endsection
