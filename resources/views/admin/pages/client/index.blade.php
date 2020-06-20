@extends('admin/layouts/app')

@section('title','Dashboard')

@section('breadcrumb')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cliente</li>
    </ol>
  </nav>
@endsection

@section('content')
<div class="min-vh-75">
  <table class="table table-hover">
    <thead class="thead-blue">
      <tr>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">CPF</th>
        <th scope="col">CRIADO EM</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($clients as $client)
        <tr>
          <td>{{ $client['name'] }}</td>
          <td>{{ $client['email'] }}</td>
          <td>{{ $client['cpf'] }}</td>
          <td>{{ date('d/m/Y', strtotime($client['created_at'])) }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@if ($clients->hasPages())
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center align-content-end">
      @if (!$clients->onFirstPage())
        <li class="page-item ">
          <a class="page-link" href="{{ $clients->previousPageUrl() }}" >Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="{{ $clients->previousPageUrl() }}">{{ $clients->currentPage()-1 }}</a></li>
      @else
        <li class="page-item disabled">
          <a class="page-link" href="{{ $clients->previousPageUrl() }}" >Previous</a>
        </li>
      @endif
      <li class="page-item active"><a class="page-link" href="#">{{ $clients->currentPage()  }}</a></li>
      @if ($clients->hasMorePages())
        <li class="page-item"><a class="page-link" href="{{ $clients->nextPageUrl() }}">{{ $clients->currentPage()+1 }}</a></li>
        <li class="page-item">
          <a class="page-link" href="{{ $clients->nextPageUrl() }}">Next</a>
        </li>
      @else
      <li class="page-item disabled">
        <a class="page-link" href="{{ $clients->nextPageUrl() }}">Next</a>
      </li>
      @endif
    </ul>
  </nav>
@endif

@endsection
