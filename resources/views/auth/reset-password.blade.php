<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        body { font-family: sans-serif; background-color: #f9fafb; color: #374151; padding: 2rem; }
        label { display: block; font-weight: 500; margin-bottom: 0.25rem; }
        input { width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #d1d5db; border-radius: 0.375rem; }
        .mt-4 { margin-top: 1rem; }
        .mt-2 { margin-top: 0.5rem; color: #dc2626; font-size: 0.875rem; }
        button { padding: 0.5rem 1rem; background-color: #4f46e5; color: white; border: none; border-radius: 0.375rem; cursor: pointer; }
        button:hover { background-color: #4338ca; }
        .flex { display: flex; }
        .items-center { align-items: center; }
        .justify-end { justify-content: flex-end; }
    </style>
</head>
<body>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
            <!-- Display validation errors here -->
            <!-- Example: <div class="mt-2">This field is required.</div> -->
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
            <!-- Display validation errors here -->
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
            <!-- Display validation errors here -->
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit">Reset Password</button>
        </div>

    </form>

</body>
</html>
