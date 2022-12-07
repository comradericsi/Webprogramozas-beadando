<script type="text/javascript" src="logicals/check.js"></script>

<form action = "?oldal=data"  class=" border bg-light" onsubmit="return ellenoriz();" method = "post">
  <div class="ms-4">
      <fieldset>
        <legend>Email írás:</legend>
        <br>
		<label>Email cím:</label><br>
        <input type="email" id="email" name="email" placeholder="email" required><br><br>
		<label>Üzenet (kötelező): </label><br>
		<textarea id="szoveg" name="szoveg" cols="40" rows="10"></textarea><br> 
		<button onclick="ellenoriz();" type="button">Ellenőriz</button>
		<input id="kuld" type="submit" value="Küld">
        <br>&nbsp;
      </fieldset>
  </div>
</form>
