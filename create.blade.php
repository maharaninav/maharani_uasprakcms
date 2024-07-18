@extends('layouts.private.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Home</div>

                <div class="card-body">
                    <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="about">About</label>
                            <textarea class="form-control" id="about" name="about" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="expertise">Expertise</label>
                            <input type="text" class="form-control" id="expertise" name="expertise" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
