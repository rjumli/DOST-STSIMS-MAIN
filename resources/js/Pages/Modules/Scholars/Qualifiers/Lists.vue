<template>
    <b-row class="g-2 mb-2 mt-n2">
        <b-col lg>
            <div class="input-group mb-1">
                <span class="input-group-text"> <i class="ri-search-line search-icon"></i></span>
                <input type="text" v-model="filter.keyword" placeholder="Search Qualifier" class="form-control" style="width: 50%;">
                <input type="text" v-model="filter.year" placeholder="Year Awarded" class="form-control" style="width: 30px;">
                <span @click="refresh" class="input-group-text" v-b-tooltip.hover title="Refresh" style="cursor: pointer;"> 
                    <i class="bx bx-refresh search-icon"></i>
                </span>
                <span @click="openFilter" class="input-group-text" v-b-tooltip.hover title="Filter" style="cursor: pointer;"> 
                    <i class="ri-filter-fill search-icon"></i>
                </span>
                 <span @click="openExport" class="input-group-text" v-b-tooltip.hover title="Export" style="cursor: pointer;"> 
                    <i class="ri-file-excel-2-fill search-icon"></i>
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
                    <th style="width: 30%;">Name</th>
                    <th style="width: 15%;" class="text-center">Address</th>
                    <th style="width: 15%;" class="text-center">Program</th>
                    <th style="width: 15%;" class="text-center">Awarded Year</th>
                    <th style="width: 15%;" class="text-center">Type</th>
                    <th style="width: 15%;" class="text-center">Status</th>
                    <th style="width: 10%;"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="list in lists" v-bind:key="list.id" :class="[(list.is_active == 0) ? 'table-warnings' : '']">
                    <td>
                    <div class="avatar-xs" v-if="list.profile.avatar == 'n/a'">
                        <span class="avatar-title rounded-circle">{{list.profile.lastname.charAt(0)}}</span>
                    </div>
                    <div v-else>
                        <img class="rounded-circle avatar-xs" :src="currentUrl+'/imagess/avatars/'+list.profile.avatar" alt="">
                    </div>
                </td>
                <td>
                    <h5 class="fs-13 mb-0 text-dark">{{list.profile.lastname}}, {{list.profile.firstname}} {{list.profile.middlename[0]}}.</h5>
                    <p class="fs-11 text-muted mb-0">{{list.spas_id }}</p>
                </td>
                <!-- <td class="text-center fs-12">
                    {{list.address.hs_school}}
                </td> -->
                    <td class="text-center">
                    <h5 class="fs-11 mb-0 text-dark">{{list.address.name}}</h5>
                    <p class="fs-11 text-muted mb-0">
                        {{(list.address.province) ? list.address.province.name+',' : ''}}
                        {{(list.address.region) ? list.address.region.region : ''}}
                    </p>
                </td>
                <td class="text-center">
                    <h5 class="fs-12 mb-0 text-dark">{{list.program.name}}</h5>
                    <p class="fs-11 text-muted mb-0">{{list.subprogram.name }}</p>
                </td>
                <td class="text-center">{{list.qualified_year}}</td>
                    <td class="text-center">
                    <span :class="'badge '+list.type.color+' '+list.type.others">{{list.type.name}}</span>
                </td>
                <td class="text-center">
                    <span :class="'badge '+list.status.color+' '+list.status.others">{{list.status.name}}</span>
                </td>
                <td class="text-end">
                   <b-button v-if="list.address.is_completed == 0" variant="soft-danger" @click="showAddress(list)" v-b-tooltip.hover title="View" size="sm" class="me-0">
                        <i class="ri-eye-fill align-bottom"></i> 
                    </b-button>
                    <b-button v-else variant="soft-primary" @click="showProfile(list)" v-b-tooltip.hover title="View" size="sm" class="me-0">
                        <i class="ri-eye-fill align-bottom"></i> 
                    </b-button>
                </td>
            </tr>
            </tbody>
        </table>
        <Pagination class="ms-2 me-2" v-if="meta" @fetch="fetch" :lists="lists.length" :links="links" :pagination="meta" />
    </div>
    <Address @status="fetchUpdate()" ref="address"/>
    <Profile @status="fetchUpdate()" :statuses="status_list" ref="profile"/>
    <Filter :regions="regions" :dropdowns="dropdowns" :programs="program_list" :subprograms="subprogram_list" @status="subfilter" ref="filter"/>
