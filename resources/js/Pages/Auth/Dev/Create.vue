<template>

    <div>
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h4>TAMBAH POST</h4>
                <hr>
                <form @submit.prevent="storePost">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" v-model="matkul.name" placeholder="Masukkan Title Post">
                        <div v-if="errors.title" class="mt-2 alert alert-danger">
                            {{ errors.title }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sks</label>
                        <input type="number" class="form-control" v-model="matkul.sks" placeholder="Masukkan Title Post">
                        <div v-if="errors.sks" class="mt-2 alert alert-danger">
                            {{ errors.sks }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">slug</label>
                        <input type="text" class="form-control" v-model="matkul.slug" placeholder="Masukkan Title Post">
                        <div v-if="errors.slug" class="mt-2 alert alert-danger">
                            {{ errors.slug }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">semester</label>
                        <input type="number" class="form-control" v-model="matkul.semester" placeholder="Masukkan Title Post">
                        <div v-if="errors.semester" class="mt-2 alert alert-danger">
                            {{ errors.semester }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">sub</label>
                        <input type="number" class="form-control" v-model="matkul.sub" placeholder="Masukkan Title Post">
                        <div v-if="errors.sub" class="mt-2 alert alert-danger">
                            {{ errors.sub }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">is praktikum</label>
                        <input type="text" class="form-control" v-model="matkul.is_praktikum" placeholder="Masukkan Title Post">
                        <div v-if="errors.is_praktikum" class="mt-2 alert alert-danger">
                            {{ errors.is_praktikum }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ruang</label>
                        <input type="text" class="form-control" v-model="matkul.ruang" placeholder="Masukkan Title Post">
                        <div v-if="errors.ruang" class="mt-2 alert alert-danger">
                            {{ errors.ruang }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">day</label>
                        <input type="text" class="form-control" v-model="matkul.day" placeholder="Masukkan Title Post">
                        <div v-if="errors.day" class="mt-2 alert alert-danger">
                            {{ errors.day }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">waktu_mulai</label>
                        <input type="text" class="form-control" v-model="matkul.waktu_mulai" placeholder="Masukkan Title Post">
                        <div v-if="errors.waktu_mulai" class="mt-2 alert alert-danger">
                            {{ errors.waktu_mulai }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">waktu_selesai</label>
                        <input type="text" class="form-control" v-model="matkul.waktu_selesai" placeholder="Masukkan Title Post">
                        <div v-if="errors.waktu_selesai" class="mt-2 alert alert-danger">
                            {{ errors.waktu_selesai }}
                        </div>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-md shadow-sm me-2">SIMPAN</button>
                        <button type="reset" class="btn btn-warning btn-md shadow-sm">RESET</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>

<script>
//import layout
import LayoutApp from '../../Layouts/TestApp.vue'

import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

export default {

    //layout
    layout: LayoutApp,

    //props
    props: {
        errors: Object
    },

    //define Composition Api
    setup() {

        //state posts
        const matkul = reactive({
            name: '',
            slug: '',
            sks: '',
            semester: '',
            sub: '',
            is_praktikum: '',
            ruang: '',
            day: '',
            waktu_mulai: '',
            waktu_selesai: '',
        })

        //function storePost
        function storePost() {
            //define variable
            let name = matkul.name
            let slug = matkul.slug
            let sks = matkul.sks
            let semester = matkul.semester
            let sub = matkul.sub
            let is_praktikum = matkul.is_praktikum
            let ruang = matkul.ruang
            let day = matkul.day
            let waktu_mulai = matkul.waktu_mulai
            let waktu_selesai = matkul.waktu_selesai

            //send data
            Inertia.post('/dev/', {
                name : name,
                slug : slug,
                sks : sks,
                semester : semester,
                sub : sub,
                is_praktikum : is_praktikum,
                ruang : ruang,
                day : day,
                waktu_mulai : waktu_mulai,
                waktu_selesai : waktu_selesai,
            })

        }

        return {
            matkul,
            storePost
        }

    }
}
</script>
