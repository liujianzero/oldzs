Vue.component('v-pages-root', {
  props: [],
  data() {
    return {
      src: '',
      list: [
        {
          title: 'VR + 仿真教育',
          src: '/images/root/box/box01.png',
          url: '/images/root/card/card01.png',
          class: 'box1',
        },
        {
          title: 'VR + 数字文博',
          src: '/images/root/box/box03.png',
          url: '/images/root/card/card02.png',
          class: 'box2',
        },
        {
          title: 'VR + 文化旅游',
          src: '/images/root/box/box03.png',
          url: '/images/root/card/card03.png',
          class: 'box3',
        },
        {
          title: 'VR + 互动展览',
          src: '/images/root/box/box01.png',
          url: '/images/root/card/card04.png',
          class: 'box4',
        },
        {
          title: 'VR + 电子商务',
          src: '/images/root/box/box02.png',
          url: '/images/root/card/card05.png',
          class: 'box5',
        },
        {
          title: 'VR + 个性定制',
          src: '/images/root/box/box03.png',
          url: '/images/root/card/card06.png',
          class: 'box6',
        },
        {
          title: 'VR + 广告营销',
          src: '/images/root/box/box02.png',
          url: '/images/root/card/card07.png',
          class: 'box7',
        },
        {
          title: 'VR + 艺术欣赏',
          src: '/images/root/box/box03.png',
          url: '/images/root/card/card08.png',
          class: 'box8',
        },
      ],
      width: 0,
      height: 0,
    }
  },
  computed: {
    margin() {
      return {
        'margin-top': `-${this.height / 2}px`,
        'margin-left': `-${this.width / 2}px`,
      }
    }
  },
  mounted() {
    $('#fullgage').fullpage({
      anchors: ['section1', 'section2', 'section3', 'footer'],
      'navigation': true,
      verticalCentered: false,
      afterLoad: (anchorLink, index) => {
        if (index == '1') {
          $('.title').addClass('animated pulse');
        }
        if (index == '2') {
          $('.box1').addClass('animated lightSpeedIn');
          $('.box2').addClass('animated fadeInDown');
          $('.box3').addClass('animated fadeInDown');
          $('.box4').addClass('animated fadeInDown');
          $('.box5').addClass('animated lightSpeedIn');
          $('.box6').addClass('animated fadeInDown');
          $('.box7').addClass('animated fadeInDown');
          $('.box8').addClass('animated fadeInDown');

          this.updateQrCardSize()
        }
        if (index == '3') {
          $('.pic').addClass('animated zoomIn');

          this.adjustHeight($('.wall-part-one'));

          this.adjustHeight($('.wall-part-two'));
        }
      },
      onLeave: (index, direction) => {
        if (index == '1') {
          $('.title').removeClass('animated pulse');
        }
        if (index == '2') {
          $('.box1').removeClass('animated lightSpeedIn');
          $('.box2').removeClass('animated fadeInDown');
          $('.box3').removeClass('animated fadeInDown');
          $('.box4').removeClass('animated fadeInDown');
          $('.box5').removeClass('animated lightSpeedIn');
          $('.box6').removeClass('animated fadeInDown');
          $('.box7').removeClass('animated fadeInDown');
          $('.box8').removeClass('animated fadeInDown');

        }
        if (index == '3') {
          $('.pic').removeClass('animated zoomIn');
        }
      }
    });

    this.changeSrc();

    this.updateRootMainHeight();

    this.updateQrCodeWrapperHeight();

    $(window).resize(() => {
      this.updateRootMainHeight();

      this.updateQrCodeWrapperHeight();

      this.updateQrCardSize()
    })
  },
  methods: {
    changeSrc(k = 0) {
      this.src = this.list[k].url
    },
    updateRootMainHeight() {
      $('.root-main').css({
          'height': $(window).height() + 'px',
          'padding-top': $('.header').height() + 'px'
      })
    },
    updateQrCodeWrapperHeight() {
      $('.qr-code-wrapper').css({
        'height': $(window).height() + 'px',
        'padding-top': $('.header').height() + 'px'
      })
    },
    updateQrCardSize() {
      const el = $('.qr-card')

      this.height = el.height()
      this.width = el.width()
    },
    adjustHeight(wallPartOne) {
      let height = wallPartOne.parent().height() - wallPartOne.height() * 2;

      height = height > 0 ? height : 0;

      wallPartOne.css({
        'margin-top': height + 'px'
      })
    }
  }

});

