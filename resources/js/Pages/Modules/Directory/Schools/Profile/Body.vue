<template>
   <b-col lg="8">
        <b-row>
            <b-col lg="12">
                <b-card no-body v-if="school.data.class.name == 'SUC'">
                    <div class="alert alert-success border-0 rounded-0 m-0 d-flex align-items-center" role="alert">
                        <div class="flex-grow-1 text-truncate">
                            <b>Main Campus</b>
                        </div>
                        <div class="flex-shrink-0">
                            <button v-if="!main.data" @click="openCreate(true)" type="button" class="btn btn-success btn-sm">
                               Set Main Campus
                            </button>
                            <button v-else  @click="openView(main.data)" type="button" class="btn btn-info btn-sm">
                               View Main Campus
                            </button>
                        </div>
                    </div>
                    <b-card-body>
                        <div class="row mt-0" v-if="main.data" style="height: 60px;">
                            <div class="col-lg-3 col-sm-6">
                                <div class="p-2 border border-dashed rounded">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-1 fs-11">Campus :</p>
                                            <h6 class="mb-0">{{main.data.campus}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="p-2 border border-dashed rounded">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-1 fs-11">Grading :</p>
                                            <h6 class="mb-0">{{main.data.grading.name}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="p-2 border border-dashed rounded">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-1 fs-11">Term :</p>
                                            <h6 class="mb-0">{{main.data.term.name}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="p-2 border border-dashed rounded">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-1 fs-11">Assigned :</p>
                                            <h6 class="mb-0">{{main.data.assigned.region}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div v-else class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                            <i class="ri-alert-line label-icon"></i><strong>Main Campus</strong> - is not yet set
                        </div>
                    </b-card-body>
                </b-card>
                <b-card no-body>
                    <div class="alert alert-primary border-0 rounded-0 m-0 d-flex align-items-center" role="alert">
                        <div class="flex-grow-1 text-truncate">
                            <b v-if="school.data.class.name == 'SUC'">Satellite Campuses</b>
                            <b v-else>Campuses</b>
                        </div>
                        <div class="flex-shrink-0">
                            <button @click="openCreate(false)" type="button" class="btn btn-primary btn-sm">
                               Add Campus
                            </button>
                        </div>
                    </div>
                    <b-card-body :style="(school.data.class.name == 'SUC') ? 'height: calc(100vh - 510px )' : 'height: calc(100vh - 341px )'">
                        <div class="table-responsive mb-3">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light fs-12">
                                    <tr>
                                        <th width="25%">Campus</th>
                                        <th width="15%" class="text-center">Term</th>
                                        <th width="15%" class="text-center">Grading</th>
                                        <th width="15%" class="text-center">Assigned</th>
                                        <th width="10%" class="text-center">Status</th>
                                        <th width="10%" class="text-end"></th>
                                    </tr>
                                </thead>
                            </table>
                            <table class="table align-middle table-nowrap mb-0">
                                <tbody class="list form-check-all" style="overflow: auto; height: 300px;">
                                    <tr v-for="list in school.data.campuses" v-bind:key="list.id" :class="[(list.is_active == 0) ? 'table-warnings' : '']">
                                        <td width="25%">
                                            <h5 v-b-tooltip.hover :title="list.oldname" class="fs-13 mb-0 text-dark">{{list.campus}}</h5>
                                            <p class="fs-12 text-muted mb-0">{{list.municipality.name}}, {{list.province.name}}, {{list.region.region}}</p>
                                        </td>
                                        <td width="15%" class="text-center">{{(list.term) ? list.term.name : ''}}</td>
                                        <td width="15%" class="text-center">{{(list.grading) ? list.grading.name : ''}}</td>
                                        <td width="15%" class="text-center">{{(list.assigned) ? list.assigned.region : ''}}</td>
                                        <td width="10%" class="text-center">
                                            <span v-if="list.is_active" class="badge bg-success">Active</span>
                                            <span v-else class="badge bg-danger">Inactive</span>
                                        </td>
                                        <td width="10%" class="text-end">
                                            <b-button variant="soft-primary" v-b-tooltip.hover title="Edit" size="sm" class="edit-list me-1"><i class="ri-pencil-fill align-bottom"></i> </b-button>
                                            <b-button @click="openView(list)" variant="soft-info" v-b-tooltip.hover title="View" size="sm" class="edit-list"><i class="ri-eye-fill align-bottom"></i> </b-button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>      
                    </b-card-body>
                </b-card>
            </b-col>
        </b-row>
    </b-col>
    <View :school="school.data" ref="view"/>
    <Create :terms="terms" :gradings="gradings" :regions="regions" ref="create"/>
</template>
<script>
import View from './Modals/View.vue';
import Create from './Modals/Create.vue';
import Pagination from "@/Shared/Components/Pagination.vue";
export default {
    components: { Pagination, Create, View },
    props: ['school','main','dropdowns','regions'],
    data(){
        return {
            status: ''
        }
    },
    computed: {
        terms : function() {
            return this.dropdowns.filter(x => x.classification === "Term Type");
        },
        classes : function() {
            return this.dropdowns.filter(x => x.classification === "Class");
        },
        gradings : function() {
            return this.dropdowns.filter(x => x.classification === "Grading System");
        },
        data() {
            return this.$page.props.flash.data;
        }
    },
    watch: {
        data: {
            deep: true,
            handler(val = null) {
                if(val != null){
                    if(this.status == 'campus'){
                        this.addList(val.data);
                    }else{
                        this.$refs.view.update(val.data);
                    }
                }
            },
        }
    },
    methods: {
        openCreate(main){
            this.status = 'campus';
            this.$refs.create.show(this.school.data.id,main);
        },
        openView(data){
            this.status = 'course';
            this.$refs.view.show(data);
        },
        addList(data){
            this.school.data.campuses.unshift(data);
        },
    }
}
</script>