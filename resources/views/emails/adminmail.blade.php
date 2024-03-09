<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email - Let's Talk</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet"
    />
    <style>
        .main h2{
            width: 100%;
            text-align: center;
            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 700;
            font-size: 54px;
            line-height: 72px;
            background: linear-gradient(180deg, #FFDF54 0%, #936A00 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }
        .main .message{
            max-width: 900px;
            width: 100%;
            margin: 0px auto;
        }
        .main .message p{
            width: 100%;
            text-align: left;
            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 28px;
            color: #000;
            padding: 30px;
        }
    </style>
</head>
<body class="body">
    <div class="main">
        <h2>{{ env("APP_NAME") }}</h2>
        <div class="message">
            <p>Dear {{ env("APP_NAME") }},</p>

            <p>I hope this email finds you well. My name is {{ $MailData['name'] }}, and I am writing to you through the "Let's Talk" contact form on your website.</p>

            <p>I am impressed by the work your organization is doing, and I am keen to learn more about your organization. I believe there may be potential collaboration opportunities that could be mutually beneficial.</p>

            <p>Here are some details about me:</p>

            <p>Name: {{ $MailData['name'] }}</p>
            <p>Email: {{ $MailData['email'] }}</p>
            <p>Phone Number: {{ $MailData['phonenumber'] }}</p>
            <p>Message:</p>
            <p>{{ $MailData['message'] }}</p>

            <p>I would greatly appreciate the opportunity to speak with someone from your team. If possible, could we schedule a call or a meeting at your earliest convenience? Please let me know your availability, and I will ensure that I am available at that time.</p>

            <p>Thank you for considering my inquiry. I am excited about the potential to collaborate and make a positive impact together.</p>

            <p>Looking forward to connecting with you soon!</p>

            <p>Best regards,</p>

            <p>{{ $MailData['name'] }}</p>
        </div>
    </div>
</body>
</html>
