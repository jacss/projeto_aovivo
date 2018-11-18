<template>

    <div class="small-box" v-bind:style="defineCor">
    <div class="inner">
        <h3>{{qtd}}</h3>

        <p>{{titulo}}</p>
    </div>
    <div class="icon">
        <i v-bind:class="icone"></i>
    </div>
    <a v-bind:href="url" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
    </a>
    </div>

</template>

<script>
    export default {
        props:['qtd','titulo','url','cor','icone'],
        computed:{
           defineCor: function(){
               return " background-color:" +this.cor +"!important;"

           }
        }

    }
</script>

<style>
    .bg-aqua{
        background-color: #00c0ef !important;
    }
    .small-box{
        border-radius: 2px;
        position: relative;
        display: block;
        margin-bottom: 20px;
        box-shadow: 0 1px 1px rgba(0,0,0,0.1);
        color: #fff;
}

.small-box>.inner {
        padding: 10px;
}
.small-box h3, .small-box p {
    z-index: 5;
}
.small-box h3 {
    font-size: 38px;
    font-weight: bold;
    margin: 0 0 10px 0;
    white-space: nowrap;
    padding: 0;
}
.small-box p {
    font-size: 15px;
}
p {
    margin: 0 0 10px;
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
.small-box>.small-box-footer {
    position: relative;
    text-align: center;
    padding: 3px 0;
    color: #fff;
    color: rgba(255,255,255,0.8);
    display: block;
    z-index: 10;
    background: rgba(0,0,0,0.1);
    text-decoration: none;
}

</style>

