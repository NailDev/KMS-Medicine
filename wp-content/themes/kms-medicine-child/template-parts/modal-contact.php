<!-- Модальное окно -->
<div class="modal" id="contactModal">
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <button class="modal-close" id="closeModal">&times;</button>
        <h2 class="modal-title">СВЯЗАТЬСЯ <span>С НАМИ</span></h2>
        
        <form class="modal-form" id="contactForm">
            <input type="text" class="modal-input" placeholder="Ваше имя" required>
            <input type="tel" class="modal-input" placeholder="+7( ) _ _ - _ _" required>
            <input type="email" class="modal-input" placeholder="Email" required>
            <textarea class="modal-textarea" placeholder="Сообщение" rows="4"></textarea>
            
            <div class="modal-footer">
                <button type="submit" class="modal-submit">Оставить заявку</button>
                <label class="modal-checkbox">
                    <input type="checkbox" required>
                    <span class="checkbox-custom"></span>
                    <span class="checkbox-text">Я даю согласие на обработку своих персональных данных</span>
                </label>
            </div>
        </form>
    </div>
</div>