<p>
	Hi {{ $name }}. Thanks for Contacting us.
</p>
														
<p>
  Here are the details which we have recieved:
</p>

  <p>Name: <strong>{{ $name }}</strong></p>
  <p>Email: <strong>{{ $email }}</strong></p>
  
<hr>
<p>
  @foreach ($messageLines as $messageLine)
    {{ $messageLine }}<br>
  @endforeach
</p>
<hr>


<p>We will get back to you as soon as possible to the email address given.</p>

<p>Have a good day</p>
<p>Captured Write xx</p>