<div class="form-container">
  <h1>Crea tu cuenta</h1>
  <form action="/create" method="post" class="form">
    <div class="field">
      <label for="name">Nombre(s)</label>
      <input type="text" id="name" name="name" placeholder="Nombre(s)">
    </div>
    <div class="field">
      <label for="lastname">Apellidos</label>
      <input type="text" id="lastname" name="lastname" placeholder="Apellidos">
    </div>
    <div class="field">
      <label for="cellphone">Telefono</label>
      <input type="tel" id="cellphone" name="cellphone" placeholder="Telefono">
    </div>
    <div class="field">
      <label for="email">Correo Electronico</label>
      <input type="email" id="email" name="email" placeholder="micorreo@dominio.com">
    </div>
    <div class="field">
      <label for="email">Contrasena</label>
      <input type="password" id="password" name="password" placeholder="Contrasena">
    </div>
    <input type="submit" value="Crear cuenta" class="button">
  </form>
  <div class="account-options">
    <p>Ya tienes una cuenta? <a href="/"> Inicia sesion</a>.</p>
  </div>
</div>