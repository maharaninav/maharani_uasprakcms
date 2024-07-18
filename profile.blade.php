@extends('layouts.public.app')

@section('content')
<!-- Profil Section-->
 <br><br>
<section class="">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0" style="color: #ffffff; background-color: #343a40; padding: 40px; border-radius: 10px;">
                <span class="text-gradient d-inline">My Profile</span>
            </h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                @if($profile)
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="p-5 text-center" style="flex-grow: 1; text-align: center;">
                                <div class="p-5" style="flex-grow: 1;">
                                    <h2 class="fw-bolder" style="text-align: center;">Education</h2>
                                    <p>{{ $profile->education }}</p>
                                </div>
                                <div style="flex-shrink: 0;">
                                <img class="img-fluid" src="{{ Storage::url($profile->image) }}" alt="Education Image" style="max-width: 100%; height: auto; border-top-right-radius: 0.25rem; border-bottom-right-radius: 0.25rem;" />

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="p-5 text-center" style="flex-grow: 1; text-align: center;">
                                <div class="p-5" style="flex-grow: 1;">
                                    <h2 class="fw-bolder" style="text-align: center;">About My Passion</h2>
                                    <p>{{ $profile->passion }}</p>
                                </div>
                                <div style="flex-shrink: 0;">
                                <img class="img-fluid" src="{{ Storage::url($profile->image2) }}" alt="Education Image" style="max-width: 100%; height: auto; border-top-right-radius: 0.25rem; border-bottom-right-radius: 0.25rem;" />
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <h1>No profile data available.</h1>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Call to action section-->
<section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a>
        </div>
    </div>
</section>
@endsection
