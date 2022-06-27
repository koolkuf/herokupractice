<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</title>
</head>
<body>


<form action=" {{route('addPhone')}} " method="post">
@csrf
<input type="text" name="number" id="" placeholder="number">
<button type="submit">Submit</button>

<p>Already registered phone? <a href="{{URL::to('/user/my-phone')}} ">View Phone</a> </p>


</form>

</body>
</html>
