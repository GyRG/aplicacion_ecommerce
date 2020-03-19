<template>
    <section>
        <!--
        Directiva v-bind: 
        Permite sincronizar la información optenida con el Prop definido, 
        donde la sicronización finciona de una sola vía, 
        esto quiere decir que cuando este componente(padre) 
        sufre alguna actualización el componente(hijo) la escuchará
        y se actualizará de manera automática si que nosotros
        tengamos que hacer nada
        -->
        <div class="row">
            <product-card-component v-bind:product="product" :data-index="index" v-for="(product, index) in products" :key="product.id">
            </product-card-component>

        </div>
    </section>
</template>

<script>
    export default {
       
    }
</script>
