<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ХАС ГРУПП &mdash; управляющая компания</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #252321;
        }
        .top-logo {
            background-color: #252321;
        }
        .nav-bg {
            background-color: #ac8a5d;
        }
        .nav-link, .nav-link:visited, .nav-link:active {
            color: #242321;
            font-size: 1.1em;
            line-height: 1.2em;
            font-weight: bold;
            text-decoration: none;
            text-transform: uppercase;
        }
        .nav-link:hover {
            color: #6c5510;
        }
        .nav-link.active, .nav-link.active:hover, .nav-link.active:visited, .nav-link.active:active {
            color: #d9b37c;
        }
        .search-field {
            border: 0 solid transparent !important;
            border-radius: 0 !important;
            height: 48px;
            padding-left: 48px;
            background-image: url("data:image/svg+xml,%3Csvg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cpath fill='%23231F20' d='M12.2,23.5c2.7,0,5.3-1,7.3-2.7l9.9,9.9c0.2,0.2,0.4,0.3,0.7,0.3c0.2,0,0.5-0.1,0.7-0.3c0.4-0.4,0.4-1,0-1.3 l-9.9-9.9c3.7-4.4,3.5-11-0.7-15.2C18.1,2.2,15.2,1,12.2,1S6.4,2.2,4.3,4.3c-4.4,4.4-4.4,11.5,0,15.9C6.4,22.4,9.2,23.5,12.2,23.5z M5.6,5.6c1.8-1.8,4.1-2.7,6.6-2.7s4.9,1,6.6,2.7c3.7,3.7,3.7,9.6,0,13.3c-1.8,1.8-4.1,2.7-6.6,2.7s-4.9-1-6.6-2.7 C2,15.2,2,9.3,5.6,5.6z'/%3E%3C/svg%3E");
            background-color: #d9b37c !important;
            background-position: 8px 8px;
        }
        .logo-panel-link, .logo-panel-link:visited, .logo-panel-link:active {
            color: #d9b37c;
            font-size: 1.1em;
            line-height: 1.2em;
            font-weight: bold;
            text-decoration: none;
        }
        .logo-panel-link:hover {
            color: #ac8a5d;
        }
        a.sub-link {
            color: #fff;
            font-size: 1.1em;
            line-height: 1.2em;
            text-decoration: none;
        }
        a:hover.sub-link {
            color: #d9b37c;
        }
        a:active.sub-link {
            color: #fff;
        }
        .structure {
            margin-top: -10px;
            margin-left: -10px;
            line-height: 2em;
        }
        .structure li::marker {
            content: '▸ ';
            font-size: 1.75em;
            line-height: 0em;
        }
        .header::before {
            content: "■■";
            letter-spacing: -0.5em;
            color: #e1230f;
            padding-right: .75em;
        }
        .header {
            font-size: 1.75em;
        }
        .sub-header::before {
            content: "■■";
            letter-spacing: -0.5em;
            color: #fff;
            padding-right: .75em;
        }
        .sub-header {
            font-size: 1.75em;
        }
        .color-header {
            font-size: 1.75em;
            color: #ac8a5d;
            text-transform: uppercase;
        }
        .header-tri::before {
            content: ' ';
            width: 32px;
            height: 32px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='0,0 0,32 16,16' style='fill:%23e1230f;'/%3E%3C/svg%3E");
            display: inline-block;
        }
        .header-tri {
            margin-bottom: -.25em;
            font-size: 3em;
        }
        .header-over-pic::before {
            content: ' ';
            width: 32px;
            height: 32px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='0,4 0,32 4,32 18,18 4,4' style='fill:%23fff;'/%3E%3Cpolygon points='0,4 0,32 14,18' style='fill:%23e1230f;'/%3E%3C/svg%3E");
            display: inline-block;
            margin-left: -1.25em;
            margin-right: .25em;
            text-shadow: 5px 0 #fff;
        }
        .header-over-pic {
            margin-left: 1em;
            font-size: 2em;
            line-height: 1.1em;
            color: #fff;
        }
        .copyright {
            color: #d9b37c;
            font-size: .7em;
            line-height: .7em;
        }
        .bottom-text {
            color: #d9b37c;
            font-size: 1.1em;
            line-height: 1.1em;
        }
        .bottom-text ul {
            margin-left: -1.25em;
        }
        .bottom-text li::marker {
            content: '- ';
        }
        .bottom-text a, a:active, a:visited {
            color: #d9b37c;
            text-decoration: none;
        }
        .bottom-text a:hover {
            color: #ac8a5d;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
    <div class="container-fluid p-3 top-logo">
        <div class="container">
            <img src="/img/logo.svg" width="336" height="72" class="ms-2"/>
            <div class="float-end me-3">
                <p class="text-end">
                    <a href="tel:+78003020500" class="logo-panel-link">8 800 30-20-500</a><br>
                    <a href="tel:+74162496777" class="logo-panel-link">(4162) 496-777</a><br>
                    <a href="https://t.me/?" class="logo-panel-link"><img src="/img/tg-icon.svg" width="20" height="20" class="ms-2"/></a>
                    <a href="https://wa.me/?" class="logo-panel-link"><img src="/img/wa-icon.svg" width="20" height="20" class="ms-2"/></a>
                </p>
            </div>
            <div class="float-end me-5">
                <span style="color: #e1230f; line-height: .65em; font-size: 3em; transform: scale(1, 2);" class="float-start me-2">▸</span>
                <span class="float-end"><a href="/for-stuff" class="logo-panel-link">личный<br>кабинет</a></span>
            </div>
        </div>
    </div>
    <div class="container-fluid nav-bg">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link ps-2 pe-3{{ Request::path() === '/' ? ' active' : '' }}">ГЛАВНАЯ</a></li>
                    <li><a href="/about" class="nav-link px-3{{ Request::path() === 'about' ? ' active' : '' }}">О КОМПАНИИ</a></li>
                    <li><a href="/production" class="nav-link px-3{{ Request::path() === 'production' ? ' active' : '' }}">ПРОИЗВОДСТВО</a></li>
                    <li><a href="/qa" class="nav-link px-3{{ Request::path() === 'qa' ? ' active' : '' }}">ВОПРОС/ОТВЕТ</a></li>
                    <li><a href="/career" class="nav-link px-3{{ Request::path() === 'career' ? ' active' : '' }}">ВАКАНСИИ</a></li>
                    <li><a href="/contacts" class="nav-link px-3{{ Request::path() === 'contacts' ? ' active' : '' }}">КОНТАКТЫ</a></li>
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control search-field">
                </form>
            </div>
        </div>
    </div>
</header>
@yield('content')
<div class="p-0 m-0" style="background-color: #e1230f; height: 3px;"></div>
<div class="container-fluid py-5 top-logo">
    <div class="container">
        <div class="row">
            <div class="col-4 ps-2">
                <img src="/img/logo-bottom.svg" width="130" height="108"/>
                <div class="p-0 mx-0 my-3" style="background-color: #e1230f; height: 2px; width: 130px;"></div>
                <div class="float-start">
                    <p class="text-start">
                        <a href="tel:+78003020500" class="logo-panel-link">8 800 30-20-500</a><br>
                        <a href="tel:+74162496777" class="logo-panel-link">(4162) 496-777</a><br>
                        <a href="https://t.me/?" class="logo-panel-link"><img src="/img/tg-icon.svg" width="20" height="20" class="mt-3 me-2"/></a>
                        <a href="https://wa.me/?" class="logo-panel-link"><img src="/img/wa-icon.svg" width="20" height="20" class="mt-3 me-2"/></a>
                    <div class="copyright">&copy; 2023{{ date('Y') > 2023 ? '—' . date('Y') : '' }}, ООО УК &laquo;ХАС ГРУПП&raquo;</div>
                    </p>
                </div>
            </div>
            <div class="col-8 container m-0 p-0">
                <div class="row">
                    <div class="col-6 bottom-text">
                        О КОМПАНИИ
                        <div class="p-0 mx-0 my-3" style="background-color: #e1230f; height: 2px; width: 150px;"></div>
                        <ul>
                            <li><a href="/about/history">история предприятия</a></li>
                            <li><a href="/about/social-responsibility">социальная ответственность</a></li>
                            <li><a href="/career">вакансии</a></li>
                            <li><a href="/contacts">контакты</a></li>
                        </ul>
                    </div>
                    <div class="col-6 bottom-text">
                        ПРОИЗВОДСТВО
                        <div class="p-0 mx-0 my-3" style="background-color: #e1230f; height: 2px; width: 150px;"></div>
                        <ul>
                            <li><a href="/structure/maristy">ООО Маристый</a></li>
                            <li><a href="/structure/mogot">ООО Могот</a></li>
                            <li><a href="/structure/dambuki">ПАО Прииск Дамбуки</a></li>
                            <li><a href="/about/resources-growth">ресурсы и развитие</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 bottom-text">
                        <div class="p-0 mx-0 mt-2 mb-3" style="background-color: #e1230f; height: 2px; width: 100%;"></div>
                        ООО УК "ХАС ГРУПП"<br>
                        675000, Амурская область, г. Благовещенск, ул. Партизанская 89/1<br>
                        приемная: <a href="tel:+74162225710">+7 (4162) 225-710</a>, <a href="tel:+74162225711">225-711</a><br>
                        эл. почта: <a href="mailto:info@khasgroup.ru">info@khasgroup.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
