<template>
  <el-card>
    <div slot="header" class="d-flex">
      <div class="flex-grow-1">DATA SENSOR</div>
      <div class="flex-grow-0">
        <el-form inline>
          <el-form-item>
            <el-date-picker
              v-model="dateRange"
              @change="requestData"
              type="daterange"
              range-separator="-"
              start-placeholder="Start date"
              end-placeholder="End date"
            ></el-date-picker>
          </el-form-item>
          <!-- <el-form-item>
            <el-input
              v-model="keyword"
              placeholder="Cari"
              prefix-icon="el-icon-search"
              :clearable="true"
              @change="(v) => { keyword = v; requestData(); }"
            ></el-input>
          </el-form-item>-->
        </el-form>
      </div>
    </div>

    <el-table :data="tableData.data" stripe v-loading="loading" height="calc(100vh - 270px)">
      <el-table-column label="Waktu">
        <template slot-scope="scope">{{scope.row.created_at | readableDateTime}}</template>
      </el-table-column>
      <el-table-column prop="setting.description" label="Parameter"></el-table-column>
      <el-table-column
        prop="ketinggian"
        label="Ketinggian (m)"
        align="center"
        header-align="center"
      ></el-table-column>
      <el-table-column prop="nilai" label="Nilai Raw" align="center" header-align="center"></el-table-column>
      <el-table-column prop="value" label="Nilai Real" align="center" header-align="center"></el-table-column>
      <el-table-column prop="setting.unit" label="Satuan" align="center" header-align="center"></el-table-column>
    </el-table>

    <br />

    <el-pagination
      background
      @current-change="(p) => { page = p; requestData(); }"
      @size-change="(s) => { pageSize = s; requestData(); }"
      layout="total, sizes, prev, next"
      :page-size="pageSize"
      :page-sizes="[10, 25, 50, 100]"
      :total="tableData.total"
    ></el-pagination>
  </el-card>
</template>

<script>
export default {
  data() {
    return {
      page: 1,
      pageSize: 10,
      keyword: "",
      tableData: {},
      loading: false,
      dateRange: null
    };
  },
  methods: {
    requestData() {
      let params = {
        keyword: this.keyword,
        page: this.page,
        pageSize: this.pageSize,
        dateRange: this.dateRange
      };

      this.loading = true;

      axios
        .get("/sensorLog", { params })
        .then(r => (this.tableData = r.data))
        .catch(e => {
          if (e.response.status == 500) {
            this.$message({
              message: e.response.data.message,
              type: "error",
              showClose: true,
              duration: 10000
            });
          }
        })
        .finally(() => (this.loading = false));
    }
  },
  mounted() {
    this.requestData();
  }
};
</script>
