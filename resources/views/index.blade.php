@extends('layouts.app')

@section('content')
<!-- grille de produit 
 mobile deux par rangées   
tablette deux par rangées
ordinateur  -->

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
   
    @forelse ($products as $product)
       <x-card-product :product="$product" />
    
    
    @empty
     Il n'y a pas de produit en base    
    @endforelse
    
</div>

@endsection

