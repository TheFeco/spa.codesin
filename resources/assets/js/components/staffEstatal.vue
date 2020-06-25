<template>
    <div class="staff-area mt-24">
        <div class="">
            <div class="row  mt-24">
                <div class="col-md-2 col-sm-6 col-xs-6" v-for="(staff, index) in staffs" :key="index">
                    <div class="card-staff mb-4 o-hidden default-bg"><img class="card-staff-img-top" :src="staff.urlimg" alt="">
                        <div class="card-staff-body ">
                            <h5 class="card-staff-title text-center"><p v-text="staff.name"></p></h5>
                            <p class="card-staff-text text-gray text-center" v-text="staff.job"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:['staffs']
}
</script>