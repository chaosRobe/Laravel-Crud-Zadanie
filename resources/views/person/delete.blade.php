<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Delete Person</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('person.delete_conf', ['person_id'=>$person_id])}}" >
        @csrf
        @method('delete')
        <div>Name: {{$person_id->name}}</div>
        
        <div>Surname: {{$person_id->surname}}</div>
            
        <div>phone: {{$person_id->phone}}</div>
            
        <div>address: {{$person_id->address}}</div>
           
        <div>country: {{$person_id->country}}</div>
        <input type="submit" value="Delete Person" >
        </div>
    </form>
</body>
</html>