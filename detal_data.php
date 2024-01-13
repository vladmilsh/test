<!DOCTYPE html>
<html lang="ru">
  <head>
    <title><?php $tit = "Детальные данные"; echo ($tit); ?></title>
    <link rel="stylesheet" href="css/calculationcss.css" type="text/css"/>
    <link rel="stylesheet" href="css/button.css" type="text/css"/>
    <!--<script type="text/javascript" src="js.js"></script>-->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  </head>

  <body>
  <?php 
      require_once('connect/connect.php');
      $maxrowdd = DB::getValue("SELECT  COUNT(*) FROM `detal_data`");
  ?>
  <div class="">
      <ul class="">
        <a onclick="location.href = 'index.html'" class="button"><span>Жми!</span>В начало</a>
      </ul>
  </div>
  <div>
   <table border="1">
      <thead>
        <tr>
          <th>Сейчас загружено строк: (идентификатор id)</th>
          <th><?php echo $maxrowdd; ?></th>
          <th>
            <form action="detal_data.php" method="POST">
            <input type="text" name="dd" value=""/>
            <input type="submit" value="Введи идентификатор ID строки таблицы и нажми" />
            </form>
          </th>
        </tr>
      </thead>
  </table>
  </div>
    
    <table border="1">
      <thead>
        <tr>
          <th>№</th>
          <th>Номер поставки</th>
          <th>Предмет</th>
          <th>Код номенклатуры</th>
          <th>Бренд</th>
          <th>Артикул поставщика</th>
          <th>Название</th>
          <th>Страна</th>
          <th>Rid</th>
          <th>Srid</th>
          <th>Размер</th>
          <th>Баркод</th>
          <th>Тип документа</th>
          <th>Кол-во</th>
          <th>Цена розничная</th>
          <th>Вайлдберриз реализовал Товар (Пр)</th>
          <th>Итоговая согласованная скидка</th>
          <th>Скидка постоянного Покупателя (СПП)</th>
          <th>Размер кВВ, %</th>
          <th>Размер кВВ без НДС, % Базовый</th>
          <th>Итоговый кВВ без НДС, %</th>
          <th>Вознаграждение с продаж до вычета услуг поверенного, без НДС</th>
          <th>Возмещение Расходов услуг поверенного</th>
          <th>Вознаграждение Вайлдберриз (ВВ), без НДС</th>
          <th>НДС с Вознаграждения Вайлдберриз</th>
          <th>Номер офиса</th>
          <th>Наименование офиса доставки</th>
          <th>ИНН партнера</th>
          <th>Партнер</th>
          <th>Склад</th>
          <th>Обоснование для оплаты</th>
          <th>Дата заказа покупателем</th>
          <th>Дата продажи</th>
          <th>ШК</th>
          <th>Цена розничная с учетом согласованной скидки</th>
          <th>К перечислению Продавцу за реализованный Товар</th>
          <th>Количество доставок</th>
          <th>Количество возврата</th>
          <th>Услуги по доставке товара покупателю</th>
          <th>Тип коробов</th>
          <th>Согласованный продуктовый дисконт, %</th>
          <th>Промокод %</th>
          <th>Номер таможенной декларации</th>
          <th>Обоснование штрафа</th>
          <th>Стикер МП</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
		      if($_POST['dd']) {
			    $str = $_POST['dd'];
		      }
		      $item = DB::getRow("SELECT * FROM `detal_data` WHERE `id` = :id", array('id' =>$str));
          
        ?>
        <tr>
          <td><?php echo $item['№']; ?></td>
          <td><?php echo $item['Номер поставки']; ?></td>
          <td><?php echo $item['Предмет']; ?></td>
          <td><?php echo $item['Код номенклатуры']; ?></td>
          <td><?php echo $item['Бренд']; ?></td>
          <td><?php echo $item['Артикул поставщика']; ?></td>
          <td><?php echo $item['Название']; ?></td>
          <td><?php echo $item['Страна']; ?></td>
          <td><?php echo $item['Rid']; ?></td>
          <td><?php echo $item['Srid']; ?></td>
          <td><?php echo $item['Размер']; ?></td>
          <td><?php echo $item['Баркод']; ?></td>
          <td><?php echo $item['Тип документа']; ?></td>
          <td><?php echo $item['Кол-во']; ?></td>
          <td><?php echo $item['Цена розничная']; ?></td>
          <td><?php echo $item['Вайлдберриз реализовал Товар (Пр)']; ?></td>
          <td><?php echo $item['Итоговая согласованная скидка']; ?></td>
          <td><?php echo $item['Скидка постоянного Покупателя (СПП)']; ?></td>
          <td><?php echo $item['Размер кВВ, %']; ?></td>
          <td><?php echo $item['Размер  кВВ без НДС, % Базовый']; ?></td>
          <td><?php echo $item['Итоговый кВВ без НДС, %']; ?></td>
          <td><?php echo $item['Вознаграждение с продаж до вычета услуг поверенного, без НДС']; ?></td>
          <td><?php echo $item['Возмещение Расходов услуг поверенного']; ?></td>
          <td><?php echo $item['Вознаграждение Вайлдберриз (ВВ), без НДС']; ?></td>
          <td><?php echo $item['НДС с Вознаграждения Вайлдберриз']; ?></td>
          <td><?php echo $item['Номер офиса']; ?></td>
          <td><?php echo $item['Наименование офиса доставки']; ?></td>
          <td><?php echo $item['ИНН партнера']; ?></td>
          <td><?php echo $item['Партнер']; ?></td>
          <td><?php echo $item['Склад']; ?></td>
          <td><?php echo $item['Обоснование для оплаты']; ?></td>
          <td><?php echo $item['Дата заказа покупателем']; ?></td>
          <td><?php echo $item['Дата продажи']; ?></td>
          <td><?php echo $item['ШК']; ?></td>
          <td><?php echo $item['Цена розничная с учетом согласованной скидки']; ?></td>
          <td><?php echo $item['К перечислению Продавцу за реализованный Товар']; ?></td>
          <td><?php echo $item['Количество доставок']; ?></td>
          <td><?php echo $item['Количество возврата']; ?></td>
          <td><?php echo $item['Услуги по доставке товара покупателю']; ?></td>
          <td><?php echo $item['Тип коробов']; ?></td>
          <td><?php echo $item['Согласованный продуктовый дисконт, %']; ?></td>
          <td><?php echo $item['Промокод %']; ?></td>
          <td><?php echo $item['Номер таможенной декларации']; ?></td>
          <td><?php echo $item['Обоснование штрафа']; ?></td>
          <td><?php echo $item['Стикер МП']; ?></td>
          
        </tr>
        <?php 
			   
		      $item = DB::getRow("SELECT * FROM `detal_data` WHERE `id` = :id", array('id' =>($str+1)));
        ?>
        <tr>
          <td><?php echo $item['№']; ?></td>
          <td><?php echo $item['Номер поставки']; ?></td>
          <td><?php echo $item['Предмет']; ?></td>
          <td><?php echo $item['Код номенклатуры']; ?></td>
          <td><?php echo $item['Бренд']; ?></td>
          <td><?php echo $item['Артикул поставщика']; ?></td>
          <td><?php echo $item['Название']; ?></td>
          <td><?php echo $item['Страна']; ?></td>
          <td><?php echo $item['Rid']; ?></td>
          <td><?php echo $item['Srid']; ?></td>
          <td><?php echo $item['Размер']; ?></td>
          <td><?php echo $item['Баркод']; ?></td>
          <td><?php echo $item['Тип документа']; ?></td>
          <td><?php echo $item['Кол-во']; ?></td>
          <td><?php echo $item['Цена розничная']; ?></td>
          <td><?php echo $item['Вайлдберриз реализовал Товар (Пр)']; ?></td>
          <td><?php echo $item['Итоговая согласованная скидка']; ?></td>
          <td><?php echo $item['Скидка постоянного Покупателя (СПП)']; ?></td>
          <td><?php echo $item['Размер кВВ, %']; ?></td>
          <td><?php echo $item['Размер  кВВ без НДС, % Базовый']; ?></td>
          <td><?php echo $item['Итоговый кВВ без НДС, %']; ?></td>
          <td><?php echo $item['Вознаграждение с продаж до вычета услуг поверенного, без НДС']; ?></td>
          <td><?php echo $item['Возмещение Расходов услуг поверенного']; ?></td>
          <td><?php echo $item['Вознаграждение Вайлдберриз (ВВ), без НДС']; ?></td>
          <td><?php echo $item['НДС с Вознаграждения Вайлдберриз']; ?></td>
          <td><?php echo $item['Номер офиса']; ?></td>
          <td><?php echo $item['Наименование офиса доставки']; ?></td>
          <td><?php echo $item['ИНН партнера']; ?></td>
          <td><?php echo $item['Партнер']; ?></td>
          <td><?php echo $item['Склад']; ?></td>
          <td><?php echo $item['Обоснование для оплаты']; ?></td>
          <td><?php echo $item['Дата заказа покупателем']; ?></td>
          <td><?php echo $item['Дата продажи']; ?></td>
          <td><?php echo $item['ШК']; ?></td>
          <td><?php echo $item['Цена розничная с учетом согласованной скидки']; ?></td>
          <td><?php echo $item['К перечислению Продавцу за реализованный Товар']; ?></td>
          <td><?php echo $item['Количество доставок']; ?></td>
          <td><?php echo $item['Количество возврата']; ?></td>
          <td><?php echo $item['Услуги по доставке товара покупателю']; ?></td>
          <td><?php echo $item['Тип коробов']; ?></td>
          <td><?php echo $item['Согласованный продуктовый дисконт, %']; ?></td>
          <td><?php echo $item['Промокод %']; ?></td>
          <td><?php echo $item['Номер таможенной декларации']; ?></td>
          <td><?php echo $item['Обоснование штрафа']; ?></td>
          <td><?php echo $item['Стикер МП']; ?></td>
          
        </tr>
          <?php 
		  
		        $item = DB::getRow("SELECT * FROM `detal_data` WHERE `id` = :id", array('id' =>($str+2))); 
          ?>
          <tr>
          <td><?php echo $item['№']; ?></td>
          <td><?php echo $item['Номер поставки']; ?></td>
          <td><?php echo $item['Предмет']; ?></td>
          <td><?php echo $item['Код номенклатуры']; ?></td>
          <td><?php echo $item['Бренд']; ?></td>
          <td><?php echo $item['Артикул поставщика']; ?></td>
          <td><?php echo $item['Название']; ?></td>
          <td><?php echo $item['Страна']; ?></td>
          <td><?php echo $item['Rid']; ?></td>
          <td><?php echo $item['Srid']; ?></td>
          <td><?php echo $item['Размер']; ?></td>
          <td><?php echo $item['Баркод']; ?></td>
          <td><?php echo $item['Тип документа']; ?></td>
          <td><?php echo $item['Кол-во']; ?></td>
          <td><?php echo $item['Цена розничная']; ?></td>
          <td><?php echo $item['Вайлдберриз реализовал Товар (Пр)']; ?></td>
          <td><?php echo $item['Итоговая согласованная скидка']; ?></td>
          <td><?php echo $item['Скидка постоянного Покупателя (СПП)']; ?></td>
          <td><?php echo $item['Размер кВВ, %']; ?></td>
          <td><?php echo $item['Размер  кВВ без НДС, % Базовый']; ?></td>
          <td><?php echo $item['Итоговый кВВ без НДС, %']; ?></td>
          <td><?php echo $item['Вознаграждение с продаж до вычета услуг поверенного, без НДС']; ?></td>
          <td><?php echo $item['Возмещение Расходов услуг поверенного']; ?></td>
          <td><?php echo $item['Вознаграждение Вайлдберриз (ВВ), без НДС']; ?></td>
          <td><?php echo $item['НДС с Вознаграждения Вайлдберриз']; ?></td>
          <td><?php echo $item['Номер офиса']; ?></td>
          <td><?php echo $item['Наименование офиса доставки']; ?></td>
          <td><?php echo $item['ИНН партнера']; ?></td>
          <td><?php echo $item['Партнер']; ?></td>
          <td><?php echo $item['Склад']; ?></td>
          <td><?php echo $item['Обоснование для оплаты']; ?></td>
          <td><?php echo $item['Дата заказа покупателем']; ?></td>
          <td><?php echo $item['Дата продажи']; ?></td>
          <td><?php echo $item['ШК']; ?></td>
          <td><?php echo $item['Цена розничная с учетом согласованной скидки']; ?></td>
          <td><?php echo $item['К перечислению Продавцу за реализованный Товар']; ?></td>
          <td><?php echo $item['Количество доставок']; ?></td>
          <td><?php echo $item['Количество возврата']; ?></td>
          <td><?php echo $item['Услуги по доставке товара покупателю']; ?></td>
          <td><?php echo $item['Тип коробов']; ?></td>
          <td><?php echo $item['Согласованный продуктовый дисконт, %']; ?></td>
          <td><?php echo $item['Промокод %']; ?></td>
          <td><?php echo $item['Номер таможенной декларации']; ?></td>
          <td><?php echo $item['Обоснование штрафа']; ?></td>
          <td><?php echo $item['Стикер МП']; ?></td>
         
        </tr>
          <?php 
				 
		        $item = DB::getRow("SELECT * FROM `detal_data` WHERE `id` = :id", array('id' =>($str+3)));
          ?>
        <tr>
          <td><?php echo $item['№']; ?></td>
          <td><?php echo $item['Номер поставки']; ?></td>
          <td><?php echo $item['Предмет']; ?></td>
          <td><?php echo $item['Код номенклатуры']; ?></td>
          <td><?php echo $item['Бренд']; ?></td>
          <td><?php echo $item['Артикул поставщика']; ?></td>
          <td><?php echo $item['Название']; ?></td>
          <td><?php echo $item['Страна']; ?></td>
          <td><?php echo $item['Rid']; ?></td>
          <td><?php echo $item['Srid']; ?></td>
          <td><?php echo $item['Размер']; ?></td>
          <td><?php echo $item['Баркод']; ?></td>
          <td><?php echo $item['Тип документа']; ?></td>
          <td><?php echo $item['Кол-во']; ?></td>
          <td><?php echo $item['Цена розничная']; ?></td>
          <td><?php echo $item['Вайлдберриз реализовал Товар (Пр)']; ?></td>
          <td><?php echo $item['Итоговая согласованная скидка']; ?></td>
          <td><?php echo $item['Скидка постоянного Покупателя (СПП)']; ?></td>
          <td><?php echo $item['Размер кВВ, %']; ?></td>
          <td><?php echo $item['Размер  кВВ без НДС, % Базовый']; ?></td>
          <td><?php echo $item['Итоговый кВВ без НДС, %']; ?></td>
          <td><?php echo $item['Вознаграждение с продаж до вычета услуг поверенного, без НДС'];?></td>
          <td><?php echo $item['Возмещение Расходов услуг поверенного']; ?></td>
          <td><?php echo $item['Вознаграждение Вайлдберриз (ВВ), без НДС']; ?></td>
          <td><?php echo $item['НДС с Вознаграждения Вайлдберриз']; ?></td>
          <td><?php echo $item['Номер офиса']; ?></td>
          <td><?php echo $item['Наименование офиса доставки']; ?></td>
          <td><?php echo $item['ИНН партнера']; ?></td>
          <td><?php echo $item['Партнер']; ?></td>
          <td><?php echo $item['Склад']; ?></td>
          <td><?php echo $item['Обоснование для оплаты']; ?></td>
          <td><?php echo $item['Дата заказа покупателем']; ?></td>
          <td><?php echo $item['Дата продажи']; ?></td>
          <td><?php echo $item['ШК']; ?></td>
          <td><?php echo $item['Цена розничная с учетом согласованной скидки']; ?></td>
          <td><?php echo $item['К перечислению Продавцу за реализованный Товар']; ?></td>
          <td><?php echo $item['Количество доставок']; ?></td>
          <td><?php echo $item['Количество возврата']; ?></td>
          <td><?php echo $item['Услуги по доставке товара покупателю']; ?></td>
          <td><?php echo $item['Тип коробов']; ?></td>
          <td><?php echo $item['Согласованный продуктовый дисконт, %']; ?></td>
          <td><?php echo $item['Промокод %']; ?></td>
          <td><?php echo $item['Номер таможенной декларации']; ?></td>
          <td><?php echo $item['Обоснование штрафа']; ?></td>
          <td><?php echo $item['Стикер МП']; ?></td>
          
        </tr>
      </tbody>
    </table>
  </body>
</html>
