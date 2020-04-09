function logoutchk(){
		value=document.getElementById("log").innerText;
		if(value==="로그아웃"){
			if(confirm("로그아웃하시겠습니까?")){
			location.href = "main.php";
			return true;
	    } else {
	        return false;
	    }
		}
}//로그아웃 체크
function goPost(user_id,num){
	var form = document.writeform;
	var Categorylink=document.getElementById('Categorylink');
	value=document.getElementById('menu_hidden').value;
	
	switch(num){
		case 1:
			Categorylink.setAttribute("action","호기심탐구.php");
			break;
		case 2:
			Categorylink.setAttribute("action","스케치북.php");
			break;
		case 3:
			Categorylink.setAttribute("action","play.php");
			break;
		case 3:
			Categorylink.setAttribute("action","home.php");
			break;
	}
	form.user_id.value=user_id;
	
	form.submit();
}//카테고리 선텍후 넘어감 
function logchk(){
		value=document.getElementById('menu_hidden').value;

		if(!empty(value)){
			alert(value);
			document.form.submit();
		}
	}// 메뉴를 클릭했을때 로그인을 했는지 안했는지 체크하고 경로 지정
$(document).ready(function () {
});
$(document).ready(function () {
    var toggleStyleSwitcher = function () {
        $('#morespan').addClass('bold');
    };
    $('#moremenu').addClass('hidden');

    $('#moreButton').click(function (event) {
        $('#moremenu').toggleClass('hidden');
    });

    $('div:contains("내용 더보기")').click(toggleStyleSwitcher);
});//더보기