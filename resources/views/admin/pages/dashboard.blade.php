@extends('admin/layouts/app')

@section('title','Dashboard')

@section('breadcrumb')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
@endsection

@section('content')
    
    
  <div class="welcome-msg pt-3 pb-4">
    <h1>Hi <span class="text-primary">John</span>, Welcome back</h1>
    <p>Very detailed & featured admin.</p>
  </div>


 


@endsection