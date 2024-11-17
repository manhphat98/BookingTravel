import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
require('./bootstrap');

const app = createApp({});

app.component('example-component', ExampleComponent);

app.mount('#app');
