# phprun

# Основные задачи движка
* единая точка входа
* чиловеко понятный url
* система папок и прав
* авторизация:
- вход
- регистрация
- подтверждение
* личная страница
- блог
- друзья
* личные сообщения
* отзывы
* тех.поддержка
* статьи
- вывод статей при скролле
- вывод статей с постраничной навигацией
- вывод одной статьи
- оценка, комментарий статьи
## папки
| папка | описание |
| ----- |:------------------:|
| all   | страницы для всех |
| auth  | страницы видны авторизировавшимся |
| guest | страницы для гостей (авторизация) |
| error | страницы ошибок |

Файлы в не папок: all, admin, auth, error и guest - не могут быть открыты как самостоятельные страницы 
папка assets - единственный свободный котолог файлов. Тут подключаются стили/библиотеки/скрипты/картинки и тд
Основная ветка(master) является рабочим прототипом движка. Именно эту ветку стоит выкачивать или сделать форк этой ветки.
``` в master ветку заносится только полностью рабочий билд```

Ветка разработки(develop) является той веткой над которой идёт в данный момент работа. Если вы работаете вместе или же хотите получить более свежую версию, то выкачивайте эту ветку. !!!Возможны баги!!!

### помощь по git
Настоятельный совет: создавать пулл запрос в ветку develop
```
 git clone https://github.com/ankogit/phprun.git    //выкачать репозиторий
 git remote add origin https://github.com/ankogit/phprun.git   //Добавление удалённого репозитория 
 git checkout develop    //выбрать ветку

 git status    //проверить статус
 git add .     //добавить всё изменения в коммит

 git commit -am "Desc"  //создание коммита
 git push origin develop   //публикация изменений

```
