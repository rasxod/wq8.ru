<? 
/*
 * Пример вызова копирайта 
 *  
 * Обязательные поля
 * version - версия
 *
 * Опционально
 * mDate - дата создания сайта(опционально)
 * domain - домен вашего сайта
 * desc - описание сайта
 * target - цель открытия
 *
 */
  
  echo file_get_contents("http://wq8.ru/APIGetCopy.php?name=copy&version=0.01a&mDate=2013&domain=wq8.ru&desc=".urlencode('wq8.ru - Лицензионное соглашение для Вашего сайта')."&target=_BLANK"); 
?>
