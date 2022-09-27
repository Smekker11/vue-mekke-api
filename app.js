const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'random IP from DB',
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