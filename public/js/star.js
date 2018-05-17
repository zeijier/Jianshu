$.ajaxSetup({
   headers:{
       'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
   } //因为是post提交  所以在这里要设置header的csrf token，还要在layouts.app.blade.php 设置meta 标签
//<meta name="csrf-token" content="{{csrf_field()}}">
});
$(function () {
    $('#star').click(function (event) {
        var target = $(event.target);
        var num = target.attr('like-value');
        var user = target.attr('like-user');
        // if(num==1){
        //     $.ajax({
        //         url:'http://jianshufind.xyz/star',
        //         method:'post',
        //         data:{'num':num,'id':user},
        //         datatype:'json',
        //         success:function (back) {
        //             target.attr("like-value",0);
        //             target.text('取消关注')
        //         }
        //     });
        // }else {
        //     $.ajax({
        //         url: 'http://jianshufind.xyz/star',
        //         method: 'post',
        //         data: {'num': num, 'id': user},
        //         datatype: 'json',
        //         success: function (back) {
        //             target.attr("like-value", 1);
        //             target.text('关注他')
        //         }
        //     });
        // }
        $.ajax({
            url:'http://jianshufind.xyz/star',
            method:'post',
            data:{'num':num,'id':user},
            datatype:'json',
            success:function () {
                if(num==1){
                    target.attr("like-value",0);
                    target.text('取消关注')
                }else {
                    target.attr("like-value",1);
                    target.text('关注')
                }

            }
        });
    })
});