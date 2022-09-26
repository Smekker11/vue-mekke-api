const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'kazakhstan ograzayet nam bambarderofkey',
        ipaddr: ''
      }
    },
    methods: {
        async kaki() {
            window.susSound();
            this.ipaddr = "IP: " + ip + " | " + "CountryCode: " + cc + " | " + "Region: " + region + " | " + "ID in mekkeDB: " + id;
        }
    }
  }).mount('#app')