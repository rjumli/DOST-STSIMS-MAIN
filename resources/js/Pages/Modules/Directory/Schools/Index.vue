<template>
    <Head title="Schools" />
    <PageHeader :title="title" :items="items" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-sidebar">
            <Sidebar/>
        </div>
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">
            <Lists :dropdowns="dropdowns.data"/>
        </div>
    </div>
</template>
<script>
import Lists from './Lists.vue';
import Sidebar from './Sidebar.vue';
import PageHeader from "@/Shared/Components/PageHeader.vue";
export default {
    props: ['dropdowns'],
    components : { PageHeader, Lists, Sidebar },
    data() {
        return {
            currentUrl: window.location.origin,
            title: "List of Schools",
            items: [{text: "School",href: "/"},{text: "Lists",active: true}],
        };
    },
}
</script>