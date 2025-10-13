<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body { font-family: sans-serif; background-color: #f9fafb; color: #374151; padding: 2rem; }
        .text-sm { font-size: 0.875rem; }
        .text-gray-600 { color: #4b5563; }
        .text-gray-400 { color: #9ca3af; }
        .text-green-600 { color: #16a34a; }
        .dark-text-gray-400 { color: #9ca3af; }
        .mb-4 { margin-bottom: 1rem; }
        .mt-4 { margin-top: 1rem; }
        .font-medium { font-weight: 500; }
        .flex { display: flex; }
        .items-center { align-items: center; }
        .justify-between { justify-content: space-between; }
        button { padding: 0.5rem 1rem; background-color: #4f46e5; color: white; border: none; border-radius: 0.375rem; cursor: pointer; }
        button:hover { background-color: #4338ca; }
        .underline { text-decoration: underline; }
        .rounded-md { border-radius: 0.375rem; }
    </style>
</head>
<body>

    <div class="mb-4 text-sm text-gray-600">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
    </div>

    <!-- Verification link sent message -->
    <!-- You need to handle this via your backend logic -->
    <!-- Example static message -->
    <!-- <div class="mb-4 font-medium text-sm text-green-600">
        A new verification link has been sent to the email address you provided during registration.
    </div> -->

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit">
                Resend Verification Email
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md">
                Log Out
            </button>
        </form>
    </div>

</body>
</html>
