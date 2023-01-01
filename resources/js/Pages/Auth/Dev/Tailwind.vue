<script setup>
    import { useColorMode, useToggle } from "@vueuse/core";
    import { UseDark } from '@vueuse/components'

    const mode = useColorMode({
        emitAuto: true,
        modes: {
            // custom colors
            contrast: 'dark contrast',
            cafe: 'cafe',
        },
    })

    const [showDetail, toggleShowDetail] = useToggle()
</script>

<template>

    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul class="flex  -mb-px">
            <li class="mr-2 flex-auto">
                <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Profile</a>
            </li>
            <li class="mr-2 flex-auto">
                <a href="#" class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500" aria-current="page">Dashboard</a>
            </li>
            <li class="mr-2 flex-auto">
                <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Settings</a>
            </li>
        </ul>
    </div>

    <div class="font-mulish font-medium dark:text-gray-300">
        <div class="container p-5 mt-5 border border-gray-400 mx-auto">
            <p class="pb-4">
                Arga Hananto, SE.,M.Bus	198003102009121003
            </p>
            <div class="mb-4">
                <UseDark v-slot="{ isDark, toggleDark }">
                    <span>Dark mode: </span>
                    <button @click="toggleDark()"
                            class="px-4 py-2 mr-3 text-white bg-gray-800 dark:bg-purple-700">
                        <span>{{isDark? 'Turn off':'Turn on'}}</span>
                    </button>
                </UseDark>
            </div>

            <div class="dark:text-white mt-5 mb-5">
                <span>Theme: </span>
                <template v-for="modeSelect in theme">
                    <button @click="mode = `${modeSelect}`" class="px-4 py-2 text-white bg-gray-800 dark:bg-purple-700">{{ modeSelect }} mode</button>
                </template>
            </div>

            <div @click="toggleShowDetail()" class="card group w-80 h-44 mx-auto overflow-hidden rounded-lg bg-gray-700 hover:cursor-pointer hover:bg-gray-600 hover:transition-all">
                <div :class="{'-translate-y-full': showDetail}" class="p-5 bg-gray-700 h-full group-hover:bg-gray-600 hover:transition-all transition-all duration-500">
                    <div  class="card-header mb-2 font-bold text-xl group-hover:text-white group-hover:text-[1.1rem] hover:transition-all transition-all">
                        📷 Pengolahan Citra Digital
                    </div>
                    <div class="card-body text ">
                        <div class="group-hover:text-white mb-2 group-hover:text-[1.1rem] hover:transition-all transition-all">
                            <span class="mr-3 ">3C08</span>
                            <span>13:50 - 16:10</span>
                        </div>
                        <div class="-mx-3">
                            <ul >
                                <li class="py-0.5 px-3 hover:bg-gray-700 rounded-md"><a href="/public">Adi Zakaria Afiff, Prof., Dr. SE., MBA</a></li>
                                <li class="py-0.5 px-3 hover:bg-gray-700 rounded-md">Anna Amalyah Agus, SE.MBA</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>



</template>

<script>

export default {
    name: "Tailwind",
    data(){
        return{
            theme:{
                dark: 'dark',
                light: 'light',
                cafe: 'cafe',
                contrast: 'contrast',
            }
        }
    }
}

</script>

<style>
html.cafe {
    filter: sepia(0.9) hue-rotate(315deg) brightness(0.9);
}
html.contrast {
    filter: contrast(2);
}
</style>
