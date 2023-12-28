import './bootstrap';

import { createApp } from 'vue'

import App from './App.vue'
import CharacterCount from './components/CharacterCount.vue';
import PostsComponent from './components/PostsComponent.vue';

const app = createApp(App)

// Register components
app.component('CharacterCount', CharacterCount);
app.component('PostsComponent', PostsComponent);

app.mount("#app")
