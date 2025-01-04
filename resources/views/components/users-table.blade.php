@props(['users'])
<div>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>métier</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['nom']}}</td>
            <td>{{$user['metier']}}</td>
        </tr>
            
        @endforeach
    </table>
</div>