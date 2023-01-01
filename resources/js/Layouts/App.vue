<script setup>
import TopNavbar from "@/Components/TopNavbar.vue";
import BottomNavbar from "@/Components/BottomNavbar.vue";
import 'animate.css';

</script>

<template>
    <TopNavbar/>

    <!-- https://postsrc.com/code-snippets/how-to-add-page-transition-in-inertia-js -->
    <!-- https://vuejs.org/guide/built-ins/transition.html#css-based-transitions -->
    <Transition name="page" mode="out-in">
        <main class="px-4" :key="$page.url" >
            <slot />
        </main>
    </Transition>


    <BottomNavbar/>
</template>

<style>
.page-enter-active, .nested-leave-active {
    transition: all 0.2s ease-in-out;
}

.page-enter-from,
.page-leave-to {
    transform: translateY(20px);
    opacity: 0;
}
</style>
