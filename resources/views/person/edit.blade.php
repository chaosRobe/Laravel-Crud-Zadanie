<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Edit Person</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('person.update',['person_id'=>$person_id])}}" >
        @csrf
        @method('put')
        <div>
            <div>Old Name: {{$person_id->name}}</div>
            <label >New Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <div>Old Surname: {{$person_id->surname}}</div>
            <label >New Surname</label>
            <input type="text" name="surname" placeholder="surname">
        </div>
        <div>
            <div>Old phone: {{$person_id->phone}}</div>
            <label >New Phone</label>
            <input type="tel" name="phone" placeholder="phone">
        </div>
        <div>
            <div>Old address: {{$person_id->address}}</div>
            <label >New Address</label>
            <input type="text" name="address" placeholder="address">
        </div>
        <div>
            <div>Old country: {{$person_id->country}}</div>
            <label >New Country</label>
            <input type="text" name="country" placeholder="country">
        </div>
        <div>
            <input type="submit" value="Save Changes" >
        </div>
    </form>
</body>
</html>