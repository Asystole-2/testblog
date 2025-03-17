<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Involved - Bible Doodle</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap');
    </style>
</head>
<body style="font-family: 'Comic Neue', cursive; max-width: 600px; margin: 0 auto; padding: 20px;">
<h1 style="color: #2d3748; text-align: center;">Join Our Doodle Squad! ✏️</h1>

<form method="POST" action="{{ route('signup.store') }}" style="background-color: #f7fafc; padding: 30px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    @csrf

    <div style="margin-bottom: 20px;">
        <label style="display: block; color: #4a5568; margin-bottom: 8px; font-weight: 700;">Your Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required
               style="width: 100%; padding: 10px; border: 2px solid #cbd5e0; border-radius: 5px; font-size: 16px;">
        @error('name')
        <span style="color: #e53e3e; font-size: 14px;">{{ $message }}</span>
        @enderror
    </div>

    <div style="margin-bottom: 25px;">
        <label style="display: block; color: #4a5568; margin-bottom: 8px; font-weight: 700;">Your Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required
               style="width: 100%; padding: 10px; border: 2px solid #cbd5e0; border-radius: 5px; font-size: 16px;">
        @error('email')
        <span style="color: #e53e3e; font-size: 14px;">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit"
            style="background-color: #48bb78; color: white; padding: 12px 24px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; width: 100%; transition: background-color 0.3s;">
        Join Now! 🎨
    </button>
</form>

<div style="text-align: center; margin-top: 30px; color: #718096;">
    <p>Questions? Email us at <a href="mailto:doodle@bible.org" style="color: #4299e1;">doodle@bible.org</a></p>
    <p style="margin-top: 15px;">📖 "Each of you should use whatever gift you have received to serve others..." - 1 Peter 4:10</p>
</div>
</body>
</html>
