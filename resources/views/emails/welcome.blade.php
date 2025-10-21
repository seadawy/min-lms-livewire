<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Learning Platform</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background-color: #4F46E5; padding: 30px; text-align: center; border-radius: 10px 10px 0 0;">
        <h1 style="color: white; margin: 0;">Welcome to Our Learning Platform!</h1>
    </div>

    <div style="background-color: #f9fafb; padding: 30px; border-radius: 0 0 10px 10px;">
        <h2 style="color: #4F46E5;">Hello, {{ $user->name }}!</h2>

        <p>Thank you for joining our learning platform. We're excited to have you on board!</p>

        <p>Your account has been successfully created with the email address: <strong>{{ $user->email }}</strong></p>

        <div style="margin: 30px 0;">
            <a href="{{ url('/dashboard') }}" style="background-color: #4F46E5; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; display: inline-block;">
                Go to Dashboard
            </a>
        </div>

        <p>Here's what you can do next:</p>
        <ul style="color: #666;">
            <li>Browse our course catalog</li>
            <li>Complete your profile</li>
            <li>Start learning and track your progress</li>
        </ul>

        <p>If you have any questions or need assistance, feel free to reach out to our support team.</p>

        <p style="margin-top: 30px;">
            Happy Learning!<br>
            <strong>The Learning Platform Team</strong>
        </p>
    </div>

    <div style="text-align: center; margin-top: 20px; color: #999; font-size: 12px;">
        <p>This email was sent to {{ $user->email }} because you registered for an account.</p>
    </div>
</body>
</html>
