<!doctype html>

<html lang="en">

 <head>

  <meta charset="UTF-8">

  <title>3arabeyety Login page</title>

  <link rel="stylesheet" href="css/loginstyle.css">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

 </head>

 <body> <!-- partial:index.partial.html -->

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>

   <div class="signin">

    <div class="content">

     <h2>Sign In</h2>
     @if (session('success'))
     {{session('success')}}
     @endif

     <div class="form">
    <form  id="login-form" method="POST">
        @csrf
      <div class="inputBox">

       <input type="text" id="email" name="email" placeholder="Email" required> <i>Email</i>

      </div>
<br>
      <div class="inputBox">

       <input type="password" id="password" name="password" placeholder="Password" required> <i>Password</i>

      </div>

      <div class="links"> <a href="#">Forgot Password</a> <a href="signup">Signup</a>

      </div>

      <div class="inputBox">

       <input type="submit" value="Login">
    </form>
      </div>

     </div>

    </div>

   </div>

  </section> <!-- partial -->

 </body>

 <script>

document.getElementById('login-form').addEventListener('submit', async function(e) {
    e.preventDefault();

    let formData = new FormData(this);
    let data = {
        email: formData.get('email'),
        password: formData.get('password')
    };

    try {
        const response = await fetch('api/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();
        if (response.ok) {
            // Store the token in localStorage
            localStorage.setItem('access_token', result.access_token);
            localStorage.setItem('id', result.id);
            localStorage.setItem('name', result.name);
            // Redirect to dashboard or any protected route
             //window.location.href = 'home';
             window.location.assign('home');
           // window.location.href = 'dashboard';
        } else {
            alert(result.error);
        }
    } catch (error) {
        console.error('Login error', error);
    }
});

</script>
</html>
