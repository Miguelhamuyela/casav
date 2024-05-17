<div class="wow fadeInUp mb-2" data-wow-delay=".1s">
    <div class="accordion">
        <a href="#" class="collapsed" data-bs-toggle="collapse"
            data-bs-target="#collapse{{ $item->id }}">
            <b class="text-dark">
                <span class="icon flex-shrink-0">
                    <i class="lni lni-chevron-right"></i>

                    @if ($item->country)
                        {{ $item->country }} -
                    @endif

                    {{ $item->name }}
                </span>
            </b>

        </a>
        <div id="collapse{{ $item->id }}" class="accordion-collapse collapse">
            <div class="ud-faq-body mt-2">
                @if ($item->link)

                    website: <a href="{{ $item->link }}"
                        target="_blank">{{ $item->link }}</a>
                @endif
                <p class="text-dark text-justify">{!! html_entity_decode($item->description) !!}</p>
            </div>
        </div>
    </div>
</div>