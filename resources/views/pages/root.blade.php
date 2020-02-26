@extends('layouts.app')

@section('title', $title = '首页')

@section('content')
  <v-pages-root inline-template>
    <div>
      <div id="fullgage">
        <div class="section section1">
          <div class="root-main">
            <div class="row align-items-center justify-content-center h-100">
              <div class="col-60 title animated pulse">
                <h3>VR+ <br>一站式创作服务平台</h3>
                <p>十一维度 “VR+”平台，集压缩、动画、美化于一体，覆盖商业、旅游、教育等产业，通过4+1人才培养<br>体系，以及专业的市场服务与支持，为VR行业打造一站式创作服务平台。</p>
              </div>
              <div class="col-60 ft">
                <img src="{{ url('images/scroll.png') }}">
              </div>
              <div class="col-60 logo">
                <img src="{{ url('images/root/logo.gif') }}">
              </div>
            </div>
          </div>
        </div>
        <div class="section section2">
          <div class="qr-code-wrapper">
            <div class="row align-items-center justify-content-center h-100">
              <div class="col-40 col-md-30 col-lg-20 col-xl-18">
                <div class="qr-list">
                  <img class="w-100" src="{{ asset('images/root/bg04.png') }}">
                  <img :style="margin" :src="src" :key="src" class="qr-card">
                </div>
              </div>
            </div>
            <div
              class="box cp"
              :class="v.class"
              v-for="(v, k) in list"
              :key="k"
              @mouseover="changeSrc(k)">
              <div class="box-tip">
                <img :src="v.src" :key="v.src">
                <p>@{{ v.title }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="section section3">
          <div class="tip">
            <img src="{{ url('images/root/pre.png') }}">
            <span class="title">领导关怀</span>
            <img src="{{ url('images/root/next.png') }}">
          </div>
          <div class="container pt-2 px-5">
            <div class="row">
              <div class="col-60 col-sm-28">
                <img class="w-100 pic" src="{{ url('images/root/wall/ph01.png') }}" title="中宣部輿情局局长李晓军">
              </div>
              <div class="col-60 col-sm-32">
                <div class="row">
                  <div class="col">
                    <img class="w-100 pic" src="{{ url('images/root/wall/ph02.png') }}" title="山东省副省长王随莲">
                  </div>
                  <div class="col">
                    <img class="w-100 pic" src="{{ url('images/root/wall/ph03.png') }}" title="厦门委常委、宣传部长叶重根">
                  </div>
                  <div class="col">
                    <img class="w-100 pic" src="{{ url('images/root/wall/ph04.png') }}" title="上海市委常委、统战部长沙海林">
                  </div>
                </div>
                <div class="row wall-part-one">
                  <div class="col">
                    <img class="w-100 pic" src="{{ url('images/root/wall/ph05.png') }}" title="市委组织部部委会成员、市委非公企业和社会组织工委副书记">
                  </div>
                  <div class="col">
                    <img class="w-100 pic" src="{{ url('images/root/wall/ph06.png') }}" title="翔安区区长胡胜">
                  </div>
                  <div class="col">
                    <img class="w-100 pic" src="{{ url('images/root/wall/ph07.png') }}" title="厦门市委宣传部副部长戴志望">
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin-top: 15px;">
              <div class="col-30 col-sm-11">
                <img class="w-100 pic" src="{{ url('images/root/wall/ph08.png') }}" title="福建省委常委、宣传部长高翔">
              </div>
              <div class="col-30 col-sm-22">
                <div class="row">
                  <div class="col">
                    <img class="w-100 pic" src="{{ url('images/root/wall/ph09.png') }}" title="山东省高青县委书记明子春">
                  </div>
                  <div class="col">
                    <img class="w-100 pic" src="{{ url('images/root/wall/ph10.png') }}" title="南平市延平区长赵明正">
                  </div>
                </div>
                <div class="row wall-part-two">
                  <div class="col">
                    <img class="w-100 pic" src="{{ url('images/root/wall/ph11.png') }}" title="上饶市副市长王万征">
                  </div>
                  <div class="col">
                    <img class="w-100 pic" src="{{ url('images/root/wall/ph12.png') }}" title="山东省高青县长杨新胜、人大主任崔玉栋">
                  </div>
                </div>
              </div>
              <div class="col-60 col-sm-27">
                <img class="w-100 pic" src="{{ url('images/root/wall/ph13.png') }}" title="厦门市委书记裴金佳">
              </div>
            </div>
            {{-- <div class="wall">
              <div class="row">
                <div class="col-60 col-sm-30 pic">
                  <img src="{{ url('images/root/wall/ph01.png') }}" title="中宣部輿情局局长李晓军">
                </div>
                <div class="col-60 col-sm-30">
                  <div class="row pt-1 pt-sm-3">
                    <div class="col-20 col-sm-20 pic">
                      <img src="{{ url('images/root/wall/ph02.png') }}" title="山东省副省长王随莲">
                    </div>
                    <div class="col-20 col-sm-20 pic">
                      <img src="{{ url('images/root/wall/ph03.png') }}" title="厦门委常委、宣传部长叶重根">
                    </div>
                    <div class="col-20 col-sm-20 pic">
                      <img src="{{ url('images/root/wall/ph04.png') }}" title="上海市委常委、统战部长沙海林">
                    </div>
                  </div>
                  <div class="row pt-1 pt-sm-5">
                    <div class="col-20 col-sm-20 pic">
                      <img src="{{ url('images/root/wall/ph05.png') }}" title="市委组织部部委会成员、市委非公企业和社会组织工委副书记">
                    </div>
                    <div class="col-20 col-sm-20 pic">
                      <img src="{{ url('images/root/wall/ph06.png') }}" title="翔安区区长胡胜">
                    </div>
                    <div class="col-20 col-sm-20 pic">
                      <img c>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-60 col-sm-30">
                  <div class="row">
                    <div class="col-20 col-sm-20 pt-1 pt-sm-5 pic">
                      <img src="{{ url('images/root/wall/ph08.png') }}" title="福建省委常委、宣传部长高翔">
                    </div>
                    <div class="col-40 col-sm-40">
                      <div class="row pt-1 pt-sm-4">
                        <div class="col-30 col-sm-30 pic">
                          <img src="{{ url('images/root/wall/ph09.png') }}" title="山东省高青县委书记明子春">
                        </div>
                        <div class="col-30 col-sm-30 pic">
                          <img src="{{ url('images/root/wall/ph10.png') }}" title="南平市延平区长赵明正">
                        </div>
                      </div>
                      <div class="row pt-1 pt-sm-5">
                        <div class="col-30 col-sm-30 pic">
                          <img src="{{ url('images/root/wall/ph11.png') }}" title="上饶市副市长王万征">
                        </div>
                        <div class="col-30 col-sm-30 pic">
                          <img src="{{ url('images/root/wall/ph12.png') }}" title="山东省高青县长杨新胜、人大主任崔玉栋">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-60 col-sm-30 pt-1 pic">
                  <img src="{{ url('images/root/wall/ph13.png') }}" title="厦门市委书记裴金佳">
                </div>
              </div>
            </div> --}}
          </div>
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
  </v-pages-root>
@endsection

@push('styles')

@endpush
