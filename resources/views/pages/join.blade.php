@extends('layouts.app')

@section('title', $title = '加盟服务商')

@section('content')
  <div>
    <v-pages-join inline-template>
      <div>
        <div id="fullgage">
          <div class="section section1">
            <div class="title join-title animated fadeInDown">
{{--              <h3>代理加盟&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;财富看得见</h3>--}}
              <h3>招商加盟</h3>
            </div>
            <div class="join">
              {{--<div class="join-title">
                <p>招商加盟</p>
              </div>--}}
              <div class="join-table">
                <i-form ref="formValidate" :model="formValidate" :rules="ruleValidate" label-position="left"
                        :label-width="100">
                  <form-item label="姓 名:" prop="name">
                    <i-input v-model="formValidate.name" clearable></i-input>
                  </form-item>
                  <form-item label="电 话:" prop="mobile">
                    <i-input v-model="formValidate.mobile" clearable></i-input>
                  </form-item>
                  <form-item>
                    <i-button type="primary" :loading="loading" @click="handleSubmit">提交</i-button>
                  </form-item>
                </i-form>
              </div>
              <img src="{{ url('images/join/join.png') }}">
            </div>
            <div class="ft d-none d-md-block d-lg-block d-xl-block">
              <img src="{{ url('images/scroll.png') }}">
            </div>
          </div>
          <div class="section section2">
            <div class="tip">
              <img src="{{ url('images/root/pre.png') }}">
              <span class="title">十一维度“VR+”服务内容</span>
              <img src="{{ url('images/root/next.png') }}">
              <div class="container pt-1 pt-sm-3">
                <div class="row vip">
                  <table class="table table-bordered table-striped table-dark">
                    <thead>
                    <tr>
                      <th scope="col">服务内容</th>
                      <th scope="col">价格</th>
                      <th scope="col">
                        基础版<br>
                        <span>39800元/年</span>
                      </th>
                      <th scope="col">
                        高级版<br>
                        <span>99800元/年</span>
                      </th>
                      <th scope="col">
                        分公司<br>
                        <span>500000元/年</span>
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <th scope="row">全景编辑器</th>
                      <td></td>
                      <td>1套</td>
                      <td>5套</td>
                      <td>10套</td>
                    </tr>
                    <tr>
                      <th scope="row">环物编辑器</th>
                      <td></td>
                      <td>1套</td>
                      <td>5套</td>
                      <td>10套</td>
                    </tr>
                    <tr>
                      <th scope="row">造物编辑器</th>
                      <td></td>
                      <td>1套</td>
                      <td>5套</td>
                      <td>10套</td>
                    </tr>
                    <tr>
                      <th scope="row">切片编辑器</th>
                      <td></td>
                      <td>1套</td>
                      <td>5套</td>
                      <td>10套</td>
                    </tr>
                    <tr>
                      <th scope="row">数据外嵌</th>
                      <td>200元/年</td>
                      <td>20个</td>
                      <td>100个</td>
                      <td>不限</td>
                    </tr>
                    <tr>
                      <th scope="row">API接口</th>
                      <td></td>
                      <td>无</td>
                      <td>有</td>
                      <td>有</td>
                    </tr>
                    <tr>
                      <th scope="row">云空间</th>
                      <td>20元/年</td>
                      <td>20G</td>
                      <td>100G</td>
                      <td>不限</td>
                    </tr>
                    <tr>
                      <th scope="row">独立域名</th>
                      <td></td>
                      <td>无</td>
                      <td>开放</td>
                      <td>开放</td>
                    </tr>
                    <tr>
                      <th scope="row">自定义LOGO</th>
                      <td>50元/个</td>
                      <td>20个</td>
                      <td>100个</td>
                      <td>不限</td>
                    </tr>
                    <tr>
                      <th scope="row">数据加密</th>
                      <td>20元/个</td>
                      <td>20个</td>
                      <td>100个</td>
                      <td>不限</td>
                    </tr>
                    <tr>
                      <th scope="row">素材</th>
                      <td></td>
                      <td>50套</td>
                      <td>不限</td>
                      <td>不限</td>
                    </tr>
                    <tr>
                      <th scope="row">社交分享</th>
                      <td></td>
                      <td>有</td>
                      <td>有</td>
                      <td>有</td>
                    </tr>
                    <tr>
                      <th scope="row">培训课程</th>
                      <td></td>
                      <td>免费</td>
                      <td>免费</td>
                      <td>免费</td>
                    </tr>
                    <tr>
                      <th scope="row">线下培训</th>
                      <td></td>
                      <td>不限</td>
                      <td>不限</td>
                      <td>不限</td>
                    </tr>
                    <tr>
                      <th scope="row">驻地培训</th>
                      <td></td>
                      <td>无</td>
                      <td>1次/月</td>
                      <td>不限</td>
                    </tr>
                    <tr>
                      <th scope="row">派单</th>
                      <td></td>
                      <td>无</td>
                      <td>有</td>
                      <td>有</td>
                    </tr>
                    <tr>
                      <th scope="row">版权产品净利润</th>
                      <td></td>
                      <td>30%</td>
                      <td>50%</td>
                      <td>按占资比例</td>
                    </tr>
                    <tr>
                      <th scope="row">项目竞标支持</th>
                      <td></td>
                      <td>有</td>
                      <td>有</td>
                      <td>全力支持</td>
                    </tr>
                    <tr>
                      <th scope="row">项目净利润</th>
                      <td></td>
                      <td>30%</td>
                      <td>50%</td>
                      <td>按占资比例</td>
                    </tr>
                    <tr>
                      <th scope="row">费用核销</th>
                      <td></td>
                      <td>无</td>
                      <td>无</td>
                      <td>有</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="section section3">
            <div class="tip partner">
              <img src="{{ url('images/root/pre.png') }}">
              <span class="title">合作商</span>
              <img src="{{ url('images/root/next.png') }}">
            </div>

            <div class="container partner-img text-left">
              <div class="base-wrapper" style="position: relative;">
                <img class="base-img" src="{{ url('images/join/wall/ph01.png') }}">
                <img class="adsorb-img adsorb-img-1" src="{{ url('images/join/wall/ph02.png') }}">
                <img class="adsorb-img adsorb-img-2" src="{{ url('images/join/wall/ph10.png') }}">
                <img class="adsorb-img adsorb-img-3" src="{{ url('images/join/wall/ph14.png') }}">
                <img class="adsorb-img adsorb-img-4" src="{{ url('images/join/wall/ph07.png') }}">
                <img class="adsorb-img adsorb-img-5" src="{{ url('images/join/wall/ph03.png') }}">
                <img class="adsorb-img adsorb-img-6" src="{{ url('images/join/wall/ph11.png') }}">
                <img class="adsorb-img adsorb-img-7" src="{{ url('images/join/wall/ph15.png') }}">
                <img class="adsorb-img adsorb-img-8" src="{{ url('images/join/wall/ph08.png') }}">
                <img class="adsorb-img adsorb-img-9" src="{{ url('images/join/wall/ph04.png') }}">
                <img class="adsorb-img adsorb-img-10" src="{{ url('images/join/wall/ph16.png') }}">
                <img class="adsorb-img adsorb-img-11" src="{{ url('images/join/wall/ph12.png') }}">
                <img class="adsorb-img adsorb-img-12" src="{{ url('images/join/wall/ph09.png') }}">
                <img class="adsorb-img adsorb-img-13" src="{{ url('images/join/wall/ph17.png') }}">
                <img class="adsorb-img adsorb-img-14" src="{{ url('images/join/wall/ph05.png') }}">
                <img class="adsorb-img adsorb-img-15" src="{{ url('images/join/wall/ph06.png') }}">
                <img class="adsorb-img adsorb-img-16" src="{{ url('images/join/wall/ph13.png') }}">
              </div>
            </div>

            {{-- <div class="wall">
              <div class="container  pt-2 px-5">
                <div class="row">
                  <div class="col-sm-20">
                    <img src="{{ url('images/join/wall/ph01.png') }}">
                  </div>
                  <div class="col-sm-40">
                    <div class="row">
                      <div class="col-sm-15" style="margin-left: -110px;margin-top: -10px">
                        <img src="{{ url('images/join/wall/ph02.png') }}">
                      </div>
                      <div class="col-sm-15" style="margin-left: -10px;margin-top: -10px">
                        <img src="{{ url('images/join/wall/ph03.png') }}">
                      </div>
                      <div class="col-sm-15" style="margin-left: -10px;margin-top: -10px">
                        <img src="{{ url('images/join/wall/ph04.png') }}">
                      </div>
                      <div class="col-sm-15" style="margin-left: -10px;margin-top: -10px">
                        <img src="{{ url('images/join/wall/ph05.png') }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-15" style="margin-left: 0px;margin-top: -95px">
                        <img src="{{ url('images/join/wall/ph07.png') }}">
                      </div>
                      <div class="col-sm-15" style="margin-left: -10px;margin-top: -95px">
                        <img src="{{ url('images/join/wall/ph08.png') }}">
                      </div>
                      <div class="col-sm-15" style="margin-left: -10px;margin-top: -95px">
                        <img src="{{ url('images/join/wall/ph09.png') }}">
                      </div>
                      <div class="col-sm-15" style="margin-left: -10px;margin-top: -95px">
                        <img src="{{ url('images/join/wall/ph06.png') }}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-2" style="margin-left: 350px;margin-top: -210px">
                    <img src="{{ url('images/join/wall/ph10.png') }}">
                  </div>
                  <div class="col-sm-10" style="margin-left: -10px;margin-top: -210px">
                    <img src="{{ url('images/join/wall/ph11.png') }}">
                  </div>
                  <div class="col-sm-10" style="margin-left: 0px;margin-top: -210px">
                    <img src="{{ url('images/join/wall/ph12.png') }}">
                  </div>
                  <div class="col-sm-10" style="margin-left: -10px;margin-top: -210px">
                    <img src="{{ url('images/join/wall/ph13.png') }}">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-2" style="margin-left: 230px;margin-top: -100px">
                    <img src="{{ url('images/join/wall/ph14.png') }}">
                  </div>
                  <div class="col-sm-10" style="margin-left: 0px;margin-top: -100px">
                    <img src="{{ url('images/join/wall/ph15.png') }}">
                  </div>
                  <div class="col-sm-10" style="margin-left: -10px;margin-top: -100px">
                    <img src="{{ url('images/join/wall/ph16.png') }}">
                  </div>
                  <div class="col-sm-10" style="margin-left: 0px;margin-top: -100px">
                    <img src="{{ url('images/join/wall/ph17.png') }}">
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
          <div class="section section-footer fp-auto-height" id="second-last">
            <div id="footer-text">
              <h3 class="mx-2">十一维度（厦门）网络科技有限公司 厦门市翔安区新店镇鸿翔西路1888号1#15 TEL：13799840800</h3>
              <h3>
                ©{{ now()->format('Y') }} All rights reserved
                <a href="http://www.beian.miit.gov.cn">
                  闽ICP备15001200号
                </a>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </v-pages-join>
  </div>
@endsection
