<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>

    <style>
        *,
        *::after,
        *::before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            outline: none;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #e8e8e8;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #363636;
            font-size: 40px;
        }

        .inner-wrapper {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        .card {
            flex-basis: 33.33333%;
            padding: 15px;
        }

        .inner-card {
            background-color: #fff;
            padding: 15px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1)
        }

        .img-wrapper {
            width: 100%;
            height: 250px;
            margin-bottom: 10px;
        }

        .img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .content {
            margin-bottom: 20px;
        }

        .content h1 {
            font-weight: 900;
            font-size: 16px;
            margin-bottom: 10px;
            color: #444;
        }

        .content p {
            font-size: 14px;
            line-height: 1.5;
            color: #555;
        }

        .btn-wrapper {
            display: block;
            text-align: center;
        }

        .view-btn {
            width: 70%;
            height: 40px;
            border: none;
            background-color: steelblue;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .view-btn:hover {
            box-shadow: 0 3px 6px rgba(0, 0, 0, .4);
        }

        .light-box {
            position: fixed;
            left: 0;
            top: 0;
            background-color: rgba(0, 0, 0, .6);
            width: 100%;
            height: 100vh;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            transition: all 200ms ease-out;
        }

        .box {
            width: 600px;
            height: 400px;
            background-color: #fff;
            transform: scale(0);
            transition: all 200ms ease-in-out;
            padding: 10px;
            box-shadow: 0 3px 9px rgba(0, 0, 0, .1);
            position: relative;
        }

        .box-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            padding: 15px;
        }

        .box .light-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .box .close-btn {
            position: absolute;
            z-index: 100;
            font-size: 30px;
            color: #ccc;
            left: 100%;
            top: 0;
            border: 2px solid #ccc;
            border-radius: 50%;
            display: block;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 35px;
            margin-left: 10px;
            cursor: pointer;
            transition: all 200ms linear;
        }

        .pagination {
            text-align: center;
            padding: 10px 0;
            margin: 30px auto;
        }

        /* Effect */
        .effect .light-box {
            opacity: 1;
            visibility: visible;
        }

        .effect .light-box .box {
            transform: scale(1);
        }

        @media (max-width: 780px) {
            .card {
                flex-basis: 50%;
            }

            .title {
                font-size: 30px;
            }
        }

        @media (max-width: 500px) {
            .card {
                flex-basis: 5100%;
            }

            .box .close-btn {
                margin-left: 0;
                left: 80%;
                top: -12%;
            }
        }

        .credit {
            font-size: 14px;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div id="app2">
        <posts-component :posts="{{ json_encode($posts) }}" :pagination="{{ json_encode($posts->links()) }}"></posts-component>
    </div>

</body>

</html>
