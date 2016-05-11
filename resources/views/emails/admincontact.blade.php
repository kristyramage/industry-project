<p>
  You have received a new message from your website contact form.
</p>
<p>
  Here are the details:
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