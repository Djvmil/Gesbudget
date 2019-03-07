<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Transaction;
use App\User;

class TransactionController extends Controller
{
  public function index()
  {
    $trans = Transaction::all();

   return view('/historique', compact('trans'));
  }

  public function form()
  {
    return view('/transaction');
  }

  public function create()
  {
   if(request('type')=="Depense" && Auth::user()->budget < request('montant')){
      return redirect('/home')->with('errors', 'Transaction echouei, le mnt demander n\'est pas disponible!');
    }
    else if(request('type')=="Depense" && Auth::user()->budget > request('montant')){
        Transaction::create([
          'montant' => request('montant'),
          'type' => request('type'),
          'description' => request('description'),
          'date' => request('date'),
          'idUser' => Auth::user()->id,
        ]);
        $mnt = Auth::user()->budget - request('montant');

        User::find(Auth::user()->id)->update([
          'budget' => $mnt
        ]);
         return redirect('/home')->with('success', 'Transaction reussie!');
    }
    else{
      Transaction::create([
        'montant' => request('montant'),
        'type' => request('type'),
        'description' => request('description'),
        'date' => request('date'),
        'idUser' => Auth::user()->id,
      ]);
      $mnt = Auth::user()->budget + request('montant');

      User::find(Auth::user()->id)->update([
        'budget' => $mnt
      ]);
       return redirect('/home')->with('success', 'Transaction reussie!');
    }

  }
    //
}
