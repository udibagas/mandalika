<template>
    <div>
        <el-row :gutter="5">
            <el-col :span="6" v-for="i in [100, 70, 40, 10]" :key="i">
                <Angin :height="i" />
            </el-col>
        </el-row>
        <el-row :gutter="5">
            <el-col :span="6" v-for="i in [100, 10, 2]" :key="i">
                <Udara :height="i" />
            </el-col>
            <el-col :span="6">
                <Angin :height="2" />
            </el-col>
        </el-row>
        <el-row :gutter="5">
            <el-col :span="6" >
                <el-card header="PRAKIRAAN CUACA">
                    <el-row>
                        <el-col :span="6" class="text-center">
                            <div style="font-size:20px">Malam</div>

                            <div style="font-size:50px">
                                <i class="el-icon-light-rain"></i>
                            </div>

                            <strong>10 &deg;F | 10% </strong><br>
                            <small> Gerimis </small>
                        </el-col>
                        <el-col :span="6" class="text-center">
                            <div style="font-size:20px">Pagi</div>

                            <div style="font-size:50px">
                                <i class="el-icon-heavy-rain"></i>
                            </div>

                            <strong>10 &deg;F | 10% </strong><br>
                            <small> Hujan </small>
                        </el-col>
                        <el-col :span="6" class="text-center">
                            <div style="font-size:20px">Siang</div>

                            <div style="font-size:50px">
                                <i class="el-icon-sunny"></i>
                            </div>

                            <strong>10 &deg;F | 10% </strong><br>
                            <small> Cerah </small>
                        </el-col>
                        <el-col :span="6" class="text-center">
                            <div style="font-size:20px">Sore</div>

                            <div style="font-size:50px">
                                <i class="el-icon-cloudy"></i>
                            </div>

                            <strong>10 &deg;F | 10% </strong><br>
                            <small> Berawan </small>
                        </el-col>
                    </el-row>
                </el-card>
            </el-col>
            <el-col :span="3">
                <Kelembaban />
            </el-col>
            <el-col :span="3">
                <CurahHujan />
            </el-col>
            <el-col :span="3">
                <Penguapan />
            </el-col>
            <el-col :span="3">
                <Kelembaban />
            </el-col>
            <el-col :span="3">
                <Kelembaban />
            </el-col>
            <el-col :span="3">
                <CurahHujan />
            </el-col>
        </el-row>
    </div>
</template>

<script>
import Angin from '../components/angin/Index'
import Udara from '../components/udara/Index'
import Kelembaban from '../components/udara/Kelembaban'
import CurahHujan from '../components/udara/CurahHujan'
import Penguapan from '../components/udara/Penguapan'

export default {
    components: { Angin, Udara, Kelembaban, CurahHujan, Penguapan }
}
</script>

<style lang="scss" scoped>

</style>
