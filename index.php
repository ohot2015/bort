<!DOCTYPE html>
<html class="no-js" lang="ru-RU">
  <head>
    <meta name="description" content="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta property="og:url" content="https://site.ru">
    <meta property="og:title" content="">
    <meta property="og:image" content="assets/images/og/og-images.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="640">
    <meta property="og:image:height" content="442">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="Site-name">
    <link rel="canonical" href="https://site.ru">
    <title>Тайтл сайта</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/vendor.min.css">
    <link rel="stylesheet" href="./assets/css/common.min.css">
  </head>
  <body>
    <main class="wrapper">
      <header class="header">
        <div class="header__content">
          <div class="header__wrap">
            <div class="header__left">
              <div class="hero__logo"><img class="hero__img" src="/assets/images/header/header_logo-mart.png" alt="Logo-mart"></div>
            </div>
            <div class="header__right">
              <div class="header__tel"><a class="header__phone"  :href="cleanPhone">{{data_landing.phone}}</a><a class="header__phone-mob" href="tel:333194"><span>(в Йошкар-Оле)</span>{{data_landing.short_phone}}</a></div>
              <div class="header__socials"><a class="socials-link" href="#">vk</a></div>
            </div>
          </div>
        </div>
      </header>
      <section class="hero">
        <div class="hero__content">
          <div class="hero__head">
            <div class="hero__head-name">Реквизиты:</div>
            <ul class="hero__head-list">
              <li class="hero__head-item">
                <div class="hero__head-icon"></div>
                <div class="hero__head-desc">Wmid {{data_landing.WMID}}</div>
              </li>
              <li class="hero__head-item">
                <div class="hero__head-icon"></div>
                <div class="hero__head-desc">{{data_landing.WMZ}}</div>
              </li>
              <li class="hero__head-item">
                <div class="hero__head-icon"></div>
                <div class="hero__head-desc">{{data_landing.WMR}}</div>
              </li>
            </ul>
          </div>
        </div>
        <div class="hero__body">
          <div class="hero__content">
            <ul class="hero__list">
              <li class="hero__item">
                <div class="hero__item-wrap">
                  <h2 class="hero__title">Покупаем</h2>
                  <h3 class="hero__mini-title">1 WMR - {{data_landing.bay_WMR}} руб</h3>
                  <h3 class="hero__mini-title">1 WMZ - {{data_landing.bay_WMZ}} руб</h3>
                  <div class="hero__elem">
                    <div class="hero__elem-text">Вы отдадите</div>
                    <div class="hero__elem-wrap">
                      <input class="hero__elem-inp" type="text">
                      <select class="hero__elem-mini">
                        <option class="label" value="">WMR</option>
                        <option value="1">WMZ</option>
                      </select>
                    </div>
                  </div>
                  <div class="hero__elem">
                    <div class="hero__elem-text">Вы получите</div>
                    <div class="hero__elem-wrap">
                      <input class="hero__elem-inp" type="text"><span class="hero__elem-text hero__elem-text_mini">рублей</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="hero__item">
                <div class="hero__item-wrap">
                  <h2 class="hero__title">Продаём</h2>
                  <h3 class="hero__mini-title">1 WMR - {{data_landing.sale_WMR}} руб</h3>
                  <h3 class="hero__mini-title">1 WMZ - {{data_landing.sale_WMZ}} руб</h3>
                  <div class="hero__elem">
                    <div class="hero__elem-text">Вы отдадите</div>
                    <div class="hero__elem-wrap">
                      <input class="hero__elem-inp" type="text"><span class="hero__elem-text hero__elem-text_mini">рублей</span>
                    </div>
                  </div>
                  <div class="hero__elem">
                    <div class="hero__elem-text">Вы получите</div>
                    <div class="hero__elem-wrap">
                      <input class="hero__elem-inp" type="text">
                      <select class="hero__elem-mini">
                        <option class="label" value="">WMR</option>
                        <option value="1">WMZ</option>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="desc">
        <div class="desc__content">
          <ul class="desc__list">
            <li class="desc__item">
              <ul class="desc__item-list">
                <li class="desc__item-content">
                  <h3 class="desc__title">WMZ и WMR на рубли</h3>
                  <article class="desc__text">
                    <p>Уточнить сумму по телефонам {{data_landing.phone}} и {{data_landing.short_phone}} (в Йошкар-Оле)</p>
                    <p>Перевести необходимые для обмена WMZ на {{data_landing.WMZ}}, WMR на {{data_landing.WMR}}, с кодом протекции и указанием в поле «Примечание» Ф.И.О., серии и номера паспорта, кем и когда выдан. Паспортные данные должны совпадать с указанными при регистрации WMID</p>
                    <p>Предъявить паспорт и сообщить код протекции в магазине «Магистраль» по адресу: ул. Первомайская, 76</p>
                    <p><strong>В СЛУЧАЕ НЕСОВПАДЕНИЯ ДАННЫХ ОПЕРАЦИЯ СОВЕРШЕНА НЕ БУДЕТ</strong></p>
                  </article>
                </li>
                <li class="desc__item-content desc__item-content_right">
                  <h3 class="desc__title">Рубли на WMZ и WMR</h3>
                  <article class="desc__text">
                    <p>Уточнить сумму по телефонам {{data_landing.phone}} и {{data_landing.short_phone}} (в Йошкар-Оле)</p>
                    <p>Оплатить заказ в магазине «Магистраль» по адресу: ул. Первомайская, 76</p>
                    <p>Проверить кошелек через несколько минут после оплаты</p>
                    <p>ПРИ ПОКУПКЕ WMR СВЫШЕ 300 000 рублей ПРЕДОСТАВЛЯЕТСЯ СКИДКА 0,8%</p>
                    <p>ПРИ ПОКУПКЕ WMZ СВЫШЕ 300 000 рублей ПРЕДОСТАВЛЯЕТСЯ СКИДКА 0.8%</p>
                  </article>
                </li>
              </ul>
            </li>
            <li class="desc__item">
              <ul class="desc__item-list">
                <li class="desc__item-content">
                  <h3 class="desc__title">Еще несколько правил</h3>
                  <article class="desc__text">
                    <p>Минимальная комиссия — 100 рублей</p>
                    <p>Комиссия платежных систем при покупке-продаже за счет продавца</p>
                    <p>Для вывода нужен кошелек уровня формального аттестата и выше</p>
                    <p>Кошелек должен быть зарегистрирован на человека, производящего обмен</p>
                  </article>
                </li>
                <li class="desc__item-content desc__item-content_right">
                  <h3 class="desc__title">О нас</h3>
                  <article class="desc__text">
                    <p>Мы оказываем услуги по обмену WMZ и WMR на наличные и наоборот</p>
                    <p>Мы дорожим своей репутацией и заинтересованы в длительном сотрудничестве</p>
                    <p>Мы ни при каких обстоятельствах не сообщаем информацию о клиентах и их операциях третьим лицам, за исключением сотрудников WebMoney</p>
                    <p>Мы гарантируем простоту, скорость и надежность обмена.466958788856Аттестат WebMoney Transfer — гарантия успешной работы с нами</p>
                  </article>
                </li>
              </ul>
            </li>
            <li class="desc__item">
              <ul class="desc__item-list">
                <li class="desc__item-content">
                  <h3 class="desc__title">О рисках</h3>
                  <article class="desc__text">
                    <p>Предлагаемые товары и услуги предоставляются не по заказу лица либо предприятия, эксплуатирующего систему WebMoney Transfer. Мы являемся независимым предприятием, оказывающим услуги, и самостоятельно принимаем решения о ценах и предложениях. Предприятия, эксплуатирующие систему WebMoney Transfer, не получают комиссионных вознаграждений или иных вознаграждений за участие в предоставлении услуг и не несут никакой ответственности за нашу деятельность. Аттестация, произведенная со стороны WebMoney Transfer, лишь подтверждает наши реквизиты для связи и удостоверяет личность. Она осуществляется по нашему желанию и не означает, что мы каким-либо образом связаны с продажами операторов системы WebMoney.</p>
                  </article>
                </li>
                <li class="desc__item-content desc__item-content_right">
                  <h3 class="desc__title">О WebMoney Transfer</h3>
                  <article class="desc__text">
                    <p>Универсальная внебанковская система, позволяющая проводить мгновенные расчеты в сети Интернет. Система открыта для свободного использования всеми желающими и не имеет никаких территориальных ограничений. Средством расчетов в системе служат титульные знаки WebMoney WMZ и WMR.<br>Установив программу WM Keeper, вы сможете совершать платежи мгновенно. Это позволит вам зарабатывать и совершать покупки в интернете, оплачивать услуги сотовой связи и интернет-провайдеров, домен и хостинг, заказывать билеты и подписываться на газеты и журналы, не выходя из дома или офиса.<br>Начать использовать WMT</p>
                  </article>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </section>
      <section class="work">
        <div class="work__content">
          <div class="work__head">
            <h2 class="work__title">Время работы</h2>
            <div class="work__text">
              <p>Магазин «Магистраль», г. Йошкар-Ола, ул. Первомайская, 76 - с с 9:00 до 18:00 (обед c 12:30 до 13:30)</p>
              <p>На выезде - с 18:00 до 00:00</p>
            </div>
          </div>
          <div class="work__map"><img src="/assets/images/work/map.jpg" alt="map"></div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__content">
        <div class="footer__logo"><img class="footer__logo-img" src="/assets/images/footer/footer_logo-mart.png" alt="Logo-Mart"></div>
        <div class="footer__copyrights">
          <p>Ввод и вывод электронных валют</p>
          <p>wmmart.ru 2019</p>
        </div>
      </div>
    </footer>
    <script src="./assets/js/vendor.min.js"></script>
    <script src="./assets/js/common.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
    <script>
      var app = new Vue({
          el: '#app',
          data: {
              data_landing:{}
          },
          computed:{
              cleanPhone(){
                  if (this.data_landing.phone) {
                      return 'tel:'+this.data_landing.phone.replace(/[-+()\s]/g,'')
                  }
                  return ''
              }
          },
          created() {
              fetch("/ajax.php")
                  .then((res)=> {
                    return res.json();
                  })
                  .then((res)=>{
                      this.data_landing = res;
                  })

          }
      })
  </script>
  </body>
</html>