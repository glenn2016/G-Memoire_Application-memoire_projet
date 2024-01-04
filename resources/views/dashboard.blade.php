
@if(auth()->check() && auth()->user()->profil == 1)

@include('admin.index')

@endif

@if(auth()->check() && auth()->user()->profil == 3 && auth()->user()->etat_compte == 1)

@include('restaurant.index')

@endif

@if(auth()->check() && auth()->user()->profil == 3 && auth()->user()->etat_compte == 2)

@include('welcome.attente')
@endif