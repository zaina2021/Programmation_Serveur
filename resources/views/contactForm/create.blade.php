@extends('layouts/main')
@section('content')
<h1>Contact</h1>
<p>welcome to contact page</p>
<h1>Please enter your contact details</h1>
<form method="POST" action="/ContactForm">
@csrf
<div>
<input type="text" name="name" placeholder="Your name">
</div>
<div>
<input type="email"name="email" placeholder="Your email adress">
</div>
<div>
<input type="text" name="messages" placeholder="Your Message">
</div>
<div>
<button type="submit">Create Contact</button>
</div>
</form>
@endsection
 