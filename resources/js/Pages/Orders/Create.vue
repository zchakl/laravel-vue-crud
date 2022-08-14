<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeTextArea from '@/Components/Textarea.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
const form = useForm({
    partNumber: '',
    description: '',
    dueDate: '',
    timeStamp: '',
    quantity: 0,
    unitPrice: 0,
    totalPrice: 0,
});
const submit = () => {
    form.post(route('orders.store'));
};
</script>
<template>
    <Head title="Dashboard" />
    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Order
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div className="flex items-center justify-between mb-6">
                            <Link
                                className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                :href="route('orders.index')"
                            >
                                Back
                            </Link>
                        </div>
                        <form name="createForm" @submit.prevent="submit">
                                <div className="flex flex-col">
                                    <div className="mb-4">
                                        <BreezeLabel for="partNumber" value="Part Number" />
                                        
                                        <BreezeInput 
                                            id="partNumber" 
                                            type="text" 
                                            class="mt-1 block w-full" 
                                            v-model="form.partNumber" 
                                            autofocus />
                                        <span className="text-red-600" v-if="form.errors.partNumber">
                                            {{ form.errors.partNumber }}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <BreezeLabel for="description" value="Description" />
                                        
                                        <BreezeTextArea 
                                            id="description" 
                                            class="mt-1 block w-full" 
                                            v-model="form.description" 
                                            autofocus />
                                        <span className="text-red-600" v-if="form.errors.description">
                                            {{ form.errors.description }}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <BreezeLabel for="dueDate" value="Due Date" />
                                        
                                        <BreezeInput 
                                            id="dueDate" 
                                            type="date" 
                                            class="mt-1 block w-full" 
                                            v-model="form.dueDate" 
                                            autofocus />
                                        <span className="text-red-600" v-if="form.errors.dueDate">
                                            {{ form.errors.dueDate }}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <BreezeLabel for="timeStamp" value="Time Stamp" />
                                        
                                        <BreezeInput 
                                            id="timeStamp" 
                                            type="date" 
                                            class="mt-1 block w-full" 
                                            v-model="form.timeStamp" 
                                            autofocus />
                                        <span className="text-red-600" v-if="form.errors.timeStamp">
                                            {{ form.errors.timeStamp }}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <BreezeLabel for="quantity" value="Quantity" />
                                        
                                        <BreezeInput 
                                            id="quantity" 
                                            type="number" 
                                            class="mt-1 block w-full" 
                                            v-model="form.quantity" 
                                            autofocus />
                                        <span className="text-red-600" v-if="form.errors.quantity">
                                            {{ form.errors.quantity }}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <BreezeLabel for="unitPrice" value="Unit Price" />
                                        
                                        <BreezeInput 
                                            id="unitPrice" 
                                            type="number" 
                                            class="mt-1 block w-full" 
                                            v-model="form.unitPrice" 
                                            autofocus />
                                        <span className="text-red-600" v-if="form.errors.unitPrice">
                                            {{ form.errors.unitPrice }}
                                        </span>
                                    </div>
                                    <div className="mb-4">
                                        <BreezeLabel for="totalPrice" value="Total Price" />
                                        
                                        <BreezeInput 
                                            id="totalPrice" 
                                            type="number" 
                                            class="mt-1 block w-full" 
                                            v-model="form.totalPrice" 
                                            autofocus />
                                        <span className="text-red-600" v-if="form.errors.totalPrice">
                                            {{ form.errors.totalPrice }}
                                        </span>
                                    </div>
                                </div>
  
                                <div className="mt-4">
                                    <button
                                        type="submit"
                                        className="px-6 py-2 font-bold text-white bg-green-500 rounded"
                                    >
                                        Save
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
