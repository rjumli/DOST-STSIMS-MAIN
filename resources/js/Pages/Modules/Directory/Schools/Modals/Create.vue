<template>
    <b-modal v-model="showModal" title="Create School" style="--vz-modal-width: 650px;" header-class="p-3 bg-light" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>    
        <b-form class="customform mb-2">
            <div class="row customerform">
                <div class="col-md-12 mt-2">
                    <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow" role="alert">
                        <i class="ri-error-warning-line label-icon"></i>
                        <strong>Please double check spellings and if the college is updated to university</strong>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                   <div class="form-group">
                        <label>School Name: <span v-if="form.errors" v-text="form.errors.name" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="school.name" >
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <label>Class: <span v-if="form.errors" v-text="form.errors.class_id" class="haveerror"></span></label>
                            <Multiselect 
                            v-model="school.class" 
                            :options="classes"
                            :allow-empty="false"
                            :show-labels="false"
                            label="name" track-by="name"
                            placeholder="Select Class">
                        </Multiselect>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                   <div class="form-group">
                        <label>Shortcut: <span v-if="form.errors" v-text="form.errors.shortcut" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="school.shortcut" >
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                   <div class="form-group">
                        <label>Combiner: <span v-if="form.errors" v-text="form.errors.combiner" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="school.combiner" >
                    </div>
                </div>
            </div>
        </b-form>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="create('ok')" variant="primary" :disabled="form.processing" block>Save</b-button>
        </template>
    </b-modal>
</template>
<script>
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";
export default {
    components: { Multiselect },
    props: ['classes'],
    data(){
        return {
            showModal: false,
            school: {
                id: '',
                name: '',
                class: '',
                shortcut: '',
                combiner: ''
            },
            form: {},
            editable: false,
        }
    },
    methods : {
        show() {
            this.showModal = true;
        },
        create(){
            this.form = this.$inertia.form({
                id: (this.school.id) ? this.school.id : '',
                name: (this.school.name) ? this.school.name : '',
                combiner: (this.school.combiner) ? this.school.combiner : '',
                shortcut: (this.school.shortcut) ? this.school.shortcut : '',
                class_id: (this.school.class) ? this.school.class : '',
                type: 'school'
            })
            this.form.post('/directory/schools',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
                },
            });
        },
        hide(){
            this.school = {};
            this.editable = false;
            this.showModal = false;
        },
    }
}
</script>
<style>
.form-control {
    height: 36px;
}
</style>
