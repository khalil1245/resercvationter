<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Votre code HTML ici -->
</head>

<body>

    <form action="{{ route('Reservation') }}" method="post">
        @csrf
        <label for="zone">Zone </label>
        <select name="zone" id="zone">
            <option value="">Sélectionner une zone</option>
            @foreach($zones as $zone)
            <option value="{{$zone->id}}">{{ $zone->name }}</option>
            @endforeach
        </select>

        <label for="classe->id">Classe</label>
        <select name="classe" id="classe">
            <option value="">Sélectionner une classe</option>
            @foreach($classes as $classe)
            <option value="{{$classe->id}}">{{ $classe->name }}</option>
            @endforeach
        </select>

        <label for="horaire">Horaire</label>
        <select name="horaire" id="horaire">
            <option value="">Sélectionner un horaire</option>
            @foreach($horaires as $horaire)
            <option value="{{$horaire->id}}">{{ $horaire->depart }}</option>
            @endforeach
        </select>
     <label for="Date_Reservation"></label>
     

        <button type="submit">Réserver</button>
        </form>
</body>

</html>