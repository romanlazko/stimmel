@props(['images', 'altPrefix' => 'Image'])

<div class="relative overflow-hidden h-64" x-data="{ currentImage: 0 }">
    <template x-for="(image, index) in {{json_encode($images)}}" :key="index">
        <img :src="image" :alt="'{{ $altPrefix }} - ' + (index + 1)"
             class="w-full h-full object-cover transition-opacity duration-500"
             :class="currentImage === index ? 'opacity-100' : 'opacity-0 absolute inset-0'" />
    </template>

    <!-- Navigation arrows -->
    <button @click="currentImage = (currentImage - 1 + {{ count($images) }}) % {{ count($images) }}"
            class="z-50 absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 rounded-full w-8 h-8 flex items-center justify-center shadow-lg transition-all duration-300"
            aria-label="Předchozí obrázek"
    >
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>
    <button @click="currentImage = (currentImage + 1) % {{ count($images) }}"
            class="z-50 absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 rounded-full w-8 h-8 flex items-center justify-center shadow-lg transition-all duration-300"
            aria-label="Následující obrázek"
    >
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <!-- Image indicators -->
    <div class="z-50 absolute bottom-2 left-1/2 -translate-x-1/2 flex gap-1 transition-opacity duration-300">
        <template x-for="(_, index) in {{ count($images) }}" :key="index">
            <button @click="currentImage = index"
                    class="w-2 h-2 rounded-full transition-all duration-300"
                    :class="currentImage === index ? 'bg-white w-6' : 'bg-white/50'"
                    aria-label="Obrázek "
            ></button>
        </template>
    </div>

    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
</div>
