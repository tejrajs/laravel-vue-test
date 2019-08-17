<template>
    <div class="container">
		<div class="row mb-3 justify-content-center">
			<div class="card">
				<div class="card-body">
					<form @submit.prevent="hireEmployee">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<label for="firstname">First Name</label>
								<input type="text" name="firstname" class="form-control" id="firstname" v-model="people.firstname">
							</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label for="lastname">Last Name</label>
								<input type="text" name="lastname" class="form-control" id="lastname" v-model="people.lastname">
							</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<label for="date">Date</label>
								<input type="date" class="form-control" id="date" name="date" v-model="people.date">
							</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" v-model="people.email">
							</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="employee">Employee</label>
									<input type="text" class="form-control" id="employee" name="employee" v-model="people.name">
									<!--<select class="form-control" id="employee" name="employee">
										<option v-for="people in peoples.results"
												:key="people">
											{{ people.name }}
										</option>
									</select>-->
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
		data() {
            return {
                people: {
					firstname: '',
					lastname: '',
					date:'',
					email:'',
					name:'', 
				}
            }
        },
        created() {
            // this.axios
            //     .get('/peoples')
            //     .then(response => {
			// 		console.log('Component DATA LOADing');
			// 		console.log(response.data);
            //         this.peoples = response.data;
            //     });
		},
        mounted: function () { 
			this.$root.$on('hireEmployeeEvent', (people) => { // here you need to use the arrow function
				console.log("mounted works");

				console.log(people);
				this.people.name = people.name;
			})
		},
		methods: {
            hireEmployee() {
                axios
                    .post('/hire', this.people)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
			},
			clearForm() {
				this.people.firstname = '';
				this.people.lastname = '';
				this.people.date = '';
				this.people.email = '';
				this.people.name = '';
			}
        }
    }
</script>
