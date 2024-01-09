<template>
    <div class="p-4 d-flex flex-column h-100" style="overflow: auto;">
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
                    <button @click="openSync(1)" class="btn btn-primary btn-sm w-100" type="button">
                        <div class="btn-content"> Sync ({{sync_no}})</div>
                    </button>
                </b-col>
            </b-row>
        </div>
    </div>
    <Import ref="import" @info="refresh()"/>
    <Truncate ref="truncate" @info="refresh()"/>
</template>
<script>
import Import from './Modals/Import.vue';
import Truncate from './Modals/Truncate.vue';
export default {
    components: { Import, Truncate },
    data(){
        return {
            options: ['Ongoing Scholars','Graduated Scholars','Total Scholars'],
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
        refresh(){
            this.$emit('info',true);
        }
    }
}
</script>