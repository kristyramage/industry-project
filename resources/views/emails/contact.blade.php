<p>
  Hi {{ $name }}. Thanks for Contacting us.
</p>
	
													
<p>
  Here are the details which we have recieved:
</p>
<ul>
  <li>Name: <strong>{{ $name }}</strong></li>
  <li>Email: <strong>{{ $email }}</strong></li>
</ul>
<hr>
<p>
  @foreach ($messageLines as $messageLine)
    {{ $messageLine }}<br>
  @endforeach
</p>
<hr>


<p>We will get back to you as soon as possible to the email address given.</p>

<p>Have a good day</p>