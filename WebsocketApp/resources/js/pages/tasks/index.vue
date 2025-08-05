<template>
  <div class="p-6 max-w-xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">📝 Ma To-Do List</h1>

    <form @submit.prevent="submitTask" class="mb-4 flex gap-2">
      <input v-model="form.title" class="border rounded p-2 w-full" placeholder="Nouvelle tâche" />
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter</button>
    </form>

    <ul>
      <li v-for="task in tasks" :key="task.id" class="flex justify-between items-center border-b py-2">
        <div>
          <input v-model="task.title" @change="updateTask(task)" class="border-none bg-transparent w-full" />
        </div>
        <button @click="deleteTask(task.id)" class="text-red-600">Supprimer</button>
      </li>
    </ul>
  </div>
</template>

<script setup>
import { reactive } from 'vue'
import { useForm, router } from '@inertiajs/vue3'

const props = defineProps({ tasks: Array })

const form = useForm({ title: '' })

const submitTask = () => {
  form.post('/tasks', {
    onSuccess: () => form.reset()
  })
}

const updateTask = (task) => {
  router.put(`/tasks/${task.id}`, { title: task.title })
}

const deleteTask = (id) => {
  router.delete(`/tasks/${id}`)
}
</script>
