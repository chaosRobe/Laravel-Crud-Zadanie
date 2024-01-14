<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Person</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('person.store')}}" >
        @csrf
        @method('post')
        <div>
            <label >Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label >Surname</label>
            <input type="text" name="surname" placeholder="surname">
        </div>
        <div>
            <label >Phone</label>
            <input type="tel" name="phone" placeholder="phone">
        </div>
        <div>
            <label >Address</label>
            <input type="text" name="address" placeholder="address">
        </div>
        <div>
            <label >Country</label>
            <input type="text" name="country" placeholder="country">
        </div>
        <div>
            <input type="submit" value="Save a New Person" >
        </div>
    </form>
</body>
</html>