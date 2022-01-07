
        // $(document).ready(function()){
        //     $(document).on("click", "#saveLikeDislike", function() {
        //     var url = "{{URL('/topics/'.$topics->id)}}";
        //     var id=
        //         $.ajax({
        //             url: url,
        //             cache: false,
        //             data:{
        //                 _token:'{{ csrf_token() }}',
        //                     like_count: $('#like'),
        //                     dislike_count: $('#dislike')
        //             }
        //         })
        // })
        // }

        // $('.like').on('click', function(event){
        //     event.preventDefault();
        //     postId = event.target.parentNode.parentNode.dataset['postid'];
        //     var isLike = event.target.previousElementSibling == null;
        //     var url = "{{URL('/topics/'.$topics->id)}}";
        //     $.ajax({
        //         method : 'POST',
        //         url : urlLike,
        //         data : {isLike: isLike, postId: postId, _token:token}
        //     })
        //     .done(function(){
        //         if (isLike) {
        //             event.target.nextElementSibling.innerText = 'Dislike';
        //         } else {
        //             event.target.previousElementSibling.innerText
        //         }
        //     });
        // })

        // $(document).on('click','#saveLikeDislike',function(){
        //     var _topic=$(this).data('topic');
        //     var _type=$(this).data('type');
        //     var vm=$(this);
        //     $.ajax({
        //         url:"{{url('save-likedislike')}}",
        //         type:"post",
        //         dataType:'json',
        //         data:{
        //             post:_topic,
        //             type:_type,
        //             _token:"{{ csrf_token() }}"
        //         },
        //         beforeSend:function(){
        //             vm.addClass('disabled');
        //         },
        //         success:function(res){
        //             if(res.bool==true){
        //                 vm.removeClass('disabled').addClass('active');
        //                 vm.removeAttr('id');
        //                 var _preCount=$("."+_type+"-count".text());
        //                 _prevCount++;
        //                 $("."+_type+"-count").text(_prevCount);
        //             }
        //         }
        //     });
        // });