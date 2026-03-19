# КМС Медицина — Лендинг клиники

![WordPress](https://img.shields.io/badge/WordPress-6.9.1-blue)
![PHP](https://img.shields.io/badge/PHP-8.2-purple)
![Docker](https://img.shields.io/badge/Docker-ready-blue)

Корпоративный сайт для службы платной скорой помощи "КМС Медицина". Разработан на WordPress с использованием кастомной дочерней темы. Сайт представляет услуги компании, позволяет управлять SEO-метаданными из админки и содержит полную верстку лендинга.

---

## 📋 Содержание
- [🚀 Быстрый старт](#-быстрый-старт)
- [🔑 Данные для входа](#-данные-для-входа)
- [📁 Структура проекта](#-структура-проекта)
- [🔍 SEO-настройки](#-seo-настройки)
- [📦 Использованные плагины](#-использованные-плагины)
- [✨ Особенности реализации](#-особенности-реализации)
- [📞 Контакты](#-контакты)

---

## 🚀 Быстрый старт

### 1. Клонирование репозитория
```bash
git clone https://github.com/NailDev/KMS-Medicine.git
cd KMS-Medicine
```
2. Настройка окружения
```bash
cp .env.example .env
```

3. Запуск Docker-контейнеров
```bash
docker-compose up -d
```

4. Установка WordPress
1) Откройте браузер: http://localhost:8080 

2) Выберите русский язык

3) Заполните данные (можно оставить как в .env)

4) Нажмите "Установить WordPress"

5. Активация темы
1) В админке перейдите в Внешний вид → Темы

2) Активируйте тему "КМС Медицина Дочерняя" (kms-medicine-child)

6. Настройка главной страницы
1) Создайте страницу "Главная"

2) В настройках (Настройки → Чтение) укажите:

3) На главной странице отображать: Статическая страница

4) Главная: выберите "Главная"

5) Сохраните изменения

## 🔑 Данные для входа

| Сервис | Адрес | Логин | Пароль |
|--------|-------|-------|--------|
| WordPress Admin | http://localhost:8080/wp-admin | `admin` | `myNael217217217217Mar` |
| phpMyAdmin | http://localhost:8081 | `root` | `mysql_root_2026` |
| База данных (MySQL) | localhost:3306 | `wordpress` | `wordpress_db_2026` |

📁 Структура проекта
kms-medicine/
├── docker-compose.yml          # Конфигурация Docker
├── .env.example                 # Пример переменных окружения
├── README.md                    # Документация
├── uploads.ini                  # Настройки загрузки
└── wp-content/
    └── themes/
        └── kms-medicine-child/  # Дочерняя тема
            ├── style.css         # Заголовок темы
            ├── functions.php     # Функции темы
            ├── front-page.php    # Шаблон главной
            ├── header.php        # Шапка сайта
            ├── footer.php        # Подвал сайта
            ├── index.php         # Запасной шаблон
            ├── assets/
            │   ├── css/
            │   │   └── main.css  # Основные стили
            │   ├── js/
            │   │   └── custom.js # Кастомные скрипты
            │   └── images/       # Графика, иконки, фоны
            └── template-parts/    # Переиспользуемые секции
                ├── hero.php
                ├── services.php
                ├── advantages.php
                ├── steps.php
                ├── work-types.php
                ├── faq.php
                ├── emergency.php
                ├── license.php
                ├── equipment.php
                └── contact.php


   🔍 SEO-настройки
При редактировании страницы "Главная" доступны два мета-бокса:

SEO настройки страницы
Заголовок (Title) — отображается во вкладке браузера и в поисковой выдаче

Мета-описание (Description) — краткое описание страницы для поисковиков

Заголовок H1 страницы — динамически подставляется в hero-секцию

Все поля автоматически выводятся в <head> главной страницы, переопределяя стандартные заголовки WordPress.

Реализация
SEO-поля реализованы через плагин Advanced Custom Fields (ACF):

При установленном плагине создана группа полей с локацией "Страница"

Вывод реализован через get_field() в header.php

📦 Использованные плагины
Плагин	Назначение
Advanced Custom Fields (ACF)	Создание кастомных полей для SEO-метаданных
Другие плагины не использовались — вся дополнительная функциональность реализована нативно в дочерней теме.


✨ Особенности реализации
✅ Чистая установка WordPress 6.9.1

✅ Дочерняя тема на основе Twenty Twenty-Four

✅ Кастомные шаблоны для главной страницы

✅ Редактируемые SEO-поля без плагинов (через ACF)

✅ Docker-окружение (запуск одной командой)

✅ Модальное окно для заявок

✅ Аккордион для FAQ

✅ Плавный скролл к якорям

✅ Секция "Оснащение" в три колонки с SVG-иконками

✅ Полное соответствие ТЗ

📞 Контакты
Имя: Наиль Марданов

Email: mardanov.nael@yandex.ru

Telegram: @Not_loveFty

GitHub: https://github.com/NailDev 

⚡ Возможные проблемы и решения
1. Ошибка прав доступа к wp-content
bash
sudo chmod -R 777 wp-content
(для Linux/Mac)

2. Порт 8080 уже занят
Измените порт в docker-compose.yml:

yaml
ports:
  - "8081:80"  # вместо 8080
3. Ошибка Call to undefined function get_field()
Активируйте плагин Advanced Custom Fields (ACF):

Админка → Плагины → Установленные

Найдите ACF и нажмите "Активировать"

4. Docker не запускается на Windows
Убедитесь, что Docker Desktop установлен и запущен

Проверьте, что в BIOS включена виртуализация

Выполните wsl --update в командной строке

🖼️ Скриншоты
<img width="1920" height="977" alt="2026-03-19_20-27-50" src="https://github.com/user-attachments/assets/c5c85727-4513-44c3-b27b-fe4e11aba2bb" />
<img width="1920" height="828" alt="2026-03-19_20-28-36" src="https://github.com/user-attachments/assets/72051bb4-8e6e-435d-8d07-d94430a9d3f3" />
<img width="1920" height="898" alt="2026-03-19_20-29-16" src="https://github.com/user-attachments/assets/4a61120b-b114-4647-900c-a6e6311964c8" />
<img width="1920" height="837" alt="2026-03-19_20-30-07" src="https://github.com/user-attachments/assets/f2aa8172-9343-4fcb-9ee3-a51b617d9ed2" />
<img width="1920" height="814" alt="2026-03-19_20-30-25" src="https://github.com/user-attachments/assets/6fd6704c-3a8d-4dc9-9917-00930daf129d" />
<img width="1920" height="802" alt="2026-03-19_20-30-46" src="https://github.com/user-attachments/assets/94e8c9b5-6169-463a-9bec-62906278641c" />
<img width="1920" height="695" alt="2026-03-19_20-31-05" src="https://github.com/user-attachments/assets/cb1d39be-c5ae-451e-be92-49123b29f5b8" />
<img width="1488" height="861" alt="2026-03-19_20-33-09" src="https://github.com/user-attachments/assets/1b5b3049-fa21-4955-8457-dbb1e7b3f98f" />
<img width="1920" height="634" alt="2026-03-19_20-33-40" src="https://github.com/user-attachments/assets/b3390a24-2b13-4efa-873d-1a2b0724ec88" />
