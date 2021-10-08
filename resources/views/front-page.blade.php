@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

  <!-- Slider main container -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>

  <section class="contact-form">
    <div class="container">
      <div class="contact-form__feather">
        <span class="icon-feather"></span>
      </div>
      <div class="contact-form__container cells">
        <div class="contact-form__cell cell">
          <h2 class="contact-form__title">Покупайте шубу из соболя только после знакомства с натуральной продукцией от
            компании Мастер Соболь. <span>Консультация бесплатна.</span></h2>

          <a href="#" class="contact-form__link">Нужна помощь? Свяжитесь с нами</a>
        </div>
        <div class="contact-form__cell cell">
          <form class="form">
            <label class="contact-form__field">
              <input type="text" placeholder="Имя *" required>
            </label>
            <label class="contact-form__field">
              <input type="tel" placeholder="Тел *" required>
            </label>

            <button type="submit" class="contact-form__btn btn btn--main">Отправить <span class="btn__icon icon-long-arrow"></span></button>

            <p class="contact-form__caption">Нажимая кнопку «Отправить», вы соглашаетесь предоставить вашу информацию компании «Мастер Соболь»,
              которая обязуется использовать ее в соответствии со своей политикой конфиденциальности.</p>
          </form>
        </div>
      </div>
    </div>
  </section>


  @endwhile
@endsection
