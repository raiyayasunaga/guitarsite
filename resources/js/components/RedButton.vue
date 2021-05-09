<template>
    <button class="red-button" type="button" @click="onClick()">{{ label }}</button>
</template>

<script>
    export default {

        data: () => {
            return {
                label: '赤いボタン'
            }
        },
        methods: {
            onClick() {

                alert('反応しるのか');

            }
        }

    }
</script>

<style>

    .red-button {

        background: red;
        color: white;

    }

</style>