<x-app-layout>

    <div class="row">
        <div class="col-xl-4">
            <div class="card profile">
                <div class="card-body">
                    <form action="{{ route('profile.update_avatar', ['userId'=>$user->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="text-center">
                       <img src="{{ asset('storage/' . $user->profile->avatar) }}"  class="rounded-circle img-thumbnail avatar-xl" alt="Avatar" />

                        <div class="online-circle">
                            <i class="fa fa-circle text-success"></i>
                        </div>
                        <h4 class="mt-3">{{$user->name}}</h4>
                        <p class="text-muted font-size-13">@if ($user->profile)
                        {{$user->profile->title}}
                        @else
                         No Title
                        @endif</p>
                        <input type="file" name="avatar" class="form-control px-5"/>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-rounded btn-primary">Update Profile Pic</button>
                        </div>

                    </form>


                    </div>
                </div>
            </div>
            <!-- end card -->





            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Contact</h5>
                    <ul class="list-unstyled mb-0">
                        <li class=""><i class="mdi mdi-phone me-2 text-success font-size-18"></i> <b>
                                phone </b> : {{($user->profile)? $user->profile->phone : '' }}</li>
                        <li class="mt-2"><i
                                class="mdi mdi-email-outline text-success font-size-18 mt-2 me-2"></i>
                            <b> Email </b> : {{ $user->email  }}
                        </li>

                    </ul>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-8">

            <div class="">
                <div class="custom-tab tab-profile">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active pb-3 pt-0" data-bs-toggle="tab" href="#projects"
                                role="tab"><i class="fab fa-product-hunt me-2"></i>Profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pb-3 pt-0" data-bs-toggle="tab" href="#settings"
                                role="tab"><i class="fas fa-cog me-2"></i>Security</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content pt-4">
                        <div class="tab-pane active" id="projects" role="tabpanel">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            @include('profile.partials.update-profile-information-form')
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

                            </div>
                            <!-- end row -->

                        </div>
                         <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            @include('profile.partials.update-password-form')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
