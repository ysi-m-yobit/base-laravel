<template>
    <div class="container">
        <div class="uk-section-secondary" uk-height-viewport>
        <div class="uk-flex uk-flex-center uk-flex-middle">
            <div class="uk-inline">
            <a class="uk-form-icon" href="#" uk-icon="icon: pencil"></a>
            <input class="uk-input" type="text" v-model="text" />
            </div>
            <button class="uk-button uk-button-primary" type="button" @click="set">set</button>
        </div>

        <ul class="uk-list uk-text-center">
            <li v-for="(m, d) in messages" :key="d + 'abc'">{{m}}</li>
        </ul>

        <button
            class="demo uk-button uk-button-primary uk-position-center"
            type="button"
            @click="show"
        >Notification</button>
        </div>
    </div>
</template>

<script>
export default {
  data () {
      return {
        text: "",
        messages: ["add message here."]
      }
  },
  methods: {
      set() {
        this.messages.push(this.text);
        this.text = "";
      },
      show() {
        this.messages.forEach(m => this.UIKit.notification(m, {
          status: 'success'
        }));
        this.messages = [];
      }
  },
  mounted: function () {
      console.log("Component mounted.");
  },
}
</script>
