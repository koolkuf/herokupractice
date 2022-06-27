<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</title>
</head>
<body>


<form action=" {{route('addContact')}} " method="post">
@csrf
<input type="text" name="name" id="" placeholder="name" required>
<input type="text" name="number" id="" placeholder="phone" required>
<input type="text" name="address" id="" placeholder="address" required>
<button type="submit">Submit</button>

<p>Already registered phone? <a href="{{URL::to('/user/my-contact')}} ">View Phone</a> </p>


</form>

<thead>
<th>Name</th>
<th>Phone</th>
<th> colspan= "2" Address</th>
</thead>

@if (isset($contact))
{
    @foreach ($contacts as  $contact)
    <td> {{$contact->name}} </td>
    <td> {{$contact->phone}} </td>
    <td> {{$contact->address}} </td>
    <td> <form action="{{route ('contact.edit')}} ">
    @csrf
    <button>Edit</button>
    </form> </td>
    <td> <form action="{{route ('contact.delete')}} ">
    @csrf
    <button>Delete</button>
    </form> </td>

    @endforeach
}

 @else
 <td>
     <p>Your Contacts will appear here when added</p>
 </td>
@endif

</body>
</html>
