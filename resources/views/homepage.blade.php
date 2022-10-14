<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Terekalmaz</title>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <a href="/">
                        <img width="250" src="{{asset('assets/images/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="links">

                </div>
            </nav>
            <div class="header-content">
                <div>
                    <p class="header-text">Представляем</p>
                    <h1>BOHWA MACHINERY CORPORATION</h1>
                    <hr class="line vertical">
                    <p class="header-desc">Один из ведущих поставщиков оборудования и бурового инструмента, высокого качества, для геологоразведки, бурения гидрогеологических скважин и проведения горно-шахтных работ. Проектируется и производится в соответсвии со специфическимим требованиями каждого вида деятельности.</p>
                    <hr class="line horizontal">
                </div>
                <div style="padding: 0 0 0 30px">
                    <img class="header-img" src="{{asset('assets/images/header.png')}}" alt="">
                </div>
            </div>
        </div>
    </header>
</body>
</html>
