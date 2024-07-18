@extends('layouts.private.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Profile Data</div>

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

                    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="education" class="form-label">Education</label>
                            <input type="text" id="education" name="education" class="form-control" value="{{ old('education') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" id="image" name="image" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="passion" class="form-label">Passion</label>
                            <input type="text" id="passion" name="passion" class="form-control" value="{{ old('passion') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="image2" class="form-label">Image 2</label>
                            <input type="file" id="image2" name="image2" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
