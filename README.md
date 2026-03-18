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
<img width="1764" height="664" alt="Снимок экрана 2026-03-18 181830" src="https://github.com/user-attachments/assets/567c95b5-8638-4c4f-a66e-23d3912dc1f3" />
<img width="1748" height="826" alt="Снимок экрана 2026-03-18 181811" src="https://github.com/user-attachments/assets/6e0482ad-388e-4180-b51d-fc3549c2585a" />
<img width="1744" height="593" alt="Снимок экрана 2026-03-18 181800" src="https://github.com/user-attachments/assets/ba5dd436-3ae1-4df0-ae3b-a4b3623df494" />
<img width="1795" height="835" alt="Снимок экрана 2026-03-18 181751" src="https://github.com/user-attachments/assets/f20f81d7-0520-4dcb-b631-0224bc7ade94" />
<img width="1778" height="901" alt="Снимок экрана 2026-03-18 181733" src="https://github.com/user-attachments/assets/23f14d10-710d-4969-ab38-bbc0fb17f4a2" />
<img width="1748" height="832" alt="Снимок экрана 2026-03-18 181715" src="https://github.com/user-attachments/assets/a8bdb3d5-ebc1-4ceb-89d1-7d5c4eb1f7ee" />
<img width="1843" height="908" alt="Снимок экрана 2026-03-18 181704" src="https://github.com/user-attachments/assets/39a4abd3-9069-4e5b-9593-0a4b55cc293f" />
<img width="1866" height="1018" alt="Снимок экрана 2026-03-18 181656" src="https://github.com/user-attachments/assets/7e07afcb-026d-4f29-9d3d-45b50299b155" />

