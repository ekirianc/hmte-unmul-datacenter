<template>
    <div style="margin-top: 6rem">
        <div class="mb-3 ml-3">
            <inertia-link href="/dev/create" class="btn btn-md btn-primary">TAMBAH DATA</inertia-link>
        </div>

        <h2 class="ml-3">
            <span v-if="matkulGroupBy.name === ''">Group by: None</span>
            <span v-else>Group by: {{ matkulGroupBy.name }}</span>
        </h2>
        <ul class="d-flex gap-2 p-3" style="min-width: 200px">
            <li class="btn btn-primary" @click="groupChange('')">none</li>
            <li class="btn btn-primary" @click="groupChange('day')">Day</li>
            <li class="btn btn-primary" @click="groupChange('semester')">Semester</li>
        </ul>
        <!-- https://forum.vuejs.org/t/group-array-using-computed-property/38355/3 -->

        <div v-for="(days, index) in matkulGrouped.value">
            <h2 v-if="index !== 'undefined'" class="text-black px-4">{{index}}</h2>
            <div class="card" style="background-color: #e5e7eb">
                <div class="card-body">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th>edit</th>
                                <th>day</th>
                                <th>nama mata kuliah</th>
                                <th>ruang</th>
                                <th>dosen 1</th>
                                <th>dosen 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="matkul in days">
                                <td>{{ matkul.id }}</td>
                                <td>
                                    <inertia-link :href="`/dev/${matkul.id}/edit`">
                                        <button class="btn btn-secondary">Edit</button>
                                    </inertia-link>
                                    <button @click.prevent="deleteMatkul(`${matkul.id}`)" class="btn btn-danger">Delete</button>
                                </td>
                                <td>{{ matkul.day }}</td>
                                <td>
                                    <inertia-link :href="`/dev/${matkul.id}`">
                                        {{ matkul.name }}
                                    </inertia-link>
                                </td>
                                <td>{{ matkul.ruang }}</td>
                                <td>{{ matkul.waktu_mulai }}</td>
                                <td>{{ matkul.waktu_selesai }}</td>
                                <td v-for="dosen in matkul.dosen">{{ dosen.name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
//import layout
import { reactive } from 'vue'
import LayoutApp from '../../Layouts/TestApp.vue'

import { Link } from '@inertiajs/inertia-vue3';
import {Inertia} from "@inertiajs/inertia";

// function groupBy(array, key) {
//     const result = {}
//     array.forEach(item => {
//         if (!result[item[key]]) {
//             result[item[key]] = []
//         }
//         result[item[key]].push(item)
//     })
//     return result
// }

export default {

    //layout
    layout: LayoutApp,

    //register Link di component
    components: {
        Link
    },

    //props
    props: {
        matkuls: Array, // <- nama props yang dibuat di controller saat parsing data
        errors: Object
    },

    //define Composition Api
    setup(props) {
        const title = 'Dashboard asas'

        function groupBy(array, key) {
            const result = {}
            array.forEach(item => {
                if (!result[item[key]]) {
                    result[item[key]] = []
                }
                result[item[key]].push(item)
            })
            return result
        }

        const matkulGroupBy = reactive({
            name: ''
        })
        const matkulGrouped = reactive({
            value: groupBy(props.matkuls, "")
        })

        function groupChange(selectedGroup) {
            matkulGrouped.value = groupBy(props.matkuls, selectedGroup)
            matkulGroupBy.name = selectedGroup
            console.log(matkulGrouped)
            return matkulGrouped
        }

        //method deletePost
        function deleteMatkul(id) {
            Inertia.delete(`/dev/${id}`)
        }

        return {
            deleteMatkul, title, matkulGroupBy, matkulGrouped, groupChange
        }
    }
}
</script>

<style>
    @import "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css";
</style>
