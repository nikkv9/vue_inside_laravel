<script setup>
import { useForm } from "@inertiajs/vue3";
// import axios from "axios";
// import { ref } from "vue";
// import { toast } from "vue3-toastify";
// import "vue3-toastify/dist/index.css";

const form = useForm({
    title: "",
    text: "",
});

const addNoteHandler = () => {
    form.post(route("note.add"));
};

// const title = ref("");
// const text = ref("");

// const addNoteHandler = async () => {
//     try {
//         const res = await axios.post(route("note.add"), {
//             title: title.value,
//             text: text.value,
//         });
//         console.log(res);
//         if (res.data.note) {
//             toast.success("Note created!", {
//                 autoClose: 1000,
//                 position: "top-right",
//                 toastStyle: { backgroundColor: "black", color: "aliceblue" },
//             });
//         }
//     } catch (error) {
//         alert("An error occurred: " + error.message);
//     }
// }
</script>

<template>
    <div class="createNote flex items-center justify-center">
        <div class="form flex flex-col">
            <div class="inputContainer mb-4">
                <input
                    type="text"
                    placeholder="Title"
                    v-model="form.title"
                    class="p-2 bg-gray-200 text-black outline-none rounded-sm w-full"
                />
                <div v-if="form.errors.title" class="text-red-500">
                    {{ form.errors.title }}
                </div>
            </div>

            <div class="inputContainer mb-4">
                <input
                    type="text"
                    placeholder="Text"
                    v-model="form.text"
                    class="p-2 bg-gray-200 text-black outline-none rounded-sm w-full"
                />
                <div v-if="form.errors.text" class="text-red-500">
                    {{ form.errors.text }}
                </div>
            </div>
            <button
                class="p-2 bg-teal-600 text-white outline-none mb-3 rounded-sm"
                @click="addNoteHandler"
            >
                Add Note
            </button>
        </div>
    </div>
</template>

<style scoped>
.form {
    width: 20rem;
}
.createNote {
    height: 100vh;
}
</style>
