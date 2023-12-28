<script>
export default {
    data() {
        return {
            count: 0,
            msg: "",
            dynamicId: 5,
            isButtonDisabled: true,
            objectOfAttrs: {
                id: "container",
                class: "text-red-700",
            },
            css: "text-blue-800",
            show: false,
            furl: "https://facebook.com",
            gurl: "https://github.com/sayful1411",
            lists: [
                { id: 1, name: "list1" },
                { id: 2, name: "list2" },
                { id: 3, name: "list3" },
                { id: 4, name: "list4" },
                { id: 5, name: "list5" },
            ],
            tasks: [{ id: 1, name: "Task 1" }],
        };
    },
    methods: {
        addTask() {
            // Generate a unique ID for the new task
            const newTaskId =
                this.tasks.length > 0
                    ? this.tasks[this.tasks.length - 1].id + 1
                    : 1;

            // Push the new task into the tasks array
            this.tasks.push({ id: newTaskId, name: `Task ${newTaskId}` });
        },
    },
};
</script>

<template>
    <!-- <div class="mb-4">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @click="count++">
      Count ({{ count }})
    </button>
  </div> -->

    <!-- <div class="mb-4">
        <h2 class="text-3xl font-bold mb-4">Template Syntax</h2>

        <div class="mb-2">
            <h2 class="text-l font-bold">Text Interpolation (Value Binding)</h2>
            <p>Using text interpolation: {{ msg }}</p>
        </div>

        <div class="mb-2">
            <h2 class="text-l font-bold">v-html</h2>
            <p>Using v-html directive: <span v-html="msg"></span></p>
        </div>

        <div class="mb-2">
            <h2 class="text-l font-bold">v-bind (Attributes Binding)</h2>
            <div v-bind:id="dynamicId">Inspect and see ID</div>
            <div :id="dynamicId">Inspect and see ID</div>
            <div v-bind="objectOfAttrs">
                Dynamically Binding Multiple Attributes
            </div>
            <a :class="css" v-bind:href="furl"> Facebook </a>
            <a :style="{ color: 'green' }" v-bind:href="gurl"> Github </a>
        </div>

        <div class="mb-2">
            <h2 class="text-l font-bold">Boolean Attributes</h2>
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                :disabled="isButtonDisabled"
            >
                Button
            </button>
        </div>

        <div class="mb-2">
            <h2 class="text-l font-bold">Conditional Rendering</h2>
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                v-on:click="show = !show"
            >
                Toggle
            </button>
            <p v-if="show">Now you see 1st paragraph</p>
            <p v-else>Now you see 2nd paragraph</p>
        </div>

        <div class="mb-2">
            <h2 class="text-l font-bold">List Rendering</h2>
            <ul
                class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white"
            >
                <li
                    class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600"
                    :key="lists.id"
                    v-for="list in lists"
                >
                    {{ list.name }}
                </li>
            </ul>
        </div>

        <div class="mb-2">
            <h2 class="text-l font-bold">Event Listening</h2>
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                @click="addTask"
            >
                Add Task
            </button>
            <ul
                class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white"
            >
                <li
                    class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600"
                    :key="tasks.id"
                    v-for="task in tasks"
                >
                    {{ task.name }}
                </li>
            </ul>
        </div>
    </div> -->

    <CharacterCount />

</template>
