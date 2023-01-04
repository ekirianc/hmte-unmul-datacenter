
<template>
<!--    <div class="px-4 text-gray-600 flex justify-between text-sm">-->
<!--        <span>Minggu #2</span>-->
<!--        <span>Semester Ganjil 2023</span>-->
<!--    </div>-->
    <!--https://redpixelthemes.com/blog/tailwindcss-hide-scrollbar/ -->
    <div class="w-full overflow-x-auto scrollbar-hide">
        <div class="p-4 flex gap-2 whitespace-nowrap after:content-['.'] after:opacity-0">
            <button @click="openSemesterSelect" class="bg-white border py-1 px-5 p rounded-full text-sm">
                Semester 4 <span class="ic-arrow-bottom ml-2 "></span>
            </button>
            <button @click="toggle()" class="bg-white border py-1 px-5 rounded-full text-sm">
                {{ view ? 'Card':'List' }} <span class="ic-category ml-2 "></span>
            </button>
            <button @click="open" class="bg-white border py-1 px-5  rounded-full text-sm">
                Pilih Mata Kuliah
            </button>
        </div>
    </div>

    <!-- https://github.com/Splidejs/vue-splide/blob/master/examples/src/components/ThumbnailsExample.vue -->
    <!-- Day -->
    <Splide
        class="mb-4 text-[#868686] day"
        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the main carousel"
        :options="thumbsOptions"
        ref="thumbs"
    >
            <SplideSlide v-for="slide in slides" :key="slide.day"
                         class="bg-[#e3e7f1] text-center font-semibold rounded-full">
                <!--<img :src="slide.src" :alt="slide.alt">-->
                {{slide.day}}
            </SplideSlide>
    </Splide>

    <!-- Matkul -->
    <Splide
        aria-labelledby="thumbnail-example-heading"
        :options="mainOptions"
        ref="main"
    >
        <SplideSlide v-for="slide in slides" :key="slide.day"
                     class="px-4 min-h-[30rem] ">
<!--            <img :src="slide.src" :alt="slide.alt">-->
            <template v-for="matkul in 3">
                <a href="#" class="flex justify-between px-4 py-5 shadow-card rounded-2xl bg-white mb-3">
                    <div>
                        <span class="font-medium truncate font-outfit text-xl">Sistem Instrumentasi</span>
                        <div class="flex gap-2 mt-2">
                            <span class="border bg-primary/20 px-3 font-semibold text-sm rounded-md">C308</span>
                            <span class="border bg-stone-200/70 px-3 font-semibold text-sm rounded-md">09:20 - 11:00</span>
                        </div>
                        <div class="grid mt-3 gap-1 font-medium">
                        <span class="flex gap-2 items-center">
                            <span class="ic-profile-circle text-xl"></span> Nama Dosen
                        </span>
                            <span class="flex gap-2 items-center">
                            <span class="ic-profile-circle text-xl"></span> Nama Dosen
                        </span>
                        </div>
                    </div>
                    <div>
                        <span class="ic-more text-gray-700 text-xl mx-3 "></span>
                    </div>

                </a>
            </template>

        </SplideSlide>
    </Splide>



    <vue-bottom-sheet ref="semesterSelect">
        <ul class="last:mb-10">
            <li class="p-4 border-b active:bg-gray-100 transition"><a href="#">Semester 2</a></li>
            <li class="p-4 border-b active:bg-gray-100 transition"><a href="#">Semester 4</a></li>
            <li class="p-4 border-b active:bg-gray-100 transition"><a href="#">Semester 6</a></li>
        </ul>
        <p class="text-center text-gray-400 p-8">semester genap 2023</p>
    </vue-bottom-sheet>

</template>

<script lang="ts">
import { Splide, SplideSlide, Options } from '@splidejs/vue-splide';
import { defineComponent, onMounted, ref } from 'vue';

import { useToggle } from '@vueuse/core'


export default defineComponent( {
    name: 'ThumbnailsExample',
    components: {
        Splide,
        SplideSlide,
    },
    setup() {
        function generateSlides( length = 5): Array<{ day: string }> {
            return Array.from( { length } ).map( ( value, index ) => {
                const day = ['senin', 'selasa', 'rabu', 'kamis', 'jumat']
                return {
                    // src: `https://source.unsplash.com/random/800x450?sig=${ index }`,
                    day: day[index]
                };
            } );
        }

        const semesterSelect = ref(null)
        const openSemesterSelect = () => { semesterSelect.value.open() }
        const close = () => { semesterSelect.value.close() }

        const [view, toggle] = useToggle()

        const main   = ref<InstanceType<typeof Splide>>();
        const thumbs = ref<InstanceType<typeof Splide>>();
        const slides = generateSlides();

        const mainOptions: Options = {
            type      : 'slide',
            gap       : '1rem',
            pagination: false,
        };
        const thumbsOptions: Options = {
            type        : 'slide',
            gap         : '.5rem',
            pagination  : false,
            fixedWidth  : 80,
            fixedHeight : 30,
            isNavigation: true,
        };

        onMounted( () => {
            const thumbsSplide = thumbs.value?.splide;
            if ( thumbsSplide ) {
                main.value?.sync( thumbsSplide );
            }
        } );

        return {
            slides,
            main,
            thumbs,
            mainOptions,
            thumbsOptions,
            semesterSelect, openSemesterSelect, close, view, toggle

        }
    },
} );
</script>

<style>
.splide__arrow{
    display: none;
}
.splide__track--nav>.splide__list>.splide__slide.is-active{
    border: 3px solid transparent;
    background-color: #c8dbf8;
    color: #1169e9;
}
.day .splide__track{
    padding: 0 1rem !important;
}

.thumbnails {
    display: flex;
    margin: 1rem auto 0;
    padding: 0;
    justify-content: center;
}

.thumbnail {
    width: 70px;
    height: 70px;
    overflow: hidden;
    list-style: none;
    margin: 0 0.2rem;
    cursor: pointer;
    opacity: 0.3;
}

.thumbnail.is-active {
    opacity: 1;
}

.thumbnail img {
    width: 100%;
    height: auto;
}
</style>
