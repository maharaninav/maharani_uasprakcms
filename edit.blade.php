@extends('layouts.private.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Profile Data</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="education" class="form-label">Education</label>
                            <input type="text" id="education" name="education" class="form-control" value="{{ old('education', $profile->education) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" id="image" name="image" class="form-control">
                            @if ($profile->image)
                                <img src="{{ Storage::url($profile->image) }}" alt="Image" style="width: 100px;">
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="passion" class="form-label">Passion</label>
                            <input type="text" id="passion" name="passion" class="form-control" value="{{ old('passion', $profile->passion) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="image2" class="form-label">Image 2</label>
                            <input type="file" id="image2" name="image2" class="form-control">
                            @if ($profile->image2)
                                <img src="{{ Storage::url($profile->image2) }}" alt="Image 2" style="width: 100px;">
                            @endif
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
