<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Password</title>
    <style>
        body { font-family: sans-serif; background-color: #f9fafb; color: #374151; padding: 2rem; }
        label { display: block; font-weight: 500; margin-bottom: 0.25rem; }
        input { width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #d1d5db; border-radius: 0.375rem; }
        .mt-4 { margin-top: 1rem; }
        .mt-2 { margin-top: 0.5rem; color: #dc2626; font-size: 0.875rem; }
        .mb-4 { margin-bottom: 1rem; }
        .text-sm { font-size: 0.875rem; color: #4b5563; }
        .flex { display: flex; }
        .justify-end { justify-content: flex-end; }
        button { padding: 0.5rem 1rem; background-color: #4f46e5; color: white; border: none; border-radius: 0.375rem; cursor: pointer; }
        button:hover { background-color: #4338ca; }
    </style>
</head>
<body>

    <div class="mb-4 text-sm">
        This is a secure area of the application. Please confirm your password before continuing.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            <!-- Display validation errors here -->
            <!-- Example: <div class="mt-2">Password is required.</div> -->
        </div>

        <div class="flex justify-end mt-4">
            <button type="submit">Confirm</button>
        </div>
    </form>

</body>
</html>
