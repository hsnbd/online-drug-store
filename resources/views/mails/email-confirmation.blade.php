<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Email Confirmation</title>
    </head>
    <body>
        <div style="text-align:center; background: gray;">
            <div style="background:white; padding: 40px; margin: 0 auto; width: 80%; heigh: 80%">
                <h3>Hey {{$user->name}}</h3>
                <p>Please Confirm Your Email</p>
                <a
                    href="http://drugstore.cf/email/{{$user->EmailConfirm->token}}"
                    style="padding: 15px; background:hotpink; color: white; text-decoration:none; border-radius: 3px; margin-top: 30px"
                    >
                    Confirm Email
                </a>
            </div>
        </div>
    </body>
</html>
