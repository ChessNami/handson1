<form id="registrationForm" class="d-none" action="{{ route('join-now') }}" method="POST">
    @csrf

    <div>
        <label for="name">User Name:</label>
        <input type="text" id="user name" name="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
    </div>
    <div>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
    </div>
    

  
    <button type="submit">Register</button>
</form>
