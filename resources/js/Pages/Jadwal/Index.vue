
<template>
    <TabsWrapper>
        <TabItem title="Kuliah" >
            <Kuliah/>

        </TabItem>
        <TabItem title="Seminar" >
            <div class="text-center">Ini jadwal Kuliah</div>
        </TabItem>
        <TabItem title="Organisasi" >
            <div class="text-center">Ini jadwal Kuliah</div>
        </TabItem>

    </TabsWrapper>




</template>

<script>
import Layout from '../../Layouts/App.vue'
// Tabs
import Wrapper from '../../Components/Tabs/Wrapper.vue'
import Item from '../../Components/Tabs/Item.vue'
// Section
import Kuliah from "@/Pages/Jadwal/Kuliah.vue";

export default {
    layout: Layout,
    components:{
        TabsWrapper: Wrapper,
        TabItem: Item,
        Kuliah
    },

}
</script>



