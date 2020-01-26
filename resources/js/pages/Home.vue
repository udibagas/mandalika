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
            <el-col :span="3" >
                <el-card>
                    <strong>PRAKIRAAN CUACA</strong>
                    <br>
                    <br>
                    <el-row>
                        <el-col :span="6" class="text-center">
                            <div style="font-size:16px">Malam</div>

                            <div style="font-size:37px">
                                <i class="el-icon-light-rain"></i>
                            </div>

                            <strong>10 &deg;F <br /> 10% </strong><br>
                            <small> Gerimis </small>
                        </el-col>
                        <el-col :span="6" class="text-center">
                            <div style="font-size:16px">Pagi</div>

                            <div style="font-size:37px">
                                <i class="el-icon-heavy-rain"></i>
                            </div>

                            <strong>10 &deg;F <br /> 10% </strong><br>
                            <small> Hujan </small>
                        </el-col>
                        <el-col :span="6" class="text-center">
                            <div style="font-size:16px">Siang</div>

                            <div style="font-size:37px">
                                <i class="el-icon-sunny"></i>
                            </div>

                            <strong>10 &deg;F <br /> 10% </strong><br>
                            <small> Cerah </small>
                        </el-col>
                        <el-col :span="6" class="text-center">
                            <div style="font-size:16px">Sore</div>

                            <div style="font-size:37px">
                                <i class="el-icon-cloudy"></i>
                            </div>

                            <strong>10 &deg;F <br /> 10% </strong><br>
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
                <HujanSaatIni />
            </el-col>
            <el-col :span="3">
                <Penguapan />
            </el-col>
            <el-col :span="3">
                <el-card class="text-center">
                    <strong>TERBIT/TERBENAM</strong>
                    <br>
                    <br>

                    <h4>05:00</h4>
                    <div style="font-size:55px">
                        <i class="el-icon-sunrise-1"></i>
                    </div>
                    <h4>06:00</h4>
                </el-card>
            </el-col>
            <el-col :span="3">
                <Uv />
            </el-col>
            <el-col :span="3">
                <RadiasiMatahari />
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
import RadiasiMatahari from '../components/RadiasiMatahari'
import Uv from '../components/Uv'
import HujanSaatIni from '../components/HujanSaatIni'

export default {
    components: {
        Angin,
        Udara,
        Kelembaban,
        CurahHujan,
        Penguapan,
        RadiasiMatahari,
        Uv,
        HujanSaatIni
    }
}
</script>

<style lang="scss" scoped>

</style>
