var postId=0;
$('.like').on('click',function(event){

    event.preventDefault();
    postId=event.target.parentNode.parentNode.dataset['postid'];
    var isLike=event.target.previousElementSibling==null;

    $.ajax({
        method:'POST',
        url:urlLike,
        data:{isLike: isLike,postId: postId,_token:token}
    })
    .done(function(){
        event.target.innerText=isLike ? event.target.innerText=='Like' ?'You and ' :'Like':event.target.innerText=='Unlike'?'You Dont Like this ':'Unlike';

        if(isLike){
            event.target.nextElementSibling.innerText='Unlike';
        }
        else{
            event.target.previousElementSibling.innerText='Like';

        }
    });
});