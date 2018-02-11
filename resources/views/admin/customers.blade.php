@extends('layouts.admin')

@section('content')
<style media="screen">
  .loading {
    opacity: 0.5;
  }
</style>
{{-- @component('comps.breadcrumb',[
  'pages'=> [
      'admin',
      'customers'
    ]
  ])
@endcomponent --}}
@include('comps.breadcrumb')

    <div id="customers" class="content">
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
                  <div class="box-body no-padding">
                    <table class="table table-striped table-hover" :class="{loading:isLoading}">
                        <tr>
                          <th v-for="th in th">@{{ th }}</th>
                        </tr>
                        <tr v-for="(user, index) in getUser">
                          <td>@{{index+1}}</td>
                          <td>
                              <i v-if="user.provider" :title="'This user registered using '+ user.provider" :class="'fa fa-'+[user.provider]"></i> &nbsp; &nbsp;
                              @{{ user.name }}
                          </td>
                          <td>@{{user.created_at}}</td>
                          <td>
                              <span  :class="['label', user.status ? 'label-success' : 'label-danger']">
                                  <a :title="user.status ? 'Click to Inactive Custommer': 'Click to Active Custommer'"
                                      style="color:white"
                                      href="javascript:void(0)"
                                      @click="statusChange(user)" >
                                      @{{user.status ? 'Active': 'Inactive'}}
                                  </a>
                              </span>
                          </td>
                          <td>
                              <a :href="baseUrl + '/admin/customers/'+ user.id +'/show'"><i class="fa fa-eye text-primary"></i></a>
                              &nbsp;
                              <a :href="baseUrl + '/admin/customers/'+ user.id +'/edit'"><i class="fa fa-edit text-info"></i></a>
                              &nbsp;
                             <a @click="deleteUser(index, user.id)"
                                href="javascript:void(0)">
                                <i class="fa fa-trash text-danger"></i>
                              </a>
                         </td>
                        </tr>
                    </table>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        {{-- Previous Page Link --}}
                        <li :class="[pagination.prev_page_url ? '' : 'disabled']">
                          <a
                              @click="fetchUser(pagination.prev_page_url)"
                              href="javascript:void(0)"
                              rel="prev">&laquo;</a>
                        </li>
                        {{-- <li class="disabled"><span>{{ $element }}</span></li> --}}
                        <li class="active"><span>@{{ pagination.current_page }}</span></li>
                        <li :class="[pagination.next_page_url ? '' : 'disabled']" >
                          <a
                              @click="fetchUser(pagination.next_page_url)"
                              href="javascript:void(0)"
                              rel="next">&raquo;</a>
                        </li>
                    </ul>
                  </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
@endsection
@push('scripts')
  <script type="text/javascript">
    var customers = new Vue({
      el: '#customers',
      data: {
        baseUrl: '{{ url('/') }}',
        active: false,
        users: {!! json_encode($users) !!},
        th: [ 'Id', 'Name', 'Join', 'Status', 'Action' ],
        pagination: {},
        isLoading: false
      },
      created() {
        this.makePagination(this.users);
        // this.getUser(this.users.data);
      },
      computed: {
        getUser() {
          return this.users.data;
        }
      },
      methods: {
        deleteUser(index, uid){

          let url = this.baseUrl + '/admin/customers/'+ uid +'/delete';
          swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
          }).then((result) => {
            if (result.value) {
              this.getUser.splice(index, 1);
              axios.get(url)
                    .then((response) => {
                      swal(
                        'Deleted!',
                         response.data,
                        'success'
                      )
                    })
            } else if (result.dismiss === 'cancel') {
              swal(
                'Cancelled',
                'Your Valuable Customer is safe :)',
                'error'
              )
            }
          })
        },
        statusChange(user) {
          user.status = !user.status
          axios.get(this.baseUrl + '/admin/customers/'+ user.id +'/status')
                .then((response) => { })
        },
        fetchUser: function (page_url) {
          this.isLoading = true;
          let vm = this;
          page_url = page_url || '/admin/customers'
          axios.get(page_url)
            .then(function (response) {
              vm.makePagination(response.data);
              vm.users = response.data;
              vm.urlSync("pagination", "All Customers List", 'customers?page'+response.data.current_page);
              vm.isLoading = false;
            })
            .catch(function (error) {
              console.log(error);
            });
        },
        makePagination: function(data){
            let pagination = {
                total: data.total,
                first_page_url: data.first_page_url,
                current_page: data.current_page,
                last_page: data.last_page,
                next_page_url: data.next_page_url,
                prev_page_url: data.prev_page_url
            }
            return this.pagination = pagination;
        },
        urlSync(page, title, url) {
          if ("undefined" !== typeof history.pushState) {
            history.pushState({page: page}, title, url);
          } else {
            window.location.assign(url);
          }
        }

      }

    })
  </script>
@endpush
