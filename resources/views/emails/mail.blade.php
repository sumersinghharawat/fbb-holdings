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
            <p>Dear {{ $MailData['name'] }},</p>

            <p>Greetings from {{ env("APP_NAME") }}</p>

            <p>I am writing to you in response to the "Let's Talk" contact form submission on our website. We are thrilled to hear from you and appreciate your interest in connecting with us.</p>

            <p>Here are the details you provided:</p>

            <p>Name: {{ $MailData['name'] }}</p>
            <p>Email: {{ $MailData['email'] }}</p>
            <p>Phone Number: {{ $MailData['phonenumber'] }}</p>
            <p>Preferred Contact Method: {{ env("MAIL_FROM_ADDRESS") }}</p>
            <p>Your Message:</p>
            <p>{{ $MailData['message'] }}</p>

            <p>At {{ env("APP_NAME") }}, fostering meaningful relationships with our community is our top priority. We are excited about the opportunity to discuss with you.</p>

            <p>Please allow us some time to review your message thoroughly. Our team will get back to you promptly to schedule a call or a meeting as per your preference. If you have any specific time preferences, feel free to let us know, and we will do our best to accommodate your schedule.</p>

            <p>Once again, thank you for reaching out to us. We look forward to the conversation and the potential collaboration ahead.</p>

            <p>If you have any further questions or require immediate assistance, please don't hesitate to contact us at {{ env("APP_PHONENUMBER") }}.</p>

            <p>Best regards,</p>

            <p>{{ env("APP_NAME") }}</p>
            <p>{{ env("APP_WEBSITE") }}</p>
            <p>{{ env("MAIL_FROM_ADDRESS") }}</p>
            <p>{{ env("APP_PHONENUMBER") }}</p>
        </div>
    </div>
</body>
</html>
