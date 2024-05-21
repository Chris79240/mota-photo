jQuery(document).ready(function($) {
    // Ouvrir la modale de contact
    $('.open-contact-modal').click(function(e) {
        e.preventDefault();
        $('.contact-modal').fadeIn().css('display', 'flex');
    });

    // Fermer la modale de contact
    $('.close-modal').click(function() {
        $('.contact-modal').fadeOut();
    });
});