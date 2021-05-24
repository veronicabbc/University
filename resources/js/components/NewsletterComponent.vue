<template>
    <main>
        <p class="text-warning" v-text="messages"></p>
        <div class="form">
            <input class="form-control" placeholder="Email here" type="email" v-model="email">
            <button class="btn" @click.prevent="addNewsletter">Submit</button>
        </div>
    </main>    
</template>

<script>
    export default {
        data: () => ({
            messages: null,
            email:null
        }),
        methods: {
            addNewsletter() {
                this.messages = null;
                axios.post("/api/newsletters", {email : this.email}).then((response) => {
                    this.email = null;
                    this.messages = response.data.message;
                })
                .catch((error) => {
                    if (error.response.status == 422) {
                        for (let field in error.response.data.errors.email) {
                            this.messages = error.response.data.errors.email[field];
                        }
                    }else{
                        this.messages = "Something went wrong..."
                    }
                });
            },
        },
    };
</script>
