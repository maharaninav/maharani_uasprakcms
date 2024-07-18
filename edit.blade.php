@extends('layouts.private.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Home</div>

                <div class="card-body">
                    <form action="{{ route('home.update', $home->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="about">About</label>
                            <textarea class="form-control" id="about" name="about" rows="3" required>{{ $home->about }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="expertise">Expertise</label>
                            <input type="text" class="form-control" id="expertise" name="expertise" value="{{ $home->expertise }}" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            @if($home->image)
                                <p>Current Image:</p>
                                <img src="{{ Storage::url($home->image) }}" alt="Current Image" style="max-width: 300px;">
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
