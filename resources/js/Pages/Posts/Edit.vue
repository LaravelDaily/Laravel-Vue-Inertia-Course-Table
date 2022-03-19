<template>
    <Head title="Edit post" />
    <AppLayout>
        <form @submit.prevent="form.put(route('posts.update', form.id))">
            <div>
                <div>
                    <label for="title" class="block font-medium text-sm text-gray-700">
                        Title
                    </label>
                    <input v-model="form.title" type="text" id="title" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <div v-if="errors.title" class="text-red-600">
                        {{ errors.title }}
                    </div>
                </div>

                <div class="mt-4">
                    <label for="content" class="block font-medium text-sm text-gray-700">
                        Content
                    </label>
                    <textarea v-model="form.content" id="content" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                    <div v-if="errors.content" class="text-red-600">
                        {{ errors.content }}
                    </div>
                </div>
            </div>

            <div class="py-4">
                <button type="submit" :disabled="form.processing" class="inline-block px-4 py-3 bg-blue-500 text-white rounded">
                    Save post
                </button>
                <Link :href="route('posts.index')" class="ml-2 inline-block px-4 py-3 bg-gray-100 rounded">
                    Cancel
                </Link>
            </div>
        </form>
    </AppLayout>
</template>

<script>
import AppLayout from "../../Layouts/App"
import { Head, Link, useForm } from "@inertiajs/inertia-vue3"

export default {
    components: {
        AppLayout, Head, Link
    },
    props: {
        post: Object,
        errors: Object
    },
    setup(props) {
        const form = useForm(props.post)

        return { form }
    }
}
</script>
