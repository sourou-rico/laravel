<form action="" method="">
  @csrf

  <h2>Log In to Your Account</h2>

  <label for="email">Email:</label>
  <input 
    type="email"
    name="email"
    required
    value="{{ old('email') }}"
  >

  <label for="password">Password:</label>
  <input 
    type="password"
    name="password"
    required
  >

  <button type="submit" class="btn mt-4">Login</button>

  <!-- validation errors -->
  
</form>