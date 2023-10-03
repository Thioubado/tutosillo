@extends('template')

@section('titre')
    Les factures
@endsection
<body>
    @section('contenu')
    <p>C'est la facture n° {{ $numero }}</p>
    @endsection
</body>
</html>