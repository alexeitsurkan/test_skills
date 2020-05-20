<p align="center">
    <a href="#">
        <img src="https://i.ibb.co/934F0Lk/2020-05-21-01-50-00.png">
    </a>
    <h1 align="center">Тестовое задание</h1>
    <br>
</p>

Задание

    1. Создать MySQL базу данных с таблицами Users, Skills, City;
    2. Поля таблицы Users:
        1. id;
        2. name;
        3. city_id;
    3. Поля таблиц Skills и City:
        1. id;
        2. name;
    4. Можно создать другие вспомогательные таблицы, при необходимости;
    5. Заполнить таблицы несколькими записями;
    6. Один пользователь может не иметь навыков или иметь их несколько. Место жительства может быть только одно;
    7. Используя Yii2, отобразить на странице список всех пользователей в таком виде или при желании оформить таблицей:
        1. <имя>. Место жительства: <город>. [Навыки (<навык>[,<навык>])];
	Для доступа к данным использовать ActiveRecord. Данные вывести в таблицу 	DataTables (https://datatables.net/). CRUD генератор не использовать. При добавлении 	нового пользователя, обновлять данные в таблице без перезагрузки страницы. На 	каждой строчке добавить кнопку для удаления записи с окном подтверждения 	(можно через обычный js confirm). После удаления данных, 	желательно обновить 	данные без перезагрузки страницы.
    8. Сделать кнопку для добавления нового пользователя со случайным именем (именно именем а не набором символов), местожительством и набором навыков;
    9. Весь код выложить на GitHub.


DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime

frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
