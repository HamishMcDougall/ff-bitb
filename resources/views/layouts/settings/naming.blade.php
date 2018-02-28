@extends('layouts.app')

@section('content')

<div class="container">

  <!-- take it out of here and create a partal over the top https://www.w3schools.com/howto/howto_js_snackbar.asp -->

  @if(Session::has('flash_message'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {!! session('flash_message') !!}
  </div>

  @endif

<div class="row" style="padding-bottom:20px;">
  <div class="col-xs-12">
    <div class="wizard">
      <a class="current"><span class="badge">1.</span> Name your fact find</a>
      <a href="/settings/layout"><span class="badge">2.</span> Set up your fact find questions</a>
      <a href="/settings/design"><span class="badge">3.</span> Add your logo and design</a>
      <a href="/settings/preview"><span class="badge badge-inverse">4.</span> Preview </a>
  </div>
  </div>
</div>

<div class="container container-small">
    <h1 class="text-center push-ends">1. Name your Fact Find</h1>

    <div class="panel panel-default">
        <div class="panel-heading">Type a name</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="" placeholder="My first fact find">
            </div>
        </div>
    </div>

    <a href="/settings/layout" class="btn btn-primary pull-right">Save and Continue </a>
</div>

<!-- end container -->
</div>

@endsection

@push('javascript')





@endpush
