Hi,
<br><br>
If you are receiving this e-mail, it's because all is OK with your SMTP Server. Settings used for the test:
<br><br>
<b>Host:</b> {{ $data['host'] }}<br>
<b>Port:</b> {{ $data['port'] }}<br>

@if($data['secured'])
<b>Encryption:</b> {{ $data['encryption'] }}<br>
@endif

@if($data['authentication'])
<b>Authentication:</b> Yes<br>
@endif

<br><br>
E-mail sent via <a href="http://kingofcode.com.br">King of Code's SMTP Tester</a>