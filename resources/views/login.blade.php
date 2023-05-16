<head>
   <title>login</title>
   <link href="/css/app.css" rel="stylesheet" type="text/css" >
</head>
<body>
   
<div class="form-container">
   <form action="{{ route('login-user') }}" method="POST">
      @if(Session::has('sukses')):
      <div class="alert alert success">{{ Session::get('sukses') }}</div>
      @endif
      @if(Session::has('gagal')):
      <div class="alert alert success">{{ Session::get('gagal') }}</div>
      @endif
      @csrf
      <h3>Sign in</h3>
      <input type="email" name="email" required placeholder="Masukkan email">
      <input type="password" name="password" required placeholder="Masukkan password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <!-- <p>Daftar Akun ke Nomor Berikut <a href="https://wa.me/+6283152582912">083152582912</a></p> -->
   </form>
</div>

</body>
</html>
