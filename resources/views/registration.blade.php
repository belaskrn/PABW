<head>
    <title>register</title>
    <link href="/css/app.css" rel="stylesheet" type="text/css" >
 </head>
 <body>
    
 <div class="form-container">
 
    <form action="{{ route('register-user') }}" method="POST">
        @if(Session::has('sukses')):
        <div class="alert alert success">{{ Session::get('sukses') }}</div>
        @endif
        @if(Session::has('gagal')):
        <div class="alert alert success">{{ Session::get('gagal') }}</div>
        @endif
        @csrf
       <h3>Sign in</h3>
       <input type="name" name="name" required placeholder="Masukkan name">
       <input type="username" name="username" required placeholder="Masukkan username">
       <input type="email" name="email" required placeholder="Masukkan email">
       <input type="password" name="password" required placeholder="Masukkan password">
       <input type="submit" name="submit" value="login now" class="form-btn">
       <p>tidak punya akun? <a href="register_form.php">sign up</a></p>
    </form>
 
 </div>
 
 </body>
 </html>