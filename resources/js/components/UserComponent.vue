//const axios = require('axios');

<template>
	<div class="container">
        <div class="row justify-content-center">
    		<div class="col-md-4" v-for="(people, index) in peoples.results">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">{{people.name }}</h5>
						<div class="row">
							<div class="col-md-6">
								<label>Height</label>
							</div>
							<div class="col-md-6">
								<p>{{people.height }}</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Mass</label>
							</div>
							<div class="col-md-6">
								<p>{{people.mass }}</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Birth Year</label>
							</div>
							<div class="col-md-6">
								<p>{{people.birth_year }}</p>
							</div>
						</div>
						<div :class="{'hide': index !== showMore, 'show': index === showMore }">
							<div class="row">
								<div class="col-md-6">
									<label>Hair Color</label>
								</div>
								<div class="col-md-6">
									<p>{{people.hair_color }}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Skin Color</label>
								</div>
								<div class="col-md-6">
									<p>{{people.skin_color }}</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Eye Color</label>
								</div>
								<div class="col-md-6">
									<p>{{people.eye_color }}</p>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="button" :class="{'btn-secondary': index !== showMore, 'btn-primary': index === showMore}" class="btn" @click="activeShowMore(index)">Show {{index === showMore?'Less':'More'}}</button>
						<button type="button" :class="{'btn-secondary': people.name != hireEmply, 'btn-primary': people.name == hireEmply}" class="btn" @click="hireEmployee(people)">Hire</button>
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
				peoples : [],
                people: {
					name:'',
					height:'',
					mass:'',
					hair_color: '', 
            		skin_color: '', 
            		eye_color: '', 
            		birth_year: '', 
					gender: '', 
				},				
				showMore: '',
				hireEmply: '',
            }
        },
        created() {
            this.axios
                .get('/peoples')
                .then(response => {
					console.log('Component DATA LOADing');
					console.log(response.data);
					this.peoples = response.data;
                });
		},
		methods: {
			hireEmployee(people) {
				if(this.hireEmply == people.name){
					this.hireEmply = '';	
				}else{
					this.hireEmply = people.name;
				}
				console.log(this.hireEmply);
				this.$root.$emit('hireEmployeeEvent', people);				
			},
			activeShowMore(index){
				if(this.showMore === index){
					this.showMore = '';	
				}else{
					this.showMore = index;
				}
			}
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