Vue.component('v-pages-about', {
  props: [],
  data() {
    return {
      cirList: [
        {
          title: '压缩',
          class: 'cir1',
        },
        {
          title: '美化',
          class: 'cir2',
        },
        {
          title: '动画',
          class: 'cir3',
        },
        {
          title: '交互',
          class: 'cir4',
        },
        {
          title: '打印',
          class: 'cir5',
        },
        {
          title: '支持',
          class: 'cir6',
        },
        {
          title: '兼容',
          class: 'cir7',
        },
      ],
      rectList: [
        {
          title: '采用三维数据压缩算法，将VR数据无损缩小65倍以上',
          class: 'rect1',
        },
        {
          title: '傻瓜式美化VR数据，无需编辑代码均可实现高仿真效果',
          class: 'rect2',
        },
        {
          title: '通过动画编辑，可以更多的动画原理来展示商品结构',
          class: 'rect3',
        },
        {
          title: '无需下载，支持自动切片，快速3D云打印',
          class: 'rect4',
        },
        {
          title: '无需下载，支持自动切片，快速3D云打印',
          class: 'rect5',
        },
        {
          title: '低成本、高效率快速生成在线VR及AR展示内容',
          class: 'rect6',
        },
        {
          title: '采用国际H5的WebGL标准，实现跨平台展示',
          class: 'rect7',
        },

      ],
    }
  },
  mounted() {
    $(function () {
      $('#fullgage').fullpage({
        anchors: ['section1', 'section2', 'section3', 'section4', 'section5', 'footer'],
        'navigation': true,
        verticalCentered: false,
        afterLoad: function (anchorLink, index) {
          if (index == '1') {
            $('.info-img').addClass('animated zoomIn');
            $('.info-font').addClass('animated slideInRight');
          }
          if (index == '2') {
            $('.cir').addClass('animated zoomIn');
            $('.rect').addClass('animated zoomInRight');
            $('.skill').addClass('animated rubberBand');
          }
          if (index == '3') {
            $('.bg').addClass('animated zoomIn');
          }
          if (index == '4') {
            $('.cases-tip span').addClass('animated rotateIn');
            $('.cases img').addClass('animated rubberBand');
          }
          if (index == '5') {
            $('.honor').addClass('animated zoomIn');
          }
        },
        onLeave: function (index, direction) {
          if (index == '1') {
            $('.info-img').removeClass('animated zoomIn');
            $('.info-font').removeClass('animated slideInRight');
          }
          if (index == '2') {
            $('.cir').removeClass('animated zoomIn');
            $('.rect').removeClass('animated zoomInRight');
            $('.skill').removeClass('animated rubberBand');
          }
          if (index == '3') {
            $('.bg').removeClass('animated zoomIn');
          }
          if (index == '4') {
            $('.cases-tip span').removeClass('animated rotateIn');
            $('.cases img').removeClass('animated rubberBand');
          }
          if (index == '5') {
            $('.honor').removeClass('animated zoomIn');
          }
        }
      });
    });

    this.updateCoreTechnologyHeight()

    $(window).resize(() => {
      this.updateCoreTechnologyHeight()
    })
  },
  methods: {
    updateCoreTechnologyHeight() {
      $('.core-technology').css({
        'height': $(window).height() + 'px',
        'padding-top': $('.header').height() + 'px'
      })
    },
  }
});

