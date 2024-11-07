document.addEventListener('DOMContentLoaded', function () {
  var swiper = new Swiper('.swiper', {
    // Configurações básicas
    loop: true, // Faz o loop do carrossel, voltando ao início
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 5000, // Altera automaticamente a cada 3 segundos
      disableOnInteraction: false, // Continua o autoplay após interação do usuário
    },
    slidesPerView: 1, // Mostra um slide por vez
    spaceBetween: 10, // Espaçamento entre slides
  });
});
