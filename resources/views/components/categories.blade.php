<!-- section des categories des produits-->
<section class="container mx-auto px-4 py-16">
<h2 class="text-4xl font-bold text-center mb-12 text-gray-800">Nos Produits</h2>
<!-- categories -->
<div class="flex flex-wrap justify-center gap-4 mb-12">
    <a href="#" class="px-6 py-2 bg-gray-200 text-white rounded-full font-semibold hover:bg-blue-700 transition">
                Tous
    </a>
   
    @foreach ($categories as $categorie)
         <a href="#" class="px-6 py-2 bg-purple-300 text-white rounded-full font-semibold hover:bg-purple-200 transition">
                {{ $categorie->name }}
    </a>

    @endforeach
</div>
</section>
