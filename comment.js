const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'kazakhstan ograzayet nam bambarderofkey',
        nume: ''
      }
    },
    methods: {
        async kaki() {
            const api = await fetch('https://randomuser.me/api/');
            const { results } = await api.json();
            console.log(results);
            this.nume = results[0].name.first + " " + results[0].name.last;
        }
    }
  }).mount('#app')