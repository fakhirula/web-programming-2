@if (session('success'))
    <h2>
        {{ session('success') }}
    </h2>
@endif
<p>Belum punya akun? <a href="/register">Register</a></p>
<form method="POST" action="/login">
    @csrf

    <div>
        <label for="username">Username</label>
        <input id="username" type="username" name="username" value="{{ old('username') }}" required autofocus>
        @error('username')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
<p>Kembali ke <a href="/">Halaman Utama</a></p>