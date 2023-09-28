@extends('')

@section('content')

<form action="{{ route('', $edit->$id)}}" method="POST">
    @csrf 

</form>

@endsection