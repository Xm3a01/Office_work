<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Country</h1>
<form action="{{route('one.store')}}" method="POST">
    @csrf
   <input type="text" name="name" id="">
   <input type="text" name="ar_name" id="">
   <button type="submit">Ok</button>
</form>
{{-- <h1>City</h1>
<form action="{{route('two.store')}}" method="POST">
   <input type="text" name="name" id="">
   <select name="country" id="">
       <option value="{{$country ?? ''->id}}">{{$country ?? ''->name}}</option>
   </select>
   <button type="submit">Ok</button>
</form> --}}
{{-- <form action="{{route('tests.store')}}" method="POST">

</form> --}}
</body>
</html>