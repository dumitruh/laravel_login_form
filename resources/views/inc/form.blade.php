
<body class="text-center" data-gr-c-s-loaded="true">
<form class="form-signin" action="welcome" method="POST">
      @csrf
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

  <label for="InputEmail" class="sr-only ">Email address</label>
  <input type="text" id="Email" name="email" class="form-control" placeholder="Email address" autofocus="">

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password"  name="password" id="inputPassword" class="form-control" placeholder="Password">
  <br> 
  <button class="btn btn-lg btn-primary btn-block " type="submit">Sign in</button>
 
</form>
</body>