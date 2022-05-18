
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Главная</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://internet-shop.tmweb.ru">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://internet-shop.tmweb.ru">Все товары</a></li>
                <li ><a href="http://internet-shop.tmweb.ru/categories">Категории</a>
                </li>
                <li ><a href="http://internet-shop.tmweb.ru/basket">В корзину</a></li>
                <li><a href="http://internet-shop.tmweb.ru/reset">Сбросить проект в начальное состояние</a></li>
                <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>
                        <li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>
                        <li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://internet-shop.tmweb.ru/login">Войти</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <h1>Все товары</h1>
        <form method="GET" action="http://internet-shop.tmweb.ru">
            <div class="filters row">
                <div class="col-sm-6 col-md-3">
                    <label for="price_from">Цена от                    <input type="text" name="price_from" id="price_from" size="6" value="">
                    </label>
                    <label for="price_to">до                    <input type="text" name="price_to" id="price_to" size="6"  value="">
                    </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="hit">
                        <input type="checkbox" name="hit" id="hit" > Хит                </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="new">
                        <input type="checkbox" name="new" id="new" > Новинка                </label>
                </div>
                <div class="col-sm-2 col-md-2">
                    <label for="recommend">
                        <input type="checkbox" name="recommend" id="recommend" > Рекомендуем                </label>
                </div>
                <div class="col-sm-6 col-md-3">
                    <button type="submit" class="btn btn-primary">Фильтр</button>
                    <a href="http://internet-shop.tmweb.ru" class="btn btn-warning">Сброс</a>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/video_panasonic.jpg" alt="Камера Panasonic HC-V770">
                    <div class="caption">
                        <h3>Камера Panasonic HC-V770</h3>
                        <p>27900 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/7" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="http://internet-shop.tmweb.ru/portable/panasonic_hc-v770"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="ywA0XAFDtySQBwNq2lr5tnSb0AS8owi0wrKlN4gD">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/delongi.jpg" alt="Кофемашина DeLongi">
                    <div class="caption">
                        <h3>Кофемашина DeLongi</h3>
                        <p>25200 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/8" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="http://internet-shop.tmweb.ru/appliances/delongi"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="ywA0XAFDtySQBwNq2lr5tnSb0AS8owi0wrKlN4gD">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/haier.jpg" alt="Холодильник Haier">
                    <div class="caption">
                        <h3>Холодильник Haier</h3>
                        <p>40200 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/9" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="http://internet-shop.tmweb.ru/appliances/haier"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="ywA0XAFDtySQBwNq2lr5tnSb0AS8owi0wrKlN4gD">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/moulinex.jpg" alt="Блендер Moulinex">
                    <div class="caption">
                        <h3>Блендер Moulinex</h3>
                        <p>4200 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/10" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="http://internet-shop.tmweb.ru/appliances/moulinex"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="ywA0XAFDtySQBwNq2lr5tnSb0AS8owi0wrKlN4gD">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/bosch.jpg" alt="Мясорубка Bosch">
                    <div class="caption">
                        <h3>Мясорубка Bosch</h3>
                        <p>9200 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/11" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="http://internet-shop.tmweb.ru/appliances/bosch"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="ywA0XAFDtySQBwNq2lr5tnSb0AS8owi0wrKlN4gD">            </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="labels">


                    </div>
                    <img src="http://internet-shop.tmweb.ru/storage/products/samsung_j6.jpg" alt="Samsung Galaxy J6">
                    <div class="caption">
                        <h3>Samsung Galaxy J6</h3>
                        <p>11980 ₽</p>
                        <p>
                        <form action="http://internet-shop.tmweb.ru/basket/add/12" method="POST">
                            <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                            <a href="http://internet-shop.tmweb.ru/mobiles/samsung_j6"
                               class="btn btn-default"
                               role="button">Подробнее</a>
                            <input type="hidden" name="_token" value="ywA0XAFDtySQBwNq2lr5tnSb0AS8owi0wrKlN4gD">            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <ul class="pagination">

                <li class="page-item">
                    <a class="page-link" href="?page=2&amp;page=1" rel="prev" aria-label="pagination.previous">&lsaquo;</a>
                </li>





                <li class="page-item"><a class="page-link" href="?page=2&amp;page=1">1</a></li>
                <li class="page-item active" aria-current="page"><span class="page-link">2</span></li>


                <li class="page-item disabled" aria-disabled="true" aria-label="pagination.next">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            </ul>
        </nav>

    </div>
</div>
</body>
</html>
