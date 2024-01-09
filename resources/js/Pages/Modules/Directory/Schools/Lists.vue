<template>
    <b-row class="g-2 mb-2 mt-n2">
        <b-col lg>
            <div class="input-group mb-1">
                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                <input type="text" v-model="keyword" placeholder="Search School" class="form-control" style="width: 35%;">
                 <Multiselect class="form-control" @select="fetch()"
                 placeholder="Select Status"
                v-model="status" :close-on-select="true" 
                :searchable="false" :options="['All','Active','Inactive']" />
                <span @click="refresh" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                    <i class="bx bx-refresh search-icon"></i>
                </span>
                <b-button type="button" variant="primary" @click="openCreate">
                    <i class="ri-add-circle-fill align-bottom me-1"></i> Create
                </b-button>
            </div>
        </b-col>
    </b-row>
    <div class="table-responsive">
        <table class="table table-nowrap align-middle mb-0">
            <thead class="table-light">
                <tr class="fs-11">
                    <th></th>
                    <th style="width: 45%;">Name</th>
                    <th style="width: 15%;" class="text-center">Campus</th>
                    <th style="width: 15%;" class="text-center">Class</th>
                    <th style="width: 15%;" class="text-center">Status</th>
                    <th style="width: 10%;"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(list,index) in lists" v-bind:key="index" :class="[(list.is_active == 0) ? 'table-warnings' : '']">
                    <td>
                        <div class="avatar-xs chat-user-img online">
                            <span v-if="list.avatar == 'school.jpg'" :class="'avatar-title rounded-circle bg-primary text-white'">{{list.name[0]}}</span>
                            <img v-else :src="currentUrl+'/images/avatars/'+list.avatar" alt="" class="avatar-xs rounded-circle">
                            <span v-if="list.is_active" class="user-status text-success"></span>
                        </div>
                    </td>
                    <td>
                        <h5 class="fs-13 mb-0 text-dark">{{list.name}}</h5>
                        <p class="fs-12 text-muted mb-0">{{list.shortcut}}</p>
                    </td>
                    <td class="text-center">{{list.campuses.length}} {{(list.campuses.length > 1) ? 'campuses' : 'campus'}}</td>
                    <td class="text-center">{{list.class.name}}</td>
                    <td class="text-center">
                        <span v-if="list.is_active" class="badge bg-success">Active</span>
                        <span v-else class="badge bg-danger">Inactive</span>
                    </td>
                    <td class="text-end">
                        <b-button @click="edit(list,index)" variant="soft-primary" v-b-tooltip.hover title="Edit" size="sm" class="edit-list me-1">
                            <i class="ri-pencil-fill align-bottom"></i>
                        </b-button>
                        <Link :href="`/directory/schools/${list.code}`"><b-button variant="soft-info" v-b-tooltip.hover title="View" size="sm" class="edit-list"><i class="ri-eye-fill align-bottom"></i> </b-button></Link>
                    </td>
                </tr>
            </tbody>
        </table>
        <Pagination class="ms-2 me-2" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
    </div>
    <Create :classes="classes" ref="create"/>
</template>
<script>
import Create from './Modals/Create.vue';
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    props: ['dropdowns'],
    components: { Pagination, Create, Multiselect },
    data() {
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            keyword: null,
            status: 'All',
            index: ''
        };
    },
    created(){
        this.fetch();
    },
    methods: {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url){
            page_url = page_url || '/directory/schools';
            axios.get(page_url,{
                params : {
                    keyword : this.keyword,
                    counts: ((window.innerHeight-350)/56),
                    option: 'lists'
                }
            })
            .then(response => {
                if(response){
                    this.lists = response.data.data;
                    this.meta = response.data.meta;
                    this.links = response.data.links;          
                }
            })
            .catch(err => console.log(err));
        },
        openCreate(){
            this.type = 'create';
            this.$refs.create.show();
        },
        openUpdate(data,index){
            this.type = 'edit';
            this.index = index;
            this.$refs.update.show(data);
        },
    },
    watch: {
        data: {
            deep: true,
            handler(val = null) {
                if(val != null && val !== ''){
                    switch(this.type){
                        case 'create':
                            this.fetch();
                        break;
                        case 'edit':
                            this.lists[this.index] = val.data;
                        break;
                    }
                }
            },
        },
        keyword(newVal){
            this.checkSearchStr(newVal)
        },
    },
    computed: {
        data() {
            return this.$page.props.flash.data;
        },
        classes : function() {
            return this.dropdowns.filter(x => x.classification === "Class");
        },
    }
}
</script>