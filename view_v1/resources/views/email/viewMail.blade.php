<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family:'poppins',sans-serif;
        }

        .container{
            /* background-color:black; */
            text-align:center;
            /* justify-content:center; */
        }

        .btn{
            font-weight: 500;
            border-radius:5px;
            align-items:center;
            outline:none;
            border:none;
            background-color:#0944ba;
            color: white;
            padding: 12px;
            display:inline-block;
            margin:0;
            cursor:pointer;
            transition: backround-color 0.3s, transform 0.2s;
        }
        .btn:hover{
            background-color:#3e65b3;
        }

        .btn:active{
            transform: scale(0.95);
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>
    <p>User:{{ $mailData['user']->email }}</p>
    <div class="container">
        <a href="https://www.youtube.com/watch?v=D8CCivAJBLk">
            <button class="btn">Konfirmasi Sekarang.</button>
        </a>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum qui deleniti, animi perferendis eum autem temporibus sed, eaque itaque, consequuntur veniam quas. Aut, excepturi ipsam placeat iste consectetur beatae modi!</p>
</body>
</html>