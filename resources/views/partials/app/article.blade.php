<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-offset-2 is-8">
                <div class="box">
                    <img class="bra_logo_article" src="{{ asset( '/storage/images'.$object->thumb) }}" alt="{{ $object->title }}">
                    <div class="content">{!! $object->content !!}</div>
                    <div class="content">
                        <b><em>{{ __('admin.fields.article.file') }}: </em></b>
                        <b><a href="{{ $object->download }}" title="Скачать кроссы {{$object->title}}">Скачать кроссы {{$object->title}}</a></b>
                    </div>
                </div>
                @include('partials.app.breadcrumbs')
            </div>
        </div>
    </div>
</section>
