@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Edit Photo</div>
            <div class="card-body">

                <form method="POST" action="{{ route('gallery.update', ['gallery' => $gallery->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 

                    <div class="mb-3 row">
                        <label for="photo" class="col-md-4 col-form-label text-md-end text-start">Photo</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                            @if ($errors->has('photo'))
                            <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif
                        </div>
                    </div>

                    <img src="{{ asset('storage/posts_image/'.$gallery->picture) }}" width="150px" style="display: block; margin: 0 auto;">

                    <div class="mb-3 row">
                        <button type="submit" class="col-md-3 offset-md-5 btn btn-primary" >Simpan Perubahan</button>
                    </div> 

                    <div class="mb-3 row">
                        <a href="{{ route('dashboard')}}">Back to dashboard</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection