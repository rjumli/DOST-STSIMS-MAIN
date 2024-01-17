<template>
    <div class="p-4 d-flex flex-column h-100" style="overflow: auto;">
        <h6 class="fs-11 text-muted text-uppercase mb-3 mt-0">{{year}} QUALIFIERS</h6>
        <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
                <i class="ri-database-2-line fs-17"></i>
            </div>
            <div class="flex-grow-1 ms-3 overflow-hidden">
                <div class="progress mb-2 progress-sm">
                    <div class="progress-bar bg-success" role="progressbar" style="" aria-valuenow="Infinity" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="text-muted fs-12 d-block text-truncate"><b>{{ongoing}}</b> out of <b>{{total}}</b> qualifiers are enrolled.</span>
            </div>
        </div>

        <hr class="text-muted"/>
        <div class="table-responsive">
            <table class="table table-borderless table-sm table-centered align-middle table-nowrap">
                <tbody class="border-0">
                    <tr v-for="(count,index) in statistics" v-bind:key="index">
                        <td>
                            <h4 class="text-truncate fs-13 fs-medium mb-0">
                                <i class="ri-stop-fill align-middle fs-18 me-2" :class="colors[index]"></i>{{options[index]}}
                            </h4>
                        </td>
                        <td class="text-end">
                            <p class="fw-bold fs-12 mb-0" :class="colors[index]">{{count}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr class="text-muted mt-n1"/>
        <div class="mt-auto">
            <b-row class="g-1">
                <b-col lg="4">
                    <button @click="openImport()" class="btn btn-soft-primary btn-sm w-100" type="button">
                        <div class="btn-content"> Import </div>
                    </button>
                </b-col>
                <b-col lg="4">
                    <button @click="openTruncate()" class="btn btn-soft-primary btn-sm w-100" type="button">
                        <div class="btn-content"> Truncate </div>
                    </button>
                </b-col>
                <b-col lg="4">
                    <button @click="openDownload()" class="btn btn-primary btn-sm w-100" type="button">
                        <div class="btn-content"> Download </div>
                    </button>
                </b-col>
            </b-row>
        </div>
    </div>
    <Import ref="import" @info="refresh()"/>
    <Truncate ref="truncate" @info="refresh()"/>
    <Download ref="download" @info="refresh()"/>
</template>
<script>
import Download from './Modals/Download.vue';
import Import from './Modals/Import.vue';
import Truncate from './Modals/Truncate.vue';
export default {
    props: ['total','ongoing','year','endorsed','statistics'],
    components: { Import, Truncate, Download },
    data(){
        return {
            options: ['Enrolled Qualifiers','Deferment','Not Availing'],
            options2: ['Undegraduate Scholarhip','Junior Level Science Scholarship'],
            colors: ['text-primary','text-info','text-success'],
        }
    },
    methods: {
        openImport(){
            this.$refs.import.show();
        },
        openTruncate(){
            this.$refs.truncate.show();
        },
          openDownload(){
            this.$refs.download.show();
        },
        refresh(){
            this.$emit('info',true);
        }
    }
}
</script>