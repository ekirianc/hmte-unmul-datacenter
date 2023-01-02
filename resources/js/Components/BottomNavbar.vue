
<template>
    <!-- Bottom Nav -->
    <div class="w-full h-20 absolute ">
        <section id="bottom-navigation" class="border-t fixed inset-x-0 bottom-0 z-10 bg-white border-t">
            <div id="tabs" class="flex justify-between ">
                <!--@DOC: https://inertiajs.com/links#active-states -->
                <InertiaLink href="/" :class="{ 'active': $page.component === 'Home' }"
                             class="w-full hover:text-primary justify-center inline-block text-center pb-1 pt-2">
                    <!--icon-->
                    <span class="ic-home-1 text-2xl rounded-full px-4 py-1"></span>
                    <span class="ic-home-fill hidden"></span> <!--on active-->
                    <!--label-->
                    <span class="tab tab-home hover:text-primary block text-xs ">Home {{nilai}}</span>
                </InertiaLink>
                <InertiaLink href="/jadwal" :class="{ 'active': $page.url.startsWith('/jadwal') }"
                             class="w-full hover:text-primary  justify-center inline-block text-center pb-1 pt-2">
                    <span class="ic-calendar-2 text-2xl "></span>
                    <span class="ic-calendar-fill hidden"></span> <!--on active-->
                    <!--label-->
                    <span class="tab tab-kategori block text-xs">Jadwal</span>
                </InertiaLink>
                <InertiaLink href="/perpus" :class="{ 'active': $page.url.startsWith('/perpus') }"
                             class="w-full hover:text-primary justify-center inline-block text-center pb-1 pt-2">
                    <span class="ic-book-1 text-2xl"></span>
                    <span class="ic-book-fill hidden "></span>

                    <span class="tab tab-explore block text-xs">Perpus</span>
                </InertiaLink>
                <InertiaLink href="/himpunan" :class="{ 'active': $page.url.startsWith('/himpunan') }"
                             class="w-full hover:text-primary justify-center inline-block text-center pb-1 pt-2">
                    <span class="ic-people text-2xl"></span>
                    <span class="ic-people-fill hidden"></span>

                    <span class="tab tab-whishlist block text-xs">Himpunan</span>
                </InertiaLink>
                <InertiaLink href="/lainnya" :class="{ 'active': $page.url.startsWith('/lainnya') }"
                             class="w-full hover:text-primary justify-center inline-block text-center pb-1 pt-2">
                    <span class="ic-menu text-2xl"></span>
                    <span class="ic-menu-fill hidden"></span>

                    <span class="tab tab-account block text-xs">Lainnya</span>
                </InertiaLink>
            </div>
        </section>
    </div>
</template>

