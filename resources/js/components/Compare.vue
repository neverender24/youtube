<template>
    <div class="container-fluid">
        <div class="row p-3"></div>
        <div class="row mb-1">
            <div class="col-4">
                <div id="name1" class="col-12 text-center"></div>
            </div>
            <div class="col-4">
                <div id="description" class="col-12 text-center"></div>
            </div>
            <div class="col-4">
                <div id="name2" class="col-12 text-center"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="row pl-4">
                    <div class="col-6">
                        <ul class="list-group list-group-flush" id="win1">
                             <!-- <li class="list-group-item" v-for="d in description1">{{ d }}</li> -->
                        </ul>
                    </div>
                    <div class="col-6 text-right">
                        <img src="img/img1.jpg" alt="..." class="img-fluid" height="300" />
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row pr-4">
                    <div class="col-6 text-left">
                        <img src="img/img2.jpg" alt="..." class="img-fluid" height="300" />
                    </div>
                    <div class="col-6">
                        <ul class="list-group list-group-flush text-right" id="win2">
                            <!-- <li class="list-group-item" v-for="d in description2">{{ d }}</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div id="model1" class="col-6 text-center m-0"></div>
            <div id="model2" class="col-6 text-center m-0"></div>
        </div>

        <!-- Modal -->
        <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-sm">
                                        Mobile 1
                                        <select
                                            class="form-control form-control-sm"
                                            v-model="selelctedMobile1"
                                            @change="getMobile1()"
                                        >
                                            <option
                                                v-for="item in allMobile"
                                                v-bind:value="item.id"
                                                v-bind:key="item.id"
                                            >{{ item.name }}</option>
                                        </select>
                                    </label>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <input type="checkbox" @change="win1('name', $event)"></input>{{mobile1Data.name}}
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" @change="win1('display', $event)"></input>{{mobile1Data.display}}</li>
                                    <li class="list-group-item" @change="win1('chipset', $event)">{{mobile1Data.chipset}}</li>
                                    <li class="list-group-item" @change="win1('camera_main', $event)">{{mobile1Data.camera_main}}</li>
                                    <li class="list-group-item" @change="win1('battery', $event)">{{mobile1Data.battery}}</li>
                                    <li class="list-group-item" @change="win1('os', $event)">{{mobile1Data.os}}</li>
                                    <li class="list-group-item" @change="win1('storage', $event)">{{mobile1Data.storage}}</li>
                                    <li class="list-group-item" @change="win1('resolution', $event)">{{mobile1Data.resolution}}</li>
                                    <li class="list-group-item" @change="win1('ram', $event)">{{mobile1Data.ram}}</li>
                                    <li class="list-group-item" @change="win1('gpu', $event)">{{mobile1Data.gpu}}</li>
                                    <li class="list-group-item" @change="win1('camera_front', $event)">{{mobile1Data.camera_front}}</li>
                                    <li class="list-group-item" @change="win1('price', $event)">{{mobile1Data.price}}</li>
                                    <li class="list-group-item" @change="win1('cpu', $event)">{{mobile1Data.cpu}}</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="col-sm">
                                        Mobile 2
                                        <select
                                            class="form-control form-control-sm"
                                            v-model="selelctedMobile2"
                                            @change="getMobile2()"
                                        >
                                            <option
                                                v-for="item in allMobile"
                                                v-bind:value="item.id"
                                                v-bind:key="item.id"
                                            >{{ item.name }}</option>
                                        </select>
                                    </label>
                                </div>
                                <ul class="list-group list-group-flush">
                                     <li class="list-group-item">
                                        <input type="checkbox" @change="win2('name', $event)"></input>{{mobile2Data.name}}
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" @change="win2('display', $event)"></input>{{mobile2Data.display}}</li>
                                    <li class="list-group-item" @change="win2('chipset', $event)">{{mobile2Data.chipset}}</li>
                                    <li class="list-group-item" @change="win2('camera_main', $event)">{{mobile2Data.camera_main}}</li>
                                    <li class="list-group-item" @change="win2('battery', $event)">{{mobile2Data.battery}}</li>
                                    <li class="list-group-item" @change="win2('os', $event)">{{mobile2Data.os}}</li>
                                    <li class="list-group-item" @change="win2('storage', $event)">{{mobile2Data.storage}}</li>
                                    <li class="list-group-item" @change="win2('resolution', $event)">{{mobile2Data.resolution}}</li>
                                    <li class="list-group-item" @change="win2('ram', $event)">{{mobile2Data.ram}}</li>
                                    <li class="list-group-item" @change="win2('gpu', $event)">{{mobile2Data.gpu}}</li>
                                    <li class="list-group-item" @change="win2('camera_front', $event)">{{mobile2Data.camera_front}}</li>
                                    <li class="list-group-item" @change="win2('price', $event)">{{mobile2Data.price}}</li>
                                    <li class="list-group-item" @change="win2('cpu', $event)">{{mobile2Data.cpu}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click="run()">Run</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selelctedMobile1: [],
            selelctedMobile2: [],
            allMobile: [],
            mobile1Data: [],
            mobile2Data: [],
            description: [
                "Name",
                "Display",
                "Body",
                "Weight"
            ],
            description1: [],
            description2: [],
           
        };
    },
    mounted() {
        $(document).keypress(function(e) {
            if (e.which == 13) {
                $(".modal").modal("show");
            }
        });

        axios.get("all-mobile").then(response => {
            this.allMobile = response.data;
        });
    },
    methods: {
        getMobile1() {
            let findMobile = _.find(this.allMobile, { 'id': 1 })
            let self = this
            self.mobile1Data = findMobile
        },
        getMobile2() {
            let findMobile = _.find(this.allMobile, { 'id': 2 })
            let self = this
            self.mobile2Data = findMobile
        },
        win1(value, event) {
            if (event.target.checked) {
                this.mobile1Data[value] = this.mobile1Data[value] + " (win)"
                this.description1.push(value)
            } else {
                this.mobile1Data[value] = this.mobile1Data[value].replace(" (win)", "");
                this.description1 = _.remove(this.description1, function(n) {
                    return n != value;
                });
            }
            
        },
        win2(value, event) {
         
            if (event.target.checked) {
                this.mobile2Data[value] = this.mobile2Data[value] + " (win)"
                this.description2.push(value)
            } else {
                this.mobile2Data[value] = this.mobile2Data[value].replace(" (win)", "");
                this.description2 = _.remove(this.description2, function(n) {
                    return n != value;
                });
            }
            
        },
        
        run() {
             $(".modal").modal("hide");
            $("#name1").html("<div class='alert alert-light m-3' role='alert'><h2>" + this.mobile1Data.name + "</h2></div>");
            $("#name2").html("<div class='alert alert-light m-3' role='alert'><h2>" + this.mobile2Data.name + "</h2></div>");

            let model1 = _.flatMap(this.mobile1Data);
            let model2 = _.flatMap(this.mobile2Data);
            let description = this.description
            let self = this
    
            for (let i = 1; i < model1.length; i++) {
                    $("#model1").delay(1000).queue(function() {
                        $(this).html("<div class='alert alert-primary m-3' role='alert'><h2>" + model1[i] + "</h2></div>");
                        $(this).dequeue();
                    });

                    $("#model2").delay(1000).queue(function() {
                        $(this).html("<div class='alert alert-danger m-3' role='alert'><h2>" + model2[i] + "</h2></div>");
                        $(this).dequeue();
                    });
                
   
            }

            for (let i = 0; i < description.length; i++) {      
                    $("#description").delay(1000).queue(function() {
                        $(this).html("<div class='alert alert-light m-3' role='alert'><h1>" + description[i] + "</h1></div>");
                        console.log(description[i])
                        if (description[i] !== undefined) {
                            $("#win1").delay(1000).queue(function() {
                                let lower = description[i].toLowerCase().trim()
                                let win =_.indexOf(self.description1,lower)
                                 
                                if (win != -1) {
                                    console.log(description + "aw") 
                                    $(this).append("<li class='list-group-item'>" + description[win] + "</li>");
                                    
                                }
                                $(this).dequeue();
                            })

                        }

                        $(this).dequeue();
                    });
   
            }

        }
    }
};

</script>
