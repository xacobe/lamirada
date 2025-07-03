(function (Drupal) {
    'use strict';

    Drupal.behaviors.filmstripToggle = {
        attach: function (context, settings) {
            const showPhotosBtn = document.getElementById('showPhotos');
            const showVideosBtn = document.getElementById('showVideos');
            const filmStrip = document.querySelector('.filmstrip');

            if (
                showPhotosBtn &&
                showVideosBtn &&
                !showPhotosBtn.hasAttribute('data-filmstrip-processed')
            ) {
                showPhotosBtn.setAttribute('data-filmstrip-processed', 'true');
                showVideosBtn.setAttribute('data-filmstrip-processed', 'true');

                let currentMode = null;

                function toggleFilmstrip(mode) {
                    const items = document.querySelectorAll('.filmstrip__item');

                    items.forEach((item, index) => {
                        // Limpiamos las clases previas
                        item.classList.remove('show-photo', 'show-video');

                        // Aplicamos el cambio con retardo en cascada
                        setTimeout(() => {
                            // Cambiamos la clase según el modo
                            item.classList.add(mode === 'photo' ? 'show-photo' : 'show-video');

                            // Añadimos el efecto flash
                            item.classList.add('flash');
                            // Lo quitamos tras terminar la animación para permitir reutilizarlo
                            setTimeout(() => item.classList.remove('flash'), 300);
                        }, index * 150); // 150ms de diferencia entre items
                    });

                    // Botones animados
                    if (mode === 'photo') {
                        showPhotosBtn.classList.remove('inactive');
                        showVideosBtn.classList.add('inactive');
                        showPhotosBtn.classList.add('active');
                        showVideosBtn.classList.remove('active');
                        filmStrip.classList.add('photo');
                        filmStrip.classList.remove('video');
                    } else {
                        showPhotosBtn.classList.add('inactive');
                        showVideosBtn.classList.remove('inactive');
                        showPhotosBtn.classList.remove('active');
                        showVideosBtn.classList.add('active');
                        filmStrip.classList.add('video');
                        filmStrip.classList.remove('photo');
                    }

                    currentMode = mode;
                }


                // Clic en "Fotografías"
                showPhotosBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    toggleFilmstrip('photo');
                });

                // Clic en "Vídeos"
                showVideosBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    toggleFilmstrip('video');
                });

                // Clic fuera de la filmstrip: cerrar animando
                document.addEventListener('click', function (e) {
                    const clickedInsideFilmstrip = e.target.closest('.filmstrip');
                    const clickedOnMenuBtn = e.target.closest('#showPhotos, #showVideos');

                    if (!clickedInsideFilmstrip && !clickedOnMenuBtn && currentMode) {
                        // Restaurar estado inicial: ambos botones visibles
                        showPhotosBtn.classList.remove('inactive');
                        showVideosBtn.classList.remove('inactive');
                        showPhotosBtn.classList.remove('active');
                        showVideosBtn.classList.remove('active');
                        filmStrip.classList.remove('photo');
                        filmStrip.classList.remove('video');

                        currentMode = null;

                        // Limpiar las clases de los ítems también
                        document.querySelectorAll('.filmstrip__item').forEach((item) => {
                            item.classList.remove('show-photo', 'show-video');
                        });
                    }
                });
            }
        }
    };
})(Drupal);
