<template>
    <table>
        <tr>
            <th v-for="campo in campos">
                
                
                <button @click=ordena(campo) class="cursor-pointer"

                >{{campo}}</th>

        </tr>
        <tr v-for="fila in filas">
            <td v-for="valor in fila">{{valor}}</td>
        </tr>

    </table>

</template>

<script>
export default {


    name: "tabla",
    props: ["filas_serializado", "campos_serializado","nombre" ],
    data(){
        return{
            filas: [],
            campos: [], 
            nombre:"",
        }
    },
    mounted(){
        this.filas = JSON.parse(this.filas_serializado);
        this.campos = JSON.parse(this.campos_serializado);
    },

    methods: {
        ordena:function(campo){
            this.filas=this.filas.sort((a,b) => {
                if(a[campo] > b[campo])
                    return 1;
                else
                    return -1;
                
            
            });
        }
    }
}
</script>


<style scoped>

</style>