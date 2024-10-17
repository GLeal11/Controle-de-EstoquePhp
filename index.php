<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Login - Famath</title>
   
   <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #58aaf7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        img {
            max-width: 200%;
            height: auto;
            margin-bottom: 15px;
        }
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 95%;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

<div class="login-container">
    <img src="data:image/jpeg;base64,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WnLoPhrmtY6kiLYWuDAXPtGxznPPpagXFxV5lvqTSvx0sIw6lhg4CnZGICXjKx12kuuXC9zfaVmZmZzLURERiHLptCsMgc2dlLCx0L2vY8PeMj2nUb5rbVqdS89ss7Kx3wmr0Qwype+ofTQSPkJfI/O45txcSHW3dyRe8dsk0rPd1qqGmfC+leYjDwfByRl4sIrBuV2u4FrBZjOctdvDmYXo1htLKyeGGCOUhwjc15u4HUct3a9q1N7T2lmK1jvDLEtHMOrpDPLDBLIGtYX5ybNF8oOV1htKRe1e0E1rby7GHUMdPE2CJgZFGLMaL2aL3tr5yszMzOZaiMeGyoogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIIQEHPxrBaetiMNRE2Rh1jNfM0+s1w1tPOCrW01nMJasWjEvOanwSOgqY6mknDmwzxTcFU3BOR4flErQeS2tvavRHEZjFnm6aItuq+6dhVRUf7moyxnbBSZmNcOR8x/SO93IDvBXHdEeHfbM+ZdelpmRMbHGxrI2CzWsaA1o5AAszOfLUREdoWqK1cSpjLHkBsc8Lr6tQbI1xtcEXsDuViUmMufNhUpl4USNBaBE3i/pOALbO4wsAcxz2DdZYxXKYlJoJCxreCgYYmsDSHHjlj2PDRYcVhya733atSZMMmU0ok4bI0l0j3FufW1pjjYONbWf0d+tMwYnKoYfNazRGxzHVJbIHXceFc+2q2wZw4gnWWAc6ZhMSmDDZIsrQ2N7I3vLG62BrXtsW2Ob0rnb6XMmVxhnQYfJFK07WcFGw5XNDWlpkNg0tvYZwBYjUEmSIwrq8FfIZOM0Nnc90gueMWC0JHJawJ+6AkSbSXDJnPfLmjzSskic2ztURZZozX12cA7ZqzvTMGJSzC5WcZr2ueHEtc/KNXAljQWtaBqc47tYTMGJbGG4c6Fj4SWOYdbLNIs4izgQSdrhmvfWXuUmckRhrT4M90bmB+UmhZTgNLcrpAJAc12ni8Yaxzq5NqXYbITI29g+dkjXZmEACVjzZpbe9gdtxdMmEU+GSxyMd5wHCB5DmAvJkzZi3LYXG5ttd0mYIiWPkyWVhY9sbTI8STm+drwAcsTQMtmg5ba/R5SUzBiZdiia8RtbIQXtaGucNjyNWe26+2266zKwvRRAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQQgICAgICAgICAgICAgICAgICAgICAglAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQf/2Q==" alt="Famath Logo">
    <h2>LOGIN</h2>
    <form action="#" method="post">
        <input type="text" placeholder="Usuário - Professor" required>
        <input type="password" placeholder="Senha" required>
        <input type="submit" value="ENTRAR">
    </form>
</div>

</body>
</html>
