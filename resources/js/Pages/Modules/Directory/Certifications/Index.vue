<template>
    <Head title="Certifications" />
    <PageHeader :title="title" :items="items" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px); overflow: auto;" ref="box">
            <b-row class="g-2 mb-2 mt-n2">
                <b-col lg>
                    <div class="input-group mb-1">
                        <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                        <input type="text" v-model="keyword" placeholder="Search School" class="form-control" style="width: 35%;">
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
                            <th width="20%" scope="col">School</th>
                            <th width="20%" scope="col">Course</th>
                            <th width="10%" class="text-center">Years</th>
                            <th width="10%" class="text-center">Certification</th>
                            <th width="10%" class="text-center">Validity</th>
                            <th width="10%" class="text-center">Type</th>
                            <th width="10%" class="text-center">Status</th>
                            <th width="10%" class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(list,index) in lists" v-bind:key="index">
                            <td width="20%" class="">{{list.school.school.name}}</td>
                            <td width="20%" class="">{{list.course}}</td>
                            <td width="10%" class="text-center">{{list.years}}</td>
                            <td width="10%" class="text-center">{{list.certification}}</td>
                            <td width="10%" class="text-center">{{list.validity}}</td>
                            <td width="10%" class="text-center">{{list.type}}</td>
                            <td width="10%" class="text-center">
                                <span v-if="list.is_active" class="badge bg-success">Active</span>
                                <span v-else class="badge bg-danger">Inactive</span>
                            </td>
                            <td width="10%" class="text-end">
                                <b-button @click="openUpdate(list,index)" variant="soft-primary" v-b-tooltip.hover title="Edit" size="sm" class="edit-list">
                                    <i class="ri-pencil-fill align-bottom"></i>
                                </b-button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <Pagination class="ms-2 me-2" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
            </div>
        </div>
    </div>
    <Create ref="create"/>
    <Update ref="update"/>
</template>
<script>
import Update from './Modals/Update.vue';
import Create from './Modals/Create.vue';
import PageHeader from "@/Shared/Components/PageHeader.vue";
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components : { PageHeader, Pagination, Update, Create },
    data() {
        return {
            currentUrl: window.location.origin,
            title: "List of Certifications",
            items: [{text: "Certification",href: "/"},{text: "Lists",active: true}],
            lists: [],
            meta: {},
            links: {},
            keyword: null,
            type: '',
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
            page_url = page_url || '/directory/certifications';
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
    }
}
</script>