Vue.component('v-pages-join', {
  props: [],
  data() {
    return {
      loading: false,
      formValidate: {
        name: '',
        mobile: '',
      },
      ruleValidate: {
        name: { required: true, message: '请输入 姓名', trigger: 'change' },
        mobile: { required: true, message: '请输入 电话', trigger: 'change' },
      }
    }
  },
  mounted() {
    $(() => {
      $('#fullgage').fullpage({
        anchors: ['section1', 'section2', 'section3', 'footer'],
        'navigation': true,
        verticalCentered: false,
        afterLoad: (anchorLink, index) => {
          if (index == '1') {
            $('.join-title').addClass('animated fadeInDown');
          }
          if (index == '3') {
            $('.base-wrapper img').addClass('animated zoomIn');

            this.calculationImgWidth()
          }
        },
        onLeave: (index, direction) => {
          if (index == '1') {
            $('.join-title').removeClass('animated fadeInDown');
          }
          if (index == '3') {
            $('.wall img').removeClass('animated zoomIn');
          }
        }
      });
    });
  },
  methods: {
    handleSubmit() {
      let name = 'formValidate';

      this.$refs[name].validate((valid) => {
        if (valid) {
          this.loading = true;

          axios.post('/join/addJoin', this.formValidate).then(response => {
            this.loading = false;
            this.$Message.success({
              content: '提交成功',
              background: true,
            });
            window.location.reload();
          }).catch(error => {
            this.loading = false;
          });
        }
      });
    },
    calculationImgWidth() {
      let width = $('.base-img').width(),
        halfWidth = width / 2,
        fourWidth = width / 4,
        spacing = 10;

      $('.adsorb-img').css({
        position: 'absolute',
        width: halfWidth + 'px'
      });

      $('.adsorb-img-1').css({
        top: (0 - spacing) + 'px',
        left: (width - fourWidth + spacing) + 'px'
      });

      $('.adsorb-img-2').css({
        bottom: (0 - spacing) + 'px',
        left: (width - fourWidth + spacing) + 'px'
      });

      $('.adsorb-img-3').css({
        bottom: (0 - fourWidth - spacing * 2) + 'px',
        left: halfWidth + 'px'
      });

      $('.adsorb-img-4').css({
        top: fourWidth + 'px',
        left: (width + spacing * 2) + 'px'
      });

      $('.adsorb-img-5').css({
        top: (0 - spacing) + 'px',
        left: (width + fourWidth + spacing * 3) + 'px'
      });

      $('.adsorb-img-6').css({
        top: (halfWidth + spacing) + 'px',
        left: (width + fourWidth + spacing * 3) + 'px'
      });

      $('.adsorb-img-7').css({
        bottom: (0 - fourWidth - spacing * 2) + 'px',
        left: (width + spacing * 2) + 'px'
      });

      $('.adsorb-img-8').css({
        top: fourWidth + 'px',
        left: (width + halfWidth + spacing * 4) + 'px'
      });

      $('.adsorb-img-9').css({
        top: (0 - spacing) + 'px',
        left: (width + halfWidth + fourWidth + spacing * 5) + 'px'
      });

      $('.adsorb-img-10').css({
        bottom: (0 - fourWidth - spacing * 2) + 'px',
        left: (width + halfWidth + spacing * 4) + 'px'
      });

      $('.adsorb-img-11').css({
        top: (halfWidth + spacing) + 'px',
        left: (width + halfWidth + fourWidth + spacing * 5) + 'px'
      });

      $('.adsorb-img-12').css({
        top: fourWidth + 'px',
        left: (width * 2 + spacing * 6) + 'px'
      });

      $('.adsorb-img-13').css({
        bottom: (0 - fourWidth - spacing * 2) + 'px',
        left: (width * 2 + spacing * 6) + 'px'
      });

      $('.adsorb-img-14').css({
        top: (0 - spacing) + 'px',
        left: (width * 2 + fourWidth + spacing * 7) + 'px'
      });

      $('.adsorb-img-15').css({
        top: fourWidth + 'px',
        left: (width * 2 + halfWidth + spacing * 8) + 'px'
      });

      $('.adsorb-img-16').css({
        top: (halfWidth + spacing) + 'px',
        left: (width * 2 + fourWidth + spacing * 7) + 'px'
      });
    },
  }
});

