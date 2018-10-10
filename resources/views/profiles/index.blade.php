@extends('layouts.app')
@section('content')
<div class="container">
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
  <div class="d-flex flex-row">
    <div class="p-0" style="width: 200px; height: 200px;">
      <div class="img-preview" style="width: 200px; height: 200px;overflow: hidden;float: left"></div>
      @if ($user_data->role_id == 2 or request()->route()->parameters['profile'] == Auth::User()->id)
      <button type="button" class="btn alert alert-dark w-100 p-0 m-0 text-center" style="display: block;" data-toggle="popover">Edit</button>
      @endif
    </div>
    <div class="my-popover-content">
      @include('profiles.avatar')
    </div>
    <form action="{{ route('profiles.update', $user_data->id) }}" enctype="multipart/form-data" method="POST">
      @method('PUT')
      @csrf
      <div class="px-3">
        <div class="form-group">
          <div class="col-xs-6">
            <label for="first_name">
              <h4>First name</h4>
            </label>
            <input type="text" class="form-control" value="{{ $profile->first_name }}"
            name="first_name" id="first_name" title="enter your first name if any.">
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
        @if ($user_data->role_id == 2 or request()->route()->parameters['profile'] == Auth::User()->id)
        @include('profiles.edit')
        @endif
      </div>
    </form>
    <!--/col-9-->
  </div>
  <!--/row-->
</div>
<script type="text/javascript">
var popoverOptions = {
//content  : $('.my-popover-content').html(),
html     : true,
placement: 'right',
title    : 'Edit Profile Picture<a id="popover-close" class="close fas fa-times"></a>',
template :   '<div class="popover mw-100" style="width:400px;">'
  + '  <div class="arrow"></div>'
  + '  <h3 class="popover-header font-weight-bold"></h3>'
  + '  <div class="popover-body px-5 py-3"></div>'
+ '</div>',
};
$('[data-toggle="popover"]').popover(popoverOptions);
function showItem(item_id) {
  $("#"+item_id).show();
};
function hideItem(item_id) {
$("#"+item_id).hide();
};
</script>
@endsection