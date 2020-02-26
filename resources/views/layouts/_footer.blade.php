<footer class="footer py-1 text-center">
  <p>
    <span>公司名称：十一维度（厦门）网络科技有限公司</span>
    <span>地址：厦门市翔安区新店镇鸿翔西路 1888 号海西明珠大厦</span>
    <br/>
    <span>© {{ now()->format('Y') }} All rights reserved {{ setting('icp') }}</span>
  </p>
</footer>

@push('scripts')
  <script>
      $(function () {
          var height = $(window).height(),
              main = $('main'),
              header = $('.header'),
              footer = $('.footer'),
              total = main.innerHeight() + header.innerHeight() + footer.innerHeight();

          if (total < height) {
              footer.css({'margin-top': (height - total) + 'px'});
          }
      });
  </script>
@endpush
