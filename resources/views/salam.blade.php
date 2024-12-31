<h3>Salam Alikum {{ $nom }}</h3>
@if(count($languages)>0)
<h4>Cours : </h4>
<ul>
    @foreach ($languages as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
@else
    Pass de cours pour l'instant.
@endif