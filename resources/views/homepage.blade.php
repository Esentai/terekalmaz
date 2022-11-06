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
                    <a class="nav_link nav_link_active" href="#">Главная</a>
                    <a class="nav_link" href="#">Каталог продукции</a>
                    <a class="nav_link" href="#">О нас</a>
                    <a class="nav_link" href="#">Контакты</a>
                </div>
            </nav>
            <div class="header-content">
                <div class="">
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
            <div class="assortment">
                <h2 class="assortment_title">Предлагаем широкий ассортимент алмазного инструмента
                    и бурового оборудования
                </h2>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="assortment_item assortment_item1">
                            <h3 class="assortment_item_name">Алмазные инструменты</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="assortment_item assortment_item2">
                            <h3 class="assortment_item_name">Буровые трубы</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="assortment_item assortment_item3">
                            <h3 class="assortment_item_name">Буровые установки
                            </h3>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="assortment_item assortment_item4">
                            <h3 class="assortment_item_name">Компрессоры</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="assortment_item assortment_item5">
                            <h3 class="assortment_item_name">Буровые насосы</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="assortment_item assortment_item6">
                            <h3 class="assortment_item_name">Инклинометр
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="producer">
        <div class="container">
            <h2 class="producer_title">официальные представители
                всемирно известных производителей</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="producer_item">
                        <div>
                            <img class="producer_logo" src="{{asset('assets/images/producer_logo.png')}}" alt="">
                            <div class="producer_item_content">
                                <p>Терский завод алмазного инструмента (АО «Терекалмаз») – одно из крупнейших российских предприятий, имеющее 50-летний позитивный опыт в производстве алмазного инструмента для бурения, машиностроения и камнеобработки. Неоднократный лауреат всероссийского конкурса «100 лучших товаров России» и признанный лидер в своей отрасли.</p>
                                <div>
                                    <img src="{{asset('assets/images/producer_img1.png')}}" alt="">
                                    <img src="{{asset('assets/images/producer_img2.png')}}" alt="">
                                    <img src="{{asset('assets/images/producer_img3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="producer_item">
                        <img class="producer_logo" src="{{asset('assets/images/producer_logo2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            <h2 class="reviews_title">ОТЗЫВЫ</h2>
            <div class="review review_odd">
                <img class="review_img" src="{{asset('assets/images/review_img1.png')}}" alt="review_img1">
                <div class="review_content_odd">
                    <h4 class="review_name">Ешимов К.Д.</h4>
                    <span class="review_job">Директор по буровым работам ТОО “Казахмыс Дриллинг”</span>
                    <p class="review_text">ТОО “Терекалмаз” зарекомендовал себя только с положительной стороны, который в полной мере выполнил все свои обязательство, как в вопросах качества, так и в вопросах оперативности.</p>
                </div>
            </div>
            <div class="review review_even">
                <div class="review_content_even">
                    <h4 class="review_name">Книжник К.Е.</h4>
                    <span class="review_job">Директор ТОО “Запрудгеология”</span>
                    <p class="review_text">Качество поставляемого бурового инструмента полностью удовлетворяет требованиям, предьъевляемым при проведении геологоразведочных работ.</p>
                </div>
                <img class="review_img" src="{{asset('assets/images/review_img2.png')}}" alt="review_img2">
            </div>
            <div class="review review_odd">
                <img class="review_img" src="{{asset('assets/images/review_img3.png')}}" alt="review_img3">
                <div class="review_content_odd">
                    <h4 class="review_name">Семенов С.П.</h4>
                    <span class="review_job">Директор  ТОО “ГРК Искандер”</span>
                    <p class="review_text">Выражаю признательность за высокий профессионализм, всегда качественную и своевремнную поставку оборудования, винмательный и оперативный подход к любой поставленной задаче.</p>
                </div>
            </div>
            <div class="review review_even">
                <div class="review_content_even">
                    <h4 class="review_name">Исмаилов У.Ж.</h4>
                    <span class="review_job">Генеральный директор ТОО “Геобайт-Инфо”</span>
                    <p class="review_text">Тесное сотрудничество на протяжении более 13 лет позволяет нам рекомендовать ТОО «Терекалмаз» как надежного поставщика и стратегически важного партнера.
                    </p>
                </div>
                <img class="review_img" src="{{asset('assets/images/review_img4.png')}}" alt="review_img4">
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>О КОМПАНИИ</h3>
                    <p class="footer_text">ТОО «Терекалмаз» успешно работает на рынке геологоразведочного оборудования с 2004 года. На данный момент компания является официальным представителем по продвижению и продажам оборудования всемирно известных производителей: Терский завод алмазного инструмента АО «Терекалмаз» и Bohwa Machinery Corporation</p>
                </div>
                <div class="col-md-3">
                    <h3>МЕНЮ</h3>
                    <a class="footer_link" href="#">Главная</a>
                    <a class="footer_link" href="#">Каталог продукции</a>
                    <a class="footer_link" href="#">О нас</a>
                    <a class="footer_link" href="#">Контакты</a>
                </div>
                <div class="col-md-3">
                    <h3>КОНТАКТЫ</h3>
                    <a class="footer_contact" target="_blank" href="https://wa.me/77001241414">
                        <img src="{{asset('assets/images/footer/Vector.png')}}" alt="">
                        <span> +7 700 124 14 14</span>
                    </a>
                    <a class="footer_contact" target="_blank" href="https://t.me/terekalmaz_kz">
                        <img src="{{asset('assets/images/footer/Vector2.png')}}" alt="">
                        <span> +7 700 124 14 14</span>
                    </a>
                    <a class="footer_contact" target="_blank" href="tel:+77000241414">
                        <img src="{{asset('assets/images/footer/Vector3.png')}}" alt="">
                        <span>  +7 727 311 07 25</span>
                        <span>  +7 700 024 14 14</span>
                    </a>
                    <a class="footer_contact" target="_blank" href="https://go.2gis.com/wjqjd">
                        <img src="{{asset('assets/images/footer/Vector4.png')}}" alt="">
                        <span>Казахстан, город Алматы, БЦ "Нурлы-Тау", блок 1"Б", 6 этаж, офис 605</span>
                    </a>
                </div>
                <div class="col-md-3">
                    <h3>ПОИСК</h3>
                    <input class="footer_input" placeholder="Поиск" type="text">
                </div>
            </div>
            <p class="footer_copyright">© 2022 Алматы Все права защищены</p>
        </div>
    </footer>
</body>
</html>
