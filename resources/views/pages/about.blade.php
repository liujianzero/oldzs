@extends('layouts.app')

@section('title', $title = '十一维度')

@section('content')
  <div>
    <v-pages-about inline-template>
      <div>
        <div id="fullgage">
          <div class="section section1">
            <div class="core-technology">
              <div class="row align-items-center justify-content-center h-100">
                <div class="col-30 col-sm-30 info-img text-center animated zoomIn">
                  <img src="{{ url('images/about/human.png') }}">
                </div>
                <div class="col-30 col-sm-30 info-font animated slideInRight">
                  <div class="introduction">
                    <h3>创始人简介</h3>
                    <p>余海箭，江西理工大学计算机科学与技术专业。网络虚拟现实（简称WebVR）创始人，虚拟现实内容数据标准制定者。长期专注于WebVR领域的研究，早在2005年就开始从事VR系统的研发，拥有多年VR项目开发实战经验，前高德产品经理。</p>
                    <p class="pt-2">任职：</p>
                    <p>
                      中科虚拟现实产业技术研究院执行院长<br>
                      中国大数据健康产业工作委员会副主任<br>
                      中共福建省厦门市翔安区第四届政协委员<br>
                      厦门市双百计划高层次引进人才领军人物<br>
                      厦门市经济和信息化局信息服务评审专家<br>
                      厦门市民主建国会科创支部科创支委<br>
                      厦门市虚拟与增强现实产业协会会长<br>
                      厦门市翔安区企业与工商联协会副主席<br>
                      厦门市人社局职业技能培训总站特聘讲师<br>
                      厦门市理工学院文化与旅游学院特聘讲师<br>
                      厦门市工学院艺术学院兼职教授
                    </p>
                    <p class="pt-2">学术成就</p>
                    <p>
                      主编十三五规划教材《虚拟现实实用教程》<br>
                      发表SIC论文《虚拟现实和混合现实中全局光照组合算法探析》<br>
                      发表虚拟现实（VR）技术在材料学科教学及新工科建设中的应用<br>
                      拟定国家标准《电子商务信息描述艺术品》<br>
                      发表未来媒体蓝皮书《VR/AR内容产业发展报告》
                    </p>
                  </div>
                </div>
                <div class="col-60 ft d-none d-md-block d-lg-block d-xl-block">
                    <img src="{{ url('images/scroll.png') }}">
                </div>
              </div>
            </div>
          </div>
          <div class="section section2">
            {{--<div class="tip">
              <img src="{{ url('images/root/pre.png') }}">
              <span class="title">核心技术</span>
              <img src="{{ url('images/root/next.png') }}">
            </div>--}}
            <div class="core-technology">
              <div class="row align-items-center justify-content-center h-100">
                <div class="col-40 col-md-30 col-lg-20 col-xl-18">
                  <div class="skill">
                    <img class="" src="{{ url('images/about/skill.png') }}">
                  </div>
                </div>
              </div>
              <div
                class="cir cp"
                :class="v.class"
                v-for="(v, k) in cirList"
                :key="k">
                <div class="cir-tip">
                  <img src="{{ url('images/about/circle.png') }}">
                  <p>@{{ v.title }}</p>
                </div>
              </div>
              <div
                class="rect cp"
                :class="v.class"
                v-for="(v, k) in rectList"
                :key="k">
                <div class="rect-tip">
                  <img src="{{ url('images/about/rectangle.png') }}">
                  <p>@{{ v.title }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="section section3">
            <div class="tip">
              <img src="{{ url('images/root/pre.png') }}">
              <span class="title">发展历程</span>
              <img src="{{ url('images/root/next.png') }}">
            </div>
            <div class="bg">
              <img src="{{ url('images/about/event.png') }}">
            </div>
          </div>
          <div class="section section4">
            <div class="tip">
              <img src="{{ url('images/root/pre.png') }}">
              <span class="title">科研成果</span>
              <img src="{{ url('images/root/next.png') }}">
            </div>
            <div class="cases">
              <div class="container-fluid cases-tip">
                <div class="row justify-content-around pt-3">
                  <div class="col-sm-20">
                    <span>厦门市科技局项目：WebVR众创服务平台</span>
                  </div>
                  <div class="col-sm-20">
                    <span>虚拟现实在线文物展示系统（甘肃省、青海省博物馆数据库）</span>
                  </div>
                </div>
                <div class="row justify-content-around pt-3">
                  <div class="col-sm-20">
                    <span class="cp">厦门市宣传部项目，厦门大学革命史馆</span>
                  </div>
                  <div class="col-sm-20">
                    <span>上饶市乡村秀美项目：乡稼轩岩前村数字乡村</span>
                  </div>
                </div>
                <div class="row justify-content-between pt-3">
                  <div class="col-sm-20">
                    <span class="cp">厦门大学教学项目，国家级红树林虚拟仿真教育系统</span>
                  </div>
                  <div class="col-sm-20">
                    <span>首次采用WebVR展示系统对“翔安区创意之星（伴手礼主题）评选活动”进行网上投票</span>
                  </div>
                </div>
                <div class="row justify-content-between pt-5">
                  <div class="col-sm-20">
                    <span class="cp">龙岩市招商局项目：龙岩虚拟现实永不招商落幕馆</span>
                  </div>
                  <div class="col-sm-20">
                    <span>与厦门大学生命科学院联合开发的漳江口红树林植物学实习虚拟仿真项目入 选国家级虚拟仿真项目</span>
                  </div>
                </div>
                <div class="row justify-content-around pt-3">
                  <div class="col-sm-20">
                    <span class="cp">龙岩学院宣传部项目：龙岩学院虚拟现实校史馆</span>
                  </div>
                  <div class="col-sm-20">
                    <span>与河南中博健康科技有限公司共同合作开发【真实解剖云平台系统】</span>
                  </div>
                </div>
                <div class="row justify-content-around pt-3">
                  <div class="col-sm-20">
                    <span class="cp">联合厦门大学撰写《虚拟现实实用教程》培训教材</span>
                  </div>
                  <div class="col-sm-20">
                    <span>与厦门理工学院联合开发【原电池电动势的测定及其应用“虚拟仿真实验”】</span>
                  </div>
                </div>
              </div>
              <img src="{{ url('images/about/case01.png') }}">
            </div>
          </div>
          <div class="section section5">
            <div class="tip">
              <img src="{{ url('images/root/pre.png') }}">
              <span class="title">荣誉与资质</span>
              <img src="{{ url('images/root/next.png') }}">
            </div>
            <div class="honor">
              <img src="{{ url('images/about/honor.png') }}">
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
    </v-pages-about>
  </div>
@endsection
