<div class="sets">
    <div class="sets__container container">
        <h2 class="sets__title">{{ $title }}</h2>

        <div class="sets__slider">
            <div class="sets-items swiper">

                <div class="swiper-wrapper">
                    @php
                        $posts = get_posts(array(
                            'numberposts' => 5,
                            'category'    => 0,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'post_type'   => 'products',
                            'suppress_filters' => true,
                        ));
                    @endphp

                    @foreach($posts as $post)
                        @include('components/catalog-item', [
                            'title' => $post->post_title,
                            'text' => get_field("text", $post->ID),
                            'price' => get_field("price", $post->ID),
                            'price_opt' => get_field("opt_price", $post->ID),
                            'link' => '/products/'.$post->post_name,
                            'image' => get_template_directory_uri().'/assets/images/catalog/img1.jpg',
                            'image_hover' => get_template_directory_uri().'/assets/images/catalog/img2.jpg',
                            'exlusive' => get_field("exlusive", $post->ID),
                            'ended' => get_field("ended", $post->ID),
                            'going' => get_field("going", $post->ID),
                        ])
                    @endforeach
                </div>
            </div>

            <div class="sets__prev swiper-button-prev">
                <span class="icon-arrow-left"></span>
            </div>
            <div class="sets__next swiper-button-next">
                <span class="icon-arrow-right"></span>
            </div>
        </div>

        <div class="sets__btns">
            <a href="/catalog" class="btn btn--main">Перейти в каталог <span class="btn__icon icon-long-arrow"></span></a>
        </div>
    </div>
</div>