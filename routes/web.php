<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/notes', [App\Http\Controllers\NoteController::class, "index"])->name("index");
Route::get("/notes/{note}", [App\Http\Controllers\NoteController::class, "show"])->name("show");

Route::get("/table", function (){
    $table = '<table>
      <thead>
        <tr>
          <td></td>
            <th>Личный №</th>
            <th>Таб.№</th>
            <th>В/звание</th>
            <th>ФИО</th>
            <th>Дата рождения</th>
            <th>Серия</th>
            <th>Номер</th>
            <th>Паспорта</th>
            <th>Кем выдан</th>
            <th>Дата выдачи</th>
        </tr>
      </thead>
      <tbody>
          <tr id="LC2" class="js-file-line">
            <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
              <td>У-184386</td>
              <td>142204</td>
              <td>Полковник</td>
              <td>Курбанов Андрей Боевич</td>
              <td>07.01.1970</td>
              <td>46</td>
              <td>15</td>
              <td>949409</td>
              <td>ТП № 2 Межрайонный ОУФМС России по Московской области в г.п. Щёлко</td>
              <td>в7/29/2015</td>
          </tr>
          <tr id="LC3" class="js-file-line">
            <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
              <td>Ф-703443</td>
              <td>515338</td>
              <td>Полковник</td>
              <td>Клобуков Вячеслав Сергеевич</td>
              <td>11/19/1978</td>
              <td>80</td>
              <td>1</td>
              <td>142195</td>
              <td>ОКТЯБРЬСКИМ РУВД ГОР.УФЫ РЕСП.БАШКОРТОСТАН</td>
              <td>07.04.2001</td>
          </tr>
          <tr id="LC4" class="js-file-line">
            <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
              <td>Т-194304</td>
              <td>1094720</td>
              <td>Полковник</td>
              <td>Винс Александр Викторович</td>
              <td>1/24/1969</td>
              <td>8</td>
              <td>1</td>
              <td>547363</td>
              <td>Вяземским РОВД Хабаровского края</td>
              <td>6/19/2002</td>
          </tr>
          <tr id="LC5" class="js-file-line">
            <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
              <td>Ф-529191</td>
              <td>1169020</td>
              <td>Полковник</td>
              <td>Шершнев Александр Леонидович</td>
              <td>1/14/1978</td>
              <td>38</td>
              <td>2</td>
              <td>634927</td>
              <td>Отдел милиции № 4 УВД г.Курска</td>
              <td>8/16/2002</td>
          </tr>
          <tr id="LC6" class="js-file-line">
            <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
              <td>Х-296449</td>
              <td>543857</td>
              <td>Подполковник</td>
              <td>Ветров Сергей Александрович</td>
              <td>9/25/1982</td>
              <td>68</td>
              <td>4</td>
              <td>36337</td>
              <td>Сампурским РОВД Тамбовской области</td>
              <td>8/14/2003</td>
          </tr>
          <tr id="LC7" class="js-file-line">
            <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
              <td>Ф-052935</td>
              <td>600256</td>
              <td>Подполковник</td>
              <td>Митяев Руслан Овсепович</td>
              <td>10/30/1978</td>
              <td>60</td>
              <td>2</td>
              <td>284996</td>
              <td>ПВС УВД г. Новочеркасска Ростовской области</td>
              <td>1/29/2002</td>
          </tr>
          <tr id="LC8" class="js-file-line">
            <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
              <td>У-639041</td>
              <td>792430</td>
              <td>Подполковник</td>
              <td>Ермишко Андрей Николаевич</td>
              <td>05.11.1972</td>
              <td>12</td>
              <td>2</td>
              <td>583493</td>
              <td>ОТДЕЛОМ ВНУТРЕННИХ ДЕЛ ГОРОДА ЗНАМЕНСКА АСТРАХАНСКОЙ ОБЛАСТ</td>
              <td>И1/1/2011</td>
          </tr>
          <tr id="LC9" class="js-file-line">
            <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
              <td>У-874515</td>
              <td>793342</td>
              <td>Подполковник</td>
              <td>Платоненков Максим Алексеевич</td>
              <td>03.01.1980</td>
              <td>50</td>
              <td>3</td>
              <td>593303</td>
              <td>УВД Октябрьского района г.Новосибирска</td>
              <td>11/13/2002</td>
          </tr>
          <tr id="LC10" class="js-file-line">
            <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
              <td>Ф-594713</td>
              <td>820199</td>
              <td>Подполковник</td>
              <td>Матафонов Владимир Викторович</td>
              <td>05.09.1979</td>
              <td>76</td>
              <td>0</td>
              <td>562816</td>
              <td>ОВД БАЛЕЙСКОГО РАЙОНА ЧИТИНСКОЙ ОБЛАСТИ</td>
              <td>8/13/2002</td>
          </tr>
          <tr id="LC11" class="js-file-line">
            <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
              <td>Ф-620752</td>
              <td>851114</td>
              <td>Подполковник</td>
              <td>Львов Дмитрий Иванович</td>
              <td>8/15/1975</td>
              <td>76</td>
              <td>3</td>
              <td>794013</td>
              <td>ОВД Борзинского района Читинской области</td>
              <td>5/15/2003</td>
          </tr>
          <tr id="LC12" class="js-file-line">
            <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
              <td>У-853407</td>
              <td>878624</td>
              <td>Подполковник</td>
              <td>Ладыженский Евгений Валерьевич</td>
              <td>01.01.1977</td>
              <td>81</td>
              <td>3</td>
              <td>551489</td>
              <td>ОВД Кяхтинского р-на респ. Бурятия</td>
              <td>3/18/2003</td>
          </tr>
          <tr id="LC13" class="js-file-line">
            <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
              <td>Ф-620770</td>
              <td>895133</td>
              <td>Подполковник</td>
              <td>Пахандрин Дмитрий Викторович</td>
              <td>9/19/1976</td>
              <td>4</td>
              <td>2</td>
              <td>274319</td>
              <td>ОВД Козульского района Красноярского края</td>
              <td>8/15/2002</td>
          </tr>
          <tr id="LC14" class="js-file-line">
            <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
              <td>Ф-607350</td>
              <td>1077435</td>
              <td>Подполковник</td>
              <td>Шипицын Анатолий Александрович</td>
              <td>12.09.1977</td>
              <td>53</td>
              <td>1</td>
              <td>903199</td>
              <td>ОВД Тоцкого р-на Оренбургской обл.</td>
              <td>11/28/2001</td>
          </tr>
          <tr id="LC15" class="js-file-line">
            <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
              <td>Ф-624703</td>
              <td>1083175</td>
              <td>Подполковник</td>
              <td>Деев Денис Николаевич</td>
              <td>7/30/1977</td>
              <td>90</td>
              <td>2</td>
              <td>427497</td>
              <td>ОВД Промышленного муницип.округа г.Владикавказ</td>
              <td>02.01.2003</td>
          </tr>
          <tr id="LC16" class="js-file-line">
            <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
              <td>Ф-584921</td>
              <td>1083638</td>
              <td>Подполковник</td>
              <td>Бухвалов Олег Юрьевич</td>
              <td>5/20/1979</td>
              <td>18</td>
              <td>4</td>
              <td>68726</td>
              <td>УВД г.Камышин Волгоградской области</td>
              <td>09.04.2003</td>
          </tr>
          <tr id="LC17" class="js-file-line">
            <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
              <td>Ф-670103</td>
              <td>1088632</td>
              <td>Подполковник</td>
              <td>Смоляго Дмитрий Александрович</td>
              <td>12/27/1976</td>
              <td>27</td>
              <td>2</td>
              <td>603048</td>
              <td>ОВД Ленинградского р-на г.Калининграда</td>
              <td>1/15/2003</td>
          </tr>
          <tr id="LC18" class="js-file-line">
            <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
              <td>У-053364</td>
              <td>1088961</td>
              <td>Подполковник</td>
              <td>Большаков Алексей Вячеславович</td>
              <td>3/15/1976</td>
              <td>8</td>
              <td>2</td>
              <td>576504</td>
              <td>2 ОМ УВД Индустриального р-на г.Хабаровска</td>
              <td>04.02.2002</td>
          </tr>
          <tr id="LC19" class="js-file-line">
            <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
              <td>У-874071</td>
              <td>1090726</td>
              <td>Подполковник</td>
              <td>Надеждин Роман Владимирович</td>
              <td>7/21/1977</td>
              <td>10</td>
              <td>2</td>
              <td>570526</td>
              <td>Слободненским ГОВД Амурской области</td>
              <td>03.11.2003</td>
          </tr>
          <tr id="LC20" class="js-file-line">
            <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
              <td>У-721933</td>
              <td>1095213</td>
              <td>Подполковник</td>
              <td>Филиппов Виктор Владимирович</td>
              <td>10/27/1972</td>
              <td>5</td>
              <td>2</td>
              <td>898734</td>
              <td>Ханкайским РОВД Приморского края</td>
              <td>5/27/2002</td>
          </tr>
          <tr id="LC21" class="js-file-line">
            <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
              <td>У-268196</td>
              <td>802348</td>
              <td>Майор</td>
              <td>Мамедов Фаик Самеддин оглы</td>
              <td>11/24/1978</td>
              <td>99</td>
              <td>2</td>
              <td>119102</td>
              <td>Ленинским РОВД ЕАО</td>
              <td>1/14/2003</td>
          </tr>
          <tr id="LC22" class="js-file-line">
            <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
              <td>Ф-590468</td>
              <td>845762</td>
              <td>Майор</td>
              <td>Федотов Игорь Евгеньевич</td>
              <td>09.12.1980</td>
              <td>66</td>
              <td>2</td>
              <td>516592</td>
              <td>Промышленным РОВД г. Смоленска</td>
              <td>5/21/2002</td>
          </tr>
          <tr id="LC23" class="js-file-line">
            <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
              <td>Ф-511236</td>
              <td>949685</td>
              <td>Майор</td>
              <td>Кулемин Герман Николаевич</td>
              <td>3/29/1982</td>
              <td>67</td>
              <td>2</td>
              <td>594036</td>
              <td>Березовским РОВД Ханты-Мансийского ОА Тюменской области</td>
              <td>08.12.2002</td>
          </tr>
          <tr id="LC24" class="js-file-line">
            <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
              <td>У-874622</td>
              <td>1083746</td>
              <td>Майор</td>
              <td>Бурдо Роман Викторович</td>
              <td>11/26/1980</td>
              <td>10</td>
              <td>3</td>
              <td>651875</td>
              <td>УВД Г. БЛАГОВЕЩЕНСКА</td>
              <td>05.06.2003</td>
          </tr>
          <tr id="LC25" class="js-file-line">
            <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
              <td>Ф-764059</td>
              <td>1088985</td>
              <td>Майор</td>
              <td>Козлов Дмитрий Аркадьевич</td>
              <td>11.10.1978</td>
              <td>8</td>
              <td>1</td>
              <td>272127</td>
              <td>2 ОМ УВД Индустриального р-на г.Хабаровска</td>
              <td>7/19/2001</td>
          </tr>
          <tr id="LC26" class="js-file-line">
            <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
              <td>У-268961</td>
              <td>1091451</td>
              <td>Майор</td>
              <td>Куркин Иван Александрович</td>
              <td>1/17/1982</td>
              <td>8</td>
              <td>4</td>
              <td>232754</td>
              <td>ОВД Центрального р-на г.Хабаровска</td>
              <td>2/16/2004</td>
          </tr>
          <tr id="LC27" class="js-file-line">
            <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
              <td>Ф-714332</td>
              <td>1092162</td>
              <td>Майор</td>
              <td>Важенов Евгений Юрьевич</td>
              <td>1/27/1985</td>
              <td>10</td>
              <td>5</td>
              <td>944897</td>
              <td>ОВД г.Белогорска и Белогорского района Амурской области</td>
              <td>05.04.2006</td>
          </tr>
          <tr id="LC28" class="js-file-line">
            <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
              <td>Т-609692</td>
              <td>1093778</td>
              <td>Майор</td>
              <td>Ионов Дмитрий Юлианович</td>
              <td>03.07.1965</td>
              <td>10</td>
              <td>5</td>
              <td>724322</td>
              <td>Среднебельским ОМ Ивановской обл.</td>
              <td>09.04.2003</td>
          </tr>
          <tr id="LC29" class="js-file-line">
            <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
              <td>У-729874</td>
              <td>1093786</td>
              <td>Майор</td>
              <td>Кочергин Александр Анатольевич</td>
              <td>10.12.1971</td>
              <td>8</td>
              <td>3</td>
              <td>940939</td>
              <td>2 ОМ УВД Индустриального р-на г.Хабаровска</td>
              <td>2/21/2003</td>
          </tr>
          <tr id="LC30" class="js-file-line">
            <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
              <td>Ф-558134</td>
              <td>1094262</td>
              <td>Майор</td>
              <td>Копылов Александр Владимирович</td>
              <td>9/29/1980</td>
              <td>73</td>
              <td>1</td>
              <td>420589</td>
              <td>УВД Ленинского района г.Ульяновска</td>
              <td>04.11.2001</td>
          </tr>
          <tr id="LC31" class="js-file-line">
            <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
              <td>Х-097824</td>
              <td>1094540</td>
              <td>Майор</td>
              <td>Чернышев Максим Владимирович</td>
              <td>08.10.1980</td>
              <td>8</td>
              <td>10</td>
              <td>999451</td>
              <td>ОУФМС Росии по Хабаровскому краю в Хабаровском районе</td>
              <td>06.08.2011</td>
          </tr>
          <tr id="LC32" class="js-file-line">
            <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
              <td>Х-246187</td>
              <td>1095194</td>
              <td>Майор</td>
              <td>Макаров Станислав Игорьевич</td>
              <td>8/16/1982</td>
              <td>8</td>
              <td>10</td>
              <td>953377</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном р-не г.Хаб</td>
              <td>09.06.2010</td>
          </tr>
          <tr id="LC33" class="js-file-line">
            <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
              <td>Х-296532</td>
              <td>1095611</td>
              <td>Майор</td>
              <td>Иванов Андрей Николаевич</td>
              <td>2/26/1981</td>
              <td>28</td>
              <td>1</td>
              <td>493476</td>
              <td>Пролетарским РОВД г.Твери</td>
              <td>2/21/2002</td>
          </tr>
          <tr id="LC34" class="js-file-line">
            <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
              <td>У-268456</td>
              <td>1100141</td>
              <td>Майор</td>
              <td>Перешивкин Сергей Геннадьевич</td>
              <td>1/19/1973</td>
              <td>8</td>
              <td>4</td>
              <td>277244</td>
              <td>2 отделением милиции УВД Индустриального района города Хабаровска</td>
              <td>02.12.2004</td>
          </tr>
          <tr id="LC35" class="js-file-line">
            <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
              <td>У-360702</td>
              <td>1100633</td>
              <td>Майор</td>
              <td>Прысев Алексей Владимирович</td>
              <td>11/25/1975</td>
              <td>5</td>
              <td>1</td>
              <td>704733</td>
              <td>Ханкайским РОВД Приморского края</td>
              <td>3/20/2002</td>
          </tr>
          <tr id="LC36" class="js-file-line">
            <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
              <td>У-268570</td>
              <td>1100637</td>
              <td>Майор</td>
              <td>Руденко Сергей Викторович</td>
              <td>07.10.1975</td>
              <td>8</td>
              <td>1</td>
              <td>524291</td>
              <td>Отделом внутренних дел Хабароского р-на Хабаровского края</td>
              <td>3/14/2002</td>
          </tr>
          <tr id="LC37" class="js-file-line">
            <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
              <td>Ф-142685</td>
              <td>1102882</td>
              <td>Майор</td>
              <td>Хаменок Ольга Александровна</td>
              <td>12/14/1981</td>
              <td>60</td>
              <td>4</td>
              <td>190824</td>
              <td>ПВС УВД г.Новочеркасска Ростовской области</td>
              <td>10.10.2003</td>
          </tr>
          <tr id="LC38" class="js-file-line">
            <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
              <td>У-268857</td>
              <td>1103126</td>
              <td>Майор</td>
              <td>Левин Дмитрий Геннадьевич</td>
              <td>10/25/1982</td>
              <td>8</td>
              <td>4</td>
              <td>98883</td>
              <td>2 ОМ УВД Индустриального р-на, г. Хабаровска</td>
              <td>6/30/2003</td>
          </tr>
          <tr id="LC39" class="js-file-line">
            <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
              <td>У-265899</td>
              <td>1103591</td>
              <td>Майор</td>
              <td>Гончар Дмитрий Алексеевич</td>
              <td>1/31/1970</td>
              <td>8</td>
              <td>2</td>
              <td>562844</td>
              <td>ОВД ЦО г.Комсомольска-на-Амуре</td>
              <td>5/27/2002</td>
          </tr>
          <tr id="LC40" class="js-file-line">
            <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
              <td>Х-115531</td>
              <td>1166487</td>
              <td>Майор</td>
              <td>Зорин Сергей Сергеевич</td>
              <td>10/25/1982</td>
              <td>75</td>
              <td>3</td>
              <td>78809</td>
              <td>УВД г. Копейска Челябинской области.</td>
              <td>02.03.2003</td>
          </tr>
          <tr id="LC41" class="js-file-line">
            <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
              <td>Х-078567</td>
              <td>1170231</td>
              <td>Майор</td>
              <td>Потапов Александр Александрович</td>
              <td>05.08.1981</td>
              <td>66</td>
              <td>3</td>
              <td>808655</td>
              <td>Промышленным РОВД г.Смоленска</td>
              <td>4/29/2003</td>
          </tr>
          <tr id="LC42" class="js-file-line">
            <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
              <td>Ф-594680</td>
              <td>1194779</td>
              <td>Майор</td>
              <td>Григоров Степан Викторович</td>
              <td>3/26/1979</td>
              <td>81</td>
              <td>10</td>
              <td>342164</td>
              <td>ОУФМС по республике Бурятия в Кяхтинском р-не</td>
              <td>09.07.2010</td>
          </tr>
          <tr id="LC43" class="js-file-line">
            <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
              <td>Ф-866954</td>
              <td>2737869</td>
              <td>Майор</td>
              <td>Мосалев Сергей Викторович</td>
              <td>1/19/1978</td>
              <td>8</td>
              <td>2</td>
              <td>688231</td>
              <td>ОВД Хабаровского района Хабаровского края</td>
              <td>10/19/2015</td>
          </tr>
          <tr id="LC44" class="js-file-line">
            <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
              <td>Ф-879492</td>
              <td>3102560</td>
              <td>Майор</td>
              <td>Луцак Валентин Павлович</td>
              <td>05.04.1979</td>
              <td>50</td>
              <td>4</td>
              <td>572078</td>
              <td>ОВД КАРГАТСКОГО РАЙОНА НОВОСИБИРСКОЙ ОБЛАСТИ</td>
              <td>8/28/2004</td>
          </tr>
          <tr id="LC45" class="js-file-line">
            <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
              <td>У-268030</td>
              <td>3127462</td>
              <td>Майор</td>
              <td>Борисенко Сергей Николаевич</td>
              <td>3/15/1978</td>
              <td>5</td>
              <td>3</td>
              <td>357858</td>
              <td>Краскинским отделением милиции Хасанского РОВД Приморского края</td>
              <td>1/30/2003</td>
          </tr>
          <tr id="LC46" class="js-file-line">
            <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
              <td>Х-266260</td>
              <td>795612</td>
              <td>Капитан</td>
              <td>Воробьев Виктор Александрович</td>
              <td>4/22/1986</td>
              <td>92</td>
              <td>5</td>
              <td>790593</td>
              <td>ОВД Агрызского района республики Татарстан</td>
              <td>5/17/2006</td>
          </tr>
          <tr id="LC47" class="js-file-line">
            <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
              <td>Х-584219</td>
              <td>802420</td>
              <td>Капитан</td>
              <td>Бережной Сергей Александрович</td>
              <td>8/25/1988</td>
              <td>3</td>
              <td>9</td>
              <td>243845</td>
              <td>ОТделом УФМС России по Краснодарскому краю в Темрюкском районе</td>
              <td>07.10.2009</td>
          </tr>
          <tr id="LC48" class="js-file-line">
            <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
              <td>Ф-963144</td>
              <td>966504</td>
              <td>Капитан</td>
              <td>Романов Михаил Владимирович</td>
              <td>4/13/1978</td>
              <td>81</td>
              <td>10</td>
              <td>372979</td>
              <td>ТП УФМС РОССИИ ПО Р.БУРЯТИЯ В ОКТЯБРЬСКОМ РАЙОНЕ Г.УЛАН-УДЭ</td>
              <td>11/30/2015</td>
          </tr>
          <tr id="LC49" class="js-file-line">
            <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
              <td>У-268218</td>
              <td>1088626</td>
              <td>Капитан</td>
              <td>Николаев Валерий Николаевич</td>
              <td>12.03.1978</td>
              <td>45</td>
              <td>4</td>
              <td>71108</td>
              <td>ОВД Даниловский г.Москвы</td>
              <td>10.05.2002</td>
          </tr>
          <tr id="LC50" class="js-file-line">
            <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
              <td>Ф-594708</td>
              <td>1090721</td>
              <td>Капитан</td>
              <td>Мартынов Евгений Владимирович</td>
              <td>3/28/1978</td>
              <td>10</td>
              <td>2</td>
              <td>461295</td>
              <td>ОВД Ромненского р-на Амурской области</td>
              <td>10/21/2002</td>
          </tr>
          <tr id="LC51" class="js-file-line">
            <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
              <td>Т-969778</td>
              <td>1095199</td>
              <td>Капитан</td>
              <td>Полоротов Андрей Анатольевич</td>
              <td>7/27/1969</td>
              <td>8</td>
              <td>4</td>
              <td>192314</td>
              <td>2 ОМ УВД Индустриального р-на г.Хабаровска</td>
              <td>9/18/2003</td>
          </tr>
          <tr id="LC52" class="js-file-line">
            <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
              <td>У-956981</td>
              <td>1103430</td>
              <td>Капитан</td>
              <td>Магжанов Евгений Алексеевич</td>
              <td>01.10.1979</td>
              <td>8</td>
              <td>12</td>
              <td>103733</td>
              <td>КРАСНОФЛОТСКИМ РОВД Г.ХАБАРОВСКА</td>
              <td>04.01.2010</td>
          </tr>
          <tr id="LC53" class="js-file-line">
            <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
              <td>Ф-815125</td>
              <td>1103445</td>
              <td>Капитан</td>
              <td>Киселёв Аркадий Владимирович</td>
              <td>07.12.1979</td>
              <td>8</td>
              <td>4</td>
              <td>251493</td>
              <td>УВД Индустриального р-на гор. Хабаровска</td>
              <td>12.09.2003</td>
          </tr>
          <tr id="LC54" class="js-file-line">
            <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
              <td>Э-676568</td>
              <td>1169548</td>
              <td>Капитан</td>
              <td>КРЯЧИК ИЛЬЯ АЛЕКСАНДРОВИЧ</td>
              <td>10/13/1986</td>
              <td>10</td>
              <td>7</td>
              <td>51755</td>
              <td>МО УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В ГОРОДЕ БЛАГОВЕЩЕНСКЕ</td>
              <td>9/18/2007</td>
          </tr>
          <tr id="LC55" class="js-file-line">
            <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
              <td>Х-128397</td>
              <td>1173659</td>
              <td>Капитан</td>
              <td>Фадеев Андрей Николаевич</td>
              <td>10.05.1982</td>
              <td>73</td>
              <td>3</td>
              <td>992023</td>
              <td>УВД Заволжского района г. Ульяновск</td>
              <td>10.02.2003</td>
          </tr>
          <tr id="LC56" class="js-file-line">
            <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
              <td>Х-476204</td>
              <td>2502310</td>
              <td>Капитан</td>
              <td>Акперов Роман Магсуд-оглы</td>
              <td>8/31/1985</td>
              <td>45</td>
              <td>8</td>
              <td>581552</td>
              <td>ОВД Люблино г.Москва</td>
              <td>06.01.2006</td>
          </tr>
          <tr id="LC57" class="js-file-line">
            <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
              <td>У-443576</td>
              <td>2810595</td>
              <td>Капитан</td>
              <td>Стройков Эдуард Викторович</td>
              <td>12.12.1972</td>
              <td>8</td>
              <td>2</td>
              <td>698578</td>
              <td>2ОМ УВД Индустриальный р-н г. Хабаровск</td>
              <td>7/18/2002</td>
          </tr>
          <tr id="LC58" class="js-file-line">
            <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
              <td>У-874596</td>
              <td>2973542</td>
              <td>Капитан</td>
              <td>Байбеков Константин Шамильевич</td>
              <td>4/29/1981</td>
              <td>10</td>
              <td>3</td>
              <td>651852</td>
              <td>УВД Г.БЛАГОВЕЩЕНСКА</td>
              <td>05.06.2003</td>
          </tr>
          <tr id="LC59" class="js-file-line">
            <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
              <td>У-874485</td>
              <td>2976472</td>
              <td>Капитан</td>
              <td>Медяник Андрей Сергеевич</td>
              <td>9/18/1980</td>
              <td>96</td>
              <td>3</td>
              <td>435268</td>
              <td>ОВД НАУРСКОГО РАЙОНА ЧЕЧЕНСКОЙ РЕСПУБЛИКИ</td>
              <td>05.08.2003</td>
          </tr>
          <tr id="LC60" class="js-file-line">
            <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
              <td>Ф-764253</td>
              <td>3148739</td>
              <td>Капитан</td>
              <td>Абрамов Алексей Николаевич</td>
              <td>01.06.1977</td>
              <td>64</td>
              <td>2</td>
              <td>341927</td>
              <td>ОВД КУРИЛЬСКОГО РАЙОНА САХАЛИНСКОЙ ОБЛАСТИ</td>
              <td>7/29/2003</td>
          </tr>
          <tr id="LC61" class="js-file-line">
            <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
              <td>Х-420157</td>
              <td>3275323</td>
              <td>Капитан</td>
              <td>Бреднихин Андрей Сергеевич</td>
              <td>12/17/1983</td>
              <td>1</td>
              <td>4</td>
              <td>401738</td>
              <td>ОВД Завьяловского района Алтайского края</td>
              <td>8/20/2004</td>
          </tr>
          <tr id="LC62" class="js-file-line">
            <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
              <td>У-987546</td>
              <td>3347562</td>
              <td>Капитан</td>
              <td>Прихожий Михаил Иванович</td>
              <td>01.05.1979</td>
              <td>52</td>
              <td>17</td>
              <td>667149</td>
              <td>ОУФМС России по Омской области в Октябрьском административном окру</td>
              <td>г8/12/2017</td>
          </tr>
          <tr id="LC63" class="js-file-line">
            <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
              <td>У-874708</td>
              <td>3383871</td>
              <td>Капитан</td>
              <td>Кирилюк Дмитрий Николаевич</td>
              <td>07.01.1981</td>
              <td>8</td>
              <td>13</td>
              <td>151322</td>
              <td>ОУ ФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>4/24/2013</td>
          </tr>
          <tr id="LC64" class="js-file-line">
            <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
              <td>Х-452455</td>
              <td>793435</td>
              <td>Старший лейтенант</td>
              <td>Ендовицкий Дмитрий Владимирович</td>
              <td>7/22/1979</td>
              <td>20</td>
              <td>11</td>
              <td>423942</td>
              <td>ОУФМС РОССИИ ПО ВОРОНЕЖСКОЙ ОБЛАСТИ В БОГУЧАРСКОМ РАЙОНЕ</td>
              <td>12/31/2014</td>
          </tr>
          <tr id="LC65" class="js-file-line">
            <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
              <td>Э-929815</td>
              <td>806363</td>
              <td>Старший лейтенант</td>
              <td>Воеводин Александр Михайлович</td>
              <td>1/18/1997</td>
              <td>15</td>
              <td>9</td>
              <td>792493</td>
              <td>Межрайонным отделом УФМС России по Брянской области в пос.Локоть</td>
              <td>08.04.2009</td>
          </tr>
          <tr id="LC66" class="js-file-line">
            <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
              <td>Э-931114</td>
              <td>966419</td>
              <td>Старший лейтенант</td>
              <td>Алентьев Александр Николаевич</td>
              <td>11.12.1984</td>
              <td>8</td>
              <td>14</td>
              <td>291189</td>
              <td>ОТДЕЛОМ ВНУТРЕННИХ ДЕЛ КОСТРОМСКОГО РАЙОНА КОСТРОМСКОЙ ОБЛ</td>
              <td>01.01.2015</td>
          </tr>
          <tr id="LC67" class="js-file-line">
            <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
              <td>У-258137</td>
              <td>1101187</td>
              <td>Старший лейтенант</td>
              <td>Овчаренко Иван Сергеевич</td>
              <td>5/27/1984</td>
              <td>10</td>
              <td>9</td>
              <td>145310</td>
              <td>МО УФМС России по Амурской области в г.Благовещенске</td>
              <td>04.08.2009</td>
          </tr>
          <tr id="LC68" class="js-file-line">
            <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
              <td>Х-811649</td>
              <td>1169018</td>
              <td>Старший лейтенант</td>
              <td>Шереметьев Илья Николаевич</td>
              <td>2/28/1988</td>
              <td>8</td>
              <td>8</td>
              <td>768237</td>
              <td>отделением УФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>08.01.2008</td>
          </tr>
          <tr id="LC69" class="js-file-line">
            <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
              <td>Э-609323</td>
              <td>1593129</td>
              <td>Старший лейтенант</td>
              <td>Деготь Дмитрий Сергеевич</td>
              <td>3/28/1990</td>
              <td>8</td>
              <td>10</td>
              <td>948312</td>
              <td>Отделение УФМС России по Хабаровскому краю в Индустриальном районе</td>
              <td> 12/31/2008</td>
          </tr>
          <tr id="LC70" class="js-file-line">
            <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
              <td>Э-522068</td>
              <td>1905821</td>
              <td>Старший лейтенант</td>
              <td>Демидов Дмитрий Сергеевич</td>
              <td>12/17/1990</td>
              <td>61</td>
              <td>9</td>
              <td>592662</td>
              <td>ТП УФМС России по Рязанской области в Старожиловском районе</td>
              <td>2/18/2010</td>
          </tr>
          <tr id="LC71" class="js-file-line">
            <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
              <td>Х-528319</td>
              <td>1943800</td>
              <td>Старший лейтенант</td>
              <td>Страдаев Артем Александрович</td>
              <td>5/21/1989</td>
              <td>63</td>
              <td>9</td>
              <td>361529</td>
              <td>ТП УФМС России по Саратовской области в Турковском районе</td>
              <td>6/22/2013</td>
          </tr>
          <tr id="LC72" class="js-file-line">
            <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
              <td>Х-476276</td>
              <td>2658589</td>
              <td>Старший лейтенант</td>
              <td>Кержаев Кирилл Васильевич</td>
              <td>08.06.1984</td>
              <td>8</td>
              <td>12</td>
              <td>119685</td>
              <td>ОУФМС России по Хабаровскому краю В ИНДУСТРИАЛЬНОМ РАЙОНЕ Г.ХАБ</td>
              <td>А11/26/2012</td>
          </tr>
          <tr id="LC73" class="js-file-line">
            <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
              <td>Ф-530033</td>
              <td>2973545</td>
              <td>Старший лейтенант</td>
              <td>Кибукевич Сергей Владимирович</td>
              <td>7/23/1978</td>
              <td>8</td>
              <td>4</td>
              <td>45187</td>
              <td>УПРАВЛЕНИЕ ВНУТРЕННИХ ДЕЛ ЖЕЛЕЗНОДОРОЖНОГО РАЙОНА ГОРОДА ХА</td>
              <td>06.11.2003</td>
          </tr>
          <tr id="LC74" class="js-file-line">
            <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
              <td>Х-909338</td>
              <td>3136411</td>
              <td>Старший лейтенант</td>
              <td>Таскаев Максим Григорьевич</td>
              <td>7/18/1985</td>
              <td>50</td>
              <td>5</td>
              <td>886828</td>
              <td>УВД ОКТЯБРЬСКОГО РАЙОНА Г.НОВОСИБИРСКА</td>
              <td>11/28/2005</td>
          </tr>
          <tr id="LC75" class="js-file-line">
            <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
              <td>Э-764012</td>
              <td>600991</td>
              <td>Лейтенант</td>
              <td>Джамиев Адлан Абдулхусаинович</td>
              <td>12.03.1984</td>
              <td>96</td>
              <td>4</td>
              <td>805785</td>
              <td>ОВД Грозненского р-на Чеченской республики</td>
              <td>2/24/2005</td>
          </tr>
          <tr id="LC76" class="js-file-line">
            <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
              <td>Ю-776310</td>
              <td>1928854</td>
              <td>Лейтенант</td>
              <td>Штанский Артем Михайлович</td>
              <td>01.04.1989</td>
              <td>10</td>
              <td>9</td>
              <td>154913</td>
              <td>МО УФМС России по Амурской области в г. Благовещенск</td>
              <td>5/25/2013</td>
          </tr>
          <tr id="LC77" class="js-file-line">
            <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
              <td>МТ-127678</td>
              <td>2479193</td>
              <td>Лейтенант</td>
              <td>Погребенко Оксана Хасиевна</td>
              <td>09.12.1988</td>
              <td>83</td>
              <td>11</td>
              <td>72400</td>
              <td>ОУФМС России по Кабардино-Балкарской республике в Прохладненском р-</td>
              <td>7/15/2011</td>
          </tr>
          <tr id="LC78" class="js-file-line">
            <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
              <td>МТ-127997</td>
              <td>2480174</td>
              <td>Лейтенант</td>
              <td>Михеев Андрей Александрович</td>
              <td>3/27/1983</td>
              <td>8</td>
              <td>4</td>
              <td>94847</td>
              <td>Вязмским РОВД Хабаровского края</td>
              <td>6/25/2003</td>
          </tr>
          <tr id="LC79" class="js-file-line">
            <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
              <td>Х-674743</td>
              <td>3024979</td>
              <td>Лейтенант</td>
              <td>Артушев Кайрат Айдарович</td>
              <td>11/20/1991</td>
              <td>32</td>
              <td>11</td>
              <td>93745</td>
              <td>ОУФМС России по Кемеровской облати в Ленинградском районе г. Кемеро</td>
              <td>в12/27/2011</td>
          </tr>
          <tr id="LC80" class="js-file-line">
            <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
              <td>У-871514</td>
              <td>3127459</td>
              <td>Лейтенант</td>
              <td>Кручинко Андрей Александрович</td>
              <td>05.03.1984</td>
              <td>10</td>
              <td>11</td>
              <td>292214</td>
              <td>МО УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г.БЛАГОВЕЩЕНСКЕ</td>
              <td>2/15/2012</td>
          </tr>
          <tr id="LC81" class="js-file-line">
            <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
              <td>ЕХ-755865</td>
              <td>3149648</td>
              <td>Лейтенант</td>
              <td>Путунин Суркун Андреевич</td>
              <td>12/13/1991</td>
              <td>84</td>
              <td>11</td>
              <td>301655</td>
              <td>ТП ОУФМС России по Республике Алтай в Онгудайском районе</td>
              <td>01.12.2012</td>
          </tr>
          <tr id="LC82" class="js-file-line">
            <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
              <td>МТ-219265</td>
              <td>3435371</td>
              <td>Лейтенант</td>
              <td>Чувилин Андрей Алексеевич</td>
              <td>6/22/1994</td>
              <td>30</td>
              <td>14</td>
              <td>523517</td>
              <td>ОУФМС России по Камчатскому краю в Елизовском р-не</td>
              <td>07.10.2014</td>
          </tr>
          <tr id="LC83" class="js-file-line">
            <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
              <td>Э-049686</td>
              <td>3438479</td>
              <td>Лейтенант</td>
              <td>Зиатдинов Дамир Искандерович</td>
              <td>5/13/1996</td>
              <td>92</td>
              <td>16</td>
              <td>96661</td>
              <td>ОУФМС России по республике Татарстан в Приволжском р-не г. Казани</td>
              <td>7/13/2016</td>
          </tr>
          <tr id="LC84" class="js-file-line">
            <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
              <td>Э-049683</td>
              <td>3439004</td>
              <td>Лейтенант</td>
              <td>Закиев Артур Русланович</td>
              <td>2/15/1995</td>
              <td>92</td>
              <td>14</td>
              <td>770200</td>
              <td>ОУФМС России по республике Татарстан в Высокогорском р-не</td>
              <td>07.07.2015</td>
          </tr>
          <tr id="LC85" class="js-file-line">
            <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
              <td>Ф-700825</td>
              <td>1083086</td>
              <td>Старший прапорщик</td>
              <td>Петрова Ирина Валерьевна</td>
              <td>9/23/1976</td>
              <td>8</td>
              <td>1</td>
              <td>194337</td>
              <td>УВД Центрального р-на г.Хабаровска</td>
              <td>4/26/2001</td>
          </tr>
          <tr id="LC86" class="js-file-line">
            <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
              <td>Ф-705209</td>
              <td>1083611</td>
              <td>Старший прапорщик</td>
              <td>Шурыгин Алексей Юрьевич</td>
              <td>6/14/1979</td>
              <td>5</td>
              <td>3</td>
              <td>486127</td>
              <td>Ольгинским РОВД Приморского края</td>
              <td>5/20/2003</td>
          </tr>
          <tr id="LC87" class="js-file-line">
            <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
              <td>Ф-700850</td>
              <td>1083769</td>
              <td>Старший прапорщик</td>
              <td>Гоман Михаил Петрович</td>
              <td>11.10.1969</td>
              <td>8</td>
              <td>2</td>
              <td>606475</td>
              <td>2 ОТДЕЛЕНИЕМ МИЛИЦИИ УВД ИНДУСТРИАЛЬНОГО Р-НА ГОР. ХАБАРОВСК</td>
              <td>А5/21/2002</td>
          </tr>
          <tr id="LC88" class="js-file-line">
            <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
              <td>Ф-700571</td>
              <td>1083791</td>
              <td>Старший прапорщик</td>
              <td>Дубров Вячеслав Сергеевич</td>
              <td>11/28/1981</td>
              <td>10</td>
              <td>3</td>
              <td>847844</td>
              <td>ОТДЕЛОМ ВНУТРЕННИХ ДЕЛ СЕРЫШЕВСКОГО РАЙОНА АМУРСКОЙ ОБЛАСТ</td>
              <td>И5/21/2004</td>
          </tr>
          <tr id="LC89" class="js-file-line">
            <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
              <td>Ф-700880</td>
              <td>1083795</td>
              <td>Старший прапорщик</td>
              <td>Иванова Жанна Николаевна</td>
              <td>5/27/1971</td>
              <td>8</td>
              <td>16</td>
              <td>377123</td>
              <td>ОУФМС России по Хабаровскому краю и ЕАО в Индустриальном районе г. Х</td>
              <td>а6/14/2016</td>
          </tr>
          <tr id="LC90" class="js-file-line">
            <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
              <td>Ф-712230</td>
              <td>1083801</td>
              <td>Старший прапорщик</td>
              <td>Котукова Наталья Оттовна</td>
              <td>2/25/1972</td>
              <td>8</td>
              <td>4</td>
              <td>61198</td>
              <td>УВД Индустриального района г.Хабаровск</td>
              <td>5/29/2003</td>
          </tr>
          <tr id="LC91" class="js-file-line">
            <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
              <td>Ф-700899</td>
              <td>1083807</td>
              <td>Старший прапорщик</td>
              <td>Крикунов Сергей Иванович</td>
              <td>6/15/1977</td>
              <td>91</td>
              <td>2</td>
              <td>200842</td>
              <td>ЗЕЛЕНЧУКСКИМ РОВД КАРАЧАЕВО-ЧЕРКЕССКОЙ РЕСПУБЛИКИ</td>
              <td>9/30/2002</td>
          </tr>
          <tr id="LC92" class="js-file-line">
            <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
              <td>Ф-700951</td>
              <td>1083852</td>
              <td>Старший прапорщик</td>
              <td>Половко Светлана Николаевна</td>
              <td>09.01.1970</td>
              <td>8</td>
              <td>15</td>
              <td>321832</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном р-не г. Ха</td>
              <td>б9/22/2015</td>
          </tr>
          <tr id="LC93" class="js-file-line">
            <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
              <td>Ф-700953</td>
              <td>1083854</td>
              <td>Старший прапорщик</td>
              <td>Попов Андрей Владимирович</td>
              <td>10/20/1971</td>
              <td>8</td>
              <td>4</td>
              <td>148353</td>
              <td>2 ОМ УВД ИНДУСТРИАЛЬНОГО Р-НА Г.ХАБАРОВСКА</td>
              <td>08.07.2003</td>
          </tr>
          <tr id="LC94" class="js-file-line">
            <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
              <td>У-605043</td>
              <td>1085014</td>
              <td>Старший прапорщик</td>
              <td>Куксов Роман Владимирович</td>
              <td>5/27/1976</td>
              <td>10</td>
              <td>2</td>
              <td>341468</td>
              <td>Отделом внутренних дел Ромненского района Амурской области</td>
              <td>06.10.2002</td>
          </tr>
          <tr id="LC95" class="js-file-line">
            <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
              <td>Ф-700945</td>
              <td>1085266</td>
              <td>Старший прапорщик</td>
              <td>Остривная Ирина Кузьминична</td>
              <td>05.05.1962</td>
              <td>8</td>
              <td>5</td>
              <td>625541</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ Р-НЕ Г.ХА</td>
              <td>Б6/7/2007</td>
          </tr>
          <tr id="LC96" class="js-file-line">
            <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
              <td>Ф-700813</td>
              <td>1085292</td>
              <td>Старший прапорщик</td>
              <td>Архипова Татьяна Борисовна</td>
              <td>12.07.1967</td>
              <td>8</td>
              <td>12</td>
              <td>126101</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном р-не г. Хабаровск</td>
              <td>а12/21/2012</td>
          </tr>
          <tr id="LC97" class="js-file-line">
            <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
              <td>Ф-700830</td>
              <td>1085308</td>
              <td>Старший прапорщик</td>
              <td>Боженко Роман Евгеньевич</td>
              <td>10/28/1975</td>
              <td>8</td>
              <td>2</td>
              <td>749435</td>
              <td>2 отделением милиции УВД Индустриального р-на гор. Хабаровска</td>
              <td>8/26/2002</td>
          </tr>
          <tr id="LC98" class="js-file-line">
            <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
              <td>Ф-700908</td>
              <td>1085324</td>
              <td>Старший прапорщик</td>
              <td>Кезиков Максим Александрович</td>
              <td>10/25/1980</td>
              <td>10</td>
              <td>2</td>
              <td>499018</td>
              <td>Свободненским РОВД Амурской области</td>
              <td>12/25/2002</td>
          </tr>
          <tr id="LC99" class="js-file-line">
            <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
              <td>Ф-700068</td>
              <td>1088935</td>
              <td>Старший прапорщик</td>
              <td>Скрипник Светлана Анатольевна</td>
              <td>5/31/1969</td>
              <td>8</td>
              <td>14</td>
              <td>233203</td>
              <td>ОУФМС России по Хабаровскому краю в Центральном р-не г. Хабаровска</td>
              <td>6/26/2014</td>
          </tr>
          <tr id="LC100" class="js-file-line">
            <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
              <td>У-606907</td>
              <td>1090465</td>
              <td>Старший прапорщик</td>
              <td>Шаронов Денис Сергеевич</td>
              <td>7/23/1980</td>
              <td>8</td>
              <td>4</td>
              <td>110708</td>
              <td>Отделом внутренних дел Хабаровского района Хабаровского края</td>
              <td>7/15/2003</td>
          </tr>
          <tr id="LC101" class="js-file-line">
            <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
              <td>Ф-700857</td>
              <td>1091455</td>
              <td>Старший прапорщик</td>
              <td>Гундоров Дмитрий Евгеньевич</td>
              <td>08.01.1974</td>
              <td>8</td>
              <td>2</td>
              <td>606337</td>
              <td>2 Отделением милиции УВД Индустриального района г. Хабаровска</td>
              <td>5/16/2002</td>
          </tr>
          <tr id="LC102" class="js-file-line">
            <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
              <td>Х-827280</td>
              <td>1092165</td>
              <td>Старший прапорщик</td>
              <td>Чаплыгин Виталий Дмитриевич</td>
              <td>7/27/1979</td>
              <td>10</td>
              <td>2</td>
              <td>476807</td>
              <td>Серышевским РОВД Амурской области</td>
              <td>11/20/2002</td>
          </tr>
          <tr id="LC103" class="js-file-line">
            <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
              <td>Ф-700870</td>
              <td>1092197</td>
              <td>Старший прапорщик</td>
              <td>Евтушок Светлана Васильевна</td>
              <td>01.10.1963</td>
              <td>8</td>
              <td>7</td>
              <td>728541</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном р-не г.Хаб</td>
              <td>2/14/2008</td>
          </tr>
          <tr id="LC104" class="js-file-line">
            <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
              <td>Ф-712521</td>
              <td>1093728</td>
              <td>Старший прапорщик</td>
              <td>Микаилов Акрем Мирзали Оглы</td>
              <td>1/13/1968</td>
              <td>8</td>
              <td>2</td>
              <td>657993</td>
              <td>Краснофлотским РОВД гор. Хабаровска</td>
              <td>7/15/2002</td>
          </tr>
          <tr id="LC105" class="js-file-line">
            <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
              <td>Х-827688</td>
              <td>1093831</td>
              <td>Старший прапорщик</td>
              <td>Собиров Зайнидин Шарофович</td>
              <td>10/30/1969</td>
              <td>8</td>
              <td>14</td>
              <td>291110</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском р-не</td>
              <td>2/27/2015</td>
          </tr>
          <tr id="LC106" class="js-file-line">
            <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
              <td>Ф-712523</td>
              <td>1095701</td>
              <td>Старший прапорщик</td>
              <td>Илюшин Евгений Николаевич</td>
              <td>11/18/1968</td>
              <td>8</td>
              <td>2</td>
              <td>577939</td>
              <td>Краснофлотским РОВД г. Хабаровска</td>
              <td>4/16/2002</td>
          </tr>
          <tr id="LC107" class="js-file-line">
            <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
              <td>Ф-719007</td>
              <td>1095708</td>
              <td>Старший прапорщик</td>
              <td>Петровец Игорь Витальевич</td>
              <td>4/14/1972</td>
              <td>8</td>
              <td>17</td>
              <td>443713</td>
              <td>Отделом УФМС России по Хабаровскому краю и ЕАО в Центральном р-не г.</td>
              <td> 5/4/2017</td>
          </tr>
          <tr id="LC108" class="js-file-line">
            <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
              <td>Ф-532899</td>
              <td>1098649</td>
              <td>Старший прапорщик</td>
              <td>Карпова Людмила Владимировна</td>
              <td>4/27/1976</td>
              <td>8</td>
              <td>16</td>
              <td>381901</td>
              <td>ОУФМС России по Хабаровскому краю в ЕАО в Хабаровском районе</td>
              <td>7/30/2016</td>
          </tr>
          <tr id="LC109" class="js-file-line">
            <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
              <td>Ф-715901</td>
              <td>1100065</td>
              <td>Старший прапорщик</td>
              <td>Васильева Наталия Валерьевна</td>
              <td>12.06.1960</td>
              <td>8</td>
              <td>5</td>
              <td>577769</td>
              <td>УВД Индустриального района города Хабаровска</td>
              <td>12/23/2005</td>
          </tr>
          <tr id="LC110" class="js-file-line">
            <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
              <td>Ф-700565</td>
              <td>1100066</td>
              <td>Старший прапорщик</td>
              <td>Волков Константин Дмитриевич</td>
              <td>12/24/1970</td>
              <td>8</td>
              <td>4</td>
              <td>98904</td>
              <td>2 отделение милиции УВД Индустриального р-на гор.  Хабаровска</td>
              <td>6/30/2003</td>
          </tr>
          <tr id="LC111" class="js-file-line">
            <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
              <td>Ф-700865</td>
              <td>1100070</td>
              <td>Старший прапорщик</td>
              <td>Денежкин Сергей Николаевич</td>
              <td>5/13/1976</td>
              <td>8</td>
              <td>2</td>
              <td>575288</td>
              <td>2 отделение милиции УВД Индустриального района, город Хабаровск</td>
              <td>04.09.2002</td>
          </tr>
          <tr id="LC112" class="js-file-line">
            <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
              <td>Ф-700981</td>
              <td>1100151</td>
              <td>Старший прапорщик</td>
              <td>Симанов Михаил Андреевич</td>
              <td>05.01.1977</td>
              <td>8</td>
              <td>2</td>
              <td>652837</td>
              <td>УВД ИНДУСТРИАЛЬНОГО Р-НА ГОР. ХАБАРОВСКА</td>
              <td>06.11.2002</td>
          </tr>
          <tr id="LC113" class="js-file-line">
            <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
              <td>Ф-700994</td>
              <td>1100645</td>
              <td>Старший прапорщик</td>
              <td>Хон Гир Сен</td>
              <td>1/23/1975</td>
              <td>8</td>
              <td>1</td>
              <td>365253</td>
              <td>2 ОМ УВД Индустриального р-на г.Хабаровска</td>
              <td>11/29/2001</td>
          </tr>
          <tr id="LC114" class="js-file-line">
            <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
              <td>Ф-700990</td>
              <td>1103046</td>
              <td>Старший прапорщик</td>
              <td>Удод Дмитрий Александрович</td>
              <td>9/29/1973</td>
              <td>8</td>
              <td>3</td>
              <td>940947</td>
              <td>2 отделением милиции УВД Индустриального р-на гор. Хабаровска</td>
              <td>2/21/2003</td>
          </tr>
          <tr id="LC115" class="js-file-line">
            <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
              <td>Х-827690</td>
              <td>1103154</td>
              <td>Старший прапорщик</td>
              <td>Мищенко Леонид Анатольевич</td>
              <td>11.03.1974</td>
              <td>5</td>
              <td>3</td>
              <td>135741</td>
              <td>Ханкайским РОВД Приморского края</td>
              <td>10.07.2002</td>
          </tr>
          <tr id="LC116" class="js-file-line">
            <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
              <td>Ф-700849</td>
              <td>1103599</td>
              <td>Старший прапорщик</td>
              <td>Головатюк Валентина Анатольевна</td>
              <td>12/25/1962</td>
              <td>8</td>
              <td>8</td>
              <td>786091</td>
              <td>ОТДЕЛОМ УФМ РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ Р</td>
              <td>-0,000226367</td>
          </tr>
          <tr id="LC117" class="js-file-line">
            <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
              <td>Ф-700919</td>
              <td>1103600</td>
              <td>Старший прапорщик</td>
              <td>Логачев Олег Петрович</td>
              <td>08.06.1977</td>
              <td>8</td>
              <td>4</td>
              <td>147157</td>
              <td>2 ОТДЕЛЕНИЕМ МИЛИЦИИ УВД ИНДУСТРИАЛЬНОГО Р-НА ГОР. ХАБАРОВСК</td>
              <td>А7/15/2003</td>
          </tr>
          <tr id="LC118" class="js-file-line">
            <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
              <td>Ф-705618</td>
              <td>1166547</td>
              <td>Старший прапорщик</td>
              <td>Морозов Николай Владимирович</td>
              <td>12/23/1974</td>
              <td>8</td>
              <td>2</td>
              <td>837491</td>
              <td>Отделом внутренних дел Хабаровского района Хабаровского края</td>
              <td>12.05.2002</td>
          </tr>
          <tr id="LC119" class="js-file-line">
            <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
              <td>Ф-719792</td>
              <td>1174054</td>
              <td>Старший прапорщик</td>
              <td>Вершков Валерий Анатольевич</td>
              <td>3/21/1978</td>
              <td>83</td>
              <td>2</td>
              <td>377364</td>
              <td>ПРОХЛАДНЕНСКИМ РОВД КАБАРДИНО-БАЛКАРСКОЙ РЕСПУБЛИКИ</td>
              <td>1/28/2003</td>
          </tr>
          <tr id="LC120" class="js-file-line">
            <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
              <td>Ф-717661</td>
              <td>2143092</td>
              <td>Старший прапорщик</td>
              <td>Коннов Алексей Алексеевич</td>
              <td>2/19/1976</td>
              <td>10</td>
              <td>5</td>
              <td>966836</td>
              <td>Отделом внутренних дел Серышевского района Амурской области</td>
              <td>6/19/2006</td>
          </tr>
          <tr id="LC121" class="js-file-line">
            <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
              <td>Ф-712515</td>
              <td>2149403</td>
              <td>Старший прапорщик</td>
              <td>Коврегин Алексей Владимирович</td>
              <td>10/26/1981</td>
              <td>10</td>
              <td>2</td>
              <td>596757</td>
              <td>Ерофей Павловическим ТПМ ОВД Сковородинского района Амурской обла</td>
              <td>с2/17/2003</td>
          </tr>
          <tr id="LC122" class="js-file-line">
            <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
              <td>Ф-169378</td>
              <td>2199839</td>
              <td>Старший прапорщик</td>
              <td>Ефанов Сергей Михайлович</td>
              <td>12.04.1982</td>
              <td>8</td>
              <td>11</td>
              <td>23024</td>
              <td>Отделением УФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>09.09.2011</td>
          </tr>
          <tr id="LC123" class="js-file-line">
            <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
              <td>МТ-127813</td>
              <td>2203468</td>
              <td>Старший прапорщик</td>
              <td>Сиянов Александр Сергеевич</td>
              <td>11.02.1977</td>
              <td>8</td>
              <td>8</td>
              <td>747751</td>
              <td>Отд. УФМС России по Хабаровскому краю в Индустриальном районе г. Хаба</td>
              <td>5/13/2014</td>
          </tr>
          <tr id="LC124" class="js-file-line">
            <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
              <td>МТ-127824</td>
              <td>2309480</td>
              <td>Старший прапорщик</td>
              <td>Егоян Артур Лерникович</td>
              <td>1/28/1975</td>
              <td>8</td>
              <td>1</td>
              <td>529572</td>
              <td>УВД Индустриального р-на гор. Хабаровска</td>
              <td>3/19/2002</td>
          </tr>
          <tr id="LC125" class="js-file-line">
            <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
              <td>Ф-700248</td>
              <td>2309482</td>
              <td>Старший прапорщик</td>
              <td>Шишлаков Анатолий Анатольевич</td>
              <td>11/13/1979</td>
              <td>8</td>
              <td>3</td>
              <td>946265</td>
              <td>Отделом внутренних дел Хабаровского района Хабаровского края</td>
              <td>5/23/2003</td>
          </tr>
          <tr id="LC126" class="js-file-line">
            <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
              <td>МТ-127808</td>
              <td>2309571</td>
              <td>Старший прапорщик</td>
              <td>Якубов Темирхан Алимханович</td>
              <td>11/16/1981</td>
              <td>8</td>
              <td>15</td>
              <td>307476</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном р-не г. Ха</td>
              <td>б7/15/2015</td>
          </tr>
          <tr id="LC127" class="js-file-line">
            <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
              <td>СУ-470005</td>
              <td>2412183</td>
              <td>Старший прапорщик</td>
              <td>Козыренко Василий Александрович</td>
              <td>1/30/1977</td>
              <td>99</td>
              <td>14</td>
              <td>299394</td>
              <td>Межрайонным отделением ОФМС России по Еврейской Автономной облас</td>
              <td>08.07.2014</td>
          </tr>
          <tr id="LC128" class="js-file-line">
            <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
              <td>МТ-127975</td>
              <td>2440617</td>
              <td>Старший прапорщик</td>
              <td>Кудрявцев Евгений Геннадьевич</td>
              <td>05.05.1976</td>
              <td>10</td>
              <td>2</td>
              <td>431316</td>
              <td>Прогрессовским  отделение милиции Райчихинского ГОВД Амурской облас</td>
              <td>09.12.2002</td>
          </tr>
          <tr id="LC129" class="js-file-line">
            <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
              <td>МТ-127868</td>
              <td>2477227</td>
              <td>Старший прапорщик</td>
              <td>Стрелков Михаил Тимофеевич</td>
              <td>9/21/1977</td>
              <td>8</td>
              <td>2</td>
              <td>696872</td>
              <td>УВД Индустриального района гор. Хабаровска</td>
              <td>7/25/2002</td>
          </tr>
          <tr id="LC130" class="js-file-line">
            <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
              <td>МТ-127995</td>
              <td>2489464</td>
              <td>Старший прапорщик</td>
              <td>Илюсизов Михаил Викторович</td>
              <td>12.10.1972</td>
              <td>8</td>
              <td>1</td>
              <td>460239</td>
              <td>ОУВД Железнодорожного района г. Хабаровск</td>
              <td>02.10.2002</td>
          </tr>
          <tr id="LC131" class="js-file-line">
            <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
              <td>СУ-111916</td>
              <td>2657290</td>
              <td>Старший прапорщик</td>
              <td>Мартыненков Дмитрий Сергеевич</td>
              <td>03.08.1984</td>
              <td>1</td>
              <td>4</td>
              <td>474281</td>
              <td>ОТДЕЛОМ ВНУТРЕННИХ ДЕЛ КУЛУНДИНСКОГО РАЙОНА АЛТАЙСКОГО КРАЯ</td>
              <td>11.08.2005</td>
          </tr>
          <tr id="LC132" class="js-file-line">
            <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
              <td>Э-428793</td>
              <td>3024980</td>
              <td>Старший прапорщик</td>
              <td>Гришаев Сергей Анатольевич</td>
              <td>9/21/1987</td>
              <td>20</td>
              <td>9</td>
              <td>153935</td>
              <td>ТП УФМС РОССИИ ПО ВОРОНЕЖСКОЙ ОБЛАСТИ В ВЕРНЕХАВСКОМ РАЙОНЕ</td>
              <td>10.06.2009</td>
          </tr>
          <tr id="LC133" class="js-file-line">
            <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
              <td>Ф-712923</td>
              <td>1083740</td>
              <td>Прапорщик</td>
              <td>Изотов Максим Александрович</td>
              <td>8/29/1980</td>
              <td>8</td>
              <td>8</td>
              <td>803875</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>12/31/2008</td>
          </tr>
          <tr id="LC134" class="js-file-line">
            <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
              <td>Х-827782</td>
              <td>1083893</td>
              <td>Прапорщик</td>
              <td>Якубов Холмурод Фаизуллоевич</td>
              <td>9/18/1975</td>
              <td>8</td>
              <td>11</td>
              <td>4617</td>
              <td>отделом УФМС России по Хабаровскому краю в Индустриальном районе г. </td>
              <td>5/23/2011</td>
          </tr>
          <tr id="LC135" class="js-file-line">
            <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
              <td>Х-827711</td>
              <td>1088575</td>
              <td>Прапорщик</td>
              <td>Бобоев Эмомали Тагаймуродович</td>
              <td>4/22/1979</td>
              <td>8</td>
              <td>11</td>
              <td>38170</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном р-не г.Хабаровска</td>
              <td>10/20/2011</td>
          </tr>
          <tr id="LC136" class="js-file-line">
            <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
              <td>Ф-700815</td>
              <td>1088622</td>
              <td>Прапорщик</td>
              <td>Могилевская Анжела Владимировна</td>
              <td>08.06.1969</td>
              <td>8</td>
              <td>2</td>
              <td>625705</td>
              <td>2 ОМ УВД Индустриального р-на г.Хабаровска</td>
              <td>06.06.2002</td>
          </tr>
          <tr id="LC137" class="js-file-line">
            <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
              <td>Ф-700853</td>
              <td>1088967</td>
              <td>Прапорщик</td>
              <td>Грибенник Сергей Васильевич</td>
              <td>3/18/1965</td>
              <td>8</td>
              <td>10</td>
              <td>937118</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном р-не г.Хаб</td>
              <td>7/13/2010</td>
          </tr>
          <tr id="LC138" class="js-file-line">
            <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
              <td>Х-827744</td>
              <td>1094693</td>
              <td>Прапорщик</td>
              <td>Никонов Сергей Александрович</td>
              <td>02.07.1972</td>
              <td>8</td>
              <td>11</td>
              <td>39201</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе г. Хабаро</td>
              <td>в11/16/2011</td>
          </tr>
          <tr id="LC139" class="js-file-line">
            <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
              <td>Ф-705220</td>
              <td>1095597</td>
              <td>Прапорщик</td>
              <td>Басенко Анна Михайловна</td>
              <td>5/27/1975</td>
              <td>8</td>
              <td>2</td>
              <td>890943</td>
              <td>2 ОМ УВД Индустриального р-на г.Хабаровска</td>
              <td>12/30/2002</td>
          </tr>
          <tr id="LC140" class="js-file-line">
            <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
              <td>Ф-705217</td>
              <td>1098618</td>
              <td>Прапорщик</td>
              <td>Крупенко Елена Анваровна</td>
              <td>6/20/1966</td>
              <td>8</td>
              <td>11</td>
              <td>20451</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ </td>
              <td>7/14/2011</td>
          </tr>
          <tr id="LC141" class="js-file-line">
            <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
              <td>Ф-700956</td>
              <td>1100147</td>
              <td>Прапорщик</td>
              <td>Пополитов Виталий Георгиевич</td>
              <td>01.05.1979</td>
              <td>8</td>
              <td>4</td>
              <td>276261</td>
              <td>2 ОТДЕЛЕНИЕМ МИЛИЦИИ УВД ИНДУСТРИАЛЬНОГО Р-НА ГОР. ХАБАРОВСК</td>
              <td>А1/6/2004</td>
          </tr>
          <tr id="LC142" class="js-file-line">
            <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
              <td>У-995217</td>
              <td>1164126</td>
              <td>Прапорщик</td>
              <td>Морозов Александр Валерьевич</td>
              <td>11.11.1981</td>
              <td>10</td>
              <td>5</td>
              <td>951607</td>
              <td>Отделом внутренних дел гор. Белогорска и Белогорского района Амурской </td>
              <td>12.08.2005</td>
          </tr>
          <tr id="LC143" class="js-file-line">
            <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
              <td>Ю-854198</td>
              <td>1365393</td>
              <td>Прапорщик</td>
              <td>Подчерняев Александр Александрович</td>
              <td>3/25/1989</td>
              <td>8</td>
              <td>9</td>
              <td>835343</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЦЕНТРАЛЬНОМ  РАЙОНЕ Г.ХА</td>
              <td>Б4/17/2009</td>
          </tr>
          <tr id="LC144" class="js-file-line">
            <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
              <td>Х-025299</td>
              <td>1657152</td>
              <td>Прапорщик</td>
              <td>Демиров Эсед Эдуардович</td>
              <td>2/24/1985</td>
              <td>82</td>
              <td>6</td>
              <td>57843</td>
              <td>БЕЛИДЖИНСКИМ ПОСЕЛКОВЫМ ОТДЕЛЕНИЕМ МИЛИЦИИ ДЕРБЕНТСКОГО </td>
              <td>05.10.2006</td>
          </tr>
          <tr id="LC145" class="js-file-line">
            <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
              <td>Ю-784671</td>
              <td>1982934</td>
              <td>Прапорщик</td>
              <td>Гороев Залимхан Абдулмаликович</td>
              <td>11/26/1991</td>
              <td>82</td>
              <td>11</td>
              <td>114702</td>
              <td>Отделением УФМС России по Республике Дагестан в Казбековском районе</td>
              <td>01.10.2012</td>
          </tr>
          <tr id="LC146" class="js-file-line">
            <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
              <td>ВЕ-359615</td>
              <td>2305338</td>
              <td>Прапорщик</td>
              <td>Пылев Владимир Сергеевич</td>
              <td>01.11.1992</td>
              <td>20</td>
              <td>11</td>
              <td>461627</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ВОРОНЕЖСКОЙ ОБЛАСТИ В ТАЛОВСКОМ Р</td>
              <td>02.10.2012</td>
          </tr>
          <tr id="LC147" class="js-file-line">
            <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
              <td>ВЕ-341809</td>
              <td>2385236</td>
              <td>Прапорщик</td>
              <td>Федонин Дмитрий Николаевич</td>
              <td>02.06.1993</td>
              <td>54</td>
              <td>12</td>
              <td>283481</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛОМ УФМС РОССИИ ПО ОРЛОВСКОЙ ОБЛАСТИ</td>
              <td>4/15/2013</td>
          </tr>
          <tr id="LC148" class="js-file-line">
            <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
              <td>МТ-204057</td>
              <td>2479866</td>
              <td>Прапорщик</td>
              <td>Евдошин Виктор Владимирович</td>
              <td>08.07.1975</td>
              <td>99</td>
              <td>0</td>
              <td>23934</td>
              <td>Биробиджанским  ГОВД Еврейской автономной области</td>
              <td>12/23/2000</td>
          </tr>
          <tr id="LC149" class="js-file-line">
            <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
              <td>МТ-127001</td>
              <td>2489659</td>
              <td>Прапорщик</td>
              <td>Кухаренко Виктор Олегович</td>
              <td>12.09.1978</td>
              <td>8</td>
              <td>4</td>
              <td>24359</td>
              <td>2 Отделением милиции УВД Индустриального р-на гор. Хабаровска</td>
              <td>4/22/2003</td>
          </tr>
          <tr id="LC150" class="js-file-line">
            <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
              <td>МТ-171571</td>
              <td>2493379</td>
              <td>Прапорщик</td>
              <td>Коровченко Иван Александрович</td>
              <td>05.03.1981</td>
              <td>8</td>
              <td>5</td>
              <td>503704</td>
              <td>Управлением внутренних дел Железнодорожного района г.  Хабаровска</td>
              <td>12/23/2005</td>
          </tr>
          <tr id="LC151" class="js-file-line">
            <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
              <td>Х-011547</td>
              <td>2496251</td>
              <td>Прапорщик</td>
              <td>Шастин Андрей Александрович</td>
              <td>12/28/1979</td>
              <td>76</td>
              <td>6</td>
              <td>206202</td>
              <td>Отделом внутренних дел  Железнодорожного района города Читы</td>
              <td>11/21/2006</td>
          </tr>
          <tr id="LC152" class="js-file-line">
            <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
              <td>МТ-171197</td>
              <td>2564935</td>
              <td>Прапорщик</td>
              <td>Петренко Сергей Алексеевич</td>
              <td>6/25/1979</td>
              <td>8</td>
              <td>6</td>
              <td>654069</td>
              <td>Отделением УФМС России по Хабаровскому краю в районе имени Лазо</td>
              <td>9/26/2007</td>
          </tr>
          <tr id="LC153" class="js-file-line">
            <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
              <td>МТ-204242</td>
              <td>2809220</td>
              <td>Прапорщик</td>
              <td>Костенко Василий Васильевич</td>
              <td>3/13/1986</td>
              <td>8</td>
              <td>5</td>
              <td>527795</td>
              <td>Отделом внутренних дел Хабаровского района Хабаровского края</td>
              <td>6/14/2006</td>
          </tr>
          <tr id="LC154" class="js-file-line">
            <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
              <td>МТ-127483</td>
              <td>3099609</td>
              <td>Прапорщик</td>
              <td>Емельянов Евгений Сергеевич</td>
              <td>4/21/1980</td>
              <td>8</td>
              <td>4</td>
              <td>32746</td>
              <td>УПРАВЛЕНИЕМ ВНУТРЕННИХ ДЕЛ ЦЕНТРАЛЬНОГО РАЙОНА ГОРОДА ХАБАРО</td>
              <td>06.02.2003</td>
          </tr>
          <tr id="LC155" class="js-file-line">
            <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
              <td>ВЕ-251273</td>
              <td>3273444</td>
              <td>Прапорщик</td>
              <td>Веткин Антон Вячеславович</td>
              <td>04.01.1997</td>
              <td>40</td>
              <td>17</td>
              <td>783225</td>
              <td>ТП № 62 межрайонным отделом № 2 УФМС России по Санкт- Петербургу и </td>
              <td>5/23/2017</td>
          </tr>
          <tr id="LC156" class="js-file-line">
            <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
              <td>Х-697755</td>
              <td>3278051</td>
              <td>Прапорщик</td>
              <td>Аникин Денис Александрович</td>
              <td>09.06.1996</td>
              <td>10</td>
              <td>16</td>
              <td>498639</td>
              <td>МО УФМС России по Амурской обл. в г. Благовещенске</td>
              <td>10.05.2016</td>
          </tr>
          <tr id="LC157" class="js-file-line">
            <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
              <td>Х-697797</td>
              <td>3278188</td>
              <td>Прапорщик</td>
              <td>Чебан Максим Дмитриевич</td>
              <td>11/28/1996</td>
              <td>10</td>
              <td>17</td>
              <td>520262</td>
              <td>МО УФМС России по Амурской области в г. Благовещенске,</td>
              <td>04.11.2017</td>
          </tr>
          <tr id="LC158" class="js-file-line">
            <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
              <td>ЕХ-722248</td>
              <td>3282795</td>
              <td>Прапорщик</td>
              <td>Николаев Кирилл Анатольевич</td>
              <td>02.08.1995</td>
              <td>61</td>
              <td>15</td>
              <td>921354</td>
              <td>Отделением № 3 ОУФМС России по Рязанской области в г. Рязани</td>
              <td>8/17/2015</td>
          </tr>
          <tr id="LC159" class="js-file-line">
            <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
              <td>Ф-043509</td>
              <td>673894</td>
              <td>Старшина</td>
              <td>Слабкин Александр Александрович</td>
              <td>12.01.1977</td>
              <td>18</td>
              <td>1</td>
              <td>472391</td>
              <td>ОВД Хабаровского р-на Хабаровского края</td>
              <td>3/13/2002</td>
          </tr>
          <tr id="LC160" class="js-file-line">
            <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
              <td>Х-827612</td>
              <td>1083858</td>
              <td>Старшина</td>
              <td>Саратов Игорь Юрьевич</td>
              <td>2/24/1969</td>
              <td>8</td>
              <td>1</td>
              <td>366187</td>
              <td>2 ОМ УВД ИНДУСТРИАЛЬНОГО Р-НА ГОР.ХАБАРОВСКА</td>
              <td>12/27/2001</td>
          </tr>
          <tr id="LC161" class="js-file-line">
            <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
              <td>Э-073743</td>
              <td>1085332</td>
              <td>Старшина</td>
              <td>Шаробов Махсиддин Зайниддинович</td>
              <td>5/16/1966</td>
              <td>8</td>
              <td>11</td>
              <td>9856</td>
              <td>ОУФМС России в Индустриальном р-не г. Хабаровска</td>
              <td>6/27/2011</td>
          </tr>
          <tr id="LC162" class="js-file-line">
            <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
              <td>Х-827217</td>
              <td>1088983</td>
              <td>Старшина</td>
              <td>Клюева Александра Александровна</td>
              <td>10.10.1962</td>
              <td>8</td>
              <td>6</td>
              <td>660485</td>
              <td>Отделом УФМС России по Хабаровскому краю  в Индустриальном р-не г.Ха</td>
              <td>б10/29/2007</td>
          </tr>
          <tr id="LC163" class="js-file-line">
            <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
              <td>Х-827772</td>
              <td>1091490</td>
              <td>Старшина</td>
              <td>Хайдаров Мусохон Астанакулович</td>
              <td>11.12.1980</td>
              <td>8</td>
              <td>8</td>
              <td>798834</td>
              <td>Отделением УФМС России по Хабаровскому краю в Индустриальном р-не</td>
              <td>12.02.2008</td>
          </tr>
          <tr id="LC164" class="js-file-line">
            <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
              <td>Х-858539</td>
              <td>1092509</td>
              <td>Старшина</td>
              <td>Тихонов Александр Владимирович</td>
              <td>5/26/1978</td>
              <td>5</td>
              <td>3</td>
              <td>152046</td>
              <td>Дальнегорским ГОВД Приморского края</td>
              <td>10/22/2002</td>
          </tr>
          <tr id="LC165" class="js-file-line">
            <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
              <td>Х-827729</td>
              <td>1095192</td>
              <td>Старшина</td>
              <td>Курбонов Сохиб Мингпулотович</td>
              <td>7/16/1971</td>
              <td>8</td>
              <td>16</td>
              <td>381830</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ Р-НЕ Г.ХА</td>
              <td>Б1/1/2016</td>
          </tr>
          <tr id="LC166" class="js-file-line">
            <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
              <td>Х-827228</td>
              <td>1095600</td>
              <td>Старшина</td>
              <td>Гумаров Максим Викторович</td>
              <td>7/27/1978</td>
              <td>99</td>
              <td>4</td>
              <td>183804</td>
              <td>Биробиджанским РОВД Еврейской АО</td>
              <td>6/21/2005</td>
          </tr>
          <tr id="LC167" class="js-file-line">
            <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
              <td>Х-828019</td>
              <td>1098606</td>
              <td>Старшина</td>
              <td>Баркова Наталья Александровна</td>
              <td>5/18/1966</td>
              <td>18</td>
              <td>3</td>
              <td>768003</td>
              <td>Камышинским РОВД Волгоградской области</td>
              <td>4/15/2003</td>
          </tr>
          <tr id="LC168" class="js-file-line">
            <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
              <td>Х-827244</td>
              <td>1098665</td>
              <td>Старшина</td>
              <td>Терехина Татьяна Владимировна</td>
              <td>7/18/1974</td>
              <td>8</td>
              <td>10</td>
              <td>993931</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном р-не г.Хаб</td>
              <td>4/20/2011</td>
          </tr>
          <tr id="LC169" class="js-file-line">
            <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
              <td>Х-828171</td>
              <td>1098672</td>
              <td>Старшина</td>
              <td>Хрущева Наталья Николаевна</td>
              <td>6/22/1958</td>
              <td>8</td>
              <td>4</td>
              <td>148961</td>
              <td>2 ОМ УВД Индустриального р-на г.Хабаровска</td>
              <td>8/21/2003</td>
          </tr>
          <tr id="LC170" class="js-file-line">
            <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
              <td>Х-828078</td>
              <td>1100092</td>
              <td>Старшина</td>
              <td>Кариди Наталья Викторовна</td>
              <td>4/28/1966</td>
              <td>8</td>
              <td>11</td>
              <td>4306</td>
              <td>отделом УФМС России по Хабаровскому краю в Индустриальном районе, г</td>
              <td>о5/10/2011</td>
          </tr>
          <tr id="LC171" class="js-file-line">
            <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
              <td>Х-827726</td>
              <td>1100359</td>
              <td>Старшина</td>
              <td>Криворучко Александр Владимирович</td>
              <td>07.08.1983</td>
              <td>44</td>
              <td>4</td>
              <td>207419</td>
              <td>Омчакским ТПМ Тенкинского района Магаданской области</td>
              <td>04.12.2006</td>
          </tr>
          <tr id="LC172" class="js-file-line">
            <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
              <td>МТ-127880</td>
              <td>2657426</td>
              <td>Старшина</td>
              <td>Попов Алексей Юрьевич</td>
              <td>7/29/1980</td>
              <td>8</td>
              <td>4</td>
              <td>192893</td>
              <td>2 Отделением милиции УВД Индустриального района города Хабаровска</td>
              <td>9/30/2003</td>
          </tr>
          <tr id="LC173" class="js-file-line">
            <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
              <td>Х-827298</td>
              <td>1083797</td>
              <td>Старший сержант</td>
              <td>Каторкина Елена Александровна</td>
              <td>7/14/1974</td>
              <td>8</td>
              <td>4</td>
              <td>23502</td>
              <td>2 ОМ УВД ИНДУСТРИАЛЬНОГО Р-НА ГОР.ХАБАРОВСКА</td>
              <td>04.11.2003</td>
          </tr>
          <tr id="LC174" class="js-file-line">
            <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
              <td>Х-827267</td>
              <td>1084799</td>
              <td>Старший сержант</td>
              <td>Егоян Наталья Юрьевна</td>
              <td>10.05.1970</td>
              <td>8</td>
              <td>15</td>
              <td>326952</td>
              <td>ОУФМС России по Хабаровскому краю г. Хабаровска</td>
              <td>01.01.2015</td>
          </tr>
          <tr id="LC175" class="js-file-line">
            <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
              <td>Э-174205</td>
              <td>1088634</td>
              <td>Старший сержант</td>
              <td>Собиров Зафар Шарофудинович</td>
              <td>1/31/1978</td>
              <td>8</td>
              <td>10</td>
              <td>993156</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном р-не г.Хаб</td>
              <td>3/28/2011</td>
          </tr>
          <tr id="LC176" class="js-file-line">
            <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
              <td>Х-827222</td>
              <td>1088990</td>
              <td>Старший сержант</td>
              <td>Кудрявая Лариса Валерьевна</td>
              <td>8/24/1965</td>
              <td>8</td>
              <td>10</td>
              <td>954872</td>
              <td>ОУФМС России по Хабаровскому краю в Северном округе г.Хабаровска</td>
              <td>9/15/2010</td>
          </tr>
          <tr id="LC177" class="js-file-line">
            <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
              <td>Х-827247</td>
              <td>1089015</td>
              <td>Старший сержант</td>
              <td>Шевцова Галина Анатольевна</td>
              <td>9/18/1965</td>
              <td>8</td>
              <td>10</td>
              <td>972903</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном р-не г. аб</td>
              <td>а12/30/2010</td>
          </tr>
          <tr id="LC178" class="js-file-line">
            <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
              <td>Х-827766</td>
              <td>1095640</td>
              <td>Старший сержант</td>
              <td>Токоеков Марат Трифонович</td>
              <td>10.08.1988</td>
              <td>84</td>
              <td>8</td>
              <td>258924</td>
              <td>ТП ОФМС России по Республике Алтай в Улаганском районе</td>
              <td>01.01.2016</td>
          </tr>
          <tr id="LC179" class="js-file-line">
            <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
              <td>Х-860617</td>
              <td>1095710</td>
              <td>Старший сержант</td>
              <td>Высоцкий Александр Иванович</td>
              <td>6/19/1977</td>
              <td>8</td>
              <td>13</td>
              <td>154033</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В СЕВЕРНОМ ОКРУГЕ ГОРОДА Х</td>
              <td>А5/16/2013</td>
          </tr>
          <tr id="LC180" class="js-file-line">
            <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
              <td>Х-827215</td>
              <td>1100089</td>
              <td>Старший сержант</td>
              <td>Калошина Наталья Петровна</td>
              <td>10.01.1968</td>
              <td>8</td>
              <td>13</td>
              <td>197627</td>
              <td>Отделелением УФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>10/31/2013</td>
          </tr>
          <tr id="LC181" class="js-file-line">
            <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
              <td>Х-827295</td>
              <td>1103044</td>
              <td>Старший сержант</td>
              <td>Телегина Олеся Геннадьевна</td>
              <td>5/14/1975</td>
              <td>8</td>
              <td>10</td>
              <td>948104</td>
              <td>отделение ОУФМС России по Хабаровскому краю в Индустриальном район</td>
              <td>8/15/2010</td>
          </tr>
          <tr id="LC182" class="js-file-line">
            <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
              <td>Х-827610</td>
              <td>1103598</td>
              <td>Старший сержант</td>
              <td>Ворончихин Виктор Анатольевич</td>
              <td>2/22/1977</td>
              <td>8</td>
              <td>4</td>
              <td>163608</td>
              <td>2 ОТДЕЛЕНИЕМ МИЛИЦИИ УВД ИНДУСТРИАЛЬНОГО Р-НА ГОР. ХАБАРОВСК</td>
              <td>А9/11/2003</td>
          </tr>
          <tr id="LC183" class="js-file-line">
            <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
              <td>Ю-837167</td>
              <td>1379027</td>
              <td>Старший сержант</td>
              <td>Сморчков Дмитрий Евгеньевич</td>
              <td>1/26/1987</td>
              <td>8</td>
              <td>5</td>
              <td>540978</td>
              <td>ОВД района имени Лазо Хабаровского края</td>
              <td>2/28/2007</td>
          </tr>
          <tr id="LC184" class="js-file-line">
            <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
              <td>Ю-839787</td>
              <td>1538185</td>
              <td>Старший сержант</td>
              <td>Новоселов Евгений Викторович</td>
              <td>12.08.1993</td>
              <td>99</td>
              <td>14</td>
              <td>305082</td>
              <td>ТП ОФМС РОССИИ ПО ЕВРЕЙСКОЙ АВТОНОМНОЙ ОБЛАСТИ В П. ТЕПЛООЗЕ</td>
              <td>Р7/5/2012</td>
          </tr>
          <tr id="LC185" class="js-file-line">
            <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
              <td>Ю-841164</td>
              <td>1672901</td>
              <td>Старший сержант</td>
              <td>Найденов Павел Ильич</td>
              <td>2/17/1990</td>
              <td>8</td>
              <td>10</td>
              <td>924269</td>
              <td>ОУФМС по Хаб.кр. в Сев.окр. г. Хаб.</td>
              <td>4/30/2010</td>
          </tr>
          <tr id="LC186" class="js-file-line">
            <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
              <td>Х-786775</td>
              <td>1735343</td>
              <td>Старший сержант</td>
              <td>Бельды Егор Олегович</td>
              <td>12/22/1988</td>
              <td>8</td>
              <td>8</td>
              <td>756194</td>
              <td>ОУФМС России по Хабаровскому краю в Нанайском р-не</td>
              <td>03.11.2009</td>
          </tr>
          <tr id="LC187" class="js-file-line">
            <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
              <td>Ю-816264</td>
              <td>1876467</td>
              <td>Старший сержант</td>
              <td>Ормов Михаил Андреевич</td>
              <td>6/21/1995</td>
              <td>76</td>
              <td>15</td>
              <td>838719</td>
              <td>ОУФМС России по Забайкальскому краю в Борзинском районе</td>
              <td>1/26/2015</td>
          </tr>
          <tr id="LC188" class="js-file-line">
            <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
              <td>Ф-700931</td>
              <td>1928886</td>
              <td>Старший сержант</td>
              <td>Шарипов Исохон Назарович</td>
              <td>08.06.1983</td>
              <td>8</td>
              <td>11</td>
              <td>38432</td>
              <td>ОУФМС России по Хабаровскому краю в индустриальном районе г.Хабаров</td>
              <td>с10/27/2011</td>
          </tr>
          <tr id="LC189" class="js-file-line">
            <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
              <td>МТ-127951</td>
              <td>2331486</td>
              <td>Старший сержант</td>
              <td>Наумец Андрей Арнольдович</td>
              <td>1/22/1977</td>
              <td>5</td>
              <td>3</td>
              <td>865148</td>
              <td>Лесозаводским ГОВД Приморского края</td>
              <td>01.01.2015</td>
          </tr>
          <tr id="LC190" class="js-file-line">
            <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
              <td>МТ-127963</td>
              <td>2344893</td>
              <td>Старший сержант</td>
              <td>Дубинин Денис Петрович</td>
              <td>1/31/1981</td>
              <td>8</td>
              <td>4</td>
              <td>400450</td>
              <td>ОТДЕЛОМ ВНУТРЕННИХ ДЕЛ КИРОВСКОГО РАЙОНА Г, ХАБАРОВСКА</td>
              <td>9/26/2014</td>
          </tr>
          <tr id="LC191" class="js-file-line">
            <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
              <td>МТ-176634</td>
              <td>2419762</td>
              <td>Старший сержант</td>
              <td>Сорокин Павел Евгеньевич</td>
              <td>5/19/1996</td>
              <td>98</td>
              <td>16</td>
              <td>667469</td>
              <td>УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА(ЯКУТИЯ)</td>
              <td>5/26/2016</td>
          </tr>
          <tr id="LC192" class="js-file-line">
            <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
              <td>МТ-204133</td>
              <td>2479829</td>
              <td>Старший сержант</td>
              <td>Горшкова Наталья Александровна</td>
              <td>9/17/1971</td>
              <td>8</td>
              <td>1</td>
              <td>484965</td>
              <td>УВД Центрального района г. Хабаровска</td>
              <td>2/20/2002</td>
          </tr>
          <tr id="LC193" class="js-file-line">
            <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
              <td>МТ-127699</td>
              <td>2487862</td>
              <td>Старший сержант</td>
              <td>Ермолаев Евгений Николаевич</td>
              <td>4/29/1983</td>
              <td>8</td>
              <td>4</td>
              <td>232041</td>
              <td>УПРАВЛЕНИЕМ ВНУТРЕННИХ ДЕЛ ЦЕНТРАЛЬНОГО РАЙОНА ГОРОДА ХАБАРО</td>
              <td>1/30/2004</td>
          </tr>
          <tr id="LC194" class="js-file-line">
            <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
              <td>Х-827704</td>
              <td>2489812</td>
              <td>Старший сержант</td>
              <td>Азимов Джурахон Эмомназарович</td>
              <td>4/29/1975</td>
              <td>8</td>
              <td>14</td>
              <td>247383</td>
              <td>УФМС России по Хабаровскому краю Индустриальный район</td>
              <td>9/17/2014</td>
          </tr>
          <tr id="LC195" class="js-file-line">
            <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
              <td>Х-785971</td>
              <td>2493313</td>
              <td>Старший сержант</td>
              <td>Гезь Алексей Вячеславович</td>
              <td>3/24/1987</td>
              <td>8</td>
              <td>11</td>
              <td>71170</td>
              <td>Отделом УФМС России по Хабаровскому краю  в Железнодорожном район</td>
              <td>е3/27/2012</td>
          </tr>
          <tr id="LC196" class="js-file-line">
            <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
              <td>Х-838357</td>
              <td>2493556</td>
              <td>Старший сержант</td>
              <td>Плохотнюк Дементий Александрович</td>
              <td>1/21/1985</td>
              <td>8</td>
              <td>5</td>
              <td>525493</td>
              <td>Отделом внутренних дел  района им. Лазо Хабаровского края</td>
              <td>02.08.2006</td>
          </tr>
          <tr id="LC197" class="js-file-line">
            <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
              <td>Х-833864</td>
              <td>2538920</td>
              <td>Старший сержант</td>
              <td>Волков Андрей Валерьевич</td>
              <td>2/18/1990</td>
              <td>8</td>
              <td>13</td>
              <td>188051</td>
              <td>Отделением УФМС России по Хабаровскму краю в Советско- Гаванском рай</td>
              <td>03.11.2014</td>
          </tr>
          <tr id="LC198" class="js-file-line">
            <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
              <td>МТ-196260</td>
              <td>2657631</td>
              <td>Старший сержант</td>
              <td>Бахметьев Дмитрий Викторович</td>
              <td>05.04.1980</td>
              <td>10</td>
              <td>1</td>
              <td>184969</td>
              <td>Райхихинским ГОВД Амурской области</td>
              <td>10/25/2001</td>
          </tr>
          <tr id="LC199" class="js-file-line">
            <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
              <td>СУ-470134</td>
              <td>2662676</td>
              <td>Старший сержант</td>
              <td>Казаков Иван Николаевич</td>
              <td>06.03.1983</td>
              <td>99</td>
              <td>3</td>
              <td>146803</td>
              <td>Биробиджанским ГОВД ЕАО</td>
              <td>07.01.2003</td>
          </tr>
          <tr id="LC200" class="js-file-line">
            <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
              <td>МТ-182034</td>
              <td>2662746</td>
              <td>Старший сержант</td>
              <td>Козырев Александр Сергеевич</td>
              <td>03.11.1986</td>
              <td>8</td>
              <td>4</td>
              <td>462348</td>
              <td>ОВД Ульчского района Хабаровского края</td>
              <td>9/21/2006</td>
          </tr>
          <tr id="LC201" class="js-file-line">
            <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
              <td>Х-839330</td>
              <td>2662751</td>
              <td>Старший сержант</td>
              <td>Мельников Степан Константинович</td>
              <td>8/15/1987</td>
              <td>8</td>
              <td>4</td>
              <td>480421</td>
              <td>Отд. УФМС Россиипо Хабаровскому краю в Комсомольском районе</td>
              <td>9/14/2007</td>
          </tr>
          <tr id="LC202" class="js-file-line">
            <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
              <td>МТ-171204</td>
              <td>2702122</td>
              <td>Старший сержант</td>
              <td>Шабуня Дмитрий Сергеевич</td>
              <td>6/30/1981</td>
              <td>8</td>
              <td>4</td>
              <td>300323</td>
              <td>Хорским отделением милиции ОВД района имени Лазо Хабаровского края</td>
              <td>6/16/2004</td>
          </tr>
          <tr id="LC203" class="js-file-line">
            <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
              <td>Ф-532942</td>
              <td>2702129</td>
              <td>Старший сержант</td>
              <td>Смирнов Максим Евгеньевич</td>
              <td>05.01.1980</td>
              <td>99</td>
              <td>2</td>
              <td>89424</td>
              <td>Николаевским отделом милиции Смидовидского р-на ЕАО</td>
              <td>7/17/2002</td>
          </tr>
          <tr id="LC204" class="js-file-line">
            <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
              <td>МТ-182062</td>
              <td>2737865</td>
              <td>Старший сержант</td>
              <td>Азимов Сайвали Эмомназарович</td>
              <td>6/26/1988</td>
              <td>4</td>
              <td>0</td>
              <td>682162</td>
              <td>ОМВД в МСА Хамадони</td>
              <td>06.09.2015</td>
          </tr>
          <tr id="LC205" class="js-file-line">
            <td id="L205" class="blob-num js-line-number" data-line-number="205"></td>
              <td>МТ-217012</td>
              <td>2807824</td>
              <td>Старший сержант</td>
              <td>Парфенов Сергей Анатольевич</td>
              <td>01.06.1979</td>
              <td>8</td>
              <td>2</td>
              <td>688615</td>
              <td>ОВД Хабаровского края Хабаровского района</td>
              <td>7/16/2002</td>
          </tr>
          <tr id="LC206" class="js-file-line">
            <td id="L206" class="blob-num js-line-number" data-line-number="206"></td>
              <td>МТ-182144</td>
              <td>2816722</td>
              <td>Старший сержант</td>
              <td>Габидулов Максим Александрович</td>
              <td>12/24/1984</td>
              <td>8</td>
              <td>5</td>
              <td>529517</td>
              <td>Отделение УФМС России по Хабаровскому краю в Нанайском районе</td>
              <td>5/16/2007</td>
          </tr>
          <tr id="LC207" class="js-file-line">
            <td id="L207" class="blob-num js-line-number" data-line-number="207"></td>
              <td>МТ-182208</td>
              <td>2847809</td>
              <td>Старший сержант</td>
              <td>Соловьёв Станислав Савельевич</td>
              <td>05.06.1986</td>
              <td>8</td>
              <td>4</td>
              <td>445564</td>
              <td>ОВД Тугуро-Чумиканского района Хабаровского края</td>
              <td>7/13/2006</td>
          </tr>
          <tr id="LC208" class="js-file-line">
            <td id="L208" class="blob-num js-line-number" data-line-number="208"></td>
              <td>МТ-182219</td>
              <td>2858714</td>
              <td>Старший сержант</td>
              <td>Корев Роман Леонидович</td>
              <td>11.04.1984</td>
              <td>8</td>
              <td>4</td>
              <td>365957</td>
              <td>УВД Индустриального района г. Хабаровска</td>
              <td>11/29/2004</td>
          </tr>
          <tr id="LC209" class="js-file-line">
            <td id="L209" class="blob-num js-line-number" data-line-number="209"></td>
              <td>Ю-489491</td>
              <td>3135316</td>
              <td>Старший сержант</td>
              <td>Емелин Вадим Вадимович</td>
              <td>7/20/1987</td>
              <td>84</td>
              <td>8</td>
              <td>250697</td>
              <td>ТП ОФМС России по рес. Алтай в Улаганском районе</td>
              <td>7/25/2008</td>
          </tr>
          <tr id="LC210" class="js-file-line">
            <td id="L210" class="blob-num js-line-number" data-line-number="210"></td>
              <td>МТ-229439</td>
              <td>3281922</td>
              <td>Старший сержант</td>
              <td>Клевцов Владимир Николаевич</td>
              <td>6/14/1984</td>
              <td>76</td>
              <td>5</td>
              <td>24766</td>
              <td>ОВД Ингодинского р-на г. Читы</td>
              <td>7/26/2004</td>
          </tr>
          <tr id="LC211" class="js-file-line">
            <td id="L211" class="blob-num js-line-number" data-line-number="211"></td>
              <td>Ф-987409</td>
              <td>1060629</td>
              <td>Сержант</td>
              <td>Хозраткулова Ольга Александровна</td>
              <td>04.11.1977</td>
              <td>56</td>
              <td>5</td>
              <td>569181</td>
              <td>НИКОЛЬСКИМ РОВД ПЕНЗЕНСКОЙ ОБЛ</td>
              <td>03.03.2006</td>
          </tr>
          <tr id="LC212" class="js-file-line">
            <td id="L212" class="blob-num js-line-number" data-line-number="212"></td>
              <td>Х-827714</td>
              <td>1083765</td>
              <td>Сержант</td>
              <td>Гоибов Саидилхом Саиджаборович</td>
              <td>5/20/1982</td>
              <td>8</td>
              <td>11</td>
              <td>9646</td>
              <td>Отдел УФМС России по Хабаровскому краю в Индустриальном р-не г.Хабар</td>
              <td>6/21/2011</td>
          </tr>
          <tr id="LC213" class="js-file-line">
            <td id="L213" class="blob-num js-line-number" data-line-number="213"></td>
              <td>Х-832221</td>
              <td>1083809</td>
              <td>Сержант</td>
              <td>Кудрявцев Олег Константинович</td>
              <td>12/16/1966</td>
              <td>5</td>
              <td>4</td>
              <td>105535</td>
              <td>ЛЕСОЗАВОДСКИМ РОВД ПРИМОРСКОГО КРАЯ</td>
              <td>10.12.2005</td>
          </tr>
          <tr id="LC214" class="js-file-line">
            <td id="L214" class="blob-num js-line-number" data-line-number="214"></td>
              <td>Х-827730</td>
              <td>1083823</td>
              <td>Сержант</td>
              <td>Курбонов Фаизулло Мусохонович</td>
              <td>04.08.1978</td>
              <td>8</td>
              <td>11</td>
              <td>57763</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе.</td>
              <td>1/26/2012</td>
          </tr>
          <tr id="LC215" class="js-file-line">
            <td id="L215" class="blob-num js-line-number" data-line-number="215"></td>
              <td>Х-827732</td>
              <td>1083827</td>
              <td>Сержант</td>
              <td>Латипов Шариф Бозоралиевич</td>
              <td>5/22/1978</td>
              <td>8</td>
              <td>11</td>
              <td>83540</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе города Ха</td>
              <td>6/14/2012</td>
          </tr>
          <tr id="LC216" class="js-file-line">
            <td id="L216" class="blob-num js-line-number" data-line-number="216"></td>
              <td>Х-827735</td>
              <td>1083829</td>
              <td>Сержант</td>
              <td>Мадаминов Муслим Мазоирович</td>
              <td>05.04.1974</td>
              <td>8</td>
              <td>11</td>
              <td>9901</td>
              <td>отделом УФМС России по Хабаровскому краю в Индустриальном районе г. </td>
              <td>6/28/2011</td>
          </tr>
          <tr id="LC217" class="js-file-line">
            <td id="L217" class="blob-num js-line-number" data-line-number="217"></td>
              <td>Х-827769</td>
              <td>1083868</td>
              <td>Сержант</td>
              <td>Файзов Хакназар Имомназарович</td>
              <td>5/22/1975</td>
              <td>8</td>
              <td>11</td>
              <td>30832</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ РАЙОНЕ Г</td>
              <td>01.01.2011</td>
          </tr>
          <tr id="LC218" class="js-file-line">
            <td id="L218" class="blob-num js-line-number" data-line-number="218"></td>
              <td>Х-827728</td>
              <td>1083897</td>
              <td>Сержант</td>
              <td>Курбонов Сайфулло Мингпулотович</td>
              <td>01.01.1979</td>
              <td>8</td>
              <td>13</td>
              <td>218840</td>
              <td>отделом УФМС России по Хабаровскому краю в индустриальном районе г. </td>
              <td>Х4/10/2014</td>
          </tr>
          <tr id="LC219" class="js-file-line">
            <td id="L219" class="blob-num js-line-number" data-line-number="219"></td>
              <td>Х-827705</td>
              <td>1084801</td>
              <td>Сержант</td>
              <td>Акбаров Саидмухамад Бегалиевич</td>
              <td>12.04.1974</td>
              <td>8</td>
              <td>12</td>
              <td>91060</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе г. Хабаро</td>
              <td>в12/29/1974</td>
          </tr>
          <tr id="LC220" class="js-file-line">
            <td id="L220" class="blob-num js-line-number" data-line-number="220"></td>
              <td>Х-827745</td>
              <td>1084809</td>
              <td>Сержант</td>
              <td>Нурматов Баротали Латифович</td>
              <td>09.07.1974</td>
              <td>8</td>
              <td>11</td>
              <td>39214</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе г. Хабаро</td>
              <td>в11/17/2011</td>
          </tr>
          <tr id="LC221" class="js-file-line">
            <td id="L221" class="blob-num js-line-number" data-line-number="221"></td>
              <td>Х-827781</td>
              <td>1084828</td>
              <td>Сержант</td>
              <td>Юсупов Бахтиёр Тилохонович</td>
              <td>3/25/1973</td>
              <td>8</td>
              <td>10</td>
              <td>994010</td>
              <td>Отделением УФМС по Хабаровскому краю</td>
              <td>05.11.2011</td>
          </tr>
          <tr id="LC222" class="js-file-line">
            <td id="L222" class="blob-num js-line-number" data-line-number="222"></td>
              <td>Х-827682</td>
              <td>1085330</td>
              <td>Сержант</td>
              <td>Овчар Сергей Александрович</td>
              <td>9/23/1984</td>
              <td>10</td>
              <td>5</td>
              <td>955001</td>
              <td>ОВД г. Свободного Амурской области</td>
              <td>1/27/2006</td>
          </tr>
          <tr id="LC223" class="js-file-line">
            <td id="L223" class="blob-num js-line-number" data-line-number="223"></td>
              <td>Х-827747</td>
              <td>1088569</td>
              <td>Сержант</td>
              <td>Одинаев Икромджон Мирзоевич</td>
              <td>01.04.1979</td>
              <td>8</td>
              <td>11</td>
              <td>10067</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном р-не г.Хаб</td>
              <td>07.04.2011</td>
          </tr>
          <tr id="LC224" class="js-file-line">
            <td id="L224" class="blob-num js-line-number" data-line-number="224"></td>
              <td>Х-827300</td>
              <td>1089011</td>
              <td>Сержант</td>
              <td>Первунина Елена Владимировна</td>
              <td>5/25/1962</td>
              <td>8</td>
              <td>5</td>
              <td>625507</td>
              <td>Отдел УФМС России в Индустриальном р-не г.Хабаровска</td>
              <td>06.05.2007</td>
          </tr>
          <tr id="LC225" class="js-file-line">
            <td id="L225" class="blob-num js-line-number" data-line-number="225"></td>
              <td>Х-827708</td>
              <td>1092478</td>
              <td>Сержант</td>
              <td>Бердиев Саидбахром Олимович</td>
              <td>12/25/1975</td>
              <td>8</td>
              <td>15</td>
              <td>364877</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕВРЕЙСКОЙ АВТОНОМНОЙ О</td>
              <td>Б4/22/2016</td>
          </tr>
          <tr id="LC226" class="js-file-line">
            <td id="L226" class="blob-num js-line-number" data-line-number="226"></td>
              <td>Х-827710</td>
              <td>1094686</td>
              <td>Сержант</td>
              <td>Бобоев Сафарали Тагаймуродович</td>
              <td>3/22/1973</td>
              <td>8</td>
              <td>13</td>
              <td>154515</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном р-не г. Хабаровск</td>
              <td>а4/29/2013</td>
          </tr>
          <tr id="LC227" class="js-file-line">
            <td id="L227" class="blob-num js-line-number" data-line-number="227"></td>
              <td>Х-827717</td>
              <td>1094688</td>
              <td>Сержант</td>
              <td>Дустиев Нурали Тошпулодович</td>
              <td>02.11.1969</td>
              <td>8</td>
              <td>14</td>
              <td>225614</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном районе г.</td>
              <td> 1/1/2011</td>
          </tr>
          <tr id="LC228" class="js-file-line">
            <td id="L228" class="blob-num js-line-number" data-line-number="228"></td>
              <td>Х-827205</td>
              <td>1098603</td>
              <td>Сержант</td>
              <td>Андриянова Татьяна Александровна</td>
              <td>10.12.1968</td>
              <td>8</td>
              <td>13</td>
              <td>197772</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском р-не</td>
              <td>11.12.2013</td>
          </tr>
          <tr id="LC229" class="js-file-line">
            <td id="L229" class="blob-num js-line-number" data-line-number="229"></td>
              <td>Х-827229</td>
              <td>1098639</td>
              <td>Сержант</td>
              <td>Мирошкина Ирина Владимировна</td>
              <td>2/17/1977</td>
              <td>8</td>
              <td>2</td>
              <td>711257</td>
              <td>УВД Индустриального р-на г.Хабаровска</td>
              <td>08.08.2002</td>
          </tr>
          <tr id="LC230" class="js-file-line">
            <td id="L230" class="blob-num js-line-number" data-line-number="230"></td>
              <td>Х-827212</td>
              <td>1100083</td>
              <td>Сержант</td>
              <td>Дюжева Светлана Александровна</td>
              <td>02.04.1973</td>
              <td>8</td>
              <td>2</td>
              <td>726002</td>
              <td>2 отделение милиции УВД Индустриального района, город Хабаровск</td>
              <td>08.06.2002</td>
          </tr>
          <tr id="LC231" class="js-file-line">
            <td id="L231" class="blob-num js-line-number" data-line-number="231"></td>
              <td>Х-827232</td>
              <td>1100129</td>
              <td>Сержант</td>
              <td>Носикова Татьяна Михайловна</td>
              <td>02.05.1977</td>
              <td>8</td>
              <td>2</td>
              <td>775988</td>
              <td>2 отделение милиции УВД Индустриального района, город Хабаровск</td>
              <td>9/26/2002</td>
          </tr>
          <tr id="LC232" class="js-file-line">
            <td id="L232" class="blob-num js-line-number" data-line-number="232"></td>
              <td>Х-827759</td>
              <td>1101207</td>
              <td>Сержант</td>
              <td>Сафаров Абдулкосим Хасанович</td>
              <td>1/13/1977</td>
              <td>8</td>
              <td>13</td>
              <td>164117</td>
              <td>отделением УФМС России по Хабаровскому краю в индустриальном район</td>
              <td>е6/11/2013</td>
          </tr>
          <tr id="LC233" class="js-file-line">
            <td id="L233" class="blob-num js-line-number" data-line-number="233"></td>
              <td>Х-827737</td>
              <td>1103227</td>
              <td>Сержант</td>
              <td>Мардонов Джурахон Одилович</td>
              <td>9/19/1981</td>
              <td>8</td>
              <td>16</td>
              <td>377584</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕВРЕЙСКОЙ АВТОНО</td>
              <td>01.01.2011</td>
          </tr>
          <tr id="LC234" class="js-file-line">
            <td id="L234" class="blob-num js-line-number" data-line-number="234"></td>
              <td>Х-786307</td>
              <td>1318362</td>
              <td>Сержант</td>
              <td>Николаев Дмитрий Александрович</td>
              <td>10/29/1991</td>
              <td>8</td>
              <td>12</td>
              <td>98057</td>
              <td>ОУФМС России по Хабаровскому краю в Северном округе г. Хабаровска</td>
              <td>7/30/2012</td>
          </tr>
          <tr id="LC235" class="js-file-line">
            <td id="L235" class="blob-num js-line-number" data-line-number="235"></td>
              <td>Ю-837563</td>
              <td>1318982</td>
              <td>Сержант</td>
              <td>Кравец Сергей Андреевич</td>
              <td>05.04.1993</td>
              <td>8</td>
              <td>14</td>
              <td>253481</td>
              <td>ОУФМС России по Хабаровскому краю в Вяземском районе</td>
              <td>12/17/2014</td>
          </tr>
          <tr id="LC236" class="js-file-line">
            <td id="L236" class="blob-num js-line-number" data-line-number="236"></td>
              <td>Ю-836624</td>
              <td>1325507</td>
              <td>Сержант</td>
              <td>Рахманов Артем Юрьевич</td>
              <td>12.03.1989</td>
              <td>8</td>
              <td>9</td>
              <td>907536</td>
              <td>отделение УФМС России по Хабаровскому краю в индустриальном р-не г.Х</td>
              <td>а10/28/2014</td>
          </tr>
          <tr id="LC237" class="js-file-line">
            <td id="L237" class="blob-num js-line-number" data-line-number="237"></td>
              <td>Ю-841665</td>
              <td>1341881</td>
              <td>Сержант</td>
              <td>Алексеев Артем Витальевич</td>
              <td>06.08.1993</td>
              <td>94</td>
              <td>13</td>
              <td>357795</td>
              <td>ОУФМС России по Удмуртской республике в Октябрьском р-не г. Ижевска</td>
              <td>8/23/2013</td>
          </tr>
          <tr id="LC238" class="js-file-line">
            <td id="L238" class="blob-num js-line-number" data-line-number="238"></td>
              <td>Ю-836612</td>
              <td>1343163</td>
              <td>Сержант</td>
              <td>Нефедов Дмитрий Геннадьевич</td>
              <td>01.09.1993</td>
              <td>8</td>
              <td>12</td>
              <td>134236</td>
              <td>Отделом УФМС России по Хабаровскому краю в Центральном р-не г. Хабар</td>
              <td>о2/13/2013</td>
          </tr>
          <tr id="LC239" class="js-file-line">
            <td id="L239" class="blob-num js-line-number" data-line-number="239"></td>
              <td>Ю-776468</td>
              <td>1351039</td>
              <td>Сержант</td>
              <td>Лейба Александр Сергеевич</td>
              <td>8/17/1993</td>
              <td>10</td>
              <td>7</td>
              <td>63676</td>
              <td>МО УФМС России по Амурской обл. в г. Белогорске</td>
              <td>2/18/2008</td>
          </tr>
          <tr id="LC240" class="js-file-line">
            <td id="L240" class="blob-num js-line-number" data-line-number="240"></td>
              <td>Ю-837576</td>
              <td>1369969</td>
              <td>Сержант</td>
              <td>Старосадчев Алексей Анатольевич</td>
              <td>2/23/1992</td>
              <td>8</td>
              <td>11</td>
              <td>68024</td>
              <td>оуфмс России по Хабаровскому краю в Вяземском районе</td>
              <td>8/15/2015</td>
          </tr>
          <tr id="LC241" class="js-file-line">
            <td id="L241" class="blob-num js-line-number" data-line-number="241"></td>
              <td>Ю-837585</td>
              <td>1378635</td>
              <td>Сержант</td>
              <td>Лебещак Роман Викторович</td>
              <td>6/19/1991</td>
              <td>8</td>
              <td>11</td>
              <td>67697</td>
              <td>Отд. УФМС России по Хабаровскому краю в Вяземском районе</td>
              <td>5/30/2012</td>
          </tr>
          <tr id="LC242" class="js-file-line">
            <td id="L242" class="blob-num js-line-number" data-line-number="242"></td>
              <td>Ю-854823</td>
              <td>1440996</td>
              <td>Сержант</td>
              <td>Першанин Дмитрий Александрович</td>
              <td>7/25/1993</td>
              <td>8</td>
              <td>13</td>
              <td>170780</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском р-не</td>
              <td>8/14/2013</td>
          </tr>
          <tr id="LC243" class="js-file-line">
            <td id="L243" class="blob-num js-line-number" data-line-number="243"></td>
              <td>Ю-776713</td>
              <td>1446696</td>
              <td>Сержант</td>
              <td>Брежнев Матвей Сергеевич</td>
              <td>11.01.1993</td>
              <td>10</td>
              <td>9</td>
              <td>145825</td>
              <td>отделением УФМС России по Амурской обл. в г. Зее</td>
              <td>05.12.2009</td>
          </tr>
          <tr id="LC244" class="js-file-line">
            <td id="L244" class="blob-num js-line-number" data-line-number="244"></td>
              <td>Ю-811932</td>
              <td>1447476</td>
              <td>Сержант</td>
              <td>Галков Андрей Владимирович</td>
              <td>8/14/1992</td>
              <td>81</td>
              <td>5</td>
              <td>51386</td>
              <td>ОВД Баргузинского р/на по Республике Бурятия</td>
              <td>09.06.2006</td>
          </tr>
          <tr id="LC245" class="js-file-line">
            <td id="L245" class="blob-num js-line-number" data-line-number="245"></td>
              <td>Ю-865246</td>
              <td>1463924</td>
              <td>Сержант</td>
              <td>Данилов Петр Николаевич</td>
              <td>02.09.1994</td>
              <td>98</td>
              <td>14</td>
              <td>532247</td>
              <td> </td>
              <td>10.01.2014</td>
          </tr>
          <tr id="LC246" class="js-file-line">
            <td id="L246" class="blob-num js-line-number" data-line-number="246"></td>
              <td>Ю-780202</td>
              <td>1519152</td>
              <td>Сержант</td>
              <td>Вахонин Виталий Сергеевич</td>
              <td>03.03.1992</td>
              <td>10</td>
              <td>11</td>
              <td>307045</td>
              <td>МО УФМС России по Амурской обл. в г. Белогорске</td>
              <td>05.10.2012</td>
          </tr>
          <tr id="LC247" class="js-file-line">
            <td id="L247" class="blob-num js-line-number" data-line-number="247"></td>
              <td>Ю-855524</td>
              <td>1538196</td>
              <td>Сержант</td>
              <td>Безруков Сергей Викторович</td>
              <td>04.07.1993</td>
              <td>64</td>
              <td>12</td>
              <td>821293</td>
              <td>ТП УФМС России по Сахалинской области в Поронайском районе</td>
              <td>5/17/2013</td>
          </tr>
          <tr id="LC248" class="js-file-line">
            <td id="L248" class="blob-num js-line-number" data-line-number="248"></td>
              <td>МТ-308996</td>
              <td>1546635</td>
              <td>Сержант</td>
              <td>Токмаков Андрей Сергеевич</td>
              <td>3/26/1994</td>
              <td>25</td>
              <td>9</td>
              <td>98676</td>
              <td>ТП УФМС России по Иркутской обл. в Куйтунском р-не</td>
              <td>12.09.2008</td>
          </tr>
          <tr id="LC249" class="js-file-line">
            <td id="L249" class="blob-num js-line-number" data-line-number="249"></td>
              <td>МТ-380713</td>
              <td>1570344</td>
              <td>Сержант</td>
              <td>Цукер Роман Андреевич</td>
              <td>04.02.1993</td>
              <td>65</td>
              <td>7</td>
              <td>27785</td>
              <td>отделением УФМС России по Свердловской области в Артемовском районе</td>
              <td>4/23/2007</td>
          </tr>
          <tr id="LC250" class="js-file-line">
            <td id="L250" class="blob-num js-line-number" data-line-number="250"></td>
              <td>Ю-853769</td>
              <td>1633609</td>
              <td>Сержант</td>
              <td>Сивцев Александр Георгиевич</td>
              <td>05.03.1991</td>
              <td>98</td>
              <td>11</td>
              <td>336450</td>
              <td>ТП УФМС по р. Саха (Якутия) в Таттинском р-не</td>
              <td>7/28/2011</td>
          </tr>
          <tr id="LC251" class="js-file-line">
            <td id="L251" class="blob-num js-line-number" data-line-number="251"></td>
              <td>Ю-855361</td>
              <td>1634026</td>
              <td>Сержант</td>
              <td>Тимошкин Вячеслав Юрьевич</td>
              <td>04.12.1992</td>
              <td>8</td>
              <td>13</td>
              <td>158804</td>
              <td>ОУФМС России по Хабаровскому краю в г. Комсомольск на Амуре</td>
              <td>6/24/2013</td>
          </tr>
          <tr id="LC252" class="js-file-line">
            <td id="L252" class="blob-num js-line-number" data-line-number="252"></td>
              <td>Ю-854459</td>
              <td>1639231</td>
              <td>Сержант</td>
              <td>Воротников Константин Романович</td>
              <td>06.08.1992</td>
              <td>8</td>
              <td>12</td>
              <td>140344</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В УЛЬЧСКОМ Р-НЕ</td>
              <td>8/28/2013</td>
          </tr>
          <tr id="LC253" class="js-file-line">
            <td id="L253" class="blob-num js-line-number" data-line-number="253"></td>
              <td>Ю-781448</td>
              <td>1653034</td>
              <td>Сержант</td>
              <td>Святоха Алексей Олегович</td>
              <td>10/16/1994</td>
              <td>10</td>
              <td>14</td>
              <td>398818</td>
              <td>УФМС России по Амурской области в Михайловском р-не</td>
              <td>10/28/2014</td>
          </tr>
          <tr id="LC254" class="js-file-line">
            <td id="L254" class="blob-num js-line-number" data-line-number="254"></td>
              <td>Ю-892137</td>
              <td>1671592</td>
              <td>Сержант</td>
              <td>Прежбылович Дмитрий Алексеевич</td>
              <td>7/17/1993</td>
              <td>76</td>
              <td>7</td>
              <td>316314</td>
              <td>ОУФМС России по Забайкальскому краю в Читинском районе</td>
              <td>3/17/2008</td>
          </tr>
          <tr id="LC255" class="js-file-line">
            <td id="L255" class="blob-num js-line-number" data-line-number="255"></td>
              <td>Ю-855703</td>
              <td>1672963</td>
              <td>Сержант</td>
              <td>Тюленев Михаил Сергеевич</td>
              <td>7/25/1994</td>
              <td>8</td>
              <td>15</td>
              <td>353258</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЦЕНТРАЛЬНОМ Р</td>
              <td>3/31/2016</td>
          </tr>
          <tr id="LC256" class="js-file-line">
            <td id="L256" class="blob-num js-line-number" data-line-number="256"></td>
              <td>Ю-854974</td>
              <td>1683474</td>
              <td>Сержант</td>
              <td>Джиоев Владислав Викторович</td>
              <td>10/30/1994</td>
              <td>8</td>
              <td>9</td>
              <td>915362</td>
              <td>ОУФМС России по Хабар.кр.в Хабар.р-не</td>
              <td>04.06.2010</td>
          </tr>
          <tr id="LC257" class="js-file-line">
            <td id="L257" class="blob-num js-line-number" data-line-number="257"></td>
              <td>Ю-789036</td>
              <td>1697705</td>
              <td>Сержант</td>
              <td>Алиев Вусал Талыб Оглы</td>
              <td>11/16/1993</td>
              <td>99</td>
              <td>14</td>
              <td>300050</td>
              <td>Отделением ОФМС России по Еврейской Автономномной области в Облуче</td>
              <td>02.11.2015</td>
          </tr>
          <tr id="LC258" class="js-file-line">
            <td id="L258" class="blob-num js-line-number" data-line-number="258"></td>
              <td>Ю-856967</td>
              <td>1702427</td>
              <td>Сержант</td>
              <td>Сулайндзюга Максим Андреевич</td>
              <td>8/25/1994</td>
              <td>8</td>
              <td>8</td>
              <td>772983</td>
              <td>ОУФМС России по Хабаровскому краю в районе имени Лазо</td>
              <td>09.03.2008</td>
          </tr>
          <tr id="LC259" class="js-file-line">
            <td id="L259" class="blob-num js-line-number" data-line-number="259"></td>
              <td>Ю-856151</td>
              <td>1735464</td>
              <td>Сержант</td>
              <td>Первушин Даниил Юрьевич</td>
              <td>06.11.1993</td>
              <td>8</td>
              <td>13</td>
              <td>198384</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>12/26/2013</td>
          </tr>
          <tr id="LC260" class="js-file-line">
            <td id="L260" class="blob-num js-line-number" data-line-number="260"></td>
              <td>Ю-856944</td>
              <td>1735549</td>
              <td>Сержант</td>
              <td>Милешин Виктор Андреевич</td>
              <td>4/24/1991</td>
              <td>8</td>
              <td>10</td>
              <td>987807</td>
              <td>Отделением УФМС России по Хабаровскому краю в Ульчском районе</td>
              <td>06.02.2011</td>
          </tr>
          <tr id="LC261" class="js-file-line">
            <td id="L261" class="blob-num js-line-number" data-line-number="261"></td>
              <td>ЕХ-527354</td>
              <td>1743527</td>
              <td>Сержант</td>
              <td>Перерва Сергей Владимирович</td>
              <td>11.12.1992</td>
              <td>52</td>
              <td>15</td>
              <td>468419</td>
              <td>ОУФМС России по Омской области в Кировском администр. округе г. Омска</td>
              <td>08.05.2015</td>
          </tr>
          <tr id="LC262" class="js-file-line">
            <td id="L262" class="blob-num js-line-number" data-line-number="262"></td>
              <td>Х-806224</td>
              <td>1785115</td>
              <td>Сержант</td>
              <td>Таюрский Александр Борисович</td>
              <td>11.10.1987</td>
              <td>8</td>
              <td>16</td>
              <td>390234</td>
              <td>ОУФМС России по Хабаровскому краю и ЕАО в Индустриальном районе в г.</td>
              <td> 8/1/2016</td>
          </tr>
          <tr id="LC263" class="js-file-line">
            <td id="L263" class="blob-num js-line-number" data-line-number="263"></td>
              <td>Ю-789393</td>
              <td>1802603</td>
              <td>Сержант</td>
              <td>Еренков Денис Андреевич</td>
              <td>8/15/1994</td>
              <td>99</td>
              <td>16</td>
              <td>315503</td>
              <td>Межрайонным отделением ОФМС России по Еврейской автономной облас</td>
              <td>4/18/2016</td>
          </tr>
          <tr id="LC264" class="js-file-line">
            <td id="L264" class="blob-num js-line-number" data-line-number="264"></td>
              <td>Ю-785111</td>
              <td>1809274</td>
              <td>Сержант</td>
              <td>Маликов Хасанджон Худойназарович</td>
              <td>1/19/1991</td>
              <td>5</td>
              <td>13</td>
              <td>32602</td>
              <td>отделением УФМС России по Приморскому кр.в Уссурийском городском ок</td>
              <td>03.05.2013</td>
          </tr>
          <tr id="LC265" class="js-file-line">
            <td id="L265" class="blob-num js-line-number" data-line-number="265"></td>
              <td>Ю-858152</td>
              <td>1823848</td>
              <td>Сержант</td>
              <td>Багиров Эрдоган Ядигар оглы</td>
              <td>6/15/1993</td>
              <td>8</td>
              <td>14</td>
              <td>238333</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖНО</td>
              <td>09.03.2015</td>
          </tr>
          <tr id="LC266" class="js-file-line">
            <td id="L266" class="blob-num js-line-number" data-line-number="266"></td>
              <td>Ю-856688</td>
              <td>1824043</td>
              <td>Сержант</td>
              <td>Орлянский Алексей Владимирович</td>
              <td>07.01.1993</td>
              <td>8</td>
              <td>14</td>
              <td>235437</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе г. Хабаро</td>
              <td>в6/9/2017</td>
          </tr>
          <tr id="LC267" class="js-file-line">
            <td id="L267" class="blob-num js-line-number" data-line-number="267"></td>
              <td>ЕХ-547354</td>
              <td>1836186</td>
              <td>Сержант</td>
              <td>Смирнов Артем Владимирович</td>
              <td>2/22/1995</td>
              <td>65</td>
              <td>16</td>
              <td>200643</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛ. В КИРОВСКОМ Р-НЕ Г.Е</td>
              <td>К6/16/2013</td>
          </tr>
          <tr id="LC268" class="js-file-line">
            <td id="L268" class="blob-num js-line-number" data-line-number="268"></td>
              <td>Ю-824151</td>
              <td>1836328</td>
              <td>Сержант</td>
              <td>Евтеев Евгений Сергеевич</td>
              <td>10.02.1994</td>
              <td>5</td>
              <td>14</td>
              <td>200411</td>
              <td>Отделением УФМС России по Приморскому краю в Дальнереченском горо</td>
              <td>д10/5/2014</td>
          </tr>
          <tr id="LC269" class="js-file-line">
            <td id="L269" class="blob-num js-line-number" data-line-number="269"></td>
              <td>СУ-054829</td>
              <td>1858206</td>
              <td>Сержант</td>
              <td>Кропотов Алексей Николаевич</td>
              <td>04.04.1994</td>
              <td>18</td>
              <td>15</td>
              <td>23068</td>
              <td>ТП УФМС России по Волгоградской области в р.п. Чернышковский</td>
              <td>12/26/2014</td>
          </tr>
          <tr id="LC270" class="js-file-line">
            <td id="L270" class="blob-num js-line-number" data-line-number="270"></td>
              <td>Ю-832699</td>
              <td>1872327</td>
              <td>Сержант</td>
              <td>Бурцев Арсен Кэскилович</td>
              <td>11/13/1994</td>
              <td>98</td>
              <td>8</td>
              <td>128737</td>
              <td>ТП УФМС России по Республике Саха (Якутия) в Усть- Алданском районе</td>
              <td>12.05.2008</td>
          </tr>
          <tr id="LC271" class="js-file-line">
            <td id="L271" class="blob-num js-line-number" data-line-number="271"></td>
              <td>Ю-773112</td>
              <td>1896783</td>
              <td>Сержант</td>
              <td>Стоволосов Сергей Владимирович</td>
              <td>04.01.1994</td>
              <td>8</td>
              <td>14</td>
              <td>272191</td>
              <td>Отд. УФМС России по Хабаровскому краю, Хабаровского района</td>
              <td>08.01.2013</td>
          </tr>
          <tr id="LC272" class="js-file-line">
            <td id="L272" class="blob-num js-line-number" data-line-number="272"></td>
              <td>Х-789644</td>
              <td>1973978</td>
              <td>Сержант</td>
              <td>Тонких Антон Юрьевич</td>
              <td>2/22/1993</td>
              <td>99</td>
              <td>12</td>
              <td>285367</td>
              <td>ТП с. Амурзет межр-го отд УФМС России по Еврейской АЛ в с. Ленинское</td>
              <td>3/16/2013</td>
          </tr>
          <tr id="LC273" class="js-file-line">
            <td id="L273" class="blob-num js-line-number" data-line-number="273"></td>
              <td>Ю-774315</td>
              <td>1983104</td>
              <td>Сержант</td>
              <td>Хусанов Баходиржон Акбаралиевич</td>
              <td>01.10.1985</td>
              <td>8</td>
              <td>9</td>
              <td>860955</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ </td>
              <td>8/19/2009</td>
          </tr>
          <tr id="LC274" class="js-file-line">
            <td id="L274" class="blob-num js-line-number" data-line-number="274"></td>
              <td>СУ-108633</td>
              <td>1986790</td>
              <td>Сержант</td>
              <td>Юшков Павел Алексеевич</td>
              <td>09.08.1994</td>
              <td>95</td>
              <td>14</td>
              <td>860325</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ ХАКАСИЯ В ОРДЖОНИКИДЗЕВСКОМ РАЙ</td>
              <td>10/27/2014</td>
          </tr>
          <tr id="LC275" class="js-file-line">
            <td id="L275" class="blob-num js-line-number" data-line-number="275"></td>
              <td>Ю-814290</td>
              <td>1996036</td>
              <td>Сержант</td>
              <td>Будаев Владимир Аркадьевич</td>
              <td>2/28/1995</td>
              <td>81</td>
              <td>14</td>
              <td>610605</td>
              <td>ТП УФМС России по республике Бурятия в Кяхтинском районе</td>
              <td>3/13/2015</td>
          </tr>
          <tr id="LC276" class="js-file-line">
            <td id="L276" class="blob-num js-line-number" data-line-number="276"></td>
              <td>МТ-206341</td>
              <td>2012368</td>
              <td>Сержант</td>
              <td>Белов Евгений Викторович</td>
              <td>01.11.1994</td>
              <td>10</td>
              <td>14</td>
              <td>422303</td>
              <td>МО УФМС России по Амурской области в городе Благовещенске</td>
              <td>11/24/2014</td>
          </tr>
          <tr id="LC277" class="js-file-line">
            <td id="L277" class="blob-num js-line-number" data-line-number="277"></td>
              <td>Ю-838756</td>
              <td>2063070</td>
              <td>Сержант</td>
              <td>Абрамцов Владимир Сергеевич</td>
              <td>8/19/1991</td>
              <td>8</td>
              <td>15</td>
              <td>314267</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном р-не г. Хабаров</td>
              <td>08.04.2015</td>
          </tr>
          <tr id="LC278" class="js-file-line">
            <td id="L278" class="blob-num js-line-number" data-line-number="278"></td>
              <td>МТ-143870</td>
              <td>2100597</td>
              <td>Сержант</td>
              <td>Романцов Александр Александрович</td>
              <td>09.12.1990</td>
              <td>98</td>
              <td>13</td>
              <td>498610</td>
              <td>ТП УФМС России по Республике Саха (Якутия) в Мегино-Кангаласском райо</td>
              <td>н12/3/2013</td>
          </tr>
          <tr id="LC279" class="js-file-line">
            <td id="L279" class="blob-num js-line-number" data-line-number="279"></td>
              <td>Ю-774352</td>
              <td>2135812</td>
              <td>Сержант</td>
              <td>Джураев Шоди Алимардонович</td>
              <td>08.03.1978</td>
              <td>8</td>
              <td>17</td>
              <td>455589</td>
              <td>ОУФМС России по Хабаровскому краю</td>
              <td>07.07.2017</td>
          </tr>
          <tr id="LC280" class="js-file-line">
            <td id="L280" class="blob-num js-line-number" data-line-number="280"></td>
              <td>СУ-406337</td>
              <td>2181708</td>
              <td>Сержант</td>
              <td>Радинский Егор Алексеевич</td>
              <td>1/27/1996</td>
              <td>8</td>
              <td>15</td>
              <td>352704</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЦЕНТРАЛЬНОМ РАЙОНЕ Г. ХАБ</td>
              <td>А10/29/2015</td>
          </tr>
          <tr id="LC281" class="js-file-line">
            <td id="L281" class="blob-num js-line-number" data-line-number="281"></td>
              <td>МТ-192341</td>
              <td>2235944</td>
              <td>Сержант</td>
              <td>Слепцов Альберт Алексеевич</td>
              <td>02.08.1996</td>
              <td>98</td>
              <td>15</td>
              <td>655497</td>
              <td>МРО УФМС России по Республике Саха (Якутия) в городе Якутске</td>
              <td>3/17/2016</td>
          </tr>
          <tr id="LC282" class="js-file-line">
            <td id="L282" class="blob-num js-line-number" data-line-number="282"></td>
              <td>ЕХ-827697</td>
              <td>2256660</td>
              <td>Сержант</td>
              <td>Возных Станислав Петрович</td>
              <td>8/22/1992</td>
              <td>75</td>
              <td>12</td>
              <td>112692</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В ГОРОДЕ ТРОИЦКЕ </td>
              <td>09.04.2012</td>
          </tr>
          <tr id="LC283" class="js-file-line">
            <td id="L283" class="blob-num js-line-number" data-line-number="283"></td>
              <td>МТ-236847</td>
              <td>2292522</td>
              <td>Сержант</td>
              <td>Васильев Родион Вячеславович</td>
              <td>10/23/1995</td>
              <td>10</td>
              <td>16</td>
              <td>495221</td>
              <td>отделение УФМС России по Амурской области в Сковородинском районе</td>
              <td>07.09.2014</td>
          </tr>
          <tr id="LC284" class="js-file-line">
            <td id="L284" class="blob-num js-line-number" data-line-number="284"></td>
              <td>МТ-228228</td>
              <td>2292671</td>
              <td>Сержант</td>
              <td>Кирюшатов Максим Дмитриевич</td>
              <td>03.07.1996</td>
              <td>99</td>
              <td>10</td>
              <td>256506</td>
              <td>ОФМС РОССИИ ПО ЕАО В Г.БИРОБИДЖАНЕ</td>
              <td>07.03.2010</td>
          </tr>
          <tr id="LC285" class="js-file-line">
            <td id="L285" class="blob-num js-line-number" data-line-number="285"></td>
              <td>МТ-209171</td>
              <td>2292743</td>
              <td>Сержант</td>
              <td>Солдатов Антон Николаевич</td>
              <td>05.11.1996</td>
              <td>76</td>
              <td>16</td>
              <td>902473</td>
              <td>Отделом УФМС России по Забайкальскому краюв п. Приаргунск</td>
              <td>07.09.2014</td>
          </tr>
          <tr id="LC286" class="js-file-line">
            <td id="L286" class="blob-num js-line-number" data-line-number="286"></td>
              <td>МТ-127623</td>
              <td>2320210</td>
              <td>Сержант</td>
              <td>Рамазанов Махмуд Курбанович</td>
              <td>2/18/1982</td>
              <td>8</td>
              <td>13</td>
              <td>207793</td>
              <td>УФМС России поХабаровкому краю вцентральном  районе г.Хабаровка</td>
              <td>7/29/2014</td>
          </tr>
          <tr id="LC287" class="js-file-line">
            <td id="L287" class="blob-num js-line-number" data-line-number="287"></td>
              <td>МТ-171180</td>
              <td>2328318</td>
              <td>Сержант</td>
              <td>Алешкин Сергей Владимирович</td>
              <td>5/21/1981</td>
              <td>8</td>
              <td>1</td>
              <td>469582</td>
              <td>ОВД РАЙОНА ИМЕНИ ЛАЗО ХАБАРОВСКОГО КРАЯ</td>
              <td>2/20/2002</td>
          </tr>
          <tr id="LC288" class="js-file-line">
            <td id="L288" class="blob-num js-line-number" data-line-number="288"></td>
              <td>ЕХ-795092</td>
              <td>2328540</td>
              <td>Сержант</td>
              <td>Власов Евгений Валерьевич</td>
              <td>8/21/1996</td>
              <td>8</td>
              <td>16</td>
              <td>428219</td>
              <td>ТП УФМС РОССИИ ПО Иркутской Области В КИРЕНСКОМ Р-НЕ</td>
              <td>10/24/2014</td>
          </tr>
          <tr id="LC289" class="js-file-line">
            <td id="L289" class="blob-num js-line-number" data-line-number="289"></td>
              <td>ЕХ-844331</td>
              <td>2328553</td>
              <td>Сержант</td>
              <td>Попов Антон Павлович</td>
              <td>10.06.1995</td>
              <td>25</td>
              <td>9</td>
              <td>296286</td>
              <td>Отделом УФМС России по Иркутской области в г. Ангарске и Ангарском р -н</td>
              <td>12.09.2009</td>
          </tr>
          <tr id="LC290" class="js-file-line">
            <td id="L290" class="blob-num js-line-number" data-line-number="290"></td>
              <td>МТ-234325</td>
              <td>2331604</td>
              <td>Сержант</td>
              <td>Фаттахов Вагиф Нариман-оглы</td>
              <td>04.01.1990</td>
              <td>10</td>
              <td>9</td>
              <td>186667</td>
              <td>Отделением Уфмс россии по Амурской области в завитинском районе</td>
              <td>5/13/2010</td>
          </tr>
          <tr id="LC291" class="js-file-line">
            <td id="L291" class="blob-num js-line-number" data-line-number="291"></td>
              <td>ЕХ-599377</td>
              <td>2334161</td>
              <td>Сержант</td>
              <td>Накастхоев Эскерхан Михайлович</td>
              <td>7/15/1993</td>
              <td>90</td>
              <td>13</td>
              <td>89523</td>
              <td>ОУ УФМС России по республике Северная Осетия-Алания в Пригородном р</td>
              <td>-0,000128792</td>
          </tr>
          <tr id="LC292" class="js-file-line">
            <td id="L292" class="blob-num js-line-number" data-line-number="292"></td>
              <td>ЕХ-746224</td>
              <td>2335715</td>
              <td>Сержант</td>
              <td>Полтораков Кирилл Олегович</td>
              <td>6/15/1996</td>
              <td>95</td>
              <td>11</td>
              <td>789684</td>
              <td>Отделом УФМС России по Республике Хакасия в г. Абакане</td>
              <td>2/29/2012</td>
          </tr>
          <tr id="LC293" class="js-file-line">
            <td id="L293" class="blob-num js-line-number" data-line-number="293"></td>
              <td>СУ-441669</td>
              <td>2336924</td>
              <td>Сержант</td>
              <td>Мусин Виктор Сергеевич</td>
              <td>03.01.1994</td>
              <td>8</td>
              <td>13</td>
              <td>209222</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ГО</td>
              <td>03.12.2014</td>
          </tr>
          <tr id="LC294" class="js-file-line">
            <td id="L294" class="blob-num js-line-number" data-line-number="294"></td>
              <td>СУ-407000</td>
              <td>2337035</td>
              <td>Сержант</td>
              <td>Тушевский Иван Георгиевич</td>
              <td>02.09.1996</td>
              <td>8</td>
              <td>9</td>
              <td>902904</td>
              <td>Отделением УФМС России по Хабаровскому краю в Советско-Гаванском ра</td>
              <td>й3/11/2010</td>
          </tr>
          <tr id="LC295" class="js-file-line">
            <td id="L295" class="blob-num js-line-number" data-line-number="295"></td>
              <td>МТ-231693</td>
              <td>2344690</td>
              <td>Сержант</td>
              <td>Власов Владимир Андреевич</td>
              <td>10.05.1996</td>
              <td>81</td>
              <td>10</td>
              <td>393529</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО РЕСПУБЛИКЕ БУРЯТИЯ В КАБАНСКОМ РАЙ</td>
              <td>8/18/2011</td>
          </tr>
          <tr id="LC296" class="js-file-line">
            <td id="L296" class="blob-num js-line-number" data-line-number="296"></td>
              <td>МТ-231682</td>
              <td>2344728</td>
              <td>Сержант</td>
              <td>Мезенин Виктор Вячеславович</td>
              <td>12/15/1994</td>
              <td>81</td>
              <td>8</td>
              <td>248032</td>
              <td>ТП В ПОС. ИЛЬИНКА ОТДЕЛЕНИЯ УФМС РОССИИ ПО РЕСП. БУРЯТИЯ В ПРИБ</td>
              <td>А3/5/2009</td>
          </tr>
          <tr id="LC297" class="js-file-line">
            <td id="L297" class="blob-num js-line-number" data-line-number="297"></td>
              <td>МТ-231694</td>
              <td>2344730</td>
              <td>Сержант</td>
              <td>Насников Алексей Анатольевич</td>
              <td>10.05.1996</td>
              <td>81</td>
              <td>11</td>
              <td>440377</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО РЕСПУБЛИКЕ БУРЯТИЯ В КАБАНСКОМ РАЙ</td>
              <td>2/29/2012</td>
          </tr>
          <tr id="LC298" class="js-file-line">
            <td id="L298" class="blob-num js-line-number" data-line-number="298"></td>
              <td>МТ-213873</td>
              <td>2344743</td>
              <td>Сержант</td>
              <td>Платонов Андрей Константинович</td>
              <td>06.04.1994</td>
              <td>81</td>
              <td>14</td>
              <td>573821</td>
              <td>ОУФМС России по республике Бурятия в Селенгинском районе</td>
              <td>6/27/2014</td>
          </tr>
          <tr id="LC299" class="js-file-line">
            <td id="L299" class="blob-num js-line-number" data-line-number="299"></td>
              <td>СУ-446817</td>
              <td>2346658</td>
              <td>Сержант</td>
              <td>Свистун Валентина Павловна</td>
              <td>01.09.1988</td>
              <td>99</td>
              <td>9</td>
              <td>247920</td>
              <td>ТП УФМС России по Еврейской Автономной области в с. Ленинском</td>
              <td>02.10.2010</td>
          </tr>
          <tr id="LC300" class="js-file-line">
            <td id="L300" class="blob-num js-line-number" data-line-number="300"></td>
              <td>МТ-228343</td>
              <td>2363550</td>
              <td>Сержант</td>
              <td>Фаракшатов Вячеслав Андреевич</td>
              <td>10.03.1996</td>
              <td>99</td>
              <td>10</td>
              <td>265537</td>
              <td>ОФМС ПО ЕАО В ЛЕНИНСКОМ РАЙОНЕ</td>
              <td>05.12.2011</td>
          </tr>
          <tr id="LC301" class="js-file-line">
            <td id="L301" class="blob-num js-line-number" data-line-number="301"></td>
              <td>Х-788510</td>
              <td>2367056</td>
              <td>Сержант</td>
              <td>Лысенко Анатолий Михайлович</td>
              <td>02.03.1992</td>
              <td>10</td>
              <td>12</td>
              <td>349194</td>
              <td>МО УФМС России по Амурской области в г.Благовещенске</td>
              <td>9/26/2014</td>
          </tr>
          <tr id="LC302" class="js-file-line">
            <td id="L302" class="blob-num js-line-number" data-line-number="302"></td>
              <td>ЕХ-575694</td>
              <td>2368277</td>
              <td>Сержант</td>
              <td>Байрамов Гаджимурад Абубакарович</td>
              <td>2/13/1994</td>
              <td>82</td>
              <td>13</td>
              <td>426813</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ ДАГЕСТАН В ПОС. МАМЕДКАЛА</td>
              <td>2/25/2014</td>
          </tr>
          <tr id="LC303" class="js-file-line">
            <td id="L303" class="blob-num js-line-number" data-line-number="303"></td>
              <td>ЕХ-575720</td>
              <td>2368358</td>
              <td>Сержант</td>
              <td>Курбанов Акиф Шарафутдинович</td>
              <td>07.03.1992</td>
              <td>82</td>
              <td>11</td>
              <td>189713</td>
              <td>УФСМ ПО РЕСПУБЛИГЕ ДАГЕСТАН В ТАБАСАРАНСКОМ РАЙОНА</td>
              <td>07.12.2012</td>
          </tr>
          <tr id="LC304" class="js-file-line">
            <td id="L304" class="blob-num js-line-number" data-line-number="304"></td>
              <td>ЕХ-575713</td>
              <td>2368425</td>
              <td>Сержант</td>
              <td>Сулейманов Абдулвагаб Максудович</td>
              <td>11/13/1992</td>
              <td>82</td>
              <td>12</td>
              <td>265192</td>
              <td>ОУФМС РОССИИ ПО РЕСП. ДАГЕСТАН СОВЕТСКОМ РАЙОНЕ ГОР. МАХАЧКАЛ</td>
              <td>Ы12/14/2012</td>
          </tr>
          <tr id="LC305" class="js-file-line">
            <td id="L305" class="blob-num js-line-number" data-line-number="305"></td>
              <td>ЕХ-575717</td>
              <td>2368461</td>
              <td>Сержант</td>
              <td>Яхъяев Велибек Юзбекович</td>
              <td>8/30/1991</td>
              <td>82</td>
              <td>11</td>
              <td>89942</td>
              <td>ТП УФМС РОССИИ ПО РЕСП. ДАГЕСТАН В ХИВСКОМ РАЙОНЕ</td>
              <td>11.10.2011</td>
          </tr>
          <tr id="LC306" class="js-file-line">
            <td id="L306" class="blob-num js-line-number" data-line-number="306"></td>
              <td>СУ-406698</td>
              <td>2373756</td>
              <td>Сержант</td>
              <td>Осинкин Алексей Сергеевич</td>
              <td>08.02.1995</td>
              <td>8</td>
              <td>15</td>
              <td>336531</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖНОМ РАЙОНЕ</td>
              <td> 12/25/2015</td>
          </tr>
          <tr id="LC307" class="js-file-line">
            <td id="L307" class="blob-num js-line-number" data-line-number="307"></td>
              <td>СУ-473033</td>
              <td>2373829</td>
              <td>Сержант</td>
              <td>Чернобривец Владимир Александрович</td>
              <td>5/29/1996</td>
              <td>8</td>
              <td>16</td>
              <td>381640</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ ПО УЛЬЧИНСКОМУ РАЙОНУ</td>
              <td>05.11.2011</td>
          </tr>
          <tr id="LC308" class="js-file-line">
            <td id="L308" class="blob-num js-line-number" data-line-number="308"></td>
              <td>МТ-220802</td>
              <td>2382928</td>
              <td>Сержант</td>
              <td>Симонов Сергей Аркадьевич</td>
              <td>03.11.1994</td>
              <td>76</td>
              <td>14</td>
              <td>753084</td>
              <td>отделением УФМС России  по Забайкальскому краю в  Читинском районе</td>
              <td>5/22/2014</td>
          </tr>
          <tr id="LC309" class="js-file-line">
            <td id="L309" class="blob-num js-line-number" data-line-number="309"></td>
              <td>Х-879971</td>
              <td>2386830</td>
              <td>Сержант</td>
              <td>Кичкильдеев Кирилл Александрович</td>
              <td>9/25/1988</td>
              <td>5</td>
              <td>8</td>
              <td>610650</td>
              <td>ОУФМС России по Приморскому краю в г. Дальнегорск</td>
              <td>06.01.2009</td>
          </tr>
          <tr id="LC310" class="js-file-line">
            <td id="L310" class="blob-num js-line-number" data-line-number="310"></td>
              <td>СУ-473296</td>
              <td>2390350</td>
              <td>Сержант</td>
              <td>Спицын Владимир Игоревич</td>
              <td>11/21/1990</td>
              <td>8</td>
              <td>11</td>
              <td>9538</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ </td>
              <td>6/17/2011</td>
          </tr>
          <tr id="LC311" class="js-file-line">
            <td id="L311" class="blob-num js-line-number" data-line-number="311"></td>
              <td>ЕХ-576680</td>
              <td>2395898</td>
              <td>Сержант</td>
              <td>Магомедов Абакар Алиевич</td>
              <td>01.01.1994</td>
              <td>82</td>
              <td>13</td>
              <td>441066</td>
              <td>ТП УФМС России по Республике Дагестан в Тляратинском районе</td>
              <td>3/13/2014</td>
          </tr>
          <tr id="LC312" class="js-file-line">
            <td id="L312" class="blob-num js-line-number" data-line-number="312"></td>
              <td>СУ-159027</td>
              <td>2406178</td>
              <td>Сержант</td>
              <td>Казюпа Александр Сергеевич</td>
              <td>02.09.1995</td>
              <td>36</td>
              <td>9</td>
              <td>18946</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО САМАРСКОЙ ОБЛАСТИ В КИРОВСКОМ РАЙОН</td>
              <td>02.12.2009</td>
          </tr>
          <tr id="LC313" class="js-file-line">
            <td id="L313" class="blob-num js-line-number" data-line-number="313"></td>
              <td>МТ-127976</td>
              <td>2410358</td>
              <td>Сержант</td>
              <td>Демиров Валерий Керимович</td>
              <td>11/17/1988</td>
              <td>82</td>
              <td>8</td>
              <td>579442</td>
              <td>Отделение УФМС России по Республике Дагестан в Дербентском районе</td>
              <td>11.10.2014</td>
          </tr>
          <tr id="LC314" class="js-file-line">
            <td id="L314" class="blob-num js-line-number" data-line-number="314"></td>
              <td>ЕХ-875512</td>
              <td>2454230</td>
              <td>Сержант</td>
              <td>Тетерин Дмитрий Александрович</td>
              <td>02.07.1996</td>
              <td>1</td>
              <td>10</td>
              <td>498835</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В СЕЛЕ СТАРОАЛЕЙСКОЕ</td>
              <td>07.07.2010</td>
          </tr>
          <tr id="LC315" class="js-file-line">
            <td id="L315" class="blob-num js-line-number" data-line-number="315"></td>
              <td>СУ-441946</td>
              <td>2474593</td>
              <td>Сержант</td>
              <td>Муринов Ян Сергеевич</td>
              <td>12.05.1996</td>
              <td>8</td>
              <td>16</td>
              <td>374520</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕВРЕЙСКОЙ АВТОНОМНОЙ О</td>
              <td>Б5/25/2016</td>
          </tr>
          <tr id="LC316" class="js-file-line">
            <td id="L316" class="blob-num js-line-number" data-line-number="316"></td>
              <td>Х-834400</td>
              <td>2479817</td>
              <td>Сержант</td>
              <td>Акимов Денис Игоревич</td>
              <td>10.04.1990</td>
              <td>8</td>
              <td>10</td>
              <td>969437</td>
              <td>УФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>01.11.2011</td>
          </tr>
          <tr id="LC317" class="js-file-line">
            <td id="L317" class="blob-num js-line-number" data-line-number="317"></td>
              <td>Ю-818340</td>
              <td>2483181</td>
              <td>Сержант</td>
              <td>Соснин Максим Евгеньевич</td>
              <td>9/15/1992</td>
              <td>10</td>
              <td>12</td>
              <td>323981</td>
              <td>ОУФМС России по Амурской обл.вРайчихинске</td>
              <td>10.11.2012</td>
          </tr>
          <tr id="LC318" class="js-file-line">
            <td id="L318" class="blob-num js-line-number" data-line-number="318"></td>
              <td>Х-934190</td>
              <td>2487858</td>
              <td>Сержант</td>
              <td>Емельянов Павел Иванович</td>
              <td>3/29/1989</td>
              <td>8</td>
              <td>12</td>
              <td>113797</td>
              <td>ОУФМС России по Хабаровскому краю в Центральном районе</td>
              <td>11.12.2012</td>
          </tr>
          <tr id="LC319" class="js-file-line">
            <td id="L319" class="blob-num js-line-number" data-line-number="319"></td>
              <td>МТ-127675</td>
              <td>2487864</td>
              <td>Сержант</td>
              <td>Игнатов Петр Сергеевич</td>
              <td>6/20/1989</td>
              <td>8</td>
              <td>9</td>
              <td>860186</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе г. Хаба</td>
              <td>р7/29/2009</td>
          </tr>
          <tr id="LC320" class="js-file-line">
            <td id="L320" class="blob-num js-line-number" data-line-number="320"></td>
              <td>Х-788196</td>
              <td>2487901</td>
              <td>Сержант</td>
              <td>Левин Андрей Владимирович</td>
              <td>6/18/1992</td>
              <td>10</td>
              <td>11</td>
              <td>289389</td>
              <td>ОУФМС России по Амурской области в Михайловском районе</td>
              <td>07.04.2012</td>
          </tr>
          <tr id="LC321" class="js-file-line">
            <td id="L321" class="blob-num js-line-number" data-line-number="321"></td>
              <td>Ю-836165</td>
              <td>2487912</td>
              <td>Сержант</td>
              <td>Никандров Руслан Николаевич</td>
              <td>12/29/1991</td>
              <td>8</td>
              <td>11</td>
              <td>58217</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе г. Хабаро</td>
              <td>в2/8/2012</td>
          </tr>
          <tr id="LC322" class="js-file-line">
            <td id="L322" class="blob-num js-line-number" data-line-number="322"></td>
              <td>Х-822112</td>
              <td>2487952</td>
              <td>Сержант</td>
              <td>Сочивкин Тимофей Васильевич</td>
              <td>06.01.1990</td>
              <td>8</td>
              <td>10</td>
              <td>930499</td>
              <td>ОУФМС России по Хабаровскому краю в районе имени Лазо</td>
              <td>6/23/2010</td>
          </tr>
          <tr id="LC323" class="js-file-line">
            <td id="L323" class="blob-num js-line-number" data-line-number="323"></td>
              <td>Ю-887864</td>
              <td>2487970</td>
              <td>Сержант</td>
              <td>Уро Александр Александрович</td>
              <td>10/31/1985</td>
              <td>76</td>
              <td>5</td>
              <td>167622</td>
              <td>ОВД России Оловянинского района Читинской области</td>
              <td>07.09.2006</td>
          </tr>
          <tr id="LC324" class="js-file-line">
            <td id="L324" class="blob-num js-line-number" data-line-number="324"></td>
              <td>Ю-780042</td>
              <td>2489460</td>
              <td>Сержант</td>
              <td>Богданов Кирилл Петрович</td>
              <td>12/30/1985</td>
              <td>10</td>
              <td>11</td>
              <td>308636</td>
              <td>ОУФМС России по Амурской области в Ромненском районе</td>
              <td>8/19/2013</td>
          </tr>
          <tr id="LC325" class="js-file-line">
            <td id="L325" class="blob-num js-line-number" data-line-number="325"></td>
              <td>Ю-818421</td>
              <td>2489520</td>
              <td>Сержант</td>
              <td>Черноусов Вячеслав Вячеславович</td>
              <td>11.03.1992</td>
              <td>10</td>
              <td>11</td>
              <td>296217</td>
              <td>ОУФМС России по Амурской области в Архаринском районе</td>
              <td>11/28/2012</td>
          </tr>
          <tr id="LC326" class="js-file-line">
            <td id="L326" class="blob-num js-line-number" data-line-number="326"></td>
              <td>МТ-127018</td>
              <td>2489608</td>
              <td>Сержант</td>
              <td>Грек Андрей Евгеньевич</td>
              <td>5/21/1981</td>
              <td>10</td>
              <td>0</td>
              <td>142004</td>
              <td>Юкталинским отделом милиции отдела внутренних дел Тындинского райо</td>
              <td>н1/4/2002</td>
          </tr>
          <tr id="LC327" class="js-file-line">
            <td id="L327" class="blob-num js-line-number" data-line-number="327"></td>
              <td>Х-822123</td>
              <td>2489618</td>
              <td>Сержант</td>
              <td>Евсеев Руслан Витальевич</td>
              <td>07.06.1990</td>
              <td>8</td>
              <td>11</td>
              <td>24789</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В РАЙОНЕ ИМЕНИ </td>
              <td>8/17/2011</td>
          </tr>
          <tr id="LC328" class="js-file-line">
            <td id="L328" class="blob-num js-line-number" data-line-number="328"></td>
              <td>МТ-171009</td>
              <td>2489815</td>
              <td>Сержант</td>
              <td>Бегалиев Аваз Мирович</td>
              <td>09.08.1985</td>
              <td>8</td>
              <td>14</td>
              <td>279193</td>
              <td>УФМС России по Хабаровскому краю в северном районе г. Хабаровск</td>
              <td>1/13/2015</td>
          </tr>
          <tr id="LC329" class="js-file-line">
            <td id="L329" class="blob-num js-line-number" data-line-number="329"></td>
              <td>Х-834202</td>
              <td>2489817</td>
              <td>Сержант</td>
              <td>Бурдуков Сергей Евгеньевич</td>
              <td>2/21/1985</td>
              <td>8</td>
              <td>4</td>
              <td>434327</td>
              <td>ОВД Хабаровского района по Хабаровскому краю выдан</td>
              <td>3/30/2015</td>
          </tr>
          <tr id="LC330" class="js-file-line">
            <td id="L330" class="blob-num js-line-number" data-line-number="330"></td>
              <td>МТ-204636</td>
              <td>2489822</td>
              <td>Сержант</td>
              <td>Максимкин Максим Валерьевич</td>
              <td>8/28/1975</td>
              <td>77</td>
              <td>99</td>
              <td>3182</td>
              <td>ОВД России по Чаунского района  чукотского автононого округа</td>
              <td>11/18/1999</td>
          </tr>
          <tr id="LC331" class="js-file-line">
            <td id="L331" class="blob-num js-line-number" data-line-number="331"></td>
              <td>МТ-127697</td>
              <td>2489828</td>
              <td>Сержант</td>
              <td>Пономарев Константин Сергеевич</td>
              <td>06.05.1983</td>
              <td>8</td>
              <td>4</td>
              <td>389063</td>
              <td>УВД Г.ХАБАРОВСКА ЖЕЛЕЗНОДОРОЖНОГО Р-НА</td>
              <td>3/13/2015</td>
          </tr>
          <tr id="LC332" class="js-file-line">
            <td id="L332" class="blob-num js-line-number" data-line-number="332"></td>
              <td>МТ-204159</td>
              <td>2489867</td>
              <td>Сержант</td>
              <td>Смоленцев Василий Викторович</td>
              <td>09.07.1976</td>
              <td>8</td>
              <td>1</td>
              <td>434408</td>
              <td>ОВД Хабаровского края Хабаровского района</td>
              <td>01.08.2002</td>
          </tr>
          <tr id="LC333" class="js-file-line">
            <td id="L333" class="blob-num js-line-number" data-line-number="333"></td>
              <td>Х-786655</td>
              <td>2489910</td>
              <td>Сержант</td>
              <td>Желев Роман Иванович</td>
              <td>10.09.1992</td>
              <td>8</td>
              <td>12</td>
              <td>106928</td>
              <td>ОУФМС России по Хабаровскому краю в Нанайском районе</td>
              <td>11/13/2012</td>
          </tr>
          <tr id="LC334" class="js-file-line">
            <td id="L334" class="blob-num js-line-number" data-line-number="334"></td>
              <td>МТ-204645</td>
              <td>2493353</td>
              <td>Сержант</td>
              <td>Колибаба Олег Иванович</td>
              <td>6/24/1985</td>
              <td>8</td>
              <td>14</td>
              <td>271358</td>
              <td>ОУФМС Росии по Хабаровскому краю в Индустриальном районе города Хаб</td>
              <td>1/28/2015</td>
          </tr>
          <tr id="LC335" class="js-file-line">
            <td id="L335" class="blob-num js-line-number" data-line-number="335"></td>
              <td>МТ-127953</td>
              <td>2493372</td>
              <td>Сержант</td>
              <td>Козловский Евгений Константинович</td>
              <td>2/16/1987</td>
              <td>99</td>
              <td>6</td>
              <td>216381</td>
              <td>ОУФМС России по ЕАО города Биробиджан</td>
              <td>06.08.2007</td>
          </tr>
          <tr id="LC336" class="js-file-line">
            <td id="L336" class="blob-num js-line-number" data-line-number="336"></td>
              <td>МТ-164197</td>
              <td>2516817</td>
              <td>Сержант</td>
              <td>Рапацевич Дмитрий Сергеевич</td>
              <td>11/14/1996</td>
              <td>8</td>
              <td>10</td>
              <td>968806</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>11/26/2010</td>
          </tr>
          <tr id="LC337" class="js-file-line">
            <td id="L337" class="blob-num js-line-number" data-line-number="337"></td>
              <td>МТ-164598</td>
              <td>2516845</td>
              <td>Сержант</td>
              <td>Силаков Семен Васильевич</td>
              <td>4/25/1989</td>
              <td>8</td>
              <td>8</td>
              <td>829119</td>
              <td>МО УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ ЦО Г.КОМСОМОЛЬСКА-НА-А</td>
              <td>М6/8/2009</td>
          </tr>
          <tr id="LC338" class="js-file-line">
            <td id="L338" class="blob-num js-line-number" data-line-number="338"></td>
              <td>СУ-418199</td>
              <td>2516998</td>
              <td>Сержант</td>
              <td>Бергенов Сергей Нормохмодович</td>
              <td>9/30/1996</td>
              <td>5</td>
              <td>10</td>
              <td>792364</td>
              <td>Отделением УФМС России по Приморскому краю в Хасанском муниципаль</td>
              <td>н10/27/2010</td>
          </tr>
          <tr id="LC339" class="js-file-line">
            <td id="L339" class="blob-num js-line-number" data-line-number="339"></td>
              <td>МТ-239859</td>
              <td>2517228</td>
              <td>Сержант</td>
              <td>Дубина Алексей Сергеевич</td>
              <td>10/18/1996</td>
              <td>8</td>
              <td>16</td>
              <td>416000</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В СЕРЫШЕВСКОМ Р</td>
              <td>А5/21/2015</td>
          </tr>
          <tr id="LC340" class="js-file-line">
            <td id="L340" class="blob-num js-line-number" data-line-number="340"></td>
              <td>МТ-240023</td>
              <td>2524744</td>
              <td>Сержант</td>
              <td>Скрябин Владимир Витальевич</td>
              <td>9/28/1996</td>
              <td>10</td>
              <td>10</td>
              <td>223983</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В СКОВОРОДИНСКОМ РАЙОНЕ</td>
              <td>9/28/2010</td>
          </tr>
          <tr id="LC341" class="js-file-line">
            <td id="L341" class="blob-num js-line-number" data-line-number="341"></td>
              <td>МТ-171575</td>
              <td>2537350</td>
              <td>Сержант</td>
              <td>Яковенко Егор Сергеевич</td>
              <td>05.01.1981</td>
              <td>8</td>
              <td>13</td>
              <td>200389</td>
              <td>Отделом УФМС России по Хабаровскому краю в Нанайском районе</td>
              <td>12/26/2013</td>
          </tr>
          <tr id="LC342" class="js-file-line">
            <td id="L342" class="blob-num js-line-number" data-line-number="342"></td>
              <td>СУ-266443</td>
              <td>2538176</td>
              <td>Сержант</td>
              <td>Беккер Андрей Сергеевич</td>
              <td>8/19/1995</td>
              <td>1</td>
              <td>9</td>
              <td>392447</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ И ПАНКРУШИНСКОМУ РАЙОНАМ</td>
              <td>09.07.2009</td>
          </tr>
          <tr id="LC343" class="js-file-line">
            <td id="L343" class="blob-num js-line-number" data-line-number="343"></td>
              <td>Х-849440</td>
              <td>2538600</td>
              <td>Сержант</td>
              <td>Мялицин Евгений Сергеевич</td>
              <td>12/21/1985</td>
              <td>8</td>
              <td>5</td>
              <td>581677</td>
              <td>Отделом внутренних дел Хабаровского района  Хабароского края</td>
              <td>1/23/2006</td>
          </tr>
          <tr id="LC344" class="js-file-line">
            <td id="L344" class="blob-num js-line-number" data-line-number="344"></td>
              <td>Х-834664</td>
              <td>2538601</td>
              <td>Сержант</td>
              <td>Науменко Иван Евгеньевич</td>
              <td>03.07.1990</td>
              <td>8</td>
              <td>10</td>
              <td>934554</td>
              <td>УФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>7/26/2201</td>
          </tr>
          <tr id="LC345" class="js-file-line">
            <td id="L345" class="blob-num js-line-number" data-line-number="345"></td>
              <td>МТ-204173</td>
              <td>2538911</td>
              <td>Сержант</td>
              <td>Черевко Евгений Сергеевич</td>
              <td>06.12.1987</td>
              <td>8</td>
              <td>5</td>
              <td>617687</td>
              <td>ОУФМС России по Хабаровскому краю вХабаровском районе</td>
              <td>07.04.2007</td>
          </tr>
          <tr id="LC346" class="js-file-line">
            <td id="L346" class="blob-num js-line-number" data-line-number="346"></td>
              <td>Х-785207</td>
              <td>2538916</td>
              <td>Сержант</td>
              <td>Вельмисов Сергей Петрович</td>
              <td>8/20/1986</td>
              <td>8</td>
              <td>5</td>
              <td>628683</td>
              <td>ОТДЕЛОМ ВНУТРЕННИХ ДЕЛ ХАБАРОВСКОГО РАЙОНА , ХАБАРОВСКОГО КРА</td>
              <td>9/19/2006</td>
          </tr>
          <tr id="LC347" class="js-file-line">
            <td id="L347" class="blob-num js-line-number" data-line-number="347"></td>
              <td>МТ-171012</td>
              <td>2539068</td>
              <td>Сержант</td>
              <td>Дорогой Александр Сергеевич</td>
              <td>1/14/1987</td>
              <td>8</td>
              <td>5</td>
              <td>530999</td>
              <td>Отделом внутренних дел Кировского района гор. Хабаровска</td>
              <td>1/27/2007</td>
          </tr>
          <tr id="LC348" class="js-file-line">
            <td id="L348" class="blob-num js-line-number" data-line-number="348"></td>
              <td>Х-833063</td>
              <td>2540714</td>
              <td>Сержант</td>
              <td>Колодников Виталий Сергеевич</td>
              <td>4/25/1990</td>
              <td>8</td>
              <td>9</td>
              <td>911261</td>
              <td>ОУФМС России по Хабаровскому краю в Вяземском районе</td>
              <td>6/29/2010</td>
          </tr>
          <tr id="LC349" class="js-file-line">
            <td id="L349" class="blob-num js-line-number" data-line-number="349"></td>
              <td>Ю-893863</td>
              <td>2560368</td>
              <td>Сержант</td>
              <td>Баин Эжер Армисович</td>
              <td>10/31/1993</td>
              <td>84</td>
              <td>13</td>
              <td>329369</td>
              <td>Отдел. ОФМС России по Республике Алтай  в г. Горно-Алтайске выдан</td>
              <td>12/17/2013</td>
          </tr>
          <tr id="LC350" class="js-file-line">
            <td id="L350" class="blob-num js-line-number" data-line-number="350"></td>
              <td>Х-849532</td>
              <td>2560369</td>
              <td>Сержант</td>
              <td>Борисенко Александр Андреевич</td>
              <td>12/30/1988</td>
              <td>8</td>
              <td>8</td>
              <td>808569</td>
              <td>ОУФМС России по Хабаровскому краю в районе имени Лазо</td>
              <td>1/14/2009</td>
          </tr>
          <tr id="LC351" class="js-file-line">
            <td id="L351" class="blob-num js-line-number" data-line-number="351"></td>
              <td>Х-855460</td>
              <td>2560372</td>
              <td>Сержант</td>
              <td>Виниченко Сергей Алексеевич</td>
              <td>07.10.1989</td>
              <td>10</td>
              <td>9</td>
              <td>163177</td>
              <td>МО УФМС России по Амурской облати в городе Благовещенске</td>
              <td>7/22/2009</td>
          </tr>
          <tr id="LC352" class="js-file-line">
            <td id="L352" class="blob-num js-line-number" data-line-number="352"></td>
              <td>Х-814004</td>
              <td>2560374</td>
              <td>Сержант</td>
              <td>Галимов Виталий Марсельевич</td>
              <td>5/19/1986</td>
              <td>99</td>
              <td>6</td>
              <td>207171</td>
              <td>ОВД города Биробиджан ЕАО</td>
              <td>9/21/2006</td>
          </tr>
          <tr id="LC353" class="js-file-line">
            <td id="L353" class="blob-num js-line-number" data-line-number="353"></td>
              <td>Х-838057</td>
              <td>2562544</td>
              <td>Сержант</td>
              <td>Куликов Вадим Владимирович</td>
              <td>3/17/1988</td>
              <td>8</td>
              <td>8</td>
              <td>826447</td>
              <td>ОУФМС России по Хабаровсому краю в Хабаровском районе</td>
              <td>05.05.2009</td>
          </tr>
          <tr id="LC354" class="js-file-line">
            <td id="L354" class="blob-num js-line-number" data-line-number="354"></td>
              <td>СУ-473046</td>
              <td>2562688</td>
              <td>Сержант</td>
              <td>Ховрящук Сергей Вадимович</td>
              <td>3/22/1993</td>
              <td>8</td>
              <td>12</td>
              <td>139907</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В УЛЬЧСКОМ РАЙОНЕ</td>
              <td>04.03.2013</td>
          </tr>
          <tr id="LC355" class="js-file-line">
            <td id="L355" class="blob-num js-line-number" data-line-number="355"></td>
              <td>МТ-204655</td>
              <td>2562707</td>
              <td>Сержант</td>
              <td>Евсеев Максим Сергеевич</td>
              <td>02.01.1987</td>
              <td>8</td>
              <td>5</td>
              <td>536355</td>
              <td>УПРАВЛЕНИЕМ ВНУТРЕННИХ ДЕЛ ИНДУСТРИАЛЬНОГО РАЙОНА ГОР. ХАБАР</td>
              <td>О2/5/2007</td>
          </tr>
          <tr id="LC356" class="js-file-line">
            <td id="L356" class="blob-num js-line-number" data-line-number="356"></td>
              <td>СУ-470097</td>
              <td>2564925</td>
              <td>Сержант</td>
              <td>Ольхов Владимир Юрьевич</td>
              <td>8/27/1976</td>
              <td>99</td>
              <td>2</td>
              <td>112769</td>
              <td>Биробиджанским РОВД ЕАО</td>
              <td>11/29/2002</td>
          </tr>
          <tr id="LC357" class="js-file-line">
            <td id="L357" class="blob-num js-line-number" data-line-number="357"></td>
              <td>Х-821805</td>
              <td>2564968</td>
              <td>Сержант</td>
              <td>Рыбаков Дмитрий Викторович</td>
              <td>03.10.1991</td>
              <td>8</td>
              <td>11</td>
              <td>24639</td>
              <td>ОУМС России по Хабаровскому краю в районе имени Лазо</td>
              <td>08.05.2011</td>
          </tr>
          <tr id="LC358" class="js-file-line">
            <td id="L358" class="blob-num js-line-number" data-line-number="358"></td>
              <td>Ю-060016</td>
              <td>2565041</td>
              <td>Сержант</td>
              <td>Каплин Дмитрий Александрович</td>
              <td>2/22/1994</td>
              <td>1</td>
              <td>13</td>
              <td>964475</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. БАЕВО</td>
              <td>3/19/2014</td>
          </tr>
          <tr id="LC359" class="js-file-line">
            <td id="L359" class="blob-num js-line-number" data-line-number="359"></td>
              <td>МТ-190597</td>
              <td>2565967</td>
              <td>Сержант</td>
              <td>Шаферов Павел Николаевич</td>
              <td>02.08.1986</td>
              <td>76</td>
              <td>7</td>
              <td>281715</td>
              <td>УФМС России по Читинской области в Нерчинском районе</td>
              <td>11/20/2014</td>
          </tr>
          <tr id="LC360" class="js-file-line">
            <td id="L360" class="blob-num js-line-number" data-line-number="360"></td>
              <td>МТ-204662</td>
              <td>2565973</td>
              <td>Сержант</td>
              <td>Юшков Евгений Юрьевич</td>
              <td>11/20/1986</td>
              <td>99</td>
              <td>6</td>
              <td>214411</td>
              <td>Теплоозерским ОВД Облученского района ЕАО</td>
              <td>4/13/2007</td>
          </tr>
          <tr id="LC361" class="js-file-line">
            <td id="L361" class="blob-num js-line-number" data-line-number="361"></td>
              <td>СУ-198984</td>
              <td>2599364</td>
              <td>Сержант</td>
              <td>Сторожев Даниил Васильевич</td>
              <td>06.03.1995</td>
              <td>57</td>
              <td>15</td>
              <td>328001</td>
              <td>ТП ОУФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ В ЮСЬВИНСКОМ РАЙОНЕ</td>
              <td>06.04.2015</td>
          </tr>
          <tr id="LC362" class="js-file-line">
            <td id="L362" class="blob-num js-line-number" data-line-number="362"></td>
              <td>МТ-171024</td>
              <td>2606208</td>
              <td>Сержант</td>
              <td>Китаева Наталья Вячеславовна</td>
              <td>05.12.1981</td>
              <td>8</td>
              <td>9</td>
              <td>833110</td>
              <td>УФМС России по Хабаровскому краю в Бикинском районе</td>
              <td>5/14/2010</td>
          </tr>
          <tr id="LC363" class="js-file-line">
            <td id="L363" class="blob-num js-line-number" data-line-number="363"></td>
              <td>МТ-227348</td>
              <td>2606443</td>
              <td>Сержант</td>
              <td>Бондарь Андрей Анатольевич</td>
              <td>10/23/1995</td>
              <td>77</td>
              <td>9</td>
              <td>79924</td>
              <td>ТП ОФМС РОССИИ ПО ЧУКОТСКОМУ АВТОНОМНОМУ ОКРУГУ №1 В АНАДЫ</td>
              <td>Р12/2/2009</td>
          </tr>
          <tr id="LC364" class="js-file-line">
            <td id="L364" class="blob-num js-line-number" data-line-number="364"></td>
              <td>МТ-196230</td>
              <td>2607286</td>
              <td>Сержант</td>
              <td>Судаков Константин Леонидович</td>
              <td>06.07.1986</td>
              <td>10</td>
              <td>6</td>
              <td>998031</td>
              <td>ОВД Мазановского р-на Амурской области</td>
              <td>10.06.2006</td>
          </tr>
          <tr id="LC365" class="js-file-line">
            <td id="L365" class="blob-num js-line-number" data-line-number="365"></td>
              <td>Х-787455</td>
              <td>2607565</td>
              <td>Сержант</td>
              <td>Шатковский Алексей Вячеславович</td>
              <td>2/26/1992</td>
              <td>10</td>
              <td>11</td>
              <td>289148</td>
              <td>УФМС России по Амурской области в Михайловском районе</td>
              <td>03.11.2012</td>
          </tr>
          <tr id="LC366" class="js-file-line">
            <td id="L366" class="blob-num js-line-number" data-line-number="366"></td>
              <td>СУ-160478</td>
              <td>2613958</td>
              <td>Сержант</td>
              <td>Ложечкин Владимир Григорьевич</td>
              <td>07.02.1996</td>
              <td>50</td>
              <td>9</td>
              <td>701528</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛ. В НОВОСИБИРСКОМ Р-НЕ</td>
              <td>07.10.2010</td>
          </tr>
          <tr id="LC367" class="js-file-line">
            <td id="L367" class="blob-num js-line-number" data-line-number="367"></td>
              <td>МТ-204647</td>
              <td>2647110</td>
              <td>Сержант</td>
              <td>Зыбцев Евгений Александрович</td>
              <td>10/21/1982</td>
              <td>8</td>
              <td>3</td>
              <td>993576</td>
              <td>ОВД России г. Николаевск-на-Амуре Хабаровского края</td>
              <td>5/30/2003</td>
          </tr>
          <tr id="LC368" class="js-file-line">
            <td id="L368" class="blob-num js-line-number" data-line-number="368"></td>
              <td>МТ-196224</td>
              <td>2647117</td>
              <td>Сержант</td>
              <td>Чистяк Алексей Александрович</td>
              <td>08.11.1990</td>
              <td>10</td>
              <td>10</td>
              <td>215478</td>
              <td>ОУФМС России по Амурской области в Ивановском районе</td>
              <td>8/25/2010</td>
          </tr>
          <tr id="LC369" class="js-file-line">
            <td id="L369" class="blob-num js-line-number" data-line-number="369"></td>
              <td>МТ-196243</td>
              <td>2647440</td>
              <td>Сержант</td>
              <td>Бова Александр Викторович</td>
              <td>1/14/1985</td>
              <td>10</td>
              <td>4</td>
              <td>904344</td>
              <td>Шимановским ГРОВД Амурской области</td>
              <td>11.09.2005</td>
          </tr>
          <tr id="LC370" class="js-file-line">
            <td id="L370" class="blob-num js-line-number" data-line-number="370"></td>
              <td>МТ-182005</td>
              <td>2647444</td>
              <td>Сержант</td>
              <td>Зикиллобеков Каноат Мараматшоевич</td>
              <td>7/22/1986</td>
              <td>8</td>
              <td>14</td>
              <td>247067</td>
              <td>УФМС России по Хабаровскому краю в Индустриальном районе г. Хабаровс</td>
              <td>09.08.2014</td>
          </tr>
          <tr id="LC371" class="js-file-line">
            <td id="L371" class="blob-num js-line-number" data-line-number="371"></td>
              <td>МТ-204200</td>
              <td>2647449</td>
              <td>Сержант</td>
              <td>Томаров Александр Юрьевич</td>
              <td>9/17/1985</td>
              <td>5</td>
              <td>6</td>
              <td>354576</td>
              <td>УФМС России по Приморскому краю в г. Дальнереченске</td>
              <td>05.10.2007</td>
          </tr>
          <tr id="LC372" class="js-file-line">
            <td id="L372" class="blob-num js-line-number" data-line-number="372"></td>
              <td>Х-833188</td>
              <td>2647451</td>
              <td>Сержант</td>
              <td>Хлыстов Михаил Юрьевич</td>
              <td>4/19/1989</td>
              <td>8</td>
              <td>9</td>
              <td>863866</td>
              <td>УФМС России по Хабаровскому краю в Краснофлотском районе г. Хабаровс</td>
              <td>к8/5/2009</td>
          </tr>
          <tr id="LC373" class="js-file-line">
            <td id="L373" class="blob-num js-line-number" data-line-number="373"></td>
              <td>МТ-127996</td>
              <td>2647456</td>
              <td>Сержант</td>
              <td>Кириллов Евгений Яковлевич</td>
              <td>8/17/1984</td>
              <td>8</td>
              <td>4</td>
              <td>398864</td>
              <td>Отделом внутренних дел Краснофлотского района г. Хабаровска</td>
              <td>11/15/2004</td>
          </tr>
          <tr id="LC374" class="js-file-line">
            <td id="L374" class="blob-num js-line-number" data-line-number="374"></td>
              <td>МТ-182014</td>
              <td>2657287</td>
              <td>Сержант</td>
              <td>Алимсултанов Мераб Хасанович</td>
              <td>06.04.1985</td>
              <td>82</td>
              <td>6</td>
              <td>159211</td>
              <td>ОВД г. Касспийска, рес. Дагестан</td>
              <td>12/19/2006</td>
          </tr>
          <tr id="LC375" class="js-file-line">
            <td id="L375" class="blob-num js-line-number" data-line-number="375"></td>
              <td>МТ-171020</td>
              <td>2657289</td>
              <td>Сержант</td>
              <td>Анцупов Максим Юрьевич</td>
              <td>7/18/1990</td>
              <td>99</td>
              <td>10</td>
              <td>257218</td>
              <td>ОФМС России по ЕАО в Смидовичском районе в п. Николаевка</td>
              <td>8/18/2010</td>
          </tr>
          <tr id="LC376" class="js-file-line">
            <td id="L376" class="blob-num js-line-number" data-line-number="376"></td>
              <td>СУ-441114</td>
              <td>2657295</td>
              <td>Сержант</td>
              <td>Бабич Илья Сергеевич</td>
              <td>12/17/1995</td>
              <td>8</td>
              <td>9</td>
              <td>897736</td>
              <td>Отдел. УФМС России по Хабаровскому краю в районе имени Лазо</td>
              <td>1/20/2010</td>
          </tr>
          <tr id="LC377" class="js-file-line">
            <td id="L377" class="blob-num js-line-number" data-line-number="377"></td>
              <td>Х-833549</td>
              <td>2657349</td>
              <td>Сержант</td>
              <td>Малашенко Семён Николаевич</td>
              <td>01.11.1991</td>
              <td>8</td>
              <td>13</td>
              <td>179809</td>
              <td>ОУФМС России по Хабаровскому краю в Северном округе г. Хабаровска</td>
              <td>9/13/2013</td>
          </tr>
          <tr id="LC378" class="js-file-line">
            <td id="L378" class="blob-num js-line-number" data-line-number="378"></td>
              <td>МТ-196281</td>
              <td>2657361</td>
              <td>Сержант</td>
              <td>Камарницкая Юлия Сергеевна</td>
              <td>2/13/1992</td>
              <td>10</td>
              <td>10</td>
              <td>246554</td>
              <td>УФМС России по Амурской области в Архаринском районе</td>
              <td>3/19/2012</td>
          </tr>
          <tr id="LC379" class="js-file-line">
            <td id="L379" class="blob-num js-line-number" data-line-number="379"></td>
              <td>МТ-204207</td>
              <td>2657368</td>
              <td>Сержант</td>
              <td>Корнилов Вячеслав Владимирович</td>
              <td>10/24/1979</td>
              <td>8</td>
              <td>11</td>
              <td>31658</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ </td>
              <td>8/24/2012</td>
          </tr>
          <tr id="LC380" class="js-file-line">
            <td id="L380" class="blob-num js-line-number" data-line-number="380"></td>
              <td>Х-837258</td>
              <td>2657398</td>
              <td>Сержант</td>
              <td>Ларионов Алексей Леонидович</td>
              <td>11.04.1990</td>
              <td>8</td>
              <td>10</td>
              <td>974638</td>
              <td>Отделом УФМС России по Хабаровскому краю в Северном округе г. Хабаро</td>
              <td>в12/16/2010</td>
          </tr>
          <tr id="LC381" class="js-file-line">
            <td id="L381" class="blob-num js-line-number" data-line-number="381"></td>
              <td>МТ-182020</td>
              <td>2657401</td>
              <td>Сержант</td>
              <td>Рахматов Мухаммад Нусратуллоевич</td>
              <td>9/13/1996</td>
              <td>8</td>
              <td>16</td>
              <td>404436</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕВРЕЙСКОЙ АВТ</td>
              <td>О9/30/2016</td>
          </tr>
          <tr id="LC382" class="js-file-line">
            <td id="L382" class="blob-num js-line-number" data-line-number="382"></td>
              <td>МТ-182021</td>
              <td>2657412</td>
              <td>Сержант</td>
              <td>Шарифов Дилшод Собирович</td>
              <td>11.04.1991</td>
              <td>40</td>
              <td>4</td>
              <td>439478</td>
              <td>ОВД города Душанбе Республика Таджикистан</td>
              <td>01.06.2015</td>
          </tr>
          <tr id="LC383" class="js-file-line">
            <td id="L383" class="blob-num js-line-number" data-line-number="383"></td>
              <td>Е-424440</td>
              <td>2657418</td>
              <td>Сержант</td>
              <td>Шупило Денис Александрович</td>
              <td>01.02.1983</td>
              <td>8</td>
              <td>5</td>
              <td>628977</td>
              <td>Отделом УФМС России по Хабаровскомукраю в Красофлотском районе гор</td>
              <td>о6/27/2007</td>
          </tr>
          <tr id="LC384" class="js-file-line">
            <td id="L384" class="blob-num js-line-number" data-line-number="384"></td>
              <td>Х-821319</td>
              <td>2657506</td>
              <td>Сержант</td>
              <td>Кузибаев Денис Эльмурадович</td>
              <td>2/15/1991</td>
              <td>8</td>
              <td>10</td>
              <td>985433</td>
              <td>УФМС России по Хабаровскому краю в Индустриальном районе города Хаб</td>
              <td>а3/11/2011</td>
          </tr>
          <tr id="LC385" class="js-file-line">
            <td id="L385" class="blob-num js-line-number" data-line-number="385"></td>
              <td>СУ-470126</td>
              <td>2657589</td>
              <td>Сержант</td>
              <td>Толкачев Виктор Викторович</td>
              <td>12.10.1992</td>
              <td>8</td>
              <td>12</td>
              <td>89560</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ВЕРХНЕБУРЕИНСКОМ РАЙОНЕ</td>
              <td>12/17/2012</td>
          </tr>
          <tr id="LC386" class="js-file-line">
            <td id="L386" class="blob-num js-line-number" data-line-number="386"></td>
              <td>ЕХ-576055</td>
              <td>2657627</td>
              <td>Сержант</td>
              <td>Эскеров Сейфудин Мирзагаевич</td>
              <td>4/20/1987</td>
              <td>82</td>
              <td>14</td>
              <td>543176</td>
              <td>ТП УФМС России по Республике Дагестан в городе Дагестанские Огни</td>
              <td>8/26/2014</td>
          </tr>
          <tr id="LC387" class="js-file-line">
            <td id="L387" class="blob-num js-line-number" data-line-number="387"></td>
              <td>СУ-470169</td>
              <td>2661751</td>
              <td>Сержант</td>
              <td>Калекаев Евгений Валерьевич</td>
              <td>5/29/1984</td>
              <td>99</td>
              <td>4</td>
              <td>180889</td>
              <td>Ленинским РОВД по Еврейской автономной области</td>
              <td>2/24/2005</td>
          </tr>
          <tr id="LC388" class="js-file-line">
            <td id="L388" class="blob-num js-line-number" data-line-number="388"></td>
              <td>Х-814211</td>
              <td>2662720</td>
              <td>Сержант</td>
              <td>Сысоев Дмитрий Геннадьевич</td>
              <td>7/21/1988</td>
              <td>99</td>
              <td>8</td>
              <td>234354</td>
              <td>ОУФМС России по ЕАО в Облученском р-не</td>
              <td>9/24/2015</td>
          </tr>
          <tr id="LC389" class="js-file-line">
            <td id="L389" class="blob-num js-line-number" data-line-number="389"></td>
              <td>Х-979117</td>
              <td>2662742</td>
              <td>Сержант</td>
              <td>Козяев Андрей Валерьевич</td>
              <td>10/15/1989</td>
              <td>76</td>
              <td>10</td>
              <td>478923</td>
              <td>ТП УФМС РОССИИ ПО ЗАБЙКАЛЬСКОМУ КРАЮ В МОГОЙТУЙСКОМ Р-НЕ</td>
              <td>9/18/2015</td>
          </tr>
          <tr id="LC390" class="js-file-line">
            <td id="L390" class="blob-num js-line-number" data-line-number="390"></td>
              <td>Х-821521</td>
              <td>2662745</td>
              <td>Сержант</td>
              <td>Степкаев Роман Юрьевич</td>
              <td>12/30/1988</td>
              <td>8</td>
              <td>8</td>
              <td>819524</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном р-не</td>
              <td>2/16/2009</td>
          </tr>
          <tr id="LC391" class="js-file-line">
            <td id="L391" class="blob-num js-line-number" data-line-number="391"></td>
              <td>МТ-131106</td>
              <td>2674571</td>
              <td>Сержант</td>
              <td>Кучинский Юрий Георгиевич</td>
              <td>11/20/1996</td>
              <td>8</td>
              <td>16</td>
              <td>422466</td>
              <td>отделом УФМС России по Хабаровскому краю и Еврейской автономной обл</td>
              <td>02.08.2017</td>
          </tr>
          <tr id="LC392" class="js-file-line">
            <td id="L392" class="blob-num js-line-number" data-line-number="392"></td>
              <td>МТ-244182</td>
              <td>2692568</td>
              <td>Сержант</td>
              <td>Лесник Михаил Алексеевич</td>
              <td>9/27/1997</td>
              <td>10</td>
              <td>11</td>
              <td>264913</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г. ЗЕЯ</td>
              <td>11/17/2011</td>
          </tr>
          <tr id="LC393" class="js-file-line">
            <td id="L393" class="blob-num js-line-number" data-line-number="393"></td>
              <td>МТ-244180</td>
              <td>2692606</td>
              <td>Сержант</td>
              <td>Присивко Юрий Иванович</td>
              <td>7/21/1997</td>
              <td>10</td>
              <td>11</td>
              <td>307369</td>
              <td>МО УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В ГОРОДЕ БЕЛОГОРСКЕ</td>
              <td>5/30/2012</td>
          </tr>
          <tr id="LC394" class="js-file-line">
            <td id="L394" class="blob-num js-line-number" data-line-number="394"></td>
              <td>МТ-235575</td>
              <td>2692900</td>
              <td>Сержант</td>
              <td>Шулятьев Дмитрий Алексеевич</td>
              <td>09.02.1992</td>
              <td>76</td>
              <td>12</td>
              <td>656713</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В ЦЕНТРАЛЬНОМ Р</td>
              <td>А11/19/2012</td>
          </tr>
          <tr id="LC395" class="js-file-line">
            <td id="L395" class="blob-num js-line-number" data-line-number="395"></td>
              <td>МТ-173870</td>
              <td>2696519</td>
              <td>Сержант</td>
              <td>Янковой Павел Владимирович</td>
              <td>10/24/1989</td>
              <td>5</td>
              <td>9</td>
              <td>684808</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В ПОЖАРСКОМ МУ</td>
              <td>11.06.2009</td>
          </tr>
          <tr id="LC396" class="js-file-line">
            <td id="L396" class="blob-num js-line-number" data-line-number="396"></td>
              <td>МТ-208476</td>
              <td>2696756</td>
              <td>Сержант</td>
              <td>Ахметгареев Ринат Маратович</td>
              <td>05.06.1997</td>
              <td>5</td>
              <td>10</td>
              <td>840661</td>
              <td>УФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В ХАСАНСКОМ МУНИЦИПАЛЬНО</td>
              <td>М5/16/2011</td>
          </tr>
          <tr id="LC397" class="js-file-line">
            <td id="L397" class="blob-num js-line-number" data-line-number="397"></td>
              <td>СУ-147240</td>
              <td>2700901</td>
              <td>Сержант</td>
              <td>Колесников Андрей Евгеньевич</td>
              <td>5/14/1992</td>
              <td>25</td>
              <td>13</td>
              <td>831579</td>
              <td>отделом УФМС России по Иркутской области в гор. Братске и Братском рай</td>
              <td>о5/22/2013</td>
          </tr>
          <tr id="LC398" class="js-file-line">
            <td id="L398" class="blob-num js-line-number" data-line-number="398"></td>
              <td>МТ-204646</td>
              <td>2701157</td>
              <td>Сержант</td>
              <td>Кузнецов Александр Николаевич</td>
              <td>1/23/1988</td>
              <td>8</td>
              <td>8</td>
              <td>816514</td>
              <td>ОУФМС России по Хабаровскому краю в Кировском районе города Хабаров</td>
              <td>2/19/2009</td>
          </tr>
          <tr id="LC399" class="js-file-line">
            <td id="L399" class="blob-num js-line-number" data-line-number="399"></td>
              <td>МТ-127069</td>
              <td>2702123</td>
              <td>Сержант</td>
              <td>Томашевский Алексей Владимирович</td>
              <td>09.11.1984</td>
              <td>8</td>
              <td>4</td>
              <td>464323</td>
              <td>УВД ВЯЗЕМСКОГО РАЙОНА ХАБАРОВСКОГО КРАЯ</td>
              <td>5/25/2005</td>
          </tr>
          <tr id="LC400" class="js-file-line">
            <td id="L400" class="blob-num js-line-number" data-line-number="400"></td>
              <td>МТ-182053</td>
              <td>2702124</td>
              <td>Сержант</td>
              <td>Алибеков Эмирлан Заидович</td>
              <td>06.12.1987</td>
              <td>82</td>
              <td>7</td>
              <td>290738</td>
              <td>ТП УФМС ПО РЕСПУБЛИКЕ ДАГЕСТАН В ГОРОДЕ ДАГЕСТАНСКИЕ ОГНИ</td>
              <td>7/13/2007</td>
          </tr>
          <tr id="LC401" class="js-file-line">
            <td id="L401" class="blob-num js-line-number" data-line-number="401"></td>
              <td>Ю-857413</td>
              <td>2702131</td>
              <td>Сержант</td>
              <td>Бирюков Владислав Денисович</td>
              <td>7/18/1994</td>
              <td>8</td>
              <td>14</td>
              <td>246340</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном районе</td>
              <td>10/22/2015</td>
          </tr>
          <tr id="LC402" class="js-file-line">
            <td id="L402" class="blob-num js-line-number" data-line-number="402"></td>
              <td>ВС-165304</td>
              <td>2702877</td>
              <td>Сержант</td>
              <td>Амиров Ибрагим Алилович</td>
              <td>07.03.1996</td>
              <td>82</td>
              <td>12</td>
              <td>263008</td>
              <td>ОУФМС РОССИИ ПО РЕСП. ДАГЕСТАН В КИЗЛЯРСКОМ РАЙОНЕ</td>
              <td>1/17/2013</td>
          </tr>
          <tr id="LC403" class="js-file-line">
            <td id="L403" class="blob-num js-line-number" data-line-number="403"></td>
              <td>МТ-244337</td>
              <td>2715077</td>
              <td>Сержант</td>
              <td>Сучков Виктор Григорьевич</td>
              <td>03.04.1996</td>
              <td>10</td>
              <td>9</td>
              <td>197167</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г. БЕЛОГОРСК</td>
              <td>04.05.2010</td>
          </tr>
          <tr id="LC404" class="js-file-line">
            <td id="L404" class="blob-num js-line-number" data-line-number="404"></td>
              <td>СУ-192529</td>
              <td>2728365</td>
              <td>Сержант</td>
              <td>Мельников Дмитрий Алексеевич</td>
              <td>11/30/1996</td>
              <td>8</td>
              <td>16</td>
              <td>428166</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской автономной области в Х</td>
              <td>03.03.2017</td>
          </tr>
          <tr id="LC405" class="js-file-line">
            <td id="L405" class="blob-num js-line-number" data-line-number="405"></td>
              <td>МТ-204210</td>
              <td>2737892</td>
              <td>Сержант</td>
              <td>Чернышёв Игорь Владимирович</td>
              <td>1/26/1980</td>
              <td>8</td>
              <td>4</td>
              <td>192200</td>
              <td>ОВД Хабаровского района Хабаровского края</td>
              <td>9/29/2003</td>
          </tr>
          <tr id="LC406" class="js-file-line">
            <td id="L406" class="blob-num js-line-number" data-line-number="406"></td>
              <td>МТ-127096</td>
              <td>2740627</td>
              <td>Сержант</td>
              <td>Еремеев Константин Сергеевич</td>
              <td>4/14/1984</td>
              <td>99</td>
              <td>5</td>
              <td>200454</td>
              <td>Теплоозерским ОВД Облученского района ЕАО</td>
              <td>11.11.2015</td>
          </tr>
          <tr id="LC407" class="js-file-line">
            <td id="L407" class="blob-num js-line-number" data-line-number="407"></td>
              <td>СУ-303713</td>
              <td>2751011</td>
              <td>Сержант</td>
              <td>Антонов Алексей Викторович</td>
              <td>07.11.1993</td>
              <td>52</td>
              <td>13</td>
              <td>266566</td>
              <td>ОУФМС РОССИИ ПО ОМСКОЙ ОБЛАСТИ В ТАВРИЧЕСКОМ РАЙОНЕ</td>
              <td>9/19/2013</td>
          </tr>
          <tr id="LC408" class="js-file-line">
            <td id="L408" class="blob-num js-line-number" data-line-number="408"></td>
              <td>СУ-303107</td>
              <td>2751037</td>
              <td>Сержант</td>
              <td>Елтышев Владислав Сергеевич</td>
              <td>10.12.1995</td>
              <td>52</td>
              <td>15</td>
              <td>483304</td>
              <td>ОУФМС РОССИИ ПО ОМСКОЙ ОБЛ. В ЛЕНИНСКОМ АДМИНИСТРАТИВНОМ </td>
              <td>О11/3/2015</td>
          </tr>
          <tr id="LC409" class="js-file-line">
            <td id="L409" class="blob-num js-line-number" data-line-number="409"></td>
              <td>МТ-115286</td>
              <td>2758317</td>
              <td>Сержант</td>
              <td>Жапов Бато Жаргалович</td>
              <td>5/18/1995</td>
              <td>76</td>
              <td>15</td>
              <td>836631</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В АГИНСКОМ РАЙО</td>
              <td>Н9/23/2015</td>
          </tr>
          <tr id="LC410" class="js-file-line">
            <td id="L410" class="blob-num js-line-number" data-line-number="410"></td>
              <td>ВС-145663</td>
              <td>2762877</td>
              <td>Сержант</td>
              <td>Саркисов Хачик Эдуардович</td>
              <td>1/13/1997</td>
              <td>7</td>
              <td>10</td>
              <td>491189</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕАО В ХАБАРОВСКОМ РАЙОН</td>
              <td>Е2/5/2011</td>
          </tr>
          <tr id="LC411" class="js-file-line">
            <td id="L411" class="blob-num js-line-number" data-line-number="411"></td>
              <td>МТ-156880</td>
              <td>2772654</td>
              <td>Сержант</td>
              <td>Узеринов Андрей Витальевич</td>
              <td>5/13/1996</td>
              <td>64</td>
              <td>15</td>
              <td>889688</td>
              <td>ОТДЕЛЕНИЕ УФМС РОССИИ ПО САХАЛИНСКОЙ ОБЛАСТИ В ХОЛМСКОМ РАЙ</td>
              <td>09.09.2015</td>
          </tr>
          <tr id="LC412" class="js-file-line">
            <td id="L412" class="blob-num js-line-number" data-line-number="412"></td>
              <td>МТ-131764</td>
              <td>2772712</td>
              <td>Сержант</td>
              <td>Акимов Никита Алексеевич</td>
              <td>04.11.1996</td>
              <td>8</td>
              <td>9</td>
              <td>891568</td>
              <td>МО УФМС России по Хабаровскому краю г. Комсомольск-на-Амуре</td>
              <td>4/19/2010</td>
          </tr>
          <tr id="LC413" class="js-file-line">
            <td id="L413" class="blob-num js-line-number" data-line-number="413"></td>
              <td>СУ-289187</td>
              <td>2791781</td>
              <td>Сержант</td>
              <td>Рыжиков Андрей Сергеевич</td>
              <td>11.02.1996</td>
              <td>53</td>
              <td>15</td>
              <td>597206</td>
              <td>ТП УФМС РОССИИ ПО ОРЕНБУРГСКОЙ ОБЛАСТИ В ПЕРЕВОЛОЦКОМ РАЙОНЕ</td>
              <td>11/13/2015</td>
          </tr>
          <tr id="LC414" class="js-file-line">
            <td id="L414" class="blob-num js-line-number" data-line-number="414"></td>
              <td>МТ-217007</td>
              <td>2804488</td>
              <td>Сержант</td>
              <td>Оносов Алексей Игоревич</td>
              <td>10.08.1982</td>
              <td>8</td>
              <td>7</td>
              <td>734067</td>
              <td>Отдл. УФМС России по Хабаровскому краю в Железнодорожном районе го</td>
              <td>р4/3/2008</td>
          </tr>
          <tr id="LC415" class="js-file-line">
            <td id="L415" class="blob-num js-line-number" data-line-number="415"></td>
              <td>МТ-182057</td>
              <td>2804508</td>
              <td>Сержант</td>
              <td>Форостов Денис Александрович</td>
              <td>6/27/1982</td>
              <td>5</td>
              <td>3</td>
              <td>245503</td>
              <td>Хорыльским РОВД Приморского края</td>
              <td>12/17/2002</td>
          </tr>
          <tr id="LC416" class="js-file-line">
            <td id="L416" class="blob-num js-line-number" data-line-number="416"></td>
              <td>СУ-484027</td>
              <td>2804521</td>
              <td>Сержант</td>
              <td>Швецов Андрей Владимирович</td>
              <td>07.10.1988</td>
              <td>8</td>
              <td>9</td>
              <td>840042</td>
              <td>УФМС России по Хабаровскому краю в Индустриальном районе</td>
              <td>11/23/2015</td>
          </tr>
          <tr id="LC417" class="js-file-line">
            <td id="L417" class="blob-num js-line-number" data-line-number="417"></td>
              <td>МТ-217003</td>
              <td>2807827</td>
              <td>Сержант</td>
              <td>Поеров Егор Викторович</td>
              <td>6/15/1981</td>
              <td>8</td>
              <td>5</td>
              <td>583189</td>
              <td>ОВД Краснофлотского района г. Хабаровска</td>
              <td>11/18/2005</td>
          </tr>
          <tr id="LC418" class="js-file-line">
            <td id="L418" class="blob-num js-line-number" data-line-number="418"></td>
              <td>МТ-182078</td>
              <td>2807832</td>
              <td>Сержант</td>
              <td>Суетин Даниил Енчерович</td>
              <td>8/31/1983</td>
              <td>8</td>
              <td>4</td>
              <td>381539</td>
              <td>УВД Железнодорожного района города Хабаровска</td>
              <td>08.08.2005</td>
          </tr>
          <tr id="LC419" class="js-file-line">
            <td id="L419" class="blob-num js-line-number" data-line-number="419"></td>
              <td>МТ-182086</td>
              <td>2809266</td>
              <td>Сержант</td>
              <td>Лапушкин Виктор Николаевич</td>
              <td>09.04.1985</td>
              <td>10</td>
              <td>4</td>
              <td>896746</td>
              <td>отделом внутренних дел Архаринского района Амурской области</td>
              <td>9/21/2005</td>
          </tr>
          <tr id="LC420" class="js-file-line">
            <td id="L420" class="blob-num js-line-number" data-line-number="420"></td>
              <td>Х-840528</td>
              <td>2809549</td>
              <td>Сержант</td>
              <td>Сиворонов Денис Игоревич</td>
              <td>5/15/1991</td>
              <td>8</td>
              <td>10</td>
              <td>947503</td>
              <td>ОУФМС России по Хабаровскому краю в Нанайском р-не</td>
              <td>02.08.2016</td>
          </tr>
          <tr id="LC421" class="js-file-line">
            <td id="L421" class="blob-num js-line-number" data-line-number="421"></td>
              <td>МТ-204710</td>
              <td>2812704</td>
              <td>Сержант</td>
              <td>Терентьев Евгений Викторович</td>
              <td>4/22/1984</td>
              <td>8</td>
              <td>4</td>
              <td>326539</td>
              <td>2 ОТДЕЛЕНИЕМ МИЛИЦИИ УВД ИНДУСТРИАЛЬНОГО РАЙОНА ГОРОДА ХАБА</td>
              <td>03.09.2016</td>
          </tr>
          <tr id="LC422" class="js-file-line">
            <td id="L422" class="blob-num js-line-number" data-line-number="422"></td>
              <td>МТ-182181</td>
              <td>2816715</td>
              <td>Сержант</td>
              <td>Байбус Сергей Юрьевич</td>
              <td>8/19/1983</td>
              <td>8</td>
              <td>5</td>
              <td>523507</td>
              <td>УВД Индустриального района г. Хабаровска Хабаровского края</td>
              <td>12.07.2006</td>
          </tr>
          <tr id="LC423" class="js-file-line">
            <td id="L423" class="blob-num js-line-number" data-line-number="423"></td>
              <td>Х-903488</td>
              <td>2818812</td>
              <td>Сержант</td>
              <td>Мехонин Степан Константинович</td>
              <td>10/30/1989</td>
              <td>25</td>
              <td>9</td>
              <td>236664</td>
              <td>отделением УФМС России по Иркутской области в г. Зима и Зиминском рай</td>
              <td>11/18/2009</td>
          </tr>
          <tr id="LC424" class="js-file-line">
            <td id="L424" class="blob-num js-line-number" data-line-number="424"></td>
              <td>СУ-094267</td>
              <td>2828261</td>
              <td>Сержант</td>
              <td>Инамов Равшан Рахимович</td>
              <td>7/16/1985</td>
              <td>80</td>
              <td>6</td>
              <td>74207</td>
              <td>Белорецким ГРУВД республики Башкортостан</td>
              <td>12.06.2006</td>
          </tr>
          <tr id="LC425" class="js-file-line">
            <td id="L425" class="blob-num js-line-number" data-line-number="425"></td>
              <td>Ю-821122</td>
              <td>2828285</td>
              <td>Сержант</td>
              <td>Заим Олег Константинович</td>
              <td>12/26/1992</td>
              <td>10</td>
              <td>13</td>
              <td>369448</td>
              <td>УФМС России по Амурской области в городе Свободном</td>
              <td>09.06.2013</td>
          </tr>
          <tr id="LC426" class="js-file-line">
            <td id="L426" class="blob-num js-line-number" data-line-number="426"></td>
              <td>Х-833574</td>
              <td>2828288</td>
              <td>Сержант</td>
              <td>Иванков Егор Владимирович</td>
              <td>5/31/1991</td>
              <td>8</td>
              <td>11</td>
              <td>36906</td>
              <td>ОУФМС России по Хабаровскому краю в Северном округе города Хабаровск</td>
              <td>9/20/2011</td>
          </tr>
          <tr id="LC427" class="js-file-line">
            <td id="L427" class="blob-num js-line-number" data-line-number="427"></td>
              <td>МТ-196464</td>
              <td>2828776</td>
              <td>Сержант</td>
              <td>Тарабанько Иван Александрович</td>
              <td>08.05.1990</td>
              <td>10</td>
              <td>10</td>
              <td>239238</td>
              <td>МО УФМС России по Аумрской области в городе Благовещенск</td>
              <td>1/17/2011</td>
          </tr>
          <tr id="LC428" class="js-file-line">
            <td id="L428" class="blob-num js-line-number" data-line-number="428"></td>
              <td>СУ-424473</td>
              <td>2839317</td>
              <td>Сержант</td>
              <td>Степанов Дмитрий Алексеевич</td>
              <td>2/25/1998</td>
              <td>98</td>
              <td>11</td>
              <td>395497</td>
              <td>УФМС РОССИИ ПО РЕСП. САХА (ЯКУТИЯ) В Г. НЕРЮНГРИ</td>
              <td>4/20/2012</td>
          </tr>
          <tr id="LC429" class="js-file-line">
            <td id="L429" class="blob-num js-line-number" data-line-number="429"></td>
              <td>Ю-128100</td>
              <td>2846582</td>
              <td>Сержант</td>
              <td>Непомнящий Анатолий Андреевич</td>
              <td>5/18/1992</td>
              <td>4</td>
              <td>11</td>
              <td>297173</td>
              <td>ТП УФМС России по Красноярскому краю в Нижнеингашском районе</td>
              <td>07.03.2012</td>
          </tr>
          <tr id="LC430" class="js-file-line">
            <td id="L430" class="blob-num js-line-number" data-line-number="430"></td>
              <td>Х-833152</td>
              <td>2847804</td>
              <td>Сержант</td>
              <td>Подлесный Евгений Алексеевич</td>
              <td>11.03.1990</td>
              <td>8</td>
              <td>10</td>
              <td>961913</td>
              <td>ОУФМС России по Хабаровскому краю в Северном округе г. Хабаровска</td>
              <td>11/25/2010</td>
          </tr>
          <tr id="LC431" class="js-file-line">
            <td id="L431" class="blob-num js-line-number" data-line-number="431"></td>
              <td>ВС-273061</td>
              <td>2860091</td>
              <td>Сержант</td>
              <td>Гревцев Михаил Александрович</td>
              <td>10/17/1997</td>
              <td>53</td>
              <td>11</td>
              <td>70633</td>
              <td>ТП УФМС РОССИИ ПО ОРЕНБУРГСКОЙ ОБЛАСТИ В ШЕРЛИКСКОМ РАЙОНЕ</td>
              <td>11/24/2011</td>
          </tr>
          <tr id="LC432" class="js-file-line">
            <td id="L432" class="blob-num js-line-number" data-line-number="432"></td>
              <td>Х-785979</td>
              <td>2875736</td>
              <td>Сержант</td>
              <td>Максимов Иван Владимирович</td>
              <td>04.02.1992</td>
              <td>8</td>
              <td>11</td>
              <td>75500</td>
              <td>ОУ ФМС России по Хабаровскому краю в Северном районе г. Хабаровска</td>
              <td>4/16/2012</td>
          </tr>
          <tr id="LC433" class="js-file-line">
            <td id="L433" class="blob-num js-line-number" data-line-number="433"></td>
              <td>ВС-263871</td>
              <td>2894041</td>
              <td>Сержант</td>
              <td>Харисов Руслан Марсильевич</td>
              <td>9/23/1997</td>
              <td>75</td>
              <td>12</td>
              <td>263883</td>
              <td>УФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В ОРДЖОНИКИДЗЕВСКОМ РАЙ</td>
              <td>5/15/2013</td>
          </tr>
          <tr id="LC434" class="js-file-line">
            <td id="L434" class="blob-num js-line-number" data-line-number="434"></td>
              <td>ВС-018289</td>
              <td>2920839</td>
              <td>Сержант</td>
              <td>Зиновьев Леонид Витальевич</td>
              <td>02.02.1997</td>
              <td>63</td>
              <td>10</td>
              <td>592035</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В ЛЕНИНСКОМ РАЙО</td>
              <td>2/14/2011</td>
          </tr>
          <tr id="LC435" class="js-file-line">
            <td id="L435" class="blob-num js-line-number" data-line-number="435"></td>
              <td>МТ-217030</td>
              <td>2968632</td>
              <td>Сержант</td>
              <td>Коняев Анатолий Васильевич</td>
              <td>10/17/1988</td>
              <td>8</td>
              <td>8</td>
              <td>807019</td>
              <td>УФМС РФ по Хабаровскому краю в Краснофлотском районе г. Хабаровск</td>
              <td>11/27/2008</td>
          </tr>
          <tr id="LC436" class="js-file-line">
            <td id="L436" class="blob-num js-line-number" data-line-number="436"></td>
              <td>СУ-470181</td>
              <td>2969338</td>
              <td>Сержант</td>
              <td>Паздников Виктор Андреевич</td>
              <td>2/18/1993</td>
              <td>99</td>
              <td>12</td>
              <td>284565</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛЕНИЕМ ОФМС РОССИИ ПО ЕВРЕЙСКОЙ АВТОНОМН</td>
              <td>03.06.2013</td>
          </tr>
          <tr id="LC437" class="js-file-line">
            <td id="L437" class="blob-num js-line-number" data-line-number="437"></td>
              <td>СУ-470227</td>
              <td>2970366</td>
              <td>Сержант</td>
              <td>Полоротов Виктор Викторович</td>
              <td>11/19/1993</td>
              <td>99</td>
              <td>13</td>
              <td>289117</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛЕНИЕМ ОФМС РОССИИ ПО ЕВРЕЙСКОЙ АВТОНОМН</td>
              <td>11/26/2013</td>
          </tr>
          <tr id="LC438" class="js-file-line">
            <td id="L438" class="blob-num js-line-number" data-line-number="438"></td>
              <td>МТ-182241</td>
              <td>2971407</td>
              <td>Сержант</td>
              <td>Алтунин Сергей Алексеевич</td>
              <td>05.11.1994</td>
              <td>8</td>
              <td>14</td>
              <td>244912</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЦЕНТРАЛЬНОМ РАЙОНЕ Г.ХАБА</td>
              <td>7/24/2014</td>
          </tr>
          <tr id="LC439" class="js-file-line">
            <td id="L439" class="blob-num js-line-number" data-line-number="439"></td>
              <td>МТ-026829</td>
              <td>2971413</td>
              <td>Сержант</td>
              <td>Мархлевский Богдан Витальевич</td>
              <td>04.11.1993</td>
              <td>73</td>
              <td>12</td>
              <td>958374</td>
              <td>УФМС РОССИИ ПО УЛЬЯНОВСКОЙ ОБЛАСТИ В ЧЕРДАКЛИНСКОМ РАЙОНЕ</td>
              <td>4/29/2013</td>
          </tr>
          <tr id="LC440" class="js-file-line">
            <td id="L440" class="blob-num js-line-number" data-line-number="440"></td>
              <td>Х-811209</td>
              <td>2974392</td>
              <td>Сержант</td>
              <td>Антышев Игорь Александрович</td>
              <td>11.03.1988</td>
              <td>10</td>
              <td>9</td>
              <td>173900</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г.СВОБОДНОМ</td>
              <td>10.01.2009</td>
          </tr>
          <tr id="LC441" class="js-file-line">
            <td id="L441" class="blob-num js-line-number" data-line-number="441"></td>
              <td>Ю-127024</td>
              <td>2974406</td>
              <td>Сержант</td>
              <td>Винокуров Евгений Васильевич</td>
              <td>4/29/1991</td>
              <td>98</td>
              <td>10</td>
              <td>323552</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА (ЯКУТИЯ) В СРЕДНЕКОЛЫНСКОМ Р</td>
              <td>05.05.2011</td>
          </tr>
          <tr id="LC442" class="js-file-line">
            <td id="L442" class="blob-num js-line-number" data-line-number="442"></td>
              <td>У-996965</td>
              <td>2976469</td>
              <td>Сержант</td>
              <td>Антонов Владимир Александрович</td>
              <td>9/17/1985</td>
              <td>64</td>
              <td>4</td>
              <td>552884</td>
              <td>РОВД САХАЛИНСКОЙ ОБЛАСТИ</td>
              <td>11/17/2005</td>
          </tr>
          <tr id="LC443" class="js-file-line">
            <td id="L443" class="blob-num js-line-number" data-line-number="443"></td>
              <td>Х-849442</td>
              <td>2988440</td>
              <td>Сержант</td>
              <td>Черников Михаил Сергеевич</td>
              <td>7/31/1987</td>
              <td>8</td>
              <td>8</td>
              <td>803138</td>
              <td>отделением УФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>11/20/2008</td>
          </tr>
          <tr id="LC444" class="js-file-line">
            <td id="L444" class="blob-num js-line-number" data-line-number="444"></td>
              <td>МТ-204278</td>
              <td>3028083</td>
              <td>Сержант</td>
              <td>Перевезенцев Адам Сергеевич</td>
              <td>3/31/1987</td>
              <td>8</td>
              <td>6</td>
              <td>664655</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ ХАБАРОВСКОГО РАЙОНА</td>
              <td>11/26/2007</td>
          </tr>
          <tr id="LC445" class="js-file-line">
            <td id="L445" class="blob-num js-line-number" data-line-number="445"></td>
              <td>Э-062450</td>
              <td>3130699</td>
              <td>Сержант</td>
              <td>Абдуллаев Набигулла Саидуллаевич</td>
              <td>4/29/1988</td>
              <td>82</td>
              <td>8</td>
              <td>470714</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ ДАГЕСТАН В ДАХАДАЕВСКОМ РАЙОНЕ</td>
              <td>06.11.2008</td>
          </tr>
          <tr id="LC446" class="js-file-line">
            <td id="L446" class="blob-num js-line-number" data-line-number="446"></td>
              <td>Ю-277587</td>
              <td>3130714</td>
              <td>Сержант</td>
              <td>Ваделов Ибрагим Ахметович</td>
              <td>3/26/1989</td>
              <td>42</td>
              <td>10</td>
              <td>644882</td>
              <td>ТЕРРИТОРИАЛЬНЫМ ПУНКТОМ УФМС РОССИИ ПО ЛИПЕЦКОЙ ОБЛАСТИ В И</td>
              <td>11/23/2010</td>
          </tr>
          <tr id="LC447" class="js-file-line">
            <td id="L447" class="blob-num js-line-number" data-line-number="447"></td>
              <td>Х-849081</td>
              <td>3132175</td>
              <td>Сержант</td>
              <td>Гладышев Денис Александрович</td>
              <td>2/22/1989</td>
              <td>8</td>
              <td>13</td>
              <td>217930</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе г. Хабаро</td>
              <td>в3/13/2014</td>
          </tr>
          <tr id="LC448" class="js-file-line">
            <td id="L448" class="blob-num js-line-number" data-line-number="448"></td>
              <td>Х-023264</td>
              <td>3134919</td>
              <td>Сержант</td>
              <td>Рябинин Сергей Олегович</td>
              <td>01.11.1976</td>
              <td>8</td>
              <td>10</td>
              <td>926842</td>
              <td>ОУФМС России по Хабаровскому краю в Ванинском районе</td>
              <td>2/17/2003</td>
          </tr>
          <tr id="LC449" class="js-file-line">
            <td id="L449" class="blob-num js-line-number" data-line-number="449"></td>
              <td>Ю-649594</td>
              <td>3135092</td>
              <td>Сержант</td>
              <td>Щербаков Тимофей Валерьевич</td>
              <td>2/13/1992</td>
              <td>37</td>
              <td>11</td>
              <td>440103</td>
              <td>ТП УФМС России по Курганской области в г. Звериноголовском районе</td>
              <td>2/15/2012</td>
          </tr>
          <tr id="LC450" class="js-file-line">
            <td id="L450" class="blob-num js-line-number" data-line-number="450"></td>
              <td>МТ-171217</td>
              <td>3278182</td>
              <td>Сержант</td>
              <td>Щедрин Роман Викторович</td>
              <td>06.04.1985</td>
              <td>8</td>
              <td>4</td>
              <td>374313</td>
              <td>Отделом внутренних дел района им. Лазо Хабаровского края</td>
              <td>7/13/2005</td>
          </tr>
          <tr id="LC451" class="js-file-line">
            <td id="L451" class="blob-num js-line-number" data-line-number="451"></td>
              <td>МТ-178246</td>
              <td>3281920</td>
              <td>Сержант</td>
              <td>Гантимуров Андрей Борисович</td>
              <td>2/19/1992</td>
              <td>76</td>
              <td>14</td>
              <td>796530</td>
              <td>Отделением УФМС России по Забайкальскому краю в Карымском районе</td>
              <td>3/16/2015</td>
          </tr>
          <tr id="LC452" class="js-file-line">
            <td id="L452" class="blob-num js-line-number" data-line-number="452"></td>
              <td>МТ-164263</td>
              <td>3283065</td>
              <td>Сержант</td>
              <td>Бодурхонов Шамим</td>
              <td>10/28/1990</td>
              <td>8</td>
              <td>15</td>
              <td>347069</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском р-не</td>
              <td>12.09.2015</td>
          </tr>
          <tr id="LC453" class="js-file-line">
            <td id="L453" class="blob-num js-line-number" data-line-number="453"></td>
              <td>МТ-348833</td>
              <td>3283095</td>
              <td>Сержант</td>
              <td>Ефимов Александр Викторович</td>
              <td>5/21/1993</td>
              <td>4</td>
              <td>13</td>
              <td>516153</td>
              <td>ОУФМС  России по Красноярскому краю и Нижнеингашскому району</td>
              <td>1/30/2014</td>
          </tr>
          <tr id="LC454" class="js-file-line">
            <td id="L454" class="blob-num js-line-number" data-line-number="454"></td>
              <td>ВС-166038</td>
              <td>3300765</td>
              <td>Сержант</td>
              <td>Массуев Казбек Магомедович</td>
              <td>02.05.1994</td>
              <td>82</td>
              <td>14</td>
              <td>583928</td>
              <td>ТП УФМС России по республике Дагестан в Лакском р-не</td>
              <td>1/28/2015</td>
          </tr>
          <tr id="LC455" class="js-file-line">
            <td id="L455" class="blob-num js-line-number" data-line-number="455"></td>
              <td>МТ-129969</td>
              <td>3431808</td>
              <td>Сержант</td>
              <td>Светланов Борис Сергеевич</td>
              <td>4/22/1986</td>
              <td>64</td>
              <td>4</td>
              <td>559716</td>
              <td>ОВД г. Макарова Сахалинской области</td>
              <td>05.10.2006</td>
          </tr>
          <tr id="LC456" class="js-file-line">
            <td id="L456" class="blob-num js-line-number" data-line-number="456"></td>
              <td>Ф-785485</td>
              <td>3437346</td>
              <td>Сержант</td>
              <td>Козлов Иван Николаевич</td>
              <td>4/21/1984</td>
              <td>53</td>
              <td>4</td>
              <td>145060</td>
              <td>Соль-Илецким РОВД Оренбургской области</td>
              <td>5/14/2004</td>
          </tr>
          <tr id="LC457" class="js-file-line">
            <td id="L457" class="blob-num js-line-number" data-line-number="457"></td>
              <td>МТ-173786</td>
              <td>3437409</td>
              <td>Сержант</td>
              <td>Оспельников Максим Николаевич</td>
              <td>11.12.1993</td>
              <td>8</td>
              <td>13</td>
              <td>202400</td>
              <td>ОУФМС по Хабаровскому краю в Северном округе г. Хабаровска</td>
              <td>12.12.2013</td>
          </tr>
          <tr id="LC458" class="js-file-line">
            <td id="L458" class="blob-num js-line-number" data-line-number="458"></td>
              <td>Ю-831533</td>
              <td>3442522</td>
              <td>Сержант</td>
              <td>Чепурной Михаил Владимирович</td>
              <td>5/23/1993</td>
              <td>8</td>
              <td>17</td>
              <td>430272</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской автономной области в С</td>
              <td>4/25/2017</td>
          </tr>
          <tr id="LC459" class="js-file-line">
            <td id="L459" class="blob-num js-line-number" data-line-number="459"></td>
              <td>Ю-848890</td>
              <td>3449910</td>
              <td>Сержант</td>
              <td>Лутков Владимир Игоревич</td>
              <td>1/17/1993</td>
              <td>10</td>
              <td>12</td>
              <td>323104</td>
              <td>ОУФМС России по Амурской области в Михайловском районе</td>
              <td>1/31/2013</td>
          </tr>
          <tr id="LC460" class="js-file-line">
            <td id="L460" class="blob-num js-line-number" data-line-number="460"></td>
              <td>МТ-228784</td>
              <td>3450594</td>
              <td>Сержант</td>
              <td>Васильев Сергей Анатольевич</td>
              <td>01.10.1991</td>
              <td>99</td>
              <td>11</td>
              <td>276132</td>
              <td>ТП в п. Теплоозерск отделения ОФМС России по Еврейской автономной об</td>
              <td>л4/18/2012</td>
          </tr>
          <tr id="LC461" class="js-file-line">
            <td id="L461" class="blob-num js-line-number" data-line-number="461"></td>
              <td>Х-827266</td>
              <td>1084797</td>
              <td>Младший сержант</td>
              <td>Макаренкова Екатерина Петровна</td>
              <td>12.09.1966</td>
              <td>99</td>
              <td>99</td>
              <td>10515</td>
              <td>Ленинским РОВД Еврейской Автономнойобласти</td>
              <td>10/29/1999</td>
          </tr>
          <tr id="LC462" class="js-file-line">
            <td id="L462" class="blob-num js-line-number" data-line-number="462"></td>
              <td>Х-827792</td>
              <td>1088608</td>
              <td>Младший сержант</td>
              <td>Матцапура Леонид Леонидович</td>
              <td>6/17/1990</td>
              <td>7</td>
              <td>10</td>
              <td>490510</td>
              <td>Отделением УФМС России по Ставропольскому краю в г.Есентуки</td>
              <td>12/28/2010</td>
          </tr>
          <tr id="LC463" class="js-file-line">
            <td id="L463" class="blob-num js-line-number" data-line-number="463"></td>
              <td>Х-827214</td>
              <td>1098612</td>
              <td>Младший сержант</td>
              <td>Жукова Оксана Вячеславовна</td>
              <td>03.11.1972</td>
              <td>8</td>
              <td>4</td>
              <td>228154</td>
              <td>2 ОТДЕЛЕНИЕМ МИЛИЦИИ УВД ИНДУСТРИАЛЬНОГО Р-НА ГОР. ХАБАРОВСК</td>
              <td>А11/6/2003</td>
          </tr>
          <tr id="LC464" class="js-file-line">
            <td id="L464" class="blob-num js-line-number" data-line-number="464"></td>
              <td>Х-827225</td>
              <td>1100618</td>
              <td>Младший сержант</td>
              <td>Малеванная Елена Петровна</td>
              <td>08.05.1961</td>
              <td>8</td>
              <td>5</td>
              <td>491611</td>
              <td>УВД Индустриального р-на г.Хабаровска</td>
              <td>10.05.2006</td>
          </tr>
          <tr id="LC465" class="js-file-line">
            <td id="L465" class="blob-num js-line-number" data-line-number="465"></td>
              <td>Х-827231</td>
              <td>1103611</td>
              <td>Младший сержант</td>
              <td>Мошак Наталья Николаевна</td>
              <td>12/30/1970</td>
              <td>8</td>
              <td>4</td>
              <td>326150</td>
              <td>2 ОМ УВД ИНДУСТРИАЛЬНОГО Р-НА ГОР.ХАБАРОВСКА</td>
              <td>7/29/2004</td>
          </tr>
          <tr id="LC466" class="js-file-line">
            <td id="L466" class="blob-num js-line-number" data-line-number="466"></td>
              <td>Х-789886</td>
              <td>1311098</td>
              <td>Младший сержант</td>
              <td>Сташков Александр Анатольевич</td>
              <td>08.08.1993</td>
              <td>99</td>
              <td>8</td>
              <td>232286</td>
              <td>ООФМС РФ по ЕАО в г.Биробиджан</td>
              <td>07.01.2008</td>
          </tr>
          <tr id="LC467" class="js-file-line">
            <td id="L467" class="blob-num js-line-number" data-line-number="467"></td>
              <td>Ю-782780</td>
              <td>1343146</td>
              <td>Младший сержант</td>
              <td>Боков Дмитрий Александрович</td>
              <td>3/19/1990</td>
              <td>76</td>
              <td>10</td>
              <td>482191</td>
              <td>ОУФМС России по Забайкальскому краю в Центральном районе</td>
              <td>4/14/2010</td>
          </tr>
          <tr id="LC468" class="js-file-line">
            <td id="L468" class="blob-num js-line-number" data-line-number="468"></td>
              <td>Ю-837793</td>
              <td>1351774</td>
              <td>Младший сержант</td>
              <td>Лымарь Василий Анатольевич</td>
              <td>02.07.1993</td>
              <td>8</td>
              <td>12</td>
              <td>129304</td>
              <td>ОТДЕЛЕНИЕ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ</td>
              <td>4/28/2015</td>
          </tr>
          <tr id="LC469" class="js-file-line">
            <td id="L469" class="blob-num js-line-number" data-line-number="469"></td>
              <td>Ю-853005</td>
              <td>1362525</td>
              <td>Младший сержант</td>
              <td>Тарасов Николай Егорович</td>
              <td>10.05.1993</td>
              <td>98</td>
              <td>14</td>
              <td>529411</td>
              <td>МРО УФМС по респ. Саха (Якутия) в г. Якутске</td>
              <td>03.12.2014</td>
          </tr>
          <tr id="LC470" class="js-file-line">
            <td id="L470" class="blob-num js-line-number" data-line-number="470"></td>
              <td>Ю-841799</td>
              <td>1368483</td>
              <td>Младший сержант</td>
              <td>Исаченко Иван Витальевич</td>
              <td>12.04.1992</td>
              <td>8</td>
              <td>12</td>
              <td>145936</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе г. Хабаро</td>
              <td>в3/29/2013</td>
          </tr>
          <tr id="LC471" class="js-file-line">
            <td id="L471" class="blob-num js-line-number" data-line-number="471"></td>
              <td>Ю-854773</td>
              <td>1440993</td>
              <td>Младший сержант</td>
              <td>Нигматулин Дмитрий Дмитриевич</td>
              <td>7/30/1993</td>
              <td>8</td>
              <td>13</td>
              <td>170959</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>8/26/2013</td>
          </tr>
          <tr id="LC472" class="js-file-line">
            <td id="L472" class="blob-num js-line-number" data-line-number="472"></td>
              <td>Ю-776945</td>
              <td>1461260</td>
              <td>Младший сержант</td>
              <td>Вяткин Дмитрий Евгеньевич</td>
              <td>08.07.1992</td>
              <td>10</td>
              <td>13</td>
              <td>361738</td>
              <td>ТП УФМС России по Амурской области в пос. Прогресс</td>
              <td>07.01.2013</td>
          </tr>
          <tr id="LC473" class="js-file-line">
            <td id="L473" class="blob-num js-line-number" data-line-number="473"></td>
              <td>Х-790003</td>
              <td>1461940</td>
              <td>Младший сержант</td>
              <td>Никишин Андрей Александрович</td>
              <td>2/13/1993</td>
              <td>99</td>
              <td>13</td>
              <td>289740</td>
              <td>Межрайонным отд. ОФМС России по ЕАО в г. Биробиджан</td>
              <td>7/20/2013</td>
          </tr>
          <tr id="LC474" class="js-file-line">
            <td id="L474" class="blob-num js-line-number" data-line-number="474"></td>
              <td>МТ-309942</td>
              <td>1512355</td>
              <td>Младший сержант</td>
              <td>Бакушев Дмитрий Владимирович</td>
              <td>03.11.1994</td>
              <td>25</td>
              <td>9</td>
              <td>5747</td>
              <td>ОУФМС России по Иркутской обл. в г. Тайшете и Тайшетском р-не</td>
              <td>4/16/2008</td>
          </tr>
          <tr id="LC475" class="js-file-line">
            <td id="L475" class="blob-num js-line-number" data-line-number="475"></td>
              <td>Х-790285</td>
              <td>1522709</td>
              <td>Младший сержант</td>
              <td>Нижников Илья Сергеевич</td>
              <td>08.02.1993</td>
              <td>99</td>
              <td>8</td>
              <td>234181</td>
              <td>Отд. ОФМС РФ по ЕАО в Облученском районе</td>
              <td>11.11.2008</td>
          </tr>
          <tr id="LC476" class="js-file-line">
            <td id="L476" class="blob-num js-line-number" data-line-number="476"></td>
              <td>Ю-854890</td>
              <td>1530808</td>
              <td>Младший сержант</td>
              <td>Коляда Иван Анатольевич</td>
              <td>08.02.1993</td>
              <td>8</td>
              <td>5</td>
              <td>642416</td>
              <td>ОУФМС России по Хаб.краю в Краснофлотском районе</td>
              <td>09.04.2007</td>
          </tr>
          <tr id="LC477" class="js-file-line">
            <td id="L477" class="blob-num js-line-number" data-line-number="477"></td>
              <td>Ю-855895</td>
              <td>1630696</td>
              <td>Младший сержант</td>
              <td>Сергеев Сергей Сергеевич</td>
              <td>10.07.1993</td>
              <td>8</td>
              <td>6</td>
              <td>659541</td>
              <td>ОУФМС России по Хабаровскому краю в Центральном округе г. Комсомоль</td>
              <td>с11/7/2007</td>
          </tr>
          <tr id="LC478" class="js-file-line">
            <td id="L478" class="blob-num js-line-number" data-line-number="478"></td>
              <td>Ю-853782</td>
              <td>1635065</td>
              <td>Младший сержант</td>
              <td>Черняк Максим Эдуардович</td>
              <td>9/26/1991</td>
              <td>98</td>
              <td>12</td>
              <td>451380</td>
              <td>ТП УФМС России по Республике Саха (Якутия) в Ханкаласском районе</td>
              <td>12/14/2012</td>
          </tr>
          <tr id="LC479" class="js-file-line">
            <td id="L479" class="blob-num js-line-number" data-line-number="479"></td>
              <td>Ю-841806</td>
              <td>1639399</td>
              <td>Младший сержант</td>
              <td>Черепнин Алексей Павлович</td>
              <td>12/13/1992</td>
              <td>8</td>
              <td>12</td>
              <td>126683</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬН</td>
              <td>О1/17/2013</td>
          </tr>
          <tr id="LC480" class="js-file-line">
            <td id="L480" class="blob-num js-line-number" data-line-number="480"></td>
              <td>Э-764004</td>
              <td>1645296</td>
              <td>Младший сержант</td>
              <td>Гилев Игорь Викторович</td>
              <td>2/14/1992</td>
              <td>65</td>
              <td>13</td>
              <td>656473</td>
              <td>Отделом УФМС России по Свердловской области в Чкаловском районе г.Ек</td>
              <td>а3/1/2013</td>
          </tr>
          <tr id="LC481" class="js-file-line">
            <td id="L481" class="blob-num js-line-number" data-line-number="481"></td>
              <td>Ю-918532</td>
              <td>1663479</td>
              <td>Младший сержант</td>
              <td>Щенников Сергей Олегович</td>
              <td>10/20/1994</td>
              <td>69</td>
              <td>14</td>
              <td>626686</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ТОМСКОЙ ОБЛАСТИ В ТОМСКОМ РАЙОНЕ Г.Т</td>
              <td>О12/5/2014</td>
          </tr>
          <tr id="LC482" class="js-file-line">
            <td id="L482" class="blob-num js-line-number" data-line-number="482"></td>
              <td>Ю-856953</td>
              <td>1683514</td>
              <td>Младший сержант</td>
              <td>Ковалёв Владислав Витальевич</td>
              <td>8/23/1994</td>
              <td>8</td>
              <td>14</td>
              <td>250070</td>
              <td>отделением УФМС России по Хабаровскому краю в районе им. Лазо</td>
              <td>09.03.2008</td>
          </tr>
          <tr id="LC483" class="js-file-line">
            <td id="L483" class="blob-num js-line-number" data-line-number="483"></td>
              <td>Ю-816855</td>
              <td>1702545</td>
              <td>Младший сержант</td>
              <td>Ковалёв Игорь Николаевич</td>
              <td>3/15/1994</td>
              <td>76</td>
              <td>7</td>
              <td>312113</td>
              <td>ТП УФМС России по Забайкальскому краю в Улётовском районе</td>
              <td>04.10.2008</td>
          </tr>
          <tr id="LC484" class="js-file-line">
            <td id="L484" class="blob-num js-line-number" data-line-number="484"></td>
              <td>Ю-789175</td>
              <td>1719921</td>
              <td>Младший сержант</td>
              <td>Кушнаренко Алексей Валерьевич</td>
              <td>08.02.1994</td>
              <td>99</td>
              <td>14</td>
              <td>299643</td>
              <td>ООФМС РОССИИ ПО ЕАО В СМИДОВИЧСКОМ Р-НЕ</td>
              <td>1/14/2016</td>
          </tr>
          <tr id="LC485" class="js-file-line">
            <td id="L485" class="blob-num js-line-number" data-line-number="485"></td>
              <td>Ю-892523</td>
              <td>1728224</td>
              <td>Младший сержант</td>
              <td>Батоев Сергей Эрдынеевич</td>
              <td>10/27/1992</td>
              <td>76</td>
              <td>12</td>
              <td>636478</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В АГИНСКОМ РА</td>
              <td>01.01.2015</td>
          </tr>
          <tr id="LC486" class="js-file-line">
            <td id="L486" class="blob-num js-line-number" data-line-number="486"></td>
              <td>ВЕ-090644</td>
              <td>1738992</td>
              <td>Младший сержант</td>
              <td>Чернышов Владислав Анатольевич</td>
              <td>01.04.1994</td>
              <td>94</td>
              <td>13</td>
              <td>378239</td>
              <td>УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В КИЗНЕРСКОМ РАЙОНЕ</td>
              <td>1/13/2014</td>
          </tr>
          <tr id="LC487" class="js-file-line">
            <td id="L487" class="blob-num js-line-number" data-line-number="487"></td>
              <td>ЕХ-561125</td>
              <td>1807875</td>
              <td>Младший сержант</td>
              <td>Пауль Александр Владимирович</td>
              <td>12/20/1994</td>
              <td>71</td>
              <td>8</td>
              <td>679114</td>
              <td>МО УФМС России по Тюменской обл. в г.Ишиме</td>
              <td>06.03.2009</td>
          </tr>
          <tr id="LC488" class="js-file-line">
            <td id="L488" class="blob-num js-line-number" data-line-number="488"></td>
              <td>ВЕ-092375</td>
              <td>1809924</td>
              <td>Младший сержант</td>
              <td>Хохряков Дмитрий Алексеевич</td>
              <td>10/24/1993</td>
              <td>94</td>
              <td>14</td>
              <td>447578</td>
              <td>ТП УФМС России по Удмуртской Республике в Кезском районе</td>
              <td>12/30/2014</td>
          </tr>
          <tr id="LC489" class="js-file-line">
            <td id="L489" class="blob-num js-line-number" data-line-number="489"></td>
              <td>Ю-856700</td>
              <td>1823975</td>
              <td>Младший сержант</td>
              <td>Кубышкин Артем Иванович</td>
              <td>6/24/1994</td>
              <td>8</td>
              <td>14</td>
              <td>236920</td>
              <td>ОтделомУФМС России по Хабаровскому краю в Индустриальном р-не г. Хаб</td>
              <td>7/23/2014</td>
          </tr>
          <tr id="LC490" class="js-file-line">
            <td id="L490" class="blob-num js-line-number" data-line-number="490"></td>
              <td>Ю-856186</td>
              <td>1824048</td>
              <td>Младший сержант</td>
              <td>Перешивкин Сергей Сергеевич</td>
              <td>8/21/1994</td>
              <td>8</td>
              <td>14</td>
              <td>258331</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>9/13/2014</td>
          </tr>
          <tr id="LC491" class="js-file-line">
            <td id="L491" class="blob-num js-line-number" data-line-number="491"></td>
              <td>Ю-792799</td>
              <td>1826352</td>
              <td>Младший сержант</td>
              <td>Гимгин Андрей Сергеевич</td>
              <td>10/22/1994</td>
              <td>64</td>
              <td>80</td>
              <td>688040</td>
              <td>ТП УФМС России по Сахалинской Области В углеродском Районе</td>
              <td>10/23/2008</td>
          </tr>
          <tr id="LC492" class="js-file-line">
            <td id="L492" class="blob-num js-line-number" data-line-number="492"></td>
              <td>СУ-360191</td>
              <td>1829531</td>
              <td>Младший сержант</td>
              <td>Березовский Александр Александрович</td>
              <td>02.05.1994</td>
              <td>11</td>
              <td>15</td>
              <td>38412</td>
              <td>Отделением УФМС России по Архангельской области в Вельском районе</td>
              <td>4/14/2015</td>
          </tr>
          <tr id="LC493" class="js-file-line">
            <td id="L493" class="blob-num js-line-number" data-line-number="493"></td>
              <td>МТ-373711</td>
              <td>1835704</td>
              <td>Младший сержант</td>
              <td>Абдуллаев Руслан Олегович</td>
              <td>08.08.1994</td>
              <td>69</td>
              <td>14</td>
              <td>608006</td>
              <td>ОУФМС России по Томской области в Кировском районе г.Томска</td>
              <td>8/19/2014</td>
          </tr>
          <tr id="LC494" class="js-file-line">
            <td id="L494" class="blob-num js-line-number" data-line-number="494"></td>
              <td>Ю-781825</td>
              <td>1843018</td>
              <td>Младший сержант</td>
              <td>Князев Алексей Юрьевич</td>
              <td>9/22/1993</td>
              <td>10</td>
              <td>14</td>
              <td>393890</td>
              <td>отделение УФМС России по Амурской обл. в г. Свободном</td>
              <td>9/29/2014</td>
          </tr>
          <tr id="LC495" class="js-file-line">
            <td id="L495" class="blob-num js-line-number" data-line-number="495"></td>
              <td>ВЕ-099314</td>
              <td>1855593</td>
              <td>Младший сержант</td>
              <td>Ведров Андрей Михайлович</td>
              <td>09.09.1993</td>
              <td>50</td>
              <td>6</td>
              <td>67600</td>
              <td>ОТДЕЛЕНИЕ УФМС РОССИИ В НОВОСИБИРСКОЙ ОБЛАСТИ В БАРАБИНСКОМ</td>
              <td>10/24/2007</td>
          </tr>
          <tr id="LC496" class="js-file-line">
            <td id="L496" class="blob-num js-line-number" data-line-number="496"></td>
              <td>Ю-856285</td>
              <td>1901837</td>
              <td>Младший сержант</td>
              <td>Сиротенко Дмитрий Станиславович</td>
              <td>1/22/1995</td>
              <td>8</td>
              <td>14</td>
              <td>272516</td>
              <td>Отделением УФМС России по Хабаровскому краю в Хабаровском р-не</td>
              <td>02.03.2015</td>
          </tr>
          <tr id="LC497" class="js-file-line">
            <td id="L497" class="blob-num js-line-number" data-line-number="497"></td>
              <td>Ю-850122</td>
              <td>1967140</td>
              <td>Младший сержант</td>
              <td>Буравлев Александр Сергеевич</td>
              <td>10/28/1990</td>
              <td>10</td>
              <td>10</td>
              <td>227190</td>
              <td>Отделом УФМС России по Амурской области в г. Свободный.</td>
              <td>11/13/2010</td>
          </tr>
          <tr id="LC498" class="js-file-line">
            <td id="L498" class="blob-num js-line-number" data-line-number="498"></td>
              <td>МТ-206201</td>
              <td>1982514</td>
              <td>Младший сержант</td>
              <td>Пьянов Руслан Евгеньевич</td>
              <td>4/21/1994</td>
              <td>10</td>
              <td>8</td>
              <td>99325</td>
              <td>Отделением УФМС России по Амурской области в Бурейском районе</td>
              <td>10/25/2014</td>
          </tr>
          <tr id="LC499" class="js-file-line">
            <td id="L499" class="blob-num js-line-number" data-line-number="499"></td>
              <td>СУ-108634</td>
              <td>1986800</td>
              <td>Младший сержант</td>
              <td>Юшков Иван Алексеевич</td>
              <td>09.08.1994</td>
              <td>95</td>
              <td>14</td>
              <td>860262</td>
              <td>ТП УФМС России по Республике Хакасия в Орджонткидзевском районе</td>
              <td>11/28/2014</td>
          </tr>
          <tr id="LC500" class="js-file-line">
            <td id="L500" class="blob-num js-line-number" data-line-number="500"></td>
              <td>ВЕ-322611</td>
              <td>2005355</td>
              <td>Младший сержант</td>
              <td>Счастнов Андрей Валериевич</td>
              <td>6/23/1990</td>
              <td>77</td>
              <td>10</td>
              <td>82540</td>
              <td>ОФМС Чукот-му АО №1 Иультинском р-не</td>
              <td>7/28/2010</td>
          </tr>
          <tr id="LC501" class="js-file-line">
            <td id="L501" class="blob-num js-line-number" data-line-number="501"></td>
              <td>Ю-850169</td>
              <td>2005750</td>
              <td>Младший сержант</td>
              <td>Багенская Татьяна Антоновна</td>
              <td>10.12.1979</td>
              <td>10</td>
              <td>0</td>
              <td>108405</td>
              <td>КОНСТАНТИНОВСКИМ РОВД АМУРСКОЙ ОБЛАСТИ</td>
              <td>9/14/2001</td>
          </tr>
          <tr id="LC502" class="js-file-line">
            <td id="L502" class="blob-num js-line-number" data-line-number="502"></td>
              <td>Ю-789769</td>
              <td>2013941</td>
              <td>Младший сержант</td>
              <td>Филькинштейн Александр Владимирович</td>
              <td>08.11.1995</td>
              <td>99</td>
              <td>14</td>
              <td>306289</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛЕНИЕМ ОФМС РОССИИ ПО ЕВРЕЙСКОЙ АВТОНОМН</td>
              <td>8/26/2015</td>
          </tr>
          <tr id="LC503" class="js-file-line">
            <td id="L503" class="blob-num js-line-number" data-line-number="503"></td>
              <td>МТ-206549</td>
              <td>2025329</td>
              <td>Младший сержант</td>
              <td>Алутин Павел Павлович</td>
              <td>6/26/1995</td>
              <td>10</td>
              <td>15</td>
              <td>448220</td>
              <td>МО УФМС России по Амурской области в г. Благовещенск</td>
              <td>07.07.2015</td>
          </tr>
          <tr id="LC504" class="js-file-line">
            <td id="L504" class="blob-num js-line-number" data-line-number="504"></td>
              <td>Ю-774013</td>
              <td>2054868</td>
              <td>Младший сержант</td>
              <td>Шигабутдинов Павел Ринатович</td>
              <td>7/30/1995</td>
              <td>8</td>
              <td>8</td>
              <td>811262</td>
              <td>ОУФМС России по Хабаровскому краю в Нанайском районе</td>
              <td>08.11.2009</td>
          </tr>
          <tr id="LC505" class="js-file-line">
            <td id="L505" class="blob-num js-line-number" data-line-number="505"></td>
              <td>Ю-856359</td>
              <td>2109143</td>
              <td>Младший сержант</td>
              <td>Афанасьев Максим Алексеевич</td>
              <td>8/21/1992</td>
              <td>8</td>
              <td>13</td>
              <td>151699</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>06.04.2013</td>
          </tr>
          <tr id="LC506" class="js-file-line">
            <td id="L506" class="blob-num js-line-number" data-line-number="506"></td>
              <td>МТ-207275</td>
              <td>2111522</td>
              <td>Младший сержант</td>
              <td>Михалев Тихон Сергеевич</td>
              <td>9/22/1995</td>
              <td>76</td>
              <td>15</td>
              <td>837855</td>
              <td>МП В П.ШЕРЛОВАЯ ГОРА ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В Б</td>
              <td>О10/27/2015</td>
          </tr>
          <tr id="LC507" class="js-file-line">
            <td id="L507" class="blob-num js-line-number" data-line-number="507"></td>
              <td>СУ-115591</td>
              <td>2118962</td>
              <td>Младший сержант</td>
              <td>Горшков Руслан Валерьевич</td>
              <td>11/26/1991</td>
              <td>97</td>
              <td>11</td>
              <td>931730</td>
              <td>МО УФМС России по Чувашской Республике в с.Батырево</td>
              <td>2/16/2012</td>
          </tr>
          <tr id="LC508" class="js-file-line">
            <td id="L508" class="blob-num js-line-number" data-line-number="508"></td>
              <td>МТ-206970</td>
              <td>2135192</td>
              <td>Младший сержант</td>
              <td>Ульянов Александр Сергеевич</td>
              <td>04.06.1993</td>
              <td>10</td>
              <td>13</td>
              <td>349507</td>
              <td>МО УФМС России по Амурской области в г. Благовещенск</td>
              <td>04.10.2013</td>
          </tr>
          <tr id="LC509" class="js-file-line">
            <td id="L509" class="blob-num js-line-number" data-line-number="509"></td>
              <td>Х-787784</td>
              <td>2147947</td>
              <td>Младший сержант</td>
              <td>Пойкин Антон Владимирович</td>
              <td>12/26/1991</td>
              <td>10</td>
              <td>11</td>
              <td>304722</td>
              <td>МО УФМС России по Амурской области в г. Благовещенске</td>
              <td>3/28/2012</td>
          </tr>
          <tr id="LC510" class="js-file-line">
            <td id="L510" class="blob-num js-line-number" data-line-number="510"></td>
              <td>Х-935620</td>
              <td>2160401</td>
              <td>Младший сержант</td>
              <td>Урматов Андрей Максимович</td>
              <td>3/13/1989</td>
              <td>84</td>
              <td>9</td>
              <td>276447</td>
              <td>ТП ОТДЕЛОМ УФМС РОССИИ ПО РЕСПУБЛИКЕ АЛТАЙ В ОНГУДАЙСКОМ РАЙ</td>
              <td>06.10.2010</td>
          </tr>
          <tr id="LC511" class="js-file-line">
            <td id="L511" class="blob-num js-line-number" data-line-number="511"></td>
              <td>ЕХ-783315</td>
              <td>2179497</td>
              <td>Младший сержант</td>
              <td>Гейнц Евгений Викторович</td>
              <td>10/19/1995</td>
              <td>4</td>
              <td>15</td>
              <td>869373</td>
              <td>Отделением УФМС России по Красноярскому краю и республике Тыва в Бе</td>
              <td>р3/26/2016</td>
          </tr>
          <tr id="LC512" class="js-file-line">
            <td id="L512" class="blob-num js-line-number" data-line-number="512"></td>
              <td>СУ-441010</td>
              <td>2181495</td>
              <td>Младший сержант</td>
              <td>Григорьянц Захар Андреевич</td>
              <td>2/18/1996</td>
              <td>8</td>
              <td>15</td>
              <td>351685</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ Р</td>
              <td>03.10.2016</td>
          </tr>
          <tr id="LC513" class="js-file-line">
            <td id="L513" class="blob-num js-line-number" data-line-number="513"></td>
              <td>СУ-441108</td>
              <td>2181605</td>
              <td>Младший сержант</td>
              <td>Латынников Захар Александрович</td>
              <td>9/23/1989</td>
              <td>8</td>
              <td>10</td>
              <td>946604</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В РАЙОНЕ ИМЕНИ </td>
              <td>8/25/2010</td>
          </tr>
          <tr id="LC514" class="js-file-line">
            <td id="L514" class="blob-num js-line-number" data-line-number="514"></td>
              <td>СУ-406715</td>
              <td>2181622</td>
              <td>Младший сержант</td>
              <td>Лысиков Константин Алексеевич</td>
              <td>3/26/1996</td>
              <td>8</td>
              <td>10</td>
              <td>924210</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В СЕВЕРНОМ ОКРУГЕ Г. ХАБАРО</td>
              <td>В4/29/2010</td>
          </tr>
          <tr id="LC515" class="js-file-line">
            <td id="L515" class="blob-num js-line-number" data-line-number="515"></td>
              <td>МТ-236161</td>
              <td>2219832</td>
              <td>Младший сержант</td>
              <td>Гамов Евгений Михайлович</td>
              <td>5/26/1996</td>
              <td>10</td>
              <td>9</td>
              <td>189752</td>
              <td>УФМС Россиипо Амурской области в городе Шимановске</td>
              <td>09.01.2010</td>
          </tr>
          <tr id="LC516" class="js-file-line">
            <td id="L516" class="blob-num js-line-number" data-line-number="516"></td>
              <td>ЕХ-786298</td>
              <td>2246260</td>
              <td>Младший сержант</td>
              <td>Хертек Анчы Оюн-оолович</td>
              <td>02.04.1996</td>
              <td>93</td>
              <td>10</td>
              <td>424891</td>
              <td>Отделением УФМС России по Хабаровскому краю и Еврейской Автономной</td>
              <td>1/28/2011</td>
          </tr>
          <tr id="LC517" class="js-file-line">
            <td id="L517" class="blob-num js-line-number" data-line-number="517"></td>
              <td>ЕХ-775651</td>
              <td>2262869</td>
              <td>Младший сержант</td>
              <td>Ковтун Никита Сергеевич</td>
              <td>5/15/1994</td>
              <td>32</td>
              <td>14</td>
              <td>411258</td>
              <td>ОФМС КЕМЕРОВСКОЙ ОБЛ. В Г. БЕРЕЗОВСКИЙ</td>
              <td>5/28/2014</td>
          </tr>
          <tr id="LC518" class="js-file-line">
            <td id="L518" class="blob-num js-line-number" data-line-number="518"></td>
              <td>МТ-164474</td>
              <td>2336810</td>
              <td>Младший сержант</td>
              <td>Жилкин Юрий Юрьевич</td>
              <td>04.09.1996</td>
              <td>8</td>
              <td>9</td>
              <td>903695</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В КОМСОМОЛЬСКОМ Р-НЕ</td>
              <td>4/13/2010</td>
          </tr>
          <tr id="LC519" class="js-file-line">
            <td id="L519" class="blob-num js-line-number" data-line-number="519"></td>
              <td>МТ-164144</td>
              <td>2337034</td>
              <td>Младший сержант</td>
              <td>Третьяков Антон Сергеевич</td>
              <td>5/29/1988</td>
              <td>10</td>
              <td>8</td>
              <td>94470</td>
              <td>ТП УФМС России по Амурской области в пос. Прогресс</td>
              <td>06.06.2008</td>
          </tr>
          <tr id="LC520" class="js-file-line">
            <td id="L520" class="blob-num js-line-number" data-line-number="520"></td>
              <td>СУ-444357</td>
              <td>2361275</td>
              <td>Младший сержант</td>
              <td>Дубограй Александр Павлович</td>
              <td>10/19/1996</td>
              <td>5</td>
              <td>10</td>
              <td>787278</td>
              <td>ОУФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В ХАНКАЙСКОМ МУНИЦИПАЛЬ</td>
              <td>Н12/13/2010</td>
          </tr>
          <tr id="LC521" class="js-file-line">
            <td id="L521" class="blob-num js-line-number" data-line-number="521"></td>
              <td>МТ-239196</td>
              <td>2373009</td>
              <td>Младший сержант</td>
              <td>Сулейманов Арби Сурупашаевич</td>
              <td>1/25/1995</td>
              <td>10</td>
              <td>15</td>
              <td>458655</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В СКОВОРОДИНСКОМ РАЙОНЕ</td>
              <td>11/26/2015</td>
          </tr>
          <tr id="LC522" class="js-file-line">
            <td id="L522" class="blob-num js-line-number" data-line-number="522"></td>
              <td>СУ-473190</td>
              <td>2373654</td>
              <td>Младший сержант</td>
              <td>Дмитриев Илья Сергеевич</td>
              <td>8/17/1996</td>
              <td>8</td>
              <td>10</td>
              <td>923099</td>
              <td>Отделением УФМС России по Хабаровскому краю в Верхнебуреинском рай</td>
              <td>8/24/2010</td>
          </tr>
          <tr id="LC523" class="js-file-line">
            <td id="L523" class="blob-num js-line-number" data-line-number="523"></td>
              <td>ЕХ-787219</td>
              <td>2383247</td>
              <td>Младший сержант</td>
              <td>Майманов Мечин Евгеньевич</td>
              <td>10.05.1996</td>
              <td>84</td>
              <td>10</td>
              <td>284567</td>
              <td>ТП ОФМС России по республике  Алтай в Шебалинском районе</td>
              <td>11.09.2010</td>
          </tr>
          <tr id="LC524" class="js-file-line">
            <td id="L524" class="blob-num js-line-number" data-line-number="524"></td>
              <td>МТ-213496</td>
              <td>2390496</td>
              <td>Младший сержант</td>
              <td>Киляшов Артем Андреевич</td>
              <td>10/18/1996</td>
              <td>81</td>
              <td>10</td>
              <td>349910</td>
              <td>УФМС ПО РЕСПУБЛИКЕ БУРЯТИЯ В ПОС. УСТЬ-БУРГУЗИН</td>
              <td>1/26/2011</td>
          </tr>
          <tr id="LC525" class="js-file-line">
            <td id="L525" class="blob-num js-line-number" data-line-number="525"></td>
              <td>МТ-239246</td>
              <td>2392955</td>
              <td>Младший сержант</td>
              <td>Мамонтов Михаил Сергеевич</td>
              <td>9/25/1996</td>
              <td>10</td>
              <td>10</td>
              <td>224787</td>
              <td>Отделением Уфмс России по Амурской области в магдагачинском районе</td>
              <td>9/28/2010</td>
          </tr>
          <tr id="LC526" class="js-file-line">
            <td id="L526" class="blob-num js-line-number" data-line-number="526"></td>
              <td>ЕХ-872401</td>
              <td>2402213</td>
              <td>Младший сержант</td>
              <td>Рукавичников Михаил Алексеевич</td>
              <td>10/25/1996</td>
              <td>25</td>
              <td>10</td>
              <td>473607</td>
              <td>Отделением УФМС России по Иркутской области в гор. Нижнеудинске и Ни</td>
              <td>12.07.2010</td>
          </tr>
          <tr id="LC527" class="js-file-line">
            <td id="L527" class="blob-num js-line-number" data-line-number="527"></td>
              <td>Х-820069</td>
              <td>2437460</td>
              <td>Младший сержант</td>
              <td>Покумейко Александр Юрьевич</td>
              <td>3/28/1987</td>
              <td>99</td>
              <td>14</td>
              <td>305083</td>
              <td>ТП в пос. Теплоозерск отделения ОФМС России по Еврейской автономной о</td>
              <td>09.09.2015</td>
          </tr>
          <tr id="LC528" class="js-file-line">
            <td id="L528" class="blob-num js-line-number" data-line-number="528"></td>
              <td>СУ-483393</td>
              <td>2445067</td>
              <td>Младший сержант</td>
              <td>Захаров Андрей Геннадьевич</td>
              <td>12.05.1996</td>
              <td>5</td>
              <td>13</td>
              <td>56202</td>
              <td>ОУФМС России по Приморскому краю в Артемовском гос. округе</td>
              <td>3/20/2013</td>
          </tr>
          <tr id="LC529" class="js-file-line">
            <td id="L529" class="blob-num js-line-number" data-line-number="529"></td>
              <td>ЕХ-859568</td>
              <td>2447758</td>
              <td>Младший сержант</td>
              <td>Тисло Антон Константинович</td>
              <td>4/22/1996</td>
              <td>52</td>
              <td>12</td>
              <td>190908</td>
              <td>Отделением №2 УФМС России по Омской области в Центральном админис</td>
              <td>12/19/2012</td>
          </tr>
          <tr id="LC530" class="js-file-line">
            <td id="L530" class="blob-num js-line-number" data-line-number="530"></td>
              <td>МТ-227183</td>
              <td>2470812</td>
              <td>Младший сержант</td>
              <td>Прохоренко Александр Васильевич</td>
              <td>8/26/1995</td>
              <td>44</td>
              <td>9</td>
              <td>265009</td>
              <td>МП УФМС РОССИИ ПО МАГАДАНСКОЙ ОБЛАСТИ В ХАСЫНСКОМ РАЙОНЕ</td>
              <td>12.04.2009</td>
          </tr>
          <tr id="LC531" class="js-file-line">
            <td id="L531" class="blob-num js-line-number" data-line-number="531"></td>
              <td>МТ-171422</td>
              <td>2477176</td>
              <td>Младший сержант</td>
              <td>Козлов Николай Николаевич</td>
              <td>2/26/1991</td>
              <td>8</td>
              <td>10</td>
              <td>921109</td>
              <td>УФМС России по Хабаровскому краю в Бикинском районе</td>
              <td>12.09.2014</td>
          </tr>
          <tr id="LC532" class="js-file-line">
            <td id="L532" class="blob-num js-line-number" data-line-number="532"></td>
              <td>Х-820530</td>
              <td>2487963</td>
              <td>Младший сержант</td>
              <td>Тимченко Артем Дмитриевич</td>
              <td>5/18/1991</td>
              <td>99</td>
              <td>10</td>
              <td>265949</td>
              <td>ТП в селе Амурзет межрайонного отделения ОФМС России по Еврейской ав</td>
              <td>5/25/2011</td>
          </tr>
          <tr id="LC533" class="js-file-line">
            <td id="L533" class="blob-num js-line-number" data-line-number="533"></td>
              <td>Х-849258</td>
              <td>2489481</td>
              <td>Младший сержант</td>
              <td>Путилин Александр Юрьевич</td>
              <td>7/16/1988</td>
              <td>8</td>
              <td>9</td>
              <td>853746</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе г. Хаба</td>
              <td>р6/26/2009</td>
          </tr>
          <tr id="LC534" class="js-file-line">
            <td id="L534" class="blob-num js-line-number" data-line-number="534"></td>
              <td>Ю-817944</td>
              <td>2489511</td>
              <td>Младший сержант</td>
              <td>Федькович Алексей Вадимович</td>
              <td>05.06.1993</td>
              <td>4</td>
              <td>13</td>
              <td>446245</td>
              <td>отделением УФМС России по Красноярскому краю в г. Шарыпово и Шарып</td>
              <td>о9/5/2013</td>
          </tr>
          <tr id="LC535" class="js-file-line">
            <td id="L535" class="blob-num js-line-number" data-line-number="535"></td>
              <td>Х-838345</td>
              <td>2489821</td>
              <td>Младший сержант</td>
              <td>Выходцев Дмитрий Владимирович</td>
              <td>3/15/1990</td>
              <td>8</td>
              <td>12</td>
              <td>138348</td>
              <td>Отд. УФМС России по Хабаровскому краю в районе имени Лазо</td>
              <td>3/27/2013</td>
          </tr>
          <tr id="LC536" class="js-file-line">
            <td id="L536" class="blob-num js-line-number" data-line-number="536"></td>
              <td>МТ-204711</td>
              <td>2496245</td>
              <td>Младший сержант</td>
              <td>Симонов Дмитрий Владимирович</td>
              <td>01.12.1992</td>
              <td>8</td>
              <td>11</td>
              <td>67643</td>
              <td>ОУФМС России по Хабаровскому краю в Вяземском районе</td>
              <td>5/16/2012</td>
          </tr>
          <tr id="LC537" class="js-file-line">
            <td id="L537" class="blob-num js-line-number" data-line-number="537"></td>
              <td>СУ-300903</td>
              <td>2514277</td>
              <td>Младший сержант</td>
              <td>Архангельский Дмитрий Андреевич</td>
              <td>07.02.1990</td>
              <td>94</td>
              <td>10</td>
              <td>93648</td>
              <td>ТП УФМС  России по Удмуртской республике в Кизнерском районе</td>
              <td>08.04.2010</td>
          </tr>
          <tr id="LC538" class="js-file-line">
            <td id="L538" class="blob-num js-line-number" data-line-number="538"></td>
              <td>МТ-164621</td>
              <td>2516923</td>
              <td>Младший сержант</td>
              <td>Шариков Антон Алексеевич</td>
              <td>05.06.1996</td>
              <td>8</td>
              <td>10</td>
              <td>938329</td>
              <td>ОФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕАО В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>7/21/2010</td>
          </tr>
          <tr id="LC539" class="js-file-line">
            <td id="L539" class="blob-num js-line-number" data-line-number="539"></td>
              <td>ЕХ-573557</td>
              <td>2520028</td>
              <td>Младший сержант</td>
              <td>Магомедов Магомед Абдуллаевич</td>
              <td>6/22/1993</td>
              <td>82</td>
              <td>13</td>
              <td>379926</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ ДАГЕСТАН В ЛЕВАШИНСКОМ РАЙОНЕ</td>
              <td>09.10.2013</td>
          </tr>
          <tr id="LC540" class="js-file-line">
            <td id="L540" class="blob-num js-line-number" data-line-number="540"></td>
              <td>МТ-228442</td>
              <td>2523003</td>
              <td>Младший сержант</td>
              <td>Томских Артем Константинович</td>
              <td>9/13/1996</td>
              <td>99</td>
              <td>11</td>
              <td>273849</td>
              <td>ОУФМС РОССИИ ПО ЕАО В ОБЛУЧЕНСКОМ РАЙОНЕ</td>
              <td>5/17/2012</td>
          </tr>
          <tr id="LC541" class="js-file-line">
            <td id="L541" class="blob-num js-line-number" data-line-number="541"></td>
              <td>Х-833686</td>
              <td>2537375</td>
              <td>Младший сержант</td>
              <td>Яковенко Михаил Сергеевич</td>
              <td>7/21/1989</td>
              <td>8</td>
              <td>12</td>
              <td>106948</td>
              <td>Отделом УФМС России по Хабаровскому краю в Нанайском районе</td>
              <td>11/21/2012</td>
          </tr>
          <tr id="LC542" class="js-file-line">
            <td id="L542" class="blob-num js-line-number" data-line-number="542"></td>
              <td>Ю-838106</td>
              <td>2538892</td>
              <td>Младший сержант</td>
              <td>Тарасенко Константин Андреевич</td>
              <td>8/16/1991</td>
              <td>8</td>
              <td>13</td>
              <td>194898</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В Г.КОМСОМОЛЬСК НА АМУРЕ</td>
              <td>12.04.2013</td>
          </tr>
          <tr id="LC543" class="js-file-line">
            <td id="L543" class="blob-num js-line-number" data-line-number="543"></td>
              <td>Х-822125</td>
              <td>2539066</td>
              <td>Младший сержант</td>
              <td>Гаманец Максим Евгеньевич</td>
              <td>04.07.1992</td>
              <td>8</td>
              <td>11</td>
              <td>74943</td>
              <td>Отделением УФМС России по Хабаровскому краю в районе имни Лазо</td>
              <td>05.04.2012</td>
          </tr>
          <tr id="LC544" class="js-file-line">
            <td id="L544" class="blob-num js-line-number" data-line-number="544"></td>
              <td>Х-858954</td>
              <td>2540711</td>
              <td>Младший сержант</td>
              <td>Жолобов Владимир Валерьевич</td>
              <td>8/14/1986</td>
              <td>10</td>
              <td>5</td>
              <td>989979</td>
              <td>УПРАВЛЕНИЕМ ВНУТРЕННИХ ДЕЛ ГОРОДА БЛАГОВЕЩЕНСКА</td>
              <td>8/22/2006</td>
          </tr>
          <tr id="LC545" class="js-file-line">
            <td id="L545" class="blob-num js-line-number" data-line-number="545"></td>
              <td>СУ-253507</td>
              <td>2541322</td>
              <td>Младший сержант</td>
              <td>Исмаилов Кабдувек Сагандыкович</td>
              <td>10/16/1996</td>
              <td>75</td>
              <td>10</td>
              <td>795509</td>
              <td>отделением ОФМС России по Челябинской области в Верхнеуральском рай</td>
              <td>02.02.2011</td>
          </tr>
          <tr id="LC546" class="js-file-line">
            <td id="L546" class="blob-num js-line-number" data-line-number="546"></td>
              <td>СУ-285500</td>
              <td>2544194</td>
              <td>Младший сержант</td>
              <td>Власенко Александр Алексеевич</td>
              <td>07.09.1996</td>
              <td>69</td>
              <td>10</td>
              <td>409723</td>
              <td>ТЕРРИТОРИАЛЬНЫМ ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ТОМСКОЙ ОБЛАСТИ</td>
              <td> 10/8/2010</td>
          </tr>
          <tr id="LC547" class="js-file-line">
            <td id="L547" class="blob-num js-line-number" data-line-number="547"></td>
              <td>СУ-251729</td>
              <td>2546872</td>
              <td>Младший сержант</td>
              <td>Иванов Владимир Сергеевич</td>
              <td>09.02.1996</td>
              <td>53</td>
              <td>11</td>
              <td>179296</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ОРЕНБУРГСКОЙ ОБЛ. В ГОР. НОВОТРОИЦКЕ</td>
              <td>06.01.2012</td>
          </tr>
          <tr id="LC548" class="js-file-line">
            <td id="L548" class="blob-num js-line-number" data-line-number="548"></td>
              <td>СУ-326134</td>
              <td>2551364</td>
              <td>Младший сержант</td>
              <td>Самаев Артем Аржанович</td>
              <td>9/21/1994</td>
              <td>84</td>
              <td>14</td>
              <td>339755</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ АЛТАЙ В Г. ГОРНО-АЛТАЙСКЕ</td>
              <td>10/27/2014</td>
          </tr>
          <tr id="LC549" class="js-file-line">
            <td id="L549" class="blob-num js-line-number" data-line-number="549"></td>
              <td>СУ-302768</td>
              <td>2553480</td>
              <td>Младший сержант</td>
              <td>Миронов Илья Олегович</td>
              <td>7/23/1995</td>
              <td>36</td>
              <td>9</td>
              <td>104275</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО САМАРСКОЙ ОБЛАСТИ В ГОР. СЫЗРАНИ И СЫ</td>
              <td>З8/5/2009</td>
          </tr>
          <tr id="LC550" class="js-file-line">
            <td id="L550" class="blob-num js-line-number" data-line-number="550"></td>
              <td>СУ-302780</td>
              <td>2553502</td>
              <td>Младший сержант</td>
              <td>Талько Бронислав Сергеевич</td>
              <td>9/17/1996</td>
              <td>36</td>
              <td>10</td>
              <td>332565</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО САМАРСКОЙ ОБЛАСТИ В ГОР. СЫЗРАНИ И СЫ</td>
              <td>З12/16/2010</td>
          </tr>
          <tr id="LC551" class="js-file-line">
            <td id="L551" class="blob-num js-line-number" data-line-number="551"></td>
              <td>СУ-296197</td>
              <td>2560847</td>
              <td>Младший сержант</td>
              <td>Сейтов Алтынбек Абылхаирович</td>
              <td>12/25/1995</td>
              <td>63</td>
              <td>14</td>
              <td>66101</td>
              <td>ТП УФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В АЛЕКСАНДРОВО-ГАЙСКОМ</td>
              <td>6/28/2016</td>
          </tr>
          <tr id="LC552" class="js-file-line">
            <td id="L552" class="blob-num js-line-number" data-line-number="552"></td>
              <td>МТ-127039</td>
              <td>2564940</td>
              <td>Младший сержант</td>
              <td>Попов Вячеслав Олегович</td>
              <td>07.10.1991</td>
              <td>8</td>
              <td>16</td>
              <td>409588</td>
              <td>ОУФМС России по Хабаровскому краю в Индустральном районе города Хаб</td>
              <td>11/22/2016</td>
          </tr>
          <tr id="LC553" class="js-file-line">
            <td id="L553" class="blob-num js-line-number" data-line-number="553"></td>
              <td>Э-473602</td>
              <td>2568659</td>
              <td>Младший сержант</td>
              <td>Кудымов Алексей Алексеевич</td>
              <td>1/25/1994</td>
              <td>54</td>
              <td>14</td>
              <td>332514</td>
              <td>Межрайонным отделением УФМС России по Орловской области</td>
              <td>4/18/2014</td>
          </tr>
          <tr id="LC554" class="js-file-line">
            <td id="L554" class="blob-num js-line-number" data-line-number="554"></td>
              <td>МТ-210255</td>
              <td>2571144</td>
              <td>Младший сержант</td>
              <td>Базаров Булат Дугарович</td>
              <td>12.04.1995</td>
              <td>8</td>
              <td>16</td>
              <td>381688</td>
              <td>ОУФМС по Хабаровскому краю и Еврейской автономной области в Хабаров</td>
              <td>с7/14/2016</td>
          </tr>
          <tr id="LC555" class="js-file-line">
            <td id="L555" class="blob-num js-line-number" data-line-number="555"></td>
              <td>СУ-198670</td>
              <td>2574319</td>
              <td>Младший сержант</td>
              <td>Яганов Артем Евгеньевич</td>
              <td>5/17/1996</td>
              <td>57</td>
              <td>12</td>
              <td>922104</td>
              <td>ОУФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ КИРОВСКОГО РАЙОНА Г. ПЕРМЬ</td>
              <td>7/22/2012</td>
          </tr>
          <tr id="LC556" class="js-file-line">
            <td id="L556" class="blob-num js-line-number" data-line-number="556"></td>
              <td>МТ-199543</td>
              <td>2589386</td>
              <td>Младший сержант</td>
              <td>Лыткин Василий Егорович</td>
              <td>11/29/1992</td>
              <td>98</td>
              <td>12</td>
              <td>456909</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ САХА (ЯКУТИЯ) В ГОРОДЕ ЯКУТСКЕ</td>
              <td>01.11.2013</td>
          </tr>
          <tr id="LC557" class="js-file-line">
            <td id="L557" class="blob-num js-line-number" data-line-number="557"></td>
              <td>СУ-157467</td>
              <td>2592152</td>
              <td>Младший сержант</td>
              <td>Чигжит Эзир-Оол Алиевич</td>
              <td>7/22/1996</td>
              <td>93</td>
              <td>10</td>
              <td>418941</td>
              <td>ОУФМС РОССИИ ПО КРАСНОЯРСКОМУ КРАЮ В РЕСПУБЛИКЕ ТЫВА В Г. КЫЗ</td>
              <td>Ы8/25/2010</td>
          </tr>
          <tr id="LC558" class="js-file-line">
            <td id="L558" class="blob-num js-line-number" data-line-number="558"></td>
              <td>ВС-140284</td>
              <td>2594004</td>
              <td>Младший сержант</td>
              <td>Галстян Галуст Рубенович</td>
              <td>04.02.1997</td>
              <td>82</td>
              <td>11</td>
              <td>113254</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО РЕСП. ДАГЕСТАН В ГОР. КАСПИЙСКЕ</td>
              <td>02.09.2012</td>
          </tr>
          <tr id="LC559" class="js-file-line">
            <td id="L559" class="blob-num js-line-number" data-line-number="559"></td>
              <td>СУ-484026</td>
              <td>2600762</td>
              <td>Младший сержант</td>
              <td>Трудовкин Сергей Валерьевич</td>
              <td>4/21/1990</td>
              <td>76</td>
              <td>10</td>
              <td>490013</td>
              <td>ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В НЕРЧИСКОМ РАЙОНЕ</td>
              <td>05.12.2010</td>
          </tr>
          <tr id="LC560" class="js-file-line">
            <td id="L560" class="blob-num js-line-number" data-line-number="560"></td>
              <td>СУ-401419</td>
              <td>2606625</td>
              <td>Младший сержант</td>
              <td>Гущин Алексей Леонидович</td>
              <td>4/20/1997</td>
              <td>5</td>
              <td>11</td>
              <td>855917</td>
              <td>Отделом УФМС России по Приморскому краю в Артеовском городском окр</td>
              <td>у5/10/2011</td>
          </tr>
          <tr id="LC561" class="js-file-line">
            <td id="L561" class="blob-num js-line-number" data-line-number="561"></td>
              <td>МТ-173635</td>
              <td>2606941</td>
              <td>Младший сержант</td>
              <td>Воробьев Максим Евгеньевич</td>
              <td>8/30/1996</td>
              <td>8</td>
              <td>10</td>
              <td>949472</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖНО</td>
              <td>09.10.2010</td>
          </tr>
          <tr id="LC562" class="js-file-line">
            <td id="L562" class="blob-num js-line-number" data-line-number="562"></td>
              <td>СУ-263579</td>
              <td>2613634</td>
              <td>Младший сержант</td>
              <td>Власов Евгений Игоревич</td>
              <td>01.03.1995</td>
              <td>97</td>
              <td>14</td>
              <td>138461</td>
              <td>ТП В ГОР. ШУМЕРЛЯ МЕЖРАЙОННОГО ОТДЕЛА УФМС РОССИИ ПО ЧУВАШС</td>
              <td>К2/7/2015</td>
          </tr>
          <tr id="LC563" class="js-file-line">
            <td id="L563" class="blob-num js-line-number" data-line-number="563"></td>
              <td>МТ-240851</td>
              <td>2625988</td>
              <td>Младший сержант</td>
              <td>Картамышев Дмитрий Анатольевич</td>
              <td>5/17/1995</td>
              <td>10</td>
              <td>15</td>
              <td>439880</td>
              <td>МО УФМС России по Амурской области в г. Благовещенске</td>
              <td>5/27/2015</td>
          </tr>
          <tr id="LC564" class="js-file-line">
            <td id="L564" class="blob-num js-line-number" data-line-number="564"></td>
              <td>Х-837143</td>
              <td>2647120</td>
              <td>Младший сержант</td>
              <td>Шевченко Сергей Григорьевич</td>
              <td>04.02.1986</td>
              <td>8</td>
              <td>5</td>
              <td>516045</td>
              <td>УВД Индустриального района г. Хабаровск</td>
              <td>4/17/2006</td>
          </tr>
          <tr id="LC565" class="js-file-line">
            <td id="L565" class="blob-num js-line-number" data-line-number="565"></td>
              <td>МТ-204676</td>
              <td>2647460</td>
              <td>Младший сержант</td>
              <td>Павлов Андрей Александрович</td>
              <td>05.07.1981</td>
              <td>1</td>
              <td>4</td>
              <td>303402</td>
              <td>ОВД Усть-Калманского района Алтайского края</td>
              <td>2/14/2004</td>
          </tr>
          <tr id="LC566" class="js-file-line">
            <td id="L566" class="blob-num js-line-number" data-line-number="566"></td>
              <td>Х-818601</td>
              <td>2657301</td>
              <td>Младший сержант</td>
              <td>Иваньков Сергей Игоревич</td>
              <td>9/27/1989</td>
              <td>10</td>
              <td>9</td>
              <td>178068</td>
              <td>УФМС России по Амурской области в Бурейском районе</td>
              <td>12/21/2009</td>
          </tr>
          <tr id="LC567" class="js-file-line">
            <td id="L567" class="blob-num js-line-number" data-line-number="567"></td>
              <td>Х-814567</td>
              <td>2657391</td>
              <td>Младший сержант</td>
              <td>Кудалёв Антон Сергеевич</td>
              <td>5/16/1987</td>
              <td>99</td>
              <td>6</td>
              <td>214887</td>
              <td>ТП ОФМС России по ЕАО в городе Облучие</td>
              <td>06.07.2007</td>
          </tr>
          <tr id="LC568" class="js-file-line">
            <td id="L568" class="blob-num js-line-number" data-line-number="568"></td>
              <td>Х-819968</td>
              <td>2657419</td>
              <td>Младший сержант</td>
              <td>Опришко Сергей Юрьевич</td>
              <td>04.08.1991</td>
              <td>99</td>
              <td>12</td>
              <td>279711</td>
              <td>Отдел.ОФМС России по ЕАО в Облученском районе</td>
              <td>02.07.2013</td>
          </tr>
          <tr id="LC569" class="js-file-line">
            <td id="L569" class="blob-num js-line-number" data-line-number="569"></td>
              <td>МТ-182022</td>
              <td>2657424</td>
              <td>Младший сержант</td>
              <td>Юсупов Рахимджон Бахтиерович</td>
              <td>10/16/1994</td>
              <td>0</td>
              <td>0</td>
              <td>18806</td>
              <td>М618806 ОВД Душанбе Республики Таджикистан</td>
              <td>7/20/2015</td>
          </tr>
          <tr id="LC570" class="js-file-line">
            <td id="L570" class="blob-num js-line-number" data-line-number="570"></td>
              <td>МТ-204681</td>
              <td>2657502</td>
              <td>Младший сержант</td>
              <td>Веремьёв Николай Юрьевич</td>
              <td>12/15/1989</td>
              <td>8</td>
              <td>9</td>
              <td>896287</td>
              <td>Отдел УФМС России по Хабаровскому краю в Нанайском районе</td>
              <td>12/30/2009</td>
          </tr>
          <tr id="LC571" class="js-file-line">
            <td id="L571" class="blob-num js-line-number" data-line-number="571"></td>
              <td>МТ-182006</td>
              <td>2657511</td>
              <td>Младший сержант</td>
              <td>Кремень Алексей Алексеевич</td>
              <td>12/22/1979</td>
              <td>8</td>
              <td>14</td>
              <td>274823</td>
              <td>УФМС РОССИИ  ПО ХАБАРОВСКОМУ КРАЮ В НАНАЙСКОМ Р-ОНЕ</td>
              <td>04.01.2015</td>
          </tr>
          <tr id="LC572" class="js-file-line">
            <td id="L572" class="blob-num js-line-number" data-line-number="572"></td>
              <td>МТ-338491</td>
              <td>2657587</td>
              <td>Младший сержант</td>
              <td>Лядащев Роман Андреевич</td>
              <td>5/14/1991</td>
              <td>4</td>
              <td>14</td>
              <td>596685</td>
              <td>Отделом УФМС России по Краснояркому краю  в Ленинском районе города</td>
              <td>3/14/2014</td>
          </tr>
          <tr id="LC573" class="js-file-line">
            <td id="L573" class="blob-num js-line-number" data-line-number="573"></td>
              <td>МТ-182019</td>
              <td>2657629</td>
              <td>Младший сержант</td>
              <td>Абдурахимов Зариф Абдуджаборович</td>
              <td>4/16/1990</td>
              <td>4</td>
              <td>0</td>
              <td>379227</td>
              <td>МО МВД Республики Таджикистан</td>
              <td>12.12.2014</td>
          </tr>
          <tr id="LC574" class="js-file-line">
            <td id="L574" class="blob-num js-line-number" data-line-number="574"></td>
              <td>МТ-171033</td>
              <td>2662734</td>
              <td>Младший сержант</td>
              <td>Пайвин Алексей Сергеевич</td>
              <td>7/27/1984</td>
              <td>8</td>
              <td>13</td>
              <td>213068</td>
              <td>ОУФМС России по Хабаровскому краю в Северном округе</td>
              <td>02.11.2014</td>
          </tr>
          <tr id="LC575" class="js-file-line">
            <td id="L575" class="blob-num js-line-number" data-line-number="575"></td>
              <td>МТ-204708</td>
              <td>2662741</td>
              <td>Младший сержант</td>
              <td>Рудых Максим Львович</td>
              <td>9/22/1984</td>
              <td>77</td>
              <td>3</td>
              <td>52729</td>
              <td>Шмидтовским РОВД Чукотского автономного округа</td>
              <td>10/30/2004</td>
          </tr>
          <tr id="LC576" class="js-file-line">
            <td id="L576" class="blob-num js-line-number" data-line-number="576"></td>
              <td>Ю-062654</td>
              <td>2662749</td>
              <td>Младший сержант</td>
              <td>Лаврентьев Вячеслав Анатольевич</td>
              <td>9/21/1992</td>
              <td>76</td>
              <td>16</td>
              <td>874098</td>
              <td>ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В КАРЫМСКОМ РАЙОНЕ</td>
              <td>10.03.2015</td>
          </tr>
          <tr id="LC577" class="js-file-line">
            <td id="L577" class="blob-num js-line-number" data-line-number="577"></td>
              <td>ЕХ-877548</td>
              <td>2695112</td>
              <td>Младший сержант</td>
              <td>Золотарёв Вадим Александрович</td>
              <td>10.11.1995</td>
              <td>25</td>
              <td>15</td>
              <td>167777</td>
              <td>ОУФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В ПРАВОБЕРЕЖНОМ ОКРУГЕ Г. И</td>
              <td>Р10/26/2015</td>
          </tr>
          <tr id="LC578" class="js-file-line">
            <td id="L578" class="blob-num js-line-number" data-line-number="578"></td>
              <td>МТ-131718</td>
              <td>2696410</td>
              <td>Младший сержант</td>
              <td>Левчук Александр Вячеславович</td>
              <td>07.07.1997</td>
              <td>8</td>
              <td>11</td>
              <td>22565</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>08.08.2011</td>
          </tr>
          <tr id="LC579" class="js-file-line">
            <td id="L579" class="blob-num js-line-number" data-line-number="579"></td>
              <td>МТ-178732</td>
              <td>2702117</td>
              <td>Младший сержант</td>
              <td>Лесников Евгений Олегович</td>
              <td>04.04.1991</td>
              <td>76</td>
              <td>10</td>
              <td>548884</td>
              <td>Отделением УФМС России по Забайкальскомукраю в Приаргунском районе</td>
              <td>4/26/2011</td>
          </tr>
          <tr id="LC580" class="js-file-line">
            <td id="L580" class="blob-num js-line-number" data-line-number="580"></td>
              <td>ВС-165310</td>
              <td>2702888</td>
              <td>Младший сержант</td>
              <td>Бакамаев Загир Кадирисович</td>
              <td>11.10.1992</td>
              <td>82</td>
              <td>12</td>
              <td>258900</td>
              <td>ТП УФМС РОССИИ ПО РЕСП. ДАГЕСТАН В СЕРГОКАЛИНСКОМ РАЙОНЕ</td>
              <td>12/28/2012</td>
          </tr>
          <tr id="LC581" class="js-file-line">
            <td id="L581" class="blob-num js-line-number" data-line-number="581"></td>
              <td>ВС-165282</td>
              <td>2702943</td>
              <td>Младший сержант</td>
              <td>Магомедов Гаджи Абакарович</td>
              <td>9/16/1993</td>
              <td>82</td>
              <td>13</td>
              <td>370584</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ ДАГЕСТАН В БУЙНАКСКОМ РАЙОНЕ</td>
              <td>9/26/2013</td>
          </tr>
          <tr id="LC582" class="js-file-line">
            <td id="L582" class="blob-num js-line-number" data-line-number="582"></td>
              <td>ВС-165306</td>
              <td>2702961</td>
              <td>Младший сержант</td>
              <td>Муртазалиев Эльдар Умарович</td>
              <td>10/23/1992</td>
              <td>82</td>
              <td>12</td>
              <td>217523</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО РЕСПУБЛИКЕ ДАГЕСТАН В КИЗЛЯРСКОМ Р</td>
              <td>А11/2/2012</td>
          </tr>
          <tr id="LC583" class="js-file-line">
            <td id="L583" class="blob-num js-line-number" data-line-number="583"></td>
              <td>ВС-165295</td>
              <td>2702981</td>
              <td>Младший сержант</td>
              <td>Рамазанов Казим Кафланович</td>
              <td>11/17/1996</td>
              <td>82</td>
              <td>10</td>
              <td>911258</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ ДАГЕСТАН В ПОС. БЕЛИДЖИ</td>
              <td>12.01.2010</td>
          </tr>
          <tr id="LC584" class="js-file-line">
            <td id="L584" class="blob-num js-line-number" data-line-number="584"></td>
              <td>МТ-247515</td>
              <td>2715231</td>
              <td>Младший сержант</td>
              <td>Леонтьев Алексей Игоревич</td>
              <td>02.03.1997</td>
              <td>76</td>
              <td>11</td>
              <td>555524</td>
              <td>ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖНОМ РАЙ</td>
              <td>5/18/2011</td>
          </tr>
          <tr id="LC585" class="js-file-line">
            <td id="L585" class="blob-num js-line-number" data-line-number="585"></td>
              <td>СУ-147521</td>
              <td>2718447</td>
              <td>Младший сержант</td>
              <td>Останин Дмитрий Дмитриевич</td>
              <td>6/25/1997</td>
              <td>8</td>
              <td>17</td>
              <td>466891</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕВРЕЙСКОЙ АВТОНОМНОЙ О</td>
              <td>Б8/14/2017</td>
          </tr>
          <tr id="LC586" class="js-file-line">
            <td id="L586" class="blob-num js-line-number" data-line-number="586"></td>
              <td>СУ-313379</td>
              <td>2723309</td>
              <td>Младший сержант</td>
              <td>Утробин Константин Николаевич</td>
              <td>6/20/1993</td>
              <td>94</td>
              <td>13</td>
              <td>366790</td>
              <td>УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В ГОРОДЕ ГЛАЗОВЕ</td>
              <td>10/14/2013</td>
          </tr>
          <tr id="LC587" class="js-file-line">
            <td id="L587" class="blob-num js-line-number" data-line-number="587"></td>
              <td>СУ-192607</td>
              <td>2728285</td>
              <td>Младший сержант</td>
              <td>Кузнецов Владислав Юрьевич</td>
              <td>9/20/1996</td>
              <td>57</td>
              <td>10</td>
              <td>643819</td>
              <td>ОУФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ В ЧЕРНДЫНСКОМ Р-НЕ</td>
              <td>9/22/2010</td>
          </tr>
          <tr id="LC588" class="js-file-line">
            <td id="L588" class="blob-num js-line-number" data-line-number="588"></td>
              <td>СУ-192522</td>
              <td>2728357</td>
              <td>Младший сержант</td>
              <td>Бельков Андрей Павлович</td>
              <td>11.11.1996</td>
              <td>57</td>
              <td>14</td>
              <td>182403</td>
              <td>ТП УФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ В КОСИНСКОМ РАЙОНЕ</td>
              <td>03.06.2015</td>
          </tr>
          <tr id="LC589" class="js-file-line">
            <td id="L589" class="blob-num js-line-number" data-line-number="589"></td>
              <td>МТ-204229</td>
              <td>2738390</td>
              <td>Младший сержант</td>
              <td>Холодова Ирина Владимировна</td>
              <td>4/23/1988</td>
              <td>8</td>
              <td>16</td>
              <td>381596</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской автономной области в Х</td>
              <td>07.08.2016</td>
          </tr>
          <tr id="LC590" class="js-file-line">
            <td id="L590" class="blob-num js-line-number" data-line-number="590"></td>
              <td>СУ-324781</td>
              <td>2738981</td>
              <td>Младший сержант</td>
              <td>Качкаев Алексей Олегович</td>
              <td>10/30/1995</td>
              <td>65</td>
              <td>15</td>
              <td>90918</td>
              <td>МО УФМС России по Амурской области в г. Белогорске</td>
              <td>11.09.2015</td>
          </tr>
          <tr id="LC591" class="js-file-line">
            <td id="L591" class="blob-num js-line-number" data-line-number="591"></td>
              <td>СУ-180137</td>
              <td>2739675</td>
              <td>Младший сержант</td>
              <td>Ташимбаев Данат Расулович</td>
              <td>08.12.1994</td>
              <td>53</td>
              <td>13</td>
              <td>410381</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ОРЕНБУРГСКОЙ ОБЛ. В БЕЛЯЕВСКОМ Р-НЕ</td>
              <td>8/20/2014</td>
          </tr>
          <tr id="LC592" class="js-file-line">
            <td id="L592" class="blob-num js-line-number" data-line-number="592"></td>
              <td>СУ-318991</td>
              <td>2746628</td>
              <td>Младший сержант</td>
              <td>Бессонов Сергей Васильевич</td>
              <td>01.11.1993</td>
              <td>93</td>
              <td>15</td>
              <td>535004</td>
              <td>МП ОФМС РОССИИ ПО РЕСПУБЛИКЕ ТЫВА В ПГТ. КАА-ХЕМ</td>
              <td>6/19/2015</td>
          </tr>
          <tr id="LC593" class="js-file-line">
            <td id="L593" class="blob-num js-line-number" data-line-number="593"></td>
              <td>СУ-318995</td>
              <td>2746641</td>
              <td>Младший сержант</td>
              <td>Ооржак Аян Альбертович</td>
              <td>12.06.1996</td>
              <td>93</td>
              <td>10</td>
              <td>428371</td>
              <td>ТП ОФМС РОССИИ ПО РЕСПУБЛИКЕ ТЫВА В ОВЮРСКОМ РАЙОНЕ</td>
              <td>1/28/2011</td>
          </tr>
          <tr id="LC594" class="js-file-line">
            <td id="L594" class="blob-num js-line-number" data-line-number="594"></td>
              <td>СУ-318984</td>
              <td>2746646</td>
              <td>Младший сержант</td>
              <td>Самбала Чингис Мергенович</td>
              <td>02.12.1992</td>
              <td>93</td>
              <td>11</td>
              <td>455596</td>
              <td>ООФМС РОССИИ ПО РЕСПУБЛИКЕ ТЫВА В ГОР. КЫЗЫЛЕ</td>
              <td>2/14/2012</td>
          </tr>
          <tr id="LC595" class="js-file-line">
            <td id="L595" class="blob-num js-line-number" data-line-number="595"></td>
              <td>СУ-344933</td>
              <td>2751032</td>
              <td>Младший сержант</td>
              <td>Бекентаев Амангельде Нургалиевич</td>
              <td>09.04.1995</td>
              <td>52</td>
              <td>15</td>
              <td>480273</td>
              <td>ОУФМС РОССИИ ПО ОМСКОЙ ОБЛАСТИ В ОМСКОМ РАЙОНЕ</td>
              <td>09.11.2015</td>
          </tr>
          <tr id="LC596" class="js-file-line">
            <td id="L596" class="blob-num js-line-number" data-line-number="596"></td>
              <td>СУ-303827</td>
              <td>2751049</td>
              <td>Младший сержант</td>
              <td>Шушарин Александр Сергеевич</td>
              <td>11/27/1993</td>
              <td>52</td>
              <td>13</td>
              <td>309218</td>
              <td>ТП УФМС РОССИИ ПО ОМСКОЙ ОБЛАСТИ В КРУТИНСКОМ РАЙОНЕ</td>
              <td>1/30/2014</td>
          </tr>
          <tr id="LC597" class="js-file-line">
            <td id="L597" class="blob-num js-line-number" data-line-number="597"></td>
              <td>СУ-142383</td>
              <td>2754846</td>
              <td>Младший сержант</td>
              <td>Громов Александр Александрович</td>
              <td>07.04.1997</td>
              <td>1</td>
              <td>11</td>
              <td>623284</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. ПАВЛОВСК</td>
              <td>7/18/2011</td>
          </tr>
          <tr id="LC598" class="js-file-line">
            <td id="L598" class="blob-num js-line-number" data-line-number="598"></td>
              <td>СУ-170741</td>
              <td>2760772</td>
              <td>Младший сержант</td>
              <td>Усов Николай Юрьевич</td>
              <td>03.07.1995</td>
              <td>75</td>
              <td>14</td>
              <td>606476</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ Г. КОРКИНО</td>
              <td>3/30/2015</td>
          </tr>
          <tr id="LC599" class="js-file-line">
            <td id="L599" class="blob-num js-line-number" data-line-number="599"></td>
              <td>Е-490845</td>
              <td>2765178</td>
              <td>Младший сержант</td>
              <td>Жадан Дмитрий Геннадьевич</td>
              <td>12/21/1995</td>
              <td>8</td>
              <td>16</td>
              <td>374661</td>
              <td>Отделом УФМС России по Хабаровскому краю и ЕАО в Индустриальном рай</td>
              <td>5/17/2016</td>
          </tr>
          <tr id="LC600" class="js-file-line">
            <td id="L600" class="blob-num js-line-number" data-line-number="600"></td>
              <td>ВС-066151</td>
              <td>2765239</td>
              <td>Младший сержант</td>
              <td>Прокопович Михаил Михайлович</td>
              <td>09.12.1995</td>
              <td>74</td>
              <td>15</td>
              <td>902026</td>
              <td>ОУФМС РОССИИ ПО ЯМАЛО-НЕНЕЦКОМУ А.О. В ПУРОВСКОМ РАЙОНЕ</td>
              <td>10.08.2015</td>
          </tr>
          <tr id="LC601" class="js-file-line">
            <td id="L601" class="blob-num js-line-number" data-line-number="601"></td>
              <td>Х-694704</td>
              <td>2766742</td>
              <td>Младший сержант</td>
              <td>Олексенко Дмитрий Юрьевич</td>
              <td>12/27/1988</td>
              <td>5</td>
              <td>8</td>
              <td>572018</td>
              <td>ОУФМС России по Приморскому краю в Пограничном муниципальном рай</td>
              <td>о5/27/2003</td>
          </tr>
          <tr id="LC602" class="js-file-line">
            <td id="L602" class="blob-num js-line-number" data-line-number="602"></td>
              <td>ВС-192820</td>
              <td>2767646</td>
              <td>Младший сержант</td>
              <td>Бойко Александр Владимирович</td>
              <td>5/27/1996</td>
              <td>3</td>
              <td>10</td>
              <td>553310</td>
              <td>ОУФМС России по Краснодарскому краю в УСть-Лабинском районе</td>
              <td>9/16/2010</td>
          </tr>
          <tr id="LC603" class="js-file-line">
            <td id="L603" class="blob-num js-line-number" data-line-number="603"></td>
              <td>МТ-131843</td>
              <td>2772837</td>
              <td>Младший сержант</td>
              <td>Ступин Анатолий Дмитриевич</td>
              <td>11/30/1996</td>
              <td>8</td>
              <td>16</td>
              <td>418302</td>
              <td>МО УФМС России по Хабаровскому краю и Еврейской автономной области </td>
              <td>1/13/2017</td>
          </tr>
          <tr id="LC604" class="js-file-line">
            <td id="L604" class="blob-num js-line-number" data-line-number="604"></td>
              <td>ВС-004214</td>
              <td>2787731</td>
              <td>Младший сержант</td>
              <td>Манторов Игорь Александрович</td>
              <td>05.05.1997</td>
              <td>75</td>
              <td>10</td>
              <td>870865</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В САТКИНСКОМ </td>
              <td>5/30/2011</td>
          </tr>
          <tr id="LC605" class="js-file-line">
            <td id="L605" class="blob-num js-line-number" data-line-number="605"></td>
              <td>МТ-156967</td>
              <td>2790545</td>
              <td>Младший сержант</td>
              <td>Мельников Владимир Сергеевич</td>
              <td>02.10.1994</td>
              <td>64</td>
              <td>13</td>
              <td>844886</td>
              <td>ТП УФМС России по Сахалинской области в Томаринском районе</td>
              <td>05.07.2014</td>
          </tr>
          <tr id="LC606" class="js-file-line">
            <td id="L606" class="blob-num js-line-number" data-line-number="606"></td>
              <td>МТ-112896</td>
              <td>2795354</td>
              <td>Младший сержант</td>
              <td>Никонов Вадим Валерьевич</td>
              <td>3/18/1993</td>
              <td>98</td>
              <td>12</td>
              <td>462544</td>
              <td>ТП ОФМС России по Республике Саха Якутия в Чурапчинском р-не</td>
              <td>4/17/2013</td>
          </tr>
          <tr id="LC607" class="js-file-line">
            <td id="L607" class="blob-num js-line-number" data-line-number="607"></td>
              <td>Х-839940</td>
              <td>2804482</td>
              <td>Младший сержант</td>
              <td>Доронин Павел Владимирович</td>
              <td>07.05.1989</td>
              <td>8</td>
              <td>9</td>
              <td>874154</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В СОВЕТСКО ГАВАН</td>
              <td>12/30/2009</td>
          </tr>
          <tr id="LC608" class="js-file-line">
            <td id="L608" class="blob-num js-line-number" data-line-number="608"></td>
              <td>МТ-182066</td>
              <td>2804483</td>
              <td>Младший сержант</td>
              <td>Имомов Саид Эраджхонович</td>
              <td>04.03.1993</td>
              <td>8</td>
              <td>16</td>
              <td>428221</td>
              <td>ОУФМС России по Хабаровскому краю и ЕАО в Хабаровском р-не</td>
              <td>03.07.2017</td>
          </tr>
          <tr id="LC609" class="js-file-line">
            <td id="L609" class="blob-num js-line-number" data-line-number="609"></td>
              <td>МТ-182077</td>
              <td>2804487</td>
              <td>Младший сержант</td>
              <td>Одинаев Бахриддин Раджабалиевич</td>
              <td>04.12.1991</td>
              <td>8</td>
              <td>17</td>
              <td>482140</td>
              <td>отделением УФМС России по Хабаровскому краю и Еврейской автономной </td>
              <td>11/17/2017</td>
          </tr>
          <tr id="LC610" class="js-file-line">
            <td id="L610" class="blob-num js-line-number" data-line-number="610"></td>
              <td>МТ-234611</td>
              <td>2804633</td>
              <td>Младший сержант</td>
              <td>Зиновьев Юрий Андреевич</td>
              <td>11.07.1992</td>
              <td>10</td>
              <td>13</td>
              <td>358900</td>
              <td>МО УФМС России по Амурской области в г. Белогорске</td>
              <td>07.08.2013</td>
          </tr>
          <tr id="LC611" class="js-file-line">
            <td id="L611" class="blob-num js-line-number" data-line-number="611"></td>
              <td>МТ-204238</td>
              <td>2807819</td>
              <td>Младший сержант</td>
              <td>Каблуков Алексей Анатольевич</td>
              <td>9/29/1987</td>
              <td>64</td>
              <td>8</td>
              <td>704445</td>
              <td>ТП УФМС России по Сахалинской области в Невельском районе</td>
              <td>04.09.2009</td>
          </tr>
          <tr id="LC612" class="js-file-line">
            <td id="L612" class="blob-num js-line-number" data-line-number="612"></td>
              <td>Х-785904</td>
              <td>2807820</td>
              <td>Младший сержант</td>
              <td>Казачук Владимир Владимирович</td>
              <td>3/20/1990</td>
              <td>8</td>
              <td>10</td>
              <td>920128</td>
              <td>отделом УФМС России по Хабаровскому краю в Центральном р-не г. Хабар</td>
              <td>о4/7/2010</td>
          </tr>
          <tr id="LC613" class="js-file-line">
            <td id="L613" class="blob-num js-line-number" data-line-number="613"></td>
              <td>МТ-182081</td>
              <td>2807822</td>
              <td>Младший сержант</td>
              <td>Муродов Рахмонджон Махмадович</td>
              <td>01.02.1992</td>
              <td>8</td>
              <td>17</td>
              <td>442113</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской Автономной области в Х</td>
              <td>5/15/2017</td>
          </tr>
          <tr id="LC614" class="js-file-line">
            <td id="L614" class="blob-num js-line-number" data-line-number="614"></td>
              <td>МТ-182117</td>
              <td>2809205</td>
              <td>Младший сержант</td>
              <td>Давлатов Авазжон Бобишоевич</td>
              <td>5/13/1986</td>
              <td>65</td>
              <td>45</td>
              <td>654654</td>
              <td>ДИПЛОМАТИЧЕСКОЕ ПРЕДСТАВИТЕЛЬСТВО РЕСПУБЛИКИ ТАДЖИКИСТАН В </td>
              <td>03.07.2015</td>
          </tr>
          <tr id="LC615" class="js-file-line">
            <td id="L615" class="blob-num js-line-number" data-line-number="615"></td>
              <td>МТ-182113</td>
              <td>2809274</td>
              <td>Младший сержант</td>
              <td>Фирдавси Нурулло</td>
              <td>08.07.1990</td>
              <td>8</td>
              <td>17</td>
              <td>441981</td>
              <td>ОУФМС России по Хаб. краю и ЕАО в Хабаровском р-не</td>
              <td>05.05.2017</td>
          </tr>
          <tr id="LC616" class="js-file-line">
            <td id="L616" class="blob-num js-line-number" data-line-number="616"></td>
              <td>Х-820388</td>
              <td>2809306</td>
              <td>Младший сержант</td>
              <td>Шамшурин Александр Александрович</td>
              <td>6/14/1989</td>
              <td>99</td>
              <td>8</td>
              <td>239717</td>
              <td>УФМС России по ЕАО в селе Биджан</td>
              <td>07.02.2009</td>
          </tr>
          <tr id="LC617" class="js-file-line">
            <td id="L617" class="blob-num js-line-number" data-line-number="617"></td>
              <td>Х-833697</td>
              <td>2809546</td>
              <td>Младший сержант</td>
              <td>Актанко Артем Андреевич</td>
              <td>6/14/1991</td>
              <td>8</td>
              <td>10</td>
              <td>947502</td>
              <td>ОУФМС России по Хабаровскому краю в Нанайском районе</td>
              <td>6/16/2011</td>
          </tr>
          <tr id="LC618" class="js-file-line">
            <td id="L618" class="blob-num js-line-number" data-line-number="618"></td>
              <td>Х-817545</td>
              <td>2811767</td>
              <td>Младший сержант</td>
              <td>Зенков Денис Николаевич</td>
              <td>10/23/1988</td>
              <td>10</td>
              <td>9</td>
              <td>184784</td>
              <td>УФМС России по Сковородинскаму району Амурской области</td>
              <td>01.12.2010</td>
          </tr>
          <tr id="LC619" class="js-file-line">
            <td id="L619" class="blob-num js-line-number" data-line-number="619"></td>
              <td>Х-840392</td>
              <td>2812123</td>
              <td>Младший сержант</td>
              <td>Светлов Михаил Викторович</td>
              <td>12/29/1989</td>
              <td>8</td>
              <td>9</td>
              <td>853435</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ  В ВЕРХНЕБУРЕИНСКОМ РАЙОН</td>
              <td>Е4/16/2010</td>
          </tr>
          <tr id="LC620" class="js-file-line">
            <td id="L620" class="blob-num js-line-number" data-line-number="620"></td>
              <td>МТ-182130</td>
              <td>2815606</td>
              <td>Младший сержант</td>
              <td>Абдрахманов Марат Владимирович</td>
              <td>11/27/1983</td>
              <td>8</td>
              <td>4</td>
              <td>232905</td>
              <td>УВД ЦЕНТРАЛЬНОГО РАЙОНА  ГОРОДА ХАБАРОВСКА</td>
              <td>2/24/2004</td>
          </tr>
          <tr id="LC621" class="js-file-line">
            <td id="L621" class="blob-num js-line-number" data-line-number="621"></td>
              <td>Х-837364</td>
              <td>2816120</td>
              <td>Младший сержант</td>
              <td>Чешев Евгений Игоревич</td>
              <td>11/24/1987</td>
              <td>8</td>
              <td>8</td>
              <td>826749</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>5/25/2009</td>
          </tr>
          <tr id="LC622" class="js-file-line">
            <td id="L622" class="blob-num js-line-number" data-line-number="622"></td>
              <td>МТ-131677</td>
              <td>2823767</td>
              <td>Младший сержант</td>
              <td>Паньков Иван Григорьевич</td>
              <td>07.06.1997</td>
              <td>8</td>
              <td>11</td>
              <td>23281</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ Р</td>
              <td>9/30/2011</td>
          </tr>
          <tr id="LC623" class="js-file-line">
            <td id="L623" class="blob-num js-line-number" data-line-number="623"></td>
              <td>МТ-182185</td>
              <td>2828258</td>
              <td>Младший сержант</td>
              <td>Головенец Денис Валерьевич</td>
              <td>07.01.1986</td>
              <td>8</td>
              <td>6</td>
              <td>661822</td>
              <td>Отделом УФМС России по Хабаровскому краю в Краснофлотском р-не гор. </td>
              <td>Х11/8/2007</td>
          </tr>
          <tr id="LC624" class="js-file-line">
            <td id="L624" class="blob-num js-line-number" data-line-number="624"></td>
              <td>МТ-182187</td>
              <td>2828284</td>
              <td>Младший сержант</td>
              <td>Рахматуллоев Фирдавси Эмомалиевич</td>
              <td>09.07.1996</td>
              <td>66</td>
              <td>84</td>
              <td>465456</td>
              <td>ТП Заречное ОУФМС России по Алтайскому краю в г. Бийске</td>
              <td>04.12.2012</td>
          </tr>
          <tr id="LC625" class="js-file-line">
            <td id="L625" class="blob-num js-line-number" data-line-number="625"></td>
              <td>СУ-424488</td>
              <td>2839304</td>
              <td>Младший сержант</td>
              <td>Куличкин Роман Германович</td>
              <td>1/31/1995</td>
              <td>98</td>
              <td>15</td>
              <td>600980</td>
              <td> </td>
              <td>4/23/2015</td>
          </tr>
          <tr id="LC626" class="js-file-line">
            <td id="L626" class="blob-num js-line-number" data-line-number="626"></td>
              <td>МТ-131630</td>
              <td>2843103</td>
              <td>Младший сержант</td>
              <td>Бардычевский Александр Александрович</td>
              <td>2/27/1997</td>
              <td>8</td>
              <td>17</td>
              <td>441881</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕАО В ХАБАРОВС</td>
              <td>4/27/2017</td>
          </tr>
          <tr id="LC627" class="js-file-line">
            <td id="L627" class="blob-num js-line-number" data-line-number="627"></td>
              <td>МТ-245068</td>
              <td>2843481</td>
              <td>Младший сержант</td>
              <td>Кичайкин Олег Сергеевич</td>
              <td>02.11.1997</td>
              <td>10</td>
              <td>13</td>
              <td>354633</td>
              <td>ОУФМС России по Амурской области в Мазановском районе</td>
              <td>08.05.2013</td>
          </tr>
          <tr id="LC628" class="js-file-line">
            <td id="L628" class="blob-num js-line-number" data-line-number="628"></td>
              <td>ВС-273070</td>
              <td>2860103</td>
              <td>Младший сержант</td>
              <td>Привальский Владислав Викторович</td>
              <td>7/29/1994</td>
              <td>53</td>
              <td>14</td>
              <td>516664</td>
              <td>ОУФМС РОССИИ ПО ОРЕНБУРГСКОЙ ОБЛАСТИ В ОКТЯБРЬСКОМ РАЙОНЕ Г. </td>
              <td>О2/16/2015</td>
          </tr>
          <tr id="LC629" class="js-file-line">
            <td id="L629" class="blob-num js-line-number" data-line-number="629"></td>
              <td>ВС-273051</td>
              <td>2860113</td>
              <td>Младший сержант</td>
              <td>Ходиев Азиз Абдуллаевич</td>
              <td>9/26/1995</td>
              <td>53</td>
              <td>15</td>
              <td>546367</td>
              <td>ОУФМС РОССИИ ПО ОРЕНБУРГСКОЙ ОБЛАСТИ В Г. БУГУРУСЛАНЕ</td>
              <td>10/15/2015</td>
          </tr>
          <tr id="LC630" class="js-file-line">
            <td id="L630" class="blob-num js-line-number" data-line-number="630"></td>
              <td>Ю-857414</td>
              <td>2860526</td>
              <td>Младший сержант</td>
              <td>Горячев Антон Николаевич</td>
              <td>07.05.1993</td>
              <td>8</td>
              <td>14</td>
              <td>271097</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ РАЙОНЕ Г</td>
              <td>1/22/2015</td>
          </tr>
          <tr id="LC631" class="js-file-line">
            <td id="L631" class="blob-num js-line-number" data-line-number="631"></td>
              <td>ВС-298233</td>
              <td>2865130</td>
              <td>Младший сержант</td>
              <td>Тимофеев Сергей Владимирович</td>
              <td>5/25/1993</td>
              <td>63</td>
              <td>13</td>
              <td>888916</td>
              <td>ТП УФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В СОВЕТСКОМ РАЙОНЕ</td>
              <td>5/30/2013</td>
          </tr>
          <tr id="LC632" class="js-file-line">
            <td id="L632" class="blob-num js-line-number" data-line-number="632"></td>
              <td>МТ-196538</td>
              <td>2873511</td>
              <td>Младший сержант</td>
              <td>Александров Максим Юрьевич</td>
              <td>04.10.1991</td>
              <td>10</td>
              <td>11</td>
              <td>258263</td>
              <td>МО УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г. БЛАГОВЕЩЕНСКЕ</td>
              <td>5/26/2011</td>
          </tr>
          <tr id="LC633" class="js-file-line">
            <td id="L633" class="blob-num js-line-number" data-line-number="633"></td>
              <td>Х-873454</td>
              <td>2888206</td>
              <td>Младший сержант</td>
              <td>Орлов Александр Александрович</td>
              <td>12/22/1990</td>
              <td>10</td>
              <td>10</td>
              <td>230600</td>
              <td>МО УФМС России по Амурской области в г. Белогорске</td>
              <td>1/24/2011</td>
          </tr>
          <tr id="LC634" class="js-file-line">
            <td id="L634" class="blob-num js-line-number" data-line-number="634"></td>
              <td>ВС-389670</td>
              <td>2893748</td>
              <td>Младший сержант</td>
              <td>Остапенко Андрей Евгеньевич</td>
              <td>01.08.1996</td>
              <td>4</td>
              <td>14</td>
              <td>643637</td>
              <td>ТП УФМС РОССИИ ПО КРАСНОЯРСКОМУ КРАЮ</td>
              <td>1/14/2016</td>
          </tr>
          <tr id="LC635" class="js-file-line">
            <td id="L635" class="blob-num js-line-number" data-line-number="635"></td>
              <td>ВС-294098</td>
              <td>2894166</td>
              <td>Младший сержант</td>
              <td>Федосеев Сергей Владимирович</td>
              <td>11/20/1995</td>
              <td>75</td>
              <td>15</td>
              <td>677196</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В Г. ТРОИЦКЕ И ТРОИЦКОМ Р</td>
              <td>А12/1/2015</td>
          </tr>
          <tr id="LC636" class="js-file-line">
            <td id="L636" class="blob-num js-line-number" data-line-number="636"></td>
              <td>ВС-305416</td>
              <td>2913591</td>
              <td>Младший сержант</td>
              <td>Антипов Юрий Николаевич</td>
              <td>3/14/1998</td>
              <td>69</td>
              <td>11</td>
              <td>479460</td>
              <td>ТЕРРИТОРИАЛЬНЫМ ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ТОМСКОЙ ОБЛАСТИ</td>
              <td> 4/4/2012</td>
          </tr>
          <tr id="LC637" class="js-file-line">
            <td id="L637" class="blob-num js-line-number" data-line-number="637"></td>
              <td>ВС-016365</td>
              <td>2915603</td>
              <td>Младший сержант</td>
              <td>Плотников Георгий Александрович</td>
              <td>05.04.1995</td>
              <td>50</td>
              <td>15</td>
              <td>418385</td>
              <td>ОТДЕЛЕНИЕМ В ЗЕЛЬЦОВСКОМ РАЙОНЕ ОУФМС РОССИИ ПО НОВОСИБИРС</td>
              <td>К7/17/2015</td>
          </tr>
          <tr id="LC638" class="js-file-line">
            <td id="L638" class="blob-num js-line-number" data-line-number="638"></td>
              <td>ВС-069939</td>
              <td>2919094</td>
              <td>Младший сержант</td>
              <td>Соколов Алексей Юрьевич</td>
              <td>2/15/1998</td>
              <td>1</td>
              <td>11</td>
              <td>665062</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. ХАБАРЫ</td>
              <td>2/20/2012</td>
          </tr>
          <tr id="LC639" class="js-file-line">
            <td id="L639" class="blob-num js-line-number" data-line-number="639"></td>
              <td>ВС-069934</td>
              <td>2919118</td>
              <td>Младший сержант</td>
              <td>Фишер Владимир Александрович</td>
              <td>4/22/1993</td>
              <td>1</td>
              <td>13</td>
              <td>861961</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. ТЮМЕНЦЕВО</td>
              <td>05.06.2013</td>
          </tr>
          <tr id="LC640" class="js-file-line">
            <td id="L640" class="blob-num js-line-number" data-line-number="640"></td>
              <td>МТ-103545</td>
              <td>2930528</td>
              <td>Младший сержант</td>
              <td>Стукалов Николай Сергеевич</td>
              <td>12/18/1995</td>
              <td>8</td>
              <td>16</td>
              <td>367329</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕАО В ЦЕНТРАЛЬНОМ РАЙОН</td>
              <td>5/26/2016</td>
          </tr>
          <tr id="LC641" class="js-file-line">
            <td id="L641" class="blob-num js-line-number" data-line-number="641"></td>
              <td>ВС-288645</td>
              <td>2931697</td>
              <td>Младший сержант</td>
              <td>Тарасевич Артем Владимирович</td>
              <td>07.07.1997</td>
              <td>65</td>
              <td>11</td>
              <td>233702</td>
              <td>УФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В РЕЗВИНСКОМ РАЙОНЕ</td>
              <td>09.08.2011</td>
          </tr>
          <tr id="LC642" class="js-file-line">
            <td id="L642" class="blob-num js-line-number" data-line-number="642"></td>
              <td>МТ-103600</td>
              <td>2935966</td>
              <td>Младший сержант</td>
              <td>Ермолаев Евгений Константинович</td>
              <td>09.11.1995</td>
              <td>8</td>
              <td>15</td>
              <td>343927</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ РАЙОНЕ</td>
              <td>11/30/2015</td>
          </tr>
          <tr id="LC643" class="js-file-line">
            <td id="L643" class="blob-num js-line-number" data-line-number="643"></td>
              <td>МТ-177213</td>
              <td>2958577</td>
              <td>Младший сержант</td>
              <td>Замерчук Константин Александрович</td>
              <td>03.07.1994</td>
              <td>8</td>
              <td>14</td>
              <td>225850</td>
              <td> </td>
              <td>4/25/2014</td>
          </tr>
          <tr id="LC644" class="js-file-line">
            <td id="L644" class="blob-num js-line-number" data-line-number="644"></td>
              <td>МТ-217027</td>
              <td>2968634</td>
              <td>Младший сержант</td>
              <td>Соснин Сергей Викторович</td>
              <td>10/18/1994</td>
              <td>8</td>
              <td>14</td>
              <td>279239</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В СЕВЕРНОМ РАЙОНЕ Г. ХАБАРО</td>
              <td>1/16/2015</td>
          </tr>
          <tr id="LC645" class="js-file-line">
            <td id="L645" class="blob-num js-line-number" data-line-number="645"></td>
              <td>МТ-178746</td>
              <td>2974394</td>
              <td>Младший сержант</td>
              <td>Балданов Даба Бадмаевич</td>
              <td>9/30/1991</td>
              <td>76</td>
              <td>15</td>
              <td>826947</td>
              <td>УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В МОГОТУЙСКОМ РАЙОНЕ</td>
              <td>8/18/2015</td>
          </tr>
          <tr id="LC646" class="js-file-line">
            <td id="L646" class="blob-num js-line-number" data-line-number="646"></td>
              <td>СУ-470807</td>
              <td>2974501</td>
              <td>Младший сержант</td>
              <td>Осаковский Дмитрий Андреевич</td>
              <td>08.01.1990</td>
              <td>8</td>
              <td>15</td>
              <td>342569</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В</td>
              <td>11/28/2016</td>
          </tr>
          <tr id="LC647" class="js-file-line">
            <td id="L647" class="blob-num js-line-number" data-line-number="647"></td>
              <td>МТ-196635</td>
              <td>2974671</td>
              <td>Младший сержант</td>
              <td>Седякин Денис Викторович</td>
              <td>05.10.1983</td>
              <td>10</td>
              <td>3</td>
              <td>745059</td>
              <td>УВД Г. БЛАГОВЕЩЕНСКА</td>
              <td>11/16/2004</td>
          </tr>
          <tr id="LC648" class="js-file-line">
            <td id="L648" class="blob-num js-line-number" data-line-number="648"></td>
              <td>МТ-204937</td>
              <td>2977983</td>
              <td>Младший сержант</td>
              <td>Поздеев Валентин Александрович</td>
              <td>2/28/1988</td>
              <td>8</td>
              <td>8</td>
              <td>758183</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ РАЙОНЕ Г</td>
              <td>07.08.2008</td>
          </tr>
          <tr id="LC649" class="js-file-line">
            <td id="L649" class="blob-num js-line-number" data-line-number="649"></td>
              <td>ВЕ-354118</td>
              <td>2979013</td>
              <td>Младший сержант</td>
              <td>Смирнов Дмитрий Вячеславович</td>
              <td>07.07.1994</td>
              <td>20</td>
              <td>14</td>
              <td>760523</td>
              <td>УФМС РОССИИ ПО ВОРОНЕЖСКОЙ ОБЛАСТИ В ПАНИНСКОМ РАЙОНЕ</td>
              <td>08.02.2014</td>
          </tr>
          <tr id="LC650" class="js-file-line">
            <td id="L650" class="blob-num js-line-number" data-line-number="650"></td>
              <td>МТ-204752</td>
              <td>2980050</td>
              <td>Младший сержант</td>
              <td>Левин Евгений Олегович</td>
              <td>05.04.1993</td>
              <td>8</td>
              <td>13</td>
              <td>156891</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ВЯЗЕМСКОМ РАЙОНЕ</td>
              <td>5/15/2013</td>
          </tr>
          <tr id="LC651" class="js-file-line">
            <td id="L651" class="blob-num js-line-number" data-line-number="651"></td>
              <td>МТ-127480</td>
              <td>2982936</td>
              <td>Младший сержант</td>
              <td>Ивашина Кристина Владимировна</td>
              <td>6/21/1993</td>
              <td>8</td>
              <td>13</td>
              <td>164048</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖНОМ Р-НЕ Г.</td>
              <td>Х7/22/2013</td>
          </tr>
          <tr id="LC652" class="js-file-line">
            <td id="L652" class="blob-num js-line-number" data-line-number="652"></td>
              <td>МТ-196812</td>
              <td>2983104</td>
              <td>Младший сержант</td>
              <td>Оксюковский Александр Николаевич</td>
              <td>11/23/1994</td>
              <td>10</td>
              <td>14</td>
              <td>409921</td>
              <td>ОУФМС России по Амурской обл. в п. Серышево</td>
              <td>12.03.2014</td>
          </tr>
          <tr id="LC653" class="js-file-line">
            <td id="L653" class="blob-num js-line-number" data-line-number="653"></td>
              <td>МТ-196815</td>
              <td>2983105</td>
              <td>Младший сержант</td>
              <td>Рябухина Марина Михайловна</td>
              <td>06.06.1991</td>
              <td>10</td>
              <td>10</td>
              <td>246024</td>
              <td>ОУФМС России по Амурской обл. в Архаринском районе</td>
              <td>09.05.2011</td>
          </tr>
          <tr id="LC654" class="js-file-line">
            <td id="L654" class="blob-num js-line-number" data-line-number="654"></td>
              <td>ВС-397928</td>
              <td>2998964</td>
              <td>Младший сержант</td>
              <td>Хасаншин Рамиль Ринатович</td>
              <td>8/21/1998</td>
              <td>92</td>
              <td>12</td>
              <td>349822</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ ТАТАРСТАН В АЛЬМЕТБЕВСКОМ РАЙОНЕ</td>
              <td>8/28/2012</td>
          </tr>
          <tr id="LC655" class="js-file-line">
            <td id="L655" class="blob-num js-line-number" data-line-number="655"></td>
              <td>СУ-463923</td>
              <td>3007259</td>
              <td>Младший сержант</td>
              <td>Винокуров Игорь Дмитриевич</td>
              <td>07.08.1992</td>
              <td>98</td>
              <td>11</td>
              <td>400662</td>
              <td>ТП  УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА ( ЯКУТИЯ ) В НАМСКОМ РАЙОНЕ</td>
              <td>11.01.2016</td>
          </tr>
          <tr id="LC656" class="js-file-line">
            <td id="L656" class="blob-num js-line-number" data-line-number="656"></td>
              <td>МТ-204980</td>
              <td>3007262</td>
              <td>Младший сержант</td>
              <td>Маловичко Игорь Андреевич</td>
              <td>10/16/1993</td>
              <td>5</td>
              <td>13</td>
              <td>133722</td>
              <td>УФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ ВО ФРУНЗЕНСКОМ РАЙОНЕ Г.ВЛА</td>
              <td>12/13/2013</td>
          </tr>
          <tr id="LC657" class="js-file-line">
            <td id="L657" class="blob-num js-line-number" data-line-number="657"></td>
              <td>ВС-291527</td>
              <td>3008705</td>
              <td>Младший сержант</td>
              <td>Деревягин Максим Валерьевич</td>
              <td>12.11.1997</td>
              <td>61</td>
              <td>12</td>
              <td>757352</td>
              <td>МО УФМС России по Рязанской области в г. Ряжске</td>
              <td>11.01.2012</td>
          </tr>
          <tr id="LC658" class="js-file-line">
            <td id="L658" class="blob-num js-line-number" data-line-number="658"></td>
              <td>ВС-313960</td>
              <td>3008788</td>
              <td>Младший сержант</td>
              <td>Слезкин Дмитрий Николаевич</td>
              <td>7/16/1998</td>
              <td>65</td>
              <td>12</td>
              <td>403031</td>
              <td>Отделением УФМС России по Свердловской области вТалицком р-не</td>
              <td>8/23/2012</td>
          </tr>
          <tr id="LC659" class="js-file-line">
            <td id="L659" class="blob-num js-line-number" data-line-number="659"></td>
              <td>ВС-030370</td>
              <td>3011874</td>
              <td>Младший сержант</td>
              <td>Зажогин Вадим Александрович</td>
              <td>03.02.1997</td>
              <td>33</td>
              <td>12</td>
              <td>173371</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ В КОНСТАНТИНОВСКОМ РАЙОНЕ</td>
              <td>12.03.2012</td>
          </tr>
          <tr id="LC660" class="js-file-line">
            <td id="L660" class="blob-num js-line-number" data-line-number="660"></td>
              <td>ВС-030371</td>
              <td>3011875</td>
              <td>Младший сержант</td>
              <td>Карин Алексей Александрович</td>
              <td>11/14/1997</td>
              <td>33</td>
              <td>11</td>
              <td>124510</td>
              <td>ТП УФМС РОССИИ ПО КИРОВСКОЙ ОБЛАСТИ В ЗУЕВСКОМ РАЙОНЕ</td>
              <td>5/23/2012</td>
          </tr>
          <tr id="LC661" class="js-file-line">
            <td id="L661" class="blob-num js-line-number" data-line-number="661"></td>
              <td>ВС-019896</td>
              <td>3019822</td>
              <td>Младший сержант</td>
              <td>Заколюкин Дмитрий Эдуардович</td>
              <td>03.01.1998</td>
              <td>32</td>
              <td>11</td>
              <td>120534</td>
              <td>МО УФМС России по Амурской области в г.Белогорске</td>
              <td>06.01.2012</td>
          </tr>
          <tr id="LC662" class="js-file-line">
            <td id="L662" class="blob-num js-line-number" data-line-number="662"></td>
              <td>МТ-204289</td>
              <td>3020221</td>
              <td>Младший сержант</td>
              <td>Юмаева Надия Рашитовна</td>
              <td>6/26/1984</td>
              <td>56</td>
              <td>4</td>
              <td>461995</td>
              <td>ОТДЕЛОМ ВНУТРЕННИХ ДЕЛ Г. КАМЕНКИ ПЕНЗЕНСКОЙ ОБЛАСТИ</td>
              <td>4/23/2005</td>
          </tr>
          <tr id="LC663" class="js-file-line">
            <td id="L663" class="blob-num js-line-number" data-line-number="663"></td>
              <td>ВС-073402</td>
              <td>3020974</td>
              <td>Младший сержант</td>
              <td>Жданов Михаил Антонович</td>
              <td>9/18/1996</td>
              <td>1</td>
              <td>16</td>
              <td>258162</td>
              <td> </td>
              <td>9/27/2016</td>
          </tr>
          <tr id="LC664" class="js-file-line">
            <td id="L664" class="blob-num js-line-number" data-line-number="664"></td>
              <td>Э-430767</td>
              <td>3024982</td>
              <td>Младший сержант</td>
              <td>Гром Андрей Викторович</td>
              <td>2/13/1990</td>
              <td>20</td>
              <td>9</td>
              <td>237981</td>
              <td>ОУФМС России по Воронежской области в Киментерновском районе г. Вор</td>
              <td>о3/1/2010</td>
          </tr>
          <tr id="LC665" class="js-file-line">
            <td id="L665" class="blob-num js-line-number" data-line-number="665"></td>
              <td>СУ-323707</td>
              <td>3025059</td>
              <td>Младший сержант</td>
              <td>Донской Иван Владимирович</td>
              <td>8/14/1994</td>
              <td>25</td>
              <td>15</td>
              <td>4319</td>
              <td>ОТДЕЛ УФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В ГОР. УСОЛЬЕ-СИБИРСКОЕ</td>
              <td>9/15/2014</td>
          </tr>
          <tr id="LC666" class="js-file-line">
            <td id="L666" class="blob-num js-line-number" data-line-number="666"></td>
              <td>ВС-337336</td>
              <td>3025068</td>
              <td>Младший сержант</td>
              <td>Лапшаков Вячеслав Викторович</td>
              <td>4/17/1994</td>
              <td>25</td>
              <td>14</td>
              <td>961127</td>
              <td>ТП УФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В ЧУНСКОМ РАЙОНЕ</td>
              <td>6/26/2014</td>
          </tr>
          <tr id="LC667" class="js-file-line">
            <td id="L667" class="blob-num js-line-number" data-line-number="667"></td>
              <td>МТ-196848</td>
              <td>3026133</td>
              <td>Младший сержант</td>
              <td>Белик Ксения Григорьевна</td>
              <td>4/21/1992</td>
              <td>10</td>
              <td>12</td>
              <td>301065</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В ИВАНОВСКОМ РАЙОНЕ</td>
              <td>5/23/2012</td>
          </tr>
          <tr id="LC668" class="js-file-line">
            <td id="L668" class="blob-num js-line-number" data-line-number="668"></td>
              <td>СУ-146990</td>
              <td>3029195</td>
              <td>Младший сержант</td>
              <td>Нуртазин Арман Галиевич</td>
              <td>12.10.1997</td>
              <td>52</td>
              <td>11</td>
              <td>71255</td>
              <td>2 Отделение УМВД по г. Якутску</td>
              <td>1/27/2012</td>
          </tr>
          <tr id="LC669" class="js-file-line">
            <td id="L669" class="blob-num js-line-number" data-line-number="669"></td>
              <td>СУ-185038</td>
              <td>3031581</td>
              <td>Младший сержант</td>
              <td>Женикеев Аманжол Маратович</td>
              <td>9/14/1998</td>
              <td>50</td>
              <td>13</td>
              <td>41082</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В ЧАЛЫМСКОМ РАЙОНЕ</td>
              <td>9/26/2012</td>
          </tr>
          <tr id="LC670" class="js-file-line">
            <td id="L670" class="blob-num js-line-number" data-line-number="670"></td>
              <td>ВС-047962</td>
              <td>3031613</td>
              <td>Младший сержант</td>
              <td>Лихоманов Дмитрий Андреевич</td>
              <td>4/18/1998</td>
              <td>50</td>
              <td>11</td>
              <td>977320</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В ИСКИТИМСКОМ РАЙОН</td>
              <td>Е4/24/2012</td>
          </tr>
          <tr id="LC671" class="js-file-line">
            <td id="L671" class="blob-num js-line-number" data-line-number="671"></td>
              <td>ВС-053036</td>
              <td>3031647</td>
              <td>Младший сержант</td>
              <td>Трушкин Сергей Сергеевич</td>
              <td>6/21/1997</td>
              <td>50</td>
              <td>13</td>
              <td>101884</td>
              <td>ОУФМС России по Новосибирской области в Черепановском р-не</td>
              <td>4/24/2013</td>
          </tr>
          <tr id="LC672" class="js-file-line">
            <td id="L672" class="blob-num js-line-number" data-line-number="672"></td>
              <td>ВС-227616</td>
              <td>3054546</td>
              <td>Младший сержант</td>
              <td>Бидюк Константин Михайлович</td>
              <td>6/30/1997</td>
              <td>60</td>
              <td>10</td>
              <td>943276</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В СКРУПСКОМ РАЙОНЕ</td>
              <td>7/14/2011</td>
          </tr>
          <tr id="LC673" class="js-file-line">
            <td id="L673" class="blob-num js-line-number" data-line-number="673"></td>
              <td>ВС-080244</td>
              <td>3062271</td>
              <td>Младший сержант</td>
              <td>Король Игорь Владимирович</td>
              <td>07.10.1998</td>
              <td>1</td>
              <td>11</td>
              <td>741861</td>
              <td>ТП УФМС России по Алтайскому краю по Змеиногорскому р-ну</td>
              <td>7/17/2012</td>
          </tr>
          <tr id="LC674" class="js-file-line">
            <td id="L674" class="blob-num js-line-number" data-line-number="674"></td>
              <td>МТ-172737</td>
              <td>3072410</td>
              <td>Младший сержант</td>
              <td>Хижный Андрей Олегович</td>
              <td>9/13/1998</td>
              <td>76</td>
              <td>12</td>
              <td>644569</td>
              <td>ОУФМС России по Забайкальскому краю в Читинском р-не</td>
              <td>10/30/2012</td>
          </tr>
          <tr id="LC675" class="js-file-line">
            <td id="L675" class="blob-num js-line-number" data-line-number="675"></td>
              <td>ВС-123683</td>
              <td>3087764</td>
              <td>Младший сержант</td>
              <td>Загидуллин Ринат Азаматович</td>
              <td>12/24/1995</td>
              <td>80</td>
              <td>16</td>
              <td>474591</td>
              <td>ОУФМС России по республике Башкортостан в г. Стерлитамак</td>
              <td>11/29/2016</td>
          </tr>
          <tr id="LC676" class="js-file-line">
            <td id="L676" class="blob-num js-line-number" data-line-number="676"></td>
              <td>СУ-480086</td>
              <td>3092426</td>
              <td>Младший сержант</td>
              <td>Агеев Сергей Алексеевич</td>
              <td>1/17/1996</td>
              <td>5</td>
              <td>15</td>
              <td>305787</td>
              <td>МРО № 1 УФМС России по Приморскому краю в городском округе Большой</td>
              <td>2/19/2016</td>
          </tr>
          <tr id="LC677" class="js-file-line">
            <td id="L677" class="blob-num js-line-number" data-line-number="677"></td>
              <td>ВС-052487</td>
              <td>3122944</td>
              <td>Младший сержант</td>
              <td>Жерноклеев Егор Евгеньевич</td>
              <td>11.11.1997</td>
              <td>50</td>
              <td>10</td>
              <td>805558</td>
              <td>отделом УФМС России по Хабаровскому краю в Индустриальном р-не г. Ха</td>
              <td>б11/24/2011</td>
          </tr>
          <tr id="LC678" class="js-file-line">
            <td id="L678" class="blob-num js-line-number" data-line-number="678"></td>
              <td>МТ-182267</td>
              <td>3128588</td>
              <td>Младший сержант</td>
              <td>Мельниченко Екатерина Сергеевна</td>
              <td>5/24/1983</td>
              <td>5</td>
              <td>9</td>
              <td>672607</td>
              <td>ОУФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В ДАЛЬНЕРЕЧЕНСКОМ ГОРОДСО</td>
              <td>02.03.2010</td>
          </tr>
          <tr id="LC679" class="js-file-line">
            <td id="L679" class="blob-num js-line-number" data-line-number="679"></td>
              <td>Х-966480</td>
              <td>3128656</td>
              <td>Младший сержант</td>
              <td>Смирнов Роман Анатольевич</td>
              <td>6/17/1988</td>
              <td>69</td>
              <td>8</td>
              <td>253590</td>
              <td>УФМС РОССИИ ПО ТОМСКОЙ ОБЛАСТИ В Г.АСИНО</td>
              <td>7/18/2008</td>
          </tr>
          <tr id="LC680" class="js-file-line">
            <td id="L680" class="blob-num js-line-number" data-line-number="680"></td>
              <td>МТ-129401</td>
              <td>3130467</td>
              <td>Младший сержант</td>
              <td>Максимов Алексей Анатольевич</td>
              <td>04.04.1986</td>
              <td>10</td>
              <td>5</td>
              <td>980022</td>
              <td>УВД Г. БЛАГОВЕЩЕНСКА</td>
              <td>07.05.2006</td>
          </tr>
          <tr id="LC681" class="js-file-line">
            <td id="L681" class="blob-num js-line-number" data-line-number="681"></td>
              <td>Э-058741</td>
              <td>3131396</td>
              <td>Младший сержант</td>
              <td>Романов Илдус Рушанович</td>
              <td>7/30/1975</td>
              <td>73</td>
              <td>1</td>
              <td>346770</td>
              <td>Заволжским РУВД гор.Ульяновска</td>
              <td>12/20/2001</td>
          </tr>
          <tr id="LC682" class="js-file-line">
            <td id="L682" class="blob-num js-line-number" data-line-number="682"></td>
              <td>МТ-217129</td>
              <td>3137759</td>
              <td>Младший сержант</td>
              <td>Поторов Дмитрий Викторович</td>
              <td>05.12.1983</td>
              <td>8</td>
              <td>4</td>
              <td>304621</td>
              <td>2 ОМ УВД Индустриального района гор. Хабаровска</td>
              <td>4/20/2004</td>
          </tr>
          <tr id="LC683" class="js-file-line">
            <td id="L683" class="blob-num js-line-number" data-line-number="683"></td>
              <td>МТ-217134</td>
              <td>3150407</td>
              <td>Младший сержант</td>
              <td>Маркарян Араик Валерьевич</td>
              <td>11.04.1981</td>
              <td>8</td>
              <td>16</td>
              <td>394467</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской автономной области в К</td>
              <td>10.10.2016</td>
          </tr>
          <tr id="LC684" class="js-file-line">
            <td id="L684" class="blob-num js-line-number" data-line-number="684"></td>
              <td>МТ-127117</td>
              <td>3161917</td>
              <td>Младший сержант</td>
              <td>Горбунов Алексей Владимирович</td>
              <td>03.08.1985</td>
              <td>8</td>
              <td>6</td>
              <td>653112</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе г. Хаба</td>
              <td>р9/13/2007</td>
          </tr>
          <tr id="LC685" class="js-file-line">
            <td id="L685" class="blob-num js-line-number" data-line-number="685"></td>
              <td>ВС-201915</td>
              <td>3169839</td>
              <td>Младший сержант</td>
              <td>Магомедов Касум Мирзаханович</td>
              <td>12/25/1994</td>
              <td>82</td>
              <td>14</td>
              <td>605152</td>
              <td> </td>
              <td>1/20/2015</td>
          </tr>
          <tr id="LC686" class="js-file-line">
            <td id="L686" class="blob-num js-line-number" data-line-number="686"></td>
              <td>МТ-120557</td>
              <td>3181680</td>
              <td>Младший сержант</td>
              <td>Титоренко Олег Валентинович</td>
              <td>12/31/1996</td>
              <td>98</td>
              <td>17</td>
              <td>723761</td>
              <td>МРО УФМС России по республике Саха (Якутия) в г. Якутске</td>
              <td>5/15/2017</td>
          </tr>
          <tr id="LC687" class="js-file-line">
            <td id="L687" class="blob-num js-line-number" data-line-number="687"></td>
              <td>МТ-182301</td>
              <td>3211165</td>
              <td>Младший сержант</td>
              <td>Федорчук Денис Ильич</td>
              <td>08.06.1991</td>
              <td>8</td>
              <td>10</td>
              <td>983062</td>
              <td>отделением УФМС России по Хабаровскому краю в Бикинском районе</td>
              <td>09.12.2011</td>
          </tr>
          <tr id="LC688" class="js-file-line">
            <td id="L688" class="blob-num js-line-number" data-line-number="688"></td>
              <td>МТ-153653</td>
              <td>3248346</td>
              <td>Младший сержант</td>
              <td>Куралесов Роман Валерьевич</td>
              <td>05.07.1997</td>
              <td>10</td>
              <td>17</td>
              <td>521720</td>
              <td>ОУФМС России по Амурской области в п. Серышево</td>
              <td>5/15/2017</td>
          </tr>
          <tr id="LC689" class="js-file-line">
            <td id="L689" class="blob-num js-line-number" data-line-number="689"></td>
              <td>МТ-127637</td>
              <td>3272701</td>
              <td>Младший сержант</td>
              <td>Морозов Дмитрий Александрович</td>
              <td>1/28/1994</td>
              <td>10</td>
              <td>14</td>
              <td>425393</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г.СВОБОДНОМ</td>
              <td>12/24/2014</td>
          </tr>
          <tr id="LC690" class="js-file-line">
            <td id="L690" class="blob-num js-line-number" data-line-number="690"></td>
              <td>МТ-217142</td>
              <td>3277640</td>
              <td>Младший сержант</td>
              <td>Ананевский Андрей Евгеньевич</td>
              <td>4/16/1985</td>
              <td>8</td>
              <td>5</td>
              <td>605110</td>
              <td>ОУФМС по Хабаровскому краю в Индустриальном р-не г. Хабаровска</td>
              <td>5/18/2007</td>
          </tr>
          <tr id="LC691" class="js-file-line">
            <td id="L691" class="blob-num js-line-number" data-line-number="691"></td>
              <td>ВС-353031</td>
              <td>3278185</td>
              <td>Младший сержант</td>
              <td>Юферов Алексей Сергеевич</td>
              <td>1/23/1985</td>
              <td>25</td>
              <td>17</td>
              <td>354022</td>
              <td>Отделом УФМС России по Иркутской области в гор. Братске и Братском р-н</td>
              <td>е3/21/2017</td>
          </tr>
          <tr id="LC692" class="js-file-line">
            <td id="L692" class="blob-num js-line-number" data-line-number="692"></td>
              <td>МТ-217074</td>
              <td>3283052</td>
              <td>Младший сержант</td>
              <td>Горбачев Александр Анатольевич</td>
              <td>9/27/1986</td>
              <td>8</td>
              <td>8</td>
              <td>816697</td>
              <td>ОУФМС России по Хабаровскому краю в Кировском р-не г. Хабаровска</td>
              <td>3/13/2009</td>
          </tr>
          <tr id="LC693" class="js-file-line">
            <td id="L693" class="blob-num js-line-number" data-line-number="693"></td>
              <td>СУ-473194</td>
              <td>3283220</td>
              <td>Младший сержант</td>
              <td>Носырев Виктор Андреевич</td>
              <td>08.01.1996</td>
              <td>8</td>
              <td>16</td>
              <td>388107</td>
              <td>ОУФМС России по хабаровскому краю и Еврейской автономной области в В</td>
              <td>09.02.2016</td>
          </tr>
          <tr id="LC694" class="js-file-line">
            <td id="L694" class="blob-num js-line-number" data-line-number="694"></td>
              <td>МТ-127679</td>
              <td>3285163</td>
              <td>Младший сержант</td>
              <td>Аниськин Лев Олегович</td>
              <td>07.11.1994</td>
              <td>8</td>
              <td>14</td>
              <td>249060</td>
              <td>Отделом УФМС России по Хабаровскому краю в Железнодорожном районе</td>
              <td>08.06.2014</td>
          </tr>
          <tr id="LC695" class="js-file-line">
            <td id="L695" class="blob-num js-line-number" data-line-number="695"></td>
              <td>МТ-217135</td>
              <td>3300418</td>
              <td>Младший сержант</td>
              <td>Лоломов Ярослав Вадимович</td>
              <td>07.04.1986</td>
              <td>5</td>
              <td>5</td>
              <td>229811</td>
              <td>ОВД г. Дальнегорск Приморского края</td>
              <td>09.06.2006</td>
          </tr>
          <tr id="LC696" class="js-file-line">
            <td id="L696" class="blob-num js-line-number" data-line-number="696"></td>
              <td>Х-933521</td>
              <td>3305794</td>
              <td>Младший сержант</td>
              <td>Наумов Владимир Александрович</td>
              <td>2/27/1988</td>
              <td>76</td>
              <td>8</td>
              <td>371426</td>
              <td>ОУФМС России по Забйкальскому краю в Ингодинском р-не г. Читы</td>
              <td>11.12.2008</td>
          </tr>
          <tr id="LC697" class="js-file-line">
            <td id="L697" class="blob-num js-line-number" data-line-number="697"></td>
              <td>МТ-217139</td>
              <td>3306745</td>
              <td>Младший сержант</td>
              <td>Воробьев Денис Олегович</td>
              <td>03.10.1989</td>
              <td>8</td>
              <td>9</td>
              <td>860527</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном р-не в г. Хабаровс</td>
              <td>7/18/2009</td>
          </tr>
          <tr id="LC698" class="js-file-line">
            <td id="L698" class="blob-num js-line-number" data-line-number="698"></td>
              <td>СУ-470884</td>
              <td>3309149</td>
              <td>Младший сержант</td>
              <td>Кобзарев Данила Иванович</td>
              <td>11.11.1996</td>
              <td>8</td>
              <td>16</td>
              <td>411922</td>
              <td>Отделом УФМС Росси по Хабаровскому краю и Еврейской автономной обла</td>
              <td>12/30/2016</td>
          </tr>
          <tr id="LC699" class="js-file-line">
            <td id="L699" class="blob-num js-line-number" data-line-number="699"></td>
              <td>МТ-449419</td>
              <td>3419877</td>
              <td>Младший сержант</td>
              <td>Иванов Илья Александрович</td>
              <td>04.11.1996</td>
              <td>14</td>
              <td>15</td>
              <td>553419</td>
              <td>ОУФМС России по Белгородской области в Белгородском р-не</td>
              <td>05.06.2016</td>
          </tr>
          <tr id="LC700" class="js-file-line">
            <td id="L700" class="blob-num js-line-number" data-line-number="700"></td>
              <td>МТ-127660</td>
              <td>3425989</td>
              <td>Младший сержант</td>
              <td>Рахмонов Асламджон Сайфутдинович</td>
              <td>12/29/1980</td>
              <td>8</td>
              <td>13</td>
              <td>163548</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном р-не г. Хабаров</td>
              <td>07.02.2013</td>
          </tr>
          <tr id="LC701" class="js-file-line">
            <td id="L701" class="blob-num js-line-number" data-line-number="701"></td>
              <td>Ю-836575</td>
              <td>3441296</td>
              <td>Младший сержант</td>
              <td>Кожевников Сергей Викторович</td>
              <td>07.07.1992</td>
              <td>8</td>
              <td>12</td>
              <td>119247</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе г. Хабаро</td>
              <td>в11/13/2012</td>
          </tr>
          <tr id="LC702" class="js-file-line">
            <td id="L702" class="blob-num js-line-number" data-line-number="702"></td>
              <td>СУ-480744</td>
              <td>3460912</td>
              <td>Младший сержант</td>
              <td>Тимурзиев Аслан Иссаевич</td>
              <td>3/28/1996</td>
              <td>5</td>
              <td>16</td>
              <td>359090</td>
              <td>ОУФМС России по Приморскому краю в Находкинском городском округе</td>
              <td>4/14/2016</td>
          </tr>
          <tr id="LC703" class="js-file-line">
            <td id="L703" class="blob-num js-line-number" data-line-number="703"></td>
              <td>МТ-173486</td>
              <td>3463730</td>
              <td>Младший сержант</td>
              <td>Сипцов Алексей Николаевич</td>
              <td>3/15/1998</td>
              <td>8</td>
              <td>17</td>
              <td>496059</td>
              <td>ОТДЕЛОМ УМВД РОССИИ ПО ХАБАРОВСКОМУ КРАЮ</td>
              <td>04.09.2018</td>
          </tr>
          <tr id="LC704" class="js-file-line">
            <td id="L704" class="blob-num js-line-number" data-line-number="704"></td>
              <td>Х-827290</td>
              <td>1093805</td>
              <td>Ефрейтор</td>
              <td>Манаконова Дарья Анатольевна</td>
              <td>8/19/1976</td>
              <td>8</td>
              <td>2</td>
              <td>663875</td>
              <td>УВД Железнодорожного  района г.Хабаровска</td>
              <td>6/26/2002</td>
          </tr>
          <tr id="LC705" class="js-file-line">
            <td id="L705" class="blob-num js-line-number" data-line-number="705"></td>
              <td>Х-786061</td>
              <td>1346484</td>
              <td>Ефрейтор</td>
              <td>Груздев Александр Сергеевич</td>
              <td>9/20/1988</td>
              <td>8</td>
              <td>9</td>
              <td>863822</td>
              <td>ОУФМС России по Хабаровскому краю в Краснофлотском районе города Ха</td>
              <td>08.04.2009</td>
          </tr>
          <tr id="LC706" class="js-file-line">
            <td id="L706" class="blob-num js-line-number" data-line-number="706"></td>
              <td>Х-789515</td>
              <td>1352305</td>
              <td>Ефрейтор</td>
              <td>Соловченков Александр Николаевич</td>
              <td>11.03.1991</td>
              <td>99</td>
              <td>12</td>
              <td>278462</td>
              <td>Межрайонным отделением ОФМС России по Еврейской автономной облас</td>
              <td>6/20/2012</td>
          </tr>
          <tr id="LC707" class="js-file-line">
            <td id="L707" class="blob-num js-line-number" data-line-number="707"></td>
              <td>Х-786732</td>
              <td>1370193</td>
              <td>Ефрейтор</td>
              <td>Петегирич Иван Михайлович</td>
              <td>8/27/1993</td>
              <td>8</td>
              <td>17</td>
              <td>431114</td>
              <td>Отделением УФМС России по Хабаровскому краю и Еврейской автономной</td>
              <td>04.05.2017</td>
          </tr>
          <tr id="LC708" class="js-file-line">
            <td id="L708" class="blob-num js-line-number" data-line-number="708"></td>
              <td>Ю-854957</td>
              <td>1531103</td>
              <td>Ефрейтор</td>
              <td>Попов Иван Юрьевич</td>
              <td>09.04.1992</td>
              <td>8</td>
              <td>13</td>
              <td>170347</td>
              <td>Отделением УФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>7/19/2013</td>
          </tr>
          <tr id="LC709" class="js-file-line">
            <td id="L709" class="blob-num js-line-number" data-line-number="709"></td>
              <td>Ю-918492</td>
              <td>1663440</td>
              <td>Ефрейтор</td>
              <td>Литвинович Сергей Александрович</td>
              <td>1/24/1994</td>
              <td>69</td>
              <td>13</td>
              <td>594566</td>
              <td>УФМС России по Томской области в Октябрьском районе г. Томска</td>
              <td>2/13/2014</td>
          </tr>
          <tr id="LC710" class="js-file-line">
            <td id="L710" class="blob-num js-line-number" data-line-number="710"></td>
              <td>Ю-854597</td>
              <td>1672769</td>
              <td>Ефрейтор</td>
              <td>Болякин Александр Михайлович</td>
              <td>2/15/1994</td>
              <td>69</td>
              <td>15</td>
              <td>690586</td>
              <td>ОУФМС России по Хабаровскому краю в Северном районе г. Хабаровска</td>
              <td>01.01.2017</td>
          </tr>
          <tr id="LC711" class="js-file-line">
            <td id="L711" class="blob-num js-line-number" data-line-number="711"></td>
              <td>МТ-306310</td>
              <td>1701775</td>
              <td>Ефрейтор</td>
              <td>Сафонов Александр Александрович</td>
              <td>2/22/1994</td>
              <td>50</td>
              <td>9</td>
              <td>546516</td>
              <td>ОУФМС России по НСО в Тогучинском районе</td>
              <td>07.10.2009</td>
          </tr>
          <tr id="LC712" class="js-file-line">
            <td id="L712" class="blob-num js-line-number" data-line-number="712"></td>
              <td>Ю-849457</td>
              <td>1731904</td>
              <td>Ефрейтор</td>
              <td>Верзун Максим Андреевич</td>
              <td>02.03.1994</td>
              <td>10</td>
              <td>15</td>
              <td>449255</td>
              <td>МО УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г.БЛАГОВЕЩЕНСКЕ</td>
              <td>7/29/2015</td>
          </tr>
          <tr id="LC713" class="js-file-line">
            <td id="L713" class="blob-num js-line-number" data-line-number="713"></td>
              <td>Х-790202</td>
              <td>1789920</td>
              <td>Ефрейтор</td>
              <td>Таньков Даниил Валентинович</td>
              <td>07.08.1992</td>
              <td>99</td>
              <td>12</td>
              <td>282214</td>
              <td>ОФМС РОССИИ ПО ЕАО В ОБЛУЧЕНСКОМ РАЙОНЕ</td>
              <td>12/21/2012</td>
          </tr>
          <tr id="LC714" class="js-file-line">
            <td id="L714" class="blob-num js-line-number" data-line-number="714"></td>
              <td>СУ-360888</td>
              <td>1828654</td>
              <td>Ефрейтор</td>
              <td>Иванов Александр Александрович</td>
              <td>12/18/1993</td>
              <td>14</td>
              <td>14</td>
              <td>420831</td>
              <td>ОУФМС России по Белгородской области в Белгородском р-не</td>
              <td>6/24/2014</td>
          </tr>
          <tr id="LC715" class="js-file-line">
            <td id="L715" class="blob-num js-line-number" data-line-number="715"></td>
              <td>Ю-832357</td>
              <td>1829428</td>
              <td>Ефрейтор</td>
              <td>Пшенников Борис Игоревич</td>
              <td>03.08.1995</td>
              <td>98</td>
              <td>14</td>
              <td>532151</td>
              <td>ТП УФМС России по Республике Саха (Якутия) в Олекминском районе</td>
              <td>3/18/2015</td>
          </tr>
          <tr id="LC716" class="js-file-line">
            <td id="L716" class="blob-num js-line-number" data-line-number="716"></td>
              <td>Ю-781775</td>
              <td>1843021</td>
              <td>Ефрейтор</td>
              <td>Колотий Андрей Сергеевич</td>
              <td>2/15/1995</td>
              <td>10</td>
              <td>14</td>
              <td>419939</td>
              <td>Отделением УФМС России по Амурской области в г. Райчихинск</td>
              <td>3/18/2015</td>
          </tr>
          <tr id="LC717" class="js-file-line">
            <td id="L717" class="blob-num js-line-number" data-line-number="717"></td>
              <td>Ю-857371</td>
              <td>1848215</td>
              <td>Ефрейтор</td>
              <td>Гаврилов Иван Витальевич</td>
              <td>02.02.1995</td>
              <td>8</td>
              <td>8</td>
              <td>802425</td>
              <td>Отделением УФМС по Хабаровскому краю в Амурском районе</td>
              <td>04.10.2009</td>
          </tr>
          <tr id="LC718" class="js-file-line">
            <td id="L718" class="blob-num js-line-number" data-line-number="718"></td>
              <td>Ю-850972</td>
              <td>1982530</td>
              <td>Ефрейтор</td>
              <td>Солдатенко Александр Олегович</td>
              <td>8/22/1995</td>
              <td>10</td>
              <td>11</td>
              <td>267873</td>
              <td>Отделением УФМС России по Амурской области в городе Свободном</td>
              <td>8/23/2011</td>
          </tr>
          <tr id="LC719" class="js-file-line">
            <td id="L719" class="blob-num js-line-number" data-line-number="719"></td>
              <td>СУ-473004</td>
              <td>2181519</td>
              <td>Ефрейтор</td>
              <td>Дяксул Федор Георгиевич</td>
              <td>09.01.1995</td>
              <td>8</td>
              <td>15</td>
              <td>330354</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе г. Хабаро</td>
              <td>в9/29/2015</td>
          </tr>
          <tr id="LC720" class="js-file-line">
            <td id="L720" class="blob-num js-line-number" data-line-number="720"></td>
              <td>МТ-220657</td>
              <td>2227316</td>
              <td>Ефрейтор</td>
              <td>Кошечкин Сергей Олегович</td>
              <td>3/16/1996</td>
              <td>76</td>
              <td>10</td>
              <td>521049</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В КАРЫМСКОМ </td>
              <td>3/31/2011</td>
          </tr>
          <tr id="LC721" class="js-file-line">
            <td id="L721" class="blob-num js-line-number" data-line-number="721"></td>
              <td>МТ-228115</td>
              <td>2239964</td>
              <td>Ефрейтор</td>
              <td>Баранов Никита Константинович</td>
              <td>4/23/1996</td>
              <td>99</td>
              <td>10</td>
              <td>256363</td>
              <td>ОФМС ПО ЕАО В Г. БИРОБИДЖАН</td>
              <td>6/25/2010</td>
          </tr>
          <tr id="LC722" class="js-file-line">
            <td id="L722" class="blob-num js-line-number" data-line-number="722"></td>
              <td>СУ-406191</td>
              <td>2240704</td>
              <td>Ефрейтор</td>
              <td>Рогалев Илья Сергеевич</td>
              <td>1/22/1996</td>
              <td>8</td>
              <td>15</td>
              <td>350154</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном районе го</td>
              <td>02.04.2016</td>
          </tr>
          <tr id="LC723" class="js-file-line">
            <td id="L723" class="blob-num js-line-number" data-line-number="723"></td>
              <td>МТ-236728</td>
              <td>2271166</td>
              <td>Ефрейтор</td>
              <td>Подунович Артём Владимирович</td>
              <td>02.02.1992</td>
              <td>10</td>
              <td>11</td>
              <td>304532</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г. БЛАГОВЕЩЕНСКЕ</td>
              <td>3/23/2012</td>
          </tr>
          <tr id="LC724" class="js-file-line">
            <td id="L724" class="blob-num js-line-number" data-line-number="724"></td>
              <td>СУ-441167</td>
              <td>2272303</td>
              <td>Ефрейтор</td>
              <td>Туркин Максим Александрович</td>
              <td>6/27/1994</td>
              <td>8</td>
              <td>15</td>
              <td>302025</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В РАЙОНЕ ИМ. ЛАЗ</td>
              <td>07.07.2015</td>
          </tr>
          <tr id="LC725" class="js-file-line">
            <td id="L725" class="blob-num js-line-number" data-line-number="725"></td>
              <td>ЕХ-844337</td>
              <td>2328550</td>
              <td>Ефрейтор</td>
              <td>Глебов Борис Сергеевич</td>
              <td>6/30/1994</td>
              <td>25</td>
              <td>14</td>
              <td>979464</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В ГОР. АНГАРСКЕ И АНГ</td>
              <td>А7/7/2014</td>
          </tr>
          <tr id="LC726" class="js-file-line">
            <td id="L726" class="blob-num js-line-number" data-line-number="726"></td>
              <td>СУ-473201</td>
              <td>2337012</td>
              <td>Ефрейтор</td>
              <td>Сорокин Дмитрий Юрьевич</td>
              <td>8/26/1994</td>
              <td>8</td>
              <td>14</td>
              <td>258419</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ Р</td>
              <td>9/19/2014</td>
          </tr>
          <tr id="LC727" class="js-file-line">
            <td id="L727" class="blob-num js-line-number" data-line-number="727"></td>
              <td>СУ-441071</td>
              <td>2390342</td>
              <td>Ефрейтор</td>
              <td>Полищук Иван Денисович</td>
              <td>11/20/1996</td>
              <td>8</td>
              <td>15</td>
              <td>347111</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>12.11.2015</td>
          </tr>
          <tr id="LC728" class="js-file-line">
            <td id="L728" class="blob-num js-line-number" data-line-number="728"></td>
              <td>МТ-232072</td>
              <td>2391246</td>
              <td>Ефрейтор</td>
              <td>Васильев Виталий Сергеевич</td>
              <td>3/23/1996</td>
              <td>76</td>
              <td>15</td>
              <td>834427</td>
              <td>МП УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В  ТУНГОКОЧЕНСКОМ РАЙ</td>
              <td>О4/29/2010</td>
          </tr>
          <tr id="LC729" class="js-file-line">
            <td id="L729" class="blob-num js-line-number" data-line-number="729"></td>
              <td>ЕХ-840726</td>
              <td>2392082</td>
              <td>Ефрейтор</td>
              <td>Кузнецов Владислав Сергеевич</td>
              <td>3/13/1991</td>
              <td>32</td>
              <td>13</td>
              <td>385734</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО КЕМЕРОВСКОЙ ОБЛАСТИ В ГОР. ТОПКИ</td>
              <td>5/14/2014</td>
          </tr>
          <tr id="LC730" class="js-file-line">
            <td id="L730" class="blob-num js-line-number" data-line-number="730"></td>
              <td>У-274675</td>
              <td>2410196</td>
              <td>Ефрейтор</td>
              <td>Терентьев Анатолий Николаевич</td>
              <td>4/17/1983</td>
              <td>8</td>
              <td>11</td>
              <td>29169</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В СОВЕТСКО ГАВАНСКОМ РАЙО</td>
              <td>Н11/8/2011</td>
          </tr>
          <tr id="LC731" class="js-file-line">
            <td id="L731" class="blob-num js-line-number" data-line-number="731"></td>
              <td>МТ-234380</td>
              <td>2410352</td>
              <td>Ефрейтор</td>
              <td>Троц Сергей Михайлович</td>
              <td>7/27/1985</td>
              <td>10</td>
              <td>5</td>
              <td>938892</td>
              <td>Отделом внутренних дел Михайловского района Амурской области</td>
              <td>8/18/2006</td>
          </tr>
          <tr id="LC732" class="js-file-line">
            <td id="L732" class="blob-num js-line-number" data-line-number="732"></td>
              <td>МТ-204120</td>
              <td>2440611</td>
              <td>Ефрейтор</td>
              <td>Смолина Татьяна Александровна</td>
              <td>10.04.1982</td>
              <td>1</td>
              <td>6</td>
              <td>892437</td>
              <td>ТП В ПОС. ЗАПАДНОМ ОУФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В ОКТЯБРЬ</td>
              <td>С5/11/2007</td>
          </tr>
          <tr id="LC733" class="js-file-line">
            <td id="L733" class="blob-num js-line-number" data-line-number="733"></td>
              <td>МТ-127978</td>
              <td>2447044</td>
              <td>Ефрейтор</td>
              <td>Бойко Александр Павлович</td>
              <td>1/16/1979</td>
              <td>8</td>
              <td>9</td>
              <td>835914</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В КРАСНОФЛОТСКОМ </td>
              <td>12.03.2014</td>
          </tr>
          <tr id="LC734" class="js-file-line">
            <td id="L734" class="blob-num js-line-number" data-line-number="734"></td>
              <td>Х-838060</td>
              <td>2487896</td>
              <td>Ефрейтор</td>
              <td>Лебедев Анатолий Анатольевич</td>
              <td>11.02.1986</td>
              <td>8</td>
              <td>0</td>
              <td>157070</td>
              <td>ОВД России Хабаровского района Хабаровского края</td>
              <td>1/31/2007</td>
          </tr>
          <tr id="LC735" class="js-file-line">
            <td id="L735" class="blob-num js-line-number" data-line-number="735"></td>
              <td>Х-833881</td>
              <td>2489467</td>
              <td>Ефрейтор</td>
              <td>Корсунцев Алексей Александрович</td>
              <td>12/24/1990</td>
              <td>8</td>
              <td>10</td>
              <td>959662</td>
              <td>ОУФМС России по Хабаровскому краю в Советско-Гаванском районе</td>
              <td>02.01.2011</td>
          </tr>
          <tr id="LC736" class="js-file-line">
            <td id="L736" class="blob-num js-line-number" data-line-number="736"></td>
              <td>Х-821828</td>
              <td>2489816</td>
              <td>Ефрейтор</td>
              <td>Бизяев Андрей Сергеевич</td>
              <td>10/25/1988</td>
              <td>8</td>
              <td>8</td>
              <td>800235</td>
              <td>УФМС России в Хабаровскомкрае р-не им. Лазо</td>
              <td>11/25/2008</td>
          </tr>
          <tr id="LC737" class="js-file-line">
            <td id="L737" class="blob-num js-line-number" data-line-number="737"></td>
              <td>МТ-127005</td>
              <td>2493591</td>
              <td>Ефрейтор</td>
              <td>Чирич Александр Юрьевич</td>
              <td>08.07.1984</td>
              <td>8</td>
              <td>6</td>
              <td>661331</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе г. Хаба</td>
              <td>р10/29/2007</td>
          </tr>
          <tr id="LC738" class="js-file-line">
            <td id="L738" class="blob-num js-line-number" data-line-number="738"></td>
              <td>Я-040611</td>
              <td>2496243</td>
              <td>Ефрейтор</td>
              <td>Пискун Роман Александрович</td>
              <td>9/29/1986</td>
              <td>8</td>
              <td>8</td>
              <td>743311</td>
              <td>ОУФМС России по Хабаровскому краю в Вяземском районе</td>
              <td>7/31/2008</td>
          </tr>
          <tr id="LC739" class="js-file-line">
            <td id="L739" class="blob-num js-line-number" data-line-number="739"></td>
              <td>СУ-169070</td>
              <td>2506808</td>
              <td>Ефрейтор</td>
              <td>Гартвиг Юрий Петрович</td>
              <td>7/30/1994</td>
              <td>1</td>
              <td>15</td>
              <td>36585</td>
              <td>ОТДЕЛЕНИЕ УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ ПО Г. АЛЕЙСКУ И АЛЕЙ</td>
              <td>С9/6/2014</td>
          </tr>
          <tr id="LC740" class="js-file-line">
            <td id="L740" class="blob-num js-line-number" data-line-number="740"></td>
              <td>МТ-240021</td>
              <td>2524714</td>
              <td>Ефрейтор</td>
              <td>Горлов Константин Сергеевич</td>
              <td>02.10.1997</td>
              <td>10</td>
              <td>10</td>
              <td>253684</td>
              <td>Отделением УФМС России по Амурской области в Тамбовском районе</td>
              <td>4/26/2011</td>
          </tr>
          <tr id="LC741" class="js-file-line">
            <td id="L741" class="blob-num js-line-number" data-line-number="741"></td>
              <td>МТ-229581</td>
              <td>2536698</td>
              <td>Ефрейтор</td>
              <td>Касьянов Дмитрий Александрович</td>
              <td>8/24/1996</td>
              <td>76</td>
              <td>10</td>
              <td>535513</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В ИНГОДИНСКО</td>
              <td>02.04.2011</td>
          </tr>
          <tr id="LC742" class="js-file-line">
            <td id="L742" class="blob-num js-line-number" data-line-number="742"></td>
              <td>МТ-196211</td>
              <td>2551193</td>
              <td>Ефрейтор</td>
              <td>Люлька Антон Сергеевич</td>
              <td>8/26/1986</td>
              <td>98</td>
              <td>6</td>
              <td>17352</td>
              <td>Беркактиским ПОМ республики САХА (якутия)</td>
              <td>04.06.2007</td>
          </tr>
          <tr id="LC743" class="js-file-line">
            <td id="L743" class="blob-num js-line-number" data-line-number="743"></td>
              <td>ЕХ-874890</td>
              <td>2554008</td>
              <td>Ефрейтор</td>
              <td>Чирясов Александр Юрьевич</td>
              <td>05.02.1996</td>
              <td>89</td>
              <td>10</td>
              <td>160262</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ МОРДОВИЯ В ЧАМЗИНСКОМ РАЙОНЕ</td>
              <td>5/24/2010</td>
          </tr>
          <tr id="LC744" class="js-file-line">
            <td id="L744" class="blob-num js-line-number" data-line-number="744"></td>
              <td>Ю-197133</td>
              <td>2562543</td>
              <td>Ефрейтор</td>
              <td>Киселев Алексей Борисович</td>
              <td>5/18/1990</td>
              <td>63</td>
              <td>9</td>
              <td>486132</td>
              <td>ТП УФМС России по Саратовской области в Екатеринославском районе</td>
              <td>05.04.2010</td>
          </tr>
          <tr id="LC745" class="js-file-line">
            <td id="L745" class="blob-num js-line-number" data-line-number="745"></td>
              <td>МТ-171019</td>
              <td>2562553</td>
              <td>Ефрейтор</td>
              <td>Гомбоев Булад Чимитдоржиевич</td>
              <td>11/25/1983</td>
              <td>8</td>
              <td>4</td>
              <td>246821</td>
              <td>Краснофлотским РОВД г. Хабаровск</td>
              <td>02.10.2004</td>
          </tr>
          <tr id="LC746" class="js-file-line">
            <td id="L746" class="blob-num js-line-number" data-line-number="746"></td>
              <td>МТ-204650</td>
              <td>2600763</td>
              <td>Ефрейтор</td>
              <td>Юхновец Ольга Ильинична</td>
              <td>3/21/1990</td>
              <td>8</td>
              <td>9</td>
              <td>914473</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе города Ха</td>
              <td>04.02.2010</td>
          </tr>
          <tr id="LC747" class="js-file-line">
            <td id="L747" class="blob-num js-line-number" data-line-number="747"></td>
              <td>Ю-840429</td>
              <td>2657491</td>
              <td>Ефрейтор</td>
              <td>Костюченко Константин Александрович</td>
              <td>3/13/1990</td>
              <td>8</td>
              <td>9</td>
              <td>849598</td>
              <td>Отделением УФМС России по Хабаровскому краю в Ванинском райоен</td>
              <td>04.05.2010</td>
          </tr>
          <tr id="LC748" class="js-file-line">
            <td id="L748" class="blob-num js-line-number" data-line-number="748"></td>
              <td>СУ-283517</td>
              <td>2657588</td>
              <td>Ефрейтор</td>
              <td>Тесакова Елена Юрьевна</td>
              <td>4/28/1983</td>
              <td>56</td>
              <td>3</td>
              <td>362541</td>
              <td>ОВД ЛУНИНСКОГО РАЙОНА ПЕНЗЕНСКОЙ ОБЛАСТИ</td>
              <td>03.10.2004</td>
          </tr>
          <tr id="LC749" class="js-file-line">
            <td id="L749" class="blob-num js-line-number" data-line-number="749"></td>
              <td>Х-694931</td>
              <td>2662701</td>
              <td>Ефрейтор</td>
              <td>Шейнберг Игорь Дмитриевич</td>
              <td>10/25/1989</td>
              <td>5</td>
              <td>9</td>
              <td>653776</td>
              <td>Отделением УФМС России по Приморскому краю в Пожарском муниципал</td>
              <td>ь11/2/2009</td>
          </tr>
          <tr id="LC750" class="js-file-line">
            <td id="L750" class="blob-num js-line-number" data-line-number="750"></td>
              <td>Ю-774409</td>
              <td>2662738</td>
              <td>Ефрейтор</td>
              <td>Пахно Владислав Сергеевич</td>
              <td>9/26/1995</td>
              <td>8</td>
              <td>8</td>
              <td>816090</td>
              <td>Отделением УФМС России по Хабаровскому краю в Ульчском районе</td>
              <td>9/30/2009</td>
          </tr>
          <tr id="LC751" class="js-file-line">
            <td id="L751" class="blob-num js-line-number" data-line-number="751"></td>
              <td>МТ-173817</td>
              <td>2674405</td>
              <td>Ефрейтор</td>
              <td>Белоусов Сергей Александрович</td>
              <td>7/24/1997</td>
              <td>8</td>
              <td>11</td>
              <td>21160</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ </td>
              <td>08.03.2011</td>
          </tr>
          <tr id="LC752" class="js-file-line">
            <td id="L752" class="blob-num js-line-number" data-line-number="752"></td>
              <td>МТ-173426</td>
              <td>2715820</td>
              <td>Ефрейтор</td>
              <td>Зайцев Игорь Сергеевич</td>
              <td>07.05.1995</td>
              <td>8</td>
              <td>11</td>
              <td>67949</td>
              <td>ОТДЕЛЕНИЕ УФМС РОССИИПО ХАБАРОВСКОМУ КРАЮ В ВЯЗЕМСКОМ Р-НЕ</td>
              <td>7/25/2012</td>
          </tr>
          <tr id="LC753" class="js-file-line">
            <td id="L753" class="blob-num js-line-number" data-line-number="753"></td>
              <td>СУ-313384</td>
              <td>2723303</td>
              <td>Ефрейтор</td>
              <td>Пономарев Владислав Павлович</td>
              <td>03.05.1997</td>
              <td>94</td>
              <td>10</td>
              <td>155937</td>
              <td>МО УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В ГОРОДЕ ГЛАЗОВ</td>
              <td>3/21/2011</td>
          </tr>
          <tr id="LC754" class="js-file-line">
            <td id="L754" class="blob-num js-line-number" data-line-number="754"></td>
              <td>СУ-192513</td>
              <td>2728358</td>
              <td>Ефрейтор</td>
              <td>Брюзгин Игорь Вячеславович</td>
              <td>10/19/1994</td>
              <td>65</td>
              <td>14</td>
              <td>938259</td>
              <td>ОУФМС России по Свердлвской области в Кировском районе г. Екатеринбур</td>
              <td>12.11.2014</td>
          </tr>
          <tr id="LC755" class="js-file-line">
            <td id="L755" class="blob-num js-line-number" data-line-number="755"></td>
              <td>МТ-204226</td>
              <td>2744159</td>
              <td>Ефрейтор</td>
              <td>Соловьев Владимир Сергеевич</td>
              <td>7/25/1979</td>
              <td>8</td>
              <td>4</td>
              <td>332060</td>
              <td>ОВД ХАБАРОВСКОГО РАЙОНА  ХАБАРОВСКОГО КРАЯ</td>
              <td>8/26/2004</td>
          </tr>
          <tr id="LC756" class="js-file-line">
            <td id="L756" class="blob-num js-line-number" data-line-number="756"></td>
              <td>Х-834463</td>
              <td>2744162</td>
              <td>Ефрейтор</td>
              <td>Швецов Кирилл Олегович</td>
              <td>8/13/1991</td>
              <td>8</td>
              <td>11</td>
              <td>41080</td>
              <td>УФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>11.08.2011</td>
          </tr>
          <tr id="LC757" class="js-file-line">
            <td id="L757" class="blob-num js-line-number" data-line-number="757"></td>
              <td>СУ-303833</td>
              <td>2751040</td>
              <td>Ефрейтор</td>
              <td>Кусманов Марат Маратович</td>
              <td>07.11.1997</td>
              <td>52</td>
              <td>13</td>
              <td>315334</td>
              <td>ОУФМС РОССИИ ПО ОМСКОЙ ОБЛАСТИ В НАЗЫВАЕВСКОМ РАЙОНЕ</td>
              <td>7/26/2014</td>
          </tr>
          <tr id="LC758" class="js-file-line">
            <td id="L758" class="blob-num js-line-number" data-line-number="758"></td>
              <td>СУ-303115</td>
              <td>2751043</td>
              <td>Ефрейтор</td>
              <td>Токарев Кирилл Сергеевич</td>
              <td>8/29/1994</td>
              <td>52</td>
              <td>14</td>
              <td>377674</td>
              <td>ОУФМС РОССИИ ПО ОМСКОЙ ОБЛАСТИ В ЛЕНИНСКОМ АДМИНИСТРАТИВН</td>
              <td>О9/17/2014</td>
          </tr>
          <tr id="LC759" class="js-file-line">
            <td id="L759" class="blob-num js-line-number" data-line-number="759"></td>
              <td>СУ-170636</td>
              <td>2760748</td>
              <td>Ефрейтор</td>
              <td>Садовников Евгений Дмитриевич</td>
              <td>09.01.1995</td>
              <td>75</td>
              <td>15</td>
              <td>671388</td>
              <td>ТП УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В ДУЛЬДУРГИНСКОМ РАЙО</td>
              <td>11/17/2015</td>
          </tr>
          <tr id="LC760" class="js-file-line">
            <td id="L760" class="blob-num js-line-number" data-line-number="760"></td>
              <td>МТ-131797</td>
              <td>2772782</td>
              <td>Ефрейтор</td>
              <td>Мальцев Семен Константинович</td>
              <td>11/18/1995</td>
              <td>8</td>
              <td>15</td>
              <td>340545</td>
              <td>МО УФМС России по Хабаровскому краю г. Комсомольск-на-Амуре</td>
              <td>11/30/2015</td>
          </tr>
          <tr id="LC761" class="js-file-line">
            <td id="L761" class="blob-num js-line-number" data-line-number="761"></td>
              <td>СУ-345209</td>
              <td>2774891</td>
              <td>Ефрейтор</td>
              <td>Амелин Иван Евгеньевич</td>
              <td>11/25/1997</td>
              <td>4</td>
              <td>11</td>
              <td>184589</td>
              <td>УФМС РОССИИ ПО КРАСНОЯРСКОМУ КРАЮ Г. АЧИНСК И А</td>
              <td>12/13/2011</td>
          </tr>
          <tr id="LC762" class="js-file-line">
            <td id="L762" class="blob-num js-line-number" data-line-number="762"></td>
              <td>МТ-202847</td>
              <td>2794989</td>
              <td>Ефрейтор</td>
              <td>Красилов Алексей Алексеевич</td>
              <td>03.04.1997</td>
              <td>5</td>
              <td>11</td>
              <td>863047</td>
              <td>ОУФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В ПАРТИЗАНСКОМ ГОРОДСКОМ</td>
              <td>8/23/2011</td>
          </tr>
          <tr id="LC763" class="js-file-line">
            <td id="L763" class="blob-num js-line-number" data-line-number="763"></td>
              <td>МТ-164134</td>
              <td>2807825</td>
              <td>Ефрейтор</td>
              <td>Пассар Павел Алексеевич</td>
              <td>7/14/1994</td>
              <td>8</td>
              <td>14</td>
              <td>243844</td>
              <td>отделом УФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>08.12.2014</td>
          </tr>
          <tr id="LC764" class="js-file-line">
            <td id="L764" class="blob-num js-line-number" data-line-number="764"></td>
              <td>МТ-127121</td>
              <td>2828254</td>
              <td>Ефрейтор</td>
              <td>Бецких Ирина Владимировна</td>
              <td>4/25/1986</td>
              <td>8</td>
              <td>11</td>
              <td>44670</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе города</td>
              <td> 12/7/2011</td>
          </tr>
          <tr id="LC765" class="js-file-line">
            <td id="L765" class="blob-num js-line-number" data-line-number="765"></td>
              <td>МТ-131678</td>
              <td>2843180</td>
              <td>Ефрейтор</td>
              <td>Иванов Артем Олегович</td>
              <td>12/16/1994</td>
              <td>8</td>
              <td>15</td>
              <td>309758</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>6/20/2015</td>
          </tr>
          <tr id="LC766" class="js-file-line">
            <td id="L766" class="blob-num js-line-number" data-line-number="766"></td>
              <td>МТ-204255</td>
              <td>2846503</td>
              <td>Ефрейтор</td>
              <td>Герасимова Вероника Андреевна</td>
              <td>06.04.1992</td>
              <td>8</td>
              <td>16</td>
              <td>404428</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕВРЕЙСКОЙ АВТ</td>
              <td>О9/29/2016</td>
          </tr>
          <tr id="LC767" class="js-file-line">
            <td id="L767" class="blob-num js-line-number" data-line-number="767"></td>
              <td>МТ-245143</td>
              <td>2852317</td>
              <td>Ефрейтор</td>
              <td>Шемаров Александр Сергеевич</td>
              <td>12/15/1997</td>
              <td>52</td>
              <td>10</td>
              <td>182270</td>
              <td>ОУФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В СКОВОРОДИНСКОМ РАЙОНЕ</td>
              <td>3/31/2011</td>
          </tr>
          <tr id="LC768" class="js-file-line">
            <td id="L768" class="blob-num js-line-number" data-line-number="768"></td>
              <td>ВС-298205</td>
              <td>2865102</td>
              <td>Ефрейтор</td>
              <td>Касимцев Владимир Иванович</td>
              <td>05.01.1997</td>
              <td>63</td>
              <td>12</td>
              <td>835734</td>
              <td>ОУФМС России по Саратовской области в г. Аткарске</td>
              <td>1/30/2013</td>
          </tr>
          <tr id="LC769" class="js-file-line">
            <td id="L769" class="blob-num js-line-number" data-line-number="769"></td>
              <td>ВС-298217</td>
              <td>2865114</td>
              <td>Ефрейтор</td>
              <td>Мухамбетов Михаил Алексеевич</td>
              <td>12/17/1997</td>
              <td>63</td>
              <td>11</td>
              <td>695952</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В КОЗИНСКОМ Р</td>
              <td>А12/24/2011</td>
          </tr>
          <tr id="LC770" class="js-file-line">
            <td id="L770" class="blob-num js-line-number" data-line-number="770"></td>
              <td>МТ-210735</td>
              <td>2866421</td>
              <td>Ефрейтор</td>
              <td>Галсанов Николай Сергеевич</td>
              <td>5/26/1998</td>
              <td>81</td>
              <td>11</td>
              <td>462259</td>
              <td>Отделением УФМС России по Республике Бурятия в Селенгинском районе</td>
              <td>5/29/2012</td>
          </tr>
          <tr id="LC771" class="js-file-line">
            <td id="L771" class="blob-num js-line-number" data-line-number="771"></td>
              <td>ВС-249491</td>
              <td>2868100</td>
              <td>Ефрейтор</td>
              <td>Арсланов Наиль Фаилевич</td>
              <td>12/22/1997</td>
              <td>80</td>
              <td>11</td>
              <td>321596</td>
              <td>ОУФМС РОССИИ ПО СТЕРЛИБАШЕВСКОМУ РАЙОНУ РЕСП. БАШКОРТОСТАН</td>
              <td>12/26/2011</td>
          </tr>
          <tr id="LC772" class="js-file-line">
            <td id="L772" class="blob-num js-line-number" data-line-number="772"></td>
              <td>ВС-407523</td>
              <td>2877267</td>
              <td>Ефрейтор</td>
              <td>Никоноров Никита Андреевич</td>
              <td>3/25/1997</td>
              <td>97</td>
              <td>10</td>
              <td>848438</td>
              <td>ТП УФМС РОССИИ ПО ЧУВАШСКОЙ РЕСПУБЛИКЕ В АЛИКОВСКОМ РАЙОНЕ</td>
              <td>04.08.2011</td>
          </tr>
          <tr id="LC773" class="js-file-line">
            <td id="L773" class="blob-num js-line-number" data-line-number="773"></td>
              <td>ВС-263083</td>
              <td>2878344</td>
              <td>Ефрейтор</td>
              <td>Носов Константин Сергеевич</td>
              <td>02.09.1996</td>
              <td>75</td>
              <td>16</td>
              <td>810470</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В Г. КОРКИНО</td>
              <td>06.06.2016</td>
          </tr>
          <tr id="LC774" class="js-file-line">
            <td id="L774" class="blob-num js-line-number" data-line-number="774"></td>
              <td>ВС-105737</td>
              <td>2880505</td>
              <td>Ефрейтор</td>
              <td>Еремин Денис Андреевич</td>
              <td>4/13/1996</td>
              <td>36</td>
              <td>16</td>
              <td>215854</td>
              <td>ОУФМС РОССИИ ПО САМАРСКОЙ ОБЛАСТИ В АВТОЗАВОДСКОМ РАЙОНЕВ Г</td>
              <td>.5/12/2016</td>
          </tr>
          <tr id="LC775" class="js-file-line">
            <td id="L775" class="blob-num js-line-number" data-line-number="775"></td>
              <td>ВС-014179</td>
              <td>2887517</td>
              <td>Ефрейтор</td>
              <td>Коробейников Сергей Константинович</td>
              <td>9/13/1996</td>
              <td>32</td>
              <td>10</td>
              <td>923675</td>
              <td>ОУФМС РОССИИ ПО КЕМЕРОВСКОЙ ОБЛАСТИ В ЗАВОДСКОМ РАЙОНЕ Г. КЕ</td>
              <td>М11/3/2010</td>
          </tr>
          <tr id="LC776" class="js-file-line">
            <td id="L776" class="blob-num js-line-number" data-line-number="776"></td>
              <td>ВС-263841</td>
              <td>2893710</td>
              <td>Ефрейтор</td>
              <td>Абатуров Дмитрий Андреевич</td>
              <td>3/15/1998</td>
              <td>75</td>
              <td>12</td>
              <td>35809</td>
              <td>ОФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В КУСИНСКОМ РАЙОНЕ</td>
              <td>7/26/2012</td>
          </tr>
          <tr id="LC777" class="js-file-line">
            <td id="L777" class="blob-num js-line-number" data-line-number="777"></td>
              <td>ВС-263865</td>
              <td>2894018</td>
              <td>Ефрейтор</td>
              <td>Рожков Александр Викторович</td>
              <td>08.05.1997</td>
              <td>75</td>
              <td>10</td>
              <td>809242</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В НЯЗЕПЕТРОВСКОМ РАЙОНЕ</td>
              <td>8/18/2011</td>
          </tr>
          <tr id="LC778" class="js-file-line">
            <td id="L778" class="blob-num js-line-number" data-line-number="778"></td>
              <td>МТ-103492</td>
              <td>2898507</td>
              <td>Ефрейтор</td>
              <td>Белышев Денис Владимирович</td>
              <td>5/22/1995</td>
              <td>10</td>
              <td>14</td>
              <td>437586</td>
              <td>ОУФМС России по Амурской области в Сквородинском р-не</td>
              <td>07.09.2015</td>
          </tr>
          <tr id="LC779" class="js-file-line">
            <td id="L779" class="blob-num js-line-number" data-line-number="779"></td>
              <td>МТ-245688</td>
              <td>2906089</td>
              <td>Ефрейтор</td>
              <td>Чернышёв Виктор Павлович</td>
              <td>04.11.1997</td>
              <td>10</td>
              <td>10</td>
              <td>240410</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г. РАЙЧИХИНСКЕ</td>
              <td>06.06.2011</td>
          </tr>
          <tr id="LC780" class="js-file-line">
            <td id="L780" class="blob-num js-line-number" data-line-number="780"></td>
              <td>МТ-177406</td>
              <td>2906786</td>
              <td>Ефрейтор</td>
              <td>Перфильев Алексей Алексеевич</td>
              <td>1/18/1995</td>
              <td>8</td>
              <td>14</td>
              <td>254538</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В БИКИНСКОМ РА</td>
              <td>Й2/5/2015</td>
          </tr>
          <tr id="LC781" class="js-file-line">
            <td id="L781" class="blob-num js-line-number" data-line-number="781"></td>
              <td>ВС-014842</td>
              <td>2915696</td>
              <td>Ефрейтор</td>
              <td>Нагорный Никита Яковлевич</td>
              <td>03.07.1997</td>
              <td>32</td>
              <td>10</td>
              <td>976161</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛЕНИЕМ УФМС РОСИИ ПО ЕАО Г.БИРОБИДЖАН</td>
              <td>3/17/2011</td>
          </tr>
          <tr id="LC782" class="js-file-line">
            <td id="L782" class="blob-num js-line-number" data-line-number="782"></td>
              <td>ВС-051578</td>
              <td>2922786</td>
              <td>Ефрейтор</td>
              <td>Бабинцев Алексей Дмитриевич</td>
              <td>03.11.1996</td>
              <td>94</td>
              <td>15</td>
              <td>555639</td>
              <td>МО УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В ГОРОДЕ ГЛАЗОВЕ</td>
              <td>3/31/2016</td>
          </tr>
          <tr id="LC783" class="js-file-line">
            <td id="L783" class="blob-num js-line-number" data-line-number="783"></td>
              <td>ВС-051599</td>
              <td>2924271</td>
              <td>Ефрейтор</td>
              <td>Кашин Михаил Алексеевич</td>
              <td>3/31/1998</td>
              <td>94</td>
              <td>11</td>
              <td>240745</td>
              <td>МО УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В ГОРОДЕ Воткинске</td>
              <td>04.10.2012</td>
          </tr>
          <tr id="LC784" class="js-file-line">
            <td id="L784" class="blob-num js-line-number" data-line-number="784"></td>
              <td>ВС-288930</td>
              <td>2931613</td>
              <td>Ефрейтор</td>
              <td>Абзалов Денис Эдуардович</td>
              <td>03.09.1997</td>
              <td>65</td>
              <td>11</td>
              <td>97953</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В Г. КРАСНОКАМСКЕ</td>
              <td>3/29/2011</td>
          </tr>
          <tr id="LC785" class="js-file-line">
            <td id="L785" class="blob-num js-line-number" data-line-number="785"></td>
              <td>МТ-177219</td>
              <td>2936003</td>
              <td>Ефрейтор</td>
              <td>Немов Павел Олегович</td>
              <td>12/14/1996</td>
              <td>5</td>
              <td>10</td>
              <td>806806</td>
              <td>ОУФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В ТЕРНЕЙСКОМ МУНИЦИПАЛЬН</td>
              <td>03.01.2011</td>
          </tr>
          <tr id="LC786" class="js-file-line">
            <td id="L786" class="blob-num js-line-number" data-line-number="786"></td>
              <td>МТ-103856</td>
              <td>2936004</td>
              <td>Ефрейтор</td>
              <td>Никифоров Дмитрий Игоревич</td>
              <td>1/16/1996</td>
              <td>8</td>
              <td>9</td>
              <td>910880</td>
              <td>ОУФМС РОССИИ ПО ИНДУСТРИАЛЬНОМУ РАЙОНУ Г. ХАБАРОВСК</td>
              <td>03.01.2012</td>
          </tr>
          <tr id="LC787" class="js-file-line">
            <td id="L787" class="blob-num js-line-number" data-line-number="787"></td>
              <td>МТ-177308</td>
              <td>2936008</td>
              <td>Ефрейтор</td>
              <td>Песоцкий Кирилл Алексеевич</td>
              <td>1/17/1998</td>
              <td>8</td>
              <td>11</td>
              <td>46835</td>
              <td>Отделением УФМС России по Хабаровскому краю в Верхнебуреинского рай</td>
              <td>02.01.2012</td>
          </tr>
          <tr id="LC788" class="js-file-line">
            <td id="L788" class="blob-num js-line-number" data-line-number="788"></td>
              <td>МТ-204271</td>
              <td>2970370</td>
              <td>Ефрейтор</td>
              <td>Собиров Шухрат Зайнидинович</td>
              <td>1/13/1994</td>
              <td>8</td>
              <td>13</td>
              <td>212492</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>3/28/2014</td>
          </tr>
          <tr id="LC789" class="js-file-line">
            <td id="L789" class="blob-num js-line-number" data-line-number="789"></td>
              <td>МТ-217041</td>
              <td>2970924</td>
              <td>Ефрейтор</td>
              <td>Цендра Владимир Васильевич</td>
              <td>4/17/1993</td>
              <td>8</td>
              <td>12</td>
              <td>141681</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ВЕРХНЕБУРЕЙСК</td>
              <td>О5/8/2013</td>
          </tr>
          <tr id="LC790" class="js-file-line">
            <td id="L790" class="blob-num js-line-number" data-line-number="790"></td>
              <td>МТ-204262</td>
              <td>2971409</td>
              <td>Ефрейтор</td>
              <td>Кириллина Екатерина Александровна</td>
              <td>06.03.1993</td>
              <td>10</td>
              <td>13</td>
              <td>359825</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г.БЛАГОВЕЩЕНСКЕ</td>
              <td>6/24/2013</td>
          </tr>
          <tr id="LC791" class="js-file-line">
            <td id="L791" class="blob-num js-line-number" data-line-number="791"></td>
              <td>СУ-470241</td>
              <td>2972674</td>
              <td>Ефрейтор</td>
              <td>Титов Евгений Константинович</td>
              <td>5/28/1994</td>
              <td>88</td>
              <td>14</td>
              <td>240614</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ОХОТСКОМ РАЙОНЕ</td>
              <td>7/28/2014</td>
          </tr>
          <tr id="LC792" class="js-file-line">
            <td id="L792" class="blob-num js-line-number" data-line-number="792"></td>
              <td>МТ-204279</td>
              <td>2977982</td>
              <td>Ефрейтор</td>
              <td>Колябина Евгения Николаевна</td>
              <td>9/28/1988</td>
              <td>8</td>
              <td>15</td>
              <td>352000</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ и ЕАО В  ХАБАРОВСКОМ Р-НЕ</td>
              <td>04.04.2016</td>
          </tr>
          <tr id="LC793" class="js-file-line">
            <td id="L793" class="blob-num js-line-number" data-line-number="793"></td>
              <td>МТ-196646</td>
              <td>2979003</td>
              <td>Ефрейтор</td>
              <td>Попов Максим Алексеевич</td>
              <td>7/21/1993</td>
              <td>10</td>
              <td>13</td>
              <td>356421</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В ИВАНОВСКОМ РАЙОНЕ</td>
              <td>09.04.2013</td>
          </tr>
          <tr id="LC794" class="js-file-line">
            <td id="L794" class="blob-num js-line-number" data-line-number="794"></td>
              <td>МТ-182256</td>
              <td>2980494</td>
              <td>Ефрейтор</td>
              <td>Веденякина Екатерина Витальевна</td>
              <td>08.06.1993</td>
              <td>5</td>
              <td>13</td>
              <td>57991</td>
              <td>Отделением УФМС России по Приморскому краю в Партизанском городско</td>
              <td>8/15/2013</td>
          </tr>
          <tr id="LC795" class="js-file-line">
            <td id="L795" class="blob-num js-line-number" data-line-number="795"></td>
              <td>МТ-196790</td>
              <td>3002603</td>
              <td>Ефрейтор</td>
              <td>Дудник Светлана Георгиевна</td>
              <td>8/16/1991</td>
              <td>10</td>
              <td>14</td>
              <td>398384</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО АМУРС. ОБЛАСТИ В Г. РАЙЧИХИНСК</td>
              <td>07.02.2014</td>
          </tr>
          <tr id="LC796" class="js-file-line">
            <td id="L796" class="blob-num js-line-number" data-line-number="796"></td>
              <td>СУ-463922</td>
              <td>3007258</td>
              <td>Ефрейтор</td>
              <td>Винокуров Александр Гаврилович</td>
              <td>10.03.1977</td>
              <td>98</td>
              <td>15</td>
              <td>641234</td>
              <td>МРО УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА ( ЯКУТИЯ ) В Г. ЯКУТСКЕ</td>
              <td>11.03.2016</td>
          </tr>
          <tr id="LC797" class="js-file-line">
            <td id="L797" class="blob-num js-line-number" data-line-number="797"></td>
              <td>ВС-303464</td>
              <td>3008247</td>
              <td>Ефрейтор</td>
              <td>Захаров Сергей Андреевич</td>
              <td>4/24/1998</td>
              <td>57</td>
              <td>12</td>
              <td>921396</td>
              <td>ОУФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ В КИРОВСКОМ РАЙОНЕ ГОРОДА ПЕ</td>
              <td>6/19/2012</td>
          </tr>
          <tr id="LC798" class="js-file-line">
            <td id="L798" class="blob-num js-line-number" data-line-number="798"></td>
              <td>ВС-291654</td>
              <td>3008722</td>
              <td>Ефрейтор</td>
              <td>Игнатьев Павел Сергеевич</td>
              <td>12/18/1997</td>
              <td>65</td>
              <td>11</td>
              <td>262534</td>
              <td>отделением УФМС России по Амурской области в Константиновском район</td>
              <td>02.01.2012</td>
          </tr>
          <tr id="LC799" class="js-file-line">
            <td id="L799" class="blob-num js-line-number" data-line-number="799"></td>
              <td>ВС-030368</td>
              <td>3011872</td>
              <td>Ефрейтор</td>
              <td>Гоголев Антон Романович</td>
              <td>1/24/1994</td>
              <td>33</td>
              <td>13</td>
              <td>265090</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО КИРОВСКОЙ ОБЛАСТИ В ГОРОДЕ НОЛИНС</td>
              <td>02.10.2014</td>
          </tr>
          <tr id="LC800" class="js-file-line">
            <td id="L800" class="blob-num js-line-number" data-line-number="800"></td>
              <td>ВС-030379</td>
              <td>3011883</td>
              <td>Ефрейтор</td>
              <td>Шиляев Иван Андреевич</td>
              <td>3/27/1998</td>
              <td>33</td>
              <td>11</td>
              <td>138314</td>
              <td>ОУФМС РОССИИ ПО КИРОВСКОЙ ОБЛАСТИ В КИРОВО-ЧЕПЕЦКОМ РАЙОНЕ</td>
              <td>07.09.2012</td>
          </tr>
          <tr id="LC801" class="js-file-line">
            <td id="L801" class="blob-num js-line-number" data-line-number="801"></td>
              <td>ВС-029220</td>
              <td>3019904</td>
              <td>Ефрейтор</td>
              <td>Юрков Константин Сергеевич</td>
              <td>06.03.1998</td>
              <td>32</td>
              <td>11</td>
              <td>104901</td>
              <td>ОУФМС РОССИИ ПО КЕМЕРОВСКОЙ ОБЛАСТИ В ГОРОДЕ ТАШТАГОЛЕ</td>
              <td>6/27/2012</td>
          </tr>
          <tr id="LC802" class="js-file-line">
            <td id="L802" class="blob-num js-line-number" data-line-number="802"></td>
              <td>ВС-265790</td>
              <td>3020337</td>
              <td>Ефрейтор</td>
              <td>Андреев Евгений Андреевич</td>
              <td>7/31/1997</td>
              <td>92</td>
              <td>11</td>
              <td>255752</td>
              <td>ОУФМС России по республике Татарстан в г. Нижнекамске</td>
              <td>9/13/2011</td>
          </tr>
          <tr id="LC803" class="js-file-line">
            <td id="L803" class="blob-num js-line-number" data-line-number="803"></td>
              <td>ВС-265808</td>
              <td>3020418</td>
              <td>Ефрейтор</td>
              <td>Харисов Ильназ Равилович</td>
              <td>05.11.1997</td>
              <td>92</td>
              <td>11</td>
              <td>249632</td>
              <td> </td>
              <td>7/29/2011</td>
          </tr>
          <tr id="LC804" class="js-file-line">
            <td id="L804" class="blob-num js-line-number" data-line-number="804"></td>
              <td>ВЕ-354383</td>
              <td>3024987</td>
              <td>Ефрейтор</td>
              <td>Сергиенко Дмитрий Сергеевич</td>
              <td>6/19/1994</td>
              <td>20</td>
              <td>13</td>
              <td>691642</td>
              <td>ОУФМС ВОРОНЕЖСКОЙ ОБЛАСТИ НОВОУСМАНСКОГО РАЙОНА</td>
              <td>07.01.2014</td>
          </tr>
          <tr id="LC805" class="js-file-line">
            <td id="L805" class="blob-num js-line-number" data-line-number="805"></td>
              <td>СУ-146879</td>
              <td>3029198</td>
              <td>Ефрейтор</td>
              <td>Прямоносов Егор Александрович</td>
              <td>06.09.1995</td>
              <td>52</td>
              <td>15</td>
              <td>437199</td>
              <td>ОУФМС России по Омской области в Ивановском районе</td>
              <td>6/18/2015</td>
          </tr>
          <tr id="LC806" class="js-file-line">
            <td id="L806" class="blob-num js-line-number" data-line-number="806"></td>
              <td>ВС-359123</td>
              <td>3031569</td>
              <td>Ефрейтор</td>
              <td>Апухтин Александр Петрович</td>
              <td>2/16/1996</td>
              <td>50</td>
              <td>15</td>
              <td>485374</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В МОШКОВСКОМ РАЙОНЕ</td>
              <td>2/24/2016</td>
          </tr>
          <tr id="LC807" class="js-file-line">
            <td id="L807" class="blob-num js-line-number" data-line-number="807"></td>
              <td>ВС-359840</td>
              <td>3031621</td>
              <td>Ефрейтор</td>
              <td>Мальцев Александр Сергеевич</td>
              <td>01.09.1995</td>
              <td>50</td>
              <td>14</td>
              <td>371849</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В ОКТЯБРЬСКОМ РАЙОНЕ </td>
              <td>3/16/2015</td>
          </tr>
          <tr id="LC808" class="js-file-line">
            <td id="L808" class="blob-num js-line-number" data-line-number="808"></td>
              <td>ВС-359970</td>
              <td>3031653</td>
              <td>Ефрейтор</td>
              <td>Фомкин Егор Николаевич</td>
              <td>2/14/1996</td>
              <td>50</td>
              <td>16</td>
              <td>534241</td>
              <td>ОУФМС России по Новосибирской области в Болотнинском р-не</td>
              <td>6/17/2016</td>
          </tr>
          <tr id="LC809" class="js-file-line">
            <td id="L809" class="blob-num js-line-number" data-line-number="809"></td>
              <td>ЕХ-580815</td>
              <td>3036321</td>
              <td>Ефрейтор</td>
              <td>Надиров Алимпаша Солтанович</td>
              <td>7/14/1996</td>
              <td>82</td>
              <td>16</td>
              <td>818107</td>
              <td>ОУФМС России по республике Дагестан в Хасавюртовском р-не</td>
              <td>08.03.2016</td>
          </tr>
          <tr id="LC810" class="js-file-line">
            <td id="L810" class="blob-num js-line-number" data-line-number="810"></td>
              <td>МТ-204296</td>
              <td>3042537</td>
              <td>Ефрейтор</td>
              <td>Салихова Зарема Ильясовна</td>
              <td>11.05.1988</td>
              <td>82</td>
              <td>13</td>
              <td>375160</td>
              <td>ОУФМС РОССИИ ПО РЕСП. ДАГЕСТАН В Г. БУЙНАСКЕ</td>
              <td>8/27/2013</td>
          </tr>
          <tr id="LC811" class="js-file-line">
            <td id="L811" class="blob-num js-line-number" data-line-number="811"></td>
              <td>ВС-357713</td>
              <td>3044509</td>
              <td>Ефрейтор</td>
              <td>Маркин Василий Юрьевич</td>
              <td>10/29/1998</td>
              <td>75</td>
              <td>12</td>
              <td>179061</td>
              <td>ОУФМС России по Челябинской области в г. Кыштыме</td>
              <td>11/13/2012</td>
          </tr>
          <tr id="LC812" class="js-file-line">
            <td id="L812" class="blob-num js-line-number" data-line-number="812"></td>
              <td>СУ-440152</td>
              <td>3061862</td>
              <td>Ефрейтор</td>
              <td>Журавлев Валерий Романович</td>
              <td>7/26/1998</td>
              <td>8</td>
              <td>12</td>
              <td>102606</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ </td>
              <td>8/22/2012</td>
          </tr>
          <tr id="LC813" class="js-file-line">
            <td id="L813" class="blob-num js-line-number" data-line-number="813"></td>
              <td>СУ-440174</td>
              <td>3062054</td>
              <td>Ефрейтор</td>
              <td>Одинаев Джамшед Ибодуллоевич</td>
              <td>11.09.1993</td>
              <td>8</td>
              <td>13</td>
              <td>201407</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ РАЙОНЕ Г</td>
              <td>12/18/2013</td>
          </tr>
          <tr id="LC814" class="js-file-line">
            <td id="L814" class="blob-num js-line-number" data-line-number="814"></td>
              <td>ВС-349354</td>
              <td>3062459</td>
              <td>Ефрейтор</td>
              <td>Нуриев Артем Гаманович</td>
              <td>4/16/1998</td>
              <td>36</td>
              <td>11</td>
              <td>590253</td>
              <td>Отделение УФМС Росии по Приморскому краю в Красноармейском муници</td>
              <td>5/18/2012</td>
          </tr>
          <tr id="LC815" class="js-file-line">
            <td id="L815" class="blob-num js-line-number" data-line-number="815"></td>
              <td>ВС-290852</td>
              <td>3065111</td>
              <td>Ефрейтор</td>
              <td>Фахретдинов Ильнур Шарафутдинович</td>
              <td>3/27/1998</td>
              <td>80</td>
              <td>11</td>
              <td>307407</td>
              <td>ОУФМС России по республике Башкортостан в Нуримановском р-не</td>
              <td>4/21/2012</td>
          </tr>
          <tr id="LC816" class="js-file-line">
            <td id="L816" class="blob-num js-line-number" data-line-number="816"></td>
              <td>ВС-114995</td>
              <td>3066039</td>
              <td>Ефрейтор</td>
              <td>Антонюк Сергей Михайлович</td>
              <td>6/16/1998</td>
              <td>4</td>
              <td>12</td>
              <td>313928</td>
              <td>ТП в пос. Теплоозерск ОУФМС России по ЕАО в Облученском районе</td>
              <td>07.06.2012</td>
          </tr>
          <tr id="LC817" class="js-file-line">
            <td id="L817" class="blob-num js-line-number" data-line-number="817"></td>
              <td>МТ-127500</td>
              <td>3071221</td>
              <td>Ефрейтор</td>
              <td>Иванова Валентина Владимировна</td>
              <td>08.09.1993</td>
              <td>8</td>
              <td>13</td>
              <td>152626</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В РАЙОНЕ ИМ. ПОЛИНЫ ОСИПЕН</td>
              <td>8/22/2013</td>
          </tr>
          <tr id="LC818" class="js-file-line">
            <td id="L818" class="blob-num js-line-number" data-line-number="818"></td>
              <td>МТ-129057</td>
              <td>3071239</td>
              <td>Ефрейтор</td>
              <td>Егорова Кристина Юрьевна</td>
              <td>05.09.1987</td>
              <td>50</td>
              <td>11</td>
              <td>859715</td>
              <td>УФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В СОВЕТСКОМ РАЙОНЕ Г.НО</td>
              <td>9/14/2011</td>
          </tr>
          <tr id="LC819" class="js-file-line">
            <td id="L819" class="blob-num js-line-number" data-line-number="819"></td>
              <td>СУ-440613</td>
              <td>3072445</td>
              <td>Ефрейтор</td>
              <td>Крючек Артем Игоревич</td>
              <td>04.05.1998</td>
              <td>8</td>
              <td>11</td>
              <td>66692</td>
              <td>МО УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В Г. КОМСОМОЛЬСКЕ-НА-АМ</td>
              <td>4/19/2012</td>
          </tr>
          <tr id="LC820" class="js-file-line">
            <td id="L820" class="blob-num js-line-number" data-line-number="820"></td>
              <td>ВС-123705</td>
              <td>3087690</td>
              <td>Ефрейтор</td>
              <td>Багауов Рузиль Гаязович</td>
              <td>11/23/1998</td>
              <td>80</td>
              <td>12</td>
              <td>655590</td>
              <td>ОУФМС России по республике Башкортостан в Бакалинском р-не</td>
              <td>1/23/2013</td>
          </tr>
          <tr id="LC821" class="js-file-line">
            <td id="L821" class="blob-num js-line-number" data-line-number="821"></td>
              <td>МТ-139435</td>
              <td>3095120</td>
              <td>Ефрейтор</td>
              <td>Филиппов Геннадий Сергеевич</td>
              <td>10/14/1997</td>
              <td>76</td>
              <td>11</td>
              <td>557870</td>
              <td>отделением УФМС России по Забайкальскому краю в Приурганском районе</td>
              <td>10/31/2011</td>
          </tr>
          <tr id="LC822" class="js-file-line">
            <td id="L822" class="blob-num js-line-number" data-line-number="822"></td>
              <td>ВС-117795</td>
              <td>3095636</td>
              <td>Ефрейтор</td>
              <td>Скопинайтесь Денис Эдуардович</td>
              <td>07.08.1998</td>
              <td>4</td>
              <td>11</td>
              <td>268114</td>
              <td>ОУФМС России по Красноярскому краю в г. Минусинске</td>
              <td>09.04.2012</td>
          </tr>
          <tr id="LC823" class="js-file-line">
            <td id="L823" class="blob-num js-line-number" data-line-number="823"></td>
              <td>ВС-368015</td>
              <td>3096965</td>
              <td>Ефрейтор</td>
              <td>Баймаков Игорь Владимирович</td>
              <td>3/15/1996</td>
              <td>75</td>
              <td>15</td>
              <td>710310</td>
              <td>ОУФМС России по Челябинской области в с. Фершампенуаз</td>
              <td>3/29/2016</td>
          </tr>
          <tr id="LC824" class="js-file-line">
            <td id="L824" class="blob-num js-line-number" data-line-number="824"></td>
              <td>ВС-358790</td>
              <td>3098956</td>
              <td>Ефрейтор</td>
              <td>Имихелов Пётр Анатольевич</td>
              <td>4/25/1997</td>
              <td>25</td>
              <td>10</td>
              <td>437089</td>
              <td>ТП УФМС России по Иркутской области в Нукутском р-не</td>
              <td>05.04.2011</td>
          </tr>
          <tr id="LC825" class="js-file-line">
            <td id="L825" class="blob-num js-line-number" data-line-number="825"></td>
              <td>Х-658708</td>
              <td>3099603</td>
              <td>Ефрейтор</td>
              <td>Врачева Дарья Константиновна</td>
              <td>11/14/1994</td>
              <td>92</td>
              <td>14</td>
              <td>757835</td>
              <td>ОТДЕЛ УФМС РОССИИ ПО РЕСПУБЛИКЕ ТАТАРСТАН В СОВЕТСКОМ РАЙОНЕ </td>
              <td>Г12/2/2014</td>
          </tr>
          <tr id="LC826" class="js-file-line">
            <td id="L826" class="blob-num js-line-number" data-line-number="826"></td>
              <td>МТ-204991</td>
              <td>3099605</td>
              <td>Ефрейтор</td>
              <td>Ставер Юлия Романовна</td>
              <td>9/27/1996</td>
              <td>8</td>
              <td>16</td>
              <td>405926</td>
              <td>ОУФМС России по Хабаровскому краю и ЕАО в Индустриальном районе в г.</td>
              <td> 10/19/2016</td>
          </tr>
          <tr id="LC827" class="js-file-line">
            <td id="L827" class="blob-num js-line-number" data-line-number="827"></td>
              <td>МТ-204301</td>
              <td>3099610</td>
              <td>Ефрейтор</td>
              <td>Колоярова Ольга Дмитриевна</td>
              <td>11.02.1986</td>
              <td>5</td>
              <td>12</td>
              <td>988842</td>
              <td>ОУФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В ЧУГУЕВСКОМ МУНИЦИПАЛЬН</td>
              <td>О9/26/2012</td>
          </tr>
          <tr id="LC828" class="js-file-line">
            <td id="L828" class="blob-num js-line-number" data-line-number="828"></td>
              <td>МТ-204986</td>
              <td>3099763</td>
              <td>Ефрейтор</td>
              <td>Накастхоев Зелимхан Ахметович</td>
              <td>5/18/1993</td>
              <td>90</td>
              <td>13</td>
              <td>86066</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ СЕВЕРНАЯ ОСЕТИЯ-АЛАНИЯ В ПРИГОРОД</td>
              <td>Н6/1/2013</td>
          </tr>
          <tr id="LC829" class="js-file-line">
            <td id="L829" class="blob-num js-line-number" data-line-number="829"></td>
              <td>ЕХ-609666</td>
              <td>3102567</td>
              <td>Ефрейтор</td>
              <td>Верховых Евгений Михайлович</td>
              <td>3/13/1994</td>
              <td>20</td>
              <td>14</td>
              <td>741239</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ВОРОНЕЖСКОЙ ОБЛАСТИ В ПОВОРИНСКО</td>
              <td>7/25/2014</td>
          </tr>
          <tr id="LC830" class="js-file-line">
            <td id="L830" class="blob-num js-line-number" data-line-number="830"></td>
              <td>СУ-484662</td>
              <td>3118104</td>
              <td>Ефрейтор</td>
              <td>Макаров Виктор Степанович</td>
              <td>12.04.1998</td>
              <td>98</td>
              <td>12</td>
              <td>434702</td>
              <td> </td>
              <td>12.11.2012</td>
          </tr>
          <tr id="LC831" class="js-file-line">
            <td id="L831" class="blob-num js-line-number" data-line-number="831"></td>
              <td>МТ-182271</td>
              <td>3128657</td>
              <td>Ефрейтор</td>
              <td>Труханова Алена Александровна</td>
              <td>2/17/1993</td>
              <td>8</td>
              <td>13</td>
              <td>151390</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>4/29/2013</td>
          </tr>
          <tr id="LC832" class="js-file-line">
            <td id="L832" class="blob-num js-line-number" data-line-number="832"></td>
              <td>МТ-182270</td>
              <td>3128661</td>
              <td>Ефрейтор</td>
              <td>Эскаева Елена Сергеевна</td>
              <td>6/16/1992</td>
              <td>8</td>
              <td>14</td>
              <td>225933</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>05.05.2014</td>
          </tr>
          <tr id="LC833" class="js-file-line">
            <td id="L833" class="blob-num js-line-number" data-line-number="833"></td>
              <td>Ю-836497</td>
              <td>3132223</td>
              <td>Ефрейтор</td>
              <td>Шевцов Максим Алексеевич</td>
              <td>10.05.1991</td>
              <td>8</td>
              <td>12</td>
              <td>119039</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе г. Хабаро</td>
              <td>в11/7/2012</td>
          </tr>
          <tr id="LC834" class="js-file-line">
            <td id="L834" class="blob-num js-line-number" data-line-number="834"></td>
              <td>МТ-129428</td>
              <td>3136154</td>
              <td>Ефрейтор</td>
              <td>Комаров Виталий Константинович</td>
              <td>7/26/1984</td>
              <td>10</td>
              <td>3</td>
              <td>748042</td>
              <td>УВД г. Благовещенска</td>
              <td>02.03.2005</td>
          </tr>
          <tr id="LC835" class="js-file-line">
            <td id="L835" class="blob-num js-line-number" data-line-number="835"></td>
              <td>ВС-118523</td>
              <td>3138477</td>
              <td>Ефрейтор</td>
              <td>Алхименко Виктор Михайлович</td>
              <td>4/26/1998</td>
              <td>4</td>
              <td>11</td>
              <td>260986</td>
              <td> </td>
              <td>05.02.2012</td>
          </tr>
          <tr id="LC836" class="js-file-line">
            <td id="L836" class="blob-num js-line-number" data-line-number="836"></td>
              <td>МТ-150481</td>
              <td>3158266</td>
              <td>Ефрейтор</td>
              <td>Красников Максим Андреевич</td>
              <td>08.08.1995</td>
              <td>8</td>
              <td>15</td>
              <td>321337</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном р-не</td>
              <td>09.08.2015</td>
          </tr>
          <tr id="LC837" class="js-file-line">
            <td id="L837" class="blob-num js-line-number" data-line-number="837"></td>
              <td>МТ-204228</td>
              <td>3163097</td>
              <td>Ефрейтор</td>
              <td>Македон Алексей Васильевич</td>
              <td>5/19/1992</td>
              <td>52</td>
              <td>11</td>
              <td>95668</td>
              <td>УФМС РОССИИ ПО ОМСКОЙ ОБЛАСТИ В БОЛЬШЕРЕЧЕНСКОМ РАЙОНЕ</td>
              <td>5/31/2012</td>
          </tr>
          <tr id="LC838" class="js-file-line">
            <td id="L838" class="blob-num js-line-number" data-line-number="838"></td>
              <td>СУ-460341</td>
              <td>3170995</td>
              <td>Ефрейтор</td>
              <td>Бернер Александр Андреевич</td>
              <td>5/14/1999</td>
              <td>76</td>
              <td>12</td>
              <td>655523</td>
              <td>Отделением УФМС России по Ярославской области в Некрасовском районе</td>
              <td>5/22/2013</td>
          </tr>
          <tr id="LC839" class="js-file-line">
            <td id="L839" class="blob-num js-line-number" data-line-number="839"></td>
              <td>Х-862003</td>
              <td>3185895</td>
              <td>Ефрейтор</td>
              <td>Хряпко Дмитрий Константинович</td>
              <td>7/24/1987</td>
              <td>8</td>
              <td>8</td>
              <td>757392</td>
              <td>Отделом УФМС России по Хаюароаскому краю в Краснофлотском р-не гор. </td>
              <td>06.03.2008</td>
          </tr>
          <tr id="LC840" class="js-file-line">
            <td id="L840" class="blob-num js-line-number" data-line-number="840"></td>
              <td>МТ-232944</td>
              <td>3186887</td>
              <td>Ефрейтор</td>
              <td>Кураксин Александр Александрович</td>
              <td>11.01.1998</td>
              <td>76</td>
              <td>12</td>
              <td>641825</td>
              <td>Отделением УФМС России по Забайкальскому краю в Забайкальском райо</td>
              <td>н12/21/2012</td>
          </tr>
          <tr id="LC841" class="js-file-line">
            <td id="L841" class="blob-num js-line-number" data-line-number="841"></td>
              <td>СУ-445172</td>
              <td>3187048</td>
              <td>Ефрейтор</td>
              <td>Масюков Владимир Сергеевич</td>
              <td>10/25/1998</td>
              <td>5</td>
              <td>14</td>
              <td>191340</td>
              <td>ОУФМС России по Приморскому краю в Пограничном муниципальном р-не</td>
              <td>12/17/2014</td>
          </tr>
          <tr id="LC842" class="js-file-line">
            <td id="L842" class="blob-num js-line-number" data-line-number="842"></td>
              <td>ВС-054420</td>
              <td>3187780</td>
              <td>Ефрейтор</td>
              <td>Чумакаев Андрей Николаевич</td>
              <td>5/14/1999</td>
              <td>84</td>
              <td>13</td>
              <td>329137</td>
              <td>ТП ОФМС по Республике Алтай в Чемальском р-не</td>
              <td>12/23/2013</td>
          </tr>
          <tr id="LC843" class="js-file-line">
            <td id="L843" class="blob-num js-line-number" data-line-number="843"></td>
              <td>МТ-150191</td>
              <td>3199424</td>
              <td>Ефрейтор</td>
              <td>Ковалев Владислав Алексеевич</td>
              <td>07.04.1997</td>
              <td>8</td>
              <td>11</td>
              <td>12945</td>
              <td> </td>
              <td>07.11.2011</td>
          </tr>
          <tr id="LC844" class="js-file-line">
            <td id="L844" class="blob-num js-line-number" data-line-number="844"></td>
              <td>МТ-150210</td>
              <td>3199472</td>
              <td>Ефрейтор</td>
              <td>Сапов Илья Александрович</td>
              <td>03.09.1997</td>
              <td>8</td>
              <td>17</td>
              <td>435043</td>
              <td>ОУФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ В НЫТВИНСКОМ РАЙОНЕ</td>
              <td>04.11.2017</td>
          </tr>
          <tr id="LC845" class="js-file-line">
            <td id="L845" class="blob-num js-line-number" data-line-number="845"></td>
              <td>МТ-177593</td>
              <td>3199482</td>
              <td>Ефрейтор</td>
              <td>Ткаченко Иван Евгеньевич</td>
              <td>2/15/1998</td>
              <td>8</td>
              <td>11</td>
              <td>62447</td>
              <td>Отделом  УФМС России по Хабаровскому краю в Индустриальном р-не гор.</td>
              <td> 3/7/2012</td>
          </tr>
          <tr id="LC846" class="js-file-line">
            <td id="L846" class="blob-num js-line-number" data-line-number="846"></td>
              <td>СУ-470870</td>
              <td>3210521</td>
              <td>Ефрейтор</td>
              <td>Швецов Михаил Андреевич</td>
              <td>9/15/1994</td>
              <td>8</td>
              <td>14</td>
              <td>263912</td>
              <td>МО УФМС России по Хабаровскому краю в г. Комсомольск-на Амуре</td>
              <td>10.08.2014</td>
          </tr>
          <tr id="LC847" class="js-file-line">
            <td id="L847" class="blob-num js-line-number" data-line-number="847"></td>
              <td>МТ-150763</td>
              <td>3216212</td>
              <td>Ефрейтор</td>
              <td>Бендер Виталий Игоревич</td>
              <td>12.06.1997</td>
              <td>8</td>
              <td>11</td>
              <td>13680</td>
              <td>ОУФМС России по Хабаровскому краю в Нанайском р-не</td>
              <td>12.09.2011</td>
          </tr>
          <tr id="LC848" class="js-file-line">
            <td id="L848" class="blob-num js-line-number" data-line-number="848"></td>
              <td>СУ-440959</td>
              <td>3216246</td>
              <td>Ефрейтор</td>
              <td>Гисс Дмитрий Павлович</td>
              <td>6/24/1998</td>
              <td>8</td>
              <td>11</td>
              <td>72639</td>
              <td>Отделением УФМС России по Хабаровскому краю в Советско Гаванском ра</td>
              <td>й7/12/2012</td>
          </tr>
          <tr id="LC849" class="js-file-line">
            <td id="L849" class="blob-num js-line-number" data-line-number="849"></td>
              <td>МТ-150320</td>
              <td>3216260</td>
              <td>Ефрейтор</td>
              <td>Гуменюк Никита Андреевич</td>
              <td>9/18/1994</td>
              <td>8</td>
              <td>14</td>
              <td>278057</td>
              <td> </td>
              <td>02.11.2015</td>
          </tr>
          <tr id="LC850" class="js-file-line">
            <td id="L850" class="blob-num js-line-number" data-line-number="850"></td>
              <td>МТ-172281</td>
              <td>3221731</td>
              <td>Ефрейтор</td>
              <td>Аршинский Константин Игоревич</td>
              <td>07.09.1997</td>
              <td>76</td>
              <td>11</td>
              <td>605423</td>
              <td>ОУФМС России по Забайкальскому краю в Шилкинском р-не</td>
              <td>11/26/2012</td>
          </tr>
          <tr id="LC851" class="js-file-line">
            <td id="L851" class="blob-num js-line-number" data-line-number="851"></td>
              <td>МТ-232999</td>
              <td>3221787</td>
              <td>Ефрейтор</td>
              <td>Гашимов Александр Русланович</td>
              <td>2/13/1999</td>
              <td>76</td>
              <td>13</td>
              <td>691855</td>
              <td>ОУФМС России по Забайкальскому краю в Краснокаменском р-не</td>
              <td>10/28/2013</td>
          </tr>
          <tr id="LC852" class="js-file-line">
            <td id="L852" class="blob-num js-line-number" data-line-number="852"></td>
              <td>МТ-120779</td>
              <td>3237687</td>
              <td>Ефрейтор</td>
              <td>Шеин Ярослав Викторович</td>
              <td>05.06.1998</td>
              <td>98</td>
              <td>11</td>
              <td>386097</td>
              <td>ТП УФМС России по республике Саха (Якутия) в п. Пеледуй Ленского р-на</td>
              <td>5/23/2012</td>
          </tr>
          <tr id="LC853" class="js-file-line">
            <td id="L853" class="blob-num js-line-number" data-line-number="853"></td>
              <td>МТ-153661</td>
              <td>3248349</td>
              <td>Ефрейтор</td>
              <td>Михеенко Евгений Витальевич</td>
              <td>6/23/1999</td>
              <td>10</td>
              <td>13</td>
              <td>361192</td>
              <td>Мо УФМС России по Амурской области в г. Благовещенске</td>
              <td>7/23/2013</td>
          </tr>
          <tr id="LC854" class="js-file-line">
            <td id="L854" class="blob-num js-line-number" data-line-number="854"></td>
              <td>МТ-153652</td>
              <td>3248354</td>
              <td>Ефрейтор</td>
              <td>Степанов Михаил Анатольевич</td>
              <td>09.05.1998</td>
              <td>10</td>
              <td>12</td>
              <td>322058</td>
              <td>ОУФМС России по Амурской области в Серышевском р-не</td>
              <td>10.12.2012</td>
          </tr>
          <tr id="LC855" class="js-file-line">
            <td id="L855" class="blob-num js-line-number" data-line-number="855"></td>
              <td>МТ-129468</td>
              <td>3272655</td>
              <td>Ефрейтор</td>
              <td>Алиев Яшар Илгар Оглы</td>
              <td>06.10.1998</td>
              <td>10</td>
              <td>15</td>
              <td>475880</td>
              <td>МО УФМС России по Амурской области в г. Благовещенске</td>
              <td>3/23/2016</td>
          </tr>
          <tr id="LC856" class="js-file-line">
            <td id="L856" class="blob-num js-line-number" data-line-number="856"></td>
              <td>МТ-127616</td>
              <td>3272894</td>
              <td>Ефрейтор</td>
              <td>Сусликов Илья Владимирович</td>
              <td>8/15/1998</td>
              <td>8</td>
              <td>13</td>
              <td>151105</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>04.09.2013</td>
          </tr>
          <tr id="LC857" class="js-file-line">
            <td id="L857" class="blob-num js-line-number" data-line-number="857"></td>
              <td>МТ-129499</td>
              <td>3275715</td>
              <td>Ефрейтор</td>
              <td>Сыряный Роман Сергеевич</td>
              <td>10.03.1997</td>
              <td>10</td>
              <td>17</td>
              <td>518676</td>
              <td>отделением УФМС России по Амурской области в г. Райчихинск</td>
              <td>6/16/2017</td>
          </tr>
          <tr id="LC858" class="js-file-line">
            <td id="L858" class="blob-num js-line-number" data-line-number="858"></td>
              <td>МТ-204313</td>
              <td>3277957</td>
              <td>Ефрейтор</td>
              <td>Чепурко Марина Владимировна</td>
              <td>2/17/1987</td>
              <td>52</td>
              <td>12</td>
              <td>168294</td>
              <td>Отделением УФМС России по Омской области в Таврическом районе</td>
              <td>9/20/2012</td>
          </tr>
          <tr id="LC859" class="js-file-line">
            <td id="L859" class="blob-num js-line-number" data-line-number="859"></td>
              <td>МТ-129906</td>
              <td>3278137</td>
              <td>Ефрейтор</td>
              <td>Гладких Владислав Витальевич</td>
              <td>07.04.1997</td>
              <td>10</td>
              <td>11</td>
              <td>260121</td>
              <td>Отделением УФМС России по Амурской области в городе Райчихинск</td>
              <td>7/26/2011</td>
          </tr>
          <tr id="LC860" class="js-file-line">
            <td id="L860" class="blob-num js-line-number" data-line-number="860"></td>
              <td>СУ-473785</td>
              <td>3283216</td>
              <td>Ефрейтор</td>
              <td>Кухта Руслан Олегович</td>
              <td>07.04.1996</td>
              <td>70</td>
              <td>16</td>
              <td>670399</td>
              <td>ОМ УФМС России по Тульской области в г. Ефремов</td>
              <td>7/14/2016</td>
          </tr>
          <tr id="LC861" class="js-file-line">
            <td id="L861" class="blob-num js-line-number" data-line-number="861"></td>
              <td>МТ-309661</td>
              <td>3285181</td>
              <td>Ефрейтор</td>
              <td>Панов Олег Сергеевич</td>
              <td>9/28/1997</td>
              <td>25</td>
              <td>14</td>
              <td>976140</td>
              <td>Отделением УФМС России по Иркутской области в Слюдянском р-не</td>
              <td>4/16/2014</td>
          </tr>
          <tr id="LC862" class="js-file-line">
            <td id="L862" class="blob-num js-line-number" data-line-number="862"></td>
              <td>МТ-150589</td>
              <td>3291689</td>
              <td>Ефрейтор</td>
              <td>Икромов Лутфулло Мурзамудинович</td>
              <td>10/30/1991</td>
              <td>99</td>
              <td>16</td>
              <td>316786</td>
              <td> </td>
              <td>6/29/2016</td>
          </tr>
          <tr id="LC863" class="js-file-line">
            <td id="L863" class="blob-num js-line-number" data-line-number="863"></td>
              <td>МТ-128505</td>
              <td>3291731</td>
              <td>Ефрейтор</td>
              <td>Ефимов Максим Викторович</td>
              <td>3/17/1999</td>
              <td>81</td>
              <td>13</td>
              <td>560834</td>
              <td>ОУФМС по Хабаровскому краю в Хабарвоском р-не</td>
              <td>03.05.2014</td>
          </tr>
          <tr id="LC864" class="js-file-line">
            <td id="L864" class="blob-num js-line-number" data-line-number="864"></td>
              <td>ВС-468302</td>
              <td>3317904</td>
              <td>Ефрейтор</td>
              <td>Курбанов Шамиль Курбанович</td>
              <td>9/21/1996</td>
              <td>82</td>
              <td>17</td>
              <td>970065</td>
              <td>ОУФМС России по Респ. Дагестан в Кировском районе гор. Махачкалы</td>
              <td>8/31/2017</td>
          </tr>
          <tr id="LC865" class="js-file-line">
            <td id="L865" class="blob-num js-line-number" data-line-number="865"></td>
              <td>ВС-300473</td>
              <td>3323918</td>
              <td>Ефрейтор</td>
              <td>Космаков Владимир Николаевич</td>
              <td>5/15/1999</td>
              <td>65</td>
              <td>12</td>
              <td>505464</td>
              <td>ТП УФМС России по Свердловской области в Ачитском районе</td>
              <td>2/27/2014</td>
          </tr>
          <tr id="LC866" class="js-file-line">
            <td id="L866" class="blob-num js-line-number" data-line-number="866"></td>
              <td>ВС-300555</td>
              <td>3324161</td>
              <td>Ефрейтор</td>
              <td>Черданцев Сергей Сергеевич</td>
              <td>4/24/1999</td>
              <td>65</td>
              <td>14</td>
              <td>775004</td>
              <td>Отделением УФМС России по Свердловской области в Артемовском район</td>
              <td>е4/22/2014</td>
          </tr>
          <tr id="LC867" class="js-file-line">
            <td id="L867" class="blob-num js-line-number" data-line-number="867"></td>
              <td>Ю-473315</td>
              <td>3371719</td>
              <td>Ефрейтор</td>
              <td>Лихачев Степан Александрович</td>
              <td>3/20/1990</td>
              <td>25</td>
              <td>9</td>
              <td>339895</td>
              <td>ОУФМС России по Иркутской области в Правобережном округе г.Иркутска</td>
              <td>04.09.2010</td>
          </tr>
          <tr id="LC868" class="js-file-line">
            <td id="L868" class="blob-num js-line-number" data-line-number="868"></td>
              <td>МТ-204335</td>
              <td>3418491</td>
              <td>Ефрейтор</td>
              <td>Брадуцан Александр Валерьевич</td>
              <td>10/14/1979</td>
              <td>8</td>
              <td>11</td>
              <td>41580</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском р-не</td>
              <td>12.07.2011</td>
          </tr>
          <tr id="LC869" class="js-file-line">
            <td id="L869" class="blob-num js-line-number" data-line-number="869"></td>
              <td>Ю-837116</td>
              <td>3425359</td>
              <td>Ефрейтор</td>
              <td>Володькин Егор Анатольевич</td>
              <td>9/30/1991</td>
              <td>8</td>
              <td>11</td>
              <td>75039</td>
              <td>ОУФМС России по Хабаровскому краю в р-не им. Лазо</td>
              <td>5/23/2012</td>
          </tr>
          <tr id="LC870" class="js-file-line">
            <td id="L870" class="blob-num js-line-number" data-line-number="870"></td>
              <td>Ф-513763</td>
              <td>3425775</td>
              <td>Ефрейтор</td>
              <td>Ненашев Евгений Евгеньевич</td>
              <td>05.01.1991</td>
              <td>67</td>
              <td>15</td>
              <td>517662</td>
              <td>ОУФМС России по ХМАО-Югре в г. Нефтеюганске</td>
              <td>12.03.2015</td>
          </tr>
          <tr id="LC871" class="js-file-line">
            <td id="L871" class="blob-num js-line-number" data-line-number="871"></td>
              <td>ВС-353041</td>
              <td>3431801</td>
              <td>Ефрейтор</td>
              <td>Перекопный Андрей Михайлович</td>
              <td>8/28/1982</td>
              <td>25</td>
              <td>15</td>
              <td>67126</td>
              <td>ОУФМС России по Иркутской области в г. Братске и Братском районе</td>
              <td>5/19/2015</td>
          </tr>
          <tr id="LC872" class="js-file-line">
            <td id="L872" class="blob-num js-line-number" data-line-number="872"></td>
              <td>МТ-313952</td>
              <td>3449904</td>
              <td>Ефрейтор</td>
              <td>Хисамиев Владлен Фанисович</td>
              <td>03.11.1990</td>
              <td>50</td>
              <td>16</td>
              <td>516192</td>
              <td>ОУФМС России по Новосибирской области в Тогучинском районе</td>
              <td>04.12.2016</td>
          </tr>
          <tr id="LC873" class="js-file-line">
            <td id="L873" class="blob-num js-line-number" data-line-number="873"></td>
              <td>ВС-289076</td>
              <td>3450489</td>
              <td>Ефрейтор</td>
              <td>Фасхутдинов Владислав Вадимович</td>
              <td>7/30/1997</td>
              <td>37</td>
              <td>17</td>
              <td>712597</td>
              <td>ОУФМС России по Курганской области в Далматовском районе</td>
              <td>8/16/2017</td>
          </tr>
          <tr id="LC874" class="js-file-line">
            <td id="L874" class="blob-num js-line-number" data-line-number="874"></td>
              <td>Ф-280113</td>
              <td>675785</td>
              <td>Рядовой</td>
              <td>Исламов Расим Алиевич</td>
              <td>2/19/1984</td>
              <td>82</td>
              <td>5</td>
              <td>994219</td>
              <td>ОВД г. Дагестанские Огни Республики Дагестан</td>
              <td>8/15/2005</td>
          </tr>
          <tr id="LC875" class="js-file-line">
            <td id="L875" class="blob-num js-line-number" data-line-number="875"></td>
              <td>Х-827761</td>
              <td>1092224</td>
              <td>Рядовой</td>
              <td>Смиренников Артур Владимирович</td>
              <td>09.01.1981</td>
              <td>8</td>
              <td>5</td>
              <td>562655</td>
              <td>ОВД Кировского р-на г.Хабаровска</td>
              <td>10/17/2005</td>
          </tr>
          <tr id="LC876" class="js-file-line">
            <td id="L876" class="blob-num js-line-number" data-line-number="876"></td>
              <td>Х-834271</td>
              <td>1103096</td>
              <td>Рядовой</td>
              <td>Елизаров Денис Эдуардович</td>
              <td>8/15/1989</td>
              <td>8</td>
              <td>10</td>
              <td>934115</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ Р</td>
              <td>6/28/2010</td>
          </tr>
          <tr id="LC877" class="js-file-line">
            <td id="L877" class="blob-num js-line-number" data-line-number="877"></td>
              <td>Х-789572</td>
              <td>1351534</td>
              <td>Рядовой</td>
              <td>Дербенев Илья Николаевич</td>
              <td>5/23/1993</td>
              <td>99</td>
              <td>13</td>
              <td>295987</td>
              <td>отделения ОФМС России по Еврейской АО в г.Биробиджан</td>
              <td>03.11.2014</td>
          </tr>
          <tr id="LC878" class="js-file-line">
            <td id="L878" class="blob-num js-line-number" data-line-number="878"></td>
              <td>Ю-854709</td>
              <td>1366348</td>
              <td>Рядовой</td>
              <td>Гостюхин Александр Владимирович</td>
              <td>12/31/1992</td>
              <td>8</td>
              <td>12</td>
              <td>139272</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖНО</td>
              <td>2/28/2013</td>
          </tr>
          <tr id="LC879" class="js-file-line">
            <td id="L879" class="blob-num js-line-number" data-line-number="879"></td>
              <td>Ю-838806</td>
              <td>1367007</td>
              <td>Рядовой</td>
              <td>Абросимов Виталий Андреевич</td>
              <td>03.11.1992</td>
              <td>8</td>
              <td>12</td>
              <td>95371</td>
              <td>МО УФМС России по Хабаровскому краю в г.Комсомольск-на-Амуре</td>
              <td>08.09.2012</td>
          </tr>
          <tr id="LC880" class="js-file-line">
            <td id="L880" class="blob-num js-line-number" data-line-number="880"></td>
              <td>Ю-854819</td>
              <td>1370071</td>
              <td>Рядовой</td>
              <td>Кошелев Андрей Николаевич</td>
              <td>07.11.1993</td>
              <td>8</td>
              <td>13</td>
              <td>170704</td>
              <td>0813 170704 УФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>10.08.2014</td>
          </tr>
          <tr id="LC881" class="js-file-line">
            <td id="L881" class="blob-num js-line-number" data-line-number="881"></td>
              <td>Х-786463</td>
              <td>1379269</td>
              <td>Рядовой</td>
              <td>Скворцов Анатолий Юрьевич</td>
              <td>08.08.1990</td>
              <td>8</td>
              <td>10</td>
              <td>936088</td>
              <td>ОУФМС России по Хабаровскому краю в Ульчском р-не</td>
              <td>8/26/2010</td>
          </tr>
          <tr id="LC882" class="js-file-line">
            <td id="L882" class="blob-num js-line-number" data-line-number="882"></td>
              <td>Ю-776648</td>
              <td>1446716</td>
              <td>Рядовой</td>
              <td>Гулый Артём Сергеевич</td>
              <td>5/30/1993</td>
              <td>10</td>
              <td>7</td>
              <td>66244</td>
              <td>отделением УФМС России по Амурской обл. в г. Шимановске</td>
              <td>4/14/2008</td>
          </tr>
          <tr id="LC883" class="js-file-line">
            <td id="L883" class="blob-num js-line-number" data-line-number="883"></td>
              <td>Ю-854856</td>
              <td>1448359</td>
              <td>Рядовой</td>
              <td>Корнев Сергей Анатольевич</td>
              <td>6/20/1993</td>
              <td>10</td>
              <td>7</td>
              <td>1255</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В АРХАРИНСКОМ РАЙОНЕ</td>
              <td>8/23/2007</td>
          </tr>
          <tr id="LC884" class="js-file-line">
            <td id="L884" class="blob-num js-line-number" data-line-number="884"></td>
              <td>Ю-854567</td>
              <td>1464497</td>
              <td>Рядовой</td>
              <td>Максимов Максим Владимирович</td>
              <td>08.04.1990</td>
              <td>8</td>
              <td>10</td>
              <td>943551</td>
              <td>ОУФМС по Хабаровскому краю в Северном округе г. Хабаровска</td>
              <td>8/18/2010</td>
          </tr>
          <tr id="LC885" class="js-file-line">
            <td id="L885" class="blob-num js-line-number" data-line-number="885"></td>
              <td>Ю-780346</td>
              <td>1520187</td>
              <td>Рядовой</td>
              <td>Нарышкин Григорий Викторович</td>
              <td>2/23/1992</td>
              <td>10</td>
              <td>11</td>
              <td>307053</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г.БЕЛОГОРСКЕ</td>
              <td>05.10.2012</td>
          </tr>
          <tr id="LC886" class="js-file-line">
            <td id="L886" class="blob-num js-line-number" data-line-number="886"></td>
              <td>МТ-356000</td>
              <td>1522062</td>
              <td>Рядовой</td>
              <td>Осипов Владислав Николаевич</td>
              <td>01.02.1994</td>
              <td>67</td>
              <td>7</td>
              <td>782085</td>
              <td>Отделением № 2 ОУФМС России по ХМАО-Югре в гор. Нижневартовске</td>
              <td>02.01.2008</td>
          </tr>
          <tr id="LC887" class="js-file-line">
            <td id="L887" class="blob-num js-line-number" data-line-number="887"></td>
              <td>Ю-855636</td>
              <td>1530950</td>
              <td>Рядовой</td>
              <td>Маслов Роман Владимирович</td>
              <td>9/16/1993</td>
              <td>9</td>
              <td>13</td>
              <td>169913</td>
              <td>ОУФМС России по Хабаровскому краю в Нанайском районе</td>
              <td>10/14/2013</td>
          </tr>
          <tr id="LC888" class="js-file-line">
            <td id="L888" class="blob-num js-line-number" data-line-number="888"></td>
              <td>Ю-854990</td>
              <td>1531349</td>
              <td>Рядовой</td>
              <td>Хвороща Иван Александрович</td>
              <td>10.08.1993</td>
              <td>8</td>
              <td>15</td>
              <td>310284</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>7/29/2015</td>
          </tr>
          <tr id="LC889" class="js-file-line">
            <td id="L889" class="blob-num js-line-number" data-line-number="889"></td>
              <td>Ю-854922</td>
              <td>1638479</td>
              <td>Рядовой</td>
              <td>Бердников Андрей Дмитриевич</td>
              <td>09.02.1993</td>
              <td>8</td>
              <td>13</td>
              <td>185887</td>
              <td>УФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>10/17/2013</td>
          </tr>
          <tr id="LC890" class="js-file-line">
            <td id="L890" class="blob-num js-line-number" data-line-number="890"></td>
              <td>Ю-841868</td>
              <td>1639078</td>
              <td>Рядовой</td>
              <td>Гладких Михаил Владимирович</td>
              <td>6/20/1992</td>
              <td>8</td>
              <td>13</td>
              <td>165411</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ РАЙОНЕ Г.</td>
              <td>Х7/18/2013</td>
          </tr>
          <tr id="LC891" class="js-file-line">
            <td id="L891" class="blob-num js-line-number" data-line-number="891"></td>
              <td>Ю-849023</td>
              <td>1682169</td>
              <td>Рядовой</td>
              <td>Сафьянов Алексей Сергеевич</td>
              <td>7/17/1994</td>
              <td>10</td>
              <td>14</td>
              <td>410694</td>
              <td>МО УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г.БЕЛОГОРСКЕ</td>
              <td>9/29/2014</td>
          </tr>
          <tr id="LC892" class="js-file-line">
            <td id="L892" class="blob-num js-line-number" data-line-number="892"></td>
              <td>Ю-858003</td>
              <td>1683550</td>
              <td>Рядовой</td>
              <td>Неваленов Артем Андреевич</td>
              <td>4/16/1989</td>
              <td>8</td>
              <td>9</td>
              <td>845805</td>
              <td>ОУФМС по Хаб.кр. Центр.р-не Хабаровска</td>
              <td>07.02.2009</td>
          </tr>
          <tr id="LC893" class="js-file-line">
            <td id="L893" class="blob-num js-line-number" data-line-number="893"></td>
              <td>Ю-811251</td>
              <td>1718678</td>
              <td>Рядовой</td>
              <td>Яковлев Александр Тимофеевич</td>
              <td>8/28/1994</td>
              <td>81</td>
              <td>15</td>
              <td>634178</td>
              <td>ОУ УФМС России по республике Бурятия в Заиграевском районе</td>
              <td>09.07.2015</td>
          </tr>
          <tr id="LC894" class="js-file-line">
            <td id="L894" class="blob-num js-line-number" data-line-number="894"></td>
              <td>Ю-789430</td>
              <td>1809241</td>
              <td>Рядовой</td>
              <td>Закожурников Андрей Владимирович</td>
              <td>04.07.1995</td>
              <td>99</td>
              <td>14</td>
              <td>304871</td>
              <td>ТП В ПОС. ТЕПЛООЗЕРСК ОТДЕЛЕНИЯ ОФМС РОССИИ ПО ЕВРЕЙСКОЙ АВТО</td>
              <td>Н5/15/2015</td>
          </tr>
          <tr id="LC895" class="js-file-line">
            <td id="L895" class="blob-num js-line-number" data-line-number="895"></td>
              <td>Ю-785394</td>
              <td>1826336</td>
              <td>Рядовой</td>
              <td>Баратов Артур Русланович</td>
              <td>10/28/1994</td>
              <td>75</td>
              <td>9</td>
              <td>979363</td>
              <td>ОФМС ПО ЕАО В Г. БИРОБИДЖАН</td>
              <td>4/29/2010</td>
          </tr>
          <tr id="LC896" class="js-file-line">
            <td id="L896" class="blob-num js-line-number" data-line-number="896"></td>
              <td>Ю-816332</td>
              <td>1830941</td>
              <td>Рядовой</td>
              <td>Григорьев Александр Викторович</td>
              <td>02.04.1995</td>
              <td>76</td>
              <td>14</td>
              <td>784398</td>
              <td>ТП в п. Шерловая Гора ОУФМС России по Забайкальскому краю в Борзинск</td>
              <td>о2/24/2015</td>
          </tr>
          <tr id="LC897" class="js-file-line">
            <td id="L897" class="blob-num js-line-number" data-line-number="897"></td>
              <td>Ю-849979</td>
              <td>1843006</td>
              <td>Рядовой</td>
              <td>Дриждь Никита Витальевич</td>
              <td>05.07.1995</td>
              <td>10</td>
              <td>15</td>
              <td>445252</td>
              <td>МО УФМС России по Амурской области в г. Белогорске</td>
              <td>06.03.2015</td>
          </tr>
          <tr id="LC898" class="js-file-line">
            <td id="L898" class="blob-num js-line-number" data-line-number="898"></td>
              <td>Ю-790027</td>
              <td>1849534</td>
              <td>Рядовой</td>
              <td>Мартынов Денис Константинович</td>
              <td>2/16/1995</td>
              <td>81</td>
              <td>14</td>
              <td>607653</td>
              <td>ТП УФМС России по РБ в Хоринском районе</td>
              <td>04.10.2015</td>
          </tr>
          <tr id="LC899" class="js-file-line">
            <td id="L899" class="blob-num js-line-number" data-line-number="899"></td>
              <td>Ю-857425</td>
              <td>1876151</td>
              <td>Рядовой</td>
              <td>Мустафаев Абдулрагим Русланович</td>
              <td>06.09.1994</td>
              <td>8</td>
              <td>14</td>
              <td>261176</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе гор. Ха</td>
              <td>б10/2/2014</td>
          </tr>
          <tr id="LC900" class="js-file-line">
            <td id="L900" class="blob-num js-line-number" data-line-number="900"></td>
              <td>Ю-857895</td>
              <td>1901839</td>
              <td>Рядовой</td>
              <td>Скрицкий Павел Олегович</td>
              <td>02.08.1994</td>
              <td>8</td>
              <td>7</td>
              <td>726215</td>
              <td>ОУФМС России по Хабаровскому краю в Краснофлотском районе г. Хабаров</td>
              <td>2/25/2008</td>
          </tr>
          <tr id="LC901" class="js-file-line">
            <td id="L901" class="blob-num js-line-number" data-line-number="901"></td>
              <td>СУ-093108</td>
              <td>1902981</td>
              <td>Рядовой</td>
              <td>Гольцер Роман Павлович</td>
              <td>3/24/1994</td>
              <td>4</td>
              <td>14</td>
              <td>609487</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО КРАСНОЯРСКОМУ КРАЮ В ЖЕЛЕЗНОДОРО</td>
              <td>7/22/2014</td>
          </tr>
          <tr id="LC902" class="js-file-line">
            <td id="L902" class="blob-num js-line-number" data-line-number="902"></td>
              <td>Ю-850939</td>
              <td>1982502</td>
              <td>Рядовой</td>
              <td>Пашаев Заур Илшадович</td>
              <td>08.08.1995</td>
              <td>10</td>
              <td>15</td>
              <td>453000</td>
              <td>ОУФМС России по Амурской обл., в Мазановском районе</td>
              <td>10.05.2015</td>
          </tr>
          <tr id="LC903" class="js-file-line">
            <td id="L903" class="blob-num js-line-number" data-line-number="903"></td>
              <td>СУ-101162</td>
              <td>1990264</td>
              <td>Рядовой</td>
              <td>Рыбин Денис Евгеньевич</td>
              <td>08.04.1995</td>
              <td>4</td>
              <td>9</td>
              <td>799927</td>
              <td>Отделением УФМС России по Красноярскому краю в Берёзовском районе</td>
              <td>12.04.2009</td>
          </tr>
          <tr id="LC904" class="js-file-line">
            <td id="L904" class="blob-num js-line-number" data-line-number="904"></td>
              <td>Ю-856308</td>
              <td>1992880</td>
              <td>Рядовой</td>
              <td>Хвостов Алексей Сергеевич</td>
              <td>07.06.1995</td>
              <td>8</td>
              <td>9</td>
              <td>862025</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>7/20/2009</td>
          </tr>
          <tr id="LC905" class="js-file-line">
            <td id="L905" class="blob-num js-line-number" data-line-number="905"></td>
              <td>Ю-789841</td>
              <td>2029394</td>
              <td>Рядовой</td>
              <td>Селин Владислав Андреевич</td>
              <td>10/20/1995</td>
              <td>99</td>
              <td>9</td>
              <td>248264</td>
              <td>ТП ОФМС РФ по ЕАО в Октябрьском р-не</td>
              <td>10/30/2009</td>
          </tr>
          <tr id="LC906" class="js-file-line">
            <td id="L906" class="blob-num js-line-number" data-line-number="906"></td>
              <td>МТ-182244</td>
              <td>2033478</td>
              <td>Рядовой</td>
              <td>Иванчиков Сергей Алексеевич</td>
              <td>5/17/1995</td>
              <td>8</td>
              <td>9</td>
              <td>841964</td>
              <td>ОУФМС России по Хабаровскому краю в районе имени Лазо</td>
              <td>5/28/2009</td>
          </tr>
          <tr id="LC907" class="js-file-line">
            <td id="L907" class="blob-num js-line-number" data-line-number="907"></td>
              <td>ЕХ-761501</td>
              <td>2064150</td>
              <td>Рядовой</td>
              <td>Бочаров Иван Александрович</td>
              <td>06.10.1991</td>
              <td>71</td>
              <td>11</td>
              <td>866019</td>
              <td>МО УФМС России по Тюменской обл. в г.Ишиме</td>
              <td>07.08.2011</td>
          </tr>
          <tr id="LC908" class="js-file-line">
            <td id="L908" class="blob-num js-line-number" data-line-number="908"></td>
              <td>Ю-857843</td>
              <td>2077479</td>
              <td>Рядовой</td>
              <td>Семенюк Алексей Александрович</td>
              <td>09.06.1995</td>
              <td>8</td>
              <td>9</td>
              <td>909500</td>
              <td>ОУФМС России по Хабаровскому краю в Северном округе г.Хабаровска</td>
              <td>03.06.2010</td>
          </tr>
          <tr id="LC909" class="js-file-line">
            <td id="L909" class="blob-num js-line-number" data-line-number="909"></td>
              <td>СУ-227385</td>
              <td>2124431</td>
              <td>Рядовой</td>
              <td>Гречушкин Федор Владимирович</td>
              <td>5/28/1995</td>
              <td>69</td>
              <td>16</td>
              <td>714729</td>
              <td>ОУФМС России по Томской обл в Томском районе города Томска</td>
              <td>01.01.2017</td>
          </tr>
          <tr id="LC910" class="js-file-line">
            <td id="L910" class="blob-num js-line-number" data-line-number="910"></td>
              <td>Ю-774224</td>
              <td>2133689</td>
              <td>Рядовой</td>
              <td>Зотьева Вера Валерьевна</td>
              <td>11/30/1983</td>
              <td>18</td>
              <td>4</td>
              <td>544909</td>
              <td>Управлением внутренних дел города Камышина и Камышинского района В</td>
              <td>11/22/2013</td>
          </tr>
          <tr id="LC911" class="js-file-line">
            <td id="L911" class="blob-num js-line-number" data-line-number="911"></td>
              <td>СУ-406722</td>
              <td>2181651</td>
              <td>Рядовой</td>
              <td>Миминкулов Антон Викторович</td>
              <td>07.05.1995</td>
              <td>76</td>
              <td>16</td>
              <td>895458</td>
              <td>ОУФМС ПО ХАБАРОВСКОМУ КРАЮ В СЕВЕРНОМ ОКРУГЕ Г. ХАБАРОВСКА</td>
              <td>08.12.2016</td>
          </tr>
          <tr id="LC912" class="js-file-line">
            <td id="L912" class="blob-num js-line-number" data-line-number="912"></td>
              <td>СУ-473008</td>
              <td>2181814</td>
              <td>Рядовой</td>
              <td>Яргунин Сергей Михайлович</td>
              <td>2/13/1993</td>
              <td>8</td>
              <td>12</td>
              <td>115033</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В УЛЬЧСКОМ РАЙОНЕ</td>
              <td>2/27/2013</td>
          </tr>
          <tr id="LC913" class="js-file-line">
            <td id="L913" class="blob-num js-line-number" data-line-number="913"></td>
              <td>МТ-134432</td>
              <td>2190718</td>
              <td>Рядовой</td>
              <td>Яковлев Леонид Анатольевич</td>
              <td>05.02.1995</td>
              <td>5</td>
              <td>8</td>
              <td>604268</td>
              <td>Отдел УФМС России по Приморскому краю города Лесозаводска</td>
              <td>06.01.2009</td>
          </tr>
          <tr id="LC914" class="js-file-line">
            <td id="L914" class="blob-num js-line-number" data-line-number="914"></td>
              <td>СУ-406076</td>
              <td>2219702</td>
              <td>Рядовой</td>
              <td>Добромиль Сергей Сергеевич</td>
              <td>01.10.1996</td>
              <td>8</td>
              <td>15</td>
              <td>349967</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ РАЙОНЕ Г</td>
              <td>1/29/2016</td>
          </tr>
          <tr id="LC915" class="js-file-line">
            <td id="L915" class="blob-num js-line-number" data-line-number="915"></td>
              <td>СУ-473065</td>
              <td>2219782</td>
              <td>Рядовой</td>
              <td>Пассар Роман Германович</td>
              <td>07.02.1995</td>
              <td>8</td>
              <td>14</td>
              <td>296090</td>
              <td>УФМС России по Хабаровскому краю в Нанайском районе</td>
              <td>07.08.2015</td>
          </tr>
          <tr id="LC916" class="js-file-line">
            <td id="L916" class="blob-num js-line-number" data-line-number="916"></td>
              <td>ЕХ-844558</td>
              <td>2328545</td>
              <td>Рядовой</td>
              <td>Сизых Иван Владимирович</td>
              <td>07.07.1992</td>
              <td>25</td>
              <td>12</td>
              <td>708232</td>
              <td>УФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В СЛЮДЯНСКОМ РАЙОНЕ</td>
              <td>7/16/2012</td>
          </tr>
          <tr id="LC917" class="js-file-line">
            <td id="L917" class="blob-num js-line-number" data-line-number="917"></td>
              <td>СУ-406628</td>
              <td>2336708</td>
              <td>Рядовой</td>
              <td>Анисимов Виктор Сергеевич</td>
              <td>8/29/1996</td>
              <td>8</td>
              <td>16</td>
              <td>396520</td>
              <td>ОУФМС России по Хабаровскому краю и ЕАО и центральном районе гор. Ха</td>
              <td>б10/28/2016</td>
          </tr>
          <tr id="LC918" class="js-file-line">
            <td id="L918" class="blob-num js-line-number" data-line-number="918"></td>
              <td>СУ-406271</td>
              <td>2337026</td>
              <td>Рядовой</td>
              <td>Тимофеев Денис Владимирович</td>
              <td>4/18/1995</td>
              <td>8</td>
              <td>8</td>
              <td>831703</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ </td>
              <td>05.04.2009</td>
          </tr>
          <tr id="LC919" class="js-file-line">
            <td id="L919" class="blob-num js-line-number" data-line-number="919"></td>
              <td>МТ-213872</td>
              <td>2344750</td>
              <td>Рядовой</td>
              <td>Савостин Денис Николаевич</td>
              <td>06.08.1996</td>
              <td>81</td>
              <td>10</td>
              <td>344258</td>
              <td>УФМС РОССИИ ПО РЕСП. БУРЯТИЯ В СЕЛЕНЧИНСКОМ РАЙОНЕ</td>
              <td>7/16/2010</td>
          </tr>
          <tr id="LC920" class="js-file-line">
            <td id="L920" class="blob-num js-line-number" data-line-number="920"></td>
              <td>МТ-237999</td>
              <td>2354070</td>
              <td>Рядовой</td>
              <td>Савельев Евгений Владимирович</td>
              <td>05.03.1996</td>
              <td>8</td>
              <td>16</td>
              <td>427911</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе г.Хабар</td>
              <td>03.02.2017</td>
          </tr>
          <tr id="LC921" class="js-file-line">
            <td id="L921" class="blob-num js-line-number" data-line-number="921"></td>
              <td>ЕХ-576672</td>
              <td>2395863</td>
              <td>Рядовой</td>
              <td>Залкипов Магомедали Шамильевич</td>
              <td>08.05.1995</td>
              <td>82</td>
              <td>13</td>
              <td>168103</td>
              <td>Отделением УФМС России по Республике Дагестан в Кизлярском районе</td>
              <td>8/16/2012</td>
          </tr>
          <tr id="LC922" class="js-file-line">
            <td id="L922" class="blob-num js-line-number" data-line-number="922"></td>
              <td>ЕХ-855254</td>
              <td>2402280</td>
              <td>Рядовой</td>
              <td>Горюнов Сергей Андреевич</td>
              <td>11/18/1995</td>
              <td>25</td>
              <td>15</td>
              <td>179813</td>
              <td>Отделом УФМС России по Иркутской области в Тулунском р-не</td>
              <td>12.08.2015</td>
          </tr>
          <tr id="LC923" class="js-file-line">
            <td id="L923" class="blob-num js-line-number" data-line-number="923"></td>
              <td>СУ-169421</td>
              <td>2454552</td>
              <td>Рядовой</td>
              <td>Малыгин Владислав Александрович</td>
              <td>6/15/1996</td>
              <td>1</td>
              <td>10</td>
              <td>499267</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С.МАМОНТОВО</td>
              <td>7/26/2010</td>
          </tr>
          <tr id="LC924" class="js-file-line">
            <td id="L924" class="blob-num js-line-number" data-line-number="924"></td>
              <td>СУ-287144</td>
              <td>2459912</td>
              <td>Рядовой</td>
              <td>Патраманский Дмитрий Николаевич</td>
              <td>3/22/1996</td>
              <td>8</td>
              <td>17</td>
              <td>442209</td>
              <td>ОУФМС России по Хабаровскому краю и ЕАО в Хабаровском р-не</td>
              <td>5/23/2017</td>
          </tr>
          <tr id="LC925" class="js-file-line">
            <td id="L925" class="blob-num js-line-number" data-line-number="925"></td>
              <td>СУ-287149</td>
              <td>2459918</td>
              <td>Рядовой</td>
              <td>Силин Артем Сергеевич</td>
              <td>7/28/1996</td>
              <td>4</td>
              <td>11</td>
              <td>93988</td>
              <td>ОУФМС РОССИИ ПО КРАСНОЯРСКОМУ КРАЮ В УЖУРСКОМ РАЙОНЕ</td>
              <td>8/19/2011</td>
          </tr>
          <tr id="LC926" class="js-file-line">
            <td id="L926" class="blob-num js-line-number" data-line-number="926"></td>
              <td>МТ-164440</td>
              <td>2474523</td>
              <td>Рядовой</td>
              <td>Антипенко Максим Юрьевич</td>
              <td>8/27/1996</td>
              <td>8</td>
              <td>9</td>
              <td>902064</td>
              <td> </td>
              <td>09.07.2010</td>
          </tr>
          <tr id="LC927" class="js-file-line">
            <td id="L927" class="blob-num js-line-number" data-line-number="927"></td>
              <td>МТ-127882</td>
              <td>2480160</td>
              <td>Рядовой</td>
              <td>Кривовезюк Алексей Викторович</td>
              <td>12.06.1979</td>
              <td>8</td>
              <td>4</td>
              <td>342899</td>
              <td>ОВД Николаевского района Хабаровского края</td>
              <td>11/16/2001</td>
          </tr>
          <tr id="LC928" class="js-file-line">
            <td id="L928" class="blob-num js-line-number" data-line-number="928"></td>
              <td>МТ-204130</td>
              <td>2488008</td>
              <td>Рядовой</td>
              <td>Штонденко Олег Алексеевич</td>
              <td>1/23/1976</td>
              <td>8</td>
              <td>13</td>
              <td>151836</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>06.11.2013</td>
          </tr>
          <tr id="LC929" class="js-file-line">
            <td id="L929" class="blob-num js-line-number" data-line-number="929"></td>
              <td>СУ-470032</td>
              <td>2489470</td>
              <td>Рядовой</td>
              <td>Медведев Виктор Алексеевич</td>
              <td>8/29/1984</td>
              <td>99</td>
              <td>11</td>
              <td>277705</td>
              <td>ТП в селе Амурзет отделение ОФМС России по ЕАО в селе Ленинское</td>
              <td>6/28/2012</td>
          </tr>
          <tr id="LC930" class="js-file-line">
            <td id="L930" class="blob-num js-line-number" data-line-number="930"></td>
              <td>Х-789374</td>
              <td>2489825</td>
              <td>Рядовой</td>
              <td>Викарчук Андрей Юрьевич</td>
              <td>10/16/1992</td>
              <td>99</td>
              <td>12</td>
              <td>283089</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛЕНИЕМ ОФМС РОССИИ ПО ЕВРЕЙСКОЙ АВТОНОМН</td>
              <td>11/27/2012</td>
          </tr>
          <tr id="LC931" class="js-file-line">
            <td id="L931" class="blob-num js-line-number" data-line-number="931"></td>
              <td>Х-876459</td>
              <td>2493579</td>
              <td>Рядовой</td>
              <td>Сидоренко Роман Юрьевич</td>
              <td>06.09.1991</td>
              <td>10</td>
              <td>10</td>
              <td>241582</td>
              <td>ОУФМС России по Амурской обл. в Михайловском р-не</td>
              <td>7/25/2011</td>
          </tr>
          <tr id="LC932" class="js-file-line">
            <td id="L932" class="blob-num js-line-number" data-line-number="932"></td>
              <td>МТ-127900</td>
              <td>2516483</td>
              <td>Рядовой</td>
              <td>Шабаев Александр Андреевич</td>
              <td>11.02.1988</td>
              <td>8</td>
              <td>8</td>
              <td>790956</td>
              <td>ОУФМС Росии по Хабаровскому краю в Железнодорожном районе города Х</td>
              <td>08.07.2008</td>
          </tr>
          <tr id="LC933" class="js-file-line">
            <td id="L933" class="blob-num js-line-number" data-line-number="933"></td>
              <td>СУ-473914</td>
              <td>2516633</td>
              <td>Рядовой</td>
              <td>Долотов Константин Яковлевич</td>
              <td>07.09.1992</td>
              <td>8</td>
              <td>14</td>
              <td>249315</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖНО</td>
              <td>8/15/2014</td>
          </tr>
          <tr id="LC934" class="js-file-line">
            <td id="L934" class="blob-num js-line-number" data-line-number="934"></td>
              <td>СУ-473671</td>
              <td>2516741</td>
              <td>Рядовой</td>
              <td>Матвейчук Антон Юрьевич</td>
              <td>8/30/1996</td>
              <td>99</td>
              <td>16</td>
              <td>317608</td>
              <td>ОТДЕЛОМ ОФМС РОССИИ ПО ЕВРЕЙСКОЙ АВТОНОМНОЙ ОБЛАСТИ В СМИД</td>
              <td>10.07.2010</td>
          </tr>
          <tr id="LC935" class="js-file-line">
            <td id="L935" class="blob-num js-line-number" data-line-number="935"></td>
              <td>МТ-164896</td>
              <td>2516842</td>
              <td>Рядовой</td>
              <td>Серопян Островский Людвигович</td>
              <td>5/21/1996</td>
              <td>8</td>
              <td>10</td>
              <td>922125</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В АМУРСКОМ РАЙ</td>
              <td>О6/18/2010</td>
          </tr>
          <tr id="LC936" class="js-file-line">
            <td id="L936" class="blob-num js-line-number" data-line-number="936"></td>
              <td>МТ-239854</td>
              <td>2517334</td>
              <td>Рядовой</td>
              <td>Шестериков Александр Андреевич</td>
              <td>6/30/1994</td>
              <td>10</td>
              <td>13</td>
              <td>391916</td>
              <td>ОУФМС России по Амурской обласи п. Серешего</td>
              <td>7/24/2014</td>
          </tr>
          <tr id="LC937" class="js-file-line">
            <td id="L937" class="blob-num js-line-number" data-line-number="937"></td>
              <td>ЕХ-573573</td>
              <td>2520058</td>
              <td>Рядовой</td>
              <td>Хаджиев Адлан Абутагирович</td>
              <td>03.10.1995</td>
              <td>82</td>
              <td>14</td>
              <td>614115</td>
              <td>ОУФМС России по Республике Дагестан в г.Хасавюрте</td>
              <td>04.01.2015</td>
          </tr>
          <tr id="LC938" class="js-file-line">
            <td id="L938" class="blob-num js-line-number" data-line-number="938"></td>
              <td>СУ-285377</td>
              <td>2523376</td>
              <td>Рядовой</td>
              <td>Шахворостов Вячеслав Сергеевич</td>
              <td>3/18/1996</td>
              <td>69</td>
              <td>9</td>
              <td>369751</td>
              <td>ОУФМС РОССИИ ПО ТОМСКОЙ ОБЛАСТИ В КРИВОШЕЕВСКОМ РАЙОНЕ</td>
              <td>3/24/2010</td>
          </tr>
          <tr id="LC939" class="js-file-line">
            <td id="L939" class="blob-num js-line-number" data-line-number="939"></td>
              <td>СУ-157265</td>
              <td>2541084</td>
              <td>Рядовой</td>
              <td>Монгуш Евгений Владимирович</td>
              <td>5/27/1997</td>
              <td>93</td>
              <td>11</td>
              <td>437668</td>
              <td>ОТДЕЛОМ ОФМС РОССИИ ПО РЕСПУБЛИКЕ ТЫВА В ГОР. КЫЗЫЛЕ</td>
              <td>6/30/2011</td>
          </tr>
          <tr id="LC940" class="js-file-line">
            <td id="L940" class="blob-num js-line-number" data-line-number="940"></td>
              <td>СУ-269447</td>
              <td>2542566</td>
              <td>Рядовой</td>
              <td>Тарасов Владислав Владимирович</td>
              <td>04.03.1995</td>
              <td>73</td>
              <td>14</td>
              <td>88931</td>
              <td>Отделом Уфмс россии по ульяновской области</td>
              <td>4/21/2015</td>
          </tr>
          <tr id="LC941" class="js-file-line">
            <td id="L941" class="blob-num js-line-number" data-line-number="941"></td>
              <td>СУ-418625</td>
              <td>2544103</td>
              <td>Рядовой</td>
              <td>Тарасенко Евгений Сергеевич</td>
              <td>07.04.1995</td>
              <td>5</td>
              <td>9</td>
              <td>644047</td>
              <td>ОУФМС России по Приморскому краю в Первореченском районе г. Владиво</td>
              <td>07.09.2009</td>
          </tr>
          <tr id="LC942" class="js-file-line">
            <td id="L942" class="blob-num js-line-number" data-line-number="942"></td>
              <td>СУ-251669</td>
              <td>2546812</td>
              <td>Рядовой</td>
              <td>Колесников Дмитрий Сергеевич</td>
              <td>5/19/1996</td>
              <td>53</td>
              <td>10</td>
              <td>981667</td>
              <td>ОУФМС России по Оренбурской области в г. Новотроицке</td>
              <td>06.07.2010</td>
          </tr>
          <tr id="LC943" class="js-file-line">
            <td id="L943" class="blob-num js-line-number" data-line-number="943"></td>
              <td>Ю-836663</td>
              <td>2562545</td>
              <td>Рядовой</td>
              <td>Третьяков Денис Дмитриевич</td>
              <td>07.10.1991</td>
              <td>8</td>
              <td>12</td>
              <td>91980</td>
              <td>ОУФМС России по Хабаровскому краю В ИНДУСТРИАЛЬНОМ РАЙОНЕ Г.ХАБ</td>
              <td>А7/25/2012</td>
          </tr>
          <tr id="LC944" class="js-file-line">
            <td id="L944" class="blob-num js-line-number" data-line-number="944"></td>
              <td>МТ-416581</td>
              <td>2563719</td>
              <td>Рядовой</td>
              <td>Кукуев Юрий Николаевич</td>
              <td>02.06.1996</td>
              <td>20</td>
              <td>16</td>
              <td>952269</td>
              <td>УФМС РОССИИ ПО ВОРОНЕЖСКОЙ ОБЛАСТИ В ХОХОЛЬСКОМ РАЙОНЕ</td>
              <td>6/29/2016</td>
          </tr>
          <tr id="LC945" class="js-file-line">
            <td id="L945" class="blob-num js-line-number" data-line-number="945"></td>
              <td>СУ-299043</td>
              <td>2564079</td>
              <td>Рядовой</td>
              <td>Ибрагимов Руслан Тарелович</td>
              <td>05.06.1996</td>
              <td>52</td>
              <td>9</td>
              <td>894757</td>
              <td>ОТДЕЛЕНИЕ УФМС РОСИИ ПО ОМСКОЙ ОБЛАСТИ В РУСКО-ПОЛЯНСКОМ РА</td>
              <td>Й6/23/2010</td>
          </tr>
          <tr id="LC946" class="js-file-line">
            <td id="L946" class="blob-num js-line-number" data-line-number="946"></td>
              <td>СУ-354987</td>
              <td>2569456</td>
              <td>Рядовой</td>
              <td>Щукин Александр Владимирович</td>
              <td>12/14/1995</td>
              <td>61</td>
              <td>9</td>
              <td>579835</td>
              <td> </td>
              <td>12/23/2009</td>
          </tr>
          <tr id="LC947" class="js-file-line">
            <td id="L947" class="blob-num js-line-number" data-line-number="947"></td>
              <td>СУ-307292</td>
              <td>2571754</td>
              <td>Рядовой</td>
              <td>Смирнов Артём Александрович</td>
              <td>6/30/1995</td>
              <td>73</td>
              <td>16</td>
              <td>157450</td>
              <td>ТП УФМС РОССИИ ПО УЛЬЯНОВСКОЙ ОБЛАСТИ В КУЗОВАТОВСКОМ РАЙОН</td>
              <td>Е7/11/2016</td>
          </tr>
          <tr id="LC948" class="js-file-line">
            <td id="L948" class="blob-num js-line-number" data-line-number="948"></td>
              <td>МТ-173599</td>
              <td>2589054</td>
              <td>Рядовой</td>
              <td>Шилов Владислав Владимирович</td>
              <td>7/28/1995</td>
              <td>8</td>
              <td>10</td>
              <td>963329</td>
              <td>ОФМС России по Хабаровскому краю в Индустриальном районе</td>
              <td>11/23/2010</td>
          </tr>
          <tr id="LC949" class="js-file-line">
            <td id="L949" class="blob-num js-line-number" data-line-number="949"></td>
              <td>СУ-198983</td>
              <td>2599348</td>
              <td>Рядовой</td>
              <td>Савельев Денис Васильевич</td>
              <td>03.09.1996</td>
              <td>57</td>
              <td>9</td>
              <td>574526</td>
              <td>ТП УФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ В ЮСЬВИНСКОМ РАЙОНЕ</td>
              <td>7/23/2010</td>
          </tr>
          <tr id="LC950" class="js-file-line">
            <td id="L950" class="blob-num js-line-number" data-line-number="950"></td>
              <td>МТ-164049</td>
              <td>2607230</td>
              <td>Рядовой</td>
              <td>Туржанский Александр Олегович</td>
              <td>5/23/1995</td>
              <td>8</td>
              <td>15</td>
              <td>304941</td>
              <td>ОУФМС России по Хабаровскому краю в Кировском и Краснофлотском райо</td>
              <td>06.08.2015</td>
          </tr>
          <tr id="LC951" class="js-file-line">
            <td id="L951" class="blob-num js-line-number" data-line-number="951"></td>
              <td>МТ-417855</td>
              <td>2622027</td>
              <td>Рядовой</td>
              <td>Подольских Евгений Павлович</td>
              <td>11.01.1995</td>
              <td>20</td>
              <td>16</td>
              <td>962548</td>
              <td>УФМС РОССИИ ПО ВОРОНЕЖСКОЙ ОБЛАСТИ В пОВОРИНСКОМ РАЙОНЕ</td>
              <td>08.04.2016</td>
          </tr>
          <tr id="LC952" class="js-file-line">
            <td id="L952" class="blob-num js-line-number" data-line-number="952"></td>
              <td>Ю-063783</td>
              <td>2631972</td>
              <td>Рядовой</td>
              <td>Писарев Александр Иванович</td>
              <td>12.03.1991</td>
              <td>76</td>
              <td>12</td>
              <td>649396</td>
              <td>ТП УФМС России по Забайкальскому краю в Тунгокоченском р-не</td>
              <td>3/19/2013</td>
          </tr>
          <tr id="LC953" class="js-file-line">
            <td id="L953" class="blob-num js-line-number" data-line-number="953"></td>
              <td>МТ-185727</td>
              <td>2633966</td>
              <td>Рядовой</td>
              <td>Холмогоров Алексей Дмитриевич</td>
              <td>1/23/1993</td>
              <td>98</td>
              <td>12</td>
              <td>460038</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ САХА (ЯКУТИЯ)</td>
              <td>04.01.2013</td>
          </tr>
          <tr id="LC954" class="js-file-line">
            <td id="L954" class="blob-num js-line-number" data-line-number="954"></td>
              <td>МТ-204678</td>
              <td>2657411</td>
              <td>Рядовой</td>
              <td>Носов Иван Александрович</td>
              <td>11/14/1986</td>
              <td>8</td>
              <td>5</td>
              <td>535904</td>
              <td>Управления внутренних делИндустриального района гор. Хабаровска</td>
              <td>1/24/2007</td>
          </tr>
          <tr id="LC955" class="js-file-line">
            <td id="L955" class="blob-num js-line-number" data-line-number="955"></td>
              <td>Ю-599440</td>
              <td>2657634</td>
              <td>Рядовой</td>
              <td>Долгушев Сергей Евгеньевич</td>
              <td>05.11.1989</td>
              <td>10</td>
              <td>11</td>
              <td>261963</td>
              <td>ОУФМС России по Амурсской области в Тамбовском районе</td>
              <td>4/26/2011</td>
          </tr>
          <tr id="LC956" class="js-file-line">
            <td id="L956" class="blob-num js-line-number" data-line-number="956"></td>
              <td>МТ-173417</td>
              <td>2674611</td>
              <td>Рядовой</td>
              <td>Мещеряков Анатолий Андреевич</td>
              <td>9/18/1997</td>
              <td>8</td>
              <td>10</td>
              <td>983176</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В БИКИНСКОМ РА</td>
              <td>Й10/17/2011</td>
          </tr>
          <tr id="LC957" class="js-file-line">
            <td id="L957" class="blob-num js-line-number" data-line-number="957"></td>
              <td>МТ-131127</td>
              <td>2674746</td>
              <td>Рядовой</td>
              <td>Турчин Владислав Алексеевич</td>
              <td>09.05.1996</td>
              <td>8</td>
              <td>10</td>
              <td>958457</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖНОМ РАЙОН</td>
              <td>10/13/2010</td>
          </tr>
          <tr id="LC958" class="js-file-line">
            <td id="L958" class="blob-num js-line-number" data-line-number="958"></td>
              <td>МТ-131130</td>
              <td>2685345</td>
              <td>Рядовой</td>
              <td>Самойлов Михаил Владиславович</td>
              <td>04.01.1997</td>
              <td>8</td>
              <td>17</td>
              <td>433539</td>
              <td>ОУФМС России по Хабаровскому краю и ЕАО в центральном р-не г. Хабаров</td>
              <td>04.11.2017</td>
          </tr>
          <tr id="LC959" class="js-file-line">
            <td id="L959" class="blob-num js-line-number" data-line-number="959"></td>
              <td>МТ-244193</td>
              <td>2692593</td>
              <td>Рядовой</td>
              <td>Панов Сергей Васильевич</td>
              <td>05.03.1996</td>
              <td>10</td>
              <td>9</td>
              <td>197501</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В МИХАЙЛОВСКОМ РАЙОНЕ</td>
              <td>06.04.2010</td>
          </tr>
          <tr id="LC960" class="js-file-line">
            <td id="L960" class="blob-num js-line-number" data-line-number="960"></td>
              <td>МТ-244289</td>
              <td>2692598</td>
              <td>Рядовой</td>
              <td>Петухов Павел Андреевич</td>
              <td>02.04.1997</td>
              <td>10</td>
              <td>10</td>
              <td>246710</td>
              <td>Отделением УФМС России по Амурской области в Архаринском районе</td>
              <td>5/21/2012</td>
          </tr>
          <tr id="LC961" class="js-file-line">
            <td id="L961" class="blob-num js-line-number" data-line-number="961"></td>
              <td>МТ-244241</td>
              <td>2692627</td>
              <td>Рядовой</td>
              <td>Соловьев Алексей Сергеевич</td>
              <td>06.06.1996</td>
              <td>10</td>
              <td>16</td>
              <td>496935</td>
              <td>ОУФМС России по Амурской области в Бурейском районе</td>
              <td>12/20/2016</td>
          </tr>
          <tr id="LC962" class="js-file-line">
            <td id="L962" class="blob-num js-line-number" data-line-number="962"></td>
              <td>МТ-131182</td>
              <td>2696475</td>
              <td>Рядовой</td>
              <td>Серых Александр Витальевич</td>
              <td>7/17/1997</td>
              <td>8</td>
              <td>11</td>
              <td>25338</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖНОМ РАЙОНЕ</td>
              <td> 8/3/2011</td>
          </tr>
          <tr id="LC963" class="js-file-line">
            <td id="L963" class="blob-num js-line-number" data-line-number="963"></td>
              <td>СУ-191714</td>
              <td>2697328</td>
              <td>Рядовой</td>
              <td>Кислеревич Дмитрий Георгиевич</td>
              <td>6/23/1997</td>
              <td>63</td>
              <td>11</td>
              <td>657930</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В ГОРОДЕ БАЛАШОВ</td>
              <td>7/26/2011</td>
          </tr>
          <tr id="LC964" class="js-file-line">
            <td id="L964" class="blob-num js-line-number" data-line-number="964"></td>
              <td>СУ-255459</td>
              <td>2698514</td>
              <td>Рядовой</td>
              <td>Резников Николай Александрович</td>
              <td>4/20/1997</td>
              <td>75</td>
              <td>10</td>
              <td>824465</td>
              <td>Отделение УФМС России по Челябинской обл. в Октябрьском р-не</td>
              <td>05.04.2011</td>
          </tr>
          <tr id="LC965" class="js-file-line">
            <td id="L965" class="blob-num js-line-number" data-line-number="965"></td>
              <td>СУ-255326</td>
              <td>2698581</td>
              <td>Рядовой</td>
              <td>Волков Никита Олегович</td>
              <td>07.08.1995</td>
              <td>75</td>
              <td>14</td>
              <td>615951</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ</td>
              <td>7/20/2015</td>
          </tr>
          <tr id="LC966" class="js-file-line">
            <td id="L966" class="blob-num js-line-number" data-line-number="966"></td>
              <td>ВС-165312</td>
              <td>2702975</td>
              <td>Рядовой</td>
              <td>Пирметов Алимет Назирович</td>
              <td>5/26/1994</td>
              <td>82</td>
              <td>14</td>
              <td>534434</td>
              <td>Отделением УФМС России по Амурской области в городе Свободном</td>
              <td>8/21/2014</td>
          </tr>
          <tr id="LC967" class="js-file-line">
            <td id="L967" class="blob-num js-line-number" data-line-number="967"></td>
              <td>СУ-162127</td>
              <td>2710664</td>
              <td>Рядовой</td>
              <td>Вигант Николай Дмитриевич</td>
              <td>02.08.1995</td>
              <td>32</td>
              <td>9</td>
              <td>842721</td>
              <td> </td>
              <td>5/18/2010</td>
          </tr>
          <tr id="LC968" class="js-file-line">
            <td id="L968" class="blob-num js-line-number" data-line-number="968"></td>
              <td>СУ-162090</td>
              <td>2710768</td>
              <td>Рядовой</td>
              <td>Моногошев Эдуард Олегович</td>
              <td>9/26/1997</td>
              <td>32</td>
              <td>11</td>
              <td>61819</td>
              <td>ОТДЕЛЕНИЕМ В ЗАВОДСКОМ РАЙОНЕ ОУФМС РОССИИ ПО КЕМЕРОВСКОЙ О</td>
              <td>10/19/2011</td>
          </tr>
          <tr id="LC969" class="js-file-line">
            <td id="L969" class="blob-num js-line-number" data-line-number="969"></td>
              <td>СУ-151398</td>
              <td>2711443</td>
              <td>Рядовой</td>
              <td>Волжанин Дмитрий Юрьевич</td>
              <td>11/20/1996</td>
              <td>88</td>
              <td>10</td>
              <td>34445</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО РЕСПУБЛИКЕ МАРИЙ ЭЛ В Г. ЙОШКАР-ОЛА</td>
              <td>12/27/2010</td>
          </tr>
          <tr id="LC970" class="js-file-line">
            <td id="L970" class="blob-num js-line-number" data-line-number="970"></td>
              <td>МТ-244436</td>
              <td>2715031</td>
              <td>Рядовой</td>
              <td>Лысиков Кирилл Георгиевич</td>
              <td>04.05.1997</td>
              <td>10</td>
              <td>10</td>
              <td>235695</td>
              <td>ОУФМС России по Амурской области в Бурейском районе</td>
              <td>4/16/2011</td>
          </tr>
          <tr id="LC971" class="js-file-line">
            <td id="L971" class="blob-num js-line-number" data-line-number="971"></td>
              <td>МТ-244452</td>
              <td>2715056</td>
              <td>Рядовой</td>
              <td>Пономарёв Дмитрий Дмитриевич</td>
              <td>11/27/1995</td>
              <td>10</td>
              <td>16</td>
              <td>503837</td>
              <td>МО УФМС РОССИИ ПО АМУРСКОЙ ОБЛ. В Г.БЛАГОВЕЩЕНСКЕ</td>
              <td>11/29/2016</td>
          </tr>
          <tr id="LC972" class="js-file-line">
            <td id="L972" class="blob-num js-line-number" data-line-number="972"></td>
              <td>МТ-131642</td>
              <td>2715910</td>
              <td>Рядовой</td>
              <td>Росляков Олег Александрович</td>
              <td>12/31/1995</td>
              <td>8</td>
              <td>16</td>
              <td>425384</td>
              <td>ОУФМС России по Хабаровскому краю и ЕАО в Хабаровском районе</td>
              <td>02.10.2017</td>
          </tr>
          <tr id="LC973" class="js-file-line">
            <td id="L973" class="blob-num js-line-number" data-line-number="973"></td>
              <td>СУ-176167</td>
              <td>2716201</td>
              <td>Рядовой</td>
              <td>Романцев Никита Андреевич</td>
              <td>4/18/1997</td>
              <td>50</td>
              <td>9</td>
              <td>687809</td>
              <td>ТП УФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В ДОВОЛЕНСКОМ РАЙО</td>
              <td>Н1/10/2012</td>
          </tr>
          <tr id="LC974" class="js-file-line">
            <td id="L974" class="blob-num js-line-number" data-line-number="974"></td>
              <td>СУ-185165</td>
              <td>2716210</td>
              <td>Рядовой</td>
              <td>Суворов Роман Вячеславович</td>
              <td>12/15/1996</td>
              <td>50</td>
              <td>13</td>
              <td>38325</td>
              <td>отделением УФМС России по Новосибирской области в Новосибирском рай</td>
              <td>8/22/2012</td>
          </tr>
          <tr id="LC975" class="js-file-line">
            <td id="L975" class="blob-num js-line-number" data-line-number="975"></td>
              <td>СУ-147973</td>
              <td>2718393</td>
              <td>Рядовой</td>
              <td>Баранов Вячеслав Александрович</td>
              <td>05.08.1997</td>
              <td>25</td>
              <td>11</td>
              <td>542174</td>
              <td>ОУФМС по ЕАО г. Биробиджан</td>
              <td>06.09.2011</td>
          </tr>
          <tr id="LC976" class="js-file-line">
            <td id="L976" class="blob-num js-line-number" data-line-number="976"></td>
              <td>СУ-255577</td>
              <td>2720795</td>
              <td>Рядовой</td>
              <td>Гимаздинов Сакиржан Сабриянович</td>
              <td>2/18/1993</td>
              <td>37</td>
              <td>12</td>
              <td>517331</td>
              <td>ТП УФМС РОССИИ ПО КУРГАНСКОЙ ОБЛ. ЩУЧАНСКОМ Р-НЕ</td>
              <td>3/25/2013</td>
          </tr>
          <tr id="LC977" class="js-file-line">
            <td id="L977" class="blob-num js-line-number" data-line-number="977"></td>
              <td>СУ-158500</td>
              <td>2722631</td>
              <td>Рядовой</td>
              <td>Карпуша Николай Алексеевич</td>
              <td>06.02.1997</td>
              <td>67</td>
              <td>17</td>
              <td>645627</td>
              <td>ОУФМС России по Ханты-Мансийскому автономному округу- Югре в Советс</td>
              <td>06.07.2017</td>
          </tr>
          <tr id="LC978" class="js-file-line">
            <td id="L978" class="blob-num js-line-number" data-line-number="978"></td>
              <td>СУ-313386</td>
              <td>2723297</td>
              <td>Рядовой</td>
              <td>Иванов Дмитрий Андреевич</td>
              <td>4/15/1996</td>
              <td>94</td>
              <td>16</td>
              <td>611879</td>
              <td>МП УФМС России по Удмуртской республике в Кизнерском районе</td>
              <td>11/22/2015</td>
          </tr>
          <tr id="LC979" class="js-file-line">
            <td id="L979" class="blob-num js-line-number" data-line-number="979"></td>
              <td>СУ-313387</td>
              <td>2723302</td>
              <td>Рядовой</td>
              <td>Полгин Александр Григорьевич</td>
              <td>5/13/1996</td>
              <td>57</td>
              <td>9</td>
              <td>584840</td>
              <td>УФМС России по Пермскому краю в г.Кудымкаре</td>
              <td>09.02.2010</td>
          </tr>
          <tr id="LC980" class="js-file-line">
            <td id="L980" class="blob-num js-line-number" data-line-number="980"></td>
              <td>СУ-324493</td>
              <td>2723419</td>
              <td>Рядовой</td>
              <td>Цивилев Николай Владимирович</td>
              <td>11.03.1993</td>
              <td>65</td>
              <td>14</td>
              <td>869281</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В ОКТЯБРЬСКОМ РАЙОНЕ Г. </td>
              <td>7/31/2014</td>
          </tr>
          <tr id="LC981" class="js-file-line">
            <td id="L981" class="blob-num js-line-number" data-line-number="981"></td>
              <td>СУ-192582</td>
              <td>2728334</td>
              <td>Рядовой</td>
              <td>Шиян Алексей Сергеевич</td>
              <td>07.05.1996</td>
              <td>57</td>
              <td>9</td>
              <td>585532</td>
              <td>ОУФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ В Г. ГОРНОЗАВОДСКЕ</td>
              <td>08.03.2010</td>
          </tr>
          <tr id="LC982" class="js-file-line">
            <td id="L982" class="blob-num js-line-number" data-line-number="982"></td>
              <td>СУ-192524</td>
              <td>2728355</td>
              <td>Рядовой</td>
              <td>Азанов Виктор Николаевич</td>
              <td>5/25/1996</td>
              <td>57</td>
              <td>9</td>
              <td>525598</td>
              <td>ОУФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ В НЫТВИНСКОМ РАЙОНЕ</td>
              <td>06.05.2010</td>
          </tr>
          <tr id="LC983" class="js-file-line">
            <td id="L983" class="blob-num js-line-number" data-line-number="983"></td>
              <td>СУ-192515</td>
              <td>2728356</td>
              <td>Рядовой</td>
              <td>Астафьев Андрей Станиславович</td>
              <td>08.10.1995</td>
              <td>57</td>
              <td>15</td>
              <td>325697</td>
              <td>ТП УФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ В ГАЙНСКОМ РАЙОНЕ</td>
              <td>09.03.2015</td>
          </tr>
          <tr id="LC984" class="js-file-line">
            <td id="L984" class="blob-num js-line-number" data-line-number="984"></td>
              <td>СУ-192526</td>
              <td>2728375</td>
              <td>Рядовой</td>
              <td>Шкляев Олег Алексеевич</td>
              <td>2/20/1997</td>
              <td>57</td>
              <td>10</td>
              <td>643226</td>
              <td>ТП УФМС РОССИИ ПО ПЕРМСОМУ КРАЮ В ЕЛОВСКОМ РАЙОНЕ</td>
              <td>3/17/2011</td>
          </tr>
          <tr id="LC985" class="js-file-line">
            <td id="L985" class="blob-num js-line-number" data-line-number="985"></td>
              <td>МТ-227477</td>
              <td>2732749</td>
              <td>Рядовой</td>
              <td>Ткаченко Иван Сергеевич</td>
              <td>03.07.1994</td>
              <td>71</td>
              <td>14</td>
              <td>93092</td>
              <td>Отделом УФМС РОССИИ ПО ТЮМЕНСКОЙ ОБЛ. Г. ТЮМЕНИ В ЛЕНИНСКОМ </td>
              <td>Р8/15/2014</td>
          </tr>
          <tr id="LC986" class="js-file-line">
            <td id="L986" class="blob-num js-line-number" data-line-number="986"></td>
              <td>МТ-199177</td>
              <td>2737512</td>
              <td>Рядовой</td>
              <td>Приходько Ян Сергеевич</td>
              <td>12.01.1996</td>
              <td>98</td>
              <td>10</td>
              <td>323843</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЦЕНТРАЛЬНОМ И ЖЕЛЕЗНОДО</td>
              <td>Р8/17/2011</td>
          </tr>
          <tr id="LC987" class="js-file-line">
            <td id="L987" class="blob-num js-line-number" data-line-number="987"></td>
              <td>МТ-204919</td>
              <td>2737890</td>
              <td>Рядовой</td>
              <td>Савостьянов Алексей Евгеньевич</td>
              <td>5/15/1986</td>
              <td>8</td>
              <td>4</td>
              <td>444769</td>
              <td>Упр. внутренних дел Индустриального района г.Хабаровска</td>
              <td>6/29/2006</td>
          </tr>
          <tr id="LC988" class="js-file-line">
            <td id="L988" class="blob-num js-line-number" data-line-number="988"></td>
              <td>СУ-197320</td>
              <td>2738300</td>
              <td>Рядовой</td>
              <td>Пучкин Павел Андреевич</td>
              <td>7/22/1997</td>
              <td>89</td>
              <td>11</td>
              <td>233082</td>
              <td>УФМС РОССИИ ПО РЕСП. МОРДОВИЯ В РП КОМСОМОЛЬСКИЙ ЧАМЗИНСКО</td>
              <td>2/20/2012</td>
          </tr>
          <tr id="LC989" class="js-file-line">
            <td id="L989" class="blob-num js-line-number" data-line-number="989"></td>
              <td>СУ-197295</td>
              <td>2738305</td>
              <td>Рядовой</td>
              <td>Сельвян Дмитрий Михайлович</td>
              <td>08.05.1996</td>
              <td>89</td>
              <td>10</td>
              <td>177058</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕАО В ХАБАРОВСКОМ РАЙОН</td>
              <td>Е9/29/2010</td>
          </tr>
          <tr id="LC990" class="js-file-line">
            <td id="L990" class="blob-num js-line-number" data-line-number="990"></td>
              <td>СУ-197294</td>
              <td>2738319</td>
              <td>Рядовой</td>
              <td>Яроцков Дмитрий Юрьевич</td>
              <td>9/18/1994</td>
              <td>89</td>
              <td>14</td>
              <td>354050</td>
              <td>МЕЖРАЙОННЫЙ ОТДЕЛ УФМС РОССИИ ПО РЕСПУБЛИКЕ МОРДОВИЯ В ЗУБ</td>
              <td>О12/9/2014</td>
          </tr>
          <tr id="LC991" class="js-file-line">
            <td id="L991" class="blob-num js-line-number" data-line-number="991"></td>
              <td>СУ-310477</td>
              <td>2739594</td>
              <td>Рядовой</td>
              <td>Зоткин Иван Петрович</td>
              <td>8/21/1997</td>
              <td>36</td>
              <td>11</td>
              <td>506411</td>
              <td>ОУФМС России по Пермской области в г. Пермь</td>
              <td>12.01.2011</td>
          </tr>
          <tr id="LC992" class="js-file-line">
            <td id="L992" class="blob-num js-line-number" data-line-number="992"></td>
              <td>СУ-310482</td>
              <td>2739603</td>
              <td>Рядовой</td>
              <td>Миронов Дмитрий Вячеславович</td>
              <td>10/26/1997</td>
              <td>36</td>
              <td>11</td>
              <td>517927</td>
              <td>УФМС РОССИИ ПО КУРГАНСКОЙ ОБЛАСТИ В ШУМИХИНСКОМ РАЙОНЕ</td>
              <td>11/15/2011</td>
          </tr>
          <tr id="LC993" class="js-file-line">
            <td id="L993" class="blob-num js-line-number" data-line-number="993"></td>
              <td>Х-824808</td>
              <td>2739700</td>
              <td>Рядовой</td>
              <td>Эмих Алексей Игоревич</td>
              <td>11/22/1988</td>
              <td>8</td>
              <td>8</td>
              <td>785244</td>
              <td>ОУФМС России по Хабаровскому краю в Бикинском районе</td>
              <td>12.03.2008</td>
          </tr>
          <tr id="LC994" class="js-file-line">
            <td id="L994" class="blob-num js-line-number" data-line-number="994"></td>
              <td>СУ-319692</td>
              <td>2740264</td>
              <td>Рядовой</td>
              <td>Вершинин Максим Александрович</td>
              <td>04.04.1995</td>
              <td>63</td>
              <td>14</td>
              <td>128151</td>
              <td>ОУФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В Г. ВОЛЬСК</td>
              <td>4/17/2015</td>
          </tr>
          <tr id="LC995" class="js-file-line">
            <td id="L995" class="blob-num js-line-number" data-line-number="995"></td>
              <td>СУ-319660</td>
              <td>2740495</td>
              <td>Рядовой</td>
              <td>Трифонов Евгений Алексеевич</td>
              <td>01.01.1997</td>
              <td>63</td>
              <td>12</td>
              <td>867373</td>
              <td> </td>
              <td>03.12.2013</td>
          </tr>
          <tr id="LC996" class="js-file-line">
            <td id="L996" class="blob-num js-line-number" data-line-number="996"></td>
              <td>СУ-318988</td>
              <td>2746630</td>
              <td>Рядовой</td>
              <td>Дагба Чингис Байбекович</td>
              <td>12/20/1993</td>
              <td>93</td>
              <td>15</td>
              <td>532433</td>
              <td>ОФМС ПО РЕСПУБЛИКЕ ТЫВА</td>
              <td>4/24/2015</td>
          </tr>
          <tr id="LC997" class="js-file-line">
            <td id="L997" class="blob-num js-line-number" data-line-number="997"></td>
              <td>СУ-303708</td>
              <td>2751041</td>
              <td>Рядовой</td>
              <td>Резанов Артем Евгеньевич</td>
              <td>12/13/1996</td>
              <td>52</td>
              <td>10</td>
              <td>996684</td>
              <td>оуфмс России по Омской области в Таврическом районе</td>
              <td>3/31/2011</td>
          </tr>
          <tr id="LC998" class="js-file-line">
            <td id="L998" class="blob-num js-line-number" data-line-number="998"></td>
              <td>СУ-303104</td>
              <td>2751045</td>
              <td>Рядовой</td>
              <td>Цыганов Артур Юрьевич</td>
              <td>12/20/1994</td>
              <td>52</td>
              <td>14</td>
              <td>403222</td>
              <td>ОУФМС РОССИИ ПО ОМСКОЙ ОБЛАСТИ</td>
              <td>1/13/2015</td>
          </tr>
          <tr id="LC999" class="js-file-line">
            <td id="L999" class="blob-num js-line-number" data-line-number="999"></td>
              <td>СУ-142385</td>
              <td>2754845</td>
              <td>Рядовой</td>
              <td>Баскаков Сергей Романович</td>
              <td>09.06.1995</td>
              <td>1</td>
              <td>15</td>
              <td>161333</td>
              <td>ОУФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ РАЙОНЕ Г. Б</td>
              <td>9/21/2015</td>
          </tr>
          <tr id="LC1000" class="js-file-line">
            <td id="L1000" class="blob-num js-line-number" data-line-number="1000"></td>
              <td>СУ-142318</td>
              <td>2754887</td>
              <td>Рядовой</td>
              <td>Баженов Сергей Васильевич</td>
              <td>08.06.1995</td>
              <td>1</td>
              <td>15</td>
              <td>114291</td>
              <td>МИГРАЦИОННЫЙ ПУНКТ УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. БАЕВО</td>
              <td>8/20/2015</td>
          </tr>
          <tr id="LC1001" class="js-file-line">
            <td id="L1001" class="blob-num js-line-number" data-line-number="1001"></td>
              <td>СУ-320818</td>
              <td>2755603</td>
              <td>Рядовой</td>
              <td>Барбара Константин Вадимович</td>
              <td>4/27/1997</td>
              <td>65</td>
              <td>11</td>
              <td>91522</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В ВЕРХНЕПЫШ</td>
              <td>М5/20/2011</td>
          </tr>
          <tr id="LC1002" class="js-file-line">
            <td id="L1002" class="blob-num js-line-number" data-line-number="1002"></td>
              <td>МТ-220572</td>
              <td>2758413</td>
              <td>Рядовой</td>
              <td>Старицын Сергей Николаевич</td>
              <td>4/13/1997</td>
              <td>76</td>
              <td>11</td>
              <td>558568</td>
              <td>ТП УФМС России по Забайкальскому краю в Ононском районе</td>
              <td>6/30/2011</td>
          </tr>
          <tr id="LC1003" class="js-file-line">
            <td id="L1003" class="blob-num js-line-number" data-line-number="1003"></td>
              <td>ЕХ-788017</td>
              <td>2760292</td>
              <td>Рядовой</td>
              <td>Курухов Сергей Иванович</td>
              <td>5/31/1997</td>
              <td>50</td>
              <td>10</td>
              <td>789987</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В КРАСНООЗЁ</td>
              <td>6/29/2011</td>
          </tr>
          <tr id="LC1004" class="js-file-line">
            <td id="L1004" class="blob-num js-line-number" data-line-number="1004"></td>
              <td>СУ-176966</td>
              <td>2760356</td>
              <td>Рядовой</td>
              <td>Шмаков Алексей Константинович</td>
              <td>8/25/1996</td>
              <td>50</td>
              <td>13</td>
              <td>22990</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В МАСЛИНИЦКОМ РАЙОН</td>
              <td>11/20/2012</td>
          </tr>
          <tr id="LC1005" class="js-file-line">
            <td id="L1005" class="blob-num js-line-number" data-line-number="1005"></td>
              <td>СУ-182052</td>
              <td>2762366</td>
              <td>Рядовой</td>
              <td>Сахабутдинов Булат Рамзилевич</td>
              <td>05.12.1995</td>
              <td>80</td>
              <td>15</td>
              <td>303397</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО РЕСПУБЛИКЕ БАШКОРТОСТАН В Г.ТУЙМАЗЫ</td>
              <td>11/20/2015</td>
          </tr>
          <tr id="LC1006" class="js-file-line">
            <td id="L1006" class="blob-num js-line-number" data-line-number="1006"></td>
              <td>СУ-141163</td>
              <td>2763572</td>
              <td>Рядовой</td>
              <td>Карбусов Яков Сергеевич</td>
              <td>10/21/1997</td>
              <td>63</td>
              <td>14</td>
              <td>133853</td>
              <td>ОУФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В ГОРОДЕ РТИЩЕВО</td>
              <td>3/18/2015</td>
          </tr>
          <tr id="LC1007" class="js-file-line">
            <td id="L1007" class="blob-num js-line-number" data-line-number="1007"></td>
              <td>СУ-141171</td>
              <td>2763582</td>
              <td>Рядовой</td>
              <td>Лунгу Илья Анатольевич</td>
              <td>3/19/1996</td>
              <td>63</td>
              <td>9</td>
              <td>487355</td>
              <td>ТП УФМС России по Новосибирской области в г. Новосибирск</td>
              <td>05.06.2010</td>
          </tr>
          <tr id="LC1008" class="js-file-line">
            <td id="L1008" class="blob-num js-line-number" data-line-number="1008"></td>
              <td>СУ-141185</td>
              <td>2763596</td>
              <td>Рядовой</td>
              <td>Сапаргалиев Руслан Кахарманович</td>
              <td>5/23/1996</td>
              <td>63</td>
              <td>13</td>
              <td>908002</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЦЕНТРАЛЬНОМ РАЙОНЕ Г.ХАБА</td>
              <td>08.09.2013</td>
          </tr>
          <tr id="LC1009" class="js-file-line">
            <td id="L1009" class="blob-num js-line-number" data-line-number="1009"></td>
              <td>СУ-141119</td>
              <td>2763733</td>
              <td>Рядовой</td>
              <td>Власов Кирилл Владимирович</td>
              <td>4/15/1995</td>
              <td>63</td>
              <td>15</td>
              <td>148500</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В ТАТИЩЕВСКОМ</td>
              <td>05.04.2015</td>
          </tr>
          <tr id="LC1010" class="js-file-line">
            <td id="L1010" class="blob-num js-line-number" data-line-number="1010"></td>
              <td>СУ-141115</td>
              <td>2763737</td>
              <td>Рядовой</td>
              <td>Котин Сергей Александрович</td>
              <td>6/13/1996</td>
              <td>63</td>
              <td>10</td>
              <td>499200</td>
              <td>ОУФМС России по Саратовской области в г. Марксе</td>
              <td>07.03.2010</td>
          </tr>
          <tr id="LC1011" class="js-file-line">
            <td id="L1011" class="blob-num js-line-number" data-line-number="1011"></td>
              <td>СУ-141129</td>
              <td>2763739</td>
              <td>Рядовой</td>
              <td>Лысковцев Николай Александрович</td>
              <td>6/23/1995</td>
              <td>63</td>
              <td>15</td>
              <td>197015</td>
              <td>ОУФМС России по Саратовской области в Татищенском районе</td>
              <td>09.12.2015</td>
          </tr>
          <tr id="LC1012" class="js-file-line">
            <td id="L1012" class="blob-num js-line-number" data-line-number="1012"></td>
              <td>МТ-103211</td>
              <td>2772790</td>
              <td>Рядовой</td>
              <td>Мочалов Георгий Николаевич</td>
              <td>6/25/1994</td>
              <td>8</td>
              <td>14</td>
              <td>290414</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В</td>
              <td>4/24/2015</td>
          </tr>
          <tr id="LC1013" class="js-file-line">
            <td id="L1013" class="blob-num js-line-number" data-line-number="1013"></td>
              <td>МТ-103367</td>
              <td>2772806</td>
              <td>Рядовой</td>
              <td>Питкевич Вадим Александрович</td>
              <td>5/25/1996</td>
              <td>8</td>
              <td>10</td>
              <td>950148</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В СОВЕТСКО-ГАВАНСКОМ РАЙОН</td>
              <td>5/25/1996</td>
          </tr>
          <tr id="LC1014" class="js-file-line">
            <td id="L1014" class="blob-num js-line-number" data-line-number="1014"></td>
              <td>МТ-244644</td>
              <td>2772927</td>
              <td>Рядовой</td>
              <td>Затолокин Максим Александрович</td>
              <td>6/28/1997</td>
              <td>8</td>
              <td>11</td>
              <td>255678</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе г. Хаба</td>
              <td>р12/9/2015</td>
          </tr>
          <tr id="LC1015" class="js-file-line">
            <td id="L1015" class="blob-num js-line-number" data-line-number="1015"></td>
              <td>СУ-326698</td>
              <td>2773179</td>
              <td>Рядовой</td>
              <td>Мельков Павел Сергеевич</td>
              <td>10.02.1997</td>
              <td>84</td>
              <td>11</td>
              <td>304366</td>
              <td>ОФМС РОССИИ ПО РЕСПУБЛИКЕ АЛТАЙ В Г.ГОРНО-АЛТАЙСКЕ</td>
              <td>04.03.2012</td>
          </tr>
          <tr id="LC1016" class="js-file-line">
            <td id="L1016" class="blob-num js-line-number" data-line-number="1016"></td>
              <td>МТ-202669</td>
              <td>2777249</td>
              <td>Рядовой</td>
              <td>Руденко Александр Сергеевич</td>
              <td>7/23/1996</td>
              <td>5</td>
              <td>10</td>
              <td>784579</td>
              <td>ОУФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В Г. ДАЛЬНЕГОРСК</td>
              <td>8/25/2016</td>
          </tr>
          <tr id="LC1017" class="js-file-line">
            <td id="L1017" class="blob-num js-line-number" data-line-number="1017"></td>
              <td>МТ-202671</td>
              <td>2777251</td>
              <td>Рядовой</td>
              <td>Дорохин Артём Владимирович</td>
              <td>10/30/1997</td>
              <td>5</td>
              <td>11</td>
              <td>875997</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В ЧЕРНИГОВСКОМ </td>
              <td>12/23/2011</td>
          </tr>
          <tr id="LC1018" class="js-file-line">
            <td id="L1018" class="blob-num js-line-number" data-line-number="1018"></td>
              <td>МТ-112646</td>
              <td>2777406</td>
              <td>Рядовой</td>
              <td>Тарабукин Айсен Русланович</td>
              <td>11.04.1997</td>
              <td>98</td>
              <td>11</td>
              <td>378270</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА(ЯКУТИЯ) В ЧУРАПЧИНСКОМ РАЙО</td>
              <td>Н2/16/2012</td>
          </tr>
          <tr id="LC1019" class="js-file-line">
            <td id="L1019" class="blob-num js-line-number" data-line-number="1019"></td>
              <td>МТ-112647</td>
              <td>2777421</td>
              <td>Рядовой</td>
              <td>Чимитов Иван Валерьевич</td>
              <td>12.04.1992</td>
              <td>98</td>
              <td>12</td>
              <td>441440</td>
              <td>ОУФМС РОССИИ ПО РЕСП. САХА (ЯКУТИЯ) В МАРЬИНСКОМ РАЙОНЕ</td>
              <td>12/19/2012</td>
          </tr>
          <tr id="LC1020" class="js-file-line">
            <td id="L1020" class="blob-num js-line-number" data-line-number="1020"></td>
              <td>СУ-182623</td>
              <td>2777865</td>
              <td>Рядовой</td>
              <td>Горяев Евгений Эдуардович</td>
              <td>07.01.1996</td>
              <td>80</td>
              <td>10</td>
              <td>121172</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО РЕСПУБЛИКЕ БАШКОРТОСТАН В ОКТЯБРЬСКО</td>
              <td>М9/6/2010</td>
          </tr>
          <tr id="LC1021" class="js-file-line">
            <td id="L1021" class="blob-num js-line-number" data-line-number="1021"></td>
              <td>СУ-141305</td>
              <td>2777909</td>
              <td>Рядовой</td>
              <td>Черемисин Павел Сергеевич</td>
              <td>6/28/1997</td>
              <td>63</td>
              <td>11</td>
              <td>658318</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В ГОРОДЕ БАЛАКОВ</td>
              <td>О7/8/2011</td>
          </tr>
          <tr id="LC1022" class="js-file-line">
            <td id="L1022" class="blob-num js-line-number" data-line-number="1022"></td>
              <td>СУ-184772</td>
              <td>2778473</td>
              <td>Рядовой</td>
              <td>Хабибуллин Денис Ильдусович</td>
              <td>8/18/1995</td>
              <td>80</td>
              <td>15</td>
              <td>201217</td>
              <td> </td>
              <td>9/23/2015</td>
          </tr>
          <tr id="LC1023" class="js-file-line">
            <td id="L1023" class="blob-num js-line-number" data-line-number="1023"></td>
              <td>СУ-184806</td>
              <td>2778509</td>
              <td>Рядовой</td>
              <td>Чуриков Владислав Александрович</td>
              <td>06.01.1997</td>
              <td>80</td>
              <td>10</td>
              <td>267052</td>
              <td>ОУФМС РОССИИ ПО УЛЬЯНОВСКОЙ ОБЛАСТИ В ЗАВОЛЖСКОМ РАЙОНЕ</td>
              <td>6/23/2011</td>
          </tr>
          <tr id="LC1024" class="js-file-line">
            <td id="L1024" class="blob-num js-line-number" data-line-number="1024"></td>
              <td>МТ-228826</td>
              <td>2787377</td>
              <td>Рядовой</td>
              <td>Костаков Александр Сергеевич</td>
              <td>12.10.1997</td>
              <td>99</td>
              <td>11</td>
              <td>268964</td>
              <td>ОУФМС РОССИИ ПО ЕАО В Г. БИРОБИДЖАНЕ</td>
              <td>12.12.2011</td>
          </tr>
          <tr id="LC1025" class="js-file-line">
            <td id="L1025" class="blob-num js-line-number" data-line-number="1025"></td>
              <td>ВС-004203</td>
              <td>2787706</td>
              <td>Рядовой</td>
              <td>Иванушкин Виталий Валентинович</td>
              <td>4/19/1995</td>
              <td>75</td>
              <td>15</td>
              <td>624625</td>
              <td>УФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В ЦЕНТРАЛЬНОМ РАЙОНЕ Г.ЧЕ</td>
              <td>Л7/4/2015</td>
          </tr>
          <tr id="LC1026" class="js-file-line">
            <td id="L1026" class="blob-num js-line-number" data-line-number="1026"></td>
              <td>МТ-164387</td>
              <td>2790604</td>
              <td>Рядовой</td>
              <td>Петров Илья Андреевич</td>
              <td>3/20/1995</td>
              <td>8</td>
              <td>15</td>
              <td>324611</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>11.03.2015</td>
          </tr>
          <tr id="LC1027" class="js-file-line">
            <td id="L1027" class="blob-num js-line-number" data-line-number="1027"></td>
              <td>СУ-299179</td>
              <td>2791492</td>
              <td>Рядовой</td>
              <td>Назаренко Алексей Владимирович</td>
              <td>3/23/1997</td>
              <td>52</td>
              <td>10</td>
              <td>906694</td>
              <td>ТП УФМС РОССИИ ПО ОМСКОЙ ОБЛАСТИ В ЗНАМЕНСКОМ РАЙОНЕ</td>
              <td>04.09.2011</td>
          </tr>
          <tr id="LC1028" class="js-file-line">
            <td id="L1028" class="blob-num js-line-number" data-line-number="1028"></td>
              <td>СУ-299240</td>
              <td>2791509</td>
              <td>Рядовой</td>
              <td>Сумин Евгений Викторович</td>
              <td>4/25/1997</td>
              <td>52</td>
              <td>10</td>
              <td>992173</td>
              <td>Отделением УФМС России по Омской области в Любинском районе</td>
              <td>05.05.2011</td>
          </tr>
          <tr id="LC1029" class="js-file-line">
            <td id="L1029" class="blob-num js-line-number" data-line-number="1029"></td>
              <td>ЕХ-868051</td>
              <td>2793766</td>
              <td>Рядовой</td>
              <td>Горкунов Максим Дмитриевич</td>
              <td>10/20/1996</td>
              <td>50</td>
              <td>9</td>
              <td>705911</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В БОЛОТИНСКОМ РАЙОНЕ</td>
              <td>10/29/2010</td>
          </tr>
          <tr id="LC1030" class="js-file-line">
            <td id="L1030" class="blob-num js-line-number" data-line-number="1030"></td>
              <td>МТ-244823</td>
              <td>2794421</td>
              <td>Рядовой</td>
              <td>Смагин Юрий Валерьевич</td>
              <td>11/15/1997</td>
              <td>10</td>
              <td>11</td>
              <td>264989</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г.ЗЕЕ</td>
              <td>11/30/2011</td>
          </tr>
          <tr id="LC1031" class="js-file-line">
            <td id="L1031" class="blob-num js-line-number" data-line-number="1031"></td>
              <td>МТ-115348</td>
              <td>2794668</td>
              <td>Рядовой</td>
              <td>Батоев Мунко Соёлович</td>
              <td>06.10.1997</td>
              <td>76</td>
              <td>17</td>
              <td>943560</td>
              <td>МП УФМС России по Забайкальскому Краю в Дульдургинском районе</td>
              <td>6/21/2017</td>
          </tr>
          <tr id="LC1032" class="js-file-line">
            <td id="L1032" class="blob-num js-line-number" data-line-number="1032"></td>
              <td>МТ-115355</td>
              <td>2794707</td>
              <td>Рядовой</td>
              <td>Дугаров Цырен Цыденович</td>
              <td>3/23/1996</td>
              <td>76</td>
              <td>16</td>
              <td>910607</td>
              <td>Отделом УФМС России по Забайкальскому краю в Агинском районе</td>
              <td>1/21/2017</td>
          </tr>
          <tr id="LC1033" class="js-file-line">
            <td id="L1033" class="blob-num js-line-number" data-line-number="1033"></td>
              <td>МТ-115381</td>
              <td>2794709</td>
              <td>Рядовой</td>
              <td>Дугаров Энхэ Захарович</td>
              <td>7/17/1996</td>
              <td>76</td>
              <td>15</td>
              <td>846855</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В АГИНСКОМ РАЙО</td>
              <td>Н11/3/2015</td>
          </tr>
          <tr id="LC1034" class="js-file-line">
            <td id="L1034" class="blob-num js-line-number" data-line-number="1034"></td>
              <td>МТ-235264</td>
              <td>2794757</td>
              <td>Рядовой</td>
              <td>Макаров Владислав Александрович</td>
              <td>04.09.1997</td>
              <td>76</td>
              <td>10</td>
              <td>533211</td>
              <td>ТП УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В ШЕЛОПУТИНСКОМ РАЙО</td>
              <td>Н8/8/2011</td>
          </tr>
          <tr id="LC1035" class="js-file-line">
            <td id="L1035" class="blob-num js-line-number" data-line-number="1035"></td>
              <td>МТ-112709</td>
              <td>2795309</td>
              <td>Рядовой</td>
              <td>Илларионов Гаврил Альбертович</td>
              <td>2/18/1997</td>
              <td>98</td>
              <td>11</td>
              <td>336693</td>
              <td>ТП УФМС РОССИИ ПО РЕСП. САХА (ЯКУТИЯ) В НОРБИНСКОМ РАЙОНЕ</td>
              <td>7/21/2011</td>
          </tr>
          <tr id="LC1036" class="js-file-line">
            <td id="L1036" class="blob-num js-line-number" data-line-number="1036"></td>
              <td>МТ-182094</td>
              <td>2806750</td>
              <td>Рядовой</td>
              <td>Мусаев Фарход Абдуманнонович</td>
              <td>08.11.1997</td>
              <td>4</td>
              <td>7</td>
              <td>746689</td>
              <td>ГУМВД Республики Таджикистан</td>
              <td>7/23/2015</td>
          </tr>
          <tr id="LC1037" class="js-file-line">
            <td id="L1037" class="blob-num js-line-number" data-line-number="1037"></td>
              <td>Х-819681</td>
              <td>2807821</td>
              <td>Рядовой</td>
              <td>Конев Сергей Иванович</td>
              <td>6/29/1990</td>
              <td>99</td>
              <td>12</td>
              <td>284819</td>
              <td>межрайонным отделением ОФМС России по Еврейской АО</td>
              <td>06.06.2013</td>
          </tr>
          <tr id="LC1038" class="js-file-line">
            <td id="L1038" class="blob-num js-line-number" data-line-number="1038"></td>
              <td>МТ-182112</td>
              <td>2809544</td>
              <td>Рядовой</td>
              <td>Почоев Бахриддин Савридинович</td>
              <td>07.04.1996</td>
              <td>4</td>
              <td>0</td>
              <td>367297</td>
              <td>ГЕН Консульство г. Екатеринбург</td>
              <td>12.09.2014</td>
          </tr>
          <tr id="LC1039" class="js-file-line">
            <td id="L1039" class="blob-num js-line-number" data-line-number="1039"></td>
              <td>Х-717142</td>
              <td>2812701</td>
              <td>Рядовой</td>
              <td>Исхаков Олег Олегович</td>
              <td>07.03.1991</td>
              <td>8</td>
              <td>15</td>
              <td>344021</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе г. Хабаро</td>
              <td>в12/3/2015</td>
          </tr>
          <tr id="LC1040" class="js-file-line">
            <td id="L1040" class="blob-num js-line-number" data-line-number="1040"></td>
              <td>Х-821881</td>
              <td>2813854</td>
              <td>Рядовой</td>
              <td>Казейкин Райнгольд Сергеевич</td>
              <td>04.01.1990</td>
              <td>8</td>
              <td>10</td>
              <td>946290</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В РАЙОНЕ ЛАЗО</td>
              <td>7/21/2010</td>
          </tr>
          <tr id="LC1041" class="js-file-line">
            <td id="L1041" class="blob-num js-line-number" data-line-number="1041"></td>
              <td>МТ-182186</td>
              <td>2816704</td>
              <td>Рядовой</td>
              <td>Мушидов Шамиль Курбанович</td>
              <td>05.12.1980</td>
              <td>82</td>
              <td>3</td>
              <td>716644</td>
              <td>Кировским РОВД города Махачкала</td>
              <td>3/26/2016</td>
          </tr>
          <tr id="LC1042" class="js-file-line">
            <td id="L1042" class="blob-num js-line-number" data-line-number="1042"></td>
              <td>СУ-175194</td>
              <td>2821054</td>
              <td>Рядовой</td>
              <td>Терентьев Николай Владиславович</td>
              <td>3/28/1996</td>
              <td>25</td>
              <td>15</td>
              <td>238130</td>
              <td>ТП УФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В БОХАНСКОМ РАЙОНЕ</td>
              <td>4/15/2016</td>
          </tr>
          <tr id="LC1043" class="js-file-line">
            <td id="L1043" class="blob-num js-line-number" data-line-number="1043"></td>
              <td>МТ-131672</td>
              <td>2823732</td>
              <td>Рядовой</td>
              <td>Кузнецов Олег Андреевич</td>
              <td>05.06.1997</td>
              <td>8</td>
              <td>10</td>
              <td>982770</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В БИКИНСКОМ РАЙОНЕ</td>
              <td>07.11.2011</td>
          </tr>
          <tr id="LC1044" class="js-file-line">
            <td id="L1044" class="blob-num js-line-number" data-line-number="1044"></td>
              <td>МТ-103412</td>
              <td>2823749</td>
              <td>Рядовой</td>
              <td>Михайлов Евгений Сергеевич</td>
              <td>3/16/1998</td>
              <td>8</td>
              <td>12</td>
              <td>114999</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В УЛЬЧСКОМ РАЙОНЕ</td>
              <td>2/18/2013</td>
          </tr>
          <tr id="LC1045" class="js-file-line">
            <td id="L1045" class="blob-num js-line-number" data-line-number="1045"></td>
              <td>МТ-131332</td>
              <td>2823750</td>
              <td>Рядовой</td>
              <td>Мишин Владимир Владимирович</td>
              <td>2/20/1997</td>
              <td>8</td>
              <td>17</td>
              <td>445950</td>
              <td>ОУФМС России по Хабаровскому краю и ЕАО и железнодорожном районе г</td>
              <td>5/17/2017</td>
          </tr>
          <tr id="LC1046" class="js-file-line">
            <td id="L1046" class="blob-num js-line-number" data-line-number="1046"></td>
              <td>МТ-204704</td>
              <td>2828256</td>
              <td>Рядовой</td>
              <td>Гладышева Евгения Александровна</td>
              <td>9/20/1995</td>
              <td>8</td>
              <td>15</td>
              <td>331198</td>
              <td>ОУФМС России по Хабаровскому краю в Индустриальном районе города Ха</td>
              <td>10/26/2015</td>
          </tr>
          <tr id="LC1047" class="js-file-line">
            <td id="L1047" class="blob-num js-line-number" data-line-number="1047"></td>
              <td>Х-820732</td>
              <td>2828281</td>
              <td>Рядовой</td>
              <td>Остронков Сергей Александрович</td>
              <td>11/21/1991</td>
              <td>99</td>
              <td>11</td>
              <td>275514</td>
              <td>МО УФМС России по Еврейской Автономной области в с.Ленинское</td>
              <td>06.04.2012</td>
          </tr>
          <tr id="LC1048" class="js-file-line">
            <td id="L1048" class="blob-num js-line-number" data-line-number="1048"></td>
              <td>МТ-182198</td>
              <td>2828293</td>
              <td>Рядовой</td>
              <td>Курбонов Саидо Мирзоалиевич</td>
              <td>11/16/1995</td>
              <td>7</td>
              <td>9</td>
              <td>968404</td>
              <td>ТП УФМС РОССИИ ПО Иркутской Области В КИРЕНСКОМ Р-НЕ</td>
              <td>07.04.2014</td>
          </tr>
          <tr id="LC1049" class="js-file-line">
            <td id="L1049" class="blob-num js-line-number" data-line-number="1049"></td>
              <td>СУ-424199</td>
              <td>2828940</td>
              <td>Рядовой</td>
              <td>Сивцев Михаил Михайлович</td>
              <td>06.06.1997</td>
              <td>98</td>
              <td>11</td>
              <td>343265</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА(ЯКУТИЯ) В ОЙМЯКОНСКОМ РАЙО</td>
              <td>Н7/2/2011</td>
          </tr>
          <tr id="LC1050" class="js-file-line">
            <td id="L1050" class="blob-num js-line-number" data-line-number="1050"></td>
              <td>ВЕ-018647</td>
              <td>2830132</td>
              <td>Рядовой</td>
              <td>Федоров Даниил Владимирович</td>
              <td>04.05.1998</td>
              <td>44</td>
              <td>13</td>
              <td>300216</td>
              <td>ОФМС РОССИИ ПО МАГАДАНСКОЙ ОБЛАСТИ В Г. МАГАДАНЕ</td>
              <td>7/30/2013</td>
          </tr>
          <tr id="LC1051" class="js-file-line">
            <td id="L1051" class="blob-num js-line-number" data-line-number="1051"></td>
              <td>СУ-156326</td>
              <td>2830677</td>
              <td>Рядовой</td>
              <td>Пятков Алексей Михайлович</td>
              <td>2/13/1995</td>
              <td>97</td>
              <td>14</td>
              <td>155315</td>
              <td>ОУФМС РОССИИ ПО ЧУВАШСКОЙ РЕСПУБЛИКЕ В ЛЕНИНСКОМ РАЙОНЕ Г. ЧЕ</td>
              <td>3/18/2015</td>
          </tr>
          <tr id="LC1052" class="js-file-line">
            <td id="L1052" class="blob-num js-line-number" data-line-number="1052"></td>
              <td>СУ-175709</td>
              <td>2831312</td>
              <td>Рядовой</td>
              <td>Петренко Герман Сергеевич</td>
              <td>12/30/1997</td>
              <td>5</td>
              <td>11</td>
              <td>924164</td>
              <td>МРО УФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ ПО ГОРОДСКОМУ ОКРУГУ С</td>
              <td>П1/18/2012</td>
          </tr>
          <tr id="LC1053" class="js-file-line">
            <td id="L1053" class="blob-num js-line-number" data-line-number="1053"></td>
              <td>СУ-424351</td>
              <td>2839297</td>
              <td>Рядовой</td>
              <td>Горохов Юрий Викторович</td>
              <td>01.10.1997</td>
              <td>98</td>
              <td>10</td>
              <td>319952</td>
              <td>ТП УФМС России по Республике Саха (Якутия) в Аллайховском районе</td>
              <td>2/17/2011</td>
          </tr>
          <tr id="LC1054" class="js-file-line">
            <td id="L1054" class="blob-num js-line-number" data-line-number="1054"></td>
              <td>СУ-424495</td>
              <td>2839298</td>
              <td>Рядовой</td>
              <td>Горохов Петр Климович</td>
              <td>3/23/1996</td>
              <td>98</td>
              <td>15</td>
              <td>635117</td>
              <td>МП УФМС России по Республике Саха(Якутия) в Усть-Янском районе</td>
              <td>05.12.2016</td>
          </tr>
          <tr id="LC1055" class="js-file-line">
            <td id="L1055" class="blob-num js-line-number" data-line-number="1055"></td>
              <td>СУ-424476</td>
              <td>2839313</td>
              <td>Рядовой</td>
              <td>Ребров Данил Евгеньевич</td>
              <td>2/19/1998</td>
              <td>98</td>
              <td>12</td>
              <td>415055</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ САХА (ЯКУТИЯ) Г. НЕРЮНГРИ</td>
              <td>9/24/2012</td>
          </tr>
          <tr id="LC1056" class="js-file-line">
            <td id="L1056" class="blob-num js-line-number" data-line-number="1056"></td>
              <td>СУ-424491</td>
              <td>2839318</td>
              <td>Рядовой</td>
              <td>Сыроватский Петр Геннадьевич</td>
              <td>12/24/1995</td>
              <td>98</td>
              <td>15</td>
              <td>635118</td>
              <td>УФМС РОССИИ ПО РЕСП. САХА (ЯКУТИЯ) В УСТЬ-ЯНСКОМ РАЙОНЕ</td>
              <td>05.12.2016</td>
          </tr>
          <tr id="LC1057" class="js-file-line">
            <td id="L1057" class="blob-num js-line-number" data-line-number="1057"></td>
              <td>МТ-103421</td>
              <td>2843121</td>
              <td>Рядовой</td>
              <td>Бочкарев Денис Юрьевич</td>
              <td>5/13/1996</td>
              <td>8</td>
              <td>10</td>
              <td>931695</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖНОМ РАЙОН</td>
              <td>6/29/2010</td>
          </tr>
          <tr id="LC1058" class="js-file-line">
            <td id="L1058" class="blob-num js-line-number" data-line-number="1058"></td>
              <td>МТ-131523</td>
              <td>2843132</td>
              <td>Рядовой</td>
              <td>Виноградов Евгений Сергеевич</td>
              <td>01.04.1997</td>
              <td>8</td>
              <td>12</td>
              <td>86665</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В АМУРСКОМ РАЙОНЕ</td>
              <td>8/20/2012</td>
          </tr>
          <tr id="LC1059" class="js-file-line">
            <td id="L1059" class="blob-num js-line-number" data-line-number="1059"></td>
              <td>МТ-103716</td>
              <td>2843218</td>
              <td>Рядовой</td>
              <td>Крапивников Сергей Витальевич</td>
              <td>11/27/1996</td>
              <td>8</td>
              <td>10</td>
              <td>972733</td>
              <td>ОУФМС РОССИИ ПО ИНДУСТРИАЛЬНОМУ РАЙОНУ ХАБАРОВСКОГО КРАЯ Г. </td>
              <td>Х1/17/2011</td>
          </tr>
          <tr id="LC1060" class="js-file-line">
            <td id="L1060" class="blob-num js-line-number" data-line-number="1060"></td>
              <td>МТ-177038</td>
              <td>2843262</td>
              <td>Рядовой</td>
              <td>Новиков Владимир Андреевич</td>
              <td>11/27/1997</td>
              <td>8</td>
              <td>11</td>
              <td>48273</td>
              <td>МО УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В Г. КОМСОМОЛЬСЕ-НА-АМУ</td>
              <td>12/28/2011</td>
          </tr>
          <tr id="LC1061" class="js-file-line">
            <td id="L1061" class="blob-num js-line-number" data-line-number="1061"></td>
              <td>МТ-131530</td>
              <td>2843268</td>
              <td>Рядовой</td>
              <td>Пассар Алексей Юрьевич</td>
              <td>1/19/1998</td>
              <td>8</td>
              <td>11</td>
              <td>28036</td>
              <td>Отделение УФМС по Хабаровскому краю в Амурском районе</td>
              <td>2/20/2012</td>
          </tr>
          <tr id="LC1062" class="js-file-line">
            <td id="L1062" class="blob-num js-line-number" data-line-number="1062"></td>
              <td>МТ-173493</td>
              <td>2843272</td>
              <td>Рядовой</td>
              <td>Петляк Сергей Андреевич</td>
              <td>12/19/1996</td>
              <td>8</td>
              <td>10</td>
              <td>947184</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕАО В НАНАЙСКОМ РАЙОНЕ</td>
              <td>2/25/2011</td>
          </tr>
          <tr id="LC1063" class="js-file-line">
            <td id="L1063" class="blob-num js-line-number" data-line-number="1063"></td>
              <td>МТ-131087</td>
              <td>2843294</td>
              <td>Рядовой</td>
              <td>Ригов Алексей Дмитриевич</td>
              <td>12.04.1997</td>
              <td>8</td>
              <td>11</td>
              <td>46091</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В СОЛНЕЧНОМ РАЙОНЕ</td>
              <td>4/26/2012</td>
          </tr>
          <tr id="LC1064" class="js-file-line">
            <td id="L1064" class="blob-num js-line-number" data-line-number="1064"></td>
              <td>МТ-244991</td>
              <td>2843585</td>
              <td>Рядовой</td>
              <td>Черкашин Максим Дмитриевич</td>
              <td>8/29/1996</td>
              <td>10</td>
              <td>17</td>
              <td>518333</td>
              <td>отделением УФМС России по Амурской области в Константиновском район</td>
              <td>06.02.2017</td>
          </tr>
          <tr id="LC1065" class="js-file-line">
            <td id="L1065" class="blob-num js-line-number" data-line-number="1065"></td>
              <td>СУ-166261</td>
              <td>2844430</td>
              <td>Рядовой</td>
              <td>Кива Владимир Дмитриевич</td>
              <td>9/15/1996</td>
              <td>94</td>
              <td>10</td>
              <td>120321</td>
              <td>МО УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В ГОРОДЕ САРАПУЛЕ</td>
              <td>10.01.2010</td>
          </tr>
          <tr id="LC1066" class="js-file-line">
            <td id="L1066" class="blob-num js-line-number" data-line-number="1066"></td>
              <td>СУ-166317</td>
              <td>2844456</td>
              <td>Рядовой</td>
              <td>Ельцов Андрей Андреевич</td>
              <td>7/27/1995</td>
              <td>94</td>
              <td>15</td>
              <td>494899</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В УСТИНОВСКОМ </td>
              <td>09.01.2015</td>
          </tr>
          <tr id="LC1067" class="js-file-line">
            <td id="L1067" class="blob-num js-line-number" data-line-number="1067"></td>
              <td>ВС-035333</td>
              <td>2844714</td>
              <td>Рядовой</td>
              <td>Брагин Николай Анатольевич</td>
              <td>02.03.1997</td>
              <td>65</td>
              <td>10</td>
              <td>942587</td>
              <td>ТП УФМС России по Свердловской области в Артинском районе</td>
              <td>03.02.2011</td>
          </tr>
          <tr id="LC1068" class="js-file-line">
            <td id="L1068" class="blob-num js-line-number" data-line-number="1068"></td>
              <td>ВС-035428</td>
              <td>2844717</td>
              <td>Рядовой</td>
              <td>Григурин Андрей Михайлович</td>
              <td>2/23/1998</td>
              <td>65</td>
              <td>12</td>
              <td>558277</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ ТАЛЕЦКОГО РАЙОНА</td>
              <td>1/23/2013</td>
          </tr>
          <tr id="LC1069" class="js-file-line">
            <td id="L1069" class="blob-num js-line-number" data-line-number="1069"></td>
              <td>ВС-035350</td>
              <td>2844718</td>
              <td>Рядовой</td>
              <td>Дьяконов Олег Сергеевич</td>
              <td>02.02.1998</td>
              <td>65</td>
              <td>12</td>
              <td>536872</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В КАМЕНСКОМ РАЙОНЕ</td>
              <td>02.08.2013</td>
          </tr>
          <tr id="LC1070" class="js-file-line">
            <td id="L1070" class="blob-num js-line-number" data-line-number="1070"></td>
              <td>ВС-035434</td>
              <td>2844720</td>
              <td>Рядовой</td>
              <td>Зырянов Сергей Владимирович</td>
              <td>01.05.1998</td>
              <td>65</td>
              <td>12</td>
              <td>508623</td>
              <td>ТП УФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В ТУГУЛЫМСКОМ РАЙОНЕ</td>
              <td>02.04.2013</td>
          </tr>
          <tr id="LC1071" class="js-file-line">
            <td id="L1071" class="blob-num js-line-number" data-line-number="1071"></td>
              <td>ВС-035462</td>
              <td>2844740</td>
              <td>Рядовой</td>
              <td>Потехин Денис Владимирович</td>
              <td>2/13/1996</td>
              <td>65</td>
              <td>15</td>
              <td>140697</td>
              <td>ТП УФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В НИЖНЕСАЛДИНСКОМ РА</td>
              <td>03.09.2016</td>
          </tr>
          <tr id="LC1072" class="js-file-line">
            <td id="L1072" class="blob-num js-line-number" data-line-number="1072"></td>
              <td>ВС-035293</td>
              <td>2844746</td>
              <td>Рядовой</td>
              <td>Сыдыкбеков Саламат Кусейинович</td>
              <td>10/20/1990</td>
              <td>65</td>
              <td>11</td>
              <td>197327</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В СУЛОЖСКОМ РАЙОНЕ</td>
              <td>12.02.2011</td>
          </tr>
          <tr id="LC1073" class="js-file-line">
            <td id="L1073" class="blob-num js-line-number" data-line-number="1073"></td>
              <td>ВС-035466</td>
              <td>2844747</td>
              <td>Рядовой</td>
              <td>Тельнов Александр Эдуардович</td>
              <td>2/17/1981</td>
              <td>65</td>
              <td>11</td>
              <td>329736</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В КРАСНОУФИМСКОМ РАЙО</td>
              <td>3/20/2012</td>
          </tr>
          <tr id="LC1074" class="js-file-line">
            <td id="L1074" class="blob-num js-line-number" data-line-number="1074"></td>
              <td>ВС-035133</td>
              <td>2844751</td>
              <td>Рядовой</td>
              <td>Чебыкин Виктор Вячеславович</td>
              <td>02.02.1998</td>
              <td>65</td>
              <td>11</td>
              <td>299126</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В ЖЕЛЕЗНОДОРОЖНОМ РАЙ</td>
              <td>02.10.2012</td>
          </tr>
          <tr id="LC1075" class="js-file-line">
            <td id="L1075" class="blob-num js-line-number" data-line-number="1075"></td>
              <td>СУ-424341</td>
              <td>2849878</td>
              <td>Рядовой</td>
              <td>Жеравин Рустам Евгеньевич</td>
              <td>8/30/1997</td>
              <td>98</td>
              <td>11</td>
              <td>398557</td>
              <td>ТП УФМС России по Республике Саха (Якутия) в Беленском районе</td>
              <td>5/18/2012</td>
          </tr>
          <tr id="LC1076" class="js-file-line">
            <td id="L1076" class="blob-num js-line-number" data-line-number="1076"></td>
              <td>МТ-247299</td>
              <td>2851919</td>
              <td>Рядовой</td>
              <td>Шемякин Михаил Дмитриевич</td>
              <td>12.08.1997</td>
              <td>76</td>
              <td>11</td>
              <td>571328</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В СРЕТИНСКОМ </td>
              <td>1/18/2012</td>
          </tr>
          <tr id="LC1077" class="js-file-line">
            <td id="L1077" class="blob-num js-line-number" data-line-number="1077"></td>
              <td>МТ-198917</td>
              <td>2851924</td>
              <td>Рядовой</td>
              <td>Артюхов Алексей Александрович</td>
              <td>10.02.1997</td>
              <td>8</td>
              <td>17</td>
              <td>474123</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской Автономной области в К</td>
              <td>11.08.2017</td>
          </tr>
          <tr id="LC1078" class="js-file-line">
            <td id="L1078" class="blob-num js-line-number" data-line-number="1078"></td>
              <td>МТ-198933</td>
              <td>2851953</td>
              <td>Рядовой</td>
              <td>Кислица Александр Дмитриевич</td>
              <td>04.01.1997</td>
              <td>64</td>
              <td>11</td>
              <td>792748</td>
              <td>ТП МРО УФМС РОССИИ ПО САХАЛИНСКОЙ ОБЛАСТИ В ОХИНСКОМ РАЙОНЕ</td>
              <td>07.03.2012</td>
          </tr>
          <tr id="LC1079" class="js-file-line">
            <td id="L1079" class="blob-num js-line-number" data-line-number="1079"></td>
              <td>МТ-198909</td>
              <td>2851966</td>
              <td>Рядовой</td>
              <td>Никифоров Андрей Александрович</td>
              <td>04.06.1997</td>
              <td>64</td>
              <td>10</td>
              <td>761498</td>
              <td>ТП УФМС РОССИИ ПО САХАЛИНСКОЙ ОБЛАСТИ В МАКАРОВСКОМ РАЙОНЕ</td>
              <td>8/24/2011</td>
          </tr>
          <tr id="LC1080" class="js-file-line">
            <td id="L1080" class="blob-num js-line-number" data-line-number="1080"></td>
              <td>ВС-258681</td>
              <td>2858034</td>
              <td>Рядовой</td>
              <td>Елистратов Алексей Сергеевич</td>
              <td>01.05.1996</td>
              <td>75</td>
              <td>15</td>
              <td>727850</td>
              <td>ОУФМС РОССИИ ПО МИАСКОМУ РАЙОНУ ЧЕЛЯБИНСКОЙ ОБЛАСТИ</td>
              <td>1/18/2016</td>
          </tr>
          <tr id="LC1081" class="js-file-line">
            <td id="L1081" class="blob-num js-line-number" data-line-number="1081"></td>
              <td>МТ-182216</td>
              <td>2862920</td>
              <td>Рядовой</td>
              <td>Семиков Денис Константинович</td>
              <td>9/25/1993</td>
              <td>8</td>
              <td>13</td>
              <td>196740</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе г. Хаба</td>
              <td>р10/24/2013</td>
          </tr>
          <tr id="LC1082" class="js-file-line">
            <td id="L1082" class="blob-num js-line-number" data-line-number="1082"></td>
              <td>ВС-105335</td>
              <td>2864727</td>
              <td>Рядовой</td>
              <td>Драненко Александр Александрович</td>
              <td>11.12.1995</td>
              <td>36</td>
              <td>15</td>
              <td>140515</td>
              <td>ТП УФМС России по Самарской области в Богатовском районе</td>
              <td>1/22/2016</td>
          </tr>
          <tr id="LC1083" class="js-file-line">
            <td id="L1083" class="blob-num js-line-number" data-line-number="1083"></td>
              <td>ВС-298193</td>
              <td>2865090</td>
              <td>Рядовой</td>
              <td>Бочкун Артем Олегович</td>
              <td>12.12.1996</td>
              <td>63</td>
              <td>10</td>
              <td>568345</td>
              <td>ОУМФС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В ОЗИНСКОМ РАЙОНЕ</td>
              <td>12/14/2010</td>
          </tr>
          <tr id="LC1084" class="js-file-line">
            <td id="L1084" class="blob-num js-line-number" data-line-number="1084"></td>
              <td>ВС-298208</td>
              <td>2865105</td>
              <td>Рядовой</td>
              <td>Колоколов Евгений Владимирович</td>
              <td>12.11.1996</td>
              <td>63</td>
              <td>15</td>
              <td>237267</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В ГОРОДЕ АТКАР</td>
              <td>С2/9/2016</td>
          </tr>
          <tr id="LC1085" class="js-file-line">
            <td id="L1085" class="blob-num js-line-number" data-line-number="1085"></td>
              <td>ВС-298213</td>
              <td>2865110</td>
              <td>Рядовой</td>
              <td>Минаев Анатолий Андреевич</td>
              <td>8/31/1997</td>
              <td>63</td>
              <td>11</td>
              <td>661795</td>
              <td>оуфмс России по Саратовской области в Советском районе</td>
              <td>9/15/2011</td>
          </tr>
          <tr id="LC1086" class="js-file-line">
            <td id="L1086" class="blob-num js-line-number" data-line-number="1086"></td>
              <td>ВС-298218</td>
              <td>2865115</td>
              <td>Рядовой</td>
              <td>Никитин Алексей Алексеевич</td>
              <td>11/26/1996</td>
              <td>63</td>
              <td>10</td>
              <td>567502</td>
              <td>ТП УФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В НОВОБУРАССКОМ РАЙОН</td>
              <td>Е12/6/2010</td>
          </tr>
          <tr id="LC1087" class="js-file-line">
            <td id="L1087" class="blob-num js-line-number" data-line-number="1087"></td>
              <td>ВС-298224</td>
              <td>2865121</td>
              <td>Рядовой</td>
              <td>Сапаров Денис Александрович</td>
              <td>04.02.1998</td>
              <td>63</td>
              <td>12</td>
              <td>821273</td>
              <td>ОУФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В ГОРОДЕ КРАСНОАРМЕЙСКЕ</td>
              <td>10/18/2012</td>
          </tr>
          <tr id="LC1088" class="js-file-line">
            <td id="L1088" class="blob-num js-line-number" data-line-number="1088"></td>
              <td>МТ-245381</td>
              <td>2866324</td>
              <td>Рядовой</td>
              <td>Гуров Александр Сергеевич</td>
              <td>1/16/1998</td>
              <td>10</td>
              <td>12</td>
              <td>344402</td>
              <td>ОФМС ПО России по Амурской области в г. Тынде</td>
              <td>8/14/2013</td>
          </tr>
          <tr id="LC1089" class="js-file-line">
            <td id="L1089" class="blob-num js-line-number" data-line-number="1089"></td>
              <td>МТ-228902</td>
              <td>2871072</td>
              <td>Рядовой</td>
              <td>Тихонов Дмитрий Александрович</td>
              <td>12/24/1995</td>
              <td>99</td>
              <td>15</td>
              <td>312885</td>
              <td>ОФМС Поссии по Еврейской Автономной обл. в Селе Ленинское</td>
              <td>1/20/2016</td>
          </tr>
          <tr id="LC1090" class="js-file-line">
            <td id="L1090" class="blob-num js-line-number" data-line-number="1090"></td>
              <td>МТ-228865</td>
              <td>2871076</td>
              <td>Рядовой</td>
              <td>Чебанов Андрей Юрьевич</td>
              <td>9/23/1994</td>
              <td>99</td>
              <td>14</td>
              <td>301857</td>
              <td>Межрайонным отделением ОФМС России по ЕАО в г.Биробиджан</td>
              <td>10/14/2014</td>
          </tr>
          <tr id="LC1091" class="js-file-line">
            <td id="L1091" class="blob-num js-line-number" data-line-number="1091"></td>
              <td>МТ-139578</td>
              <td>2873988</td>
              <td>Рядовой</td>
              <td>Гурулёв Дмитрий Петрович</td>
              <td>12/26/1996</td>
              <td>76</td>
              <td>10</td>
              <td>536627</td>
              <td>ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В НЕРЧИНСКОМ РАЙОНЕ</td>
              <td>03.10.2011</td>
          </tr>
          <tr id="LC1092" class="js-file-line">
            <td id="L1092" class="blob-num js-line-number" data-line-number="1092"></td>
              <td>МТ-172051</td>
              <td>2874014</td>
              <td>Рядовой</td>
              <td>Калашников Владислав Олегович</td>
              <td>12/25/1996</td>
              <td>76</td>
              <td>10</td>
              <td>535490</td>
              <td>ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ РАЙОН</td>
              <td>02.03.2011</td>
          </tr>
          <tr id="LC1093" class="js-file-line">
            <td id="L1093" class="blob-num js-line-number" data-line-number="1093"></td>
              <td>ВС-202959</td>
              <td>2876312</td>
              <td>Рядовой</td>
              <td>Капуров Джаммал Артурович</td>
              <td>04.03.1996</td>
              <td>82</td>
              <td>15</td>
              <td>785312</td>
              <td>ОУФМС РОССИИ ПО ХАСАВЮРТСКОМУ РАЙОНУ РЕСП. ДАГЕСТАН</td>
              <td>4/25/2016</td>
          </tr>
          <tr id="LC1094" class="js-file-line">
            <td id="L1094" class="blob-num js-line-number" data-line-number="1094"></td>
              <td>ВС-202955</td>
              <td>2876315</td>
              <td>Рядовой</td>
              <td>Магомедов Рустам Якубович</td>
              <td>9/29/1994</td>
              <td>82</td>
              <td>14</td>
              <td>605068</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ ДАГЕСТАН В КАЗБЕКОВСКОМ РАЙОНЕ</td>
              <td>2/24/2015</td>
          </tr>
          <tr id="LC1095" class="js-file-line">
            <td id="L1095" class="blob-num js-line-number" data-line-number="1095"></td>
              <td>МТ-182224</td>
              <td>2876466</td>
              <td>Рядовой</td>
              <td>Сокоренко Сергей</td>
              <td>6/13/1993</td>
              <td>5</td>
              <td>6</td>
              <td>678789</td>
              <td>ОВД России г. Николаевск-на-Амуре Хабаровского края</td>
              <td>01.01.2015</td>
          </tr>
          <tr id="LC1096" class="js-file-line">
            <td id="L1096" class="blob-num js-line-number" data-line-number="1096"></td>
              <td>МТ-211589</td>
              <td>2876589</td>
              <td>Рядовой</td>
              <td>Демин Алексей Олегович</td>
              <td>06.10.1996</td>
              <td>81</td>
              <td>15</td>
              <td>632883</td>
              <td>МП УФМС РОССИИ ПО РЕСПУБЛИКЕ БУРЯТИЯ В В ТУНКИНСКОМ РАЙОНЕ</td>
              <td>9/29/2015</td>
          </tr>
          <tr id="LC1097" class="js-file-line">
            <td id="L1097" class="blob-num js-line-number" data-line-number="1097"></td>
              <td>СУ-431181</td>
              <td>2876620</td>
              <td>Рядовой</td>
              <td>Колмыков Александр Александрович</td>
              <td>1/30/1998</td>
              <td>81</td>
              <td>11</td>
              <td>449523</td>
              <td>ТП №1 ОУФМС РОССИИ ПО РЕСПУБЛИКЕ БУРЯТИЯ В ОКТЯБРЬСКОМ Р-НЕ ГО</td>
              <td>03.06.2012</td>
          </tr>
          <tr id="LC1098" class="js-file-line">
            <td id="L1098" class="blob-num js-line-number" data-line-number="1098"></td>
              <td>СУ-463038</td>
              <td>2876789</td>
              <td>Рядовой</td>
              <td>Жирков Петр Афанасьевич</td>
              <td>2/24/1997</td>
              <td>98</td>
              <td>10</td>
              <td>318507</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА (ЯКУТИЯ) В АМИНСКОМ РАЙОНЕ</td>
              <td>3/24/2011</td>
          </tr>
          <tr id="LC1099" class="js-file-line">
            <td id="L1099" class="blob-num js-line-number" data-line-number="1099"></td>
              <td>МТ-228907</td>
              <td>2876891</td>
              <td>Рядовой</td>
              <td>Глушко Владислав Владимирович</td>
              <td>10/26/1996</td>
              <td>99</td>
              <td>10</td>
              <td>261422</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В РАЙОНЕ ИМЕНИ ЛАЗО</td>
              <td>12.04.2010</td>
          </tr>
          <tr id="LC1100" class="js-file-line">
            <td id="L1100" class="blob-num js-line-number" data-line-number="1100"></td>
              <td>СУ-282430</td>
              <td>2877086</td>
              <td>Рядовой</td>
              <td>Большешапов Александр Леонидович</td>
              <td>1/14/1998</td>
              <td>25</td>
              <td>12</td>
              <td>712221</td>
              <td>ОУФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В Г. БРАТСКЕ И БРАТСКОМ РАЙО</td>
              <td>Н7/11/2012</td>
          </tr>
          <tr id="LC1101" class="js-file-line">
            <td id="L1101" class="blob-num js-line-number" data-line-number="1101"></td>
              <td>ВС-251206</td>
              <td>2877823</td>
              <td>Рядовой</td>
              <td>Рачев Вадим Сергеевич</td>
              <td>01.07.1996</td>
              <td>57</td>
              <td>15</td>
              <td>388064</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ В ГОР. ЛЫСЬВА</td>
              <td>02.04.2016</td>
          </tr>
          <tr id="LC1102" class="js-file-line">
            <td id="L1102" class="blob-num js-line-number" data-line-number="1102"></td>
              <td>МТ-221693</td>
              <td>2879919</td>
              <td>Рядовой</td>
              <td>Бянкин Роман Сергеевич</td>
              <td>1/26/1998</td>
              <td>76</td>
              <td>11</td>
              <td>584623</td>
              <td>Отделение УФМС Росии по Приморскому краю в Красноармейском муници</td>
              <td>02.10.2012</td>
          </tr>
          <tr id="LC1103" class="js-file-line">
            <td id="L1103" class="blob-num js-line-number" data-line-number="1103"></td>
              <td>МТ-139023</td>
              <td>2879943</td>
              <td>Рядовой</td>
              <td>Дубровский Александр Евгеньевич</td>
              <td>10/25/1997</td>
              <td>76</td>
              <td>13</td>
              <td>685998</td>
              <td>ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В ЧЕРНЫШЕВСКОМ РАЙОНЕ</td>
              <td>5/27/2013</td>
          </tr>
          <tr id="LC1104" class="js-file-line">
            <td id="L1104" class="blob-num js-line-number" data-line-number="1104"></td>
              <td>МТ-247741</td>
              <td>2880020</td>
              <td>Рядовой</td>
              <td>Осканян Эдуард Эдуардович</td>
              <td>5/24/1996</td>
              <td>76</td>
              <td>16</td>
              <td>881367</td>
              <td>Отделением УФМС России по Забайкальскому краю в Черновском районе г</td>
              <td>5/26/2016</td>
          </tr>
          <tr id="LC1105" class="js-file-line">
            <td id="L1105" class="blob-num js-line-number" data-line-number="1105"></td>
              <td>МТ-247058</td>
              <td>2880024</td>
              <td>Рядовой</td>
              <td>Петров Максим Сергеевич</td>
              <td>03.04.1997</td>
              <td>76</td>
              <td>11</td>
              <td>567115</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В ШИЛКИНСКО</td>
              <td>М11/2/2011</td>
          </tr>
          <tr id="LC1106" class="js-file-line">
            <td id="L1106" class="blob-num js-line-number" data-line-number="1106"></td>
              <td>МТ-139030</td>
              <td>2880035</td>
              <td>Рядовой</td>
              <td>Простакишин Никита Сергеевич</td>
              <td>02.02.1996</td>
              <td>76</td>
              <td>15</td>
              <td>858644</td>
              <td>ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В ЧЕРНЫШЕВСКОМ РАЙОНЕ</td>
              <td>2/17/2016</td>
          </tr>
          <tr id="LC1107" class="js-file-line">
            <td id="L1107" class="blob-num js-line-number" data-line-number="1107"></td>
              <td>ВС-105902</td>
              <td>2880406</td>
              <td>Рядовой</td>
              <td>Чернявский Александр Алексеевич</td>
              <td>04.04.1998</td>
              <td>36</td>
              <td>12</td>
              <td>616846</td>
              <td>ОУФМС РОССИИ ПО САМАРСКОЙ ОБЛАСТИ В КИНЕЛЬСКОМ РАЙОНЕ</td>
              <td>6/20/2012</td>
          </tr>
          <tr id="LC1108" class="js-file-line">
            <td id="L1108" class="blob-num js-line-number" data-line-number="1108"></td>
              <td>ВС-105729</td>
              <td>2880496</td>
              <td>Рядовой</td>
              <td>Абкаимов Ремзи Эмильевич</td>
              <td>7/22/1996</td>
              <td>36</td>
              <td>10</td>
              <td>276011</td>
              <td>ОУФМС РОССИИ ПО САМАРСКОЙ ОБЛАСТИ В СТАВРОПОЛЬСКОМ РАЙОНЕ</td>
              <td>9/18/2010</td>
          </tr>
          <tr id="LC1109" class="js-file-line">
            <td id="L1109" class="blob-num js-line-number" data-line-number="1109"></td>
              <td>ВС-105753</td>
              <td>2880507</td>
              <td>Рядовой</td>
              <td>Кислицин Никита Васильевич</td>
              <td>04.01.1996</td>
              <td>36</td>
              <td>16</td>
              <td>215704</td>
              <td>ОУФМС РОССИИ ПО САМАРСКОЙ ОБЛАСТИ В АВТОЗАВОДСКОМ РАЙОНЕ</td>
              <td>05.10.2016</td>
          </tr>
          <tr id="LC1110" class="js-file-line">
            <td id="L1110" class="blob-num js-line-number" data-line-number="1110"></td>
              <td>ВС-069038</td>
              <td>2881022</td>
              <td>Рядовой</td>
              <td>Лукьянчиков Иван Михайлович</td>
              <td>2/19/1998</td>
              <td>1</td>
              <td>11</td>
              <td>734496</td>
              <td>ОУФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. ШИПУНОВО</td>
              <td>3/30/2012</td>
          </tr>
          <tr id="LC1111" class="js-file-line">
            <td id="L1111" class="blob-num js-line-number" data-line-number="1111"></td>
              <td>ЕХ-788831</td>
              <td>2884571</td>
              <td>Рядовой</td>
              <td>Салов Александр Викторович</td>
              <td>1/25/1998</td>
              <td>50</td>
              <td>10</td>
              <td>806084</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В ТАТАРСКОМ РАЙОНЕ</td>
              <td>2/27/2012</td>
          </tr>
          <tr id="LC1112" class="js-file-line">
            <td id="L1112" class="blob-num js-line-number" data-line-number="1112"></td>
              <td>ВС-124140</td>
              <td>2884792</td>
              <td>Рядовой</td>
              <td>Былинцев Даниил Васильевич</td>
              <td>01.06.1998</td>
              <td>92</td>
              <td>16</td>
              <td>22520</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО РЕСПУБЛИКЕ ТАТАРСТАН В ВАХИТОВСКОМ РА</td>
              <td>Й4/16/2016</td>
          </tr>
          <tr id="LC1113" class="js-file-line">
            <td id="L1113" class="blob-num js-line-number" data-line-number="1113"></td>
              <td>СУ-145722</td>
              <td>2888228</td>
              <td>Рядовой</td>
              <td>Еремин Владислав Алексеевич</td>
              <td>06.05.1996</td>
              <td>65</td>
              <td>16</td>
              <td>239153</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В Г. ВЕРХНЯЯ САЛД</td>
              <td>06.08.2016</td>
          </tr>
          <tr id="LC1114" class="js-file-line">
            <td id="L1114" class="blob-num js-line-number" data-line-number="1114"></td>
              <td>ВС-389651</td>
              <td>2893782</td>
              <td>Рядовой</td>
              <td>Чупраков Кирилл Андреевич</td>
              <td>2/25/1998</td>
              <td>4</td>
              <td>11</td>
              <td>278763</td>
              <td>ОУФМС РОССИИ ПО КРАСНОДАРСКОМУ КРАЮ В БОГУЧАНСКОМ РАЙОНЕ С. </td>
              <td>3/20/2012</td>
          </tr>
          <tr id="LC1115" class="js-file-line">
            <td id="L1115" class="blob-num js-line-number" data-line-number="1115"></td>
              <td>ВС-263850</td>
              <td>2893987</td>
              <td>Рядовой</td>
              <td>Василенко Данил Константинович</td>
              <td>2/21/1998</td>
              <td>75</td>
              <td>12</td>
              <td>54289</td>
              <td>ОТДЛЕНИЕМ №3 УФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В ЛЕНИНСКО</td>
              <td>М4/10/2012</td>
          </tr>
          <tr id="LC1116" class="js-file-line">
            <td id="L1116" class="blob-num js-line-number" data-line-number="1116"></td>
              <td>ВС-263866</td>
              <td>2894031</td>
              <td>Рядовой</td>
              <td>Смольников Максим Олегович</td>
              <td>5/30/1996</td>
              <td>75</td>
              <td>15</td>
              <td>768874</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В КАТАВ-ИВАНОВСКОМ РАЙО</td>
              <td>06.04.2016</td>
          </tr>
          <tr id="LC1117" class="js-file-line">
            <td id="L1117" class="blob-num js-line-number" data-line-number="1117"></td>
              <td>ВС-263868</td>
              <td>2894035</td>
              <td>Рядовой</td>
              <td>Суровцев Игорь Иванович</td>
              <td>6/24/1995</td>
              <td>75</td>
              <td>15</td>
              <td>636102</td>
              <td>МО УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г.БЛАГОВЕЩЕНСК</td>
              <td>7/29/2015</td>
          </tr>
          <tr id="LC1118" class="js-file-line">
            <td id="L1118" class="blob-num js-line-number" data-line-number="1118"></td>
              <td>СУ-282401</td>
              <td>2895331</td>
              <td>Рядовой</td>
              <td>Бобков Артем Валерьевич</td>
              <td>02.04.1994</td>
              <td>25</td>
              <td>13</td>
              <td>939427</td>
              <td>МО УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В ГОРОДЕ БЕЛОГОРСКЕ</td>
              <td>3/17/2014</td>
          </tr>
          <tr id="LC1119" class="js-file-line">
            <td id="L1119" class="blob-num js-line-number" data-line-number="1119"></td>
              <td>ВС-056215</td>
              <td>2895753</td>
              <td>Рядовой</td>
              <td>Монгуш Болат Мергенович</td>
              <td>11/24/1997</td>
              <td>93</td>
              <td>11</td>
              <td>449960</td>
              <td>ТП ОУФМС РОССИИ ПО РЕСПУБЛИКЕ ТЫВА В СУТ-ХОЛЬСКОМ РАЙОНЕ</td>
              <td>10/25/2012</td>
          </tr>
          <tr id="LC1120" class="js-file-line">
            <td id="L1120" class="blob-num js-line-number" data-line-number="1120"></td>
              <td>ВС-106462</td>
              <td>2900960</td>
              <td>Рядовой</td>
              <td>Слободян Влад Олегович</td>
              <td>5/23/1997</td>
              <td>36</td>
              <td>10</td>
              <td>399617</td>
              <td>УФМС России по Самарской обл. В Нефтегорском и Алексеевском р-не</td>
              <td>5/28/2011</td>
          </tr>
          <tr id="LC1121" class="js-file-line">
            <td id="L1121" class="blob-num js-line-number" data-line-number="1121"></td>
              <td>ВС-251612</td>
              <td>2902377</td>
              <td>Рядовой</td>
              <td>Баранов Игорь Владимирович</td>
              <td>1/13/1996</td>
              <td>57</td>
              <td>15</td>
              <td>376537</td>
              <td> </td>
              <td>02.04.2016</td>
          </tr>
          <tr id="LC1122" class="js-file-line">
            <td id="L1122" class="blob-num js-line-number" data-line-number="1122"></td>
              <td>ВС-048369</td>
              <td>2905262</td>
              <td>Рядовой</td>
              <td>Сопов Юрий Викторович</td>
              <td>06.07.1997</td>
              <td>50</td>
              <td>10</td>
              <td>789016</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В КАРАСУКСКОМ РАЙОНЕ</td>
              <td>6/17/2011</td>
          </tr>
          <tr id="LC1123" class="js-file-line">
            <td id="L1123" class="blob-num js-line-number" data-line-number="1123"></td>
              <td>МТ-247238</td>
              <td>2906275</td>
              <td>Рядовой</td>
              <td>Паршонов Мунко Батожаргалович</td>
              <td>9/23/1994</td>
              <td>76</td>
              <td>14</td>
              <td>749631</td>
              <td>ТП ШЕРЛОВАЯ КОРА ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В БОРЗИ</td>
              <td>10/27/2014</td>
          </tr>
          <tr id="LC1124" class="js-file-line">
            <td id="L1124" class="blob-num js-line-number" data-line-number="1124"></td>
              <td>МТ-103086</td>
              <td>2906654</td>
              <td>Рядовой</td>
              <td>Белов Иван Павлович</td>
              <td>1/29/1998</td>
              <td>8</td>
              <td>15</td>
              <td>345423</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В КИРОВСКОМ И КРАСНОФЛОТ</td>
              <td>С11/25/2015</td>
          </tr>
          <tr id="LC1125" class="js-file-line">
            <td id="L1125" class="blob-num js-line-number" data-line-number="1125"></td>
              <td>МТ-131092</td>
              <td>2906727</td>
              <td>Рядовой</td>
              <td>Князев Виктор Вадимович</td>
              <td>12.05.1996</td>
              <td>8</td>
              <td>10</td>
              <td>945155</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ГО</td>
              <td>1/31/2011</td>
          </tr>
          <tr id="LC1126" class="js-file-line">
            <td id="L1126" class="blob-num js-line-number" data-line-number="1126"></td>
              <td>МТ-103138</td>
              <td>2906775</td>
              <td>Рядовой</td>
              <td>Муковозов Николай Алексеевич</td>
              <td>12/19/1996</td>
              <td>8</td>
              <td>10</td>
              <td>986924</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В СЕВЕРНОМ РАЙОНЕ Г.ХАБАРОВ</td>
              <td>С2/9/2011</td>
          </tr>
          <tr id="LC1127" class="js-file-line">
            <td id="L1127" class="blob-num js-line-number" data-line-number="1127"></td>
              <td>МТ-228973</td>
              <td>2906887</td>
              <td>Рядовой</td>
              <td>Козин Николай Сергеевич</td>
              <td>12/18/1996</td>
              <td>99</td>
              <td>10</td>
              <td>264933</td>
              <td>Межрайонным отделением УФМС России по ЕАО г. Биробиджан</td>
              <td>3/16/2011</td>
          </tr>
          <tr id="LC1128" class="js-file-line">
            <td id="L1128" class="blob-num js-line-number" data-line-number="1128"></td>
              <td>ВС-298669</td>
              <td>2909349</td>
              <td>Рядовой</td>
              <td>Сырокваш Михаил Михайлович</td>
              <td>3/23/1995</td>
              <td>63</td>
              <td>14</td>
              <td>138765</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В КРАСНОФЛОТСКОМ РАЙОНЕ Г.</td>
              <td>Х4/1/2015</td>
          </tr>
          <tr id="LC1129" class="js-file-line">
            <td id="L1129" class="blob-num js-line-number" data-line-number="1129"></td>
              <td>ВС-016372</td>
              <td>2915612</td>
              <td>Рядовой</td>
              <td>Сопов Максим Евгеньевич</td>
              <td>04.06.1997</td>
              <td>32</td>
              <td>13</td>
              <td>323222</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО КЕМЕРОВСКОЙ ОБЛАСТИ В ПРОМЫШЛЕН</td>
              <td>С9/7/2013</td>
          </tr>
          <tr id="LC1130" class="js-file-line">
            <td id="L1130" class="blob-num js-line-number" data-line-number="1130"></td>
              <td>ВС-016376</td>
              <td>2915616</td>
              <td>Рядовой</td>
              <td>Фомичев Андрей Павлович</td>
              <td>12.12.1997</td>
              <td>32</td>
              <td>11</td>
              <td>76231</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО КЕМЕРОВСКОЙ ОБЛАСТИ В ПРОМЫШЛЕННОВ</td>
              <td>12/14/2011</td>
          </tr>
          <tr id="LC1131" class="js-file-line">
            <td id="L1131" class="blob-num js-line-number" data-line-number="1131"></td>
              <td>ВС-069958</td>
              <td>2918973</td>
              <td>Рядовой</td>
              <td>Анфимов Николай Русланович</td>
              <td>4/14/1996</td>
              <td>1</td>
              <td>16</td>
              <td>217358</td>
              <td>ТП ОУФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ И РЕСПУБЛИКИ АЛТАЙ В ИНДУ</td>
              <td>С4/26/2016</td>
          </tr>
          <tr id="LC1132" class="js-file-line">
            <td id="L1132" class="blob-num js-line-number" data-line-number="1132"></td>
              <td>ВС-070128</td>
              <td>2918974</td>
              <td>Рядовой</td>
              <td>Барановский Владимир Федорович</td>
              <td>8/16/1996</td>
              <td>8</td>
              <td>16</td>
              <td>420378</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕАО В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>1/20/2017</td>
          </tr>
          <tr id="LC1133" class="js-file-line">
            <td id="L1133" class="blob-num js-line-number" data-line-number="1133"></td>
              <td>ВС-069962</td>
              <td>2918977</td>
              <td>Рядовой</td>
              <td>Болгов Артем Андреевич</td>
              <td>5/13/1996</td>
              <td>1</td>
              <td>16</td>
              <td>230171</td>
              <td>УФМС РОССИИ ПО АЛТАЙКОМУ КРАЮ Г.БАРНАУЛА</td>
              <td>6/21/2016</td>
          </tr>
          <tr id="LC1134" class="js-file-line">
            <td id="L1134" class="blob-num js-line-number" data-line-number="1134"></td>
              <td>ВС-069984</td>
              <td>2918993</td>
              <td>Рядовой</td>
              <td>Глазков Андрей Сергеевич</td>
              <td>10.03.1996</td>
              <td>1</td>
              <td>16</td>
              <td>298472</td>
              <td>Отдел УФМС России по Алтайскому краю и республике Алтай в г. Рубцовске</td>
              <td>1/20/2017</td>
          </tr>
          <tr id="LC1135" class="js-file-line">
            <td id="L1135" class="blob-num js-line-number" data-line-number="1135"></td>
              <td>ВС-069980</td>
              <td>2918994</td>
              <td>Рядовой</td>
              <td>Грибов Николай Игоревич</td>
              <td>2/13/1997</td>
              <td>1</td>
              <td>10</td>
              <td>608704</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В ЛЕНИНСКОМ РАЙОНЕ Г</td>
              <td>03.05.2011</td>
          </tr>
          <tr id="LC1136" class="js-file-line">
            <td id="L1136" class="blob-num js-line-number" data-line-number="1136"></td>
              <td>ВС-069945</td>
              <td>2918995</td>
              <td>Рядовой</td>
              <td>Докучаев Сергей Николаевич</td>
              <td>1/23/1998</td>
              <td>1</td>
              <td>11</td>
              <td>703007</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. ЗАВЬЯЛОВО</td>
              <td>2/14/2012</td>
          </tr>
          <tr id="LC1137" class="js-file-line">
            <td id="L1137" class="blob-num js-line-number" data-line-number="1137"></td>
              <td>ВС-069963</td>
              <td>2918998</td>
              <td>Рядовой</td>
              <td>Зданюкевич Евгений Генрихович</td>
              <td>6/25/1997</td>
              <td>1</td>
              <td>11</td>
              <td>621365</td>
              <td>ТП Восточный УФМС России по Алтайскому краю</td>
              <td>7/27/2011</td>
          </tr>
          <tr id="LC1138" class="js-file-line">
            <td id="L1138" class="blob-num js-line-number" data-line-number="1138"></td>
              <td>ВС-069851</td>
              <td>2919011</td>
              <td>Рядовой</td>
              <td>Кабанов Евгений Владимирович</td>
              <td>12/31/1996</td>
              <td>1</td>
              <td>10</td>
              <td>569662</td>
              <td>ОУФМС России по Алтайскому краю в рес. Алтай по г. Алейску и Алейскому</td>
              <td> 2/1/2011</td>
          </tr>
          <tr id="LC1139" class="js-file-line">
            <td id="L1139" class="blob-num js-line-number" data-line-number="1139"></td>
              <td>ВС-069935</td>
              <td>2919016</td>
              <td>Рядовой</td>
              <td>Кондратенко Алексей Романович</td>
              <td>08.01.1997</td>
              <td>1</td>
              <td>10</td>
              <td>564064</td>
              <td>ОУФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ ПО Г. СЛАВГОРОДУ И СЛАВГОРОД</td>
              <td>С8/18/2011</td>
          </tr>
          <tr id="LC1140" class="js-file-line">
            <td id="L1140" class="blob-num js-line-number" data-line-number="1140"></td>
              <td>ВС-069922</td>
              <td>2919044</td>
              <td>Рядовой</td>
              <td>Маслов Олег Евгеньевич</td>
              <td>9/17/1996</td>
              <td>1</td>
              <td>10</td>
              <td>487961</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. КЛЮЧИ</td>
              <td>10.04.2010</td>
          </tr>
          <tr id="LC1141" class="js-file-line">
            <td id="L1141" class="blob-num js-line-number" data-line-number="1141"></td>
              <td>ВС-069944</td>
              <td>2919048</td>
              <td>Рядовой</td>
              <td>Наумов Владислав Владимирович</td>
              <td>4/26/1995</td>
              <td>1</td>
              <td>15</td>
              <td>94039</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. КЛЮЧИ</td>
              <td>5/13/2015</td>
          </tr>
          <tr id="LC1142" class="js-file-line">
            <td id="L1142" class="blob-num js-line-number" data-line-number="1142"></td>
              <td>ВС-070084</td>
              <td>2919152</td>
              <td>Рядовой</td>
              <td>Пайметов Виктор Александрович</td>
              <td>08.01.1997</td>
              <td>65</td>
              <td>11</td>
              <td>320558</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В МИХАЙЛОВСКОМ РАЙОНЕ</td>
              <td>08.06.2012</td>
          </tr>
          <tr id="LC1143" class="js-file-line">
            <td id="L1143" class="blob-num js-line-number" data-line-number="1143"></td>
              <td>СУ-176633</td>
              <td>2919884</td>
              <td>Рядовой</td>
              <td>Семанин Вячеслав Денисович</td>
              <td>01.12.1998</td>
              <td>50</td>
              <td>11</td>
              <td>903840</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В АМУРСКОМ РАЙОНЕ</td>
              <td>1/25/2012</td>
          </tr>
          <tr id="LC1144" class="js-file-line">
            <td id="L1144" class="blob-num js-line-number" data-line-number="1144"></td>
              <td>ВС-018134</td>
              <td>2920568</td>
              <td>Рядовой</td>
              <td>Габдинов Радмир Каримович</td>
              <td>5/22/1996</td>
              <td>63</td>
              <td>15</td>
              <td>252126</td>
              <td>ТП УФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В ПЕРЕЛЮБСКОМ РАЙОНЕ</td>
              <td>06.09.2016</td>
          </tr>
          <tr id="LC1145" class="js-file-line">
            <td id="L1145" class="blob-num js-line-number" data-line-number="1145"></td>
              <td>ВС-018184</td>
              <td>2921321</td>
              <td>Рядовой</td>
              <td>Жданов Алексей Николаевич</td>
              <td>6/23/1998</td>
              <td>63</td>
              <td>11</td>
              <td>745229</td>
              <td>ТП УФМС России по Саратовской области в Романовском районе</td>
              <td>07.12.2012</td>
          </tr>
          <tr id="LC1146" class="js-file-line">
            <td id="L1146" class="blob-num js-line-number" data-line-number="1146"></td>
              <td>ВС-051586</td>
              <td>2924243</td>
              <td>Рядовой</td>
              <td>Егоров Николай Олегович</td>
              <td>5/24/1994</td>
              <td>94</td>
              <td>14</td>
              <td>429670</td>
              <td>ОФМС России по Удмуртской республике в малопургинском районе</td>
              <td>07.02.2014</td>
          </tr>
          <tr id="LC1147" class="js-file-line">
            <td id="L1147" class="blob-num js-line-number" data-line-number="1147"></td>
              <td>ВС-051600</td>
              <td>2924278</td>
              <td>Рядовой</td>
              <td>Лагунов Яков Валериевич</td>
              <td>02.07.1997</td>
              <td>94</td>
              <td>10</td>
              <td>155461</td>
              <td>МО УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В Г. ГЛАЗОВЕ</td>
              <td>2/17/2011</td>
          </tr>
          <tr id="LC1148" class="js-file-line">
            <td id="L1148" class="blob-num js-line-number" data-line-number="1148"></td>
              <td>ВС-051601</td>
              <td>2924279</td>
              <td>Рядовой</td>
              <td>Любимов Игорь Владимирович</td>
              <td>1/25/1998</td>
              <td>94</td>
              <td>11</td>
              <td>221202</td>
              <td>ОУФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В ЗАВЬЯЛОВСКОМ РАЙОНЕ</td>
              <td>2/14/2012</td>
          </tr>
          <tr id="LC1149" class="js-file-line">
            <td id="L1149" class="blob-num js-line-number" data-line-number="1149"></td>
              <td>ВС-051603</td>
              <td>2924301</td>
              <td>Рядовой</td>
              <td>Макаров Дмитрий Алексеевич</td>
              <td>02.11.1998</td>
              <td>94</td>
              <td>11</td>
              <td>236683</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В ИНДУСТРИА</td>
              <td>Л2/21/2012</td>
          </tr>
          <tr id="LC1150" class="js-file-line">
            <td id="L1150" class="blob-num js-line-number" data-line-number="1150"></td>
              <td>ВС-051616</td>
              <td>2924334</td>
              <td>Рядовой</td>
              <td>Тарасов Владислав Олегович</td>
              <td>06.08.1998</td>
              <td>94</td>
              <td>12</td>
              <td>270356</td>
              <td>Отделом УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В УСТИНОВСКОМ Р</td>
              <td>А6/19/2012</td>
          </tr>
          <tr id="LC1151" class="js-file-line">
            <td id="L1151" class="blob-num js-line-number" data-line-number="1151"></td>
              <td>ВС-051620</td>
              <td>2924338</td>
              <td>Рядовой</td>
              <td>Филиппов Андрей Алексеевич</td>
              <td>11.06.1995</td>
              <td>94</td>
              <td>15</td>
              <td>522200</td>
              <td>МО УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В ПГТ.ИГРА</td>
              <td>11/30/2015</td>
          </tr>
          <tr id="LC1152" class="js-file-line">
            <td id="L1152" class="blob-num js-line-number" data-line-number="1152"></td>
              <td>ВС-051622</td>
              <td>2924361</td>
              <td>Рядовой</td>
              <td>Шахтарин Кирилл Андреевич</td>
              <td>5/18/1997</td>
              <td>94</td>
              <td>11</td>
              <td>183811</td>
              <td>МО УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ Г. МОЖГА</td>
              <td>09.07.2011</td>
          </tr>
          <tr id="LC1153" class="js-file-line">
            <td id="L1153" class="blob-num js-line-number" data-line-number="1153"></td>
              <td>МТ-245456</td>
              <td>2928688</td>
              <td>Рядовой</td>
              <td>Бойко Юрий Александрович</td>
              <td>7/13/1993</td>
              <td>10</td>
              <td>13</td>
              <td>351138</td>
              <td>отделением УФМС России по Абурской обл. Серывшком р-оне</td>
              <td>7/30/2013</td>
          </tr>
          <tr id="LC1154" class="js-file-line">
            <td id="L1154" class="blob-num js-line-number" data-line-number="1154"></td>
              <td>ВЕ-018968</td>
              <td>2929123</td>
              <td>Рядовой</td>
              <td>Бутымов Олег Андреевич</td>
              <td>01.11.1998</td>
              <td>44</td>
              <td>12</td>
              <td>289510</td>
              <td>ТП УФМС по Магаданской области в Ольском районе</td>
              <td>5/31/2012</td>
          </tr>
          <tr id="LC1155" class="js-file-line">
            <td id="L1155" class="blob-num js-line-number" data-line-number="1155"></td>
              <td>МТ-131953</td>
              <td>2930563</td>
              <td>Рядовой</td>
              <td>Чиненов Валерий Игоревич</td>
              <td>4/23/1996</td>
              <td>21</td>
              <td>29</td>
              <td>459011</td>
              <td>ОУФМС России по Амурской обл. в Октябрьском р-не</td>
              <td>08.12.2010</td>
          </tr>
          <tr id="LC1156" class="js-file-line">
            <td id="L1156" class="blob-num js-line-number" data-line-number="1156"></td>
              <td>МТ-137509</td>
              <td>2930597</td>
              <td>Рядовой</td>
              <td>Пескарев Сергей Олегович</td>
              <td>5/13/1997</td>
              <td>99</td>
              <td>15</td>
              <td>312828</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА(ЯКУТИЯ) В СУНТАРСКОМ РАЙОНЕ</td>
              <td>5/24/2016</td>
          </tr>
          <tr id="LC1157" class="js-file-line">
            <td id="L1157" class="blob-num js-line-number" data-line-number="1157"></td>
              <td>ВС-288784</td>
              <td>2931657</td>
              <td>Рядовой</td>
              <td>Курушин Вячеслав Вадимович</td>
              <td>10/20/1997</td>
              <td>65</td>
              <td>11</td>
              <td>310941</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В Г. СЕРОВЕ</td>
              <td>2/29/2012</td>
          </tr>
          <tr id="LC1158" class="js-file-line">
            <td id="L1158" class="blob-num js-line-number" data-line-number="1158"></td>
              <td>ВС-288650</td>
              <td>2931673</td>
              <td>Рядовой</td>
              <td>Моторин Константин Сергеевич</td>
              <td>10.09.1996</td>
              <td>65</td>
              <td>10</td>
              <td>923950</td>
              <td>УФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В РУИНСКОМ РАЙОНЕ</td>
              <td>11/18/2010</td>
          </tr>
          <tr id="LC1159" class="js-file-line">
            <td id="L1159" class="blob-num js-line-number" data-line-number="1159"></td>
              <td>ВС-288592</td>
              <td>2931701</td>
              <td>Рядовой</td>
              <td>Шурыгин Сергей Николаевич</td>
              <td>04.06.1998</td>
              <td>65</td>
              <td>12</td>
              <td>402502</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В ТАЛИЦКОМ РАЙОНЕ</td>
              <td>6/19/2012</td>
          </tr>
          <tr id="LC1160" class="js-file-line">
            <td id="L1160" class="blob-num js-line-number" data-line-number="1160"></td>
              <td>ВС-122344</td>
              <td>2931742</td>
              <td>Рядовой</td>
              <td>Домрачев Алексей Сергеевич</td>
              <td>02.07.1997</td>
              <td>65</td>
              <td>11</td>
              <td>85709</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ</td>
              <td>03.01.2011</td>
          </tr>
          <tr id="LC1161" class="js-file-line">
            <td id="L1161" class="blob-num js-line-number" data-line-number="1161"></td>
              <td>ВС-288503</td>
              <td>2931975</td>
              <td>Рядовой</td>
              <td>Хурамшин Артем Ильнурович</td>
              <td>10.09.1996</td>
              <td>65</td>
              <td>9</td>
              <td>814369</td>
              <td>ТП УФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В АЧИТСКОМ РАЙОНЕ</td>
              <td>10/26/2010</td>
          </tr>
          <tr id="LC1162" class="js-file-line">
            <td id="L1162" class="blob-num js-line-number" data-line-number="1162"></td>
              <td>МТ-247868</td>
              <td>2935739</td>
              <td>Рядовой</td>
              <td>Лавров Александр Алексеевич</td>
              <td>1/15/1997</td>
              <td>76</td>
              <td>10</td>
              <td>539458</td>
              <td>ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ ЦЕНТРАЛЬНОГО РАЙОНА Г. Ч</td>
              <td>2/24/2011</td>
          </tr>
          <tr id="LC1163" class="js-file-line">
            <td id="L1163" class="blob-num js-line-number" data-line-number="1163"></td>
              <td>МТ-172204</td>
              <td>2935768</td>
              <td>Рядовой</td>
              <td>Русу Алексей Сергеевич</td>
              <td>1/18/1996</td>
              <td>76</td>
              <td>15</td>
              <td>859628</td>
              <td>ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В ИНГОДИНСКОМ РАЙОНЕ Г.</td>
              <td>1/26/2016</td>
          </tr>
          <tr id="LC1164" class="js-file-line">
            <td id="L1164" class="blob-num js-line-number" data-line-number="1164"></td>
              <td>МТ-177305</td>
              <td>2935959</td>
              <td>Рядовой</td>
              <td>Добромильский Сергей Александрович</td>
              <td>07.07.1997</td>
              <td>8</td>
              <td>10</td>
              <td>980525</td>
              <td>ОУФМС России по Хабаровскому краю в Верхнебуреинском районе</td>
              <td>8/15/2011</td>
          </tr>
          <tr id="LC1165" class="js-file-line">
            <td id="L1165" class="blob-num js-line-number" data-line-number="1165"></td>
              <td>МТ-103569</td>
              <td>2935961</td>
              <td>Рядовой</td>
              <td>Дымбрылов Эрдэм Баирович</td>
              <td>5/14/1996</td>
              <td>57</td>
              <td>64</td>
              <td>641684</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА (ЯКУТИЯ) В ПОС. ЧУЛЬМАН НЕРЮН</td>
              <td>01.08.2010</td>
          </tr>
          <tr id="LC1166" class="js-file-line">
            <td id="L1166" class="blob-num js-line-number" data-line-number="1166"></td>
              <td>МТ-177222</td>
              <td>2936020</td>
              <td>Рядовой</td>
              <td>Сафонов Артём Владимирович</td>
              <td>2/22/1997</td>
              <td>8</td>
              <td>10</td>
              <td>998980</td>
              <td>ОУФМС ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>05.05.2011</td>
          </tr>
          <tr id="LC1167" class="js-file-line">
            <td id="L1167" class="blob-num js-line-number" data-line-number="1167"></td>
              <td>ВЕ-028669</td>
              <td>2940180</td>
              <td>Рядовой</td>
              <td>Жигжитов Зоригто Валерьевич</td>
              <td>10/27/1985</td>
              <td>81</td>
              <td>4</td>
              <td>998115</td>
              <td>ОТДЕЛЕНИЕМ ВНУТРЕННИХ ДЕЛ ТУНКИНСКОГО РАЙОНА РЕСПУБЛИКИ БУРЯ</td>
              <td>11/26/2005</td>
          </tr>
          <tr id="LC1168" class="js-file-line">
            <td id="L1168" class="blob-num js-line-number" data-line-number="1168"></td>
              <td>СУ-424956</td>
              <td>2945575</td>
              <td>Рядовой</td>
              <td>Тагаймуродов Анварджон Гулмахмадович</td>
              <td>5/21/1998</td>
              <td>98</td>
              <td>16</td>
              <td>672543</td>
              <td> </td>
              <td>6/27/2016</td>
          </tr>
          <tr id="LC1169" class="js-file-line">
            <td id="L1169" class="blob-num js-line-number" data-line-number="1169"></td>
              <td>ВС-028845</td>
              <td>2947890</td>
              <td>Рядовой</td>
              <td>Четвериков Павел Александрович</td>
              <td>5/27/1998</td>
              <td>33</td>
              <td>12</td>
              <td>195220</td>
              <td>ОУФМС РОССИИ ПО КИРОВСКОЙ ОБЛАСТИ В ОРИЧЕВСКОМ РАЙОНЕ</td>
              <td>2/19/2013</td>
          </tr>
          <tr id="LC1170" class="js-file-line">
            <td id="L1170" class="blob-num js-line-number" data-line-number="1170"></td>
              <td>ВС-399232</td>
              <td>2953793</td>
              <td>Рядовой</td>
              <td>Чурилов Алексей Сергеевич</td>
              <td>02.04.1997</td>
              <td>73</td>
              <td>11</td>
              <td>880258</td>
              <td>ОУФМС РОССИИ ПО УЛЬЯНОВСКОЙ ОБЛАСТИ В ЗАВОЛЖСКОМ РАЙОНЕ Г. У</td>
              <td>Л1/31/2012</td>
          </tr>
          <tr id="LC1171" class="js-file-line">
            <td id="L1171" class="blob-num js-line-number" data-line-number="1171"></td>
              <td>МТ-103240</td>
              <td>2958513</td>
              <td>Рядовой</td>
              <td>Бальжиев Евгений Евгеньевич</td>
              <td>07.01.1996</td>
              <td>8</td>
              <td>10</td>
              <td>932958</td>
              <td>МО УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В НИКОЛАЕВСКОМ И ТУГУРО</td>
              <td>-0,000232172</td>
          </tr>
          <tr id="LC1172" class="js-file-line">
            <td id="L1172" class="blob-num js-line-number" data-line-number="1172"></td>
              <td>МТ-177417</td>
              <td>2958560</td>
              <td>Рядовой</td>
              <td>Доденко Павел Владимирович</td>
              <td>9/25/1996</td>
              <td>8</td>
              <td>9</td>
              <td>911703</td>
              <td> </td>
              <td>9/29/2010</td>
          </tr>
          <tr id="LC1173" class="js-file-line">
            <td id="L1173" class="blob-num js-line-number" data-line-number="1173"></td>
              <td>МТ-103406</td>
              <td>2958598</td>
              <td>Рядовой</td>
              <td>Киселица Виталий Зиновьевич</td>
              <td>2/26/1998</td>
              <td>8</td>
              <td>11</td>
              <td>57096</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В УЛЬЧСКОМ РАЙОНЕ</td>
              <td>03.11.2012</td>
          </tr>
          <tr id="LC1174" class="js-file-line">
            <td id="L1174" class="blob-num js-line-number" data-line-number="1174"></td>
              <td>МТ-103865</td>
              <td>2958616</td>
              <td>Рядовой</td>
              <td>Кузнецов Олег Валерьевич</td>
              <td>08.05.1996</td>
              <td>8</td>
              <td>10</td>
              <td>980183</td>
              <td> </td>
              <td>06.09.2011</td>
          </tr>
          <tr id="LC1175" class="js-file-line">
            <td id="L1175" class="blob-num js-line-number" data-line-number="1175"></td>
              <td>МТ-131932</td>
              <td>2958623</td>
              <td>Рядовой</td>
              <td>Куциян Илья Анатольевич</td>
              <td>2/28/1995</td>
              <td>8</td>
              <td>15</td>
              <td>326203</td>
              <td>отделом УФМС России по Хабаровскому краю в Индустриальном р-не г. Ха</td>
              <td>б9/30/2015</td>
          </tr>
          <tr id="LC1176" class="js-file-line">
            <td id="L1176" class="blob-num js-line-number" data-line-number="1176"></td>
              <td>МТ-132000</td>
              <td>2958687</td>
              <td>Рядовой</td>
              <td>Плотников Евгений Вячеславович</td>
              <td>6/15/1997</td>
              <td>8</td>
              <td>15</td>
              <td>309274</td>
              <td>Отделение УФМС Росии по Приморскому краю в Красноармейском муници</td>
              <td>7/14/2015</td>
          </tr>
          <tr id="LC1177" class="js-file-line">
            <td id="L1177" class="blob-num js-line-number" data-line-number="1177"></td>
              <td>МТ-233806</td>
              <td>2958861</td>
              <td>Рядовой</td>
              <td>Федотов Дмитрий Викторович</td>
              <td>1/17/1997</td>
              <td>5</td>
              <td>10</td>
              <td>819211</td>
              <td>ОУФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В УССУРИЙСКОМ ГОРОДСКОМ </td>
              <td>О1/26/2011</td>
          </tr>
          <tr id="LC1178" class="js-file-line">
            <td id="L1178" class="blob-num js-line-number" data-line-number="1178"></td>
              <td>МТ-215096</td>
              <td>2959109</td>
              <td>Рядовой</td>
              <td>Слюсар Максим Витальевич</td>
              <td>3/19/1998</td>
              <td>5</td>
              <td>11</td>
              <td>935899</td>
              <td>ОУФМС России по Приморскому краю в городе Лесозаводск</td>
              <td>4/16/2012</td>
          </tr>
          <tr id="LC1179" class="js-file-line">
            <td id="L1179" class="blob-num js-line-number" data-line-number="1179"></td>
              <td>МТ-117053</td>
              <td>2965773</td>
              <td>Рядовой</td>
              <td>Яценко Игорь Николаевич</td>
              <td>04.12.1998</td>
              <td>10</td>
              <td>10</td>
              <td>254445</td>
              <td>Отделением УФМС России по Амурской области в Ромненском районе</td>
              <td>5/15/2012</td>
          </tr>
          <tr id="LC1180" class="js-file-line">
            <td id="L1180" class="blob-num js-line-number" data-line-number="1180"></td>
              <td>МТ-137516</td>
              <td>2965789</td>
              <td>Рядовой</td>
              <td>Козырев Вадим Олегович</td>
              <td>8/27/1995</td>
              <td>99</td>
              <td>15</td>
              <td>308591</td>
              <td>ОУФМС по Хабаровскому краю в Центральном р-не</td>
              <td>12.08.2015</td>
          </tr>
          <tr id="LC1181" class="js-file-line">
            <td id="L1181" class="blob-num js-line-number" data-line-number="1181"></td>
              <td>МТ-117078</td>
              <td>2965861</td>
              <td>Рядовой</td>
              <td>Горин Александр Андреевич</td>
              <td>5/30/1997</td>
              <td>10</td>
              <td>11</td>
              <td>263083</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В ИВАНОВСКОМ РА</td>
              <td>Й7/20/2011</td>
          </tr>
          <tr id="LC1182" class="js-file-line">
            <td id="L1182" class="blob-num js-line-number" data-line-number="1182"></td>
              <td>МТ-217031</td>
              <td>2968619</td>
              <td>Рядовой</td>
              <td>Ковалёв Владимир Константинович</td>
              <td>10/20/1994</td>
              <td>10</td>
              <td>14</td>
              <td>402293</td>
              <td>УФМС РОССИИ ПО ВМУРСКОЙ ОБЛАСТИ В ЗАВИТИНСКОМ РАЙОНЕ</td>
              <td>11/13/2014</td>
          </tr>
          <tr id="LC1183" class="js-file-line">
            <td id="L1183" class="blob-num js-line-number" data-line-number="1183"></td>
              <td>МТ-217033</td>
              <td>2969063</td>
              <td>Рядовой</td>
              <td>Зарудний Илья Вячеславович</td>
              <td>2/18/1995</td>
              <td>8</td>
              <td>14</td>
              <td>294849</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В СЕВЕРНОМ ОКРУГЕ ГОРОДА Х</td>
              <td>А4/16/2015</td>
          </tr>
          <tr id="LC1184" class="js-file-line">
            <td id="L1184" class="blob-num js-line-number" data-line-number="1184"></td>
              <td>Ю-841090</td>
              <td>2969385</td>
              <td>Рядовой</td>
              <td>Куменов Антон Тимофеевич</td>
              <td>5/15/1993</td>
              <td>8</td>
              <td>12</td>
              <td>142918</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В</td>
              <td>6/13/2013</td>
          </tr>
          <tr id="LC1185" class="js-file-line">
            <td id="L1185" class="blob-num js-line-number" data-line-number="1185"></td>
              <td>МТ-217025</td>
              <td>2970832</td>
              <td>Рядовой</td>
              <td>Анкарольтин Александр Алексеевич</td>
              <td>08.04.1995</td>
              <td>8</td>
              <td>15</td>
              <td>326851</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В КИРОВСКОМ И КРАСНОФЛОТ</td>
              <td>С10/29/2015</td>
          </tr>
          <tr id="LC1186" class="js-file-line">
            <td id="L1186" class="blob-num js-line-number" data-line-number="1186"></td>
              <td>МТ-115591</td>
              <td>2970840</td>
              <td>Рядовой</td>
              <td>Баранов Петр Владимирович</td>
              <td>11.07.1992</td>
              <td>76</td>
              <td>12</td>
              <td>654149</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ КРАЮ В ХИЛОКСКОМ </td>
              <td>Р1/15/2013</td>
          </tr>
          <tr id="LC1187" class="js-file-line">
            <td id="L1187" class="blob-num js-line-number" data-line-number="1187"></td>
              <td>МТ-196682</td>
              <td>2971371</td>
              <td>Рядовой</td>
              <td>Симоненко Семён Сергеевич</td>
              <td>12.05.1994</td>
              <td>10</td>
              <td>14</td>
              <td>433935</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В ИВАНОВСКОМ РАЙОНЕ</td>
              <td>4/15/2015</td>
          </tr>
          <tr id="LC1188" class="js-file-line">
            <td id="L1188" class="blob-num js-line-number" data-line-number="1188"></td>
              <td>МТ-127140</td>
              <td>2974482</td>
              <td>Рядовой</td>
              <td>Митин Евгений Борисович</td>
              <td>10.09.1983</td>
              <td>8</td>
              <td>4</td>
              <td>339082</td>
              <td>ОВД КРАСНОФЛОТСКОГО РАЙОНА Г.ХАБАРОВСКА</td>
              <td>10.04.2004</td>
          </tr>
          <tr id="LC1189" class="js-file-line">
            <td id="L1189" class="blob-num js-line-number" data-line-number="1189"></td>
              <td>МТ-217044</td>
              <td>2975649</td>
              <td>Рядовой</td>
              <td>Нодиров Озодбек Машраббой Угли</td>
              <td>6/18/1993</td>
              <td>8</td>
              <td>13</td>
              <td>174833</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В СЕВЕРНОМ ОКРУГЕ Г.ХАБАРОВ</td>
              <td>7/18/2013</td>
          </tr>
          <tr id="LC1190" class="js-file-line">
            <td id="L1190" class="blob-num js-line-number" data-line-number="1190"></td>
              <td>Х-787143</td>
              <td>2976811</td>
              <td>Рядовой</td>
              <td>Байрашев Станислав Вячеславович</td>
              <td>11.03.1988</td>
              <td>10</td>
              <td>8</td>
              <td>112883</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В КОНСТАНТИНОВСКОМ РАЙОНЕ</td>
              <td>11/27/2008</td>
          </tr>
          <tr id="LC1191" class="js-file-line">
            <td id="L1191" class="blob-num js-line-number" data-line-number="1191"></td>
              <td>СУ-157848</td>
              <td>2976826</td>
              <td>Рядовой</td>
              <td>Чамбал Аянчы Айдын-Оолович</td>
              <td>12/13/1992</td>
              <td>22</td>
              <td>35</td>
              <td>323456</td>
              <td>ТП УФМС России по Республике Саха (Якутия) в г. Якутск</td>
              <td>01.01.2015</td>
          </tr>
          <tr id="LC1192" class="js-file-line">
            <td id="L1192" class="blob-num js-line-number" data-line-number="1192"></td>
              <td>Ю-839158</td>
              <td>2976831</td>
              <td>Рядовой</td>
              <td>Шамраев Дмитрий Николаевич</td>
              <td>6/22/1993</td>
              <td>8</td>
              <td>13</td>
              <td>168707</td>
              <td>ОУФМС России по Хабаровскому краю в г. Комсомольск-на-Амуре</td>
              <td>09.04.2013</td>
          </tr>
          <tr id="LC1193" class="js-file-line">
            <td id="L1193" class="blob-num js-line-number" data-line-number="1193"></td>
              <td>МТ-127485</td>
              <td>2981075</td>
              <td>Рядовой</td>
              <td>Кравченко Анастасия Александровна</td>
              <td>2/24/1986</td>
              <td>8</td>
              <td>5</td>
              <td>586452</td>
              <td>ОВД ЦЕНТРАЛЬНОГО ОКРУГА Г.КОМСОМОЛЬСКА-НА-АМУРЕ ХАБАРОВСКОГ</td>
              <td>О3/17/2006</td>
          </tr>
          <tr id="LC1194" class="js-file-line">
            <td id="L1194" class="blob-num js-line-number" data-line-number="1194"></td>
              <td>МТ-204957</td>
              <td>2981090</td>
              <td>Рядовой</td>
              <td>Селютин Юрий Вадимович</td>
              <td>10/24/1994</td>
              <td>8</td>
              <td>15</td>
              <td>350599</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ РАЙОНЕ Г.</td>
              <td>Х2/17/2016</td>
          </tr>
          <tr id="LC1195" class="js-file-line">
            <td id="L1195" class="blob-num js-line-number" data-line-number="1195"></td>
              <td>ВС-059176</td>
              <td>2981800</td>
              <td>Рядовой</td>
              <td>Ломаев Иван Юрьевич</td>
              <td>2/14/1998</td>
              <td>95</td>
              <td>11</td>
              <td>786009</td>
              <td>ТП УФМС России по республике Хакасия в г. Абазе</td>
              <td>3/29/2012</td>
          </tr>
          <tr id="LC1196" class="js-file-line">
            <td id="L1196" class="blob-num js-line-number" data-line-number="1196"></td>
              <td>МТ-196820</td>
              <td>2983101</td>
              <td>Рядовой</td>
              <td>Игнатуша Евгений Витальевич</td>
              <td>7/15/1994</td>
              <td>8</td>
              <td>14</td>
              <td>267279</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЦЕНТРАЛЬНОМ Р-НЕ Г.ХАБАР</td>
              <td>О11/25/2014</td>
          </tr>
          <tr id="LC1197" class="js-file-line">
            <td id="L1197" class="blob-num js-line-number" data-line-number="1197"></td>
              <td>ВС-269731</td>
              <td>2983978</td>
              <td>Рядовой</td>
              <td>Сыров Михаил Павлович</td>
              <td>03.01.1998</td>
              <td>57</td>
              <td>12</td>
              <td>907040</td>
              <td>ОУФМС России по Пермскому краю в Нытвенском р-не</td>
              <td>10/17/2012</td>
          </tr>
          <tr id="LC1198" class="js-file-line">
            <td id="L1198" class="blob-num js-line-number" data-line-number="1198"></td>
              <td>МТ-127488</td>
              <td>2984127</td>
              <td>Рядовой</td>
              <td>Фаткулов Андрей Дмитриевич</td>
              <td>04.02.1993</td>
              <td>8</td>
              <td>13</td>
              <td>156676</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖНО</td>
              <td>06.05.2013</td>
          </tr>
          <tr id="LC1199" class="js-file-line">
            <td id="L1199" class="blob-num js-line-number" data-line-number="1199"></td>
              <td>ВС-092275</td>
              <td>2990500</td>
              <td>Рядовой</td>
              <td>Закоморный Юрий Александрович</td>
              <td>6/17/1998</td>
              <td>94</td>
              <td>12</td>
              <td>323761</td>
              <td>ОУФМС России по Удмурсткой республике в Первомайском р-не г. Ижевска</td>
              <td>2/21/2013</td>
          </tr>
          <tr id="LC1200" class="js-file-line">
            <td id="L1200" class="blob-num js-line-number" data-line-number="1200"></td>
              <td>МТ-177332</td>
              <td>2992446</td>
              <td>Рядовой</td>
              <td>Гулевич Андрей Владиславович</td>
              <td>08.08.1998</td>
              <td>8</td>
              <td>11</td>
              <td>70981</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В НАНАЙСКОМ РА</td>
              <td>Й9/6/2012</td>
          </tr>
          <tr id="LC1201" class="js-file-line">
            <td id="L1201" class="blob-num js-line-number" data-line-number="1201"></td>
              <td>МТ-103890</td>
              <td>2992475</td>
              <td>Рядовой</td>
              <td>Знаменщиков Мирон Викторович</td>
              <td>10/17/1996</td>
              <td>8</td>
              <td>10</td>
              <td>962466</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном районе го</td>
              <td>11.10.2010</td>
          </tr>
          <tr id="LC1202" class="js-file-line">
            <td id="L1202" class="blob-num js-line-number" data-line-number="1202"></td>
              <td>МТ-103698</td>
              <td>2992610</td>
              <td>Рядовой</td>
              <td>Синицын Илья Дмитриевич</td>
              <td>5/27/1994</td>
              <td>8</td>
              <td>14</td>
              <td>248931</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДОРОЖ</td>
              <td>7/21/2014</td>
          </tr>
          <tr id="LC1203" class="js-file-line">
            <td id="L1203" class="blob-num js-line-number" data-line-number="1203"></td>
              <td>МТ-237684</td>
              <td>2992757</td>
              <td>Рядовой</td>
              <td>Борисов Валерий Евгеньевич</td>
              <td>07.01.1998</td>
              <td>22</td>
              <td>10</td>
              <td>256632</td>
              <td>ОУФМС по г. Благовещенск</td>
              <td>2/28/2014</td>
          </tr>
          <tr id="LC1204" class="js-file-line">
            <td id="L1204" class="blob-num js-line-number" data-line-number="1204"></td>
              <td>МТ-237158</td>
              <td>2992772</td>
              <td>Рядовой</td>
              <td>Волобуев Алексей Павлович</td>
              <td>3/18/1998</td>
              <td>10</td>
              <td>11</td>
              <td>297165</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В СЕРЫШЕВСКОМ Р</td>
              <td>А4/26/2012</td>
          </tr>
          <tr id="LC1205" class="js-file-line">
            <td id="L1205" class="blob-num js-line-number" data-line-number="1205"></td>
              <td>МТ-237157</td>
              <td>2992824</td>
              <td>Рядовой</td>
              <td>Кузнецов Артём Александрович</td>
              <td>8/29/1998</td>
              <td>10</td>
              <td>12</td>
              <td>316443</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В ТАМБОВСКОМ РАЙОНЕ</td>
              <td>09.05.2012</td>
          </tr>
          <tr id="LC1206" class="js-file-line">
            <td id="L1206" class="blob-num js-line-number" data-line-number="1206"></td>
              <td>МТ-237156</td>
              <td>2992844</td>
              <td>Рядовой</td>
              <td>Павлов Олег Сергеевич</td>
              <td>6/16/1998</td>
              <td>10</td>
              <td>11</td>
              <td>298563</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г. ТЫНДЕ</td>
              <td>6/26/2012</td>
          </tr>
          <tr id="LC1207" class="js-file-line">
            <td id="L1207" class="blob-num js-line-number" data-line-number="1207"></td>
              <td>МТ-237153</td>
              <td>2992871</td>
              <td>Рядовой</td>
              <td>Третишник Александр Владимирович</td>
              <td>9/23/1997</td>
              <td>10</td>
              <td>11</td>
              <td>287270</td>
              <td>ОУФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В СКРУПСКОМ РАЙОНЕ</td>
              <td>1/28/2012</td>
          </tr>
          <tr id="LC1208" class="js-file-line">
            <td id="L1208" class="blob-num js-line-number" data-line-number="1208"></td>
              <td>СУ-463974</td>
              <td>2998195</td>
              <td>Рядовой</td>
              <td>Егоров Ахат Анатольевич</td>
              <td>01.12.1998</td>
              <td>98</td>
              <td>14</td>
              <td>555067</td>
              <td>МРО УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА (ЯКУТИЯ) В Г. ЯКУТСКЕ</td>
              <td>08.04.2014</td>
          </tr>
          <tr id="LC1209" class="js-file-line">
            <td id="L1209" class="blob-num js-line-number" data-line-number="1209"></td>
              <td>СУ-463829</td>
              <td>2998269</td>
              <td>Рядовой</td>
              <td>Петров Вячеслав Алексеевич</td>
              <td>11/19/1996</td>
              <td>98</td>
              <td>10</td>
              <td>321823</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА (ЯКУТИЯ) В САНТАРСКОМ Р-НЕ</td>
              <td>02.09.2011</td>
          </tr>
          <tr id="LC1210" class="js-file-line">
            <td id="L1210" class="blob-num js-line-number" data-line-number="1210"></td>
              <td>МТ-196638</td>
              <td>3003131</td>
              <td>Рядовой</td>
              <td>Манкевич Илья Валерьевич</td>
              <td>08.02.1994</td>
              <td>10</td>
              <td>14</td>
              <td>402097</td>
              <td>УФМС России по Амурской области в Завитинском районе</td>
              <td>8/20/2014</td>
          </tr>
          <tr id="LC1211" class="js-file-line">
            <td id="L1211" class="blob-num js-line-number" data-line-number="1211"></td>
              <td>МТ-196835</td>
              <td>3007260</td>
              <td>Рядовой</td>
              <td>Залуженцев Евгений Валентинович</td>
              <td>6/13/1994</td>
              <td>10</td>
              <td>14</td>
              <td>402585</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В ИВАНОВСКОМ РАЙОНЕ</td>
              <td>07.10.2014</td>
          </tr>
          <tr id="LC1212" class="js-file-line">
            <td id="L1212" class="blob-num js-line-number" data-line-number="1212"></td>
              <td>ВС-303471</td>
              <td>3008258</td>
              <td>Рядовой</td>
              <td>Сайдыханов Руслан Рамилевич</td>
              <td>02.09.1998</td>
              <td>57</td>
              <td>11</td>
              <td>826887</td>
              <td>ОУФМС РОССИИ ПО ПЕРМСКОМУ КРАЮ В БЕРЕЗОВСКОМ РАЙОНЕ</td>
              <td>03.12.2012</td>
          </tr>
          <tr id="LC1213" class="js-file-line">
            <td id="L1213" class="blob-num js-line-number" data-line-number="1213"></td>
              <td>СУ-181974</td>
              <td>3008428</td>
              <td>Рядовой</td>
              <td>Князев Василий Николаевич</td>
              <td>1/21/1998</td>
              <td>88</td>
              <td>11</td>
              <td>75280</td>
              <td>ОУФМС России по рес. Марий Эл в Сернурском районе</td>
              <td>2/21/2012</td>
          </tr>
          <tr id="LC1214" class="js-file-line">
            <td id="L1214" class="blob-num js-line-number" data-line-number="1214"></td>
              <td>ВС-291738</td>
              <td>3008684</td>
              <td>Рядовой</td>
              <td>Ваулин Никита Сергеевич</td>
              <td>5/21/1998</td>
              <td>65</td>
              <td>11</td>
              <td>375405</td>
              <td>ТП УФМС России по Свердловской области в Артинском районе</td>
              <td>5/31/2012</td>
          </tr>
          <tr id="LC1215" class="js-file-line">
            <td id="L1215" class="blob-num js-line-number" data-line-number="1215"></td>
              <td>ВС-291805</td>
              <td>3008688</td>
              <td>Рядовой</td>
              <td>Вилисов Константин Георгиевич</td>
              <td>11.11.1996</td>
              <td>65</td>
              <td>11</td>
              <td>175463</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В Г. ЕКАТЕРИНБУРГ</td>
              <td>4/27/2011</td>
          </tr>
          <tr id="LC1216" class="js-file-line">
            <td id="L1216" class="blob-num js-line-number" data-line-number="1216"></td>
              <td>ВС-313972</td>
              <td>3008735</td>
              <td>Рядовой</td>
              <td>Копылов Максим Валерьевич</td>
              <td>5/26/1997</td>
              <td>65</td>
              <td>11</td>
              <td>212560</td>
              <td> </td>
              <td>08.04.2011</td>
          </tr>
          <tr id="LC1217" class="js-file-line">
            <td id="L1217" class="blob-num js-line-number" data-line-number="1217"></td>
              <td>ВС-291849</td>
              <td>3008741</td>
              <td>Рядовой</td>
              <td>Ладыгин Сергей Александрович</td>
              <td>1/19/1997</td>
              <td>65</td>
              <td>11</td>
              <td>106939</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В Г.ПЕРВОУРАЛЬСКЕ</td>
              <td>2/22/2011</td>
          </tr>
          <tr id="LC1218" class="js-file-line">
            <td id="L1218" class="blob-num js-line-number" data-line-number="1218"></td>
              <td>ВС-291536</td>
              <td>3008746</td>
              <td>Рядовой</td>
              <td>Лисовенко Владислав Игоревич</td>
              <td>7/29/1997</td>
              <td>65</td>
              <td>16</td>
              <td>203892</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В ВЕРХ-ИСЕТСКОМ РАЙОНЕ </td>
              <td>Г4/26/2016</td>
          </tr>
          <tr id="LC1219" class="js-file-line">
            <td id="L1219" class="blob-num js-line-number" data-line-number="1219"></td>
              <td>ВС-291938</td>
              <td>3008778</td>
              <td>Рядовой</td>
              <td>Потаскуев Фёдор Александрович</td>
              <td>10.01.1998</td>
              <td>65</td>
              <td>16</td>
              <td>292132</td>
              <td>ОУФМС РОССИИ ПО СВЕРДЛОВСКОЙ ОБЛАСТИ В ВЕРХНЕПЫШМИНСКОМ РА</td>
              <td>9/16/2016</td>
          </tr>
          <tr id="LC1220" class="js-file-line">
            <td id="L1220" class="blob-num js-line-number" data-line-number="1220"></td>
              <td>ВС-313954</td>
              <td>3008779</td>
              <td>Рядовой</td>
              <td>Репин Анатолий Николаевич</td>
              <td>7/29/1997</td>
              <td>65</td>
              <td>11</td>
              <td>24424</td>
              <td>Октябрьский РОВД Амурской области</td>
              <td>8/15/2011</td>
          </tr>
          <tr id="LC1221" class="js-file-line">
            <td id="L1221" class="blob-num js-line-number" data-line-number="1221"></td>
              <td>МТ-245527</td>
              <td>3009514</td>
              <td>Рядовой</td>
              <td>Зверев Николай Станиславович</td>
              <td>03.12.1996</td>
              <td>10</td>
              <td>16</td>
              <td>488110</td>
              <td>МО УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В ГОРОДЕ БЕЛОГОРСКЕ</td>
              <td>7/20/2012</td>
          </tr>
          <tr id="LC1222" class="js-file-line">
            <td id="L1222" class="blob-num js-line-number" data-line-number="1222"></td>
              <td>ВС-092422</td>
              <td>3009631</td>
              <td>Рядовой</td>
              <td>Корепанов Леонид Александрович</td>
              <td>12/24/1997</td>
              <td>94</td>
              <td>11</td>
              <td>233772</td>
              <td>ТП УФМС  России по Удмуртской республике в Балезинском районе</td>
              <td>3/15/2012</td>
          </tr>
          <tr id="LC1223" class="js-file-line">
            <td id="L1223" class="blob-num js-line-number" data-line-number="1223"></td>
              <td>ВС-092408</td>
              <td>3009633</td>
              <td>Рядовой</td>
              <td>Коробейников Михаил Владимирович</td>
              <td>11.02.1997</td>
              <td>94</td>
              <td>11</td>
              <td>232684</td>
              <td>МО УФМС РОССИИ ПО УДМУРТСКОЙ РЕСПУБЛИКЕ В Г. САРАПУЛЕ</td>
              <td>12/26/2011</td>
          </tr>
          <tr id="LC1224" class="js-file-line">
            <td id="L1224" class="blob-num js-line-number" data-line-number="1224"></td>
              <td>ВС-334246</td>
              <td>3010215</td>
              <td>Рядовой</td>
              <td>Колесник Владимир Сергеевич</td>
              <td>01.07.1996</td>
              <td>36</td>
              <td>15</td>
              <td>121720</td>
              <td>МП УФМС РОССИИ ПО САМАРСКОЙ ОБЛАСТИ В КОШКИНСКОМ РАЙОНЕ</td>
              <td>1/29/2016</td>
          </tr>
          <tr id="LC1225" class="js-file-line">
            <td id="L1225" class="blob-num js-line-number" data-line-number="1225"></td>
              <td>ВС-337925</td>
              <td>3011024</td>
              <td>Рядовой</td>
              <td>Зюзько Марк Олегович</td>
              <td>10/17/1993</td>
              <td>25</td>
              <td>13</td>
              <td>923015</td>
              <td>ОУФМС России по Иркутской области в Свердловском р-не г. Иркутска</td>
              <td>11/26/2013</td>
          </tr>
          <tr id="LC1226" class="js-file-line">
            <td id="L1226" class="blob-num js-line-number" data-line-number="1226"></td>
              <td>ВС-030372</td>
              <td>3011876</td>
              <td>Рядовой</td>
              <td>Мартемьянов Владимир Васильевич</td>
              <td>08.10.1996</td>
              <td>33</td>
              <td>16</td>
              <td>404936</td>
              <td>МП УФМС РОССИИ ПО КИРОВСКОЙ ОБЛАСТИ В Г. НОЛИНСКЕ</td>
              <td>09.10.2016</td>
          </tr>
          <tr id="LC1227" class="js-file-line">
            <td id="L1227" class="blob-num js-line-number" data-line-number="1227"></td>
              <td>ВС-030373</td>
              <td>3011877</td>
              <td>Рядовой</td>
              <td>Обухов Максим Сергеевич</td>
              <td>1/24/1997</td>
              <td>33</td>
              <td>10</td>
              <td>38386</td>
              <td>ТП УФМС РОССИИ ПО КИРОВСКОЙ ОБЛАСТИ В НЕМСКОМ РАЙОНЕ</td>
              <td>02.04.2011</td>
          </tr>
          <tr id="LC1228" class="js-file-line">
            <td id="L1228" class="blob-num js-line-number" data-line-number="1228"></td>
              <td>ВС-030381</td>
              <td>3011885</td>
              <td>Рядовой</td>
              <td>Юсупов Эдуард Ринатович</td>
              <td>10.06.1998</td>
              <td>33</td>
              <td>12</td>
              <td>163402</td>
              <td>ОУФМС РОССИИ ПО КИРОВСКОЙ ОБЛАСТИ В КИРОВО-ЧЕПЕЦКОМ РАЙОНЕ</td>
              <td>11.06.2012</td>
          </tr>
          <tr id="LC1229" class="js-file-line">
            <td id="L1229" class="blob-num js-line-number" data-line-number="1229"></td>
              <td>ВС-280385</td>
              <td>3015893</td>
              <td>Рядовой</td>
              <td>Игин Сергей Михайлович</td>
              <td>12/28/1997</td>
              <td>80</td>
              <td>11</td>
              <td>448973</td>
              <td> </td>
              <td>2/17/2012</td>
          </tr>
          <tr id="LC1230" class="js-file-line">
            <td id="L1230" class="blob-num js-line-number" data-line-number="1230"></td>
              <td>ВС-312786</td>
              <td>3017110</td>
              <td>Рядовой</td>
              <td>Астафьев Максим Андреевич</td>
              <td>07.06.1998</td>
              <td>75</td>
              <td>13</td>
              <td>284582</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В Г. КОПЕЙСКЕ</td>
              <td>2/24/2014</td>
          </tr>
          <tr id="LC1231" class="js-file-line">
            <td id="L1231" class="blob-num js-line-number" data-line-number="1231"></td>
              <td>ВС-312811</td>
              <td>3017123</td>
              <td>Рядовой</td>
              <td>Балашов Вячеслав Юрьевич</td>
              <td>2/17/1997</td>
              <td>75</td>
              <td>12</td>
              <td>87963</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В КРАСНОАРМЕЙСКОМ РАЙО</td>
              <td>11/22/2012</td>
          </tr>
          <tr id="LC1232" class="js-file-line">
            <td id="L1232" class="blob-num js-line-number" data-line-number="1232"></td>
              <td>ВС-312766</td>
              <td>3017127</td>
              <td>Рядовой</td>
              <td>Бурцев Денис Александрович</td>
              <td>08.09.1992</td>
              <td>75</td>
              <td>12</td>
              <td>147634</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В ГОРОДЕ ЗЛАТОУСТЕ</td>
              <td>8/28/2012</td>
          </tr>
          <tr id="LC1233" class="js-file-line">
            <td id="L1233" class="blob-num js-line-number" data-line-number="1233"></td>
              <td>ВС-312767</td>
              <td>3017142</td>
              <td>Рядовой</td>
              <td>Воеводин Андрей Максимович</td>
              <td>1/22/1997</td>
              <td>75</td>
              <td>16</td>
              <td>861872</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В Г. МИАССЕ</td>
              <td>9/22/2016</td>
          </tr>
          <tr id="LC1234" class="js-file-line">
            <td id="L1234" class="blob-num js-line-number" data-line-number="1234"></td>
              <td>ВС-312790</td>
              <td>3017146</td>
              <td>Рядовой</td>
              <td>Гайнитдинов Динис Дамирович</td>
              <td>01.03.1998</td>
              <td>75</td>
              <td>12</td>
              <td>7666</td>
              <td>ОУФМС № 3 РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В ЛЕНИНСКОМ РАЙОНЕ Г</td>
              <td>1/23/2012</td>
          </tr>
          <tr id="LC1235" class="js-file-line">
            <td id="L1235" class="blob-num js-line-number" data-line-number="1235"></td>
              <td>ВС-312793</td>
              <td>3017190</td>
              <td>Рядовой</td>
              <td>Киселёв Владислав Анатольевич</td>
              <td>2/23/1997</td>
              <td>75</td>
              <td>10</td>
              <td>875919</td>
              <td>ОТДЕЛЕНИЕМ №3 УФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В ЛЕНИНСКО</td>
              <td>04.12.2011</td>
          </tr>
          <tr id="LC1236" class="js-file-line">
            <td id="L1236" class="blob-num js-line-number" data-line-number="1236"></td>
              <td>ВС-312774</td>
              <td>3017196</td>
              <td>Рядовой</td>
              <td>Королев Максим Сергеевич</td>
              <td>8/27/1997</td>
              <td>75</td>
              <td>11</td>
              <td>967610</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В БРЕДИНСОМ РАЙОНЕ</td>
              <td>9/26/2011</td>
          </tr>
          <tr id="LC1237" class="js-file-line">
            <td id="L1237" class="blob-num js-line-number" data-line-number="1237"></td>
              <td>ВС-312799</td>
              <td>3017208</td>
              <td>Рядовой</td>
              <td>Махмудов Хоживали Исхонидинович</td>
              <td>4/18/1998</td>
              <td>75</td>
              <td>12</td>
              <td>259934</td>
              <td>ОУФМС №3 РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В ЛЕНИНСКОМ РАЙОНЕ Г</td>
              <td>.8/2/2013</td>
          </tr>
          <tr id="LC1238" class="js-file-line">
            <td id="L1238" class="blob-num js-line-number" data-line-number="1238"></td>
              <td>ВС-312803</td>
              <td>3017216</td>
              <td>Рядовой</td>
              <td>Пендюрин Александр Алексеевич</td>
              <td>4/25/1996</td>
              <td>75</td>
              <td>16</td>
              <td>838542</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В ОРДЖОНИКИДЗЕВСКОМ РА</td>
              <td>09.12.2016</td>
          </tr>
          <tr id="LC1239" class="js-file-line">
            <td id="L1239" class="blob-num js-line-number" data-line-number="1239"></td>
              <td>ВС-312778</td>
              <td>3017230</td>
              <td>Рядовой</td>
              <td>Скиба Максим Алексеевич</td>
              <td>5/14/1997</td>
              <td>75</td>
              <td>10</td>
              <td>823454</td>
              <td>ОУФМС РОССИИ ПО ЧЕЛЯБИНСКОЙ ОБЛАСТИ В БРЕДИНСКОМ РАЙОНЕ</td>
              <td>8/31/2011</td>
          </tr>
          <tr id="LC1240" class="js-file-line">
            <td id="L1240" class="blob-num js-line-number" data-line-number="1240"></td>
              <td>ВС-029063</td>
              <td>3019821</td>
              <td>Рядовой</td>
              <td>Загвоздин Дмитрий Михайлович</td>
              <td>7/13/1991</td>
              <td>32</td>
              <td>11</td>
              <td>19553</td>
              <td>ОВД БИКИНСКОГО РАЙОНА ХАБАРОВСКОГО КРАЯ</td>
              <td>7/29/2011</td>
          </tr>
          <tr id="LC1241" class="js-file-line">
            <td id="L1241" class="blob-num js-line-number" data-line-number="1241"></td>
              <td>ВС-029225</td>
              <td>3019834</td>
              <td>Рядовой</td>
              <td>Краско Виктор Александрович</td>
              <td>8/30/1998</td>
              <td>32</td>
              <td>12</td>
              <td>175799</td>
              <td>ТП В ПОС. ШЕРЕГЕШ ОУФМС РОССИИ ПО КЕМЕРОВСКОЙ ОБЛАСТИ В Г. ТАМ</td>
              <td>Т11/22/2012</td>
          </tr>
          <tr id="LC1242" class="js-file-line">
            <td id="L1242" class="blob-num js-line-number" data-line-number="1242"></td>
              <td>ВС-029368</td>
              <td>3019840</td>
              <td>Рядовой</td>
              <td>Максимов Иван Владимирович</td>
              <td>11/20/1997</td>
              <td>32</td>
              <td>11</td>
              <td>88124</td>
              <td>ОТДЕЛЕНИЕМ В НОВОИЛЬИНСКОМ РАЙОНЕ ОУФМС РОССИИ ПО КЕМЕРОВС</td>
              <td>02.10.2012</td>
          </tr>
          <tr id="LC1243" class="js-file-line">
            <td id="L1243" class="blob-num js-line-number" data-line-number="1243"></td>
              <td>ВС-029367</td>
              <td>3019857</td>
              <td>Рядовой</td>
              <td>Потапов Максим Владимирович</td>
              <td>06.08.1998</td>
              <td>32</td>
              <td>11</td>
              <td>141435</td>
              <td>ОТДЕЛЕНИЕМ В ЗАВОДСКОМ РАЙОНЕ ОУФМС РОССИИ ПО КЕМЕРОВСКОЙ О</td>
              <td>6/19/2012</td>
          </tr>
          <tr id="LC1244" class="js-file-line">
            <td id="L1244" class="blob-num js-line-number" data-line-number="1244"></td>
              <td>ВС-029191</td>
              <td>3019869</td>
              <td>Рядовой</td>
              <td>Соловьев Артур Вадимович</td>
              <td>3/18/1996</td>
              <td>32</td>
              <td>15</td>
              <td>640330</td>
              <td>ОУФМС РОССИИ ПО КЕМЕРОВСКОЙ ОБЛАСТИ В ГОРОДЕ НОВОКУЗНЕЦКЕ</td>
              <td>3/29/2016</td>
          </tr>
          <tr id="LC1245" class="js-file-line">
            <td id="L1245" class="blob-num js-line-number" data-line-number="1245"></td>
              <td>ВС-029035</td>
              <td>3019872</td>
              <td>Рядовой</td>
              <td>Степанов Виктор Геннадьевич</td>
              <td>03.01.1997</td>
              <td>32</td>
              <td>10</td>
              <td>947417</td>
              <td>ОУФМС РОССИИ ПО КЕМЕРОВСКОЙ ОБЛАСТИ В КИРОВСКОМ РАЙОНЕ Г. КЕ</td>
              <td>М3/4/2011</td>
          </tr>
          <tr id="LC1246" class="js-file-line">
            <td id="L1246" class="blob-num js-line-number" data-line-number="1246"></td>
              <td>ВС-029109</td>
              <td>3019878</td>
              <td>Рядовой</td>
              <td>Тетерин Никита Сергеевич</td>
              <td>04.07.1998</td>
              <td>32</td>
              <td>11</td>
              <td>142830</td>
              <td>отделением в Куйбышевском р-не ОУФМС России по Кемеровской обл в г. </td>
              <td>Н5/16/2012</td>
          </tr>
          <tr id="LC1247" class="js-file-line">
            <td id="L1247" class="blob-num js-line-number" data-line-number="1247"></td>
              <td>ВС-029185</td>
              <td>3019896</td>
              <td>Рядовой</td>
              <td>Чиртик Александр Александрович</td>
              <td>7/20/1994</td>
              <td>32</td>
              <td>14</td>
              <td>460586</td>
              <td>ОУФМС РОССИИ ПО КЕМЕРОВСКОЙ ОБЛАСТИ В ЦЕНТРАЛЬНОМ РАЙОНЕ Г. </td>
              <td>К8/21/2014</td>
          </tr>
          <tr id="LC1248" class="js-file-line">
            <td id="L1248" class="blob-num js-line-number" data-line-number="1248"></td>
              <td>ВС-265858</td>
              <td>3020362</td>
              <td>Рядовой</td>
              <td>Зотов Виктор Андреевич</td>
              <td>11/16/1995</td>
              <td>92</td>
              <td>15</td>
              <td>970976</td>
              <td>ОУФМС России по респ. Татарстан в г. Набережные Челны</td>
              <td>11/23/2015</td>
          </tr>
          <tr id="LC1249" class="js-file-line">
            <td id="L1249" class="blob-num js-line-number" data-line-number="1249"></td>
              <td>ВС-265799</td>
              <td>3020369</td>
              <td>Рядовой</td>
              <td>Капенкин Никита Евгеньевич</td>
              <td>1/22/1996</td>
              <td>92</td>
              <td>16</td>
              <td>53573</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ ТАТАРСТАН В ЗЕЛЕНОДАЛЬСКОМ РАЙОНЕ</td>
              <td>06.08.2016</td>
          </tr>
          <tr id="LC1250" class="js-file-line">
            <td id="L1250" class="blob-num js-line-number" data-line-number="1250"></td>
              <td>ВС-265862</td>
              <td>3020380</td>
              <td>Рядовой</td>
              <td>Краснов Сергей Николаевич</td>
              <td>03.12.1997</td>
              <td>92</td>
              <td>14</td>
              <td>763864</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ ТАТАРСТАН ПГТ АКСУБАЕВА</td>
              <td>4/16/2015</td>
          </tr>
          <tr id="LC1251" class="js-file-line">
            <td id="L1251" class="blob-num js-line-number" data-line-number="1251"></td>
              <td>ВС-265803</td>
              <td>3020388</td>
              <td>Рядовой</td>
              <td>Мухтаров Анвар Руставельевич</td>
              <td>03.09.1994</td>
              <td>92</td>
              <td>14</td>
              <td>718672</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ ТАТАРСТАН И ЗЕЛЕНОДОЛЬСКОМУ РАЙО</td>
              <td>Н6/24/2014</td>
          </tr>
          <tr id="LC1252" class="js-file-line">
            <td id="L1252" class="blob-num js-line-number" data-line-number="1252"></td>
              <td>ВС-265840</td>
              <td>3020394</td>
              <td>Рядовой</td>
              <td>Отинов Владислав Андреевич</td>
              <td>9/15/1995</td>
              <td>92</td>
              <td>15</td>
              <td>941472</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ ТАТАРСТАН В ГОРОДЕ НИЖНЕКАМСКЕ</td>
              <td>11/16/2015</td>
          </tr>
          <tr id="LC1253" class="js-file-line">
            <td id="L1253" class="blob-num js-line-number" data-line-number="1253"></td>
              <td>ВС-073469</td>
              <td>3020925</td>
              <td>Рядовой</td>
              <td>Пронин Дмитрий Сергеевич</td>
              <td>03.11.1998</td>
              <td>1</td>
              <td>11</td>
              <td>727032</td>
              <td>ТП УФМС России по Алтайскому краю в с. Троицкое</td>
              <td>3/30/2012</td>
          </tr>
          <tr id="LC1254" class="js-file-line">
            <td id="L1254" class="blob-num js-line-number" data-line-number="1254"></td>
              <td>ВС-073418</td>
              <td>3020946</td>
              <td>Рядовой</td>
              <td>Генергард Игорь Валерьевич</td>
              <td>10/27/1996</td>
              <td>1</td>
              <td>16</td>
              <td>244350</td>
              <td>МП УФМС России по Алтайскому краю и республике алтай в с.Баево</td>
              <td>11.02.2016</td>
          </tr>
          <tr id="LC1255" class="js-file-line">
            <td id="L1255" class="blob-num js-line-number" data-line-number="1255"></td>
              <td>ВС-073428</td>
              <td>3020947</td>
              <td>Рядовой</td>
              <td>Голиков Артём Викторович</td>
              <td>09.05.1998</td>
              <td>1</td>
              <td>12</td>
              <td>785098</td>
              <td>отделом УФМС России по Хабаровскому краю в Индустриальном р-не г. Ха</td>
              <td>б9/20/2012</td>
          </tr>
          <tr id="LC1256" class="js-file-line">
            <td id="L1256" class="blob-num js-line-number" data-line-number="1256"></td>
              <td>ВС-073431</td>
              <td>3020950</td>
              <td>Рядовой</td>
              <td>Егоров Данила Рафоэльевич</td>
              <td>2/14/1998</td>
              <td>1</td>
              <td>11</td>
              <td>675812</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. ЦЕЛИННОЕ</td>
              <td>2/22/2012</td>
          </tr>
          <tr id="LC1257" class="js-file-line">
            <td id="L1257" class="blob-num js-line-number" data-line-number="1257"></td>
              <td>ВС-073417</td>
              <td>3020951</td>
              <td>Рядовой</td>
              <td>Ермаков Кирилл Сергеевич</td>
              <td>04.11.1998</td>
              <td>1</td>
              <td>11</td>
              <td>733263</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ ПО Г. АЛЕЙСКУ И АЛЕ</td>
              <td>4/24/2012</td>
          </tr>
          <tr id="LC1258" class="js-file-line">
            <td id="L1258" class="blob-num js-line-number" data-line-number="1258"></td>
              <td>ВС-073434</td>
              <td>3020953</td>
              <td>Рядовой</td>
              <td>Иванюк Иван Сергеевич</td>
              <td>10/25/1995</td>
              <td>1</td>
              <td>15</td>
              <td>157608</td>
              <td>отделом УФМС России по Алтайскому краю в г. Камень-на-Оби</td>
              <td>11/20/2015</td>
          </tr>
          <tr id="LC1259" class="js-file-line">
            <td id="L1259" class="blob-num js-line-number" data-line-number="1259"></td>
              <td>ВС-073421</td>
              <td>3020954</td>
              <td>Рядовой</td>
              <td>Копылов Дмитрий Андреевич</td>
              <td>08.05.1998</td>
              <td>1</td>
              <td>12</td>
              <td>758153</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. УСТЬ-ЧАРЫШСКОМ РАЙОНЕ</td>
              <td>8/13/2012</td>
          </tr>
          <tr id="LC1260" class="js-file-line">
            <td id="L1260" class="blob-num js-line-number" data-line-number="1260"></td>
              <td>ВС-073439</td>
              <td>3020955</td>
              <td>Рядовой</td>
              <td>Кузнецов Андрей Сергеевич</td>
              <td>07.11.1998</td>
              <td>1</td>
              <td>11</td>
              <td>726336</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В СЕЛЕ УСТЬ-ЧАРЫШСКАЯ ПРИСТ</td>
              <td>7/16/2012</td>
          </tr>
          <tr id="LC1261" class="js-file-line">
            <td id="L1261" class="blob-num js-line-number" data-line-number="1261"></td>
              <td>ВС-073435</td>
              <td>3020958</td>
              <td>Рядовой</td>
              <td>Нестеров Данил Витальевич</td>
              <td>09.08.1997</td>
              <td>1</td>
              <td>11</td>
              <td>667246</td>
              <td>ОУФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ ПО Г. КАМЕНЬ НА ОБИ И КАМЕНС</td>
              <td>К9/22/2011</td>
          </tr>
          <tr id="LC1262" class="js-file-line">
            <td id="L1262" class="blob-num js-line-number" data-line-number="1262"></td>
              <td>ВС-073401</td>
              <td>3020968</td>
              <td>Рядовой</td>
              <td>Беспалов Виталий Сергеевич</td>
              <td>8/18/1994</td>
              <td>1</td>
              <td>14</td>
              <td>992875</td>
              <td>тп уфмс россии по алтайскому краю в с. Быстрый исток</td>
              <td>8/27/2014</td>
          </tr>
          <tr id="LC1263" class="js-file-line">
            <td id="L1263" class="blob-num js-line-number" data-line-number="1263"></td>
              <td>ВС-073403</td>
              <td>3020979</td>
              <td>Рядовой</td>
              <td>Сытых Леонид Николаевич</td>
              <td>10/19/1996</td>
              <td>1</td>
              <td>16</td>
              <td>275284</td>
              <td> </td>
              <td>10/27/2016</td>
          </tr>
          <tr id="LC1264" class="js-file-line">
            <td id="L1264" class="blob-num js-line-number" data-line-number="1264"></td>
              <td>ВС-043307</td>
              <td>3021349</td>
              <td>Рядовой</td>
              <td>Кошелев Михаил Олегович</td>
              <td>8/13/1996</td>
              <td>97</td>
              <td>16</td>
              <td>250227</td>
              <td>ТП В ПОС. ВУРНАРЫ МЕЖРАЙОННОГО ОТДЕЛА УФМС РОССИИ ПО ЧУВАШСК</td>
              <td>10.08.2016</td>
          </tr>
          <tr id="LC1265" class="js-file-line">
            <td id="L1265" class="blob-num js-line-number" data-line-number="1265"></td>
              <td>ВС-295011</td>
              <td>3021537</td>
              <td>Рядовой</td>
              <td>Середкин Александр Николаевич</td>
              <td>09.06.1998</td>
              <td>37</td>
              <td>12</td>
              <td>499935</td>
              <td>ОУФМС России по Курганской области в Кетовском р-не</td>
              <td>09.11.2012</td>
          </tr>
          <tr id="LC1266" class="js-file-line">
            <td id="L1266" class="blob-num js-line-number" data-line-number="1266"></td>
              <td>ВЕ-019041</td>
              <td>3024507</td>
              <td>Рядовой</td>
              <td>Казанцев Александр Мирович</td>
              <td>12/26/1997</td>
              <td>44</td>
              <td>12</td>
              <td>289638</td>
              <td>ТП ОФМС РОССИИ ПО МАГАДАНСКОЙ ОБЛАСТИ В ОЛЬСКОМ РАЙОНЕ</td>
              <td>08.08.2012</td>
          </tr>
          <tr id="LC1267" class="js-file-line">
            <td id="L1267" class="blob-num js-line-number" data-line-number="1267"></td>
              <td>ВЕ-019050</td>
              <td>3024515</td>
              <td>Рядовой</td>
              <td>Оломский Богдан Юрьевич</td>
              <td>10/27/1998</td>
              <td>44</td>
              <td>13</td>
              <td>298826</td>
              <td>ОУФМС РОССИИ ПО МАГАДАНСКОЙ ОБЛАСТИ В Г. МАГАДАНЕ</td>
              <td>5/27/2013</td>
          </tr>
          <tr id="LC1268" class="js-file-line">
            <td id="L1268" class="blob-num js-line-number" data-line-number="1268"></td>
              <td>МТ-117198</td>
              <td>3024743</td>
              <td>Рядовой</td>
              <td>Бабаев Павел Игоревич</td>
              <td>7/14/1998</td>
              <td>10</td>
              <td>14</td>
              <td>410360</td>
              <td>МО УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г. БЕЛОГОРСКЕ</td>
              <td>09.01.2014</td>
          </tr>
          <tr id="LC1269" class="js-file-line">
            <td id="L1269" class="blob-num js-line-number" data-line-number="1269"></td>
              <td>МТ-117199</td>
              <td>3024772</td>
              <td>Рядовой</td>
              <td>Керопян Армен Гарникович</td>
              <td>07.01.1997</td>
              <td>10</td>
              <td>13</td>
              <td>354529</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В МАЗАНОВСКОМ РАЙО</td>
              <td>6/24/2013</td>
          </tr>
          <tr id="LC1270" class="js-file-line">
            <td id="L1270" class="blob-num js-line-number" data-line-number="1270"></td>
              <td>МТ-117200</td>
              <td>3024773</td>
              <td>Рядовой</td>
              <td>Киселёв Евгений Сергеевич</td>
              <td>5/23/1997</td>
              <td>10</td>
              <td>10</td>
              <td>214690</td>
              <td>ТП УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В ПГТ ФЕВРАЛЬСК</td>
              <td>9/19/2011</td>
          </tr>
          <tr id="LC1271" class="js-file-line">
            <td id="L1271" class="blob-num js-line-number" data-line-number="1271"></td>
              <td>СУ-323915</td>
              <td>3025044</td>
              <td>Рядовой</td>
              <td>Алешин Алексей Дмитриевич</td>
              <td>06.11.1998</td>
              <td>25</td>
              <td>12</td>
              <td>705497</td>
              <td>ОУФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В Г. ЧЕРЕМХОВО И ЧЕРЕМХОВСК</td>
              <td>О6/14/2012</td>
          </tr>
          <tr id="LC1272" class="js-file-line">
            <td id="L1272" class="blob-num js-line-number" data-line-number="1272"></td>
              <td>СУ-323704</td>
              <td>3025055</td>
              <td>Рядовой</td>
              <td>Вантеев Андрей Алексеевич</td>
              <td>1/16/1998</td>
              <td>25</td>
              <td>11</td>
              <td>625466</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В ГОР. УСОЛЬЕ-СИБИРС</td>
              <td>2/15/2012</td>
          </tr>
          <tr id="LC1273" class="js-file-line">
            <td id="L1273" class="blob-num js-line-number" data-line-number="1273"></td>
              <td>ВС-347561</td>
              <td>3025057</td>
              <td>Рядовой</td>
              <td>Волгин Владислав Эдуардович</td>
              <td>02.07.1995</td>
              <td>25</td>
              <td>15</td>
              <td>107042</td>
              <td>ОУФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В ОКТЯБРЬСКОМ РАЙОНЕ Г. ИРК</td>
              <td>У3/5/2015</td>
          </tr>
          <tr id="LC1274" class="js-file-line">
            <td id="L1274" class="blob-num js-line-number" data-line-number="1274"></td>
              <td>ВС-331312</td>
              <td>3025061</td>
              <td>Рядовой</td>
              <td>Калашников Евгений Олегович</td>
              <td>09.05.1998</td>
              <td>25</td>
              <td>12</td>
              <td>744647</td>
              <td>отделом УФМС России по Иркутской области в г. Саянске</td>
              <td>10.02.2012</td>
          </tr>
          <tr id="LC1275" class="js-file-line">
            <td id="L1275" class="blob-num js-line-number" data-line-number="1275"></td>
              <td>СУ-323078</td>
              <td>3025062</td>
              <td>Рядовой</td>
              <td>Керимбаев Адилет Абдылдаевич</td>
              <td>5/24/1998</td>
              <td>25</td>
              <td>16</td>
              <td>243871</td>
              <td>ОУФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В Г. ТАЙШЕТЕ И ТАЙШЕТСКОМ Р</td>
              <td>А9/22/2016</td>
          </tr>
          <tr id="LC1276" class="js-file-line">
            <td id="L1276" class="blob-num js-line-number" data-line-number="1276"></td>
              <td>СУ-323921</td>
              <td>3025066</td>
              <td>Рядовой</td>
              <td>Костин Егор Алексеевич</td>
              <td>8/31/1996</td>
              <td>25</td>
              <td>16</td>
              <td>298200</td>
              <td>ОУФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В Г. ЧЕРЕМХОВО И ЧЕРЕМХОВСК</td>
              <td>О9/22/2016</td>
          </tr>
          <tr id="LC1277" class="js-file-line">
            <td id="L1277" class="blob-num js-line-number" data-line-number="1277"></td>
              <td>ВС-337812</td>
              <td>3025083</td>
              <td>Рядовой</td>
              <td>Тимошевский Игорь Иванович</td>
              <td>5/26/1993</td>
              <td>25</td>
              <td>16</td>
              <td>297652</td>
              <td>ОУФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В ЛЕНИНСКОМ РАЙОНЕ ГОРОДА</td>
              <td> 9/23/2016</td>
          </tr>
          <tr id="LC1278" class="js-file-line">
            <td id="L1278" class="blob-num js-line-number" data-line-number="1278"></td>
              <td>ВС-331329</td>
              <td>3025091</td>
              <td>Рядовой</td>
              <td>Черняков Кирилл Владимирович</td>
              <td>7/27/1996</td>
              <td>25</td>
              <td>16</td>
              <td>285185</td>
              <td>ОУФМС РОССИИ ПО ИРКУТСКОЙ ОБЛАСТИ В Г. ЗИМА И ЗИМИНСКОМ РАЙО</td>
              <td>Н10/25/2016</td>
          </tr>
          <tr id="LC1279" class="js-file-line">
            <td id="L1279" class="blob-num js-line-number" data-line-number="1279"></td>
              <td>ВС-030464</td>
              <td>3025201</td>
              <td>Рядовой</td>
              <td>Каргапольцев Михаил Александрович</td>
              <td>3/21/1998</td>
              <td>33</td>
              <td>11</td>
              <td>135302</td>
              <td>ТП УФМС  России по Кировской обл в Афанасьевском районе</td>
              <td>4/24/2012</td>
          </tr>
          <tr id="LC1280" class="js-file-line">
            <td id="L1280" class="blob-num js-line-number" data-line-number="1280"></td>
              <td>ВС-030468</td>
              <td>3025208</td>
              <td>Рядовой</td>
              <td>Королёв Сергей Михайлович</td>
              <td>3/17/1998</td>
              <td>33</td>
              <td>11</td>
              <td>134707</td>
              <td>ОУФМС России по Кировской области в Оричевском р-не</td>
              <td>4/24/2012</td>
          </tr>
          <tr id="LC1281" class="js-file-line">
            <td id="L1281" class="blob-num js-line-number" data-line-number="1281"></td>
              <td>ВС-030425</td>
              <td>3025219</td>
              <td>Рядовой</td>
              <td>Лебедев Владислав Александрович</td>
              <td>12/23/1996</td>
              <td>33</td>
              <td>10</td>
              <td>58535</td>
              <td>ОУФМС России по Кировской области в Ленинском р-не г. Кирова</td>
              <td>1/31/2011</td>
          </tr>
          <tr id="LC1282" class="js-file-line">
            <td id="L1282" class="blob-num js-line-number" data-line-number="1282"></td>
              <td>ВС-030428</td>
              <td>3025223</td>
              <td>Рядовой</td>
              <td>Мальцев Андрей Викторович</td>
              <td>9/27/1998</td>
              <td>33</td>
              <td>11</td>
              <td>112940</td>
              <td>ОУФМС России по  Кировской области в Верхнекаменском р-не</td>
              <td>10/29/2012</td>
          </tr>
          <tr id="LC1283" class="js-file-line">
            <td id="L1283" class="blob-num js-line-number" data-line-number="1283"></td>
              <td>ВС-030437</td>
              <td>3025246</td>
              <td>Рядовой</td>
              <td>Сапегин Виктор Анатольевич</td>
              <td>02.02.1997</td>
              <td>33</td>
              <td>10</td>
              <td>63170</td>
              <td> </td>
              <td>3/15/2011</td>
          </tr>
          <tr id="LC1284" class="js-file-line">
            <td id="L1284" class="blob-num js-line-number" data-line-number="1284"></td>
              <td>Ю-067569</td>
              <td>3026015</td>
              <td>Рядовой</td>
              <td>Бабкин Сергей Алексеевич</td>
              <td>8/27/1992</td>
              <td>76</td>
              <td>12</td>
              <td>634744</td>
              <td>ОУФМС РОССИИ ПО ЗАБАЙКАЛЬСКОМУ РАЙОНУ В ЧЕРНОВСКОМ РАЙОНЕ</td>
              <td>09.11.2012</td>
          </tr>
          <tr id="LC1285" class="js-file-line">
            <td id="L1285" class="blob-num js-line-number" data-line-number="1285"></td>
              <td>СУ-334827</td>
              <td>3029184</td>
              <td>Рядовой</td>
              <td>Анискевич Сергей Александрович</td>
              <td>2/20/1997</td>
              <td>52</td>
              <td>10</td>
              <td>960614</td>
              <td>ОУФМС РОССИИ ПО ОМСКОЙ ОБЛАСТИ В КАЛАЧИНСКОМ РАЙОНЕ</td>
              <td>04.01.2011</td>
          </tr>
          <tr id="LC1286" class="js-file-line">
            <td id="L1286" class="blob-num js-line-number" data-line-number="1286"></td>
              <td>ВС-083516</td>
              <td>3029197</td>
              <td>Рядовой</td>
              <td>Пивень Михаил Николаевич</td>
              <td>05.12.1996</td>
              <td>52</td>
              <td>15</td>
              <td>524944</td>
              <td>ТП УФМС РОССИИ ПО ОМСКОЙ ОБЛАСТИ В ПОЛТАВСКОМ РАЙОНЕ</td>
              <td>5/27/2016</td>
          </tr>
          <tr id="LC1287" class="js-file-line">
            <td id="L1287" class="blob-num js-line-number" data-line-number="1287"></td>
              <td>ВС-337347</td>
              <td>3029867</td>
              <td>Рядовой</td>
              <td>Захаров Александр Александрович</td>
              <td>7/24/1997</td>
              <td>25</td>
              <td>10</td>
              <td>529121</td>
              <td>ТП УФМС России по Иркутской области</td>
              <td>8/27/2011</td>
          </tr>
          <tr id="LC1288" class="js-file-line">
            <td id="L1288" class="blob-num js-line-number" data-line-number="1288"></td>
              <td>ВС-346898</td>
              <td>3031480</td>
              <td>Рядовой</td>
              <td>Исупов Александр Сергеевич</td>
              <td>7/13/1998</td>
              <td>50</td>
              <td>13</td>
              <td>6732</td>
              <td>ОУФМС России по Новосибирской области в Ленинском р-не г. Новосибирс</td>
              <td>8/16/2012</td>
          </tr>
          <tr id="LC1289" class="js-file-line">
            <td id="L1289" class="blob-num js-line-number" data-line-number="1289"></td>
              <td>ВС-359457</td>
              <td>3031585</td>
              <td>Рядовой</td>
              <td>Заворин Иван Сергеевич</td>
              <td>8/25/1998</td>
              <td>50</td>
              <td>11</td>
              <td>955844</td>
              <td> </td>
              <td>09.04.2012</td>
          </tr>
          <tr id="LC1290" class="js-file-line">
            <td id="L1290" class="blob-num js-line-number" data-line-number="1290"></td>
              <td>ВС-052405</td>
              <td>3031587</td>
              <td>Рядовой</td>
              <td>Звыков Станислав Сергеевич</td>
              <td>3/17/1998</td>
              <td>50</td>
              <td>10</td>
              <td>809053</td>
              <td>ТП УФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В УСТЬ-ТАРСКОМ РАЙОН</td>
              <td>3/21/2012</td>
          </tr>
          <tr id="LC1291" class="js-file-line">
            <td id="L1291" class="blob-num js-line-number" data-line-number="1291"></td>
              <td>ВС-346472</td>
              <td>3031589</td>
              <td>Рядовой</td>
              <td>Зуев Владислав Станиславович</td>
              <td>10/17/1998</td>
              <td>50</td>
              <td>13</td>
              <td>55451</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ ВКАЛИНИНСКОМ РАЙОНЕ</td>
              <td>11/13/2012</td>
          </tr>
          <tr id="LC1292" class="js-file-line">
            <td id="L1292" class="blob-num js-line-number" data-line-number="1292"></td>
              <td>ВС-047977</td>
              <td>3031595</td>
              <td>Рядовой</td>
              <td>Карпачев Иван Юрьевич</td>
              <td>5/22/1997</td>
              <td>50</td>
              <td>10</td>
              <td>818697</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В ИСКИТИМСКОМ РАЙОН</td>
              <td>Е6/21/2011</td>
          </tr>
          <tr id="LC1293" class="js-file-line">
            <td id="L1293" class="blob-num js-line-number" data-line-number="1293"></td>
              <td>ВС-049033</td>
              <td>3031601</td>
              <td>Рядовой</td>
              <td>Константинов Виктор Андреевич</td>
              <td>10.08.1998</td>
              <td>50</td>
              <td>13</td>
              <td>36712</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В КОЛЫВАНСКОМ РАЙОНЕ</td>
              <td>10.10.2012</td>
          </tr>
          <tr id="LC1294" class="js-file-line">
            <td id="L1294" class="blob-num js-line-number" data-line-number="1294"></td>
              <td>ВС-049320</td>
              <td>3031606</td>
              <td>Рядовой</td>
              <td>Кудрявкин Владислав Алексеевич</td>
              <td>4/18/1998</td>
              <td>50</td>
              <td>16</td>
              <td>587960</td>
              <td>ТП УФМС России по Забайкальскому краю в Могойтуйском районе</td>
              <td>11.11.2016</td>
          </tr>
          <tr id="LC1295" class="js-file-line">
            <td id="L1295" class="blob-num js-line-number" data-line-number="1295"></td>
              <td>ВС-034001</td>
              <td>3031626</td>
              <td>Рядовой</td>
              <td>Насиров Анар Самур оглы</td>
              <td>08.03.1998</td>
              <td>50</td>
              <td>13</td>
              <td>1749</td>
              <td>Отделом УФМС России по Новосибирской области в октябрьском районе</td>
              <td>9/14/2012</td>
          </tr>
          <tr id="LC1296" class="js-file-line">
            <td id="L1296" class="blob-num js-line-number" data-line-number="1296"></td>
              <td>ВС-307293</td>
              <td>3031632</td>
              <td>Рядовой</td>
              <td>Попов Александр Эдуардович</td>
              <td>10/28/1997</td>
              <td>50</td>
              <td>11</td>
              <td>917153</td>
              <td>ТП УФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В ЗДВИНСКОМ РАЙОНЕ</td>
              <td>11.02.2011</td>
          </tr>
          <tr id="LC1297" class="js-file-line">
            <td id="L1297" class="blob-num js-line-number" data-line-number="1297"></td>
              <td>ВС-047998</td>
              <td>3031640</td>
              <td>Рядовой</td>
              <td>Семьянов Александр Игоревич</td>
              <td>7/23/1998</td>
              <td>50</td>
              <td>11</td>
              <td>979610</td>
              <td>ОУМФС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В ИСКИТИМСКОМ РАЙОН</td>
              <td>Е8/27/2012</td>
          </tr>
          <tr id="LC1298" class="js-file-line">
            <td id="L1298" class="blob-num js-line-number" data-line-number="1298"></td>
              <td>ВС-052169</td>
              <td>3031645</td>
              <td>Рядовой</td>
              <td>Тарасов Олег Иванович</td>
              <td>5/26/1998</td>
              <td>50</td>
              <td>12</td>
              <td>984677</td>
              <td>ТП УФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В КЫШТОВСКОМ РАЙОН</td>
              <td>Е6/6/2012</td>
          </tr>
          <tr id="LC1299" class="js-file-line">
            <td id="L1299" class="blob-num js-line-number" data-line-number="1299"></td>
              <td>ВС-346468</td>
              <td>3031648</td>
              <td>Рядовой</td>
              <td>Туралин Виктор Андреевич</td>
              <td>09.11.1996</td>
              <td>50</td>
              <td>16</td>
              <td>591189</td>
              <td>ОУФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В ДЗЕРЖИНСКОМ РАЙОНЕ</td>
              <td>10/20/2016</td>
          </tr>
          <tr id="LC1300" class="js-file-line">
            <td id="L1300" class="blob-num js-line-number" data-line-number="1300"></td>
              <td>ЕХ-788993</td>
              <td>3031649</td>
              <td>Рядовой</td>
              <td>Ульданов Никита Рашидович</td>
              <td>3/16/1998</td>
              <td>50</td>
              <td>11</td>
              <td>917006</td>
              <td>отделением УФМС России по Новосибирской области в Венгеровском райо</td>
              <td>3/20/2012</td>
          </tr>
          <tr id="LC1301" class="js-file-line">
            <td id="L1301" class="blob-num js-line-number" data-line-number="1301"></td>
              <td>СУ-176539</td>
              <td>3031654</td>
              <td>Рядовой</td>
              <td>Хижняков Игорь Александрович</td>
              <td>9/21/1993</td>
              <td>50</td>
              <td>13</td>
              <td>168064</td>
              <td>ОУФМС России по Новосибирской области в Ленинском районе г. Новосиб</td>
              <td>и10/9/2013</td>
          </tr>
          <tr id="LC1302" class="js-file-line">
            <td id="L1302" class="blob-num js-line-number" data-line-number="1302"></td>
              <td>ВС-053046</td>
              <td>3031658</td>
              <td>Рядовой</td>
              <td>Черненко Владимир Евгеньевич</td>
              <td>4/19/1995</td>
              <td>50</td>
              <td>15</td>
              <td>424706</td>
              <td>УФМС РОССИИ ПО НОВОСИБИРСКОЙ ОБЛАСТИ В ИСКИТИМСКОМ РАЙОНЕ</td>
              <td>7/21/2015</td>
          </tr>
          <tr id="LC1303" class="js-file-line">
            <td id="L1303" class="blob-num js-line-number" data-line-number="1303"></td>
              <td>ВС-307048</td>
              <td>3031661</td>
              <td>Рядовой</td>
              <td>Шарипов Мирзоасадуллох Голибович</td>
              <td>09.12.1997</td>
              <td>8</td>
              <td>15</td>
              <td>324204</td>
              <td> </td>
              <td>8/28/2015</td>
          </tr>
          <tr id="LC1304" class="js-file-line">
            <td id="L1304" class="blob-num js-line-number" data-line-number="1304"></td>
              <td>ВС-029905</td>
              <td>3039099</td>
              <td>Рядовой</td>
              <td>Веселков Дмитрий Александрович</td>
              <td>03.01.1998</td>
              <td>50</td>
              <td>11</td>
              <td>950143</td>
              <td>ОУФМС России по Новосибирской области в Дзержинском районе г. Новос</td>
              <td>и4/6/2012</td>
          </tr>
          <tr id="LC1305" class="js-file-line">
            <td id="L1305" class="blob-num js-line-number" data-line-number="1305"></td>
              <td>ВС-166664</td>
              <td>3040724</td>
              <td>Рядовой</td>
              <td>Гаджимурадов Абсамат Мурадикович</td>
              <td>6/15/1996</td>
              <td>82</td>
              <td>16</td>
              <td>817877</td>
              <td>82 16 817877  25.07.2016 ОУФМС РОССИИ ПО РЕСП. ДАГЕСТАН В ХАСАВЮРТ</td>
              <td>О7/25/2016</td>
          </tr>
          <tr id="LC1306" class="js-file-line">
            <td id="L1306" class="blob-num js-line-number" data-line-number="1306"></td>
              <td>ВС-166635</td>
              <td>3040769</td>
              <td>Рядовой</td>
              <td>Умаров Якуб Мурадович</td>
              <td>07.01.1995</td>
              <td>82</td>
              <td>15</td>
              <td>663881</td>
              <td>УФМС РОССИИ ПО РЕСП. ДАГЕСТАН В КАЗБЕНОВСКОМ РАЙОНЕ</td>
              <td>7/13/2015</td>
          </tr>
          <tr id="LC1307" class="js-file-line">
            <td id="L1307" class="blob-num js-line-number" data-line-number="1307"></td>
              <td>ВС-357770</td>
              <td>3044406</td>
              <td>Рядовой</td>
              <td>Атиков Максим Дмитриевич</td>
              <td>11.03.1998</td>
              <td>75</td>
              <td>15</td>
              <td>653008</td>
              <td> </td>
              <td>07.02.2015</td>
          </tr>
          <tr id="LC1308" class="js-file-line">
            <td id="L1308" class="blob-num js-line-number" data-line-number="1308"></td>
              <td>ВС-357880</td>
              <td>3044547</td>
              <td>Рядовой</td>
              <td>Торбин Владимир Александрович</td>
              <td>7/29/1998</td>
              <td>75</td>
              <td>12</td>
              <td>137298</td>
              <td>ОУФМС России по Челябинской области в г. Пласте</td>
              <td>8/22/2012</td>
          </tr>
          <tr id="LC1309" class="js-file-line">
            <td id="L1309" class="blob-num js-line-number" data-line-number="1309"></td>
              <td>ВС-102730</td>
              <td>3047746</td>
              <td>Рядовой</td>
              <td>Бобков Сергей Александрович</td>
              <td>12/26/1997</td>
              <td>4</td>
              <td>11</td>
              <td>176723</td>
              <td>ОУФМС России по Красноярскому краю в г. Боготоле и боготольском р-не</td>
              <td>01.12.2012</td>
          </tr>
          <tr id="LC1310" class="js-file-line">
            <td id="L1310" class="blob-num js-line-number" data-line-number="1310"></td>
              <td>ВС-114128</td>
              <td>3047866</td>
              <td>Рядовой</td>
              <td>Тойсумов Владислав Александрович</td>
              <td>7/17/1998</td>
              <td>4</td>
              <td>11</td>
              <td>202486</td>
              <td>МП по г. Владивосток</td>
              <td>8/22/2012</td>
          </tr>
          <tr id="LC1311" class="js-file-line">
            <td id="L1311" class="blob-num js-line-number" data-line-number="1311"></td>
              <td>ВС-114135</td>
              <td>3047884</td>
              <td>Рядовой</td>
              <td>Ястребов Сергей Андреевич</td>
              <td>09.05.1996</td>
              <td>4</td>
              <td>15</td>
              <td>900151</td>
              <td>МП УФМС России по Красноярскому краю и республике Тыва в Шушенском</td>
              <td>11/15/2016</td>
          </tr>
          <tr id="LC1312" class="js-file-line">
            <td id="L1312" class="blob-num js-line-number" data-line-number="1312"></td>
              <td>МТ-183446</td>
              <td>3049641</td>
              <td>Рядовой</td>
              <td>Белоновский Василий Евгеньевич</td>
              <td>02.12.1996</td>
              <td>81</td>
              <td>15</td>
              <td>657512</td>
              <td>МП УФМС России по Республике Бурятия в г. Бабушкин</td>
              <td>2/20/2016</td>
          </tr>
          <tr id="LC1313" class="js-file-line">
            <td id="L1313" class="blob-num js-line-number" data-line-number="1313"></td>
              <td>МТ-183414</td>
              <td>3049723</td>
              <td>Рядовой</td>
              <td>Сунцов Федор Геннадьевич</td>
              <td>02.05.1998</td>
              <td>81</td>
              <td>15</td>
              <td>624347</td>
              <td>ОУФМС России по республике Бурятия в Заиграевском р-не</td>
              <td>6/23/2015</td>
          </tr>
          <tr id="LC1314" class="js-file-line">
            <td id="L1314" class="blob-num js-line-number" data-line-number="1314"></td>
              <td>СУ-344374</td>
              <td>3054449</td>
              <td>Рядовой</td>
              <td>Казанцев Максим Николаевич</td>
              <td>10.07.1998</td>
              <td>52</td>
              <td>12</td>
              <td>167084</td>
              <td> </td>
              <td>10/23/2012</td>
          </tr>
          <tr id="LC1315" class="js-file-line">
            <td id="L1315" class="blob-num js-line-number" data-line-number="1315"></td>
              <td>ВС-082882</td>
              <td>3054494</td>
              <td>Рядовой</td>
              <td>Сафиуллин Денис Марселевич</td>
              <td>5/16/1998</td>
              <td>52</td>
              <td>12</td>
              <td>156377</td>
              <td>ОУФМС России по Омской области в Октябрьском р-не Админ. округе г. Ом</td>
              <td>8/14/2012</td>
          </tr>
          <tr id="LC1316" class="js-file-line">
            <td id="L1316" class="blob-num js-line-number" data-line-number="1316"></td>
              <td>СУ-146125</td>
              <td>3054639</td>
              <td>Рядовой</td>
              <td>Панюшкин Юрий Викторович</td>
              <td>9/21/1997</td>
              <td>52</td>
              <td>13</td>
              <td>317824</td>
              <td> </td>
              <td>3/27/2014</td>
          </tr>
          <tr id="LC1317" class="js-file-line">
            <td id="L1317" class="blob-num js-line-number" data-line-number="1317"></td>
              <td>ВС-002139</td>
              <td>3058774</td>
              <td>Рядовой</td>
              <td>Михеев Кирилл Олегович</td>
              <td>8/31/1998</td>
              <td>89</td>
              <td>11</td>
              <td>252666</td>
              <td>ГОВД г.Свободный</td>
              <td>10.10.2012</td>
          </tr>
          <tr id="LC1318" class="js-file-line">
            <td id="L1318" class="blob-num js-line-number" data-line-number="1318"></td>
              <td>МТ-177926</td>
              <td>3061826</td>
              <td>Рядовой</td>
              <td>Гаврилко Сергей Алексеевич</td>
              <td>07.10.1998</td>
              <td>8</td>
              <td>12</td>
              <td>90771</td>
              <td>ОУФМС по Хабаровскому краю в Железнодорожном р-не г. Хабаровска</td>
              <td>08.06.2012</td>
          </tr>
          <tr id="LC1319" class="js-file-line">
            <td id="L1319" class="blob-num js-line-number" data-line-number="1319"></td>
              <td>СУ-440103</td>
              <td>3062007</td>
              <td>Рядовой</td>
              <td>Суханов Роман Сергеевич</td>
              <td>09.06.1998</td>
              <td>8</td>
              <td>13</td>
              <td>175843</td>
              <td>отделом УФМС России по Хабаровскому краю в Индустриальном районе г. </td>
              <td>7/29/2013</td>
          </tr>
          <tr id="LC1320" class="js-file-line">
            <td id="L1320" class="blob-num js-line-number" data-line-number="1320"></td>
              <td>МТ-177450</td>
              <td>3062056</td>
              <td>Рядовой</td>
              <td>Сидоренко Евгений Алексеевич</td>
              <td>9/24/1998</td>
              <td>8</td>
              <td>12</td>
              <td>106525</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ВЯЗЕМСКОМ РАЙОНЕ</td>
              <td>10/15/2012</td>
          </tr>
          <tr id="LC1321" class="js-file-line">
            <td id="L1321" class="blob-num js-line-number" data-line-number="1321"></td>
              <td>ВС-349288</td>
              <td>3062541</td>
              <td>Рядовой</td>
              <td>Селезнев Артем Алексеевич</td>
              <td>10/28/1998</td>
              <td>36</td>
              <td>13</td>
              <td>785963</td>
              <td>УФМС России Самарской области г. Чапаевск</td>
              <td>9/17/2013</td>
          </tr>
          <tr id="LC1322" class="js-file-line">
            <td id="L1322" class="blob-num js-line-number" data-line-number="1322"></td>
              <td>ВЕ-018782</td>
              <td>3064718</td>
              <td>Рядовой</td>
              <td>Прокопенко Евгений Александрович</td>
              <td>3/27/1998</td>
              <td>77</td>
              <td>11</td>
              <td>89112</td>
              <td>ТП УФМС РОССИИ ПО ЧУКОТСКОМУ АВТОНОМНОМУ ОКРУГУ В ПРОВИДЕНС</td>
              <td>6/30/2012</td>
          </tr>
          <tr id="LC1323" class="js-file-line">
            <td id="L1323" class="blob-num js-line-number" data-line-number="1323"></td>
              <td>СУ-477480</td>
              <td>3067288</td>
              <td>Рядовой</td>
              <td>Раднаев Альберт Баирович</td>
              <td>3/25/1998</td>
              <td>5</td>
              <td>11</td>
              <td>957504</td>
              <td>ОУФМС России по Приморскому краю в Первореченском р-не г. Владивост</td>
              <td>о4/4/2012</td>
          </tr>
          <tr id="LC1324" class="js-file-line">
            <td id="L1324" class="blob-num js-line-number" data-line-number="1324"></td>
              <td>СУ-477578</td>
              <td>3067374</td>
              <td>Рядовой</td>
              <td>Соколов Павел Игоревич</td>
              <td>07.02.1998</td>
              <td>5</td>
              <td>11</td>
              <td>938778</td>
              <td>ОУФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В ЧЕРНИГОВСКОМ МУНИЦИПАЛ</td>
              <td>7/17/2012</td>
          </tr>
          <tr id="LC1325" class="js-file-line">
            <td id="L1325" class="blob-num js-line-number" data-line-number="1325"></td>
              <td>СУ-471123</td>
              <td>3067480</td>
              <td>Рядовой</td>
              <td>Будацыренов Валерий Дамдинович</td>
              <td>12.07.1995</td>
              <td>81</td>
              <td>16</td>
              <td>676038</td>
              <td>МП в п. Никольский Отдела УФМС России по республике Бурятия в Октябрь</td>
              <td>6/17/2016</td>
          </tr>
          <tr id="LC1326" class="js-file-line">
            <td id="L1326" class="blob-num js-line-number" data-line-number="1326"></td>
              <td>СУ-471984</td>
              <td>3067534</td>
              <td>Рядовой</td>
              <td>Костриков Андрей Валерьевич</td>
              <td>11.08.1996</td>
              <td>81</td>
              <td>14</td>
              <td>594535</td>
              <td>ОУФМС России по рес. Бурятия в Заиграевском районе</td>
              <td>12.08.2014</td>
          </tr>
          <tr id="LC1327" class="js-file-line">
            <td id="L1327" class="blob-num js-line-number" data-line-number="1327"></td>
              <td>МТ-117481</td>
              <td>3067730</td>
              <td>Рядовой</td>
              <td>Пятницкий Никита Александрович</td>
              <td>11/13/1998</td>
              <td>8</td>
              <td>17</td>
              <td>603484</td>
              <td>ТП УФМС РОССИИ ПО ОРЕНБУРГСКОЙ ОБЛАСТИ В ШЕРЛИКСКОМ РАЙОНЕ</td>
              <td>05.05.2011</td>
          </tr>
          <tr id="LC1328" class="js-file-line">
            <td id="L1328" class="blob-num js-line-number" data-line-number="1328"></td>
              <td>ВС-041686</td>
              <td>3069222</td>
              <td>Рядовой</td>
              <td>Рябов Дмитрий Игоревич</td>
              <td>6/15/1998</td>
              <td>63</td>
              <td>12</td>
              <td>790152</td>
              <td>ОУФМС России по Саратовской области в г. Ершове</td>
              <td>7/13/2012</td>
          </tr>
          <tr id="LC1329" class="js-file-line">
            <td id="L1329" class="blob-num js-line-number" data-line-number="1329"></td>
              <td>МТ-204993</td>
              <td>3071232</td>
              <td>Рядовой</td>
              <td>Мамедов Майис Алипаша Оглы</td>
              <td>7/24/1995</td>
              <td>8</td>
              <td>15</td>
              <td>330607</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ИНДУСТРИАЛЬНОМ РАЙОНЕ</td>
              <td>10.07.2015</td>
          </tr>
          <tr id="LC1330" class="js-file-line">
            <td id="L1330" class="blob-num js-line-number" data-line-number="1330"></td>
              <td>МТ-204214</td>
              <td>3071893</td>
              <td>Рядовой</td>
              <td>Чжан-Цзы-Фа Анастасия Игоревна</td>
              <td>7/30/1990</td>
              <td>8</td>
              <td>13</td>
              <td>171034</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>8/29/2013</td>
          </tr>
          <tr id="LC1331" class="js-file-line">
            <td id="L1331" class="blob-num js-line-number" data-line-number="1331"></td>
              <td>МТ-172434</td>
              <td>3072343</td>
              <td>Рядовой</td>
              <td>Николаев Сергей Григорьевич</td>
              <td>3/22/1998</td>
              <td>76</td>
              <td>11</td>
              <td>619786</td>
              <td>УФМС России в Забайкальском крае в Ингондинском районе г. Читы</td>
              <td>04.03.2012</td>
          </tr>
          <tr id="LC1332" class="js-file-line">
            <td id="L1332" class="blob-num js-line-number" data-line-number="1332"></td>
              <td>МТ-139091</td>
              <td>3072366</td>
              <td>Рядовой</td>
              <td>Рожнёв Юрий Алексеевич</td>
              <td>1/25/1998</td>
              <td>76</td>
              <td>11</td>
              <td>623247</td>
              <td>ТП УФМС  России по Забайкальскому краю в Чернышевском районе</td>
              <td>04.10.2012</td>
          </tr>
          <tr id="LC1333" class="js-file-line">
            <td id="L1333" class="blob-num js-line-number" data-line-number="1333"></td>
              <td>СУ-440546</td>
              <td>3072428</td>
              <td>Рядовой</td>
              <td>Бельды Артем Вячеславович</td>
              <td>2/13/1998</td>
              <td>8</td>
              <td>11</td>
              <td>78469</td>
              <td>МО УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В Г. КОМСОМОЛЬСКЕ-НА-АМ</td>
              <td>5/22/2012</td>
          </tr>
          <tr id="LC1334" class="js-file-line">
            <td id="L1334" class="blob-num js-line-number" data-line-number="1334"></td>
              <td>МТ-177858</td>
              <td>3072439</td>
              <td>Рядовой</td>
              <td>Дорохов Алексей Витальевич</td>
              <td>6/23/1990</td>
              <td>8</td>
              <td>11</td>
              <td>62146</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В РАЙОНЕ ИМЕНИ ЛАЗО</td>
              <td>02.06.2012</td>
          </tr>
          <tr id="LC1335" class="js-file-line">
            <td id="L1335" class="blob-num js-line-number" data-line-number="1335"></td>
              <td>СУ-440600</td>
              <td>3072448</td>
              <td>Рядовой</td>
              <td>Медведев Александр Александрович</td>
              <td>10/15/1997</td>
              <td>8</td>
              <td>11</td>
              <td>78375</td>
              <td> </td>
              <td>5/18/2012</td>
          </tr>
          <tr id="LC1336" class="js-file-line">
            <td id="L1336" class="blob-num js-line-number" data-line-number="1336"></td>
              <td>СУ-440587</td>
              <td>3072457</td>
              <td>Рядовой</td>
              <td>Тютрин Евгений Сергеевич</td>
              <td>8/31/1997</td>
              <td>8</td>
              <td>11</td>
              <td>18143</td>
              <td>МО УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В Г. КОМСОМОЛЬСКЕ-НА-АМ</td>
              <td>9/21/2011</td>
          </tr>
          <tr id="LC1337" class="js-file-line">
            <td id="L1337" class="blob-num js-line-number" data-line-number="1337"></td>
              <td>ВС-306331</td>
              <td>3085265</td>
              <td>Рядовой</td>
              <td>Заидов Усман Умарович</td>
              <td>12.12.1997</td>
              <td>96</td>
              <td>11</td>
              <td>333811</td>
              <td>ОУФМС России по Чеченской республике в Надтеречном р-не</td>
              <td>12/27/2011</td>
          </tr>
          <tr id="LC1338" class="js-file-line">
            <td id="L1338" class="blob-num js-line-number" data-line-number="1338"></td>
              <td>ВС-407336</td>
              <td>3087191</td>
              <td>Рядовой</td>
              <td>Голубев Кирилл Сергеевич</td>
              <td>5/29/1997</td>
              <td>94</td>
              <td>10</td>
              <td>153448</td>
              <td>МО УФМС России по Удмуртской республике в г.  Можге</td>
              <td>06.08.2011</td>
          </tr>
          <tr id="LC1339" class="js-file-line">
            <td id="L1339" class="blob-num js-line-number" data-line-number="1339"></td>
              <td>ВС-123713</td>
              <td>3087796</td>
              <td>Рядовой</td>
              <td>Ким Вячеслав Константинович</td>
              <td>12/30/1996</td>
              <td>80</td>
              <td>10</td>
              <td>191309</td>
              <td>ОУФМС России по республике Башкортостан в Альшеевском р-не</td>
              <td>1/18/2011</td>
          </tr>
          <tr id="LC1340" class="js-file-line">
            <td id="L1340" class="blob-num js-line-number" data-line-number="1340"></td>
              <td>ВЕ-019501</td>
              <td>3091989</td>
              <td>Рядовой</td>
              <td>Бардыкин Богдан Владимирович</td>
              <td>5/24/1998</td>
              <td>44</td>
              <td>15</td>
              <td>323691</td>
              <td> </td>
              <td>8/18/2016</td>
          </tr>
          <tr id="LC1341" class="js-file-line">
            <td id="L1341" class="blob-num js-line-number" data-line-number="1341"></td>
              <td>СУ-480081</td>
              <td>3092421</td>
              <td>Рядовой</td>
              <td>Шарапов Петр Владимирович</td>
              <td>7/22/1998</td>
              <td>5</td>
              <td>11</td>
              <td>958709</td>
              <td>ОУФМС России по Приморскому краю в Красноармейском р-не</td>
              <td>8/27/2012</td>
          </tr>
          <tr id="LC1342" class="js-file-line">
            <td id="L1342" class="blob-num js-line-number" data-line-number="1342"></td>
              <td>СУ-480090</td>
              <td>3092430</td>
              <td>Рядовой</td>
              <td>Ворников Григорий Николаевич</td>
              <td>12/16/1996</td>
              <td>5</td>
              <td>11</td>
              <td>934206</td>
              <td>ОУФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В ЧУГУЕВСКОМ МУНИЦИПАЛЬН</td>
              <td>О7/16/2012</td>
          </tr>
          <tr id="LC1343" class="js-file-line">
            <td id="L1343" class="blob-num js-line-number" data-line-number="1343"></td>
              <td>МТ-183604</td>
              <td>3092572</td>
              <td>Рядовой</td>
              <td>Темников Руслан Сергеевич</td>
              <td>06.01.1996</td>
              <td>81</td>
              <td>16</td>
              <td>676757</td>
              <td>МП в п. Загорск ОУФМС России по республике Бурятия в Железнодорожно</td>
              <td>м6/21/2016</td>
          </tr>
          <tr id="LC1344" class="js-file-line">
            <td id="L1344" class="blob-num js-line-number" data-line-number="1344"></td>
              <td>МТ-211799</td>
              <td>3092587</td>
              <td>Рядовой</td>
              <td>Шишмарев Андрей Викторович</td>
              <td>9/21/1993</td>
              <td>81</td>
              <td>13</td>
              <td>536342</td>
              <td>ОУФМС России по республике Бурятия в Кяхтинском р-не</td>
              <td>10.10.2013</td>
          </tr>
          <tr id="LC1345" class="js-file-line">
            <td id="L1345" class="blob-num js-line-number" data-line-number="1345"></td>
              <td>МТ-139424</td>
              <td>3095070</td>
              <td>Рядовой</td>
              <td>Рогалев Игорь Евгеньевич</td>
              <td>10.04.1998</td>
              <td>76</td>
              <td>12</td>
              <td>660259</td>
              <td>МО УФМС РОСИИ ПО АМУРСКОЙ ОБЛАСТИ В Г.БЕЛОГОРСК</td>
              <td>12.09.2012</td>
          </tr>
          <tr id="LC1346" class="js-file-line">
            <td id="L1346" class="blob-num js-line-number" data-line-number="1346"></td>
              <td>МТ-177988</td>
              <td>3095226</td>
              <td>Рядовой</td>
              <td>Панин Сергей Викторович</td>
              <td>8/25/1998</td>
              <td>98</td>
              <td>12</td>
              <td>414711</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА (ЯКУТИЯ) В ПОС. ЧУЛЬМАН НЕРЮН</td>
              <td>8/31/2012</td>
          </tr>
          <tr id="LC1347" class="js-file-line">
            <td id="L1347" class="blob-num js-line-number" data-line-number="1347"></td>
              <td>СУ-440017</td>
              <td>3095254</td>
              <td>Рядовой</td>
              <td>Телицын Иван Сергеевич</td>
              <td>1/22/1998</td>
              <td>8</td>
              <td>11</td>
              <td>65040</td>
              <td>Межрайонным ОФМС России по ЕАО в г. Биробиджан</td>
              <td>05.10.2012</td>
          </tr>
          <tr id="LC1348" class="js-file-line">
            <td id="L1348" class="blob-num js-line-number" data-line-number="1348"></td>
              <td>ВС-081030</td>
              <td>3096437</td>
              <td>Рядовой</td>
              <td>Пупков Кирилл Олегович</td>
              <td>01.02.1997</td>
              <td>1</td>
              <td>9</td>
              <td>369276</td>
              <td>УФМС России по г. Хабаровску Хабаровского р-на</td>
              <td>1/27/2011</td>
          </tr>
          <tr id="LC1349" class="js-file-line">
            <td id="L1349" class="blob-num js-line-number" data-line-number="1349"></td>
              <td>ВС-081041</td>
              <td>3096465</td>
              <td>Рядовой</td>
              <td>Танков Егор Сергеевич</td>
              <td>9/20/1998</td>
              <td>1</td>
              <td>11</td>
              <td>853838</td>
              <td>ТП УФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В С. ТОПЧИХА</td>
              <td>10.02.2012</td>
          </tr>
          <tr id="LC1350" class="js-file-line">
            <td id="L1350" class="blob-num js-line-number" data-line-number="1350"></td>
              <td>ВС-080929</td>
              <td>3096477</td>
              <td>Рядовой</td>
              <td>Тютюнников Максим Васильевич</td>
              <td>02.01.1997</td>
              <td>1</td>
              <td>10</td>
              <td>574321</td>
              <td>ОУФМС РОССИИ ПО АЛТАЙСКОМУ КРАЮ В КАМЕНСКОМ РАЙОНЕ Г. КАМЕН</td>
              <td>Ь2/10/2011</td>
          </tr>
          <tr id="LC1351" class="js-file-line">
            <td id="L1351" class="blob-num js-line-number" data-line-number="1351"></td>
              <td>ВС-368245</td>
              <td>3097020</td>
              <td>Рядовой</td>
              <td>Князев Артём Алексеевич</td>
              <td>07.11.1997</td>
              <td>75</td>
              <td>10</td>
              <td>866646</td>
              <td> </td>
              <td>7/27/2011</td>
          </tr>
          <tr id="LC1352" class="js-file-line">
            <td id="L1352" class="blob-num js-line-number" data-line-number="1352"></td>
              <td>ВС-058135</td>
              <td>3097654</td>
              <td>Рядовой</td>
              <td>Монгуш Чингис Орланович</td>
              <td>06.05.1997</td>
              <td>93</td>
              <td>14</td>
              <td>528028</td>
              <td>ТП МРО УФМС РОССИИ ПО САХАЛИНСКОЙ ОБЛАСТИ В ОХИНСКОМ РАЙОНЕ</td>
              <td>12.03.2015</td>
          </tr>
          <tr id="LC1353" class="js-file-line">
            <td id="L1353" class="blob-num js-line-number" data-line-number="1353"></td>
              <td>ВС-058118</td>
              <td>3097827</td>
              <td>Рядовой</td>
              <td>Сендажы Самбуу Санчайоолович</td>
              <td>05.10.1994</td>
              <td>93</td>
              <td>14</td>
              <td>516230</td>
              <td>ТП ОФМС России по республике Тыва в Бай-Тайгинском р-не</td>
              <td>8/15/2014</td>
          </tr>
          <tr id="LC1354" class="js-file-line">
            <td id="L1354" class="blob-num js-line-number" data-line-number="1354"></td>
              <td>ВС-358590</td>
              <td>3099033</td>
              <td>Рядовой</td>
              <td>Демкин Владислав Михайлович</td>
              <td>01.02.1997</td>
              <td>25</td>
              <td>10</td>
              <td>472008</td>
              <td>ОУФМС России по Иркутской обл в г Тайшете и Тайшетском районе</td>
              <td>02.04.2011</td>
          </tr>
          <tr id="LC1355" class="js-file-line">
            <td id="L1355" class="blob-num js-line-number" data-line-number="1355"></td>
              <td>ВС-100266</td>
              <td>3099278</td>
              <td>Рядовой</td>
              <td>Нестеренко Александр Сергеевич</td>
              <td>06.11.1991</td>
              <td>63</td>
              <td>16</td>
              <td>276257</td>
              <td>УФМС РОССИИ ПО САРАТОВСКОЙ ОБЛАСТИ В САРАТОВСКОМ РАЙОНЕ</td>
              <td>07.08.2016</td>
          </tr>
          <tr id="LC1356" class="js-file-line">
            <td id="L1356" class="blob-num js-line-number" data-line-number="1356"></td>
              <td>ВС-047679</td>
              <td>3099369</td>
              <td>Рядовой</td>
              <td>Атлас Максим Евгеньевич</td>
              <td>09.10.1998</td>
              <td>50</td>
              <td>11</td>
              <td>955952</td>
              <td>МО УФМС России по Амурской области в г.Белогорске</td>
              <td>9/21/2012</td>
          </tr>
          <tr id="LC1357" class="js-file-line">
            <td id="L1357" class="blob-num js-line-number" data-line-number="1357"></td>
              <td>МТ-201291</td>
              <td>3099463</td>
              <td>Рядовой</td>
              <td>Отамшоев Хайрат Окимшоевич</td>
              <td>11.07.1990</td>
              <td>8</td>
              <td>16</td>
              <td>381848</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕАО В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>7/26/2016</td>
          </tr>
          <tr id="LC1358" class="js-file-line">
            <td id="L1358" class="blob-num js-line-number" data-line-number="1358"></td>
              <td>СУ-470248</td>
              <td>3099468</td>
              <td>Рядовой</td>
              <td>Баранов Виктор Александрович</td>
              <td>01.04.1991</td>
              <td>99</td>
              <td>10</td>
              <td>263302</td>
              <td>ОФМС РОССИИ ПО ЕАО В Г. БИРОБИДЖАН</td>
              <td>2/15/2011</td>
          </tr>
          <tr id="LC1359" class="js-file-line">
            <td id="L1359" class="blob-num js-line-number" data-line-number="1359"></td>
              <td>Х-824809</td>
              <td>3099606</td>
              <td>Рядовой</td>
              <td>Втюрин Артём Владимирович</td>
              <td>10.05.1988</td>
              <td>8</td>
              <td>8</td>
              <td>752404</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В БИКИНСКОМ РАЙОНЕ</td>
              <td>2/25/2009</td>
          </tr>
          <tr id="LC1360" class="js-file-line">
            <td id="L1360" class="blob-num js-line-number" data-line-number="1360"></td>
              <td>СУ-470271</td>
              <td>3099762</td>
              <td>Рядовой</td>
              <td>Шуйский Евгений Александрович</td>
              <td>4/22/1995</td>
              <td>99</td>
              <td>14</td>
              <td>306033</td>
              <td>ОФМС России по ЕАО в с. Ленинское</td>
              <td>5/27/2015</td>
          </tr>
          <tr id="LC1361" class="js-file-line">
            <td id="L1361" class="blob-num js-line-number" data-line-number="1361"></td>
              <td>МТ-127029</td>
              <td>3099766</td>
              <td>Рядовой</td>
              <td>Цагараев Азамат Станиславович</td>
              <td>9/22/1994</td>
              <td>90</td>
              <td>14</td>
              <td>140242</td>
              <td>ОУФМС России по Северной Осетии - Алания в Алагирском районе</td>
              <td>10.07.2014</td>
          </tr>
          <tr id="LC1362" class="js-file-line">
            <td id="L1362" class="blob-num js-line-number" data-line-number="1362"></td>
              <td>ВС-335997</td>
              <td>3104258</td>
              <td>Рядовой</td>
              <td>Акименко Константин Иванович</td>
              <td>08.02.1997</td>
              <td>65</td>
              <td>11</td>
              <td>173628</td>
              <td> </td>
              <td>08.09.2011</td>
          </tr>
          <tr id="LC1363" class="js-file-line">
            <td id="L1363" class="blob-num js-line-number" data-line-number="1363"></td>
              <td>ВС-335973</td>
              <td>3104261</td>
              <td>Рядовой</td>
              <td>Бараковских Александр Дмитриевич</td>
              <td>06.10.1997</td>
              <td>65</td>
              <td>16</td>
              <td>348996</td>
              <td> </td>
              <td>11/23/2016</td>
          </tr>
          <tr id="LC1364" class="js-file-line">
            <td id="L1364" class="blob-num js-line-number" data-line-number="1364"></td>
              <td>ВС-335709</td>
              <td>3104413</td>
              <td>Рядовой</td>
              <td>Липатов Дмитрий Юрьевич</td>
              <td>02.11.1998</td>
              <td>65</td>
              <td>11</td>
              <td>318792</td>
              <td>ОУФМС России по Свердловской области в Невьянском р-не</td>
              <td>03.03.2012</td>
          </tr>
          <tr id="LC1365" class="js-file-line">
            <td id="L1365" class="blob-num js-line-number" data-line-number="1365"></td>
              <td>ВС-335812</td>
              <td>3104445</td>
              <td>Рядовой</td>
              <td>Рюмшин Евгений Раджиевич</td>
              <td>10.12.1998</td>
              <td>65</td>
              <td>12</td>
              <td>501736</td>
              <td>УФМС по республике Бурятия</td>
              <td>12.08.2012</td>
          </tr>
          <tr id="LC1366" class="js-file-line">
            <td id="L1366" class="blob-num js-line-number" data-line-number="1366"></td>
              <td>ВС-335828</td>
              <td>3104472</td>
              <td>Рядовой</td>
              <td>Шабуров Аркадий Аркадьевич</td>
              <td>12.01.1991</td>
              <td>65</td>
              <td>12</td>
              <td>500825</td>
              <td>УФМС по республике Бурятия</td>
              <td>9/25/2012</td>
          </tr>
          <tr id="LC1367" class="js-file-line">
            <td id="L1367" class="blob-num js-line-number" data-line-number="1367"></td>
              <td>ВС-050201</td>
              <td>3114806</td>
              <td>Рядовой</td>
              <td>Возлеев Александр Алексеевич</td>
              <td>11.10.1996</td>
              <td>63</td>
              <td>16</td>
              <td>336970</td>
              <td>ОУФМС России по Саратовской области в г. Балаково</td>
              <td>11/28/2016</td>
          </tr>
          <tr id="LC1368" class="js-file-line">
            <td id="L1368" class="blob-num js-line-number" data-line-number="1368"></td>
              <td>ВС-050206</td>
              <td>3114812</td>
              <td>Рядовой</td>
              <td>Ермилов Дмитрий Васильевич</td>
              <td>7/30/1997</td>
              <td>63</td>
              <td>11</td>
              <td>686139</td>
              <td>ОУФМС России по Саратовской области в г. Энгельсе</td>
              <td>09.08.2011</td>
          </tr>
          <tr id="LC1369" class="js-file-line">
            <td id="L1369" class="blob-num js-line-number" data-line-number="1369"></td>
              <td>ВС-050227</td>
              <td>3114832</td>
              <td>Рядовой</td>
              <td>Пашаев Рауф Физули оглы</td>
              <td>8/31/1998</td>
              <td>63</td>
              <td>12</td>
              <td>804691</td>
              <td>ОУФМС России по Саратовской области в г. Балашове</td>
              <td>9/17/2012</td>
          </tr>
          <tr id="LC1370" class="js-file-line">
            <td id="L1370" class="blob-num js-line-number" data-line-number="1370"></td>
              <td>МТ-117823</td>
              <td>3117671</td>
              <td>Рядовой</td>
              <td>Худяков Николай Владимирович</td>
              <td>11/27/1998</td>
              <td>10</td>
              <td>14</td>
              <td>398793</td>
              <td>отделением УФМС России по Амурской области в Михайловском районе</td>
              <td>10/17/2014</td>
          </tr>
          <tr id="LC1371" class="js-file-line">
            <td id="L1371" class="blob-num js-line-number" data-line-number="1371"></td>
              <td>МТ-139669</td>
              <td>3117830</td>
              <td>Рядовой</td>
              <td>Леонтьев Алексей Андреевич</td>
              <td>2/16/1998</td>
              <td>76</td>
              <td>12</td>
              <td>626388</td>
              <td>ТП УФМС  России по Забайкальскому краю в Кыринском районе</td>
              <td>08.07.2012</td>
          </tr>
          <tr id="LC1372" class="js-file-line">
            <td id="L1372" class="blob-num js-line-number" data-line-number="1372"></td>
              <td>СУ-460050</td>
              <td>3117907</td>
              <td>Рядовой</td>
              <td>Родионов Владислав Сергеевич</td>
              <td>5/31/1997</td>
              <td>76</td>
              <td>10</td>
              <td>548632</td>
              <td>ТП УФМС  России по Забайкальскому краю в Красночикойском районе</td>
              <td>8/15/2011</td>
          </tr>
          <tr id="LC1373" class="js-file-line">
            <td id="L1373" class="blob-num js-line-number" data-line-number="1373"></td>
              <td>МТ-232874</td>
              <td>3118007</td>
              <td>Рядовой</td>
              <td>Эрбес Евгений Павлович</td>
              <td>4/20/1998</td>
              <td>76</td>
              <td>11</td>
              <td>614510</td>
              <td> </td>
              <td>7/19/2012</td>
          </tr>
          <tr id="LC1374" class="js-file-line">
            <td id="L1374" class="blob-num js-line-number" data-line-number="1374"></td>
              <td>СУ-480363</td>
              <td>3118600</td>
              <td>Рядовой</td>
              <td>Ширшов Никита Аркадьевич</td>
              <td>6/24/1998</td>
              <td>46</td>
              <td>8</td>
              <td>64836</td>
              <td>Межрайонное ОФМС России по ЕАО в селе Ленинское</td>
              <td>02.01.2013</td>
          </tr>
          <tr id="LC1375" class="js-file-line">
            <td id="L1375" class="blob-num js-line-number" data-line-number="1375"></td>
              <td>СУ-475993</td>
              <td>3123203</td>
              <td>Рядовой</td>
              <td>Азимов Салим Шералишоевич</td>
              <td>11.11.1996</td>
              <td>98</td>
              <td>16</td>
              <td>681536</td>
              <td> </td>
              <td>11/21/2016</td>
          </tr>
          <tr id="LC1376" class="js-file-line">
            <td id="L1376" class="blob-num js-line-number" data-line-number="1376"></td>
              <td>МТ-183111</td>
              <td>3123684</td>
              <td>Рядовой</td>
              <td>Исмагилов Владислав Альбертович</td>
              <td>9/22/1998</td>
              <td>81</td>
              <td>14</td>
              <td>570175</td>
              <td>ТП УФМС по республике Бурятия  в Тарбагатайском р-не</td>
              <td>8/27/2014</td>
          </tr>
          <tr id="LC1377" class="js-file-line">
            <td id="L1377" class="blob-num js-line-number" data-line-number="1377"></td>
              <td>СУ-471295</td>
              <td>3123710</td>
              <td>Рядовой</td>
              <td>Ласаранов Энхэ Алдарович</td>
              <td>11.06.1998</td>
              <td>81</td>
              <td>12</td>
              <td>482645</td>
              <td>ТП УФМС России по республике Бурятия в Закаменском районе</td>
              <td>11/21/2012</td>
          </tr>
          <tr id="LC1378" class="js-file-line">
            <td id="L1378" class="blob-num js-line-number" data-line-number="1378"></td>
              <td>СУ-440319</td>
              <td>3125749</td>
              <td>Рядовой</td>
              <td>Смола Роман Николаевич</td>
              <td>10/21/1994</td>
              <td>8</td>
              <td>15</td>
              <td>346590</td>
              <td>УФМС по г. Саратову</td>
              <td>1/22/2016</td>
          </tr>
          <tr id="LC1379" class="js-file-line">
            <td id="L1379" class="blob-num js-line-number" data-line-number="1379"></td>
              <td>Х-786815</td>
              <td>3130461</td>
              <td>Рядовой</td>
              <td>Захаров Юрий Олегович</td>
              <td>07.08.1993</td>
              <td>8</td>
              <td>13</td>
              <td>152961</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ОХОТСКОМ РАЙОНЕ</td>
              <td>8/29/2013</td>
          </tr>
          <tr id="LC1380" class="js-file-line">
            <td id="L1380" class="blob-num js-line-number" data-line-number="1380"></td>
              <td>МТ-171586</td>
              <td>3132149</td>
              <td>Рядовой</td>
              <td>Кузнецова Екатерина Сергеевна</td>
              <td>07.08.1989</td>
              <td>8</td>
              <td>8</td>
              <td>811164</td>
              <td>ОУФМС России по Хабаровскому краю в Нанайском районе города Хабаров</td>
              <td>02.02.2017</td>
          </tr>
          <tr id="LC1381" class="js-file-line">
            <td id="L1381" class="blob-num js-line-number" data-line-number="1381"></td>
              <td>МТ-171210</td>
              <td>3133107</td>
              <td>Рядовой</td>
              <td>Маринченко Алексей Михайлович</td>
              <td>3/21/1986</td>
              <td>8</td>
              <td>15</td>
              <td>309658</td>
              <td>ОУФМС РОСИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>01.01.2015</td>
          </tr>
          <tr id="LC1382" class="js-file-line">
            <td id="L1382" class="blob-num js-line-number" data-line-number="1382"></td>
              <td>Х-820945</td>
              <td>3135318</td>
              <td>Рядовой</td>
              <td>Колодин Сергей Александрович</td>
              <td>10/13/1991</td>
              <td>99</td>
              <td>11</td>
              <td>268096</td>
              <td>ТП В ПОС. НИКОЛАЕВКА ОТДЕЛЕНИЯ ОФМС ПО ЕВРЕЙСКОЙ ОБЛАСТИ В СМ</td>
              <td>И2/2/2012</td>
          </tr>
          <tr id="LC1383" class="js-file-line">
            <td id="L1383" class="blob-num js-line-number" data-line-number="1383"></td>
              <td>Х-785640</td>
              <td>3135421</td>
              <td>Рядовой</td>
              <td>Борисенко Денис Игоревич</td>
              <td>07.01.1994</td>
              <td>8</td>
              <td>14</td>
              <td>249428</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе г.Хабар</td>
              <td>8/21/2014</td>
          </tr>
          <tr id="LC1384" class="js-file-line">
            <td id="L1384" class="blob-num js-line-number" data-line-number="1384"></td>
              <td>МТ-127055</td>
              <td>3136155</td>
              <td>Рядовой</td>
              <td>Нурматов Дилшод Шералиевич</td>
              <td>07.02.1993</td>
              <td>16</td>
              <td>54</td>
              <td>741158</td>
              <td>отделением УФМС России по Амурской области в Тамбовском районе</td>
              <td>12/16/2013</td>
          </tr>
          <tr id="LC1385" class="js-file-line">
            <td id="L1385" class="blob-num js-line-number" data-line-number="1385"></td>
              <td>МТ-127047</td>
              <td>3137754</td>
              <td>Рядовой</td>
              <td>Бевз Павел Аркадьевич</td>
              <td>08.07.1993</td>
              <td>8</td>
              <td>13</td>
              <td>185021</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе г.Хабар</td>
              <td>10.04.2013</td>
          </tr>
          <tr id="LC1386" class="js-file-line">
            <td id="L1386" class="blob-num js-line-number" data-line-number="1386"></td>
              <td>ВС-118526</td>
              <td>3138503</td>
              <td>Рядовой</td>
              <td>Брюханов Владимир Сергеевич</td>
              <td>06.08.1998</td>
              <td>25</td>
              <td>11</td>
              <td>680894</td>
              <td>ОУФМС России по Иркутской области в г. Тайшете и Тайшетском р-не</td>
              <td>07.12.2012</td>
          </tr>
          <tr id="LC1387" class="js-file-line">
            <td id="L1387" class="blob-num js-line-number" data-line-number="1387"></td>
              <td>ВС-118535</td>
              <td>3138522</td>
              <td>Рядовой</td>
              <td>Жвакин Михаил Артемович</td>
              <td>12/29/1998</td>
              <td>4</td>
              <td>16</td>
              <td>945142</td>
              <td> </td>
              <td>9/15/2016</td>
          </tr>
          <tr id="LC1388" class="js-file-line">
            <td id="L1388" class="blob-num js-line-number" data-line-number="1388"></td>
              <td>ВС-118551</td>
              <td>3138547</td>
              <td>Рядовой</td>
              <td>Новиков Николай Сергеевич</td>
              <td>3/16/1998</td>
              <td>4</td>
              <td>11</td>
              <td>260887</td>
              <td>ТП УФМС России по Красноярскому краю в Ирбейском р-не</td>
              <td>04.03.2012</td>
          </tr>
          <tr id="LC1389" class="js-file-line">
            <td id="L1389" class="blob-num js-line-number" data-line-number="1389"></td>
              <td>ВС-081458</td>
              <td>3140212</td>
              <td>Рядовой</td>
              <td>Власов Артем Александрович</td>
              <td>10/27/1997</td>
              <td>1</td>
              <td>11</td>
              <td>641325</td>
              <td> </td>
              <td>11.10.2011</td>
          </tr>
          <tr id="LC1390" class="js-file-line">
            <td id="L1390" class="blob-num js-line-number" data-line-number="1390"></td>
              <td>ВС-081453</td>
              <td>3140216</td>
              <td>Рядовой</td>
              <td>Жуков Евгений Дмитриевич</td>
              <td>10/23/1998</td>
              <td>1</td>
              <td>12</td>
              <td>827199</td>
              <td> </td>
              <td>11/19/2012</td>
          </tr>
          <tr id="LC1391" class="js-file-line">
            <td id="L1391" class="blob-num js-line-number" data-line-number="1391"></td>
              <td>ВС-081451</td>
              <td>3140218</td>
              <td>Рядовой</td>
              <td>Квашнин Сергей Дмитриевич</td>
              <td>10/27/1997</td>
              <td>32</td>
              <td>12</td>
              <td>228412</td>
              <td>ОУФМС России по Кемеровской области г. Междуреченском</td>
              <td>2/15/2013</td>
          </tr>
          <tr id="LC1392" class="js-file-line">
            <td id="L1392" class="blob-num js-line-number" data-line-number="1392"></td>
              <td>ВС-378695</td>
              <td>3144661</td>
              <td>Рядовой</td>
              <td>Будаев Олег Олегович</td>
              <td>02.10.1998</td>
              <td>25</td>
              <td>11</td>
              <td>649257</td>
              <td>ТП УФМС России по Иркутской области в Аларском р-не</td>
              <td>2/28/2012</td>
          </tr>
          <tr id="LC1393" class="js-file-line">
            <td id="L1393" class="blob-num js-line-number" data-line-number="1393"></td>
              <td>ВС-331918</td>
              <td>3144671</td>
              <td>Рядовой</td>
              <td>Рубан Иван Русланович</td>
              <td>06.12.1998</td>
              <td>25</td>
              <td>12</td>
              <td>712435</td>
              <td>ОУФМС России по Иркутской области в г. Братске и Братском р-не</td>
              <td>7/17/2012</td>
          </tr>
          <tr id="LC1394" class="js-file-line">
            <td id="L1394" class="blob-num js-line-number" data-line-number="1394"></td>
              <td>ВС-366240</td>
              <td>3144855</td>
              <td>Рядовой</td>
              <td>Петухов Вадим Петрович</td>
              <td>9/21/1998</td>
              <td>25</td>
              <td>13</td>
              <td>906091</td>
              <td>ОУФМС России по Иркутской области в г. Черемхово и Черемховском р-не</td>
              <td>02.06.2014</td>
          </tr>
          <tr id="LC1395" class="js-file-line">
            <td id="L1395" class="blob-num js-line-number" data-line-number="1395"></td>
              <td>Х-658791</td>
              <td>3148339</td>
              <td>Рядовой</td>
              <td>Багаутдинов Альберт Арсланович</td>
              <td>01.11.1983</td>
              <td>92</td>
              <td>4</td>
              <td>708705</td>
              <td>УПРАВЛЕНИЕМ ВНУТРЕННИХ ДЕЛ ГОРОДА АЛЬМЕТЬЕВСК РЕСПУБЛИКИ ТАТ</td>
              <td>А6/23/2004</td>
          </tr>
          <tr id="LC1396" class="js-file-line">
            <td id="L1396" class="blob-num js-line-number" data-line-number="1396"></td>
              <td>МТ-123834</td>
              <td>3150361</td>
              <td>Рядовой</td>
              <td>Доржиев Чингис Владимирович</td>
              <td>08.09.1998</td>
              <td>81</td>
              <td>13</td>
              <td>536209</td>
              <td> </td>
              <td>9/18/2013</td>
          </tr>
          <tr id="LC1397" class="js-file-line">
            <td id="L1397" class="blob-num js-line-number" data-line-number="1397"></td>
              <td>МТ-183163</td>
              <td>3150377</td>
              <td>Рядовой</td>
              <td>Лямин Николай Викторович</td>
              <td>12/19/1998</td>
              <td>81</td>
              <td>12</td>
              <td>494696</td>
              <td>ТП № 1 ОУФМС России по республике Бурятия Октябрьском р-не г. Улан-Уд</td>
              <td>1/25/2013</td>
          </tr>
          <tr id="LC1398" class="js-file-line">
            <td id="L1398" class="blob-num js-line-number" data-line-number="1398"></td>
              <td>ВС-372372</td>
              <td>3150437</td>
              <td>Рядовой</td>
              <td>Тетлянов Кирилл Максимович</td>
              <td>3/30/1999</td>
              <td>25</td>
              <td>15</td>
              <td>229521</td>
              <td>ОУФМС России по Иркутской области в г. Шелехове</td>
              <td>5/24/2016</td>
          </tr>
          <tr id="LC1399" class="js-file-line">
            <td id="L1399" class="blob-num js-line-number" data-line-number="1399"></td>
              <td>СУ-473862</td>
              <td>3151887</td>
              <td>Рядовой</td>
              <td>Белоусов Владислав Александрович</td>
              <td>3/24/1996</td>
              <td>8</td>
              <td>16</td>
              <td>366437</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕВРЕЙСКОЙ АВТОНОМНОЙ О</td>
              <td>Б4/27/2016</td>
          </tr>
          <tr id="LC1400" class="js-file-line">
            <td id="L1400" class="blob-num js-line-number" data-line-number="1400"></td>
              <td>МТ-107504</td>
              <td>3155833</td>
              <td>Рядовой</td>
              <td>Брызгалов Михаил Евгеньевич</td>
              <td>3/25/1999</td>
              <td>81</td>
              <td>13</td>
              <td>512475</td>
              <td> </td>
              <td>04.08.2013</td>
          </tr>
          <tr id="LC1401" class="js-file-line">
            <td id="L1401" class="blob-num js-line-number" data-line-number="1401"></td>
              <td>ВС-021608</td>
              <td>3156435</td>
              <td>Рядовой</td>
              <td>Макаров Григорий Алексеевич</td>
              <td>6/28/1997</td>
              <td>32</td>
              <td>11</td>
              <td>20541</td>
              <td>ОУФМС России по Кемеровской области в Новокузнецком р-не</td>
              <td>6/29/2011</td>
          </tr>
          <tr id="LC1402" class="js-file-line">
            <td id="L1402" class="blob-num js-line-number" data-line-number="1402"></td>
              <td>МТ-103277</td>
              <td>3158215</td>
              <td>Рядовой</td>
              <td>Дементьев Андрей Дмитриевич</td>
              <td>7/19/1998</td>
              <td>8</td>
              <td>17</td>
              <td>431465</td>
              <td> </td>
              <td>5/15/2017</td>
          </tr>
          <tr id="LC1403" class="js-file-line">
            <td id="L1403" class="blob-num js-line-number" data-line-number="1403"></td>
              <td>МТ-150895</td>
              <td>3158232</td>
              <td>Рядовой</td>
              <td>Игнатьев Павел Александрович</td>
              <td>9/21/1998</td>
              <td>8</td>
              <td>12</td>
              <td>106572</td>
              <td>отделением УФМС России по Амурской области в Константиновском район</td>
              <td>10/24/2012</td>
          </tr>
          <tr id="LC1404" class="js-file-line">
            <td id="L1404" class="blob-num js-line-number" data-line-number="1404"></td>
              <td>МТ-177860</td>
              <td>3158245</td>
              <td>Рядовой</td>
              <td>Киле Владислав Валерьевич</td>
              <td>04.02.1999</td>
              <td>8</td>
              <td>13</td>
              <td>150432</td>
              <td> </td>
              <td>05.07.2013</td>
          </tr>
          <tr id="LC1405" class="js-file-line">
            <td id="L1405" class="blob-num js-line-number" data-line-number="1405"></td>
              <td>МТ-177354</td>
              <td>3158286</td>
              <td>Рядовой</td>
              <td>Марченко Виктор Николаевич</td>
              <td>8/20/1998</td>
              <td>8</td>
              <td>11</td>
              <td>70983</td>
              <td>ОУФМС России по Хабаровскому краю в Нанайском районе</td>
              <td>09.06.2012</td>
          </tr>
          <tr id="LC1406" class="js-file-line">
            <td id="L1406" class="blob-num js-line-number" data-line-number="1406"></td>
              <td>МТ-177920</td>
              <td>3158287</td>
              <td>Рядовой</td>
              <td>Матрасулов Рустам Тошпулотович</td>
              <td>07.12.1996</td>
              <td>99</td>
              <td>16</td>
              <td>317352</td>
              <td>ТП в пос. Николаевка отделения ОФМС России по Еврейской Автономной о</td>
              <td>б8/12/2016</td>
          </tr>
          <tr id="LC1407" class="js-file-line">
            <td id="L1407" class="blob-num js-line-number" data-line-number="1407"></td>
              <td>МТ-177565</td>
              <td>3158290</td>
              <td>Рядовой</td>
              <td>Мизев Игнат Викторович</td>
              <td>01.04.1999</td>
              <td>8</td>
              <td>12</td>
              <td>122415</td>
              <td> </td>
              <td>1/15/2013</td>
          </tr>
          <tr id="LC1408" class="js-file-line">
            <td id="L1408" class="blob-num js-line-number" data-line-number="1408"></td>
              <td>МТ-103294</td>
              <td>3158319</td>
              <td>Рядовой</td>
              <td>Палтусов Алексей Николаевич</td>
              <td>2/20/1998</td>
              <td>8</td>
              <td>11</td>
              <td>56567</td>
              <td> </td>
              <td>2/29/2012</td>
          </tr>
          <tr id="LC1409" class="js-file-line">
            <td id="L1409" class="blob-num js-line-number" data-line-number="1409"></td>
              <td>МТ-177476</td>
              <td>3158358</td>
              <td>Рядовой</td>
              <td>Сиднев Сергей Константинович</td>
              <td>5/16/1997</td>
              <td>8</td>
              <td>10</td>
              <td>921464</td>
              <td>ОУФМС России по Хабаровскому краю в Бикинском р-не</td>
              <td>6/27/2011</td>
          </tr>
          <tr id="LC1410" class="js-file-line">
            <td id="L1410" class="blob-num js-line-number" data-line-number="1410"></td>
              <td>МТ-205627</td>
              <td>3158644</td>
              <td>Рядовой</td>
              <td>Байковский Александр Олегович</td>
              <td>7/14/1998</td>
              <td>74</td>
              <td>12</td>
              <td>809227</td>
              <td> </td>
              <td>12/21/2012</td>
          </tr>
          <tr id="LC1411" class="js-file-line">
            <td id="L1411" class="blob-num js-line-number" data-line-number="1411"></td>
              <td>СУ-480747</td>
              <td>3158754</td>
              <td>Рядовой</td>
              <td>Солоха Сергей Андреевич</td>
              <td>3/20/1999</td>
              <td>79</td>
              <td>36</td>
              <td>556462</td>
              <td>УФМС по Алтайскому краю</td>
              <td>06.12.2015</td>
          </tr>
          <tr id="LC1412" class="js-file-line">
            <td id="L1412" class="blob-num js-line-number" data-line-number="1412"></td>
              <td>МТ-127125</td>
              <td>3163101</td>
              <td>Рядовой</td>
              <td>Сапегин Юрий Константинович</td>
              <td>1/27/1993</td>
              <td>8</td>
              <td>12</td>
              <td>134108</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЦЕНТРАЛЬНОМ РАЙ</td>
              <td>О2/5/2013</td>
          </tr>
          <tr id="LC1413" class="js-file-line">
            <td id="L1413" class="blob-num js-line-number" data-line-number="1413"></td>
              <td>ВЕ-018848</td>
              <td>3169317</td>
              <td>Рядовой</td>
              <td>Огарков Владимир Николаевич</td>
              <td>3/18/1995</td>
              <td>52</td>
              <td>14</td>
              <td>422285</td>
              <td>ТП УФМС России по Омской области в Полтавском районе</td>
              <td>3/27/2015</td>
          </tr>
          <tr id="LC1414" class="js-file-line">
            <td id="L1414" class="blob-num js-line-number" data-line-number="1414"></td>
              <td>ВС-201861</td>
              <td>3169794</td>
              <td>Рядовой</td>
              <td>Гаджиев Султанмут Салимсултанович</td>
              <td>10/18/1997</td>
              <td>82</td>
              <td>11</td>
              <td>66877</td>
              <td>ТП УФМС России по республике Дагестан в Бабаюртовском р-не</td>
              <td>11.10.2011</td>
          </tr>
          <tr id="LC1415" class="js-file-line">
            <td id="L1415" class="blob-num js-line-number" data-line-number="1415"></td>
              <td>МТ-139656</td>
              <td>3171018</td>
              <td>Рядовой</td>
              <td>Гладких Денис Витальевич</td>
              <td>10.01.1998</td>
              <td>10</td>
              <td>17</td>
              <td>530039</td>
              <td>ОУФМС России по Амурской области в г. Райчихинске</td>
              <td>7/19/2017</td>
          </tr>
          <tr id="LC1416" class="js-file-line">
            <td id="L1416" class="blob-num js-line-number" data-line-number="1416"></td>
              <td>СУ-460814</td>
              <td>3171050</td>
              <td>Рядовой</td>
              <td>Зубарев Александр Вячеславович</td>
              <td>11.05.1998</td>
              <td>76</td>
              <td>12</td>
              <td>658320</td>
              <td>ТП в п. Оловянная ОУФМС России по забайкальскому краю в Оловяннинско</td>
              <td>12.10.2012</td>
          </tr>
          <tr id="LC1417" class="js-file-line">
            <td id="L1417" class="blob-num js-line-number" data-line-number="1417"></td>
              <td>МТ-172975</td>
              <td>3171089</td>
              <td>Рядовой</td>
              <td>Ломбоев Цырен Бадмажапович</td>
              <td>8/18/1998</td>
              <td>76</td>
              <td>11</td>
              <td>617799</td>
              <td>ТП УФМС России по Забайкальскому краю в Могойтуйском районе</td>
              <td>12.07.2012</td>
          </tr>
          <tr id="LC1418" class="js-file-line">
            <td id="L1418" class="blob-num js-line-number" data-line-number="1418"></td>
              <td>СУ-460821</td>
              <td>3171136</td>
              <td>Рядовой</td>
              <td>Попов Иван Владимирович</td>
              <td>01.05.1999</td>
              <td>76</td>
              <td>13</td>
              <td>682258</td>
              <td>ОУФМС России по Забайкальскому краю в Оловяннинском р-не</td>
              <td>04.04.2013</td>
          </tr>
          <tr id="LC1419" class="js-file-line">
            <td id="L1419" class="blob-num js-line-number" data-line-number="1419"></td>
              <td>СУ-460825</td>
              <td>3171179</td>
              <td>Рядовой</td>
              <td>Филиппов Виктор Сергеевич</td>
              <td>06.01.1997</td>
              <td>76</td>
              <td>15</td>
              <td>812086</td>
              <td>ОУФМС России по Забайкальскому краю в п. Ясногорск</td>
              <td>06.04.2015</td>
          </tr>
          <tr id="LC1420" class="js-file-line">
            <td id="L1420" class="blob-num js-line-number" data-line-number="1420"></td>
              <td>СУ-480913</td>
              <td>3171293</td>
              <td>Рядовой</td>
              <td>Карасевич Валерий Андреевич</td>
              <td>4/15/1998</td>
              <td>5</td>
              <td>14</td>
              <td>236009</td>
              <td>ОУФМС России по Приморскому краю в Уссурийском городском округе</td>
              <td>12/22/2014</td>
          </tr>
          <tr id="LC1421" class="js-file-line">
            <td id="L1421" class="blob-num js-line-number" data-line-number="1421"></td>
              <td>СУ-440267</td>
              <td>3173150</td>
              <td>Рядовой</td>
              <td>Духовников Евгений Иванович</td>
              <td>1/30/1999</td>
              <td>8</td>
              <td>12</td>
              <td>116501</td>
              <td> </td>
              <td>2/25/2013</td>
          </tr>
          <tr id="LC1422" class="js-file-line">
            <td id="L1422" class="blob-num js-line-number" data-line-number="1422"></td>
              <td>МТ-150494</td>
              <td>3173184</td>
              <td>Рядовой</td>
              <td>Перов Андрей Юрьевич</td>
              <td>08.11.1998</td>
              <td>8</td>
              <td>12</td>
              <td>119271</td>
              <td>ОУФМС России по Хабаровскому краю  в Индустриальном р-не г. Хабаровск</td>
              <td>11/14/2012</td>
          </tr>
          <tr id="LC1423" class="js-file-line">
            <td id="L1423" class="blob-num js-line-number" data-line-number="1423"></td>
              <td>ВС-058513</td>
              <td>3173328</td>
              <td>Рядовой</td>
              <td>Доржу Батыр Мергенович</td>
              <td>05.08.1997</td>
              <td>93</td>
              <td>17</td>
              <td>574863</td>
              <td> </td>
              <td>5/13/2017</td>
          </tr>
          <tr id="LC1424" class="js-file-line">
            <td id="L1424" class="blob-num js-line-number" data-line-number="1424"></td>
              <td>ВС-387283</td>
              <td>3173944</td>
              <td>Рядовой</td>
              <td>Давлеткулов Евгений Гайфуллович</td>
              <td>04.02.1999</td>
              <td>75</td>
              <td>12</td>
              <td>216571</td>
              <td>ОУФМС России по Челябинской области в Брединском р-не</td>
              <td>04.03.2013</td>
          </tr>
          <tr id="LC1425" class="js-file-line">
            <td id="L1425" class="blob-num js-line-number" data-line-number="1425"></td>
              <td>ВС-405154</td>
              <td>3174809</td>
              <td>Рядовой</td>
              <td>Вавилов Иван Сергеевич</td>
              <td>01.06.1999</td>
              <td>65</td>
              <td>13</td>
              <td>665685</td>
              <td> </td>
              <td>8/28/2013</td>
          </tr>
          <tr id="LC1426" class="js-file-line">
            <td id="L1426" class="blob-num js-line-number" data-line-number="1426"></td>
              <td>ВС-322952</td>
              <td>3175454</td>
              <td>Рядовой</td>
              <td>Яковлев Денис Олегович</td>
              <td>4/14/1997</td>
              <td>53</td>
              <td>17</td>
              <td>712261</td>
              <td>ОУФМС России по Оренбургской области</td>
              <td>5/24/2017</td>
          </tr>
          <tr id="LC1427" class="js-file-line">
            <td id="L1427" class="blob-num js-line-number" data-line-number="1427"></td>
              <td>МТ-123705</td>
              <td>3177620</td>
              <td>Рядовой</td>
              <td>Вандаев Александр Мункуевич</td>
              <td>12/24/1997</td>
              <td>81</td>
              <td>11</td>
              <td>431436</td>
              <td>ТП УФМС России по республике Бурятия в  Хоринском р-не</td>
              <td>1/18/2012</td>
          </tr>
          <tr id="LC1428" class="js-file-line">
            <td id="L1428" class="blob-num js-line-number" data-line-number="1428"></td>
              <td>ВС-017435</td>
              <td>3177916</td>
              <td>Рядовой</td>
              <td>Федорин Дмитрий Сергеевич</td>
              <td>1/27/1999</td>
              <td>63</td>
              <td>12</td>
              <td>792993</td>
              <td>ТП УФМС России по Саратовской области в Романовском р-не</td>
              <td>3/13/2013</td>
          </tr>
          <tr id="LC1429" class="js-file-line">
            <td id="L1429" class="blob-num js-line-number" data-line-number="1429"></td>
              <td>ВС-083434</td>
              <td>3178089</td>
              <td>Рядовой</td>
              <td>Дудоладов Алексей Андреевич</td>
              <td>3/19/1998</td>
              <td>52</td>
              <td>16</td>
              <td>589305</td>
              <td>ОУФМС России по Омской области в Омском р-не</td>
              <td>11.11.2016</td>
          </tr>
          <tr id="LC1430" class="js-file-line">
            <td id="L1430" class="blob-num js-line-number" data-line-number="1430"></td>
              <td>ВС-360846</td>
              <td>3178337</td>
              <td>Рядовой</td>
              <td>Ахметгареев Владислав Арсенович</td>
              <td>04.10.1997</td>
              <td>80</td>
              <td>17</td>
              <td>561183</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО РЕСПУБЛИКЕ БАШКОРТОСТАН В ОКТЯБРЬС</td>
              <td>4/27/2017</td>
          </tr>
          <tr id="LC1431" class="js-file-line">
            <td id="L1431" class="blob-num js-line-number" data-line-number="1431"></td>
              <td>ВС-360778</td>
              <td>3178386</td>
              <td>Рядовой</td>
              <td>Малькевич Даниил Викторович</td>
              <td>05.06.1998</td>
              <td>80</td>
              <td>11</td>
              <td>470337</td>
              <td>ОУФМС РОССИИ ПО РЕСПУБЛИКЕ БАШКОРТОСТАН В Г.БИРСК</td>
              <td>5/25/2012</td>
          </tr>
          <tr id="LC1432" class="js-file-line">
            <td id="L1432" class="blob-num js-line-number" data-line-number="1432"></td>
              <td>ВС-360782</td>
              <td>3178396</td>
              <td>Рядовой</td>
              <td>Сафронов Максим Андреевич</td>
              <td>11/17/1998</td>
              <td>80</td>
              <td>12</td>
              <td>615236</td>
              <td>отделением УФМС России по республике Башкортостан в Благоварском ра</td>
              <td>й12/3/2012</td>
          </tr>
          <tr id="LC1433" class="js-file-line">
            <td id="L1433" class="blob-num js-line-number" data-line-number="1433"></td>
              <td>ВС-118203</td>
              <td>3178459</td>
              <td>Рядовой</td>
              <td>Арсентьев Владимир Валерьевич</td>
              <td>11.09.1998</td>
              <td>4</td>
              <td>12</td>
              <td>402806</td>
              <td> </td>
              <td>1/26/2013</td>
          </tr>
          <tr id="LC1434" class="js-file-line">
            <td id="L1434" class="blob-num js-line-number" data-line-number="1434"></td>
              <td>ВС-355264</td>
              <td>3178471</td>
              <td>Рядовой</td>
              <td>Вафин Радиф Фанилевич</td>
              <td>12/17/1998</td>
              <td>80</td>
              <td>12</td>
              <td>716928</td>
              <td>ОУФМС России по республике Башкортостан в Абзелиловском р-не</td>
              <td>3/27/2013</td>
          </tr>
          <tr id="LC1435" class="js-file-line">
            <td id="L1435" class="blob-num js-line-number" data-line-number="1435"></td>
              <td>ВС-355275</td>
              <td>3178482</td>
              <td>Рядовой</td>
              <td>Мелентьев Артур Раширович</td>
              <td>4/29/1999</td>
              <td>80</td>
              <td>13</td>
              <td>782081</td>
              <td>ТП ОФМС России по Агинскому Бурятскому автономному округу в Могойтус</td>
              <td>09.04.2013</td>
          </tr>
          <tr id="LC1436" class="js-file-line">
            <td id="L1436" class="blob-num js-line-number" data-line-number="1436"></td>
              <td>ВС-075123</td>
              <td>3178536</td>
              <td>Рядовой</td>
              <td>Могилевский Сергей Александрович</td>
              <td>11.05.1998</td>
              <td>1</td>
              <td>12</td>
              <td>798822</td>
              <td>ТП УФМС России по Алтайскому краю в Рубцовском районе</td>
              <td>11/21/2012</td>
          </tr>
          <tr id="LC1437" class="js-file-line">
            <td id="L1437" class="blob-num js-line-number" data-line-number="1437"></td>
              <td>ВС-075146</td>
              <td>3178544</td>
              <td>Рядовой</td>
              <td>Облызалов Никита Дмитриевич</td>
              <td>01.07.1999</td>
              <td>1</td>
              <td>12</td>
              <td>798404</td>
              <td>ТП УФМС России по Алтайскому краю в с. Новичиха</td>
              <td>1/30/2013</td>
          </tr>
          <tr id="LC1438" class="js-file-line">
            <td id="L1438" class="blob-num js-line-number" data-line-number="1438"></td>
              <td>ВС-120313</td>
              <td>3178647</td>
              <td>Рядовой</td>
              <td>Жидков Алексей Станиславович</td>
              <td>2/22/1998</td>
              <td>4</td>
              <td>11</td>
              <td>265488</td>
              <td>ОУФМС России по Красноярскому в г. Минусинске и Минусинском р-не</td>
              <td>3/20/2012</td>
          </tr>
          <tr id="LC1439" class="js-file-line">
            <td id="L1439" class="blob-num js-line-number" data-line-number="1439"></td>
              <td>ВС-058609</td>
              <td>3179351</td>
              <td>Рядовой</td>
              <td>Долума Самбуу Олегович</td>
              <td>6/17/1993</td>
              <td>93</td>
              <td>14</td>
              <td>517182</td>
              <td> </td>
              <td>8/28/2014</td>
          </tr>
          <tr id="LC1440" class="js-file-line">
            <td id="L1440" class="blob-num js-line-number" data-line-number="1440"></td>
              <td>ВС-058605</td>
              <td>3179353</td>
              <td>Рядовой</td>
              <td>Доржу Менги Мергенович</td>
              <td>7/31/1996</td>
              <td>93</td>
              <td>16</td>
              <td>563636</td>
              <td>ОУФМС России по Красноярскому краю и республике Тыва</td>
              <td>10/18/2016</td>
          </tr>
          <tr id="LC1441" class="js-file-line">
            <td id="L1441" class="blob-num js-line-number" data-line-number="1441"></td>
              <td>ВС-058601</td>
              <td>3179354</td>
              <td>Рядовой</td>
              <td>Кара-Сал Баян Владимирович</td>
              <td>12.11.1998</td>
              <td>93</td>
              <td>12</td>
              <td>479424</td>
              <td>ТП ОФМС России по республике Тыва в дзун-Хемчикском р-не</td>
              <td>2/20/2013</td>
          </tr>
          <tr id="LC1442" class="js-file-line">
            <td id="L1442" class="blob-num js-line-number" data-line-number="1442"></td>
              <td>ВС-058600</td>
              <td>3179357</td>
              <td>Рядовой</td>
              <td>Монгуш Кудер Маратович</td>
              <td>3/30/1998</td>
              <td>93</td>
              <td>14</td>
              <td>523318</td>
              <td>ТП ОФМС России по Республике Тыва в Дзун-Хемчикском р-не</td>
              <td>12/30/2014</td>
          </tr>
          <tr id="LC1443" class="js-file-line">
            <td id="L1443" class="blob-num js-line-number" data-line-number="1443"></td>
              <td>ВС-058599</td>
              <td>3179362</td>
              <td>Рядовой</td>
              <td>Сарыглар Аржаан Каадыр-оолович</td>
              <td>02.01.1996</td>
              <td>1</td>
              <td>16</td>
              <td>227328</td>
              <td>ОУФМС России по Алтайскому краю и республике Алтай в Железнодорожн</td>
              <td>о5/26/2016</td>
          </tr>
          <tr id="LC1444" class="js-file-line">
            <td id="L1444" class="blob-num js-line-number" data-line-number="1444"></td>
              <td>ВС-058607</td>
              <td>3179363</td>
              <td>Рядовой</td>
              <td>Сат Ай-чурек Валерьевич</td>
              <td>5/13/1993</td>
              <td>93</td>
              <td>11</td>
              <td>453601</td>
              <td>ТП ОФМС по республике Тыва в Улуг-Хемском р-не</td>
              <td>7/16/2013</td>
          </tr>
          <tr id="LC1445" class="js-file-line">
            <td id="L1445" class="blob-num js-line-number" data-line-number="1445"></td>
              <td>ВС-058608</td>
              <td>3179365</td>
              <td>Рядовой</td>
              <td>Холдугбей Орлан Романович</td>
              <td>4/22/1999</td>
              <td>93</td>
              <td>11</td>
              <td>454131</td>
              <td>ТП ОФМС России по республике Тыва в Пий-Хемском р-не</td>
              <td>2/15/2014</td>
          </tr>
          <tr id="LC1446" class="js-file-line">
            <td id="L1446" class="blob-num js-line-number" data-line-number="1446"></td>
              <td>МТ-153328</td>
              <td>3181063</td>
              <td>Рядовой</td>
              <td>Моисеенко Роман Андреевич</td>
              <td>01.02.1999</td>
              <td>10</td>
              <td>12</td>
              <td>336606</td>
              <td>ОУФМС России по Амурской области в г. Белогорске</td>
              <td>2/21/2013</td>
          </tr>
          <tr id="LC1447" class="js-file-line">
            <td id="L1447" class="blob-num js-line-number" data-line-number="1447"></td>
              <td>МТ-191004</td>
              <td>3181317</td>
              <td>Рядовой</td>
              <td>Соколов Никита Владиславович</td>
              <td>3/26/1997</td>
              <td>76</td>
              <td>17</td>
              <td>929402</td>
              <td> </td>
              <td>3/28/2017</td>
          </tr>
          <tr id="LC1448" class="js-file-line">
            <td id="L1448" class="blob-num js-line-number" data-line-number="1448"></td>
              <td>СУ-445118</td>
              <td>3181479</td>
              <td>Рядовой</td>
              <td>Тимошенко Николай Константинович</td>
              <td>2/28/1999</td>
              <td>64</td>
              <td>17</td>
              <td>601491</td>
              <td>ОУФМС России по Самарской области в Октябрьском районе г. Хааб</td>
              <td>3/23/2012</td>
          </tr>
          <tr id="LC1449" class="js-file-line">
            <td id="L1449" class="blob-num js-line-number" data-line-number="1449"></td>
              <td>СУ-445134</td>
              <td>3181495</td>
              <td>Рядовой</td>
              <td>Лемперт Герман Максимович</td>
              <td>7/29/1997</td>
              <td>5</td>
              <td>11</td>
              <td>885675</td>
              <td>ОУФМС России по Приморскому краю в Первомайском р-не г. Владивосток</td>
              <td>09.06.2011</td>
          </tr>
          <tr id="LC1450" class="js-file-line">
            <td id="L1450" class="blob-num js-line-number" data-line-number="1450"></td>
              <td>ВС-000630</td>
              <td>3182876</td>
              <td>Рядовой</td>
              <td>Мальцев Иван Дмитриевич</td>
              <td>09.07.1995</td>
              <td>69</td>
              <td>15</td>
              <td>675293</td>
              <td>ОУФМС России по Томской области в г. Северске</td>
              <td>10.12.2015</td>
          </tr>
          <tr id="LC1451" class="js-file-line">
            <td id="L1451" class="blob-num js-line-number" data-line-number="1451"></td>
              <td>ВС-000640</td>
              <td>3182885</td>
              <td>Рядовой</td>
              <td>Салтыков Дмитрий Андреевич</td>
              <td>3/26/1998</td>
              <td>69</td>
              <td>11</td>
              <td>473792</td>
              <td>Пролетарским РОВД г.Твери</td>
              <td>04.04.2012</td>
          </tr>
          <tr id="LC1452" class="js-file-line">
            <td id="L1452" class="blob-num js-line-number" data-line-number="1452"></td>
              <td>ВС-254327</td>
              <td>3183020</td>
              <td>Рядовой</td>
              <td>Грес Владлен Олегович</td>
              <td>3/30/1995</td>
              <td>50</td>
              <td>15</td>
              <td>415085</td>
              <td>Отделом УФМС России по Новосибирской области в Октябрьском районе г.</td>
              <td>6/26/2015</td>
          </tr>
          <tr id="LC1453" class="js-file-line">
            <td id="L1453" class="blob-num js-line-number" data-line-number="1453"></td>
              <td>СУ-460860</td>
              <td>3186842</td>
              <td>Рядовой</td>
              <td>Золотухин Александр Сергеевич</td>
              <td>4/28/1998</td>
              <td>76</td>
              <td>14</td>
              <td>757229</td>
              <td>ОУФМС России по Забайкальскому краю в п. Ясногорск</td>
              <td>07.02.2014</td>
          </tr>
          <tr id="LC1454" class="js-file-line">
            <td id="L1454" class="blob-num js-line-number" data-line-number="1454"></td>
              <td>СУ-472361</td>
              <td>3186899</td>
              <td>Рядовой</td>
              <td>Лончаков Виталий Дмитриевич</td>
              <td>3/14/1999</td>
              <td>76</td>
              <td>12</td>
              <td>665941</td>
              <td> </td>
              <td>04.02.2013</td>
          </tr>
          <tr id="LC1455" class="js-file-line">
            <td id="L1455" class="blob-num js-line-number" data-line-number="1455"></td>
              <td>СУ-445166</td>
              <td>3187042</td>
              <td>Рядовой</td>
              <td>Голенев Владислав Сергеевич</td>
              <td>1/28/1999</td>
              <td>5</td>
              <td>13</td>
              <td>51160</td>
              <td>ТП № 1 МРО УФМС России по Приморскому краю в Шкотовском МР, ЗАТО г</td>
              <td>2/27/2013</td>
          </tr>
          <tr id="LC1456" class="js-file-line">
            <td id="L1456" class="blob-num js-line-number" data-line-number="1456"></td>
              <td>СУ-445195</td>
              <td>3187071</td>
              <td>Рядовой</td>
              <td>Патюков Виктор Александрович</td>
              <td>02.01.1999</td>
              <td>99</td>
              <td>12</td>
              <td>285885</td>
              <td>МО ОФМС России по Еврейской автономной области в г. Биробиджан</td>
              <td>3/28/2013</td>
          </tr>
          <tr id="LC1457" class="js-file-line">
            <td id="L1457" class="blob-num js-line-number" data-line-number="1457"></td>
              <td>СУ-445197</td>
              <td>3187073</td>
              <td>Рядовой</td>
              <td>Сацук Александр Александрович</td>
              <td>1/21/1997</td>
              <td>96</td>
              <td>36</td>
              <td>746332</td>
              <td>ОТДЕЛОМ УФМС РОССИИ ПО ОРЕНБУРГСКОЙ ОБЛ. В ГОР. НОВОТРОИЦКЕ</td>
              <td>5/13/2014</td>
          </tr>
          <tr id="LC1458" class="js-file-line">
            <td id="L1458" class="blob-num js-line-number" data-line-number="1458"></td>
              <td>СУ-445211</td>
              <td>3187087</td>
              <td>Рядовой</td>
              <td>Ким Руслан Брониславович</td>
              <td>05.12.1997</td>
              <td>5</td>
              <td>17</td>
              <td>457651</td>
              <td>ТП УФМС РОССИИ ПО ПРИМОРСКОМУ КРАЮ В ПОЖАРСКОМ РАЙОНЕ</td>
              <td>5/22/2017</td>
          </tr>
          <tr id="LC1459" class="js-file-line">
            <td id="L1459" class="blob-num js-line-number" data-line-number="1459"></td>
              <td>СУ-445238</td>
              <td>3187114</td>
              <td>Рядовой</td>
              <td>Нестеренко Валентин Денисович</td>
              <td>4/20/1998</td>
              <td>5</td>
              <td>12</td>
              <td>983436</td>
              <td>ОУФМС России по Приморскому краю в Дальнереченском городском округ</td>
              <td>7/25/2012</td>
          </tr>
          <tr id="LC1460" class="js-file-line">
            <td id="L1460" class="blob-num js-line-number" data-line-number="1460"></td>
              <td>ВЕ-019648</td>
              <td>3188420</td>
              <td>Рядовой</td>
              <td>Тареев Дмитрий Владимирович</td>
              <td>7/24/1998</td>
              <td>44</td>
              <td>12</td>
              <td>291978</td>
              <td>ОУФМС России по Магаданской области в г. Магадане</td>
              <td>8/31/2012</td>
          </tr>
          <tr id="LC1461" class="js-file-line">
            <td id="L1461" class="blob-num js-line-number" data-line-number="1461"></td>
              <td>МТ-137859</td>
              <td>3188455</td>
              <td>Рядовой</td>
              <td>Шарипов Тамерлан Кайратович</td>
              <td>3/18/1999</td>
              <td>95</td>
              <td>15</td>
              <td>878463</td>
              <td> </td>
              <td>6/18/2015</td>
          </tr>
          <tr id="LC1462" class="js-file-line">
            <td id="L1462" class="blob-num js-line-number" data-line-number="1462"></td>
              <td>СУ-445320</td>
              <td>3188519</td>
              <td>Рядовой</td>
              <td>Абдулкаюмов Руслан Рафикович</td>
              <td>7/14/1998</td>
              <td>5</td>
              <td>11</td>
              <td>913523</td>
              <td>ТП № 1 МРО УФМС России по Приморскому краю в Шкотовском МР, ЗАТО г</td>
              <td>7/18/2017</td>
          </tr>
          <tr id="LC1463" class="js-file-line">
            <td id="L1463" class="blob-num js-line-number" data-line-number="1463"></td>
              <td>СУ-445358</td>
              <td>3188550</td>
              <td>Рядовой</td>
              <td>Радович Степан Борисович</td>
              <td>4/28/1997</td>
              <td>5</td>
              <td>17</td>
              <td>469292</td>
              <td>ОУФМС России по Приморскому краю в чугуевском муниципальном р-не</td>
              <td>06.02.2017</td>
          </tr>
          <tr id="LC1464" class="js-file-line">
            <td id="L1464" class="blob-num js-line-number" data-line-number="1464"></td>
              <td>СУ-445361</td>
              <td>3188553</td>
              <td>Рядовой</td>
              <td>Благов Александр Русланович</td>
              <td>3/28/1999</td>
              <td>5</td>
              <td>13</td>
              <td>65363</td>
              <td>МО УФМС России по Приморскому краю по городскому округу Спасск-Даль</td>
              <td>4/25/2013</td>
          </tr>
          <tr id="LC1465" class="js-file-line">
            <td id="L1465" class="blob-num js-line-number" data-line-number="1465"></td>
              <td>ВС-090608</td>
              <td>3191256</td>
              <td>Рядовой</td>
              <td>Иванов Дмитрий Александрович</td>
              <td>12/26/1997</td>
              <td>5</td>
              <td>13</td>
              <td>127880</td>
              <td>ОУФМС России по Приморскому краю в Первореченском р-не</td>
              <td>11/20/2013</td>
          </tr>
          <tr id="LC1466" class="js-file-line">
            <td id="L1466" class="blob-num js-line-number" data-line-number="1466"></td>
              <td>ВС-120749</td>
              <td>3194077</td>
              <td>Рядовой</td>
              <td>Литенков Андрей Юрьевич</td>
              <td>05.11.1999</td>
              <td>4</td>
              <td>11</td>
              <td>263875</td>
              <td>ОУФМС России по Красноярскому краю в Шушенском р-не</td>
              <td>5/28/2013</td>
          </tr>
          <tr id="LC1467" class="js-file-line">
            <td id="L1467" class="blob-num js-line-number" data-line-number="1467"></td>
              <td>МТ-204312</td>
              <td>3194619</td>
              <td>Рядовой</td>
              <td>Антонов Эдуард Сергеевич</td>
              <td>4/30/1979</td>
              <td>8</td>
              <td>10</td>
              <td>969993</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>2/18/2011</td>
          </tr>
          <tr id="LC1468" class="js-file-line">
            <td id="L1468" class="blob-num js-line-number" data-line-number="1468"></td>
              <td>ВС-059774</td>
              <td>3196697</td>
              <td>Рядовой</td>
              <td>Батаев Василий Александрович</td>
              <td>5/27/1999</td>
              <td>95</td>
              <td>15</td>
              <td>878026</td>
              <td>ТП УФМС России по республике Хакасия в Орджоникидзевском р-не</td>
              <td>06.11.2015</td>
          </tr>
          <tr id="LC1469" class="js-file-line">
            <td id="L1469" class="blob-num js-line-number" data-line-number="1469"></td>
              <td>МТ-150224</td>
              <td>3199382</td>
              <td>Рядовой</td>
              <td>Бучковский Сергей Константинович</td>
              <td>2/27/1999</td>
              <td>99</td>
              <td>13</td>
              <td>287139</td>
              <td> </td>
              <td>4/29/2013</td>
          </tr>
          <tr id="LC1470" class="js-file-line">
            <td id="L1470" class="blob-num js-line-number" data-line-number="1470"></td>
              <td>СУ-440079</td>
              <td>3199401</td>
              <td>Рядовой</td>
              <td>Громов Родион Николаевич</td>
              <td>11/24/1995</td>
              <td>8</td>
              <td>15</td>
              <td>350220</td>
              <td>отделом УФМС России по Хабаровскому краю в Индустриальном р-не г. Ха</td>
              <td>б2/5/2016</td>
          </tr>
          <tr id="LC1471" class="js-file-line">
            <td id="L1471" class="blob-num js-line-number" data-line-number="1471"></td>
              <td>СУ-440783</td>
              <td>3199406</td>
              <td>Рядовой</td>
              <td>Дуда Андрей Андреевич</td>
              <td>03.03.1998</td>
              <td>8</td>
              <td>15</td>
              <td>355203</td>
              <td>МО УФМС по Хабаровскому краю и Еврейской автономной области в г. Ком</td>
              <td>04.08.2016</td>
          </tr>
          <tr id="LC1472" class="js-file-line">
            <td id="L1472" class="blob-num js-line-number" data-line-number="1472"></td>
              <td>МТ-177590</td>
              <td>3199409</td>
              <td>Рядовой</td>
              <td>Емельянов Денис Васильевич</td>
              <td>05.10.1999</td>
              <td>8</td>
              <td>13</td>
              <td>150999</td>
              <td> </td>
              <td>5/23/2013</td>
          </tr>
          <tr id="LC1473" class="js-file-line">
            <td id="L1473" class="blob-num js-line-number" data-line-number="1473"></td>
              <td>СУ-440365</td>
              <td>3199420</td>
              <td>Рядовой</td>
              <td>Керимов Эльдар Ильгарович</td>
              <td>9/16/1998</td>
              <td>8</td>
              <td>12</td>
              <td>120190</td>
              <td> </td>
              <td>10/30/2012</td>
          </tr>
          <tr id="LC1474" class="js-file-line">
            <td id="L1474" class="blob-num js-line-number" data-line-number="1474"></td>
              <td>МТ-177359</td>
              <td>3199421</td>
              <td>Рядовой</td>
              <td>Кимонко Владлен Андреевич</td>
              <td>5/14/1998</td>
              <td>8</td>
              <td>16</td>
              <td>417267</td>
              <td>ОУФМС России по Хабаравскому краю  и Еврейской автономной области в </td>
              <td>Н3/10/2017</td>
          </tr>
          <tr id="LC1475" class="js-file-line">
            <td id="L1475" class="blob-num js-line-number" data-line-number="1475"></td>
              <td>МТ-150515</td>
              <td>3199422</td>
              <td>Рядовой</td>
              <td>Кирсанов Павел Алексеевич</td>
              <td>9/13/1992</td>
              <td>8</td>
              <td>15</td>
              <td>307251</td>
              <td> </td>
              <td>07.08.2015</td>
          </tr>
          <tr id="LC1476" class="js-file-line">
            <td id="L1476" class="blob-num js-line-number" data-line-number="1476"></td>
              <td>СУ-440444</td>
              <td>3199423</td>
              <td>Рядовой</td>
              <td>Ковалев Алексей Андреевич</td>
              <td>02.03.1998</td>
              <td>8</td>
              <td>11</td>
              <td>45864</td>
              <td>ОУФМС России по Хабаровскому краю в Солнечном р-не</td>
              <td>3/14/2012</td>
          </tr>
          <tr id="LC1477" class="js-file-line">
            <td id="L1477" class="blob-num js-line-number" data-line-number="1477"></td>
              <td>МТ-177597</td>
              <td>3199437</td>
              <td>Рядовой</td>
              <td>Куцев Сергей Павлович</td>
              <td>5/20/1997</td>
              <td>8</td>
              <td>17</td>
              <td>444592</td>
              <td>отделом УФМС России по Хабаровскому краю и Еврейской автономной обл</td>
              <td>6/14/2017</td>
          </tr>
          <tr id="LC1478" class="js-file-line">
            <td id="L1478" class="blob-num js-line-number" data-line-number="1478"></td>
              <td>СУ-440379</td>
              <td>3199469</td>
              <td>Рядовой</td>
              <td>Рубан Андрей Алексеевич</td>
              <td>03.07.1996</td>
              <td>8</td>
              <td>17</td>
              <td>451513</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской автономной области в К</td>
              <td>6/17/2017</td>
          </tr>
          <tr id="LC1479" class="js-file-line">
            <td id="L1479" class="blob-num js-line-number" data-line-number="1479"></td>
              <td>СУ-440795</td>
              <td>3199473</td>
              <td>Рядовой</td>
              <td>Саяпин Иван Константинович</td>
              <td>01.10.1999</td>
              <td>8</td>
              <td>13</td>
              <td>207078</td>
              <td>МО УФМС России по Хабаровскому краю в гор. Комсомольск-на-Амуре</td>
              <td>1/28/2014</td>
          </tr>
          <tr id="LC1480" class="js-file-line">
            <td id="L1480" class="blob-num js-line-number" data-line-number="1480"></td>
              <td>МТ-150204</td>
              <td>3199474</td>
              <td>Рядовой</td>
              <td>Семин Игорь Александрович</td>
              <td>3/22/1998</td>
              <td>8</td>
              <td>11</td>
              <td>80354</td>
              <td> </td>
              <td>05.10.2012</td>
          </tr>
          <tr id="LC1481" class="js-file-line">
            <td id="L1481" class="blob-num js-line-number" data-line-number="1481"></td>
              <td>СУ-440055</td>
              <td>3199491</td>
              <td>Рядовой</td>
              <td>Чмутин Владимир Николаевич</td>
              <td>2/17/1998</td>
              <td>8</td>
              <td>11</td>
              <td>64760</td>
              <td> </td>
              <td>4/17/2012</td>
          </tr>
          <tr id="LC1482" class="js-file-line">
            <td id="L1482" class="blob-num js-line-number" data-line-number="1482"></td>
              <td>МТ-177361</td>
              <td>3199495</td>
              <td>Рядовой</td>
              <td>Щербин Александр Александрович</td>
              <td>3/17/1999</td>
              <td>8</td>
              <td>13</td>
              <td>169738</td>
              <td>ОУФМС России по Хабаровскому краю в Нанайском р-не</td>
              <td>8/22/2013</td>
          </tr>
          <tr id="LC1483" class="js-file-line">
            <td id="L1483" class="blob-num js-line-number" data-line-number="1483"></td>
              <td>ВС-326229</td>
              <td>3199664</td>
              <td>Рядовой</td>
              <td>Боткин Эдуард Андреевич</td>
              <td>06.10.1999</td>
              <td>71</td>
              <td>13</td>
              <td>9502</td>
              <td>МО УФМС  России по Тюменской области в г. Ишиме</td>
              <td>07.03.2013</td>
          </tr>
          <tr id="LC1484" class="js-file-line">
            <td id="L1484" class="blob-num js-line-number" data-line-number="1484"></td>
              <td>ВС-326241</td>
              <td>3199676</td>
              <td>Рядовой</td>
              <td>Курынов Ярослав Евгеньевич</td>
              <td>03.11.1999</td>
              <td>71</td>
              <td>14</td>
              <td>85278</td>
              <td>МО УФМС России по Тюменской области в г. Ялуторовске</td>
              <td>7/19/2014</td>
          </tr>
          <tr id="LC1485" class="js-file-line">
            <td id="L1485" class="blob-num js-line-number" data-line-number="1485"></td>
              <td>МТ-153480</td>
              <td>3203161</td>
              <td>Рядовой</td>
              <td>Дягтярев Дмитрий Евгеньевич</td>
              <td>05.03.1999</td>
              <td>10</td>
              <td>13</td>
              <td>373053</td>
              <td>отделом УФМС России по Амурской области в Михайловском районе</td>
              <td>11/21/2013</td>
          </tr>
          <tr id="LC1486" class="js-file-line">
            <td id="L1486" class="blob-num js-line-number" data-line-number="1486"></td>
              <td>СУ-460032</td>
              <td>3203276</td>
              <td>Рядовой</td>
              <td>Дагбаев Гындын Цырендоржиевич</td>
              <td>12/16/1997</td>
              <td>76</td>
              <td>11</td>
              <td>616534</td>
              <td>ТП УФМС России по Забайкальскому краю в Могойтуйском р-не</td>
              <td>3/28/2012</td>
          </tr>
          <tr id="LC1487" class="js-file-line">
            <td id="L1487" class="blob-num js-line-number" data-line-number="1487"></td>
              <td>СУ-460028</td>
              <td>3203284</td>
              <td>Рядовой</td>
              <td>Жаргалов Баясхалан Батоевич</td>
              <td>9/14/1994</td>
              <td>76</td>
              <td>14</td>
              <td>798560</td>
              <td>ОУФМС по Забайкальскому краю в Агинском р-не</td>
              <td>03.10.2015</td>
          </tr>
          <tr id="LC1488" class="js-file-line">
            <td id="L1488" class="blob-num js-line-number" data-line-number="1488"></td>
              <td>СУ-460662</td>
              <td>3203309</td>
              <td>Рядовой</td>
              <td>Киселёв Семён Андреевич</td>
              <td>01.03.1999</td>
              <td>76</td>
              <td>12</td>
              <td>636792</td>
              <td>ОУФМС России по Забайкальскому краю в Агинском р-не</td>
              <td>1/24/2013</td>
          </tr>
          <tr id="LC1489" class="js-file-line">
            <td id="L1489" class="blob-num js-line-number" data-line-number="1489"></td>
              <td>МТ-139707</td>
              <td>3203332</td>
              <td>Рядовой</td>
              <td>Лазарев Андрей Сергеевич</td>
              <td>2/13/1998</td>
              <td>76</td>
              <td>12</td>
              <td>626418</td>
              <td>ТП УФМС России по Забайкальскому краю в Кыринском р-не</td>
              <td>8/13/2012</td>
          </tr>
          <tr id="LC1490" class="js-file-line">
            <td id="L1490" class="blob-num js-line-number" data-line-number="1490"></td>
              <td>МТ-232976</td>
              <td>3203369</td>
              <td>Рядовой</td>
              <td>Петров Алексей Андреевич</td>
              <td>3/16/1997</td>
              <td>76</td>
              <td>17</td>
              <td>926920</td>
              <td>ОУФМС России по Забайкальскому краю в Центральном р-не г. Читы</td>
              <td>04.04.2017</td>
          </tr>
          <tr id="LC1491" class="js-file-line">
            <td id="L1491" class="blob-num js-line-number" data-line-number="1491"></td>
              <td>МТ-139977</td>
              <td>3203414</td>
              <td>Рядовой</td>
              <td>Фунтусов Геннадий Алексеевич</td>
              <td>5/16/1997</td>
              <td>73</td>
              <td>17</td>
              <td>933789</td>
              <td>отделением УФМС России по Забайкальскому краю в Борзинском районе</td>
              <td>06.03.2017</td>
          </tr>
          <tr id="LC1492" class="js-file-line">
            <td id="L1492" class="blob-num js-line-number" data-line-number="1492"></td>
              <td>МТ-139717</td>
              <td>3203434</td>
              <td>Рядовой</td>
              <td>Якимов Иван Иванович</td>
              <td>06.07.1999</td>
              <td>76</td>
              <td>13</td>
              <td>725252</td>
              <td>ТП УФМС России по Забайкальскому краю в Акшинском р-не</td>
              <td>01.10.2014</td>
          </tr>
          <tr id="LC1493" class="js-file-line">
            <td id="L1493" class="blob-num js-line-number" data-line-number="1493"></td>
              <td>ВС-058802</td>
              <td>3203484</td>
              <td>Рядовой</td>
              <td>Монгуш Маадыр Март-оолович</td>
              <td>3/31/1993</td>
              <td>93</td>
              <td>13</td>
              <td>488223</td>
              <td> </td>
              <td>7/24/2013</td>
          </tr>
          <tr id="LC1494" class="js-file-line">
            <td id="L1494" class="blob-num js-line-number" data-line-number="1494"></td>
              <td>ВС-058796</td>
              <td>3203495</td>
              <td>Рядовой</td>
              <td>Щеглов Александр Альбертович</td>
              <td>6/18/1998</td>
              <td>93</td>
              <td>14</td>
              <td>531367</td>
              <td> </td>
              <td>03.05.2015</td>
          </tr>
          <tr id="LC1495" class="js-file-line">
            <td id="L1495" class="blob-num js-line-number" data-line-number="1495"></td>
              <td>ВС-133307</td>
              <td>3206946</td>
              <td>Рядовой</td>
              <td>Бурданов Петр Викторович</td>
              <td>9/23/1997</td>
              <td>63</td>
              <td>11</td>
              <td>660450</td>
              <td>отделением УФМС России по Саратовской области в г. Красный кут</td>
              <td>10.11.2011</td>
          </tr>
          <tr id="LC1496" class="js-file-line">
            <td id="L1496" class="blob-num js-line-number" data-line-number="1496"></td>
              <td>ВС-381592</td>
              <td>3207828</td>
              <td>Рядовой</td>
              <td>Скворцов Сергей Николаевич</td>
              <td>02.10.1999</td>
              <td>75</td>
              <td>16</td>
              <td>900810</td>
              <td>ОУФМС России по Челябинской области в г. Еманжелинске</td>
              <td>03.09.2017</td>
          </tr>
          <tr id="LC1497" class="js-file-line">
            <td id="L1497" class="blob-num js-line-number" data-line-number="1497"></td>
              <td>СУ-445476</td>
              <td>3213061</td>
              <td>Рядовой</td>
              <td>Фахрутдинов Тимур Александрович</td>
              <td>3/27/1998</td>
              <td>5</td>
              <td>14</td>
              <td>203854</td>
              <td>ОУФМС России по Приморскому краю в Надеждинском р-не</td>
              <td>12/17/2014</td>
          </tr>
          <tr id="LC1498" class="js-file-line">
            <td id="L1498" class="blob-num js-line-number" data-line-number="1498"></td>
              <td>СУ-445522</td>
              <td>3213107</td>
              <td>Рядовой</td>
              <td>Бединин Илья Владимирович</td>
              <td>3/18/1999</td>
              <td>5</td>
              <td>13</td>
              <td>37427</td>
              <td>ОУФМС России по Приморскому краю в Красноармейском р-не</td>
              <td>04.02.2013</td>
          </tr>
          <tr id="LC1499" class="js-file-line">
            <td id="L1499" class="blob-num js-line-number" data-line-number="1499"></td>
              <td>СУ-440383</td>
              <td>3216208</td>
              <td>Рядовой</td>
              <td>Башловка Никита Олегович</td>
              <td>09.07.1995</td>
              <td>99</td>
              <td>15</td>
              <td>309131</td>
              <td> </td>
              <td>9/23/2015</td>
          </tr>
          <tr id="LC1500" class="js-file-line">
            <td id="L1500" class="blob-num js-line-number" data-line-number="1500"></td>
              <td>МТ-150801</td>
              <td>3216220</td>
              <td>Рядовой</td>
              <td>Боймурадов Суннатулло Сиюнович</td>
              <td>01.07.1998</td>
              <td>8</td>
              <td>11</td>
              <td>67322</td>
              <td>ОУФМС России по Хабаровскому краю в Северном округе г. Хабаровска</td>
              <td>03.12.2012</td>
          </tr>
          <tr id="LC1501" class="js-file-line">
            <td id="L1501" class="blob-num js-line-number" data-line-number="1501"></td>
              <td>МТ-144010</td>
              <td>3216293</td>
              <td>Рядовой</td>
              <td>Калинин Александр Владимирович</td>
              <td>06.01.1998</td>
              <td>8</td>
              <td>12</td>
              <td>88384</td>
              <td> </td>
              <td>6/22/2012</td>
          </tr>
          <tr id="LC1502" class="js-file-line">
            <td id="L1502" class="blob-num js-line-number" data-line-number="1502"></td>
              <td>СУ-440093</td>
              <td>3216313</td>
              <td>Рядовой</td>
              <td>Ковальчук Богдан Русланович</td>
              <td>5/18/1999</td>
              <td>8</td>
              <td>13</td>
              <td>211826</td>
              <td> </td>
              <td>02.04.2014</td>
          </tr>
          <tr id="LC1503" class="js-file-line">
            <td id="L1503" class="blob-num js-line-number" data-line-number="1503"></td>
              <td>МТ-144012</td>
              <td>3216327</td>
              <td>Рядовой</td>
              <td>Кравченко Сергей Николаевич</td>
              <td>04.12.1998</td>
              <td>8</td>
              <td>12</td>
              <td>140153</td>
              <td>ОУФМС России по Хабаровскому краю в Ульчском р-не</td>
              <td>6/22/2013</td>
          </tr>
          <tr id="LC1504" class="js-file-line">
            <td id="L1504" class="blob-num js-line-number" data-line-number="1504"></td>
              <td>МТ-150567</td>
              <td>3216397</td>
              <td>Рядовой</td>
              <td>Поцелуйко Дмитрий Павлович</td>
              <td>1/31/1998</td>
              <td>8</td>
              <td>11</td>
              <td>82970</td>
              <td>Отделом УФМС России по Хабаровскому краю в Индустриальном р-не гор. </td>
              <td>Х5/29/2012</td>
          </tr>
          <tr id="LC1505" class="js-file-line">
            <td id="L1505" class="blob-num js-line-number" data-line-number="1505"></td>
              <td>СУ-440217</td>
              <td>3216467</td>
              <td>Рядовой</td>
              <td>Цыкалов Александр Валерьевич</td>
              <td>11.08.1998</td>
              <td>8</td>
              <td>16</td>
              <td>413458</td>
              <td>УФМС РОССИИ ПО АМУРСКОЙ ОБЛАСТИ В Г.СВОБОДНОМ</td>
              <td>12/15/2016</td>
          </tr>
          <tr id="LC1506" class="js-file-line">
            <td id="L1506" class="blob-num js-line-number" data-line-number="1506"></td>
              <td>МТ-183715</td>
              <td>3216534</td>
              <td>Рядовой</td>
              <td>Дзюба Анатолий Владимирович</td>
              <td>3/22/1998</td>
              <td>81</td>
              <td>11</td>
              <td>455412</td>
              <td>ОУФМС России по республике Бурятия в Железнодорожном р-не г. Улан-Уд</td>
              <td>4/25/2012</td>
          </tr>
          <tr id="LC1507" class="js-file-line">
            <td id="L1507" class="blob-num js-line-number" data-line-number="1507"></td>
              <td>ВС-026144</td>
              <td>3219109</td>
              <td>Рядовой</td>
              <td>Владимиров Андрей Анатольевич</td>
              <td>12/27/1996</td>
              <td>32</td>
              <td>16</td>
              <td>745763</td>
              <td> </td>
              <td>01.10.2017</td>
          </tr>
          <tr id="LC1508" class="js-file-line">
            <td id="L1508" class="blob-num js-line-number" data-line-number="1508"></td>
              <td>ВС-026147</td>
              <td>3219114</td>
              <td>Рядовой</td>
              <td>Маеров Александр Дмитриевич</td>
              <td>5/15/1999</td>
              <td>32</td>
              <td>13</td>
              <td>279764</td>
              <td>ОУФМС России по Кемеровской области в Промышленновском р-не</td>
              <td>6/18/2013</td>
          </tr>
          <tr id="LC1509" class="js-file-line">
            <td id="L1509" class="blob-num js-line-number" data-line-number="1509"></td>
              <td>ВС-372617</td>
              <td>3219478</td>
              <td>Рядовой</td>
              <td>Харабаров Никита Сергеевич</td>
              <td>04.10.1997</td>
              <td>25</td>
              <td>17</td>
              <td>365635</td>
              <td> </td>
              <td>4/21/2017</td>
          </tr>
          <tr id="LC1510" class="js-file-line">
            <td id="L1510" class="blob-num js-line-number" data-line-number="1510"></td>
              <td>СУ-445800</td>
              <td>3221639</td>
              <td>Рядовой</td>
              <td>Жигалов Ярослав Олегович</td>
              <td>10/25/1998</td>
              <td>5</td>
              <td>13</td>
              <td>25086</td>
              <td>ОУФМС России по Приморскому краю в Партизанском муниципальном р-н</td>
              <td>е12/26/2012</td>
          </tr>
          <tr id="LC1511" class="js-file-line">
            <td id="L1511" class="blob-num js-line-number" data-line-number="1511"></td>
              <td>СУ-445808</td>
              <td>3221647</td>
              <td>Рядовой</td>
              <td>Филиппов Евгений Вячеславович</td>
              <td>1/19/1998</td>
              <td>76</td>
              <td>0</td>
              <td>145987</td>
              <td>УФМС по Хабаровскому краю в п. Горьком</td>
              <td>06.04.2015</td>
          </tr>
          <tr id="LC1512" class="js-file-line">
            <td id="L1512" class="blob-num js-line-number" data-line-number="1512"></td>
              <td>СУ-460774</td>
              <td>3221727</td>
              <td>Рядовой</td>
              <td>Акулов Евгений Васильевич</td>
              <td>6/16/1999</td>
              <td>76</td>
              <td>13</td>
              <td>706412</td>
              <td>ТП УФМС России по Забайкальскому краю в Балейском р-не</td>
              <td>10/25/2013</td>
          </tr>
          <tr id="LC1513" class="js-file-line">
            <td id="L1513" class="blob-num js-line-number" data-line-number="1513"></td>
              <td>МТ-232991</td>
              <td>3221729</td>
              <td>Рядовой</td>
              <td>Алещенко Михаил Евгеньевич</td>
              <td>03.11.1998</td>
              <td>76</td>
              <td>11</td>
              <td>613398</td>
              <td>ОУФМС России по Забайкальскому краю в Краснокаменском р-не</td>
              <td>3/23/2012</td>
          </tr>
          <tr id="LC1514" class="js-file-line">
            <td id="L1514" class="blob-num js-line-number" data-line-number="1514"></td>
              <td>МТ-172544</td>
              <td>3221746</td>
              <td>Рядовой</td>
              <td>Башкиров Алексей Александрович</td>
              <td>07.12.1997</td>
              <td>76</td>
              <td>11</td>
              <td>589181</td>
              <td> </td>
              <td>3/20/2012</td>
          </tr>
          <tr id="LC1515" class="js-file-line">
            <td id="L1515" class="blob-num js-line-number" data-line-number="1515"></td>
              <td>МТ-172546</td>
              <td>3221758</td>
              <td>Рядовой</td>
              <td>Бугаёв Александр Владимирович</td>
              <td>05.09.1999</td>
              <td>76</td>
              <td>13</td>
              <td>684431</td>
              <td>ТП УФМС России по Забайкальскому краю в Ононском р-не</td>
              <td>08.08.2013</td>
          </tr>
          <tr id="LC1516" class="js-file-line">
            <td id="L1516" class="blob-num js-line-number" data-line-number="1516"></td>
              <td>СУ-472463</td>
              <td>3221784</td>
              <td>Рядовой</td>
              <td>Галданов Константин Сергеевич</td>
              <td>6/15/1998</td>
              <td>76</td>
              <td>11</td>
              <td>616170</td>
              <td> </td>
              <td>6/29/2012</td>
          </tr>
          <tr id="LC1517" class="js-file-line">
            <td id="L1517" class="blob-num js-line-number" data-line-number="1517"></td>
              <td>СУ-460609</td>
              <td>3221841</td>
              <td>Рядовой</td>
              <td>Касьянов Виктор Олегович</td>
              <td>2/21/1999</td>
              <td>76</td>
              <td>12</td>
              <td>677141</td>
              <td>ОУФМС России  по Забайкальскому краю в Забайкальском р-не</td>
              <td>3/29/2013</td>
          </tr>
          <tr id="LC1518" class="js-file-line">
            <td id="L1518" class="blob-num js-line-number" data-line-number="1518"></td>
              <td>СУ-472412</td>
              <td>3221862</td>
              <td>Рядовой</td>
              <td>Кузнецов Денис Сергеевич</td>
              <td>5/22/1997</td>
              <td>76</td>
              <td>17</td>
              <td>937621</td>
              <td>ОУФМС России по Забайкальскому краю в Ингодинском р-не г. Читы</td>
              <td>5/31/2017</td>
          </tr>
          <tr id="LC1519" class="js-file-line">
            <td id="L1519" class="blob-num js-line-number" data-line-number="1519"></td>
              <td>МТ-139697</td>
              <td>3221900</td>
              <td>Рядовой</td>
              <td>Маслов Артем Иванович</td>
              <td>2/24/1999</td>
              <td>76</td>
              <td>14</td>
              <td>767181</td>
              <td>УМВД по Забайкальскому краю в Огнюнском р-не</td>
              <td>10/14/2014</td>
          </tr>
          <tr id="LC1520" class="js-file-line">
            <td id="L1520" class="blob-num js-line-number" data-line-number="1520"></td>
              <td>МТ-139698</td>
              <td>3221901</td>
              <td>Рядовой</td>
              <td>Масюков Роман Викторович</td>
              <td>11.02.1998</td>
              <td>76</td>
              <td>12</td>
              <td>659222</td>
              <td>ТП УФМС России по Забакальскому краю в Кыринском р-не</td>
              <td>01.10.2013</td>
          </tr>
          <tr id="LC1521" class="js-file-line">
            <td id="L1521" class="blob-num js-line-number" data-line-number="1521"></td>
              <td>МТ-139699</td>
              <td>3221919</td>
              <td>Рядовой</td>
              <td>Нимбуев Виктор Дашиевич</td>
              <td>10/14/1998</td>
              <td>76</td>
              <td>17</td>
              <td>930570</td>
              <td> </td>
              <td>5/25/2017</td>
          </tr>
          <tr id="LC1522" class="js-file-line">
            <td id="L1522" class="blob-num js-line-number" data-line-number="1522"></td>
              <td>СУ-472665</td>
              <td>3221954</td>
              <td>Рядовой</td>
              <td>Раитин Станислав Олегович</td>
              <td>8/28/1998</td>
              <td>76</td>
              <td>12</td>
              <td>625842</td>
              <td>ОУФМС России по Забайкальскому краю в Сретенском р-не</td>
              <td>8/31/2012</td>
          </tr>
          <tr id="LC1523" class="js-file-line">
            <td id="L1523" class="blob-num js-line-number" data-line-number="1523"></td>
              <td>СУ-472667</td>
              <td>3221975</td>
              <td>Рядовой</td>
              <td>Соболев Александр Алексеевич</td>
              <td>6/18/1997</td>
              <td>76</td>
              <td>17</td>
              <td>935635</td>
              <td>ОУФМС России по Забайкальскому краю в Сретенском р-не</td>
              <td>6/23/2017</td>
          </tr>
          <tr id="LC1524" class="js-file-line">
            <td id="L1524" class="blob-num js-line-number" data-line-number="1524"></td>
              <td>СУ-472669</td>
              <td>3221998</td>
              <td>Рядовой</td>
              <td>Толстоногов Александр Сергеевич</td>
              <td>08.07.1997</td>
              <td>76</td>
              <td>11</td>
              <td>570713</td>
              <td>ОУФМС России по Забайкальскому краю в Сретенском р-не</td>
              <td>8/23/2011</td>
          </tr>
          <tr id="LC1525" class="js-file-line">
            <td id="L1525" class="blob-num js-line-number" data-line-number="1525"></td>
              <td>СУ-472765</td>
              <td>3222013</td>
              <td>Рядовой</td>
              <td>Фильшин Владислав Павлович</td>
              <td>6/13/1999</td>
              <td>76</td>
              <td>13</td>
              <td>725703</td>
              <td> </td>
              <td>11/25/2013</td>
          </tr>
          <tr id="LC1526" class="js-file-line">
            <td id="L1526" class="blob-num js-line-number" data-line-number="1526"></td>
              <td>МТ-172556</td>
              <td>3222028</td>
              <td>Рядовой</td>
              <td>Чимитов Эрдэм Сергеевич</td>
              <td>2/14/1997</td>
              <td>76</td>
              <td>17</td>
              <td>926923</td>
              <td>ОУФМС по республике Тыва в г. Кызыл</td>
              <td>04.04.2017</td>
          </tr>
          <tr id="LC1527" class="js-file-line">
            <td id="L1527" class="blob-num js-line-number" data-line-number="1527"></td>
              <td>СУ-460684</td>
              <td>3222029</td>
              <td>Рядовой</td>
              <td>Чимитцыренов Владислав Гонгорович</td>
              <td>12/21/1998</td>
              <td>76</td>
              <td>13</td>
              <td>680064</td>
              <td> </td>
              <td>04.04.2013</td>
          </tr>
          <tr id="LC1528" class="js-file-line">
            <td id="L1528" class="blob-num js-line-number" data-line-number="1528"></td>
              <td>СУ-472042</td>
              <td>3222034</td>
              <td>Рядовой</td>
              <td>Шангин Сергей Александрович</td>
              <td>8/27/1998</td>
              <td>76</td>
              <td>12</td>
              <td>642930</td>
              <td>ОУФМС по республике Бурятия</td>
              <td>9/28/2012</td>
          </tr>
          <tr id="LC1529" class="js-file-line">
            <td id="L1529" class="blob-num js-line-number" data-line-number="1529"></td>
              <td>МТ-115816</td>
              <td>3222035</td>
              <td>Рядовой</td>
              <td>Шахуров Роман Евгеньевич</td>
              <td>6/24/1998</td>
              <td>76</td>
              <td>12</td>
              <td>630984</td>
              <td> </td>
              <td>7/16/2012</td>
          </tr>
          <tr id="LC1530" class="js-file-line">
            <td id="L1530" class="blob-num js-line-number" data-line-number="1530"></td>
              <td>СУ-472119</td>
              <td>3222038</td>
              <td>Рядовой</td>
              <td>Шемякин Владислав Николаевич</td>
              <td>03.08.1999</td>
              <td>76</td>
              <td>12</td>
              <td>661372</td>
              <td>ОУФМС России по Забайкальскому краю в Карымском р-не</td>
              <td>3/28/2013</td>
          </tr>
          <tr id="LC1531" class="js-file-line">
            <td id="L1531" class="blob-num js-line-number" data-line-number="1531"></td>
              <td>МТ-139481</td>
              <td>3222045</td>
              <td>Рядовой</td>
              <td>Шорчиков Владимир Григорьевич</td>
              <td>4/16/1999</td>
              <td>76</td>
              <td>12</td>
              <td>673110</td>
              <td>УФМС по Иркутской обл. в г. Братске</td>
              <td>5/21/2013</td>
          </tr>
          <tr id="LC1532" class="js-file-line">
            <td id="L1532" class="blob-num js-line-number" data-line-number="1532"></td>
              <td>МТ-246297</td>
              <td>3238622</td>
              <td>Рядовой</td>
              <td>Яныгин Николай Иванович</td>
              <td>01.12.1993</td>
              <td>98</td>
              <td>16</td>
              <td>703240</td>
              <td>ТП УФМС России по республике Саха (Якутия) в Олекминском р-не</td>
              <td>07.11.2017</td>
          </tr>
          <tr id="LC1533" class="js-file-line">
            <td id="L1533" class="blob-num js-line-number" data-line-number="1533"></td>
              <td>ВС-369262</td>
              <td>3240038</td>
              <td>Рядовой</td>
              <td>Семеряк Олег Иванович</td>
              <td>3/21/1998</td>
              <td>25</td>
              <td>11</td>
              <td>669323</td>
              <td>ОУФМС России по  Иркутской области в г. Братске и Братском р-не</td>
              <td>04.06.2012</td>
          </tr>
          <tr id="LC1534" class="js-file-line">
            <td id="L1534" class="blob-num js-line-number" data-line-number="1534"></td>
              <td>МТ-150346</td>
              <td>3243657</td>
              <td>Рядовой</td>
              <td>Намаконов Денис Сергеевич</td>
              <td>07.04.1994</td>
              <td>8</td>
              <td>14</td>
              <td>261383</td>
              <td> </td>
              <td>10/13/2014</td>
          </tr>
          <tr id="LC1535" class="js-file-line">
            <td id="L1535" class="blob-num js-line-number" data-line-number="1535"></td>
              <td>МТ-150576</td>
              <td>3243670</td>
              <td>Рядовой</td>
              <td>Приезжих Игорь Игоревич</td>
              <td>10.07.1997</td>
              <td>99</td>
              <td>11</td>
              <td>273077</td>
              <td>межрайонным отделением УФМС России по Еврейской автономной област</td>
              <td>1/18/2012</td>
          </tr>
          <tr id="LC1536" class="js-file-line">
            <td id="L1536" class="blob-num js-line-number" data-line-number="1536"></td>
              <td>МТ-150666</td>
              <td>3243712</td>
              <td>Рядовой</td>
              <td>Целыковский Дмитрий Дмитриевич</td>
              <td>07.05.1997</td>
              <td>8</td>
              <td>11</td>
              <td>22445</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском р-не</td>
              <td>08.01.2011</td>
          </tr>
          <tr id="LC1537" class="js-file-line">
            <td id="L1537" class="blob-num js-line-number" data-line-number="1537"></td>
              <td>СУ-445888</td>
              <td>3247565</td>
              <td>Рядовой</td>
              <td>Хан Эдуард Игоревич</td>
              <td>01.01.1999</td>
              <td>5</td>
              <td>13</td>
              <td>32374</td>
              <td>ОУФМС России по Приморскому краю в Уссурийском городском округе</td>
              <td>02.04.2013</td>
          </tr>
          <tr id="LC1538" class="js-file-line">
            <td id="L1538" class="blob-num js-line-number" data-line-number="1538"></td>
              <td>СУ-445890</td>
              <td>3247567</td>
              <td>Рядовой</td>
              <td>Кривчак Александр Геннадьевич</td>
              <td>7/22/1998</td>
              <td>5</td>
              <td>13</td>
              <td>97113</td>
              <td>ОУФМС по Приморскому краю в Дальнереченском городском округе и Дал</td>
              <td>9/25/2013</td>
          </tr>
          <tr id="LC1539" class="js-file-line">
            <td id="L1539" class="blob-num js-line-number" data-line-number="1539"></td>
              <td>СУ-445894</td>
              <td>3247571</td>
              <td>Рядовой</td>
              <td>Пуликовский Сергей Евгеньевич</td>
              <td>03.02.1998</td>
              <td>5</td>
              <td>11</td>
              <td>933727</td>
              <td>ОУФМС России по Приморскому краю в Чугуевском р-не</td>
              <td>3/22/2012</td>
          </tr>
          <tr id="LC1540" class="js-file-line">
            <td id="L1540" class="blob-num js-line-number" data-line-number="1540"></td>
              <td>СУ-445906</td>
              <td>3247583</td>
              <td>Рядовой</td>
              <td>Графеев Виктор Юрьевич</td>
              <td>6/14/1999</td>
              <td>13</td>
              <td>4</td>
              <td>751864</td>
              <td>ТП в пос. Теплоозерск ОУФМС России по ЕАО в Облученском районе</td>
              <td>9/15/2013</td>
          </tr>
          <tr id="LC1541" class="js-file-line">
            <td id="L1541" class="blob-num js-line-number" data-line-number="1541"></td>
              <td>СУ-445981</td>
              <td>3247690</td>
              <td>Рядовой</td>
              <td>Картамыш Лев Александрович</td>
              <td>10/21/1997</td>
              <td>5</td>
              <td>11</td>
              <td>902276</td>
              <td>МРО УФМС России по Приморскому краю в г. Арсеньеве и Анучинском р-не</td>
              <td>11.08.2011</td>
          </tr>
          <tr id="LC1542" class="js-file-line">
            <td id="L1542" class="blob-num js-line-number" data-line-number="1542"></td>
              <td>СУ-410102</td>
              <td>3247771</td>
              <td>Рядовой</td>
              <td>Шевченко Евгений Александрович</td>
              <td>4/15/1997</td>
              <td>56</td>
              <td>30</td>
              <td>659845</td>
              <td>МП по Читинской области</td>
              <td>12/14/2015</td>
          </tr>
          <tr id="LC1543" class="js-file-line">
            <td id="L1543" class="blob-num js-line-number" data-line-number="1543"></td>
              <td>СУ-410192</td>
              <td>3247862</td>
              <td>Рядовой</td>
              <td>Афанасенко Дмитрий Александрович</td>
              <td>6/27/1997</td>
              <td>5</td>
              <td>11</td>
              <td>870185</td>
              <td>ОУФМС России поПриморскому краю в Хасанском р-не</td>
              <td>7/21/2011</td>
          </tr>
          <tr id="LC1544" class="js-file-line">
            <td id="L1544" class="blob-num js-line-number" data-line-number="1544"></td>
              <td>СУ-410444</td>
              <td>3248109</td>
              <td>Рядовой</td>
              <td>Легков Николай Николаевич</td>
              <td>02.03.1997</td>
              <td>5</td>
              <td>16</td>
              <td>435595</td>
              <td>ОУФМС России по Приморскому краю в  Партизанском городском округе</td>
              <td>2/13/2017</td>
          </tr>
          <tr id="LC1545" class="js-file-line">
            <td id="L1545" class="blob-num js-line-number" data-line-number="1545"></td>
              <td>МТ-107814</td>
              <td>3248143</td>
              <td>Рядовой</td>
              <td>Базаров Анатолий Золтоевич</td>
              <td>2/19/1996</td>
              <td>81</td>
              <td>15</td>
              <td>658102</td>
              <td> </td>
              <td>3/18/2016</td>
          </tr>
          <tr id="LC1546" class="js-file-line">
            <td id="L1546" class="blob-num js-line-number" data-line-number="1546"></td>
              <td>МТ-183209</td>
              <td>3248168</td>
              <td>Рядовой</td>
              <td>Гармаев Эрдэм Викторович</td>
              <td>1/21/1999</td>
              <td>81</td>
              <td>12</td>
              <td>506517</td>
              <td> </td>
              <td>3/13/2013</td>
          </tr>
          <tr id="LC1547" class="js-file-line">
            <td id="L1547" class="blob-num js-line-number" data-line-number="1547"></td>
              <td>МТ-153654</td>
              <td>3248347</td>
              <td>Рядовой</td>
              <td>Лучинин Виктор Андреевич</td>
              <td>1/28/1999</td>
              <td>10</td>
              <td>12</td>
              <td>340275</td>
              <td>МО УФМС России по Амурской области в г. Белогорске</td>
              <td>4/29/2013</td>
          </tr>
          <tr id="LC1548" class="js-file-line">
            <td id="L1548" class="blob-num js-line-number" data-line-number="1548"></td>
              <td>МТ-153713</td>
              <td>3248391</td>
              <td>Рядовой</td>
              <td>Орлов Максим Андреевич</td>
              <td>6/28/1999</td>
              <td>10</td>
              <td>12</td>
              <td>341588</td>
              <td>ОУФМС по Амурской области в г. Шимановске</td>
              <td>11/27/2013</td>
          </tr>
          <tr id="LC1549" class="js-file-line">
            <td id="L1549" class="blob-num js-line-number" data-line-number="1549"></td>
              <td>МТ-153712</td>
              <td>3248397</td>
              <td>Рядовой</td>
              <td>Атаманский Алексей Игоревич</td>
              <td>08.02.1997</td>
              <td>64</td>
              <td>70</td>
              <td>692112</td>
              <td>УФМС по г. Хабаровск в Южном р-не</td>
              <td>1/21/2016</td>
          </tr>
          <tr id="LC1550" class="js-file-line">
            <td id="L1550" class="blob-num js-line-number" data-line-number="1550"></td>
              <td>МТ-153680</td>
              <td>3248433</td>
              <td>Рядовой</td>
              <td>Гайсин Руслан Дмитриевич</td>
              <td>9/22/1997</td>
              <td>10</td>
              <td>11</td>
              <td>260652</td>
              <td>ОУФМС по Амурской области в г. Райчихинск</td>
              <td>10.06.2011</td>
          </tr>
          <tr id="LC1551" class="js-file-line">
            <td id="L1551" class="blob-num js-line-number" data-line-number="1551"></td>
              <td>МТ-204314</td>
              <td>3267674</td>
              <td>Рядовой</td>
              <td>Кошкарев Евгений Викторович</td>
              <td>3/28/1998</td>
              <td>8</td>
              <td>11</td>
              <td>64674</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ Р</td>
              <td>04.10.2012</td>
          </tr>
          <tr id="LC1552" class="js-file-line">
            <td id="L1552" class="blob-num js-line-number" data-line-number="1552"></td>
              <td>Х-833346</td>
              <td>3268638</td>
              <td>Рядовой</td>
              <td>Кадакин Иван Сергеевич</td>
              <td>12/18/1991</td>
              <td>8</td>
              <td>12</td>
              <td>107851</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В СЕВЕРНОМ ОКРУГЕ Г. ХАБАРО</td>
              <td>В9/24/2012</td>
          </tr>
          <tr id="LC1553" class="js-file-line">
            <td id="L1553" class="blob-num js-line-number" data-line-number="1553"></td>
              <td>МТ-217131</td>
              <td>3270236</td>
              <td>Рядовой</td>
              <td>Моша Алексей Андреевич</td>
              <td>04.06.1997</td>
              <td>8</td>
              <td>17</td>
              <td>438724</td>
              <td>ОТДЕЛЕНИЕМ УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕВРЕЙСКОЙ АВТ</td>
              <td>О4/19/2017</td>
          </tr>
          <tr id="LC1554" class="js-file-line">
            <td id="L1554" class="blob-num js-line-number" data-line-number="1554"></td>
              <td>МТ-127475</td>
              <td>3272654</td>
              <td>Рядовой</td>
              <td>Агнюн Сергей Алексеевич</td>
              <td>3/22/1994</td>
              <td>64</td>
              <td>14</td>
              <td>859096</td>
              <td>ТП МРО УФМС РОССИИ ПО САХАЛИНСКОЙ ОБЛАСТИ В ОХИНСКОМ РАЙОНЕ</td>
              <td>8/13/2014</td>
          </tr>
          <tr id="LC1555" class="js-file-line">
            <td id="L1555" class="blob-num js-line-number" data-line-number="1555"></td>
              <td>МТ-204320</td>
              <td>3272664</td>
              <td>Рядовой</td>
              <td>Воронков Владимир Викторович</td>
              <td>4/22/1994</td>
              <td>8</td>
              <td>14</td>
              <td>226286</td>
              <td>ОУФМС России по Хабаровскому краю в Хабаровском районе</td>
              <td>5/30/2014</td>
          </tr>
          <tr id="LC1556" class="js-file-line">
            <td id="L1556" class="blob-num js-line-number" data-line-number="1556"></td>
              <td>МТ-204322</td>
              <td>3272668</td>
              <td>Рядовой</td>
              <td>Брагин Григорий Евгеньевич</td>
              <td>11/15/1993</td>
              <td>8</td>
              <td>13</td>
              <td>212372</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ХАБАРОВСКОМ РАЙОНЕ</td>
              <td>3/18/2014</td>
          </tr>
          <tr id="LC1557" class="js-file-line">
            <td id="L1557" class="blob-num js-line-number" data-line-number="1557"></td>
              <td>МТ-127617</td>
              <td>3272672</td>
              <td>Рядовой</td>
              <td>Браташов Юрий Андреевич</td>
              <td>9/27/1995</td>
              <td>8</td>
              <td>15</td>
              <td>332848</td>
              <td>УФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ В ЖЕЛЕЗНОДЛОРОЖНОМ РАЙОН</td>
              <td>10/22/2015</td>
          </tr>
          <tr id="LC1558" class="js-file-line">
            <td id="L1558" class="blob-num js-line-number" data-line-number="1558"></td>
              <td>МТ-264431</td>
              <td>3272674</td>
              <td>Рядовой</td>
              <td>Бурцев Вячеслав Салаватович</td>
              <td>9/24/1998</td>
              <td>98</td>
              <td>12</td>
              <td>451462</td>
              <td>ТП УФМС РОССИИ ПО РЕСПУБЛИКЕ САХА (ЯКУТИЯ) В АБЫЙСКОМ РАЙОНЕ</td>
              <td>12/24/2012</td>
          </tr>
          <tr id="LC1559" class="js-file-line">
            <td id="L1559" class="blob-num js-line-number" data-line-number="1559"></td>
              <td>МТ-120087</td>
              <td>3272705</td>
              <td>Рядовой</td>
              <td>Неустроев Виталий Олегович</td>
              <td>12.09.1993</td>
              <td>98</td>
              <td>14</td>
              <td>529840</td>
              <td>МРО УФМС России по республике Саха Якутия в г. Якутске</td>
              <td>3/18/2014</td>
          </tr>
          <tr id="LC1560" class="js-file-line">
            <td id="L1560" class="blob-num js-line-number" data-line-number="1560"></td>
              <td>МТ-217081</td>
              <td>3272728</td>
              <td>Рядовой</td>
              <td>Паньков Артем Вячеславович</td>
              <td>05.12.1998</td>
              <td>11</td>
              <td>7</td>
              <td>513434</td>
              <td>ОУФМС России по Саратовской области в Озинском районе</td>
              <td>7/22/2014</td>
          </tr>
          <tr id="LC1561" class="js-file-line">
            <td id="L1561" class="blob-num js-line-number" data-line-number="1561"></td>
              <td>МТ-120086</td>
              <td>3272737</td>
              <td>Рядовой</td>
              <td>Расстальной Никита Александрович</td>
              <td>05.12.1997</td>
              <td>10</td>
              <td>11</td>
              <td>664807</td>
              <td>отделением УФМС России по Амурской области в Ивановском районе</td>
              <td>10.05.2015</td>
          </tr>
          <tr id="LC1562" class="js-file-line">
            <td id="L1562" class="blob-num js-line-number" data-line-number="1562"></td>
              <td>МТ-120088</td>
              <td>3272756</td>
              <td>Рядовой</td>
              <td>Тимофеев Артем Иванович</td>
              <td>09.04.1996</td>
              <td>98</td>
              <td>16</td>
              <td>691091</td>
              <td>МРО УФМС России по Республике Саха (Якутия) в г. Якутске</td>
              <td>10.05.2016</td>
          </tr>
          <tr id="LC1563" class="js-file-line">
            <td id="L1563" class="blob-num js-line-number" data-line-number="1563"></td>
              <td>МТ-217060</td>
              <td>3272770</td>
              <td>Рядовой</td>
              <td>Лукьянов Александр Сергеевич</td>
              <td>3/21/1997</td>
              <td>8</td>
              <td>17</td>
              <td>435558</td>
              <td>ОУФМС России по Хабаровскому краю и ЕАО в Кировском и Краснофлотско</td>
              <td>04.06.2017</td>
          </tr>
          <tr id="LC1564" class="js-file-line">
            <td id="L1564" class="blob-num js-line-number" data-line-number="1564"></td>
              <td>МТ-234130</td>
              <td>3272877</td>
              <td>Рядовой</td>
              <td>Мамин Владислав Андреевич</td>
              <td>4/21/1997</td>
              <td>10</td>
              <td>17</td>
              <td>523116</td>
              <td>МО УФМС России по Амурской области в г. Благовещенске</td>
              <td>05.10.2017</td>
          </tr>
          <tr id="LC1565" class="js-file-line">
            <td id="L1565" class="blob-num js-line-number" data-line-number="1565"></td>
              <td>МТ-129487</td>
              <td>3272914</td>
              <td>Рядовой</td>
              <td>Хоменко Максим Андреевич</td>
              <td>12/26/1996</td>
              <td>10</td>
              <td>16</td>
              <td>512241</td>
              <td>ОУФМС России по Амурской области в Архаринском районе</td>
              <td>1/16/2017</td>
          </tr>
          <tr id="LC1566" class="js-file-line">
            <td id="L1566" class="blob-num js-line-number" data-line-number="1566"></td>
              <td>МТ-234128</td>
              <td>3273135</td>
              <td>Рядовой</td>
              <td>Яковлев Роман Николаевич</td>
              <td>04.06.1997</td>
              <td>10</td>
              <td>17</td>
              <td>525787</td>
              <td>МО УФМС России по Амурской обл. в г. Благовещенск</td>
              <td>5/22/2017</td>
          </tr>
          <tr id="LC1567" class="js-file-line">
            <td id="L1567" class="blob-num js-line-number" data-line-number="1567"></td>
              <td>МТ-217065</td>
              <td>3273218</td>
              <td>Рядовой</td>
              <td>Мирошниченко Игорь Валерьевич</td>
              <td>9/19/1995</td>
              <td>99</td>
              <td>15</td>
              <td>311398</td>
              <td>МЕЖРАЙОННЫМ ОТДЕЛЕНИЕМ ФМС РОССИИ ПО ЕВРЕЙСКОЙ АВТОНОМНО</td>
              <td>11.03.2015</td>
          </tr>
          <tr id="LC1568" class="js-file-line">
            <td id="L1568" class="blob-num js-line-number" data-line-number="1568"></td>
              <td>МТ-129478</td>
              <td>3276134</td>
              <td>Рядовой</td>
              <td>Лысенко Алексей Дмитриевич</td>
              <td>04.03.1997</td>
              <td>10</td>
              <td>17</td>
              <td>526954</td>
              <td>МО УФМС России по Амурской области в г. Благовещенске</td>
              <td>6/19/2017</td>
          </tr>
          <tr id="LC1569" class="js-file-line">
            <td id="L1569" class="blob-num js-line-number" data-line-number="1569"></td>
              <td>СУ-470883</td>
              <td>3277938</td>
              <td>Рядовой</td>
              <td>Евсеев Даниил Николаевич</td>
              <td>9/28/1997</td>
              <td>8</td>
              <td>11</td>
              <td>32429</td>
              <td>Межрайонным отделом УФМС России по Хабаровскому краю в г. Комсомо</td>
              <td>л10/10/2011</td>
          </tr>
          <tr id="LC1570" class="js-file-line">
            <td id="L1570" class="blob-num js-line-number" data-line-number="1570"></td>
              <td>СУ-470311</td>
              <td>3277965</td>
              <td>Рядовой</td>
              <td>Бродников Александр Николаевич</td>
              <td>11/25/1994</td>
              <td>99</td>
              <td>14</td>
              <td>304053</td>
              <td>Межрайонным отделом ОФМС России по Еврейской автономной области в</td>
              <td>1/26/2015</td>
          </tr>
          <tr id="LC1571" class="js-file-line">
            <td id="L1571" class="blob-num js-line-number" data-line-number="1571"></td>
              <td>МТ-204327</td>
              <td>3278099</td>
              <td>Рядовой</td>
              <td>Волгунин Павел Александрович</td>
              <td>08.01.1988</td>
              <td>8</td>
              <td>8</td>
              <td>796871</td>
              <td>МО УФМС России по Хабаровскому края в центральном округе г. Комсомол</td>
              <td>1/28/2009</td>
          </tr>
          <tr id="LC1572" class="js-file-line">
            <td id="L1572" class="blob-num js-line-number" data-line-number="1572"></td>
              <td>МТ-127186</td>
              <td>3278143</td>
              <td>Рядовой</td>
              <td>Жуков Владислав Андреевич</td>
              <td>05.08.1994</td>
              <td>8</td>
              <td>13</td>
              <td>190534</td>
              <td>Отделением УФМС России по Хабаровскому краю в Амурском р-не</td>
              <td>5/30/2014</td>
          </tr>
          <tr id="LC1573" class="js-file-line">
            <td id="L1573" class="blob-num js-line-number" data-line-number="1573"></td>
              <td>Х-835392</td>
              <td>3278150</td>
              <td>Рядовой</td>
              <td>Иванов Ярослав Владимирович</td>
              <td>07.03.1993</td>
              <td>8</td>
              <td>13</td>
              <td>197184</td>
              <td>Отделом УФМС России по Хабаровскому краю в Железнодорожном районе</td>
              <td>11/15/2013</td>
          </tr>
          <tr id="LC1574" class="js-file-line">
            <td id="L1574" class="blob-num js-line-number" data-line-number="1574"></td>
              <td>МТ-204328</td>
              <td>3281816</td>
              <td>Рядовой</td>
              <td>Медведев Руслан Вячеславович</td>
              <td>8/17/1996</td>
              <td>8</td>
              <td>17</td>
              <td>442552</td>
              <td>Отделением УФМС России по Хабаровскому краю и Еврейской автономной</td>
              <td>6/19/2017</td>
          </tr>
          <tr id="LC1575" class="js-file-line">
            <td id="L1575" class="blob-num js-line-number" data-line-number="1575"></td>
              <td>СУ-406435</td>
              <td>3283044</td>
              <td>Рядовой</td>
              <td>Кудымов Владимир Андреевич</td>
              <td>2/22/1996</td>
              <td>8</td>
              <td>15</td>
              <td>362162</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном р-не г. Хабаров</td>
              <td>3/19/2017</td>
          </tr>
          <tr id="LC1576" class="js-file-line">
            <td id="L1576" class="blob-num js-line-number" data-line-number="1576"></td>
              <td>СУ-406675</td>
              <td>3283048</td>
              <td>Рядовой</td>
              <td>Махмудов Фарход Камолидинович</td>
              <td>4/24/1996</td>
              <td>8</td>
              <td>16</td>
              <td>368509</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской автономной области в </td>
              <td>Ж5/12/2016</td>
          </tr>
          <tr id="LC1577" class="js-file-line">
            <td id="L1577" class="blob-num js-line-number" data-line-number="1577"></td>
              <td>МТ-129921</td>
              <td>3283051</td>
              <td>Рядовой</td>
              <td>Макаров Алексей Игоревич</td>
              <td>3/28/1995</td>
              <td>10</td>
              <td>14</td>
              <td>435932</td>
              <td>ОУФМС России по Амурской области в Тамбовском районе</td>
              <td>5/20/2015</td>
          </tr>
          <tr id="LC1578" class="js-file-line">
            <td id="L1578" class="blob-num js-line-number" data-line-number="1578"></td>
              <td>МТ-103495</td>
              <td>3283070</td>
              <td>Рядовой</td>
              <td>Боженко Олег Сергеевич</td>
              <td>04.03.1993</td>
              <td>5</td>
              <td>13</td>
              <td>56451</td>
              <td>ОУФМС России по Приморскому краю в Черниговском муниципальном р-н</td>
              <td>е5/8/2013</td>
          </tr>
          <tr id="LC1579" class="js-file-line">
            <td id="L1579" class="blob-num js-line-number" data-line-number="1579"></td>
              <td>СУ-450171</td>
              <td>3283218</td>
              <td>Рядовой</td>
              <td>Магеррамов Саяйз Элшанович</td>
              <td>04.05.1990</td>
              <td>5</td>
              <td>9</td>
              <td>673182</td>
              <td>ОУФМС России по Приморскому краю в Дальнереченском городском округ</td>
              <td>4/21/2010</td>
          </tr>
          <tr id="LC1580" class="js-file-line">
            <td id="L1580" class="blob-num js-line-number" data-line-number="1580"></td>
              <td>СУ-465041</td>
              <td>3283224</td>
              <td>Рядовой</td>
              <td>Иванов Вячеслав Александрович</td>
              <td>6/16/1995</td>
              <td>25</td>
              <td>15</td>
              <td>173038</td>
              <td>ОУФМС России по Иркутской области  в Свердловском районе города Ирку</td>
              <td>т9/7/2015</td>
          </tr>
          <tr id="LC1581" class="js-file-line">
            <td id="L1581" class="blob-num js-line-number" data-line-number="1581"></td>
              <td>МТ-171659</td>
              <td>3285164</td>
              <td>Рядовой</td>
              <td>Иконников Дмитрий Сергеевич</td>
              <td>01.01.1988</td>
              <td>8</td>
              <td>7</td>
              <td>708247</td>
              <td>Отделением УФМС России по Хабаровскому краю в Ванинском районе</td>
              <td>2/28/2008</td>
          </tr>
          <tr id="LC1582" class="js-file-line">
            <td id="L1582" class="blob-num js-line-number" data-line-number="1582"></td>
              <td>МТ-204509</td>
              <td>3288183</td>
              <td>Рядовой</td>
              <td>Ковальчук Анатолий Витальевич</td>
              <td>4/28/1982</td>
              <td>8</td>
              <td>5</td>
              <td>505433</td>
              <td>ОВД Верхнебуреинского района Хабаровского края</td>
              <td>6/16/2006</td>
          </tr>
          <tr id="LC1583" class="js-file-line">
            <td id="L1583" class="blob-num js-line-number" data-line-number="1583"></td>
              <td>МТ-246428</td>
              <td>3291168</td>
              <td>Рядовой</td>
              <td>Захаров Айтал Аркадьевич</td>
              <td>7/23/1999</td>
              <td>98</td>
              <td>13</td>
              <td>483916</td>
              <td>ТП УФМС России по Республике Саха (Якутия) в Вилюйском районе</td>
              <td>9/23/2013</td>
          </tr>
          <tr id="LC1584" class="js-file-line">
            <td id="L1584" class="blob-num js-line-number" data-line-number="1584"></td>
              <td>МТ-120885</td>
              <td>3291174</td>
              <td>Рядовой</td>
              <td>Инталев Артём Евгеньевич</td>
              <td>12/20/1998</td>
              <td>98</td>
              <td>12</td>
              <td>444149</td>
              <td>Отделом УФМС России по Республике Саха (Якутия) в городе Якутске</td>
              <td>1/17/2013</td>
          </tr>
          <tr id="LC1585" class="js-file-line">
            <td id="L1585" class="blob-num js-line-number" data-line-number="1585"></td>
              <td>Х-321061</td>
              <td>3291391</td>
              <td>Рядовой</td>
              <td>Пивоваров Андрей Александрович</td>
              <td>7/23/1990</td>
              <td>76</td>
              <td>10</td>
              <td>521748</td>
              <td>ТП УФМС России по Забайкальскому краю в Кыринском районе</td>
              <td>12.10.2010</td>
          </tr>
          <tr id="LC1586" class="js-file-line">
            <td id="L1586" class="blob-num js-line-number" data-line-number="1586"></td>
              <td>МТ-107875</td>
              <td>3291718</td>
              <td>Рядовой</td>
              <td>Воробьев Вячеслав Владимирович</td>
              <td>10.08.1999</td>
              <td>81</td>
              <td>13</td>
              <td>535369</td>
              <td> </td>
              <td>11.06.2013</td>
          </tr>
          <tr id="LC1587" class="js-file-line">
            <td id="L1587" class="blob-num js-line-number" data-line-number="1587"></td>
              <td>МТ-128506</td>
              <td>3291748</td>
              <td>Рядовой</td>
              <td>Колмаков Александр Евгеньевич</td>
              <td>02.04.1999</td>
              <td>81</td>
              <td>11</td>
              <td>457652</td>
              <td> </td>
              <td>04.11.2013</td>
          </tr>
          <tr id="LC1588" class="js-file-line">
            <td id="L1588" class="blob-num js-line-number" data-line-number="1588"></td>
              <td>СУ-478911</td>
              <td>3291754</td>
              <td>Рядовой</td>
              <td>Курило Антон Александрович</td>
              <td>8/20/1997</td>
              <td>81</td>
              <td>17</td>
              <td>732253</td>
              <td> </td>
              <td>8/31/2017</td>
          </tr>
          <tr id="LC1589" class="js-file-line">
            <td id="L1589" class="blob-num js-line-number" data-line-number="1589"></td>
              <td>МТ-127076</td>
              <td>3300348</td>
              <td>Рядовой</td>
              <td>Злобин Ефим Алексеевич</td>
              <td>11/26/1992</td>
              <td>8</td>
              <td>12</td>
              <td>116340</td>
              <td>МО УФМС России по Хабаровскому краю в Николаевском и Тугуро-Чмутинс</td>
              <td>1/31/2013</td>
          </tr>
          <tr id="LC1590" class="js-file-line">
            <td id="L1590" class="blob-num js-line-number" data-line-number="1590"></td>
              <td>Х-814299</td>
              <td>3300769</td>
              <td>Рядовой</td>
              <td>Радченко Алексей Александрович</td>
              <td>12/13/1988</td>
              <td>99</td>
              <td>9</td>
              <td>243994</td>
              <td>ТП ОФМС России по ЕАО в с. Ленинском</td>
              <td>06.11.2009</td>
          </tr>
          <tr id="LC1591" class="js-file-line">
            <td id="L1591" class="blob-num js-line-number" data-line-number="1591"></td>
              <td>Ю-858885</td>
              <td>3301341</td>
              <td>Рядовой</td>
              <td>Романов Николай Александрович</td>
              <td>12.06.1993</td>
              <td>8</td>
              <td>15</td>
              <td>304874</td>
              <td>ОУФМС России по Хабаровскому краю в Кировском и Краснофлотском р-на</td>
              <td>06.05.2015</td>
          </tr>
          <tr id="LC1592" class="js-file-line">
            <td id="L1592" class="blob-num js-line-number" data-line-number="1592"></td>
              <td>МТ-204332</td>
              <td>3311299</td>
              <td>Рядовой</td>
              <td>Тасова Алтынай Анатольевна</td>
              <td>10/24/1990</td>
              <td>8</td>
              <td>17</td>
              <td>455964</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской автономной области в Х</td>
              <td>7/31/2017</td>
          </tr>
          <tr id="LC1593" class="js-file-line">
            <td id="L1593" class="blob-num js-line-number" data-line-number="1593"></td>
              <td>МТ-191428</td>
              <td>3311385</td>
              <td>Рядовой</td>
              <td>Сафронов Александр Владимирович</td>
              <td>4/13/1999</td>
              <td>76</td>
              <td>16</td>
              <td>917177</td>
              <td> </td>
              <td>5/16/2017</td>
          </tr>
          <tr id="LC1594" class="js-file-line">
            <td id="L1594" class="blob-num js-line-number" data-line-number="1594"></td>
              <td>ВС-372322</td>
              <td>3313388</td>
              <td>Рядовой</td>
              <td>Лиханов Никита Владимирович</td>
              <td>5/30/1999</td>
              <td>25</td>
              <td>13</td>
              <td>874452</td>
              <td> </td>
              <td>1/15/2014</td>
          </tr>
          <tr id="LC1595" class="js-file-line">
            <td id="L1595" class="blob-num js-line-number" data-line-number="1595"></td>
              <td>ВС-001276</td>
              <td>3313680</td>
              <td>Рядовой</td>
              <td>Филатенко Владимир Владимирович</td>
              <td>04.01.1999</td>
              <td>69</td>
              <td>13</td>
              <td>548264</td>
              <td> </td>
              <td>07.05.2013</td>
          </tr>
          <tr id="LC1596" class="js-file-line">
            <td id="L1596" class="blob-num js-line-number" data-line-number="1596"></td>
              <td>Х-961031</td>
              <td>3313946</td>
              <td>Рядовой</td>
              <td>Егоров Александр Матвеевич</td>
              <td>10/15/1987</td>
              <td>76</td>
              <td>8</td>
              <td>326844</td>
              <td>Отделением УФМС России по Забайкальскому краю в Черновском р-не</td>
              <td>07.01.2008</td>
          </tr>
          <tr id="LC1597" class="js-file-line">
            <td id="L1597" class="blob-num js-line-number" data-line-number="1597"></td>
              <td>ВС-383282</td>
              <td>3315260</td>
              <td>Рядовой</td>
              <td>Абдулганеев Артур Азатович</td>
              <td>7/23/1999</td>
              <td>80</td>
              <td>15</td>
              <td>54514</td>
              <td> </td>
              <td>8/14/2014</td>
          </tr>
          <tr id="LC1598" class="js-file-line">
            <td id="L1598" class="blob-num js-line-number" data-line-number="1598"></td>
              <td>ВС-383284</td>
              <td>3315265</td>
              <td>Рядовой</td>
              <td>Гаврилов Роберт Радикович</td>
              <td>12/16/1998</td>
              <td>80</td>
              <td>12</td>
              <td>677079</td>
              <td> </td>
              <td>1/21/2013</td>
          </tr>
          <tr id="LC1599" class="js-file-line">
            <td id="L1599" class="blob-num js-line-number" data-line-number="1599"></td>
              <td>Ф-513750</td>
              <td>3316022</td>
              <td>Рядовой</td>
              <td>Балуев Семен Владимирович</td>
              <td>7/26/1994</td>
              <td>40</td>
              <td>14</td>
              <td>118716</td>
              <td>ТП №4 Отдела УФМС России по Санкт-Петербургу и Ленинградской обл в А</td>
              <td>д10/24/2014</td>
          </tr>
          <tr id="LC1600" class="js-file-line">
            <td id="L1600" class="blob-num js-line-number" data-line-number="1600"></td>
              <td>С-468288</td>
              <td>3317840</td>
              <td>Рядовой</td>
              <td>Алибеков Расул Омарович</td>
              <td>12.12.1993</td>
              <td>82</td>
              <td>13</td>
              <td>437333</td>
              <td> </td>
              <td>03.07.2014</td>
          </tr>
          <tr id="LC1601" class="js-file-line">
            <td id="L1601" class="blob-num js-line-number" data-line-number="1601"></td>
              <td>ВС-468255</td>
              <td>3317891</td>
              <td>Рядовой</td>
              <td>Исмаилов Узаир Мухидинович</td>
              <td>12.12.1994</td>
              <td>82</td>
              <td>14</td>
              <td>591815</td>
              <td> </td>
              <td>1/29/2015</td>
          </tr>
          <tr id="LC1602" class="js-file-line">
            <td id="L1602" class="blob-num js-line-number" data-line-number="1602"></td>
              <td>ВС-468289</td>
              <td>3317914</td>
              <td>Рядовой</td>
              <td>Магомедов Рабазан Абдулкадирович</td>
              <td>4/26/1994</td>
              <td>82</td>
              <td>13</td>
              <td>471987</td>
              <td> </td>
              <td>5/13/2014</td>
          </tr>
          <tr id="LC1603" class="js-file-line">
            <td id="L1603" class="blob-num js-line-number" data-line-number="1603"></td>
              <td>ВС-348011</td>
              <td>3319642</td>
              <td>Рядовой</td>
              <td>Арстанбаев Демен Амангельдыевич</td>
              <td>11.07.1995</td>
              <td>53</td>
              <td>15</td>
              <td>601235</td>
              <td> </td>
              <td>11/26/2015</td>
          </tr>
          <tr id="LC1604" class="js-file-line">
            <td id="L1604" class="blob-num js-line-number" data-line-number="1604"></td>
              <td>ВС-348021</td>
              <td>3319678</td>
              <td>Рядовой</td>
              <td>Фирсов Дмитрий Васильевич</td>
              <td>12.01.1997</td>
              <td>53</td>
              <td>11</td>
              <td>153185</td>
              <td>ОУФМС по Хабаровскому краю в Индустриальном р-не</td>
              <td>12/27/2011</td>
          </tr>
          <tr id="LC1605" class="js-file-line">
            <td id="L1605" class="blob-num js-line-number" data-line-number="1605"></td>
              <td>ВС-348010</td>
              <td>3319683</td>
              <td>Рядовой</td>
              <td>Юданов Константин Дмитриевич</td>
              <td>07.11.1995</td>
              <td>53</td>
              <td>15</td>
              <td>550729</td>
              <td> </td>
              <td>08.10.2015</td>
          </tr>
          <tr id="LC1606" class="js-file-line">
            <td id="L1606" class="blob-num js-line-number" data-line-number="1606"></td>
              <td>ВС-300419</td>
              <td>3323879</td>
              <td>Рядовой</td>
              <td>Анисимов Илья Михайлович</td>
              <td>10.10.1999</td>
              <td>65</td>
              <td>13</td>
              <td>670627</td>
              <td> </td>
              <td>12/17/2013</td>
          </tr>
          <tr id="LC1607" class="js-file-line">
            <td id="L1607" class="blob-num js-line-number" data-line-number="1607"></td>
              <td>ВС-300401</td>
              <td>3323885</td>
              <td>Рядовой</td>
              <td>Беляев Михаил Дмитриевич</td>
              <td>9/16/1999</td>
              <td>65</td>
              <td>13</td>
              <td>587173</td>
              <td>ТП УФМС России по Свердловской области в Артинском районе</td>
              <td>10/24/2013</td>
          </tr>
          <tr id="LC1608" class="js-file-line">
            <td id="L1608" class="blob-num js-line-number" data-line-number="1608"></td>
              <td>ВС-300227</td>
              <td>3323900</td>
              <td>Рядовой</td>
              <td>Глушков Максим Александрович</td>
              <td>03.02.1999</td>
              <td>65</td>
              <td>13</td>
              <td>568181</td>
              <td>Отделением УФМС России по Свердловской обл. в Дзержинском р-не г. Ни</td>
              <td>ж4/1/2013</td>
          </tr>
          <tr id="LC1609" class="js-file-line">
            <td id="L1609" class="blob-num js-line-number" data-line-number="1609"></td>
              <td>ВС-300551</td>
              <td>3323903</td>
              <td>Рядовой</td>
              <td>Данелов Лев Сергеевич</td>
              <td>5/22/1996</td>
              <td>65</td>
              <td>16</td>
              <td>249882</td>
              <td>Отделом УФМС России по Свердловской области в Асбестовском районе</td>
              <td>6/22/2016</td>
          </tr>
          <tr id="LC1610" class="js-file-line">
            <td id="L1610" class="blob-num js-line-number" data-line-number="1610"></td>
              <td>ВС-300579</td>
              <td>3323906</td>
              <td>Рядовой</td>
              <td>Ефремкин Никита Андреевич</td>
              <td>01.10.1998</td>
              <td>65</td>
              <td>11</td>
              <td>319808</td>
              <td> </td>
              <td>1/21/2012</td>
          </tr>
          <tr id="LC1611" class="js-file-line">
            <td id="L1611" class="blob-num js-line-number" data-line-number="1611"></td>
              <td>ВС-300349</td>
              <td>3323926</td>
              <td>Рядовой</td>
              <td>Михалев Иван Николаевич</td>
              <td>1/23/1999</td>
              <td>65</td>
              <td>12</td>
              <td>509133</td>
              <td>ТП УФМС России по Свердловской области в Тугульском районе</td>
              <td>07.08.2013</td>
          </tr>
          <tr id="LC1612" class="js-file-line">
            <td id="L1612" class="blob-num js-line-number" data-line-number="1612"></td>
              <td>ВС-300403</td>
              <td>3323928</td>
              <td>Рядовой</td>
              <td>Николаев Сергей Дмитриевич</td>
              <td>06.03.1996</td>
              <td>65</td>
              <td>16</td>
              <td>214592</td>
              <td> </td>
              <td>6/17/2016</td>
          </tr>
          <tr id="LC1613" class="js-file-line">
            <td id="L1613" class="blob-num js-line-number" data-line-number="1613"></td>
              <td>ВС-300234</td>
              <td>3323944</td>
              <td>Рядовой</td>
              <td>Рожков Григорий Александрович</td>
              <td>10.05.1992</td>
              <td>75</td>
              <td>12</td>
              <td>128306</td>
              <td>Отделом УФМС России по Челябинской области в городе Миассе</td>
              <td>10.09.2012</td>
          </tr>
          <tr id="LC1614" class="js-file-line">
            <td id="L1614" class="blob-num js-line-number" data-line-number="1614"></td>
              <td>ВС-300418</td>
              <td>3323952</td>
              <td>Рядовой</td>
              <td>Сорокин Павел Андреевич</td>
              <td>9/22/1998</td>
              <td>65</td>
              <td>12</td>
              <td>471010</td>
              <td>Отделением УФМС России по Свердловской области в Дзержинском р-не г</td>
              <td>о10/10/2012</td>
          </tr>
          <tr id="LC1615" class="js-file-line">
            <td id="L1615" class="blob-num js-line-number" data-line-number="1615"></td>
              <td>ВС-300420</td>
              <td>3323955</td>
              <td>Рядовой</td>
              <td>Туканаев Павел Ильич</td>
              <td>01.05.1994</td>
              <td>65</td>
              <td>14</td>
              <td>940988</td>
              <td>Отделом УФМС России по Свердловской обл. в г. Серове</td>
              <td>02.12.2015</td>
          </tr>
          <tr id="LC1616" class="js-file-line">
            <td id="L1616" class="blob-num js-line-number" data-line-number="1616"></td>
              <td>ВС-300230</td>
              <td>3324165</td>
              <td>Рядовой</td>
              <td>Чухарев Иван Владимирович</td>
              <td>11/23/1997</td>
              <td>65</td>
              <td>11</td>
              <td>256247</td>
              <td> </td>
              <td>12.09.2011</td>
          </tr>
          <tr id="LC1617" class="js-file-line">
            <td id="L1617" class="blob-num js-line-number" data-line-number="1617"></td>
              <td>ВС-086171</td>
              <td>3326504</td>
              <td>Рядовой</td>
              <td>Подопригора Григорий Сергеевич</td>
              <td>1/13/1997</td>
              <td>52</td>
              <td>16</td>
              <td>605338</td>
              <td> </td>
              <td>1/26/2017</td>
          </tr>
          <tr id="LC1618" class="js-file-line">
            <td id="L1618" class="blob-num js-line-number" data-line-number="1618"></td>
              <td>ВС-087772</td>
              <td>3326561</td>
              <td>Рядовой</td>
              <td>Абильхаиров Ербол Жексенбаевич</td>
              <td>11.11.1994</td>
              <td>52</td>
              <td>16</td>
              <td>618407</td>
              <td>ОУФМС по Еврейской автономной области</td>
              <td>3/22/2017</td>
          </tr>
          <tr id="LC1619" class="js-file-line">
            <td id="L1619" class="blob-num js-line-number" data-line-number="1619"></td>
              <td>ВС-088237</td>
              <td>3326596</td>
              <td>Рядовой</td>
              <td>Третьяк Михаил Витальевич</td>
              <td>06.03.1999</td>
              <td>52</td>
              <td>13</td>
              <td>276513</td>
              <td> </td>
              <td>11.07.2013</td>
          </tr>
          <tr id="LC1620" class="js-file-line">
            <td id="L1620" class="blob-num js-line-number" data-line-number="1620"></td>
              <td>МТ-150408</td>
              <td>3332435</td>
              <td>Рядовой</td>
              <td>Мукасеев Сергей Михайлович</td>
              <td>09.02.1998</td>
              <td>60</td>
              <td>16</td>
              <td>961835</td>
              <td> </td>
              <td>6/16/2016</td>
          </tr>
          <tr id="LC1621" class="js-file-line">
            <td id="L1621" class="blob-num js-line-number" data-line-number="1621"></td>
              <td>ВС-377195</td>
              <td>3333503</td>
              <td>Рядовой</td>
              <td>Московцев Анатолий Анатольевич</td>
              <td>7/21/1997</td>
              <td>97</td>
              <td>17</td>
              <td>320083</td>
              <td> </td>
              <td>10/24/2017</td>
          </tr>
          <tr id="LC1622" class="js-file-line">
            <td id="L1622" class="blob-num js-line-number" data-line-number="1622"></td>
              <td>ВЕ-040027</td>
              <td>3369242</td>
              <td>Рядовой</td>
              <td>Ольхов Владимир Владимирович</td>
              <td>4/14/1999</td>
              <td>99</td>
              <td>13</td>
              <td>289812</td>
              <td> </td>
              <td>7/25/2013</td>
          </tr>
          <tr id="LC1623" class="js-file-line">
            <td id="L1623" class="blob-num js-line-number" data-line-number="1623"></td>
              <td>СУ-465006</td>
              <td>3383880</td>
              <td>Рядовой</td>
              <td>Хасанов Антон Равилевич</td>
              <td>12.06.1993</td>
              <td>76</td>
              <td>13</td>
              <td>699608</td>
              <td> </td>
              <td>2/14/2014</td>
          </tr>
          <tr id="LC1624" class="js-file-line">
            <td id="L1624" class="blob-num js-line-number" data-line-number="1624"></td>
              <td>МТ-204333</td>
              <td>3385251</td>
              <td>Рядовой</td>
              <td>Кутилов Анатолий Михайлович</td>
              <td>1/13/1983</td>
              <td>8</td>
              <td>15</td>
              <td>324130</td>
              <td> </td>
              <td>8/21/2015</td>
          </tr>
          <tr id="LC1625" class="js-file-line">
            <td id="L1625" class="blob-num js-line-number" data-line-number="1625"></td>
              <td>МТ-246502</td>
              <td>3388120</td>
              <td>Рядовой</td>
              <td>Дульнев Александр Александрович</td>
              <td>09.04.1997</td>
              <td>98</td>
              <td>17</td>
              <td>732600</td>
              <td> </td>
              <td>09.06.2017</td>
          </tr>
          <tr id="LC1626" class="js-file-line">
            <td id="L1626" class="blob-num js-line-number" data-line-number="1626"></td>
              <td>СУ-442192</td>
              <td>3406528</td>
              <td>Рядовой</td>
              <td>Гунба Виктор Ильич</td>
              <td>12.11.1999</td>
              <td>8</td>
              <td>13</td>
              <td>202727</td>
              <td>ОУФМС России по Хабаровскому краю в Северном округе г. Хабаровска</td>
              <td>12/26/2013</td>
          </tr>
          <tr id="LC1627" class="js-file-line">
            <td id="L1627" class="blob-num js-line-number" data-line-number="1627"></td>
              <td>МТ-182309</td>
              <td>3418494</td>
              <td>Рядовой</td>
              <td>Мельник Антон Николаевич</td>
              <td>4/13/1996</td>
              <td>8</td>
              <td>15</td>
              <td>340088</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской автономной области в Б</td>
              <td>4/22/2016</td>
          </tr>
          <tr id="LC1628" class="js-file-line">
            <td id="L1628" class="blob-num js-line-number" data-line-number="1628"></td>
              <td>МТ-129960</td>
              <td>3418971</td>
              <td>Рядовой</td>
              <td>Лупанов Владимир Витальевич</td>
              <td>01.03.1996</td>
              <td>10</td>
              <td>15</td>
              <td>475151</td>
              <td>МО УФМС по Амурской области в г. Благовещенске</td>
              <td>03.09.2016</td>
          </tr>
          <tr id="LC1629" class="js-file-line">
            <td id="L1629" class="blob-num js-line-number" data-line-number="1629"></td>
              <td>МТ-217067</td>
              <td>3419258</td>
              <td>Рядовой</td>
              <td>Игнатенко Евгений Валентинович</td>
              <td>01.10.1984</td>
              <td>8</td>
              <td>4</td>
              <td>317203</td>
              <td>Управление внутренних дел Центрального р-на г. Хабаровска</td>
              <td>07.12.2004</td>
          </tr>
          <tr id="LC1630" class="js-file-line">
            <td id="L1630" class="blob-num js-line-number" data-line-number="1630"></td>
              <td>МТ-217151</td>
              <td>3420816</td>
              <td>Рядовой</td>
              <td>Лещин Антон Сергеевич</td>
              <td>02.05.1986</td>
              <td>83</td>
              <td>15</td>
              <td>286720</td>
              <td>ОУФМС России по Кабардино-Балкарской Республике в Прохладном р-не</td>
              <td>05.04.2016</td>
          </tr>
          <tr id="LC1631" class="js-file-line">
            <td id="L1631" class="blob-num js-line-number" data-line-number="1631"></td>
              <td>Ю-777558</td>
              <td>3425355</td>
              <td>Рядовой</td>
              <td>Даугинтис Алексей Олегович</td>
              <td>9/25/1994</td>
              <td>5</td>
              <td>14</td>
              <td>225184</td>
              <td>ОУФМС России по Приморскому краю в Черниговском муниципальном р-н</td>
              <td>е11/10/2014</td>
          </tr>
          <tr id="LC1632" class="js-file-line">
            <td id="L1632" class="blob-num js-line-number" data-line-number="1632"></td>
              <td>Х-146967</td>
              <td>3425771</td>
              <td>Рядовой</td>
              <td>Грозов Роман Сергеевич</td>
              <td>08.08.1995</td>
              <td>5</td>
              <td>15</td>
              <td>356834</td>
              <td>ОУФМС России по Приморскому краю в Первореченском р-не г. Владивост</td>
              <td>о3/17/2016</td>
          </tr>
          <tr id="LC1633" class="js-file-line">
            <td id="L1633" class="blob-num js-line-number" data-line-number="1633"></td>
              <td>МТ-172651</td>
              <td>3428071</td>
              <td>Рядовой</td>
              <td>Волошин Алексей Борисович</td>
              <td>2/14/1997</td>
              <td>76</td>
              <td>17</td>
              <td>960887</td>
              <td>УМВД России по Забайкальскому краю</td>
              <td>1/25/2018</td>
          </tr>
          <tr id="LC1634" class="js-file-line">
            <td id="L1634" class="blob-num js-line-number" data-line-number="1634"></td>
              <td>Ю-066079</td>
              <td>3428073</td>
              <td>Рядовой</td>
              <td>Бубнов Андрей Александрович</td>
              <td>10.08.1989</td>
              <td>76</td>
              <td>10</td>
              <td>486303</td>
              <td>ОУФМС России по Забайкальскому в Серетенском р-не</td>
              <td>07.07.2010</td>
          </tr>
          <tr id="LC1635" class="js-file-line">
            <td id="L1635" class="blob-num js-line-number" data-line-number="1635"></td>
              <td>МТ-317094</td>
              <td>3428108</td>
              <td>Рядовой</td>
              <td>Дотпаа Азиат Витальевич</td>
              <td>5/20/1993</td>
              <td>93</td>
              <td>13</td>
              <td>500702</td>
              <td>ООФМС России по республике Тыва в г. Кызыле</td>
              <td>1/30/2014</td>
          </tr>
          <tr id="LC1636" class="js-file-line">
            <td id="L1636" class="blob-num js-line-number" data-line-number="1636"></td>
              <td>СУ-465967</td>
              <td>3428762</td>
              <td>Рядовой</td>
              <td>Филиппов Александр Александрович</td>
              <td>05.08.1979</td>
              <td>76</td>
              <td>99</td>
              <td>77608</td>
              <td>ОВД Нерчинского р-на Читинской области</td>
              <td>4/13/2000</td>
          </tr>
          <tr id="LC1637" class="js-file-line">
            <td id="L1637" class="blob-num js-line-number" data-line-number="1637"></td>
              <td>МТ-129154</td>
              <td>3435097</td>
              <td>Рядовой</td>
              <td>Тамонов Александр Александрович</td>
              <td>03.09.1990</td>
              <td>10</td>
              <td>9</td>
              <td>196839</td>
              <td>МО УФМС России по Амурской области в г. Белогорске</td>
              <td>3/15/2010</td>
          </tr>
          <tr id="LC1638" class="js-file-line">
            <td id="L1638" class="blob-num js-line-number" data-line-number="1638"></td>
              <td>Ф-710395</td>
              <td>3437342</td>
              <td>Рядовой</td>
              <td>Мамукоев Ачамез Русланович</td>
              <td>12/16/1996</td>
              <td>8</td>
              <td>17</td>
              <td>455717</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской автономной области в Х</td>
              <td>7/14/2017</td>
          </tr>
          <tr id="LC1639" class="js-file-line">
            <td id="L1639" class="blob-num js-line-number" data-line-number="1639"></td>
              <td>ВС-469236</td>
              <td>3437400</td>
              <td>Рядовой</td>
              <td>Гаджиев Тажудин Махачевич</td>
              <td>11/19/1995</td>
              <td>82</td>
              <td>15</td>
              <td>719762</td>
              <td>ТП УФМС России по республике Дагестан в Чародинском р-не</td>
              <td>12/18/2015</td>
          </tr>
          <tr id="LC1640" class="js-file-line">
            <td id="L1640" class="blob-num js-line-number" data-line-number="1640"></td>
              <td>Х-786442</td>
              <td>3442282</td>
              <td>Рядовой</td>
              <td>Медведев Александр Александрович</td>
              <td>09.07.1992</td>
              <td>8</td>
              <td>12</td>
              <td>88755</td>
              <td>ОУФМС России по Хабаровскому краю в Ульчском районе</td>
              <td>10.10.2012</td>
          </tr>
          <tr id="LC1641" class="js-file-line">
            <td id="L1641" class="blob-num js-line-number" data-line-number="1641"></td>
              <td>МТ-217088</td>
              <td>3442305</td>
              <td>Рядовой</td>
              <td>Ризнычок Антон Сергеевич</td>
              <td>04.02.1993</td>
              <td>8</td>
              <td>13</td>
              <td>153698</td>
              <td>ОУФМС России по Хабаровскому краю в Северном округе г. Хабаровска</td>
              <td>4/25/2013</td>
          </tr>
          <tr id="LC1642" class="js-file-line">
            <td id="L1642" class="blob-num js-line-number" data-line-number="1642"></td>
              <td>Х-837510</td>
              <td>3450485</td>
              <td>Рядовой</td>
              <td>Тюкавкин Михаил Викторович</td>
              <td>02.11.1988</td>
              <td>8</td>
              <td>11</td>
              <td>80450</td>
              <td>ОУФМС России по Хабаровскому краю в Железнодорожном районе г. Хаба</td>
              <td>р5/14/2012</td>
          </tr>
          <tr id="LC1643" class="js-file-line">
            <td id="L1643" class="blob-num js-line-number" data-line-number="1643"></td>
              <td>ВС-295205</td>
              <td>3450486</td>
              <td>Рядовой</td>
              <td>Лабутин Антон Михайлович</td>
              <td>04.04.1998</td>
              <td>37</td>
              <td>18</td>
              <td>743218</td>
              <td>УМВД России по Курганской области</td>
              <td>04.11.2018</td>
          </tr>
          <tr id="LC1644" class="js-file-line">
            <td id="L1644" class="blob-num js-line-number" data-line-number="1644"></td>
              <td>ВС-295323</td>
              <td>3450488</td>
              <td>Рядовой</td>
              <td>Мурзин Евгений Дмитриевич</td>
              <td>08.02.1998</td>
              <td>37</td>
              <td>12</td>
              <td>491201</td>
              <td>ОУФМС России по Курганской области в г. Шадринске и Шадринском район</td>
              <td>8/13/2012</td>
          </tr>
          <tr id="LC1645" class="js-file-line">
            <td id="L1645" class="blob-num js-line-number" data-line-number="1645"></td>
              <td>МТ-103215</td>
              <td>3450799</td>
              <td>Рядовой</td>
              <td>Григорьев Александр Андреевич</td>
              <td>10/28/1997</td>
              <td>8</td>
              <td>17</td>
              <td>469877</td>
              <td>УМВД России по Хабаровскому краю</td>
              <td>2/21/2018</td>
          </tr>
          <tr id="LC1646" class="js-file-line">
            <td id="L1646" class="blob-num js-line-number" data-line-number="1646"></td>
              <td>МТ-131209</td>
              <td>3451426</td>
              <td>Рядовой</td>
              <td>Толстоногов Андрей Викторович</td>
              <td>07.03.1997</td>
              <td>8</td>
              <td>17</td>
              <td>460200</td>
              <td>ОУФМС России по Хабаровскому краю и Еврейской автономной области в Ж</td>
              <td>08.08.2017</td>
          </tr>
          <tr id="LC1647" class="js-file-line">
            <td id="L1647" class="blob-num js-line-number" data-line-number="1647"></td>
              <td>СУ-418500</td>
              <td>3463729</td>
              <td>Рядовой</td>
              <td>Девятов Павел Андреевич</td>
              <td>1/30/1997</td>
              <td>8</td>
              <td>17</td>
              <td>434700</td>
              <td>ОТДЕЛОМ ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕВРЕЙСКОЙ АВТОН</td>
              <td>3/28/2017</td>
          </tr>
          <tr id="LC1648" class="js-file-line">
            <td id="L1648" class="blob-num js-line-number" data-line-number="1648"></td>
              <td>МТ-173473</td>
              <td>3463731</td>
              <td>Рядовой</td>
              <td>Щербин Максим Андреевич</td>
              <td>12.05.1996</td>
              <td>8</td>
              <td>16</td>
              <td>417118</td>
              <td>ОУФМС РОССИИ ПО ХАБАРОВСКОМУ КРАЮ И ЕВРЕЙСКОЙ АВТОНОМНОЙ О</td>
              <td>Б12/28/2016</td>
          </tr>
          <tr id="LC1649" class="js-file-line">
            <td id="L1649" class="blob-num js-line-number" data-line-number="1649"></td>
              <td>У-871241</td>
              <td>2737864</td>
              <td>Старший лейтенант меди</td>
              <td>Власова Надежда Юрьевна</td>
              <td>7/18/1983</td>
              <td>8</td>
              <td>18</td>
              <td>509911</td>
              <td>УМВД России по Хабаровскому краю</td>
              <td>4/18/2018</td>
          </tr>
      </tbody>
    </table>';
    echo $table;
});

Route::get('/table_data', [\App\Http\Controllers\NoteController::class, "json_export"])->name("json_export");

