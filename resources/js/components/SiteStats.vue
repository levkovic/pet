<template>
    <div>
        <h1 class="font-normal text-3xl">Stats</h1>

        <ul>
            <li>Total: {{ total }}</li>
            <li>Current: {{ current }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                total: 0,
                current: 0
            };
        }
    };
</script>
