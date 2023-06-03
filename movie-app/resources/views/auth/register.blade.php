<p>Sudah punya akun? <a href="/login">Login</a></p>
<form method="POST" action="/register">
    @csrf

    <div>
        <label for="nama">Nama</label>
        <input id="nama" type="text" name="nama" value="{{ old('nama') }}" required autofocus>
        @error('nama')
            <span>{{ $message }}</span>
        @enderror
    </div>
    
    <div>
        <label for="username">Username</label>
        <input id="username" type="text" name="username" required>
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
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="role">Role</label>
        <select name="role" id="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
<p>Kembali ke <a href="/">Halaman Utama</a></p>
