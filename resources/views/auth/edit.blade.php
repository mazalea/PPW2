@extends('auth.layouts')

@section('content')

<form method="POST" action="{{ route('update', $users) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT') 

    <div class="mb-3 row">
        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $users->name }}">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>

    <div class="mb-3 row">
        <label for="photo" class="col-md-4 col-form-label text-md-end text-start">Photo</label>
        <div class="col-md-6">
            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
            @if ($errors->has('photo'))
            <span class="text-danger">{{ $errors->first('photo') }}</span>
            @endif
        </div>
        <img src="{{asset('storage/photos/'.$users->photo)}}" width="100px">
    </div>

    <div class="mb-3 row">
            <label for="photoSize" class="col-md-4 col-form-label text-md-end text-start">Photo Size</label>
            <div class="col-md-6">
                <select class="form-select" id="photoSize" name="photoSize">
                    <option value="thumbnail" {{ $users->photo_size === 'thumbnail' ? 'selected' : '' }}>Thumbnail</option>
                    <option value="square" {{ $users->photo_size === 'square' ? 'selected' : '' }}>Square</option>
                </select>
            </div>
        </div>

    <button type="submit">Simpan Perubahan</button>
    <a href="{{ route('dashboard')}}">Back to dashboard</a>
</form>

@endsection