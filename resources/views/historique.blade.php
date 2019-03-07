@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Transaction</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-sm-12">
                      <h1 class="display-3"></h1>
                    <table class="table table-striped">
                      <thead>
                          <tr>
                            <td>Type</td>
                            <td>Date</td>
                            <td>Montant</td>
                            <td>Description</td>
                          </tr>
                            </thead>
                            <tbody>
                                @foreach($trans as $trans)
                                <tr>

                                    <td>{{$trans->type}}</td>
                                    <td>{{$trans->date}}</td>
                                    <td>{{$trans->montant}}</td>
                                    <td>{{$trans->description}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                          <div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
