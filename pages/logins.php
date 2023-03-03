<div class="register">
  <div class="modal" id="modal--register">
    <div class="modal-backdrop"></div>

    <div class="modal-body">

      <button class="button button--close" id="button--closeReg">Close
      </button>

      <h2>Glena</h2>
      <p>Register</p>

      <form action="index.php" method="post" autocomplete>

        <p>
          <label for="fname">
            first name
          </label>
          <input type="text" name="fname" required>
        </p>

        <p>
          <label for="lname">
            last name
          </label>
          <input type="text" name="lname" required>
        </p>

        <p>
          <label for="uname">
            user name
          </label>
          <input type="text" name="uname" required>
        </p>

        <p>
          <label for="email">
            email
          </label>
          <input type="email" name="email" required>
        </p>

        <p>
          <label for="password">
            password
          </label>
          <input type="password" name="password" required>
        </p>

        <p>
          <label for="re-password">
            confirm password
          </label>
          <input type="password" name="re-password" required>
        </p>

        <p>
          <button class="button button--register button--spinner" id="button--spinreg" name="submit">
            register
          </button>
        </p>
      </form>

    </div>
  </div>
</div>


<div class="modal modal--login" id="modal--login">
  <div class="modal-backdrop"></div>

  <div class="modal-body">
    <button class="button button--close" id="button--closeLog">
      close
    </button>

    <h2>glena</h2>
    <p>login</p>

    <form action="pages/index.php" method="post">

      <p>
        <label for="email">
          email
        </label>
        <input type="email" name="email" required>
      </p>

      <p>
        <label for="password">
          Password
        </label>
        <input type="password" name="password" required>
      </p>

      <p>
        <button class="button button--login button--spinner" id="button--spinlog" name="submit">
          login
        </button>
      </p>
    </form>
  </div>
</div>