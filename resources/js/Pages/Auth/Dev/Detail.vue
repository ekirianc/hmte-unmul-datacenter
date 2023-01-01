<template>
    <div class="p-8 bg-gray-100">
        <table class="table  ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                </tr>
            </thead>
            <tbody >
                <tr>
                    <td>{{matkul.id}}</td>
                    <td>{{matkul.name}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
//import layout
import LayoutApp from '../../Layouts/TestApp.vue'

export default {
    name: "Detail",

    //layout
    layout: LayoutApp,

    props: {
        matkul: Array
    },
}
</script>

<style scoped>

</style>
