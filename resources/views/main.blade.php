@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="background-image: url('/img/fp-top.jpg'); background-size: cover; height: 632px;">
        <div class="container">
            <div class="row"><div class="col-1 pt-5"></div></div>
            <div class="row">
                <div class="ms-3 p-3 col-5" style="background: #ac8a5dc0;">
                    <h3 class="text-white">Упраляющая компания</h3>
                    <h1 class="text-white">ХАС ГРУПП</h1>
                    <div class="d-inline-flex" style="background: #e1230f; width: 5em; height: 5px;"></div>
                    <div class="d-inline-flex" style="margin-left: -5px; background: #000; width: 5em; height: 5px;"></div>
                    <ul class="structure pt-3">
                        <li><a href="/structure/maristy" class="sub-link">ООО Маристый</a></li>
                        <li><a href="/structure/mogot" class="sub-link">ООО Могот</a></li>
                        <li><a href="/structure/dambuki" class="sub-link">ПАО Прииск Дамбуки</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row pt-5">
                <div class="col-7">
                    <div class="header">ДОБЫЧА ЗОЛОТА</div>
                    <div class="pt-2">Мы смело смотрим в будущее и открываем новые горизонты. Эффективность и ответственность, честность и уважение &mdash; наши незыблемые принципы. Добыча металла, предоставление рабочих мест, налоги &mdash; это ответственность, которую несет компания перед государством и людьми. Наши три кита: прииск Маристый, прииск Могот и прииск Дамбуки. Компания регулярно покупает лицензии на добычу рассыпного золота. При добыче золота важна работа каждого специалиста. Поэтому большое значение в компании придается заботе о людях.</div>
                </div>
                <div class="col-5 d-flex justify-content-end">
                    <img src="/img/fp-gold.jpg" class="rounded-circle" width="360" height="360">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row pt-5 pb-3">
                <div class="col-12 header">ПРЕИМУЩЕСТВА КОМПАНИИ</div>
            </div>
            <div class="row pb-4">
                <div class="col-4">
                    <div class="p-2 pt-4" style="background-image: url('/img/backhoe-bg.jpg'); background-position: center; background-size: cover; height: 250px;">
                        <div class="header-over-pic">СИЛЬНАЯ<br>ТЕХНИЧЕСКАЯ<br>БАЗА
                            <br><img src="/img/backhoe-icon.svg" width="64" height="64"/>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-2 pt-4" style="background-image: url('/img/worker-bg.jpg'); background-position: center; background-size: cover; height: 250px;">
                        <div class="header-over-pic">СПЕЦИАЛИСТЫ<br>ВЫСОКОЙ<br>КВАЛИФИЦИИ
                            <br><img src="/img/worker-icon.svg" width="64" height="64"/>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-2 pt-4" style="background-image: url('/img/tools-bg.jpg'); background-position: center; background-size: cover; height: 250px;">
                        <div class="header-over-pic">МНОЖЕСТВО<br>ЛИЦЕНЗИЙ<br>НА РАЗРАБОТКУ
                            <br><img src="/img/tools-icon.svg" width="64" height="64"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-4">
                    <div class="p-2 pt-4" style="background-image: url('/img/shield-bg.jpg'); background-position: center; background-size: cover; height: 250px;">
                        <div class="header-over-pic">ВЫСОКАЯ СТЕПЕНЬ<br>БЕЗОПАСНОСТИ<br>ТРУДА
                            <br><img src="/img/shield-icon.svg" width="64" height="64"/>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-2 pt-4" style="background-image: url('/img/care-bg.jpg'); background-position: center; background-size: cover; height: 250px;">
                        <div class="header-over-pic">СОЦИАЛЬНАЯ<br>ОТВЕТСТВЕННОСТЬ<br>ЗА СОТРУДНИКОВ
                            <br><img src="/img/care-icon.svg" width="64" height="64"/>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="p-2 pt-4" style="background-image: url('/img/leader-bg.jpg'); background-position: center; background-size: cover; height: 250px;">
                        <div class="header-over-pic">ОДНИ ИЗ<br>ЛИДЕРОВ<br>РЫНКА
                            <br><img src="/img/leader-icon.svg" width="64" height="64"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: #e5e5e5;">
        <div class="container">
            <div class="row py-5">
                <div class="col-7">
                    <div class="header">НАША ДЕЯТЕЛЬНОСТЬ</div>
                    <div class="pt-2 px-0 container">
                        <div class="row">
                            <div class="col-6">
                                <div class="header-tri">2010</div>
                                год основания<br>компании
                            </div>
                            <div class="col-6"><div class="header-tri">3</div>
                                рудника: Маристый, Могот,<br>прииск Дамбуки
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-6">
                                <div class="header-tri">11</div>
                                кг золота, с этого мы начинали,<br>сейчас мы одни из лидеров рынка
                            </div>
                            <div class="col-6"><div class="header-tri">600</div>
                                более 600 профессионалов<br>работают у нас
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-6">
                                <div class="header-tri">35</div>
                                лицензий на разработку<br>приисков
                            </div>
                            <div class="col-6"><div class="header-tri">50</div>
                                более 50% добычи<br>даёт Маристый
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 d-flex justify-content-end">
                    <img src="/img/fp-map.png">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white py-5">
        <div class="container">
            <div class="row pb-3">
                <div class="col-12 header">ПРИИСКИ</div>
            </div>
            <div class="row pb-4">
                <div class="col-4">
                    <div class="p-2 pt-4" style="background-image: url('/img/maristy-pic.jpg'); background-position: center; background-size: cover; height: 250px;"></div>
                    <h2 class="pt-4">ООО МАРИСТЫЙ</h2>
                    С небольшого месторождения на ручье Маристый Тындинского района начиналась деятельность нашей компании, сейчас &mdash; это множество участков, приносящих больше половины всего добытого золота.
                </div>
                <div class="col-4">
                    <div class="p-2 pt-4" style="background-image: url('/img/mogot-pic.jpg'); background-position: center; background-size: cover; height: 250px;"></div>
                    <h2 class="pt-4">ООО МОГОТ</h2>
                    Могот &mdash; второй по значимости прииск компании ХАС ГРУПП в Зейском районе. На данный момент компания имеет 5 лицензий на добычу россыпного золота на этом участке. В планах компании наращивание объёмов и развитие.
                </div>
                <div class="col-4">
                    <div class="p-2 pt-4" style="background-image: url('/img/dambuki-pic.jpg'); background-position: center; background-size: cover; height: 250px;"></div>
                    <h2 class="pt-4">ООО ПРИИСК ДАМБУКИ</h2>
                    Самое молодое подразделение ХАС ГРУПП. Компания приобрела приск в плачевном состоянии. Традиции прииска Дамбуки &mdash; это драги. Ведутся работы по восстановлению участка и техники. Цель: вернуться к пиковым показателям.
                </div>
            </div>
        </div>
    </div>
    <div class="p-0 m-0" style="background-color: #e1230f; height: 3px;"></div>
    <div class="container-fluid bg-white" style="background-image: url('/img/appeal-bg.jpg'); background-position: center; background-size: cover; height: 514px;">
        <div class="container">
            <div class="row">
                <div class="col-6 pe-5 py-5">
                    <div class="header">ОБРАЩЕНИЕ ГЕНЕРАЛЬНОГО</div>
                    <div class="sub-header">ДИРЕКТОРА</div>
                    <div class="pt-2">Сегодня мы одни из лидеров рынка, крупная добывающая компания, объединяющая более 600 профессионалов своего дела. Наша главная ценность &mdash; люди. Компания старается сделать всё, чтобы сотрудник не отвлекался на социальные или иные проблемы. Ведь добыча золото &mdash; это огромный и упорный труд людей и успех компании зависит от старания и эффективности сотрудников. Поэтому компания развивает социальную лояльность, заботится о комфорте и здоровье сотрудников.</div>
                    <div class="pt-3"><span class="float-start justify-content-start"><b>АЙВАЗЯН<br>Ара Владимирович</b></span>
                        <span class="float-end justify-content-end">
                        <img src="/img/signature.png">
                    </span>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end"></div>
            </div>
        </div>
    </div>
@endsection
