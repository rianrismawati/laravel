<h2>Latihan Soal</h2>

<form method="post" action="/latihan">
Apa hobby anda?<br>
@if ($req=='$request->renang')
<input type="radio" value="renang" name="$request->renang">Berenang<br>
@elseif (checked=='$request->basket')
<input type="radio" value="basket" name="$request->basket">Bola Basket<br>
@elseif ($req=='$request->futsal')
<input type="radio" value="futsal" name="$request->futsal">Futsal<br>
@elseif($req=='$request->game')
<input type="radio" value="game" name="$request->game">Maen Game<br>
@endif
<input type="submit" name="submit" value="Cek">

<p>{{$request}}</p>
</form>
