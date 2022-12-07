
<form action = "?oldal=signin" method = "post" class=" border bg-light">
  <div class="ms-4">
      <fieldset>
        <legend>Bejlentkezés</legend>
        <br>
        <input type="text" name="felhasznalo" placeholder="felhasználó" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="belepes" value="Sign In">
        <br>&nbsp;
      </fieldset>
  </div>
</form>
    <h3 class="text-uppercase">Regisztrálja magát, ha még nem tag!</h2>
<form action = "?oldal=signup" method = "post" class="border bg-light">
    <div class="ms-4">
      <fieldset>
        <legend>Regisztráció</legend>
        <br>
        <input type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>
        <input type="text" name="utonev" placeholder="utónév" required><br><br>
        <input type="text" name="felhasznalo" placeholder="felhasználói név" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" required><br><br>
        <input type="submit" name="regisztracio" value="Sing Up">
        <br>&nbsp;
      </fieldset>
  </div>
</form>
