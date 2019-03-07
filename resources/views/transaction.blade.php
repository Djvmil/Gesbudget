
@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Transaction</div>

                    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                       <div class="contact-form wow fadeInUp" data-wow-delay="0.7s">
                          <form method="post" action="{{ url('/create') }}">
                             @csrf
                             <div class="form-group">
                                 <label for="contrat">Montant:</label>
                                 <input type="text" class="form-control" name="montant"/>
                             </div>

                             <div class="form-group">
                                 <label for="date">Date:</label>
                                 <input type="date" class="form-control" name="date"/>
                             </div>

                             <div class="form-group">
                                 <label for="type">Type:</label>
                                 <select name="type"  class="form-control" id="compteur_id">
                                   <option value="Revenu"> Revenu </option>
                                   <option value="Depense"> Depense </option>
                                 </select>
                             </div>

                             <div class="form-group">
                                 <label for="cumulnouv">Description:</label>
                                 <textarea name="description"></textarea>
                             </div>
                             <button type="submit" class="btn btn-primary-outline">Valider</button>
                          </form>
                        </div>
        </div>
</div>
@endsection
