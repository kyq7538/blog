@extends('layouts.app')

@section('css')
<style>
    #yzm{
        width:130px;
        margin-top:14px;
    }
</style>
@endsection
@section('content')   
<div class="widewrapper main">
    <div class="container">
        <div class="row" style="margin:30px;">
            <div class="col-md-10 col-md-offset-1 clean-superblock" id="contact">
                <h2>Register</h2>

                <form action="{{ route('register') }}" method="POST" accept-charset="utf-8" class="contact-form form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label" style="margin-top:16px;font-size:18px;">姓名</label>

                        <div class="col-md-6">
                            <input id="name" type="name" class="form-control input-lg" placeholder="请输入一个名称" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="col-md-4 control-label" style="margin-top:16px;font-size:18px;">手机号</label>

                        <div class="col-md-6">
                            <input id="phone" type="phone" class="form-control input-lg" placeholder="请输入手机号" name="phone" value="{{ old('phone') }}" required autofocus>
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group" style="border:0px solid red">
                        <label for="phone" class="col-md-4 control-label" ></label>

                        <div class="col-md-4">
                            <input id="" type="text" placeholder="请输入验证码" class="form-control" name="" value="" required>
                        </div>
                        <button class="btn btn-info " id="yzm">获取验证码</button>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" style="margin-top:16px;font-size:18px;" class="col-md-4 control-label">密码</label>

                        <div class="col-md-6" style="border:0px solid red;margin-bottom:-50px">
                            <input id="password" type="password" class="form-control input-lg" placeholder="请输入密码" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" style="margin-top:16px;font-size:18px;" class="col-md-4 control-label">确认密码</label>

                        <div class="col-md-6" style="border:0px solid red;margin-bottom:-50px">
                            <input id="password-confirm" type="password" class="form-control input-lg" placeholder="请确认密码" name="password_confirmation" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            
                            <button type="submit" class="btn btn-primary" >
                                Register
                            </button>
                            
                        </div>
                    </div>                 
                </form>
            </div>
        </div>        
    </div>
</div>
@endsection
@section('js')
<script>
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    var nums=10;
    var time;
    $('#yzm').click(function(){
        var num=nums;
        var phone=$('#phone').val(); // 获取要发送的手机号码
        $.ajax({
            url:'api/verificationcodes',
            data:{phone:phone},
            type:'post',
            success:function(obj){
                 time=setInterval(function(){  //设置定时器
                    $('#yzm').html(num+'秒后可重新获取').attr('disabled'); //将元素内容修改且禁止按钮
                    if(num--==0){
                        clearInterval(time); //清除定时器
                        $('#yzm').removeAttr('disabled').html('重新获取验证码'); //开启按钮并且将元素内容改回来
                    }
                },1000);
            }
        })
        return false;
    });
     // $('.imgcode').click(function(){
     //    var phone = $('#phone').val();
     //    $.ajax({

     //        url:'api/verificationcodes',
     //        data:{phone:phone},
     //        type:'post',
     //        success:function(obj){

     //            $('#key').val(obj.key);
     //            var obj = $('.imgcode');  
     //            // 重新发送倒计时  
     //            var validCode = true;  
     //            var time=10;  
     //            if (validCode) {  
     //                validCode = false;  
     //                var t = setInterval(function  () {  
     //                    time --;  
     //                    $(obj).html('重新获取('+time+'s)');
     //                    $(obj).attr('disabled','disabled');  
     //                    if (time==0) {  
     //                        clearInterval(t);  
     //                        $(obj).html("重新获取"); 
     //                        $(obj).removeAttr('disabled'); 
     //                        validCode = true;  
     //                        sms_flag = true;  
     //                    }  
     //                },1000);  
     //            }  
     //        }
     //    })
</script>
@endsection
