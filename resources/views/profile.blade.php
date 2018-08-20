@extends('layouts.app') 
@section('content')
<div class="container bootstrap snippet">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-sm-10">
            <h1>{{ $user_data->name }}
                @if ($user_data->authenticated == 0)
                    <font class="text-muted small">(Unauthenticated)
                @elseif ($user_data->authenticated == 1)
                    <font class="text-info small">(Authenticating)
                @else
                    <font class="text-success small">(Authenticated)
                @endif
                </font>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
            <div class="text-center">
                <img src="{{ $profile->image_path }}" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block file-upload">
            </div>
        </div>
        <!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#home">Home</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#messages">Testimonials</a>
                </li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="{{ route('profile.store') }}" method="POST" id="profileForm">
                        {{ csrf_field() }}
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h4>First name</h4>
                                </label>
                                <input type="text" class="form-control" value="{{ $profile->first_name }}" name="first_name" id="first_name" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name">
                                    <h4>Last name</h4>
                                </label>
                                <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $profile->last_name }}" title="enter your last name if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone">
                                    <h4>Phone</h4>
                                </label>
                                <input type="text" class="form-control" name="phone_number" id="phone" value="{{ $profile->phone_number }}" title="enter your phone number if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ $user_data->email }}" title="enter your email.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit">Save</button>
                                <button class="btn btn-lg" type="reset">Reset</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>
                <!--/tab-pane-->
                <div class="tab-pane" id="messages">

                    <h2></h2>

                    <hr>
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Location</h4>
                                </label>
                                <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password">
                                    <h4>Password</h4>
                                </label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password2">
                                    <h4>Verify</h4>
                                </label>
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit">
                                    <i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset">
                                    <i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/tab-pane-->
            </div>
            <!--/tab-content-->
        </div>
        <!--/col-9-->
    </div>
    <!--/row-->
</div>
@endsection