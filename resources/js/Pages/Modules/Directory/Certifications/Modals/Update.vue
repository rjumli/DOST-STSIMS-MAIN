<template>
    <b-modal v-model="showModal" header-class="p-3 bg-light" class="v-modal-custom" modal-class="zoomIn" centered no-close-on-backdrop>
        <template v-slot:header>
            <h5 class="modal-title">Update Status</h5>
            <button @click="hide()" type="button" class="btn-close" aria-label="Close"></button>
        </template>
        <div class="customform">
            <div class="mt-1 mb-n3">
                <div class="p-2 mt-2 text-center">
                    <h6>{{list.course}}</h6>
                    <p class="font-size-12 text-muted" v-if="list.is_active == 1"> This will <span class="text-danger fw-semibold">deactivate</span> the course.</p>
                    <p class="font-size-12 text-muted" v-else> This will <span class="text-success fw-semibold">activate</span> the course. </p>
                </div>
            </div>
        </div>
        <template v-slot:footer>
            <b-button @click="hide()" variant="light" block>Cancel</b-button>
            <b-button @click="update('ok')" variant="primary" :disabled="form.processing" block>Update</b-button>
        </template>
    </b-modal>
</template>
<script>
export default {
    data(){
        return {
            currentUrl: window.location.origin,
            list: '',
            form: {},
            showModal: false,
            editable: false,
        }
    },
    methods: {
        show(data) {
            this.list = data;
            this.showModal = true;
        },
        update(){
            this.form = this.$inertia.form({
                id: this.list.id,
                is_active: (this.list.is_active == 1) ? 0 : 1,
                editable: true,
            })
            this.form.put('/directory/certifications/update',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
                },
            });
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>
<style>
.multiselect__single {
    font-size: 12px;
}
</style>