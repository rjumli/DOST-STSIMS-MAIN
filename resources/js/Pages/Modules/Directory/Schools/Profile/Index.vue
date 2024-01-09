<template>
    <Head :title="school.data.name" />
    <Header :school="school"/>
    <b-row>
        <Sidebar :id="school.data.id"/>
        <Body :school="school" :main="main" :regions="regions.data" :dropdowns="dropdowns.data"/>
    </b-row>
</template>
<script>
import Header from './Header.vue';
import Sidebar from './Sidebar.vue';
import Body from './Body.vue';
export default {
    components: { Header, Sidebar, Body },
    props: ['school','main','dropdowns','regions'],
}
</script>