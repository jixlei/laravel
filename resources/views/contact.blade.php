@extends('layouts.app')

@section('title', 'contact')

@section('content')
<div class="content">
    <div class="container">
        <!--start-contact-->
        <div class="contact">
            <div class="section group">
                <div class="col-md-4 col span_1_of_3">
                    <div class="contact_info">
                        <h3>位置</h3>
                        <h5> </h5>
                        <div class="clearfix"> </div>
                        <div class="map">
                            {!! $map->content !!}
                        </div>
                    </div>
                    <div class="company_address">
                        <h3>联系方式</h3>
                        <h5> </h5>
                        <div class="clearfix"> </div>
                        <p>手机：{{ $footer['contact']->phone }}</p>
                        <p>QQ：:{{ $footer['contact']->qq }}</p>
                        <p>Email:
                            <span>
                                <a href="mailto:{{ $footer['contact']->email }}">{{ $footer['contact']->email }}</a>
                            </span>
                        </p>
                        <p>地址：{{ $footer['contact']->address }}</p>
                    </div>
                </div>
                <div class="col-md-8 col span_2_of_3">
                    <div class="contact-form">
                        <h3>联系我们</h3>
                        <h5> </h5>
                        <div class="clearfix"> </div>
                        <form>
                            <div>
                                <span><label>姓名：</label></span>
                                <span>
                                    <input type="text" class="textbox" name="name" require>
                                </span>
                            </div>
                            <div>
                                <span><label>手机：</label></span>
                                <span>
                                    <input type="text" class="textbox" name="mobile" require>
                                </span>
                            </div>
                            <div>
                                <span><label>邮箱：</label></span>
                                <span>
                                    <input type="text" class="textbox" name="email">
                                </span>
                            </div>
                            <div>
                                <span><label>内容：</label></span>
                                <span>
                                    <textarea name="content" require> </textarea>
                                </span>
                            </div>
                            <div>
                                <span>
                                    <input type="submit" value="发送">
                                </span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--End-contact-->
        <div class="clearfix"> </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(function () {
        $("form").submit(function(e){
            e.preventDefault();
            var email = $('[name=email]').val();
            var name = $('[name=name]').val();
            var mobile = $('[name=mobile]').val();
            var content = $('[name=content]').val();
            $.post('/newmsg',{'_token':'{{csrf_token()}}','email':email, 'name':name, 'mobile':mobile, 'content':content},function(data){
               var jsondata = $.parseJSON(data);
                alert(jsondata.msg);
                window.location.reload()
            });
        });
    });
</script>
@endpush