@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Votre Budget est: {{Auth::user()->budget }} </div>



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                   <button type="button" class="btn btn-primary">
                     <a class="btn btn-primary" href="{{ url('/transaction') }}">
                       Faire une transaction
                     </a>
                   </button>

                </div>
            </div>
<p>
            <div class="col-sm-12">
              @if(session()->get('errors'))
                <div class="alert alert-danger">
                  {{ session()->get('errors') }}
                </div>
              @elseif(session()->get('success'))
                <div class="alert alert-success">
                  {{ session()->get('success') }}
                </div>
              @endif

          </div>

  </p>
        </div>

    </div>
</div>
@endsection
