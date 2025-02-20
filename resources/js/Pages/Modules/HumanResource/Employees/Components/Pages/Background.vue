<template>
    <!-- {{ lists.accounts }} -->
    <div style="height: calc(100vh - 414px);">
        <div class="row g-3" v-if="information">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">
                <div class="row g-3">
                    <div class="col-md-4 col-6" v-for="(list, index) in information.accounts" v-bind:key="index" style="cursor: pointer;">
                        <div class="d-flex border border-dashed rounded p-3">
                            <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                <div class="avatar-title bg-light rounded-circle fs-16 text-primary"><i :class="icons[index]"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 fs-12">{{list.name}} :</p>
                                <h6 v-if="list.number" class="text-truncate fs-12 mb-0"> {{list.number}} </h6>
                                <h6 v-else class="text-truncat text-muted fs-12 mb-0"> Not set </h6>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-sm-4 mb-0" v-for="(list, index) in information.accounts" v-bind:key="index">
                        <div class="p-1 border border-dashed rounded">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm me-0">
                                    <div class="avatar-title rounded bg-transparent text-primary fs-24"><i
                                            class="ri-file-copy-2-fill"></i></div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted fs-11 mb-0">{{ list.name }} :</p>
                                    <span v-if="list.number">{{list.number}}</span>
                                    <span v-else>Not Set</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                     <div class="col-sm-12">
                        <hr class="text-muted mt-0 mb-0"/>
                     </div>
                     <div class="col-md-12">
                        <div class="d-flex border border-dashed rounded p-3">
                            <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                <div class="avatar-title bg-light rounded-circle fs-16 text-primary"><i class="ri-map-pin-fill"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-0 fs-12">Home Address :</p>
                                <h6 class="text-truncate fs-12 mb-0">Aurora Village 4th st., Guiwan, Zamboanga City, Region IX</h6>
                            </div>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import simplebar from "simplebar-vue";
export default {
    components: { simplebar },
    props: ['id','dropdowns','information'],
   data(){
       return {
           filter: {
               keyword: null
           },
           icons: ['ri-home-heart-fill','ri-hotel-fill','ri-sun-foggy-fill','ri-heart-2-fill','ri-hand-heart-fill','ri-bank-fill']
       }
   },
   methods: {
       openCreate(){
           this.$refs.create.show(this.id);
       },
       openCertification(data,id,course){
           if(data.length > 0){
               
           }else{
               this.$refs.certification.show(id,course);
           }
       }   
   }
}
</script>