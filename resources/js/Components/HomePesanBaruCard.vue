<script setup>
const props = defineProps({
    matkul: String
})
</script>

<template>
    <!--notifikasi-->
    <a href="#" class="flex shadow-md bg-white px-5 py-4 rounded-2xl mt-3">
        <span class="ic-message-notif text-primary text-xl mr-3"></span>
        <p>
            Pesan Baru untuk matkul <b>{{ matkul }}</b>
        </p>
    </a>
</template>
