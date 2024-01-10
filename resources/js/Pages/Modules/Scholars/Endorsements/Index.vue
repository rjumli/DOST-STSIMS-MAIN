<template>
    <Head title="Endorsements"/>
    <PageHeader :title="title" :items="items" />
     <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-sidebar">
            <Sidebar/>
        </div>
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">
            <Lists :dropdowns="dropdowns" :statuses="statuses.data" :program_list="program_list" :subprogram_list="subprogram_list" :regions="regions.data" ref="lists"/>
        </div>
    </div>
</template>
<script>
import Lists from './Lists.vue';
import Sidebar from './Sidebar.vue';
import PageHeader from "@/Shared/Components/PageHeader.vue";
export default {
    props: ['dropdowns','programs','regions','statuses'],
    components : { PageHeader, Sidebar, Lists },
    data() {
        return {
            currentUrl: window.location.origin,
            title: "List of Endorsements",
            items: [{text: "Endorsement",href: "/"},{text: "Lists",active: true}],
        };
    },
    computed: {
        program_list : function() {
            return this.programs.data.filter(x => x.is_sub === 1).filter(x => x.is_active === 1);
        },
        subprogram_list : function() {
            return this.programs.data; 
        },
        status_list : function() {
            return this.statuses.filter(x => x.type != 'Benefit Status');
        }
    },
    methods : {
        update(){
            this.$refs.lists.fetch();
        },
        sync(){
            this.$refs.sync.updateSync();
        },
        updateSync(data){
            this.$refs.sync.updateUnsync(data);
        }
    }
}
</script>