<div class="form-container">
  <h1>Recuperar contrasena</h1>
  <p>Te enviaremos las instrucciones a seguir a tu correo electronico.</p>
  <form action="/forgot" method="post" class="form">
    <div class="field">
      <label for="email">Correo Eectronico</label>
      <input type="email" name="email" id="email" placeholder="micorreo@dominio.com" required>
    </div>
    <input type="submit" value="Enviar Instrucciones" class="button">
  </form>
  <div class="account-options">
    <p>Ya tienes una cuenta? <a href="/"> Inicia sesion</a>.</p>
    <p>No tienes una cuenta? <a href="/create"> Crea tu cuenta</a>.</p>
  </div>
</div>