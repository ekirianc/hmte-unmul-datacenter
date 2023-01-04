<script setup>
import { useSlots, ref , provide} from 'vue'

const slots = useSlots()
const tabTitles = ref(slots.default().map(tab => tab.props.title))
const selectedTitle = ref(tabTitles.value[0])

provide('selectedTitle', selectedTitle)
</script>

<template>
    <div class="tabs ">

        <ul class="tabs__header text-sm bg-white" :class="{'top-0': !showNavbar}">

            <li
                v-for="title in tabTitles"
                :key="title"
                class="tabs__item "
                :class="{ selected: selectedTitle === title}"
                @click="selectedTitle = title"
            >
                {{ title }}
            </li>

        </ul>

        <slot />
    </div>
</template>

<script>
export default {
    data(){
        return{
            // Show/Hide
            showNavbar: true,
            lastScrollPosition: 0
        }
    },
    methods: {

        // Show/Hide
        onScrollTabs () {
            // Get the current scroll position
            const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop
            // Because of momentum scrolling on mobiles, we shouldn't continue if it is less than zero
            if (currentScrollPosition < 0) {
                return
            }
            // Stop executing this function if the difference between
            // current scroll position and last scroll position is less than some offset
            if (Math.abs(currentScrollPosition - this.lastScrollPosition) < 60) {
                return
            }
            // Here we determine whether we need to show or hide the navbar
            this.showNavbar = currentScrollPosition < this.lastScrollPosition
            // Set the current scroll position as the last scroll position
            this.lastScrollPosition = currentScrollPosition
        }
    },

    // Show/Hide
    mounted () {
        window.addEventListener('scroll', this.onScrollTabs)
    },
    beforeDestroy () {
        window.removeEventListener('scroll', this.onScrollTabs)
    },

}
</script>

<style>
.tabs {
    max-width: 100vw;
    margin: 0 auto;
}

.tabs__header {
    list-style: none;
    margin: -1px 0 0 0;
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #D3D3D3;
    position: fixed;
    width: 100%;
    z-index: 10;

}

.tabs__item {
    flex: 1;
    transition: all .2s ease-in-out;
    padding: 12px 0;
    text-align: center;
    cursor: pointer;
    user-select: none;

}
.tabs__item.selected{
    position: relative;
    color: #1169e9;
    font-weight: bold;

}
.tabs__item.selected:before {
    /*background-color: #bfbfbf;*/
    height: 4px;
    width: 80%;
    position: absolute;
    content: "";
    bottom:0;
    transform: translateX(50%);
    right: 50%;
    background-color: #1169e9;
    z-index: 100;
    border-radius: 10px 10px 0 0;
}

.tabs__content {
    /*background-color: #bfbfbf;*/
    min-height: 300px;
    padding: 2.8rem 0;
}
</style>
