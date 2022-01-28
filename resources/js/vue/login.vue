<template>
	<div>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">Login</div>
					<div class="card-body">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" v-model="loginData.email">
							<p class="text-danger" v-text="errors.email"></p>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" v-model="loginData.password">
							<p class="text-danger" v-text="errors.password"></p>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<button @click="login" class="btn btn-primary">Login</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	export default {
		data(){
			return {
				loginData: {
					email: '',
					password: '',
					device: ''
				},
				errors: {}
			}
		},
		methods: {
			login(){

				axios.post('api/login', this.loginData).then((response) => {
					localStorage.setItem('token', response.data)
					this.$router.push('/')
				}).catch((errors) => {
					this.errors = errors.response.data.errors
				})
			}
		},
		mounted() {
			console.error("mounted");
		}
	}
</script>

<style scoped>
	.taskManagerContainer{
		width: 500px;
		margin: auto;
	}
</style>
