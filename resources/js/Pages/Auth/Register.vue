<script setup>
import {reactive} from 'vue';
import { useForm } from '@inertiajs/vue3';

// Define a reactive object to hold form data
const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
})

// Function to handle the form submission
const submit = () => {
    form.post("/register",{
        onError: () => 
            form.reset('password', 'password_confirmation'),
        }
    );
}
</script>

<template>
    <!-- Dynamic page title based on the component name -->
    <Head :title= "` | ${$page.component}`" />

    <h1 class="title">Register a new account</h1>
    <div class="w-2/4 mx-auto"> 
        <!-- Registration form with server-side validation messages -->
        <form @submit.prevent="submit" >
            <div class="mb-6">
                <lable for="name">Name</lable>
                <input type="text" name="name" id="name" v-model="form.name">
                <small class="error"> {{ form.errors.name }}</small>
            </div>
            <div class="mb-6">
                <lable for="email">Email</lable>
                <input type="email" name="email" id="email" v-model="form.email">
                <small class="error"> {{ form.errors.email }}</small>
            </div>
            <div class="mb-6">
                <lable for="password">Password</lable>
                <input type="password" name="password" id="password" v-model="form.password">
                <small class="error"> {{ form.errors.password }}</small>
            </div>
            <div class="mb-6">
                <lable for="password_confirmation">Confirm Password</lable>
                <input type="password" name="password_confirmation" id="password_confirmation" v-model="form.password_confirmation">
                <small class="error"> {{ form.errors.password_confirmation }}</small>
            </div>
            <div class="mb-6">
                <p class="text-slate-600 mb-2">Already have an account? <a href="#" class="text-link">Login</a></p>
                <button class="primary-btn" :disabled="form.processing">Register</button>
            </div>
           
        </form>
    </div>
    
</template>