@extends('template')

@section('titre')
    Les articles
@endsection
<body>
    @section('contenu')

        <p>C'est l'article n° <?php echo $numero ?>  </p>
        <p>C'est l'article n° {{ $numero }} fait apres la modification de la vue avec l'ajout du template blade </p>

    @endsection
</body>
</html>