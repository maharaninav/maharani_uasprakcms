@extends('layouts.private.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Profile</div>
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-8">
                            <h4 class="card-title">Add Data</h4>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <a href="{{ route('profile.create') }}" class="btn" style="background-color: #0DCA37; color:white;">
                                <i class="fa fa-fw fa-plus"></i> Add
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Education</th>
                                    <th>Image</th>
                                    <th>Passion</th>
                                    <th>Image 2</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($profiles as $profile)
                                <tr>
                                    <td>{{ $profile->education }}</td>
                                    <td><img src="{{ Storage::url($profile->image) }}" alt="Image" style="width: 100px;"></td>
                                    <td>{{ $profile->passion }}</td>
                                    <td><img src="{{ Storage::url($profile->image2) }}" alt="Image 2" style="width: 100px;"></td>
                                    <td>
                                        <form action="{{ route('profile.destroy', $profile->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
