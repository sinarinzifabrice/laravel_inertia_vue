<script setup>
import {reactive} from 'vue';
import { useForm } from '@inertiajs/vue3';
// Import custom shared component for form inputs
import TextInput from '../components/TextInput.vue';

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
            <TextInput name="name" v-model="form.name" :message="form.errors.name" />
            <TextInput name="email" type="email" v-model="form.email" :message="form.errors.email" />
            <TextInput name="password" type="password" v-model="form.password" :message="form.errors.password" />
            <TextInput name="confirm password" type="password" v-model="form.password_confirmation" :message="form.errors.password_confirmation" />
            <div class="mb-6">
                <p class="text-slate-600 mb-2">Already have an account? <a href="#" class="text-link">Login</a></p>
                <button class="primary-btn" :disabled="form.processing">Register</button>
            </div>
           
        </form>
    </div>
    
</template>