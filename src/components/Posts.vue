<script setup lang="ts">
import { ref, onMounted } from 'vue'
import axios from 'axios'


interface IPost {
    id: number
    title: {
        rendered: string
    }
    content: {
        rendered: string
    }
    date: string
}

const posts = ref<IPost[]>([])

onMounted(async () => {
    const response = await axios.get('https://your-wordpress.com/wp-json/wp/v2/posts')
    posts.value = response.data
})

function formatDate(date: string) {
    return new Date(date).toLocaleDateString()
}
</script>

<template>
    <section class="prose-sm p-4 flex flex-col gap-4">
        <h1>Posts</h1>
        <!-- <pre>{{ JSON.stringify(posts, null, 2) }}</pre> -->
        <article class="bg-blue-50 p-4 rounded" v-for="post in posts" :key="post.id">
            <h2 class="mt-0" v-html="post.title.rendered"></h2>
            <div v-html="post.content.rendered"></div>
            <time>{{ formatDate(post.date) }}</time>
        </article>
    </section>
</template>