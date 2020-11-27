@include('layouts.app')
@section('content')
<form action="" method="post">
@csrf
<div>
    <label for="">Name:</label>
    <input type="text" name="name" id="">
</div>
<div>
    <label for="">Emal Address:</label>
    <input type="text" name="name" id="">
</div>
<div>
    <label for="">Password:</label>
    <input type="text" name="name" id="">
</div>
</form>
@endsection