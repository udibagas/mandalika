<template>
    <div>
        <Suhu :height="height" style="margin-bottom:5px" />
        <Tekanan :height="height" style="margin-bottom:5px" />
    </div>
</template>

<script>
import Suhu from './Suhu'
import Tekanan from './Tekanan'

export default {
    props: ['height'],
    components: { Suhu, Tekanan },
}
</script>

<style lang="scss" scoped>

</style>
