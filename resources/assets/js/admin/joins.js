Vue.component('v-admin-joins', {
  data() {
    return {
      list: [],
      search: {
        k: '',
        page: 1
      },
      paginate: {
        total: 0,
        per_page: 1,
        current: 1
      }
    }
  },
  mounted() {
    this.getList()
  },
  methods: {
    getList(page = 1) {
      this.search.page = _.defaultTo(page, 1)

      if (!_.isInteger(this.search.page)) {
        this.search.page = 1
      }

      this.$http.get('', { params: this.search }).then(response => {
        const data = response.data

        this.list = data.data

        this.paginate.total = data.meta.total
        this.paginate.per_page = data.meta.per_page
        this.paginate.current = data.meta.current_page
      })
    },
  }
})
