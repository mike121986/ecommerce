<div wire:init="loadPosts">
    @if (count($products))

        {{-- @foreach ($products as $product)
    <?php/*  dd(Storage::url($product->images->first()->url)); */ ?> ?> ?>
        
    @endforeach
    <?php/*  die();  */?> ?> ?> --}}
        <div class="glider-contain">
            <ul class="glider-{{ $category->id }}">

                @foreach ($products as $product)

                    <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'sm:mr-4' }}">
                        <article>
                            {{-- <figure>                              
                                <img class="h-48 w-full object-cover object-center" src="{{ Storage::url($product->images->first()->url) }}" alt="">
                            </figure> --}}
                            @if ($product->images->count())
                                <figure>
                                    <img class="h-48 w-full object-cover object-center"
                                        src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                </figure>
                            @else
                                <figure>
                                    <img class="h-48 w-full object-cover object-center"
                                        src="data:image/jpeg;base64,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"
                                        alt="">
                                </figure>
                            @endif

                            <div class="py-4 px-6">
                                <h1 class="text-lg font-semibold">
                                    <a href="{{ route('products.show', $product) }}">
                                        {{ Str::limit($product->name, 20) }}
                                    </a>
                                </h1>

                                <p class="font-bold text-trueGray-700">US$ {{ $product->price }}</p>
                            </div>
                        </article>
                    </li>

                @endforeach

            </ul>

            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
        </div>

    @else

        <div class="mb-4 h-48 flex justify-center items-center bg-white shadow-xl border border-gray-100 rounded-lg">
            <div class="rounded animate-spin ease duration-300 w-10 h-10 border-2 border-indigo-500"></div>
        </div>

    @endif
</div>
