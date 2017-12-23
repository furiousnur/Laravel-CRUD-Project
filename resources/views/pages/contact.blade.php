@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>

<head>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


}
</style>
</head>


<h4 style="text-align: center">Email</h4>
<pre style="text-align: center;">
seedslabAToutlookDOTcom
sagarDOTwhuAToutlookDOTcom</pre>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">City</label>
    <select id="country" name="country">
      <option value="australia">Dhaka</option>
      <option value="canada">Rajshahi</option>
      <option value="usa">Chittagang</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>



        
@endsection