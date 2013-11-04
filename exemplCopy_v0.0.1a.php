<? 
/*
 * Пример вызова копирайта 
 *  
 * Обязательные поля
 * $version - версия
 *
 * Опционально
 * $mDate - дата создания сайта(опционально)
 *
 */
  
  echo file_get_contents("http://wq8.ru/GetLic.php?name=copy&version=".$version."&mDate=".$mDate); 
?>
