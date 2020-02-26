@extends('layouts.app')

@section('title', $title = '服务与支持')

@section('content')
  <div>
    <v-pages-service inline-template>
      <div>
        <div id="fullgage">
          <div class="section section1">
            <div class="architecture-system">
              <div class="row align-items-center justify-content-center h-100">
                <div class="col-60 col-sm-60 col-md-60 col-lg-30 pt-1 pt-sm-5 info">
                  <div class="row introduction animated zoomIn">
                    <div class="col-60">
                      <h3>虚拟现实</h3>
                    </div>
                    <div class="col-60 pt-1 pt-sm-5">
                      <h3>“4+1”实训体系架构</h3>
                    </div>
                    <div class="col-60 pt-1 pt-sm-5">
                      <p>通过4+1人才培养体系，以及专业的市场服务与支持，为VR行业打造的一站式创作服务平台。</p>
                    </div>
                  </div>
                </div>
                <div class="col-60 col-sm-60 col-md-60 col-lg-30 pyramid animated zoomIn">
                  <img src="{{ url('images/service/pyramid.png') }}">
                </div>
                <div class="col-60 ft d-none d-md-block d-lg-block d-xl-block">
                  <img src="{{ url('images/scroll.png') }}">
                </div>
              </div>
            </div>

          </div>
          <div class="section section2">
            <div class="tip">
              <img src="{{ url('images/root/pre.png') }}">
              <span class="title">经典案例展示</span>
              <img src="{{ url('images/root/next.png') }}">
            </div>
            <div class="container cases pt-sm-5 pt-md-5 pt-lg-2">
              <div class="row">
                <div class="col-30 col-sm-12 pt-2 cp" v-for="(v, k) in caseList" :key="k">
                  <a :href="v.url" :key="v.src" target="_blank">
                    <div class="cover-box">
                      <img :src="v.src" :key="v.src">
                    </div>
                  </a>
                  <div class="title">@{{ v.title }}</div>
                </div>
              </div>
            </div>
            <div class="text-center w-100 mt-5 more">
              <a :href="url" target="_blank">
                <div class="more-btn">查看更多</div>
              </a>
            </div>
          </div>
          <div class="section section3">
            <div class="tip">
              <img src="{{ url('images/root/pre.png') }}">
              <span class="title">海量VR数据库</span>
              <img src="{{ url('images/root/next.png') }}">
            </div>
            <div class="container databases pt-sm-5 pt-md-5 pt-lg-2">
              <div class="row">
                <div class="col-30 col-sm-12 pt-2 cp" v-for="(v, k) in list" :key="k">
                  <a :href="v.url" :key="v.src" target="_blank">
                    <div class="cover-box">
                      <img :src="v.src" :key="v.src">
                    </div>
                  </a>
                  <div class="infos">@{{ v.title }}</div>
                </div>
              </div>
            </div>
            <div class="text-center w-100 mt-5 more">
              <a :href="url" target="_blank">
                <div class="more-btn">查看更多</div>
              </a>
            </div>
          </div>
          <div class="section section4">
            <div class="tip">
              <img src="{{ url('images/root/pre.png') }}">
              <span class="title">新闻中心</span>
              <img src="{{ url('images/root/next.png') }}">
            </div>
            <div class="slide">
              <div class="news">
                <div class="container">
                  <div class="row">
                    <div class="col-60 col-sm-20 px-3 py-1"
                         v-for="(v, k) in newsOne" :key="k">
                      <a :href="v.url" target="_blank">
                        <div class="title">@{{ v.title }}</div>
                      </a>
                      <div class="time">
                        <span>
                          <icon type="md-time" size="12"></icon>
                          @{{ v.time }}
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="news">
                <div class="container">
                  <div class="row">
                    <div class="col-60 col-sm-20 px-3 py-1"
                         v-for="(v, k) in newsTwo" :key="k">
                      <a :href="v.url" target="_blank">
                        <div class="title">@{{ v.title }}</div>
                      </a>
                      <div class="time">
                        <span>
                          <icon type="md-time" size="12"></icon>
                          @{{ v.time }}
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section section-footer fp-auto-height" id="second-last">
            <div id="footer-text">
              <h3 class="mx-2">11十一维度（厦门）网络科技有限公司 厦门市翔安区新店镇鸿翔西路1888号1#15 TEL：13799840800</h3>
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
    </v-pages-service>
  </div>
@endsection