Vue.component('v-pages-service', {
  props: [],
  data() {
    return {
      url: 'https://www.11dom.com/cases',
      caseList: [
        {
          title: '"VR+" 仿真教育',
          src: '/images/service/cases/case01.png',
          url: 'https://ncz.11dom.com/',
        },
        {
          title: '"VR+" 文化旅游',
          src: '/images/service/cases/case02.png',
          url: 'https://case.11dom.com/yq/#kart',
        },
        {
          title: '"VR+" 物联控制',
          src: '/images/service/cases/case03.png',
          url: 'https://ktnh.11dom.com/',
        },
        {
          title: '"VR+" 电子商务',
          src: '/images/service/cases/case04.png',
          url: 'https://case.11dom.com/suitDiy/',
        },
        {
          title: '"VR+" 个性定制',
          src: '/images/service/cases/case05.png',
          url: 'https://case.11dom.com/changan/app.html',
        },
        {
          title: '"VR+" 互动展览',
          src: '/images/service/cases/case06.png',
          url: 'https://case.11dom.com/deren/?m=deren&from=singlemessage',
        },
        {
          title: '"VR+" 数字文博',
          src: '/images/service/cases/case07.png',
          url: 'https://www.11dom.com/users/7mlOg5vpKB2ad847og4qxkAyQDN10XME',
        },
        {
          title: '"VR+" 广告营销',
          src: '/images/service/cases/case08.png',
          url: 'https://www.11dom.com/case/moto/test.html',
        },
        {
          title: '"VR+" 医疗学习',
          src: '/images/service/cases/case09.png',
          url: 'https://case.11dom.com/qxs/',
        },
        {
          title: '"VR+" 个性定制',
          src: '/images/service/cases/case10.png',
          url: 'https://www.11dom.com/cases',
        }
      ],
      list: [
        {
          title: '铜奔马',
          src: '/images/service/databases/case01.png',
          url: 'https://www.11dom.com/view-1VPn3KoBLNv6W0g6QROMdwrRjQlq7e5z',
        },
        {
          title: '彩绘木独角兽',
          src: '/images/service/databases/case02.png',
          url: 'https://www.11dom.com/view-YwQ7zMo59ExLe8Q2AjZpNjA1kR3mBD4W',
        },
        {
          title: '老塞咖啡-厦门宝嘉誉峰店',
          src: '/images/service/databases/case03.jpg',
          url: 'https://www.11dom.com/view-MXgyox5n3A4Wb8dApBZLpJkm7GENez2Q',
        },
        {
          title: '天成花园-美式轻奢',
          src: '/images/service/databases/case04.jpg',
          url: 'https://www.11dom.com/view-jG7DzexElAoX4ZpVx30npbRVQ1JL5wYN',
        },
        {
          title: '福州软木画-苍松寿古',
          src: '/images/service/databases/case05.jpg',
          url: 'https://www.11dom.com/view-zkpNRVxMWPX7289a6j8G6qB9jgDQLbdY',
        },
        {
          title: '阆中华光楼',
          src: '/images/service/databases/case06.png',
          url: 'https://www.11dom.com/view-wMYrpklKdAWbqZaY6YZRjBa6vXLg5324',
        },
        {
          title: '宋三彩舞蹈佣',
          src: '/images/service/databases/case07.png',
          url: 'https://www.11dom.com/view-zoGP9K5jkVp1r0x5wK8WNEAlQ7bxqnyX',
        },
        {
          title: '六朝青瓷盘口壶',
          src: '/images/service/databases/case08.png',
          url: 'https://www.11dom.com/view-oXeQ3jVwlJWrb8GB1v05Gv7Bz4nE9Mpq',
        },
        {
          title: '春秋前期虎纹铜钺',
          src: '/images/service/databases/case09.png',
          url: 'https://www.11dom.com/view-1VPn3KoBLNv6W0gavqZMdwrRjQlq7e5z',
        },
        {
          title: '宋影青瓷荷口划花瓶',
          src: '/images/service/databases/case10.png',
          url: 'https://www.11dom.com/view-jG7DzexElAoX4ZpVrw0npbRVQ1JL5wYN',
        }
      ],
      newsOneList: [
          {
              title: '十一维度.WebVR内容众创分享平台，中国鞋都电商创业园 专场研讨会',
              url: 'https://mp.weixin.qq.com/s/QOeLgDLW8CZLgeDB1vOnyg',
              time: '2017-03-29',
          },
          {
              title: '江西上饶师范学院考察十一维度',
              url: 'https://mp.weixin.qq.com/s/HSkBjXiHO9EN2RsFz4Jo1w',
              time: '2017-08-26',
          },
          {
              title: '市政协民建界别小组视察VR产业',
              url: 'https://mp.weixin.qq.com/s/X21HP7o7Oit3dhBKf9NM8A',
              time: '2017-08-26',
          },
          {
              title: '厦门市委组织部走访双百企业',
              url: 'https://mp.weixin.qq.com/s/Ry3ua_Hd9AWOJKCNMkbOog',
              time: '2017-10-18',
          },
          {
              title: '虚拟世界的追梦人（铅山电视台）',
              url: 'https://mp.weixin.qq.com/s/oPl94O5jgKU2iOdmxLLEeA',
              time: '2018-04-28',
          },
          {
              title: '十一维度将联合肇庆仁泽教育和畅景数字共同举办“肇庆市2018智能建模实训分享会',
              url: 'https://mp.weixin.qq.com/s/teNT2zmxk7JoCGGjoH3n6A',
              time: '2018-07-05 ',
          },
          {
              title: '十一维度热烈欢迎南平市延平区政府领导到访',
              url: 'https://mp.weixin.qq.com/s/f4I9PxW_iIkNCLVT7kPyYA',
              time: '2018-07-11',
          },
          {
              title: '十一维度（厦门）网络科技有限公司控股分公司山东九维度网络科技有限公司，携手乐豆科技共访鲁泰纺织',
              url: 'https://mp.weixin.qq.com/s/tHM7fXWs81f8drcSSnQDLA',
              time: '2018-07-17',
          },
          {
              title: '十一维度当选中国智慧健康产业联盟大数据健康产业工作委员会副主任单位',
              url: 'https://mp.weixin.qq.com/s/D61ifTSKJ4thNHYrIFgtWg',
              time: '2018-08-14',
          },
          {
              title: '非洲国家科特迪瓦重要贵宾莅临十一维度（厦门）网络科技有限公司参观',
              url: 'https://mp.weixin.qq.com/s/SGCVYFoBhYtHsgyxK_jJ3g',
              time: '2018-09-06',
          },
          {
              title: '十一维度热情接待中非合作论坛第二批中非贸易和投资考察团',
              url: 'https://mp.weixin.qq.com/s/_TBL_vowGV7HRsFIa05fhQ',
              time: '2018-09-13',
          },
          {
              title: '国家虚拟仿真实验室-漳江口红树林植物学实习虚拟仿真项目操作指南',
              url: 'https://mp.weixin.qq.com/s/yXWez_njIF7pltGeMlAxdQ',
              time: '2018-11-15',
          },
          {
              title: '翔安区委党校组织干部培训班学员考察十一维度公司',
              url: 'https://mp.weixin.qq.com/s/_C4pMxGa6Cm-WwAHjCZF0Q',
              time: '2018-12-04 ',
          },
          {
              title: '厦门翔安区创意之星评选活动完美收官',
              url: 'https://mp.weixin.qq.com/s/nCosFIckJMqvcZ6N_GfP6g',
              time: '2019-01-26',
          },
          {
              title: 'AR说丨2019应该如何重新定义互联网展示？',
              url: 'http://www.sohu.com/a/295739199_732038',
              time: '2019-02-19',
          },
          {
              title: '厦门翔安传统文创产品驶入虚拟现实技术快车道',
              url: 'http://xm.fjsen.com/2019-04/02/content_22136660.htm',
              time: '2019-04-02',
          },
          {
              title: '用激情描绘虚拟世界（海峡导报）',
              url: 'http://www.sohu.com/a/305363136_114890',
              time: '2019-04-02 ',
          },
          {
              title: '喜讯!十一维度荣获国家高新技术企业认证',
              url: 'https://mp.weixin.qq.com/s/ydcnko_429-Dn6BoO09wlg',
              time: '2019-04-03',
          },
          {
              title: '颠覆想象的医疗黑科技来了！VR让平面互联网瞬间变得不一样！',
              url: 'https://mp.weixin.qq.com/s/vWHk9tsLhJJG2aZXdQluRA',
              time: '2019-06-14',
          },
          {
              title: '热烈庆祝十一维度荣获“2019年度厦门市专精特新小微企业”称号',
              url: 'https://mp.weixin.qq.com/s/Lh-aYvXWKlDIG8rzWAhhJg',
              time: '2019-07-05',
          },
          {
              title: '厦门大学2019国家虚拟仿真实验教学项目体验',
              url: 'https://mp.weixin.qq.com/s/07yBSFG0qJOCaBoKvzyeCw',
              time: '2019-11-11',
          },
        ],
      newsTwoList: [
        {
          title: '十一维度实验室开发3D建模技术',
          url: 'https://mp.weixin.qq.com/s/QNqMhGyuEFbVbpRjy8PKRg',
          time: '2016-09-05',
        },
        {
          title: '福建省委常委、宣传部部长高翔莅临考察十一维度（厦视二套）',
          url: 'https://v.qq.com/x/page/u03079ygaof.html',
          time: '2016-06-20',
        },
        {
          title: '在虚拟世界中不断前行（海峡都市报）',
          url: 'http://szb.mnw.cn/html/2016-10/20/content_4429986.htm',
          time: '2016-10-20',
        },
        {
          title: '十一维度携众多合作伙伴亮相2016厦门文博会',
          url: 'https://mp.weixin.qq.com/s/tPAxoazVfmJJVGPR4re4eg',
          time: '2016-11-05',
        },
        {
          title: '民建企业一家亲，四省二市 民建企业家莅临十一维度考察',
          url: 'https://mp.weixin.qq.com/s/SfxbSVjOo3rFH3-ta6C5KA',
          time: '2017-02-26',
        },
        {
          title: '十一维度VR技术之花 绽放 淄博市高青县',
          url: 'https://mp.weixin.qq.com/s/b8sCP2Bv_0s6xxkDA9MAug',
          time: '2017-02-27',
        },
        {
          title: '天猫互动团队莅临十一维度，实地考察，洽谈类目合作',
          url: 'https://mp.weixin.qq.com/s/AYzBCdtKOLgS8BjmFZAWdA',
          time: '2017-02-22',
        },
        {
          title: '2017，我们迎来了第一批VR学员，认真学习的人最可爱',
          url: 'https://mp.weixin.qq.com/s/XHSUdtnReYvN96CozD2pzQ',
          time: '2017-02-23',
        },
        {
          title: '芜湖县电子商务招商中心洪少林先生一行到十一维度 实地考察',
          url: 'https://mp.weixin.qq.com/s/aEqqN4916F2Z_3fantHduQ',
          time: '2017-03-01',
        },
        {
          title: '十一维度将助力山东高青县产业升级',
          url: 'https://mp.weixin.qq.com/s/517g9fquaxGPNZxCP2EsPQ',
          time: '2017-03-11',
        },
        {
          title: '会员陈京鹭、余海箭入选厦门市第九批引进高层次人才“双百计划',
          url: 'https://mp.weixin.qq.com/s/WvjBGDS1tLm9r9SvlVzhcw',
          time: '2017-03-20',
        },
        {
          title: '十一维度 感恩过去三天 光临我们展会的所有人',
          url: 'https://mp.weixin.qq.com/s/LO4tCeyy5ILBLLAqaS3D6w',
          time: '2017-03-26',
        },
        {
          title: '香港六福金融友人 来访十一维度',
          url: 'https://mp.weixin.qq.com/s/gtP4b5ps36e46Il5ZJkwyg',
          time: '2017-03-30',
        },
      ],
    }
  },
  computed: {
      newsOne() {
        return this.newsOneList.reverse();
    },
      newsTwo() {
          return this.newsTwoList.reverse();
      }
  },
  mounted() {
    $(function () {
      $('#fullgage').fullpage({
        anchors: ['section1', 'section2', 'section3', 'section4', 'footer'],
        'navigation': true,
        verticalCentered: false,

        // slidesNavigation: true,
        loopHorizontal: true,
        // controlArrows: true,

        afterLoad: function (anchorLink, index) {
          if (index == '1') {
            $('.introduction').addClass('animated zoomIn');
            $('.pyramid').addClass('animated zoomIn');
          }
        },
        onLeave: function (index, direction) {
          if (index == '1') {
            $('.introduction').removeClass('animated zoomIn');
            $('.pyramid').removeClass('animated zoomIn');
          }
        }
      });
    });

    this.updateArchitectureSystemHeight()

    $(window).resize(() => {
      this.updateArchitectureSystemHeight()
    })

  },
  methods: {
    updateArchitectureSystemHeight() {
      $('.architecture-system').css({
        'height': $(window).height() + 'px',
        'padding-top': $('.header').height() + 'px'
      })
    },
  }
});
