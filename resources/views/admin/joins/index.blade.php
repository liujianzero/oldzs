@extends('layouts.app')

@section('title', '加盟申请')

@section('content')
<div class="container my-5">
  <v-admin-joins inline-template>
    <div class="container">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">姓名</th>
              <th scope="col">电话</th>
              <th scope="col">申请于</th>
              <th scope="col">操作</th>
            </tr>
          </thead>
          <tbody v-if="list.length">
            <tr v-for="v in list" :key="v.id">
              <th scope="row">@{{ v.id }}</th>
              <td>@{{ v.name }}</td>
              <td>@{{ v.mobile }}</td>
              <td>@{{ v.created_at }}</td>
              <td>-</td>
            </tr>
          </tbody>
          <tbody v-else>
            <tr>
              <td class="text-secondary text-center" colspan="5">暂无数据</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="text-center mt-3">
        <page @on-change="getList" :current="paginate.current" :page-size="paginate.per_page" :total="paginate.total"
          show-total></page>
      </div>
    </div>
  </v-admin-joins>
</div>
@endsection
