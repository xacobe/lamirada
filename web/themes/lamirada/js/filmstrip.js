(function (Drupal) {
    'use strict';

    Drupal.behaviors.filmstripToggle = {
        attach: function (context, settings) {
            // Buscar los botones
            const showPhotosBtn = document.getElementById('showPhotos');
            const showVideosBtn = document.getElementById('showVideos');

            // Verificar que los elementos existen y no han sido procesados
            if (showPhotosBtn && !showPhotosBtn.hasAttribute('data-filmstrip-processed')) {

                // Marcar como procesados para evitar duplicados
                showPhotosBtn.setAttribute('data-filmstrip-processed', 'true');
                showVideosBtn.setAttribute('data-filmstrip-processed', 'true');

                // Event listener para mostrar fotografías
                showPhotosBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    const items = document.querySelectorAll('.filmstrip__item');
                    items.forEach(item => {
                        item.classList.add('show-photo');
                        item.classList.remove('show-video');
                    });
                    showVideosBtn.classList.add('inactive');
                    showPhotosBtn.classList.remove('inactive');
                });

                // Event listener para mostrar vídeos
                showVideosBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    const items = document.querySelectorAll('.filmstrip__item');
                    items.forEach(item => {
                        item.classList.add('show-video');
                        item.classList.remove('show-photo');
                    });
                    showPhotosBtn.classList.add('inactive');
                    showVideosBtn.classList.remove('inactive');
                });
            }
        }
    };

})(Drupal);
