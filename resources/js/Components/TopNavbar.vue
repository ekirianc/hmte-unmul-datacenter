
<template>
    <!--top navbar-->
    <div class="bg-white px-4 sm:px-4 py-3 dark:bg-gray-900 w-full fixed z-10 transition "
         :class="{'shadow-md': scrolled}"
    >
        <div class="flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center">
                <img src="img/datacenter logo primary.svg" class="h-8 mr-2 sm:h-9" alt="Datacenter Logo" />
                <span class="self-center text-primary font-bold whitespace-nowrap dark:text-white">Datacenter</span>
            </a>
            <div class="flex items-center md:order-2 text-primary text-xl gap-5">
                <a href="#"><span class="ic-notification"></span></a>
                <a href="#"><span class="ic-search-normal"></span></a>
                <a href="/login" class="flex text-sm rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="/img/[R] White - Jade Orange.svg" alt="user photo">
                </a>
            </div>
        </div>
    </div>

    <div class="h-13 mb-4"/> <!--sesuai tinggi navbar-->
</template>

<script>
export default {
    name: "TopNavbar",
    data(){
        return{
            // Shadow
            scrolled: false,
            // Show/Hide
            showNavbar: true,
            lastScrollPosition: 0
        }
    },
    methods: {
        // Shadow
        handleScroll () {
            this.scrolled = window.scrollY > 0;
        },
        // Show/Hide
        // onScroll () {
        //     // Get the current scroll position
        //     const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop
        //     // Because of momentum scrolling on mobiles, we shouldn't continue if it is less than zero
        //     if (currentScrollPosition < 0) {
        //         return
        //     }
        //     // Stop executing this function if the difference between
        //     // current scroll position and last scroll position is less than some offset
        //     if (Math.abs(currentScrollPosition - this.lastScrollPosition) < 60) {
        //         return
        //     }
        //     // Here we determine whether we need to show or hide the navbar
        //     this.showNavbar = currentScrollPosition < this.lastScrollPosition
        //     // Set the current scroll position as the last scroll position
        //     this.lastScrollPosition = currentScrollPosition
        // }
    },
    //shadow
    created () {
        window.addEventListener('scroll', this.handleScroll);
    },
    destroyed () {
        window.removeEventListener('scroll', this.handleScroll);
    },

    // Show/Hide
    // mounted () {
    //     window.addEventListener('scroll', this.onScroll)
    // },
    // beforeDestroy () {
    //     window.removeEventListener('scroll', this.onScroll)
    // },

}
</script>

<style scoped>

</style>
