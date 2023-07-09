<div class="form-container">
  <h1>Crea tu cuenta</h1>
  <form action="/create" method="POST" class="form">
    <div class="field">
      <label for="name">Nombre(s)</label>
      <input type="text" id="name" name="name" value="<?php echo sanitize($user->name) ?>" placeholder="Nombre(s)">
      <?php if (array_key_exists('errors', $alerts)): ?>
        <?php if (array_key_exists('name', $alerts['errors'])): ?>
          <p class="alert error"><?php echo $alerts['errors']['name']; ?></p>
        <?php endif; ?>
      <?php endif; ?>
    </div>
    <div class="field">
      <label for="lastname">Apellidos</label>
      <input type="text" id="lastname" name="lastname" value="<?php echo sanitize($user->lastname) ?>" placeholder="Apellidos">
      <?php if (array_key_exists('errors', $alerts)): ?>
        <?php if (array_key_exists('lastname', $alerts['errors'])): ?>
          <p class="alert error"><?php echo $alerts['errors']['lastname']; ?></p>
        <?php endif; ?>
      <?php endif; ?>
    </div>
    <div class="field">
      <label for="cellphone">Telefono</label>
      <input type="tel" id="cellphone" name="cellphone" value="<?php echo sanitize($user->cellphone) ?>" placeholder="Telefono">
      <?php if (array_key_exists('errors', $alerts)): ?>
        <?php if (array_key_exists('cellphone', $alerts['errors'])): ?>
          <p class="alert error"><?php echo $alerts['errors']['cellphone']; ?></p>
        <?php endif; ?>
      <?php endif; ?>
    </div>
    <div class="field">
      <label for="email">Correo Electronico</label>
      <input type="email" id="email" name="email" value="<?php echo sanitize($user->email) ?>" placeholder="micorreo@dominio.com">
      <?php if (array_key_exists('errors', $alerts)): ?>
        <?php if (array_key_exists('email', $alerts['errors'])): ?>
          <p class="alert error"><?php echo $alerts['errors']['email']; ?></p>
        <?php endif; ?>
      <?php endif; ?>
    </div>
    <div class="field">
      <label for="email">Contrasena</label>
      <input type="password" id="password" name="password" placeholder="Contrasena">
      <?php if (array_key_exists('errors', $alerts)): ?>
        <?php if (array_key_exists('password', $alerts['errors'])): ?>
          <p class="alert error"><?php echo $alerts['errors']['password']; ?></p>
        <?php endif; ?>
      <?php endif; ?>
    </div>
    <input type="submit" value="Crear cuenta" class="button">
  </form>
  <div class="account-options">
    <p>Ya tienes una cuenta? <a href="/"> Inicia sesion</a>.</p>
  </div>
</div>