</template>
<script>
import Address from './Modals/Buttons/Address.vue';
import Profile from './Modals/Buttons/Profile.vue';
import Filter from './Modals/Filter.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { Pagination, Filter, Address, Profile },
    props: ['regions','dropdowns','program_list','subprogram_list','statuses'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists: [],
            meta: {},
            links: {},
            filter: {
                subfilters: [],
                program: null,
                subprogram: null,
                status: null,
                type: null,
                year: null,
                keyword: null,
                sort: 'asc'
            },
            subfilters: [],
            flag: '',
            index: ''
        }
    },
    computed: {
        listprograms : function() {
            return this.programs.filter(x => x.is_sub === 1);
        },
        listsubprograms() {
            return this.programs;
        },
        listtypes : function() {
            return this.statuses.filter(x => x.type === 'Qualifier');
        },
        liststatuses : function() {
            return this.statuses.filter(x => x.type === 'Qualifier Status');
        },
        data() {
            return this.$page.props.flash.data;
        },
    },
    watch: {
        "filter.keyword"(newVal){
            this.checkSearchStr(newVal)
        },
        "filter.year"(newVal){
            this.checkSearchStr(newVal)
        },
        data: {
            deep: true,
            handler(val = null) {
                if(val != null && val !== ''){
                    switch(this.flag){
                        case 'address':
                            this.lists[this.index].addresses[0] = val.data;
                            this.$emit('info',true);
                        break;
                        case 'education':
                            this.lists[this.index].education = val.data;
                            this.$emit('info',true);
                        break;
                        case 'scholar':
                            this.lists[this.index].account_no = val.account_no;
                            this.$emit('info',true);
                        break;
                         case 'status':
                            this.lists[this.index].status = val.status;
                            this.$emit('info',true);
                        break;
                        default:
                            this.$emit('unsync',val);
                        break;
                    }
                    this.flag = '';
                }
            },
        },
    },
    created(){
        this.fetch();
    },
    methods: {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),
        fetch(page_url) {
            let info = {
                'keyword': this.filter.keyword,
                'status': (this.filter.status == null) ? null : this.filter.status,
                'program': (this.filter.program == null) ? null : this.filter.program,
                'subprogram': (this.filter.subprogram == null) ? null : this.filter.subprogram,
                'category': (this.filter.category == null) ? null : this.filter.category,
                'type': (this.filter.type == null) ? null : this.filter.type,
                'year': (this.filter.year === '' || this.filter.year == null) ? '' : this.filter.year,
                'counts': parseInt(((window.innerHeight-350)/56)),
                'sort': this.filter.sort
            };

            info = (Object.keys(info).length == 0) ? '-' : JSON.stringify(info);
            this.subfilters = (Object.keys(this.subfilters).length == 0) ? '-' : JSON.stringify(this.subfilters);

            page_url = page_url || '/scholars/qualifiers';
            axios.get(page_url, {
                params: {
                    info: info,
                    subfilters: this.subfilters,
                    option: 'lists',
                }
            })
            .then(response => {
                this.lists = response.data.data;
                this.meta = response.data.meta;
                this.links = response.data.links;
            })
            .catch(err => console.log(err));
        },
        subfilter(list){
            this.subfilters = list;
            this.fetch();
        },
        openFilter(){
            this.$refs.filter.show();
        },
        showProfile(data){
            this.$refs.profile.show(data);
        },
        showAddress(data){
            this.$refs.address.show(data);
        },
        refresh(){
            this.filter = {
                category: null,
                program: null,
                status: null,
                year: null,
                type: null,
                keyword: null,
                sort: 'asc'
            };
        },
        fetchUpdate(){
            this.fetch();
        },
    }
}
</script>