<script setup>
import { ref } from "vue";
import { Head } from '@inertiajs/inertia-vue3'

// Others Components
import { VueBottomSheet } from "@webzlodimir/vue-bottom-sheet";
import  "@webzlodimir/vue-bottom-sheet/dist/style.css";
import '@splidejs/vue-splide/css';

// Components
import CountdownSection from "@/Components/HomeCountdownSection.vue";
import PesanBaru from "@/Components/HomePesanBaruCard.vue";

// bottom sheet
const semesterPick = ref(null)
const open = () => { semesterPick.value.open() }
const close = () => { semesterPick.value.close() }

const messagesNotif = ref([
    { matkul: 'Pengolahan CItra Digital' },
    // { matkul: 'Pemrograman Website' },
])


</script>
<template>
    <Head title="Home"/>

    <!--Dashboard Content-->
    <h2 class="text-primary">Home</h2>

    <!--Notification card-->
    <template v-if="messagesNotif.length !== 0">
        <PesanBaru v-for="notif in messagesNotif" :matkul="notif.matkul"/>
    </template>

    <!--Countdown Section-->
    <section class="relative -left-4 w-[calc(100%+2rem)] pt-2">
        <CountdownSection/>
    </section> <!--Countdown-->

    <!--Jadwal Kuliah Section-->
    <section class="mt-4 flex flex-col gap-3 mb-8">
        <header class="flex justify-between">
            <h3>Kuliah Hari Ini</h3>
            <button @click="open" class="bg-white border py-1 px-5 rounded-full text-sm">
                Semester 4 <span class="ic-arrow-bottom ml-2"></span>
            </button>
        </header>
        <!--Jadwal Card-->
        <a href="#" class="flex justify-between px-4 py-5 shadow-card rounded-2xl bg-white">
            <div>
                <span class="font-medium truncate font-outfit text-xl">Sistem Instrumentasi</span>
                <div class="flex gap-2 mt-2">
                    <span class="border bg-primary/20 px-3 font-semibold text-sm rounded-md">C308</span>
                    <span class="border bg-stone-200/70 px-3 font-semibold text-sm rounded-md">09:20 - 11:00</span>
                </div>
            </div>
            <div class="grid content-center">
                <span class="ic-message-notif text-primary text-xl mx-3 "></span>
            </div>
        </a>
        <!--Jadwal Card-->
        <a href="#" class="flex justify-between px-4 py-5 shadow-card rounded-2xl bg-white">
            <div>
                <span class="font-medium truncate font-outfit text-xl">Sistem Instrumentasi</span>
                <div class="flex gap-2 mt-2">
                    <span class="border bg-primary/20 px-3 font-semibold text-sm rounded-md">C308</span>
                    <span class="border bg-stone-200/70 px-3 font-semibold text-sm rounded-md">09:20 - 11:00</span>
                </div>
            </div>
            <div class="grid content-center">
                <span class="ic-more text-gray-700 text-xl mx-3 "></span>
            </div>
        </a>

    </section> <!--Jadwal Kuliah-->

    <!--Bottom Sheet (dropdown mobile) [jadwal section -> pilih semester]-->
    <!-- https://github.com/vaban-ru/vue-bottom-sheet -->
    <vue-bottom-sheet ref="semesterPick">
            <ul class="last:mb-10">
                <li class="p-4 border-b active:bg-gray-100 transition"><a href="#">Semester 2</a></li>
                <li class="p-4 border-b active:bg-gray-100 transition"><a href="#">Semester 4</a></li>
                <li class="p-4 border-b active:bg-gray-100 transition"><a href="#">Semester 6</a></li>
            </ul>
            <p class="text-center text-gray-400 p-8">semester genap 2023</p>
    </vue-bottom-sheet>


</template>

<script>
import MainLayout from '../Layouts/App.vue'

export default {
    layout: MainLayout,

    props: {
        errors: Object
    },
}

</script>
