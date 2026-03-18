jQuery(document).ready(function($) {
    console.log('custom.js загружен');
    
    $('.nav-link, .footer__nav-link').on('click', function(e) {
        const href = $(this).attr('href');
        
        if (href && href.indexOf('#') === 0) {
            e.preventDefault();
            
            const target = $(href);
            console.log('Поиск по:', href, '| Секция найдена:', target.length > 0);
            
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            } else {
                console.error('Секция не найдена:', href);
            }
        }
    });
    
    console.log('Проверка секций:');
    $('.nav-link, .footer__nav-link').each(function() {
        const href = $(this).attr('href');
        if (href && href.indexOf('#') === 0) {
            const exists = $(href).length > 0 ? 'Найдена' : 'НЕ найдена';
            console.log(exists, href);
        }
    });

    // Аккордион
    $('.faq__question').on('click', function() {
        const $item = $(this).closest('.faq__item');
        const $answer = $item.find('.faq__answer');
        const isOpen = $item.hasClass('faq__item--open');
        
        if (isOpen) {
            $item.removeClass('faq__item--open');
            $(this).attr('aria-expanded', 'false');
            $answer.slideUp(300);
        } else {
            $('.faq__item--open').removeClass('faq__item--open').find('.faq__answer').slideUp(300);
            $('.faq__question').attr('aria-expanded', 'false');
            
            $item.addClass('faq__item--open');
            $(this).attr('aria-expanded', 'true');
            $answer.slideDown(300);
        }
    });

    // ========== МОДАЛЬНОЕ ОКНО ==========
    const $modal = $('#contactModal');
    const $openModalBtns = $('.open-modal-btn, .header-button, .cta-button, .footer__cta-button, .emergency-help__button, .contacts__button');
    const $closeModalBtn = $('.modal-close');

    console.log('Найдено кнопок для открытия модалки:', $openModalBtns.length);
    console.log('Модальное окно найдено:', $modal.length);

    // Открытие
    $openModalBtns.on('click', function(e) {
        e.preventDefault();
        console.log('Клик по кнопке открытия модалки');
        $modal.css('display', 'flex');
        setTimeout(function() {
            $modal.addClass('active');
        }, 10);
        $('body').addClass('modal-open');
    });

    // Закрытие 
    function closeModal() {
        console.log('Закрытие модалки');
        $modal.removeClass('active');
        setTimeout(function() {
            $modal.css('display', 'none');
        }, 300);
        $('body').removeClass('modal-open');
    }

    // Закрытие по клику на крестик
    $closeModalBtn.on('click', function(e) {
        e.preventDefault();
        closeModal();
    });

    // Закрытие  по клику на overlay
    $modal.on('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });

    // Закрытие по Escape
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape' && $modal.hasClass('active')) {
            console.log('ESC - закрытие модалки');
            closeModal();
        }
    });
});