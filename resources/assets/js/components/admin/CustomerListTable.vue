<template lang="html">
  <div class="content">
      <div class="row">
          <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Customers Table</h3>

                  <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-striped table-hover" >
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Join</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>

                      <tr v-for="user in allUser">
                        <td>{{user.id}}</td>
                        <td >
                            <i v-show="user.provider" :title="'This user registered using' + user.provider" :class="'fa fa-' + user.provider"></i> &nbsp; &nbsp;
                            {{user.name}}
                        </td>
                        <td>{{ user.created_at | moment("MMMM Do YYYY") }}</td>
                        <td>
                            <span class="label label-success">
                                <a title="Click to Inactive Custommer" style="color:white" href="">
                                    Active
                                </a>
                            </span>
                            <span class="label label-danger">
                                <a title="Click to Active Custommer" style="color:white" href="">
                                    Inactive
                                </a>
                            </span>
                        </td>
                        <td>
                            <a href=""><i class="fa fa-eye text-primary"></i></a>
                            &nbsp;
                            <a href=""><i class="fa fa-edit text-info"></i></a>
                            &nbsp;
                           <a href=""><i class="fa fa-trash text-danger"></i></a>
                       </td>
                      </tr>
                  </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">

                </div>
              </div>
              <!-- /.box -->
          </div>
      </div>
  </div>
</template>

<script>
export default {
  props: ['users'],
  data () {
    return {
      allUser: [],
      paginate: []
    }
  },
  created() {
    this.allUser = this.users.data;
    this.paginate = this.users;
  },
  methods: {
    urlSync(page, title, url) {
      if ("undefined" !== typeof history.pushState) {
        history.pushState({page: page}, title, url);
      } else {
        window.location.assign(url);
      }
    }
  }
}
</script>

<style lang="css">
</style>
